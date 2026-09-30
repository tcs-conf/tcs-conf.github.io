const EMAILS = {
  hermann: "hermann_at_lix_dot_polytechnique_dot_fr",
  krejca: "martin_dot_krejca_at_polytechnique_dot_edu",
};

async function loadTemplates() {
  const response = await fetch("templates.json", {
    cache: "no-store",
  });

  if (!response.ok) throw new Error("Failed to load templates.json");

  return await response.json();
}

async function lookupTimeZone(city, country) {
  const url =
    `https://geocoding-api.open-meteo.com/v1/search?` +
    `name=${encodeURIComponent(`${city}, ${country}`)}` +
    `&count=10` +
    `&language=en` +
    `&format=json`;

  const response = await fetch(url);

  if (!response.ok) {
    throw new Error("Failed to look up the conference location.");
  }

  const data = await response.json();
  const results = data.results || [];

  if (!results.length) return "";

  const exactMatches = results.filter(
    (result) =>
      result.name.toLowerCase() === city.toLowerCase() &&
      result.country.toLowerCase() === country.toLowerCase(),
  );

  if (exactMatches.length !== 1) return "";

  return exactMatches[0].timezone || "";
}

function resolveField(definition, templates) {
  if (typeof definition !== "string") return definition;

  const parts = definition.split(".");
  let value = templates;

  for (const part of parts) {
    if (value == null) return null;

    value = value[part];
  }

  return value;
}

function createField(fieldName, definition, initialValue = "") {
  const wrapper = document.createElement("div");
  wrapper.className = "submission-field";

  const label = document.createElement("label");
  const inputId = `submission-${fieldName.replace(/[^a-zA-Z0-9_-]/g, "-")}`;

  label.htmlFor = inputId;
  label.textContent = definition.label;

  wrapper.appendChild(label);

  let input;

  if (definition.type === "textarea") {
    input = document.createElement("textarea");
  } else {
    input = document.createElement("input");

    if (definition.type === "date") input.type = "text";
    else if (definition.type === "date-or-text") input.type = "text";
    else input.type = definition.type || "text";
  }

  input.id = inputId;
  input.name = fieldName;

  if (definition.placeholder) input.placeholder = definition.placeholder;

  input.value = initialValue;

  wrapper.appendChild(input);

  return wrapper;
}

function createRepeatableGroup(fieldName, definition, initialValues = []) {
  const group = document.createElement("div");
  group.className = "repeatable-group";
  group.dataset.field = fieldName;

  const title = document.createElement("div");
  title.className = "repeatable-group-title";
  title.textContent = definition.label;

  group.appendChild(title);

  const items = document.createElement("div");
  items.className = "repeatable-items";
  group.appendChild(items);

  function updateRemoveButtons() {
    const itemElements = items.querySelectorAll(".repeatable-item");

    itemElements.forEach((item) => {
      const removeButton = item.querySelector(".repeatable-remove");

      removeButton.disabled = itemElements.length <= definition.min;
    });
  }

  function addRepeatableItem(values = {}) {
    const item = document.createElement("div");
    item.className = "repeatable-item";

    Object.entries(definition.fields).forEach(
      ([subFieldName, subDefinition]) => {
        item.appendChild(
          createField(
            `${fieldName}[${subFieldName}]`,
            subDefinition,
            values[subFieldName] || "",
          ),
        );
      },
    );

    const actions = document.createElement("div");
    actions.className = "repeatable-actions";

    const removeButton = document.createElement("button");

    removeButton.type = "button";
    removeButton.className = "repeatable-remove";
    removeButton.textContent = "Remove";

    removeButton.addEventListener("click", () => {
      item.remove();
      updateRemoveButtons();
    });

    actions.appendChild(removeButton);
    item.appendChild(actions);

    items.appendChild(item);

    updateRemoveButtons();
  }

  const addButton = document.createElement("button");

  addButton.type = "button";
  addButton.className = "repeatable-add";

  addButton.textContent =
    fieldName === "deadlines"
      ? "Add deadline"
      : fieldName === "notification"
        ? "Add notification"
        : fieldName === "final_version"
          ? "Add final version date"
          : "Add early registration date";

  addButton.addEventListener("click", () => addRepeatableItem());

  const actions = document.createElement("div");

  actions.className = "repeatable-actions";

  actions.appendChild(addButton);
  group.appendChild(actions);

  const minimum = Number.isInteger(definition.min) ? definition.min : 0;

  const values = initialValues.length
    ? initialValues
    : Array.from({ length: minimum }, () => ({}));

  values.forEach((values) => addRepeatableItem(values));

  return group;
}

function createMailLink(subject, data) {
  const body = JSON.stringify(data, null, 2);

  return (
    `mailto:${EMAILS.hermann}` +
    `?cc=${encodeURIComponent(EMAILS.krejca)}` +
    `&subject=${encodeURIComponent(subject)}` +
    `&body=${encodeURIComponent(body)}`
  );
}

function setupAcronymLookup(form, conferences) {
  const acronymField = form.elements.namedItem("acronym");
  const nameField = form.elements.namedItem("name");

  if (!acronymField || !nameField) return;

  const names = new Map(
    conferences.map((entry) => [entry.acronym, entry.name]),
  );

  let autoFilledAcronym = null;
  let autoFilledName = null;

  acronymField.addEventListener("blur", () => {
    const acronym = acronymField.value.trim();
    const name = names.get(acronym);

    autoFilledAcronym = null;
    autoFilledName = null;

    if (!name) return;

    nameField.value = name;
    autoFilledAcronym = acronym;
    autoFilledName = name;
  });

  nameField.addEventListener("input", () => {
    if (autoFilledAcronym === null || autoFilledName === null) return;

    if (
      acronymField.value.trim() === autoFilledAcronym &&
      nameField.value.trim() !== autoFilledName
    ) {
      acronymField.value = "";
      autoFilledAcronym = null;
      autoFilledName = null;
    }
  });
}

function setupTimeZoneLookup(form) {
  const cityField = form.elements.namedItem("city");
  const countryField = form.elements.namedItem("country");
  const timezoneField = form.elements.namedItem("timezone");

  if (!cityField || !countryField || !timezoneField) return;

  let autoFilledTimeZone = null;

  async function updateTimeZone() {
    if (
      document.activeElement === cityField ||
      document.activeElement === countryField
    ) {
      return;
    }

    const city = cityField.value.trim();
    const country = countryField.value.trim();

    if (!city || !country) return;

    const timezone = await lookupTimeZone(city, country);

    if (!timezone) return;

    timezoneField.value = timezone;
    autoFilledTimeZone = timezone;
  }

  function clearAutoFilledTimeZone() {
    if (
      autoFilledTimeZone !== null &&
      timezoneField.value === autoFilledTimeZone
    ) {
      timezoneField.value = "";
    }

    autoFilledTimeZone = null;
  }

  cityField.addEventListener("input", clearAutoFilledTimeZone);
  countryField.addEventListener("input", clearAutoFilledTimeZone);

  cityField.addEventListener("blur", updateTimeZone);
  countryField.addEventListener("blur", updateTimeZone);
}

function renderForm(template, templates, initialData = {}) {
  const fieldsContainer = document.getElementById("submission-fields");

  fieldsContainer.replaceChildren();

  const intro = document.getElementById("submission-intro");

  intro.textContent = template.intro || "";

  Object.entries(template.fields).forEach(([fieldName, rawDefinition]) => {
    const definition = resolveField(rawDefinition, templates);

    if (!definition) throw new Error(`Unknown field definition: ${fieldName}`);

    if (definition.type === "repeatable") {
      fieldsContainer.appendChild(
        createRepeatableGroup(
          fieldName,
          definition,
          initialData[fieldName] || [],
        ),
      );
    } else {
      fieldsContainer.appendChild(
        createField(fieldName, definition, initialData[fieldName] || ""),
      );
    }
  });
}

function getFieldValue(form, name) {
  const field = form.elements.namedItem(name);

  return field ? field.value.trim() : "";
}

function getRepeatableValues(group, fieldName) {
  const values = [];

  group.querySelectorAll(".repeatable-item").forEach((item) => {
    const fields = {};

    item.querySelectorAll("input, textarea, select").forEach((input) => {
      const prefix = `${fieldName}[`;

      if (!input.name.startsWith(prefix)) return;

      const subFieldName = input.name.slice(prefix.length, -1);

      fields[subFieldName] = input.value.trim();
    });

    values.push(fields);
  });

  return values;
}

function createEmptyConferenceEntry() {
  return {
    acronym: "",
    name: "",
    city: "",
    country: "",
    timezone: "",
    deadlines: [],
    start: "",
    end: "",
    submission_requirements: "",
    remarks: "",
    url: "",
    notification: [],
    final_version: [],
    early_registration: [],
  };
}

function collectSubmissionData(form, template) {
  const data = createEmptyConferenceEntry();

  Object.entries(template.fields).forEach(([fieldName, definition]) => {
    if (typeof definition === "object" && definition.type === "repeatable") {
      const group = form.querySelector(
        `.repeatable-group[data-field="${fieldName}"]`,
      );

      data[fieldName] = getRepeatableValues(group, fieldName);
    } else {
      data[fieldName] = getFieldValue(form, fieldName);
    }
  });

  return data;
}

function validateDate(value) {
  if (!/^\d{4}-\d{2}-\d{2}$/.test(value)) return false;

  const [year, month, day] = value.split("-").map(Number);
  const date = new Date(Date.UTC(year, month - 1, day));

  return (
    date.getUTCFullYear() === year &&
    date.getUTCMonth() === month - 1 &&
    date.getUTCDate() === day
  );
}

function validateTimeZone(value) {
  if (!value) return true;

  try {
    new Intl.DateTimeFormat("en", {
      timeZone: value,
    }).format();

    return true;
  } catch {
    return false;
  }
}

function validateSubmission(data, type) {
  const errors = [];

  const requiredFields = ["acronym", "name", "city", "country", "start", "end"];

  requiredFields.forEach((field) => {
    if (!data[field]) errors.push(`${field} is required.`);
  });

  if (data.start && !validateDate(data.start)) {
    errors.push("Starting date must use YYYY-MM-DD.");
  }

  if (data.end && !validateDate(data.end)) {
    errors.push("Ending date must use YYYY-MM-DD.");
  }

  if (
    data.start &&
    data.end &&
    validateDate(data.start) &&
    validateDate(data.end) &&
    data.start > data.end
  ) {
    errors.push("Starting date must not be after the ending date.");
  }

  if (data.timezone && !validateTimeZone(data.timezone)) {
    errors.push(
      "Time zone must be a valid IANA time zone, such as Europe/Paris.",
    );
  }

  if (type === "deadline-ahead" || type === "future") {
    if (!Array.isArray(data.notification)) {
      errors.push("Notification data is invalid.");
    }
  }

  if (type === "deadline-ahead") {
    if (!Array.isArray(data.deadlines) || data.deadlines.length < 1) {
      errors.push("At least one submission deadline is required.");
    }

    data.deadlines.forEach((deadline, index) => {
      if (!deadline.label) errors.push(`Deadline ${index + 1} needs a label.`);

      if (!deadline.date) errors.push(`Deadline ${index + 1} needs a date.`);
      else if (!validateDate(deadline.date))
        errors.push(`Deadline ${index + 1} must use YYYY-MM-DD.`);
    });
  }

  [...(data.notification || [])].forEach((notification, index) => {
    if (!notification.label && !notification.date) return;

    if (!notification.label)
      errors.push(`Notification ${index + 1} needs a label.`);

    if (!notification.date) {
      errors.push(`Notification ${index + 1} needs a date.`);
    } else if (!validateDate(notification.date)) {
      errors.push(
        `Notification ${index + 1} must use a valid YYYY-MM-DD date.`,
      );
    }
  });

  ["final_version", "early_registration"].forEach((fieldName) => {
    const entries = data[fieldName] || [];

    if (!Array.isArray(entries)) {
      errors.push(`${fieldName} data is invalid.`);
      return;
    }

    entries.forEach((entry, index) => {
      const label =
        fieldName === "final_version" ? "Final version" : "Early registration";

      if (!entry.label) {
        errors.push(`${label} ${index + 1} needs a label.`);
      }

      if (!entry.date) {
        errors.push(`${label} ${index + 1} needs a date.`);
      }
    });
  });

  return errors;
}

function getSubmissionType() {
  const params = new URLSearchParams(window.location.search);

  const type = params.get("type");

  if (type === "planning" || type === "deadline-ahead" || type === "future")
    return type;

  return "planning";
}

function updateUrlType(type) {
  const url = new URL(window.location.href);

  url.searchParams.set("type", type);
  window.history.replaceState({}, "", url);
}

async function initialiseSubmissionForm() {
  const [templates, conferences] = await Promise.all([
    loadTemplates(),
    fetch("conferences.json", { cache: "no-store" }).then((response) => {
      if (!response.ok) throw new Error("Failed to load conferences.json");
      return response.json();
    }),
  ]);
  const selector = document.getElementById("submission-type");
  const type = getSubmissionType();
  const drafts = {};

  selector.value = type;

  let currentType = null;

  function renderSelectedForm() {
    const selectedType = selector.value;

    const template = templates[selectedType];

    if (!template) throw new Error(`Unknown submission type: ${selectedType}`);

    let currentData = {};

    if (currentType) {
      currentData = collectSubmissionData(
        document.getElementById("submission-form"),
        templates[currentType],
      );

      drafts[currentType] = currentData;
    }

    const initialData = {
      ...(drafts[selectedType] || {}),
      ...currentData,
    };

    document.title = `${template.title} — TCS Conferences`;

    renderForm(template, templates, initialData);

    const form = document.getElementById("submission-form");

    setupAcronymLookup(form, conferences);
    setupTimeZoneLookup(form);

    currentType = selectedType;

    updateUrlType(selectedType);
  }

  selector.addEventListener("change", renderSelectedForm);

  renderSelectedForm();

  document
    .getElementById("submission-form")
    .addEventListener("submit", (event) => {
      event.preventDefault();

      const form = event.currentTarget;
      const selectedType = selector.value;
      const template = templates[selectedType];

      const data = collectSubmissionData(form, template);

      const errors = validateSubmission(data, selectedType);

      const result = document.getElementById("submission-result");

      result.replaceChildren();

      if (errors.length) {
        const heading = document.createElement("strong");

        heading.textContent = "Please correct the following:";

        result.appendChild(heading);

        const list = document.createElement("ul");

        errors.forEach((error) => {
          const item = document.createElement("li");

          item.textContent = error;
          list.appendChild(item);
        });

        result.appendChild(list);

        return;
      }

      const subject =
        selectedType === "planning"
          ? "[TCS-Conf] New Planned Conference With Tentative Schedule"
          : selectedType === "deadline-ahead"
            ? "[TCS-Conf] New Conference With Deadline Ahead"
            : "[TCS-Conf] New Future Conference With Deadline Over";

      window.location.href = createMailLink(subject, data);
    });
}

document.addEventListener("DOMContentLoaded", () => {
  initialiseSubmissionForm().catch((error) => {
    console.error(error);

    document.getElementById("submission-fields").textContent =
      "The submission form could not be loaded.";
  });
});
