const AOE_OFFSET_HOURS = -12;

const DATE_FORMATTER = new Intl.DateTimeFormat("en-GB", {
  day: "numeric",
  month: "long",
  year: "numeric",
  timeZone: "UTC",
});

const SHORT_DATE_FORMATTER = new Intl.DateTimeFormat("en-GB", {
  day: "numeric",
  month: "short",
  year: "numeric",
  timeZone: "UTC",
});

const MONTH_FORMATTER = new Intl.DateTimeFormat("en-GB", {
  month: "long",
  timeZone: "UTC",
});

// get UTC offset from city time zone
function getUTCOffset(cityTimeZone, date = new Date()) {
  const utcDate = new Date(date.toLocaleString("en-GB", { timeZone: "UTC" }));
  const cityDate = new Date(
    date.toLocaleString("en-GB", { timeZone: cityTimeZone }),
  );
  const diffMinutes = (cityDate - utcDate) / (1000 * 60);

  const sign = diffMinutes >= 0 ? "+" : "-";
  const absMins = Math.abs(diffMinutes);
  const hours = String(Math.floor(absMins / 60)).padStart(2, "0");
  const minutes = String(absMins % 60).padStart(2, "0");

  return `${sign}${hours}:${minutes}`;
}
// console.log(getUTCOffset('Europe/Paris')); // Returns current offset e.g. "+02:00"

function nowAoE() {
  return new Date(Date.now() + AOE_OFFSET_HOURS * 3600000);
}

function todayAoEIso() {
  return nowAoE().toISOString().slice(0, 10);
}

function localMidnightBefore(date) {
  const parts = new Intl.DateTimeFormat("en-CA", {
    year: "numeric",
    month: "2-digit",
    day: "2-digit",
  }).formatToParts(date);

  const values = Object.fromEntries(
    parts
      .filter((part) => part.type !== "literal")
      .map((part) => [part.type, Number(part.value)]),
  );

  return new Date(values.year, values.month - 1, values.day - 1, 0, 0, 0, 0);
}

function isUrgentDeadline(d, now) {
  if (!d) return false;

  const deadlineInstant = new Date(
    Date.UTC(
      d.getUTCFullYear(),
      d.getUTCMonth(),
      d.getUTCDate() + 1,
      12,
      0,
      0,
      0,
    ),
  );

  const highlightStart = localMidnightBefore(deadlineInstant);

  return now >= highlightStart && now < deadlineInstant;
}

function parseIsoDate(iso) {
  if (!iso || !/^\d{4}-\d{2}-\d{2}$/.test(iso)) return null;

  const [year, month, day] = iso.split("-").map(Number);
  const date = new Date(Date.UTC(year, month - 1, day));

  if (
    date.getUTCFullYear() !== year ||
    date.getUTCMonth() !== month - 1 ||
    date.getUTCDate() !== day
  ) {
    return null;
  }

  return date;
}

function fmtDate(value) {
  const d = parseIsoDate(value);
  if (!d) return value || "–";
  return DATE_FORMATTER.format(d);
}

function fmtDateShort(value) {
  const d = parseIsoDate(value);
  if (!d) return value || "–";
  MONTH_FORMATTER.format(d);
}

function fmtDateRange(start, end) {
  if (!start && !end) return "–";
  if (!start || !end) return fmtDate(start || end);
  if (start === end) return fmtDate(start);

  const startDate = parseIsoDate(start);
  const endDate = parseIsoDate(end);

  if (!startDate || !endDate) {
    return `${fmtDate(start)}–${fmtDate(end)}`;
  }

  const startDay = startDate.getUTCDate();
  const endDay = endDate.getUTCDate();
  const startMonth = MONTH_FORMATTER.format(startDate);
  const endMonth = MONTH_FORMATTER.format(endDate);

  const startYear = startDate.getUTCFullYear();
  const endYear = endDate.getUTCFullYear();

  if (startMonth === endMonth && startYear === endYear) {
    return `${startDay}–${endDay} ${startMonth} ${startYear}`;
  }

  if (startYear === endYear) {
    return `${startDay} ${startMonth}–${endDay} ${endMonth} ${startYear}`;
  }

  return `${fmtDate(start)}–${fmtDate(end)}`;
}

function dateSummary(sortedDates) {
  const day = (d) => d.getUTCDate();
  const month = (d) => MONTH_FORMATTER.format(d);
  const year = (d) => d.getUTCFullYear();
  const summaries = [];

  for (let i = 0; i < sortedDates.length; i += 2) {
    const group = sortedDates.slice(i, i + 2);

    const sameMonth = group.every(
      (d) => month(d) === month(group[0]) && year(d) === year(group[0]),
    );

    const sameYear = group.every((d) => year(d) === year(group[0]));

    if (sameMonth) {
      summaries.push(
        `${group.map(day).join("/")} ${month(group[0])} ${year(group[0])}`,
      );
    } else if (sameYear) {
      summaries.push(
        `${group
          .map((d) => `${day(d)} ${month(d)}`)
          .join("/")} ${year(group[0])}`,
      );
    } else {
      summaries.push(
        group.map((d) => fmtDate(d.toISOString().slice(0, 10))).join(" / "),
      );
    }
  }

  return summaries;
}

function formatDateSummary(items, summaryBuilder) {
  if (!items || !items.length) return document.createTextNode("–");

  if (items.length === 1) {
    return document.createTextNode(fmtDate(items[0].date));
  }

  const validItems = items.filter((item) => parseIsoDate(item.date));

  if (!validItems.length) return document.createTextNode("–");

  const sortedDates = validItems
    .map((item) => parseIsoDate(item.date))
    .sort((a, b) => a - b);

  const summaries = summaryBuilder(sortedDates);

  const wrap = createEl("span", "tooltip-wrap");
  const trigger = createEl("span", "deadline-chip is-multi");

  summaries.forEach((summary, index) => {
    if (index > 0) trigger.appendChild(document.createElement("br"));

    trigger.appendChild(document.createTextNode(summary));
  });

  wrap.appendChild(trigger);

  const tip = createEl("div", "tooltip-box");
  const list = createEl("ul");

  // Use the original items here: show ALL deadlines, including passed ones.
  items.forEach((item) => {
    const li = createEl("li");
    const label = item.label ? `${item.label}: ` : "";
    li.textContent = `${label}${fmtDate(item.date)}`;
    list.appendChild(li);
  });

  tip.appendChild(list);
  wrap.appendChild(tip);

  return wrap;
}

function formatDateArray(items) {
  if (!items || !items.length) {
    return document.createTextNode("–");
  }

  if (items.length === 1) {
    return document.createTextNode(fmtDate(items[0].date));
  }

  const validItems = items.filter((item) => parseIsoDate(item.date));

  if (!validItems.length) {
    return document.createTextNode(
      items.map((item) => fmtDate(item.date)).join(" / "),
    );
  }

  const sortedDates = validItems
    .map((item) => parseIsoDate(item.date))
    .sort((a, b) => a - b);

  const summaries = dateSummary(sortedDates);

  const wrap = createEl("span", "tooltip-wrap");
  const trigger = createEl("span", "deadline-chip is-multi");

  summaries.forEach((summary, index) => {
    if (index > 0) {
      trigger.appendChild(document.createElement("br"));
    }

    trigger.appendChild(document.createTextNode(summary));
  });

  wrap.appendChild(trigger);

  const tip = createEl("div", "tooltip-box");
  const list = createEl("ul");

  items.forEach((item) => {
    const li = createEl("li");
    const label = item.label ? `${item.label}: ` : "";
    li.textContent = `${label}${fmtDate(item.date)}`;
    list.appendChild(li);
  });

  tip.appendChild(list);
  wrap.appendChild(tip);

  return wrap;
}

function getMaxDeadlineIso(conf) {
  const values = (conf.deadlines || [])
    .map((d) => d.date)
    .filter(Boolean)
    .sort();
  return values.length ? values[values.length - 1] : null;
}

function getMinFutureDeadlineIso(conf, todayIso) {
  const values = (conf.deadlines || [])
    .map((d) => d.date)
    .filter(Boolean)
    .sort();
  return values.find((v) => v >= todayIso) || null;
}

function nowInTimeZoneIso(timezone) {
  if (!timezone) {
    const now = nowAoE();

    return (
      `${now.toISOString().slice(0, 10)}T` +
      `${String(now.getUTCHours()).padStart(2, "0")}:` +
      `${String(now.getUTCMinutes()).padStart(2, "0")}`
    );
  }

  const parts = new Intl.DateTimeFormat("en-CA", {
    timeZone: timezone,
    year: "numeric",
    month: "2-digit",
    day: "2-digit",
    hour: "2-digit",
    minute: "2-digit",
    hourCycle: "h23",
  }).formatToParts(new Date());

  const values = Object.fromEntries(
    parts
      .filter((part) => part.type !== "literal")
      .map((part) => [part.type, part.value]),
  );

  return `${values.year}-${values.month}-${values.day}T${values.hour}:${values.minute}`;
}

function classifyConference(conf, todayIso) {
  const maxDeadline = getMaxDeadlineIso(conf);
  const start = conf.start || null;
  const end = conf.end || conf.start || null;

  // Keep deadline classification exactly AoE-based.
  if (maxDeadline && maxDeadline >= todayIso) {
    return "ahead";
  }

  if (!start) {
    return "hidden";
  }

  const now = nowInTimeZoneIso(conf.timezone || "");

  // A conference starts running at 06:00 local time on its start date.
  if (now < `${start}T06:00`) {
    return "future";
  }

  // It remains running through 20:00 local time on its end date.
  if (now <= `${end}T20:00`) {
    return "running";
  }

  return "hidden";
}

function formatLocation(conf) {
  return [conf.city, conf.country].filter(Boolean).join(", ") || "–";
}

function createEl(acronym, className, text) {
  const el = document.createElement(acronym);
  if (className) el.className = className;
  if (text !== undefined) el.textContent = text;
  return el;
}

function buildConferenceCell(conf) {
  const td = createEl("td", "conference-name");

  const wrap = createEl("span", "tooltip-wrap");

  const link = createEl("a");
  link.href = conf.url || "#";

  if (conf.url) {
    link.target = "_blank";
    link.rel = "noopener noreferrer";
  }

  link.textContent = conf.acronym || conf.name || "–";

  wrap.appendChild(link);

  if (conf.name && conf.name !== conf.acronym) {
    const tip = createEl("div", "tooltip-box");
    tip.textContent = conf.name;
    wrap.appendChild(tip);
  }

  td.appendChild(wrap);

  return td;
}

function formatDeadlineSummary(items, now) {
  if (!items || !items.length) return document.createTextNode("–");

  if (items.length === 1) {
    const span = createEl("span");

    const d = parseIsoDate(items[0].date);
    if (d && isUrgentDeadline(d, now)) {
      span.className = "deadline-urgent";
    }

    span.textContent = fmtDate(items[0].date);
    return span;
  }

  const validItems = items
    .map((item) => ({
      item,
      date: parseIsoDate(item.date),
    }))
    .filter(({ date }) => date)
    .sort((a, b) => a.date - b.date);

  if (!validItems.length) return document.createTextNode("–");

  const result = createEl("span", "deadline-summary");
  const day = (d) => d.getUTCDate();
  const month = (d) => MONTH_FORMATTER.format(d);
  const year = (d) => d.getUTCFullYear();

  for (let i = 0; i < validItems.length; i += 2) {
    const group = validItems.slice(i, i + 2);

    if (i > 0) result.appendChild(document.createElement("br"));

    const urgent = group.map(({ date }) => isUrgentDeadline(date, now));
    const anyUrgent = urgent.some(Boolean);

    const sameMonth = group.every(
      ({ date }) =>
        month(date) === month(group[0].date) &&
        year(date) === year(group[0].date),
    );

    const sameYear = group.every(
      ({ date }) => year(date) === year(group[0].date),
    );

    const add = (text, isUrgent) => {
      const span = document.createElement("span");
      if (isUrgent) span.className = "deadline-urgent";
      span.textContent = text;
      result.appendChild(span);
    };

    if (sameMonth) {
      group.forEach(({ date }, index) => {
        if (index > 0) {
          result.appendChild(document.createTextNode("/"));
        }
        add(String(day(date)), urgent[index]);
      });

      add(` ${month(group[0].date)} `, anyUrgent);
      add(String(year(group[0].date)), anyUrgent);
    } else if (sameYear) {
      group.forEach(({ date }, index) => {
        if (index > 0) {
          result.appendChild(document.createTextNode("/"));
        }
        add(`${day(date)} ${month(date)}`, urgent[index]);
      });

      add(` ${year(group[0].date)}`, anyUrgent);
    } else {
      group.forEach(({ item }, index) => {
        if (index > 0) {
          result.appendChild(document.createTextNode(" / "));
        }
        add(fmtDate(item.date), urgent[index]);
      });
    }
  }

  const wrap = createEl("span", "tooltip-wrap");
  wrap.appendChild(result);

  const tip = createEl("div", "tooltip-box");
  const list = createEl("ul");

  items.forEach((item) => {
    const li = createEl("li");
    const label = item.label ? `${item.label}: ` : "";
    li.textContent = `${label}${fmtDate(item.date)}`;
    list.appendChild(li);
  });

  tip.appendChild(list);
  wrap.appendChild(tip);

  return wrap;
}

function renderDeadlineCell(conf) {
  const td = createEl("td", "deadline-col deadline-cell");
  const deadlines = conf.deadlines || [];

  const now = new Date();

  const urgent = deadlines.some((item) => {
    const d = parseIsoDate(item.date);
    return isUrgentDeadline(d, now);
  });

  if (urgent) td.classList.add("is-urgent");

  // Always display all deadlines, including passed ones.
  td.appendChild(formatDeadlineSummary(deadlines, now));

  return td;
}

function renderNotificationCell(conf) {
  const td = createEl("td", "notification-col");

  td.appendChild(formatDateSummary(conf.notification || [], dateSummary));

  return td;
}

function getRemarks(conf) {
  return conf.remarks || "";
}

function renderHtmlCell(html) {
  const td = createEl("td", "comments-col");
  td.innerHTML = html || "–";
  return td;
}

function renderAheadRow(conf, tbody) {
  const tr = createEl("tr");
  tr.appendChild(buildConferenceCell(conf));
  tr.appendChild(createEl("td", "location", formatLocation(conf)));
  tr.appendChild(renderDeadlineCell(conf));
  tr.appendChild(
    createEl("td", "date-col", fmtDateRange(conf.start, conf.end)),
  );
  tr.appendChild(renderNotificationCell(conf));
  tr.appendChild(renderHtmlCell(conf.submission_requirements));
  tbody.appendChild(tr);
}

function renderRunningRow(conf, tbody) {
  const tr = createEl("tr");
  tr.appendChild(buildConferenceCell(conf));
  tr.appendChild(createEl("td", "location", formatLocation(conf)));
  tr.appendChild(
    createEl("td", "date-col", fmtDateRange(conf.start, conf.end)),
  );
  tr.appendChild(renderHtmlCell(getRemarks(conf)));
  tbody.appendChild(tr);
}

function renderFutureRow(conf, tbody) {
  const tr = createEl("tr");
  tr.appendChild(buildConferenceCell(conf));
  tr.appendChild(createEl("td", "location", formatLocation(conf)));
  tr.appendChild(
    createEl("td", "date-col", fmtDateRange(conf.start, conf.end)),
  );
  tr.appendChild(renderNotificationCell(conf));

  const finalTd = createEl("td", "final-version-col");
  finalTd.appendChild(formatDateArray(conf.final_version));
  tr.appendChild(finalTd);

  const regTd = createEl("td", "early-registration-col");
  regTd.appendChild(formatDateArray(conf.early_registration));
  tr.appendChild(regTd);

  tr.appendChild(renderHtmlCell(getRemarks(conf)));
  tbody.appendChild(tr);
}

function renderPlanningRow(conf, tbody) {
  const tr = createEl("tr");
  tr.appendChild(buildConferenceCell(conf));
  tr.appendChild(createEl("td", "location", formatLocation(conf)));
  tr.appendChild(
    createEl("td", "date-col", fmtDateRange(conf.start, conf.end)),
  );
  tr.appendChild(renderHtmlCell(conf.remarks || ""));
  tbody.appendChild(tr);
}

function renderIncludedRow(conf, tbody) {
  const tr = createEl("tr");
  tr.appendChild(createEl("td", "", conf.acronym || "–"));
  tr.appendChild(createEl("td", "", conf.name || "–"));
  tbody.appendChild(tr);
}

function fillEmpty(tbody, cols) {
  const tr = createEl("tr", "empty-row");
  const td = createEl("td");
  td.colSpan = cols;
  td.textContent = "No conferences in this section at the current AoE time.";
  tr.appendChild(td);
  tbody.appendChild(tr);
}

function sortAhead(a, b) {
  return (
    (a._sortDeadline || "9999-99-99").localeCompare(
      b._sortDeadline || "9999-99-99",
    ) || (a.acronym || "").localeCompare(b.acronym || "")
  );
}
function sortRunning(a, b) {
  return (
    (a.start || "").localeCompare(b.start || "") ||
    (a.end || "").localeCompare(b.end || "") ||
    (a.acronym || "").localeCompare(b.acronym || "")
  );
}
function sortFuture(a, b) {
  return (
    (a.start || "").localeCompare(b.start || "") ||
    (a.end || "").localeCompare(b.end || "") ||
    (a.acronym || "").localeCompare(b.acronym || "")
  );
}

function setMailLink(id, subject, template) {
  const link = document.getElementById(id);
  if (!link) return;
  const body = JSON.stringify(template, null, 2);

  link.href =
    `mailto:${EMAILS.hermann}` +
    `?cc=${encodeURIComponent(EMAILS.krejca)}` +
    `&subject=${encodeURIComponent(subject)}` +
    `&body=${encodeURIComponent(body)}`;
}

async function main() {
  const zone = Intl.DateTimeFormat().resolvedOptions().timeZone;
  const offsetMin = -nowAoE().getTimezoneOffset();
  const sign = offsetMin >= 0 ? "+" : "-";
  const abs = Math.abs(offsetMin);
  const hh = String(Math.floor(abs / 60)).padStart(2, "0");
  const mm = String(abs % 60).padStart(2, "0");
  document.getElementById("user-timezone").textContent =
    `UTC${sign}${hh}:${mm} (${zone})`;

  const response = await fetch("conferences.json", { cache: "no-store" });
  if (!response.ok) throw new Error("Failed to load conferences.json");
  const conferences = await response.json();
  const todayIso = todayAoEIso();
  const included = conferences;

  const ahead = [];
  const running = [];
  const future = [];

  const planningResponse = await fetch("planning.json", {
    cache: "no-store",
  });
  if (!planningResponse.ok) throw new Error("Failed to load planning.json");
  const planning = await planningResponse.json();

  const templatesResponse = await fetch("templates.json", {
    cache: "no-store",
  });
  if (!templatesResponse.ok) throw new Error("Failed to load templates.json");
  const templates = await templatesResponse.json();

  conferences.forEach((conf) => {
    const cls = classifyConference(conf, todayIso);
    if (cls === "ahead") ahead.push(conf);
    else if (cls === "running") running.push(conf);
    else if (cls === "future") future.push(conf);
  });

  ahead.forEach((conf) => {
    conf._sortDeadline = getMinFutureDeadlineIso(conf, todayIso);
  });

  ahead.sort(sortAhead);
  running.sort(sortRunning);
  future.sort(sortFuture);

  const aheadBody = document.querySelector("#section-ahead tbody");
  const runningBody = document.querySelector("#section-running tbody");
  const futureBody = document.querySelector("#section-future tbody");
  const planningBody = document.querySelector("#section-planning tbody");
  const includedBody = document.querySelector("#included-body");

  if (ahead.length) ahead.forEach((conf) => renderAheadRow(conf, aheadBody));
  else fillEmpty(aheadBody, 6);
  if (running.length)
    running.forEach((conf) => renderRunningRow(conf, runningBody));
  else fillEmpty(runningBody, 4);
  if (future.length)
    future.forEach((conf) => renderFutureRow(conf, futureBody));
  else fillEmpty(futureBody, 7);

  const sortedPlanning = planning
    .slice()
    .sort(
      (a, b) =>
        (a.start || "").localeCompare(b.start || "") ||
        (a.end || "").localeCompare(b.end || "") ||
        (a.acronym || "").localeCompare(b.acronym || ""),
    );

  if (sortedPlanning.length)
    sortedPlanning.forEach((conf) => renderPlanningRow(conf, planningBody));
  else fillEmpty(planningBody, 4);

  if (included.length)
    included.forEach((conf) => renderIncludedRow(conf, includedBody));
  else fillEmpty(includedBody, 2);

  setMailLink(
    "planning-template-mail",
    "[TCS-Conf] New Planned Conference With Tentative Schedule",
    templates.planning,
  );

  setMailLink(
    "deadline-ahead-template-mail",
    "[TCS-Conf] New Conference With Deadline Ahead",
    templates["deadline-ahead"],
  );

  setMailLink(
    "future-template-mail",
    "[TCS-Conf] New Future Conference With Deadline Over",
    templates.future,
  );
}

function updateNavHeight() {
  const nav = document.querySelector("nav.navlist");
  if (!nav) return;

  document.documentElement.style.setProperty(
    "--nav-height",
    `${nav.getBoundingClientRect().height}px`,
  );
}

function updateActiveNavigation() {
  const navHeight = document.querySelector("nav.navlist")?.offsetHeight || 0;

  const sections = [
    "ahead",
    "running",
    "future",
    "planning",
    "instructions",
    "included",
  ];

  let active = "top";

  for (const id of sections) {
    const section = document.getElementById(id);

    if (!section) continue;

    const rect = section.getBoundingClientRect();

    if (rect.top - navHeight <= 20) {
      active = id;
    } else {
      break;
    }
  }

  document.querySelectorAll(".navlist a").forEach((link) => {
    link.classList.toggle("active", link.dataset.section === active);
  });
}

updateNavHeight();

const nav = document.querySelector("nav.navlist");
if (nav) {
  new ResizeObserver(updateNavHeight).observe(nav);
}

window.addEventListener("scroll", updateActiveNavigation);

document.addEventListener("DOMContentLoaded", () => {
  updateActiveNavigation();

  main()
    .then(updateActiveNavigation)
    .catch((err) => {
      console.error(err);

      document.querySelectorAll("tbody").forEach((tbody) => {
        if (!tbody.children.length)
          fillEmpty(
            tbody,
            tbody.closest("table").querySelectorAll("thead th").length,
          );
      });
    });
});
