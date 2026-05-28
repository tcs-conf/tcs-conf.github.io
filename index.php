<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>List of Conferences in Theoretical Computer Science</title>
    <meta name="description" content="List of conferences in Theoretical Computer Science">
    <meta name="keywords" content="computer science, conference, conferences, theory, theoretical, algorithmic, algorithm, algorithms, deadline, deadlines">
    <meta name="author" content="Miki Hermann">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
      function popUp(id) {
	  var x = document.getElementById(id);
	  var y = document.getElementById('btn');
	  if (y.innerHTML === 'show') {
	      y.innerHTML = 'hide';
	      x.style.display = 'block';
	  } else {
	      y.innerHTML = 'show';
	      x.style.display = 'none';
	  }
      };
      // const timeZoneAbbreviated = () => {
      // 	  const { 1: tz } = new Date().toString().match(/\((.+)\)/);
      
      // 	  // In Chrome browser, new Date().toString() is
      // 	  // "Thu Aug 06 2020 16:21:38 GMT+0530 (India Standard Time)"
      
      // 	  // In Safari browser, new Date().toString() is
      // 	  // "Thu Aug 06 2020 16:24:03 GMT+0530 (IST)"
      
      // 	  if (tz.includes(" ")) {
      // 	      return tz
      // 		  .split(" ")
      // 		  .map(([first]) => first)
      // 		  .join("");
      // 	  } else {
      // 	      return tz;
      // 	  }
      // };
    </script>
    <link rel="stylesheet" href="conf.css">
  </head>
  <?php

   $full_name = array(
   'AAAI' => 'Artificial Intelligence',
  'AAIM' => 'Algorithmic Aspects in Information and Management',
  'AAMAS' => 'Autonomous Agents and Multiagent Systems',
  'AISC' => 'Australasian Information Security Conference',
  'ALENEX' => 'Algorithm Engineering and Experiments',
  'ALGO' => 'Federated Conference on Algorithms',
  'ALT' => 'Algorithmic Learning Theory',
  'ANALCO' => 'Analytic Algorithmics and Combinatorics',
  'AofA' => 'Probabilistic, Combinatorial, and Asymptotic Methods in the <b>A</b>nalysis <b>of</b> <b>A</b>lgorithms',
  'APPROX' => 'Approximation Algorithms for Combinatorial Optimization Problems',
  'AlCoB' => 'Algorithms for Computational Biology',
  'BICOB' => 'Bioinformatics and Computational Biology',
  'BLAST' => '<b>B</b>oolean Algebras; <b>L</b>attices, Algebraic Logic and Quantum Logic; Universal <b>A</b>lgebra; <b>S</b>et Theory;  Set-theoretic and Point-free <b>T</b>opology',
  'CADE' => 'Conference on Automated Deduction',
  'CALDAM' => 'Conference on Algorithms and Discrete Applied Mathematics',
  'CAV' => 'Computer-Aided Verification',
  'CCC' => 'Computational Complexity Conference',
  'CIAC' => 'International Conference on Algorithms and Complexity',
  'CICM' => 'Conference on Intelligent Computer Mathematics',
  'CiE' => 'Computability in Europe',
  'COCOA' => 'Conference on Combinatorial Optimization and Applications',
  'COCOON' => 'Computing and Combinatorics Conference',
  'COLT' => 'Conference on Learning Theory',
  'CONCUR' => 'Concurrency Theory',
  'CooPMAS' => 'Cooperative Games and Multiagent Systems',
  'COORDINATION' => 'Coordination Models and Languages',
  'CP' => 'Principles and Practice of Constraint Programming',
  'CPAIOR' => 'Integration of Constraint Programming, Artificial Intelligence, and Operations Research',
  'CPM' => 'Combinatorial Pattern Matching',
  'CRYPTO' => 'CRYPTO',
  'CSCML' => 'Cyber Security, Cryptology and Machine Learning',
  'CSL' => 'Computer Science Logic',
  'CSR' => 'Computer Science Symposium in Russia',
  'CTW' => 'Cologne-Twente Workshop on Graphs and Combinatorial Optimization',
  'DAIS' => 'Distributed Applications and Interoperable Systems',
  'DEBS' => 'Distributed and Event-Based Systems',
  'DISC' => 'Distributed Computing',
  'DisCoTec' => 'Distributed Computing Techniques',
  'DL' => 'Description Logics',
  'DLT' => 'Developments in Language Theory',
  'EC' => 'Economics and Computation',
  'ESA' => 'European Symposium on Algorithms',
  'ESOP' => 'European Symposium on Programming',
  'ESORICS' => 'European Symposium on Research in Computer Security',
  'ETAPS' => 'European Joint Conferences on Theory &amp; Practice of Software',
  'EUROCRYPT' => 'Theory and Applications of Cryptographic Techniques',
  'Eurocomb' => 'European Conference on Combinatorics, Graph Theory and Applications',
  'FACS' => 'Formal Aspects of Component Software',
  'FASE' => 'Fundamental Approaches to Software Engineering',
  'FCRC' => 'Federated Computing Research Conference',
  'FCT' => 'Fundamentals of Computation Theory',
  'FLoC' => 'Federated Logic Conference',
  'FMCAD' => 'Formal Methods in Computer-Aided Design',
  'FMICS' => 'Formal Methods for Industrial Critical Systems',
  'FOCS' => 'Foundations of Computer Science',
  'FORMATS' => 'Formal Modeling and Analysis of Timed Systems',
  'FORTE' => 'Formal Techniques for Distributed Objects, Components, and Systems',
  'FoSSaCS' => 'Foundations of Software Science and Computation Structures',
  'FSCD' => 'Formal Structures for Computation and Deduction',
  'FSTTCS' => 'Foundations of Software Technology and Theoretical Computer Science',
  'FUN' => 'Fun With Algorithms',
  'GD' => 'Graph Drawing',
  'GECCO' => 'Genetic and Evolutionary Computation Conference',
  'ICALP' => 'International Colloquium on Automata, Languages and Programming',
  'ICAPS' => 'International Conference on Automated Planning and Scheduling',
  'ICDCS' => 'International Conference on Distributed Computing Systems',
  'ICFCA' => 'International Conference on Formal Concept Analysis',
  'ICFP' => 'International Conference on Functional Programming',
  'ICGT' => 'International Conference on Graph Transformation',
  'ICGraThe' => 'International Conference on Graph Theory',
  'ICLP' => 'International Conference on Logic Programming',
  'ICTCS' => 'Italian Conference on Theoretical Computer Science',
  'IJCAI' => 'International Joint Conference on Artificial Intelligence',
  'IJCAR' => 'International Joint Conference on Automated Reasoning',
  'ILP' => 'Inductive Logic Programming',
  'IPCO' => 'Integer Programming and Combinatorial Optimization',
  'IPDPS' => 'International Parallel &amp;  Distributed Processing Symposium',
  'IPEC' => 'International Symposium on Parameterized and Exact Computation',
  'ISAAC' => 'International Symposium on Algorithms and Computation',
  'ISCO' => 'International Symposium on Combinatorial Optimization',
  'ISSAC' => 'International Symposium on Symbolic and Algebraic Computation',
  'IWOCA' => 'International Workshop on Combinatorial Algorithms',
  'JELIA' => 'European Conference on Logics in Artificial Intelligence',
  'KR' => 'Principles of Knowledge Representation and Reasoning',
  'LAGOS' => 'Latin-American Algorithms, Graphs and Optimization Symposium',
  'LATA' => 'Language and Automata Theory and Applications',
  'LATIN' => 'Latin American Theoretical Informatics Symposium',
  'LICS' => 'Logic in Computer Science',
  'LOPSTR' => 'Logic-Based Program Synthesis and Transformation',
  'LPAR' => 'Logic for Programming, Artificial Intelligence and Reasoning',
  'LPNMR' => 'Logic Programming and Non-Monotonic Reasoning',
  'LSFA' => 'Logical and Semantic Frameworks with Applications',
  'MFCS' => 'Mathematical Foundations of Computer Science',
  'MIWAI' => 'Multi-Disciplinary International Conference on Artificial Intelligence',
  'MLN' => 'Machine Learning for Networking',
  'NMR' => 'Non-Monotonic Reasoning',
  'OLA' => 'Optimization and Learning',
  'PADL' => 'Practical Aspects of Declarative Languages',
  'PODC' => 'Principles of Distributed Computing',
  'PODS' => 'Principles of Database Systems',
  'POPL' => 'Principles of Programming Languages',
  'PPDP' => 'Principles and Practice of Declarative Programming',
  'PRIMA' => 'Principles and Practice of Multi-Agent Systems',
  'PaCT' => 'Parallel Architectures and Compilation Techniques',
  'QEST' => 'Quantitative Evaluation of SysTems',
  'RANDOM' => 'Randomization and Computation',
  'RECOMB' => 'Research in Computational Molecular Biology',
  'RP' => 'Reachability Problems',
  'RuleML+RR' => 'International Joint Conference on Rules and Reasoning',
  'SAFECOMP' => 'Computer Safety, Reliability and Security',
  'SAGT' => 'Symposium on Algorithmic Game Theory',
  'SAS' => 'Static Analysis Symposium',
  'SAT' => 'Theory and Applications of Satisfiability Testing',
  'SDM' => 'Data Mining',
  'SEA' => 'Symposium on Experimental Algorithms',
  'SIROCCO' => 'Structural Information and Communication Complexity',
  'SODA' => 'Symposium on Discrete Algorithms',
  'SOFSEM' => 'Current Trends in Theory and Practice of Computer Science',
  'SOSA' => 'Symposium on Simplicity in Algorithms',
  'SPAA' => 'Symposium on Parallelism in Algorithms and Architectures',
  'SPIRE' => 'String Processing and Information Retrieval',
  'STACS' => 'Symposium on Theoretical Aspects of Computer Science',
  'STOC' => 'Symposium on Theory of Computing',
  'SWAT' => 'Scandinavian Symposium and Workshops on Algorithm Theory',
  'SYNASC' => 'Symbolic and Numeric Algorithms for Scientific Computing',
  'SoCG' => 'Symposium on Computational Geometry',
  'SoCS' => 'Symposium on Combinatorial Search',
  'TACAS' => 'Tools and Algorithms for the Construction and Analysis of Systems',
  'TAMC' => 'Theory and Applications of Models of Computation',
  'TASE' => 'Theoretical Aspects of Software Engineering',
  'TIME' => 'Temporal Representation and Reasoning',
  'TPNC' => 'Theory and Practice of Natural Computing',
  'UNIF' => 'Workshop on Unification',
  'VSTTE' => 'Verified Software: Theories, Tools, and Experiments',
  'WABI' => 'Workshop on Algorithms in Bioinformatics',
  'WADS' => 'Algorithms and Data Structures',
  'WALCOM' => 'International Conference and Workshops on Algorithms and Computation',
  'WAOA' => 'Workshop on Approximation and Online Algorithms',
  'WFLP' => 'Workshop on Functional and Logic Programming',
  'WG' => 'Graph-Theoretic Concepts in Computer Science',
  'WINE' => 'Web and Internet Economics',
  'WoLLIC' => 'Workshop on Logic, Language, Information and Computation',
  'FoIKS' => 'Foundations of Information and Knowledge Systems',
  'CIAA' => 'Conference on Implementation and Application of Automata',
  'EMAS' => 'Engineering Multi-Agent Systems',
  'EUMAS' => 'European Conference on Multi-Agent Systems',
  'EURO' => 'EURO',
  'AiML' => 'Advances in Modal Logic',
  'FLAIRS' => 'FLorida Artificial Intelligence Research Society Conference',
  'SLSS' => 'Scandinavian Logic Symposium',
  'JAF' => 'Journ&eacute;es sur les Arithm&eacute;tiques Faibles',
  'ICICS' => 'International Conference on Information and Communications Security',
  'LearnAut' => 'Learning and Automata',
  'WADT' => 'Workshop on Algebraic Development Techniques',
  'ISPDC' => 'International Symposium on Parallel and Distributed Computing',
  'PATAT' => 'Practice and Theory of Automated Timetabling',
  'PACT' => 'Parallel Architectures and Compilation Techniques',
  'MATCH-UP' => 'Matching Under Preferences',
  'ATVA' => 'Automated Technology for Verification and Analysis',
  'WST' => 'Workshop on Termination',
  'ICTAC' => 'International Colloquium on Theoretical Aspects of Computing',
  'TERMGRAPH' => 'Computing with Terms and Graphs',
  'PLP' => 'Probabilistic Logic Programming',
  'ALGOCLOUD' => 'Algorithms for Cloud-Based Systems',
  'NCL' => 'Non-Classical Logics',
  'WRLA' => 'Workshop on Rewriting Logic and its Applications',
  'IDA' => 'Intelligent Data Analysis',
  'EvoStar' => 'Evo*',
  'EuroGP' => 'European Conference on Genetic Programming',
  'EvoAPPS' => 'Applications of Evolutionary Computation',
  'EvoCOP' => 'Evolutionary Computation in Combinatorial Optimisation',
  'EvoMUSART' => 'Artificial Intelligence in Music, Sound, Art and Design',
  'NFM' => 'NASA Formal Methods',
  'LOFT' => 'Logic and the Foundations of Game and Decision Theory',
  'CELT' => 'Connections between Epistemic Logic and Topology',
  'CSF' => 'Computer Security Foundations',
  'ITP' => 'Interactive Theorem Proving',
  'KDD' => 'Knowledge Discovery and Data Mining',
  'CONFEST' => 'CONCUR &amp; QEST &amp; FORMATS',
  'ALGOWIN' => 'Algorithmic of Wireless Networks',
  'ATMOS' => 'Algorithmic Approaches for Transportation Modelling, Optimization, and Systems',
  'ECAI' => 'European Conference on Artificial Intelligence',
  'CCCG' => 'Canadian Conference on Computational Geometry',
  'ANTS' => 'Algorithmic Number Theory Symposium',
  'ICDT' => 'International Conference on Database Theory',
  'EDBT' => 'Extending Database Technology',
  'ICML' => 'International Conference on Machine Learning',
  'TABLEAUX' => 'Automated Reasoning with Analytic Tableaux and Related Methods',
  'DaL&iacute;' => 'Dynamic Logic: new trends and applications',
  'GandALF' => 'Games, Automata, Logics, and Formal Verification',
  'CLAS' => 'Computational Logic Autumn Summit',
  'PAAR' => 'Practical Aspects of Automated Reasoning',
  'iPRA' => 'Interpolation: From Proofs to Applications',
  'TAP' => 'Tests and Proofs',
  'ECMFA' => 'European Conference on Modelling Foundations and Applications',
  'STAF' => 'Software Technologies: Applications and Foundations',
  'CCA' => 'Computability &amp; Complexity in Analysis',
  'FROM' => 'Working Formal Methods Symposium',
  'QBF' => 'Quantified Boolean Formulas and Beyond',
  'ASPOCP' => 'Answer Set Programming and Other Computing Paradigms',
  'IWC' => 'International Workshop on Confluence',
  'MPC' => 'Mathematics of Program Construction',
  'Datalog 2.0' => 'Datalog 2.0',
  'Euro-Par' => 'European Conference on Parallel and Distributed Computing',
  'ARQNL' => 'Automated Reasoning in Quantified Non-Classical Logics',
  'GETCO' => 'Geometric and Topological Methods in Computer Science',
  'LAP' => 'Logic and Applications',
  'SPLASH' => 'Systems, Programming, Languages, and Applications: Software for Humanity',
  'APLAS' => 'Asian Symposium on Programming Languages and Systems',
  'FedCSIS' => 'Federated Conference on Computer Science and Information Systems',
  'EISA' => 'Emerging Information Security and Applications',
  'KI' => 'German Conference on Artificial Intelligence',
  'onto4FAIR' => 'Ontologies for FAIR and FAIR Ontologies',
  'PC' => 'Proof Complexity',
  'OPODIS' => 'On Principles of Distributed Systems',
  'RAMiCS' => 'Relational and Algebraic Methods in Computer Science',
  'AIxIA' => 'Italian Association for Artificial Intelligence',
  'FM' => 'Formal Methods',
  'APOCS' => 'Algorithmic Principles of Computer Systems',
  'SIGMOD' => 'International Conference on Management of Data',
  'ITCS' => 'Innovations in Theoretical Computer Science',
  'CPP' => 'Certified Programs and Proofs',
  'WABCT' => 'Workshop on Algorithms, Bioinformatics, and Computation Theory',
  'FTSCS' => 'Formal Techniques for Safety-Critical Systems',
  'SAND' => 'Algorithmic Foundations of Dynamic Networks',
  'CAiSE' => 'Advanced Information Systems Engineering',
  'ICTAI' => 'International Conference on Tools with Artificial Intelligence',
  'HALG' => 'Highlights of Algorithms',
  'EuroCG' => 'European Workshop on Computational Geometry',
  'ACDA'=> 'Applied and Computational Discrete Algorithms',
  'DCC' => 'Data Compression Conference',
  'EML' => 'Evolutionary Machine Learning',
  'CPML' => 'Bridge on Constraint Programming and Machine Learning',
  'FOIS' => 'Formal Ontology in Information Systems',
  'DEON' => 'Deontic Logic and Normative Systems',
  'WORDS' => 'Combinatorics on Words',
  'CLAR' => 'International Conference on Logic and Argumentation',
  'WTSC' => 'Workshop on Trusted Smart Contracts',
  'FCDS' => 'Financial Cryptography and Data Security',
  'LORI' => 'Logic, Rationality and Interaction',
  'FroCoS' => 'Frontiers of Combining Systems',
  'DSAA' => 'Data Science and Advanced Analytics',
  'HOR' => 'Higher-Order Rewriting',
  'ADEMAL' => 'Automated Deduction for Machine Learning',
  'TYPES' => 'Types for Proofs and Programs',
  'CALCO' => 'Conference on Algebra and Coalgebra in Computer Science',
  'MFPS' => 'Mathematical Foundations of Programming Semantics',
  'TbiLLC' => 'Tbilisi Symposium on Logic, Language and Computation',
  'ICCS' => 'International Conference on Conceptual Structures',
  'SEMANTICS' => 'Semantic Systems',
  'ADG' => 'Automated Deduction in Geometry',
  'PRICAI' => 'Pacific Rim International Conference on Artificial Intelligence',
  'SISAP' => 'Similarity Search and Applications',
  'WPTE' => 'Workshop on Rewriting Techniques for Program Transformations and Evaluation',
  'ThEdu' => 'Theorem proving components for Educational software',
  'EPIA' => 'Portuguese Conference on Artificial Intelligence',
  'IWIL' => 'International Workshop on the Implementation of Logics',
  'SEFM' => 'Software Engineering and Formal Methods',
  'DCM' => 'Developments in Computational Models',
  'PKC' => 'Public Key Cryptography',
  'ASE' => 'Automated Software Engineering',
  'ECSQARU' => 'European Conference on Symbolic and Quantitative Approaches to Reasoning with Uncertainty',
  'ISPEC' => 'Information Security Practice and Experience',
  'VMCAI' => 'Verification, Model Checking, and Abstract Interpretation',
  'PST' => 'Privacy, Security &amp; Trust',
  'ICDCN' => 'International Conference on Distributed Computing and Networking',
  'K-CAP' => 'International Conference on Knowledge Capture',
  'SAC' => 'Symposium On Applied Computing',
  'IJCKG' => 'International Joint Conference on Knowledge Graphs',
  'SPIN' => 'International Symposium on Model Checking Software',
  'FLOPS' => 'Functional and Logic Programming',
  'LOD' => 'Machine <b>L</b>earning, <b>O</b>ptimization, <b>D</b>ata Science',
  'DCFS' => 'Descriptional Complexity of Formal Systems',
  'TACL' => 'Topology, Algebra, and Categories in Logic',
  'CCS' => 'Computer and Communication Security',
  'WISE' => 'Web Information Systems Engineering',
  'SCAI' => 'Scandinavian Conference on AI',
  'AUTOMATA' => 'Cellular Automata and Discrete Complex Systems',
  'CILC' => 'Italian Conference on Computational Logic',
  'WAIT' => 'Workshop on Automated (Co)Inductive Theorem Proving',
  'ADT' => 'Algorithmic Decision Theory',
  'SCSS' => 'Symbolic Computation in Software Science',
  'QUANTIFY' => 'Workshop on Quantification',
  'SC2' => 'Satisfiability Checking and Symbolic Computation',
  'SmartData' => 'Smart Data',
  'IOTSMS' => 'Internet of Things: Systems, Management and Security',
  'SCN' => 'Security and Cryptography for Networks',
  'PoS' => 'Pragmatics of SAT',
  'iFM' => 'Integrated Formal Methods',
  'MLCS' => 'Machine Learning for Cybersecurity',
  'ReacTS' => 'Reconfigurable Transition Systems',
  'ICLA' => 'Indian Conference on Logic and its Applications',
  'PetriNets' => 'Petri Nets',
  'CanaDAM' => 'Canadian Discrete and Algorithmic Mathematics Conference',
  'ECCO' => 'European Chapter on Combinatorial Optimization',
  'EXTRAAMAS' => 'EXplainable, Trustworthy, and Responsible AI and Multi-Agent Systems',
  'HCVS' => 'Horn Clauses for Verification and Synthesis',
  'LFMTP' => 'Logical Frameworks and Meta Languages: Theory and Practice',
  'SMT' => 'Satisfiability Modulo Theories',
  'IWAE' => 'International Workshop on Algorithms in Engineering',
  'FCAI' => 'Foundations and Future of Change in Artificial Intelligence',
  'TLLA' => 'Trends in Linear Logic and Applications',
  'XLoKR' => 'Explainable Logic-Based Knowledge Representation',
  'ICAA' => 'International Conference on Applied Algorithms',
  'DECLARE' => 'Declarative Programming',
  'FICS' => 'Fixed Points in Computer Science',
  'DCFS' => 'Descriptional Complexity of Formal Systems',
  'SCML' => 'Symbolic Computation and Machine Learning',
  'CONCEPTS' => 'Conceptual Knowledge Structures',
  'MCU' => 'Machines, Computability, Universality',
  'ML4SP' => 'Machine Learning for Solvers and Provers',
  'WLP' => 'Workshop on (Constraint and Functional) Logic Programming',
  'ProofComplexity' => 'Workshop on Proof Complexity',
  'iFS' => 'Foundations and Formal Methods for Software and Systems'
  );
  ?>
  <body>
    <div id="intern">
      <h1>Conferences in Theoretical Computer Science</h1>

      <nav class="navlist">
        <ul class="navlist">
	  <li class="navlist"><a href="http://www.lix.polytechnique.fr/~hermann/conf.php">Main page</a></li>
          <li class="navlist"><a href="http://www.nicolas-hermann.net/conf.php">Mirror</a></li>
        </ul>
      </nav>

      <p></p>

      <nav class="navlist">
	<ul class="navlist">
	  <li class="navlist"><a class="active" href="#">Home</a></li>
      	  <li class="navlist"><a href="#ahead">Deadline ahead</a></li>
	  <li class="navlist"><a href="#running">Running conferences</a></li>
      	  <li class="navlist"><a href="#future">Future conferences (deadline over)</a></li>
	  <li class="navlist"><a href="#planning">Conference planning</a></li>
	  <li class="navlist"><a href="#instructions">Instructions</a></li>
	  <li class="navlist"><a href="#included">Included conferences</a></li>
	</ul>
      </nav>

      <p><b style="font-size:1.25em">WARNING</b></p>
      <ul>
	<li>If you wish <a href="#instructions">your conference</a> to be listed here &mldr; follow these <a href="#instructions">instructions</a></li>
	<li>All information on this page is given <b>without any warranty</b>.</li>
	<li>When there are two dealine dates, the first is for the abstract, the second for the full paper.</li>
	<li>All deadlines are 23:59 <a href="http://www.timeanddate.com/time/zones/aoe" target="_blank">Anywhere on Earth</a> (<a href="http://www.timeanddate.com/time/zones/aoe" target="_blank">AoE</a>) (UTC-12:00) if not stated otherwise.</li>
	<li>Be aware that some special deadline times, others than <a href="http://www.timeanddate.com/time/zones/aoe" target="_blank">AoE</a>, might be <b>one hour earlier</b>, because of daylight saving time, even if the conference organizers indicated the time without the daylight saving time shift.</li>
	<li>Be also aware, that the daylight saving time starts and ends on different days in Europe and North America.</li>
	<li>The <b>calendar</b> for the years <a href="http://www.timeanddate.com/calendar/" target="_blank">2026</a> and <a href="http://www.timeanddate.com/calendar/?year=2027" target="_blank">2027</a> can help you to consider the deadlines and dates.</li>
	<li>Your time zone is
	  <b>UTC
	    <script>
	      var split = new Date().toString().split(" ");
	      var tzf1 = split[5].match(/([\+-][0-9]{2})/)[1];
	      var tzf2 = split[5].match(/([0-9]{2}$)/)[1];
	      document.write(tzf1 + ":" + tzf2);
	    </script>
          </b>
	  <script>
	    document.write("(" + Intl.DateTimeFormat().resolvedOptions().timeZone + ")");
	  </script>
	</li>
	<!-- <li></li> -->
      </ul>

      <h2 id="ahead">Deadline ahead</h2>

      <nav class="navlist">
	<ul class="navlist">
	  <li class="navlist"><a href="#">Home</a></li>
      	  <li class="navlist"><a class="active" href="#ahead">Deadline ahead</a></li>
	  <li class="navlist"><a href="#running">Running conferences</a></li>
      	  <li class="navlist"><a href="#future">Future conferences (deadline over)</a></li>
	  <li class="navlist"><a href="#planning">Conference planning</a></li>
	  <li class="navlist"><a href="#instructions">Instructions</a></li>
	  <li class="navlist"><a href="#included">Included conferences</a></li>
	</ul>
      </nav>

      <table class="conference">
	<thead>
	  <tr>
	    <th>Conference</th>
	    <th>City, Country</th>
	    <th>Deadline</th>
	    <th>Date</th>
	    <th>Notification</th>
	    <th>Submission format and comments</th>
          </tr>
	</thead>
	<tbody>
          <tr>
            <td class="confname"><a href="https://icfp26.sigplan.org/home/lopstr-ppdp-2026" target="_blank">LOPSTR</a>
              <span class="tooltiptext"><?php echo $full_name['LOPSTR']; ?></span>
            </td>
            <td class="location">Indianapolis, Indiana, USA</td>
            <td class="now-deadline">20/27 May 2026</td>
            <td class="date">24-29 August 2026</td>
            <td class="notification">26 June 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>,
              15 pages long, 8 pages short, both excluding references, 10 pages system descriptions
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://icfp26.sigplan.org/home/lopstr-ppdp-2026" target="_blank">PPDP</a>
              <span class="tooltiptext"><?php echo $full_name['PPDP']; ?></span>
            </td>
            <td class="location">Indianapolis, Indiana, USA</td>
            <td class="now-deadline">20/27 May 2026</td>
            <td class="date">24-29 August 2026</td>
            <td class="notification">26 June 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>,
              15 pages long, 8 pages short, both excluding references, 10 pages system descriptions
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://easychair.org/smart-program/NCL26/home.html" target="_blank">NCL</a>
              <span class="tooltiptext"><?php echo $full_name['NCL']; ?></span>
            </td>
            <td class="location">Toruń, Poland</td>
            <td class="now-deadline">26/31 May 2026</td>
            <td class="date">26-28 October 2026</td>
            <td class="notification">10 August 2026</td>
            <td class="subformat"><a href="https://style.eptcs.org/" target="_blank">EPTCS</a>,
              12 pages excluding references full, 2 pages with references short
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.disc-conference.org/wp/disc2026/" target="_blank">DISC</a>
              <span class="tooltiptext"><?php echo $full_name['DISC']; ?></span>
            </td>
            <td class="location">Rome, Italy</td>
            <td class="now-deadline">27 May / 1 June 2026</td>
            <td class="date">9-13 November 2026</td>
            <td class="notification">5 August 2026</td>
            <td class="subformat"><a href="https://submission.dagstuhl.de/styles/download-tag/lipics/v2021.1.3/authors/zip/lipics-authors-v2021.1.3.zip">LIPIcs</a>,
              <b>double-blind</b>, no page limit but only first 15 pages read
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://etaps.org/2027/conferences/esop/" target="_blank">ESOP<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['ESOP']; ?></span>
            </td>
            <td class="location">Copenhagen, Denmark</td>
            <td class="deadline"><b>28 May 2026</b><br>15 October 2026</td>
            <td class="date">10-15 April 2027</td>
            <td class="notification">6 August 2026<br>22 December 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>,
              25 pages regular, 15 pages experience and fresh perspectives;
              part of <a href="https://etaps.org/2027/" target="_blank">ETAPS</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.uni-trier.de/en/universitaet/fachbereiche-faecher/fachbereich-iv/faecher/informatikwissenschaften/professuren/theoretische-informatik/research/conferences-and-workshops/translate-to-englisch-mcu-2026" target="_blank">MCU</a>
              <span class="tooltiptext"><?php echo $full_name['MCU']; ?></span>
            </td>
            <td class="location">Trier, Germany</td>
            <td class="deadline">31 May 2026</td>
            <td class="date">27-29 July 2026</td>
            <td class="notification">29 June 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>, 15 pages;
              second round of submissions
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://jaf45warsaw.wfz.uw.edu.pl/" target="_blank">JAF</a>
              <span class="tooltiptext"><?php echo $full_name['JAF']; ?></span>
            </td>
            <td class="location">Warsaw, Poland</td>
            <td class="deadline">1 June 2026</td>
            <td class="date">16-18 September 2026</td>
            <td class="notification">22 June 2026</td>
            <td class="subformat"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://lpar-26.info/" target="_blank">LPAR</a>
              <span class="tooltiptext"><?php echo $full_name['LPAR']; ?></span>
            </td>
            <td class="location">Spetses, Greece</td>
            <td class="deadline">3/17 June 2026</td>
            <td class="date">25-30 October 2026</td>
            <td class="notification">3 August 2026</td>
            <td class="subformat"><a href="https://easychair.org/publications/easychair.zip">EasyChair</a>,
              15 pages regular, 8 pages experimental and tools, all excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://ictac2026.github.io/" target="_blank">ICTAC</a>
              <span class="tooltiptext"><?php echo $full_name['ICTAC']; ?></span>
            </td>
            <td class="location">Bariloche, Argentina</td>
            <td class="deadline">8/15 June 2026</td>
            <td class="date">11-13 November 2026</td>
            <td class="notification">10 August 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>, 16 pages regular, 8 pages short or tool, all excluding references up to 2 pages</td>
          </tr>
          <tr>
            <td class="confname"><a href="https://ictcs2026.uniud.it/" target="_blank">ICTCS</a>
              <span class="tooltiptext"><?php echo $full_name['ICTCS']; ?></span>
            </td>
            <td class="location">Udine, Italy</td>
            <td class="deadline">14 June 2026</td>
            <td class="date">7-9 September 2026</td>
            <td class="notification">21 July 2026</td>
            <td class="subformat"><a href="http://ceur-ws.org/Vol-XXX/CEURART.zip">CEURART</a>,
              12 pages regular, 5 pages communications, both excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://conf.researchr.org/track/aplas-atva-2026/aplas-2026" target="_blank">APLAS</a>
              <span class="tooltiptext"><?php echo $full_name['APLAS']; ?></span>
            </td>
            <td class="location">Hong Kong, SAR China</td>
            <td class="deadline">15 June 2026</td>
            <td class="date">1-5 December 2026</td>
            <td class="notification">28 July 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>, <b>double-blind</b>, 17 pages excluding references</td>
          </tr>
          <tr>
            <td class="confname"><a href="https://aixia2026.unipg.it/" target="_blank">AIxIA</a>
              <span class="tooltiptext"><?php echo $full_name['AIxIA']; ?></span>
            </td>
            <td class="location">Perugia, Italy</td>
            <td class="deadline">16/23 June 2026</td>
            <td class="date">6-9 October 2026</td>
            <td class="notification">25 July 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>, 12 pages regular excluding references;
              <a href="https://www.overleaf.com/latex/templates/template-for-submissions-to-ceur-workshop-proceedings-ceur-ws-dot-org/wqyfdgftmcfw" target="_blank">CEUR</a>,
              discussion, 4 pages excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://gandalfsymposium.github.io/2026/" target="_blank">GandALF</a>
              <span class="tooltiptext"><?php echo $full_name['GandALF']; ?></span>
            </td>
            <td class="location">Aalborg, Denmark</td>
            <td class="deadline">18/22 June 2026</td>
            <td class="date">15-17 September 2026</td>
            <td class="notification">3 August 2026</td>
            <td class="subformat"><a href="https://style.eptcs.org/" target="_blank">EPTCS</a>,
              14 pages excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://synasc.ro/2026/" target="_blank">SYNASC<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['SYNASC']; ?></span>
            </td>
            <td class="location">Timișoara, Romania</td>
            <td class="deadline">20 June 2026</td>
            <td class="date">14-17 September 2026</td>
            <td class="notification">25 July 2026</td>
            <td class="subformat">two-column,
              8 pages regular, 8 pages system descriptions and experimental, 4 pages short,<br>
              all excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://math.utu.fi/rp26" target="_blank">RP</a>
              <span class="tooltiptext"><?php echo $full_name['RP']; ?></span>
            </td>
            <td class="location">Turku, Finland</td>
            <td class="deadline">21 June 2026</td>
            <td class="date">21-23 October 2026</td>
            <td class="notification">3 August 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>, 12 pages excluding references</td>
          </tr>
          <tr>
            <td class="confname"><a href="https://sites.google.com/view/spire-2026/home" target="_blank">SPIRE</a>
              <span class="tooltiptext"><?php echo $full_name['SPIRE']; ?></span>
            </td>
            <td class="location">Hamilton, Ontario, Canada</td>
            <td class="deadline">22/29 June 2026</td>
            <td class="date">13-16 October 2026</td>
            <td class="notification">10 August 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>,
              12 pages long, 6 pages short, both excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://algo-conference.org/2026/atmos/" target="_blank">ATMOS</a>
              <span class="tooltiptext"><?php echo $full_name['WABI']; ?></span>
            </td>
            <td class="location">L&apos;Aquila, Italy</td>
            <td class="deadline">26 June 2026</td>
            <td class="date">3-4 September 2026</td>
            <td class="notification">4 September 2026</td>
            <td class="subformat"><a href="https://www.dagstuhl.de/en/publishing/series/details/oasics" target="_blank">OASIcs</a>,
              15 pages + 5 pages references and appendix regular, 6 pages short;
              part of <a href="https://algo-conference.org/2026/" target="_blank">ALGO</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://miwai26.miwai.org/" target="_blank">MIWAI</a>
              <span class="tooltiptext"><?php echo $full_name['MIWAI']; ?></span>
            </td>
            <td class="location">Halifax, Nova Scotia, Canada</td>
            <td class="deadline">26 June 2026</td>
            <td class="date">10-12 October 2026</td>
            <td class="notification">7 August 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>,
              <b>double-blind</b>, 12 pages
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.algo-door.com/isaac2026/" target="_blank">ISAAC</a>
              <span class="tooltiptext"><?php echo $full_name['ISAAC']; ?></span>
            </td>
            <td class="location">Hangzhou, China</td>
            <td class="deadline">26 June 2026</td>
            <td class="date">6-9 December 2026</td>
            <td class="notification">early September 2026</td>
            <td class="subformat"><a href="https://submission.dagstuhl.de/styles/download-tag/lipics/v2021.1.3/authors/zip/lipics-authors-v2021.1.3.zip">LIPIcs</a>,
              <b>double-blind</b>, 12 pages excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://algo-conference.org/2026/waoa/" target="_blank">WAOA</a>
              <span class="tooltiptext"><?php echo $full_name['WAOA']; ?></span>
            </td>
            <td class="location">L&apos;Aquila, Italy</td>
            <td class="deadline">28 June 2026</td>
            <td class="date">3-4 September 2026</td>
            <td class="notification">4 August 2026</td>
            <td class="subformat">A4 pager, 2 cm margins, 10-point font,
              <b>double-blind</b>, 10 pages excluding references;
              part of <a href="https://algo-conference.org/2026/" target="_blank">ALGO</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://algo-conference.org/2026/ipec/" target="_blank">IPEC</a>
              <span class="tooltiptext"><?php echo $full_name['IPEC']; ?></span>
            </td>
            <td class="location">L&apos;Aquila, Italy</td>
            <td class="deadline">29 June 2026</td>
            <td class="date">31 August - 4 September 2026</td>
            <td class="notification">2 August 2026</td>
            <td class="subformat">
              <a href="https://submission.dagstuhl.de/styles/download-tag/lipics/v2021.1.3/authors/zip/lipics-authors-v2021.1.3.zip">LIPIcs</a>,
              <b>double-blind</b>, no page limit but only first 500 lines read;
              part of <a href="https://algo-conference.org/2026/" target="_blank">ALGO</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://algo-conference.org/2026/algowin/" target="_blank">ALGOWIN</a>
              <span class="tooltiptext"><?php echo $full_name['ALGOWIN']; ?></span>
            </td>
            <td class="location">L&apos;Aquila, Italy</td>
            <td class="deadline">29 June 2026</td>
            <td class="date">3-4 September 2026</td>
            <td class="notification">3 August 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>, 12 pages excluding references, post-proceedings;
              part of <a href="https://algo-conference.org/2026/" target="_blank">ALGO</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://ictai.computer.org/2026/" target="_blank">ICTAI</a>
              <span class="tooltiptext"><?php echo $full_name['ICTAI']; ?></span>
            </td>
            <td class="location">Boca Raton, Florida, USA</td>
            <td class="deadline">30 June 2026</td>
            <td class="date">2-4 November 2026</td>
            <td class="notification">10 September 2026</td>
            <td class="subformat">PDF, <b>double-blind</b>, double-column, 10-point font, 8 pages</td>
          </tr>
          <tr>
            <td class="confname"><a href="https://wine2026conf.github.io/" target="_blank">WINE</a>
              <span class="tooltiptext"><?php echo $full_name['WINE']; ?></span>
            </td>
            <td class="location">Hong Kong, SAR China</td>
            <td class="deadline">2 July 2026</td>
            <td class="date">1-4 December 2026</td>
            <td class="notification">10 September 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>, <b>double-blind</b>,
              12 pages excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://algo-conference.org/2026/algocloud/" target="_blank">ALGOCLOUD</a>
              <span class="tooltiptext"><?php echo $full_name['ALGOCLOUD']; ?></span>
            </td>
            <td class="location">L&apos;Aquila, Italy</td>
            <td class="deadline">3 July 2026</td>
            <td class="date">31 August - 4 September 2026</td>
            <td class="notification">3 August 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>,
              12 pages excluding references regular, 8 pages short, 10 pages survey;
              part of <a href="https://algo-conference.org/2026/" target="_blank">ALGO</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.fsttcs.org.in/2026/" target="_blank">FSTTCS</a>
              <span class="tooltiptext"><?php echo $full_name['FSTTCS']; ?></span>
            </td>
            <td class="location">New Delhi, India</td>
            <td class="deadline">4/11 July 2026</td>
            <td class="date">16-18 December 2026</td>
            <td class="notification">15 September 2026</td>
            <td class="subformat"><a href="https://submission.dagstuhl.de/styles/download-tag/lipics/v2021.1.3/authors/zip/lipics-authors-v2021.1.3.zip">LIPIcs</a>,
              <b>double-blind</b>, 15 pages excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://csl2027.github.io/" target="_blank">CSL</a>
              <span class="tooltiptext"><?php echo $full_name['CSL']; ?></span>
            </td>
            <td class="location">Brighton, United Kingdom</td>
            <td class="deadline">8/15 July 2026</td>
            <td class="date">25-29 January 2027</td>
            <td class="notification">15 October 2026</td>
            <td class="subformat"><a href="https://submission.dagstuhl.de/styles/download-tag/lipics/v2021.1.3/authors/zip/lipics-authors-v2021.1.3.zip">LIPIcs</a>,
              <b>double-blind</b>, 15 pages excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://conf.researchr.org/home/POPL-2027" target="_blank">POPL<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['POPL']; ?></span>
            </td>
            <td class="location">Mexico City, Mexico</td>
            <td class="deadline">9 July 2026</td>
            <td class="date">10-16 January 2027</td>
            <td class="notification">5 October 2026<br>9 November 2026</td>
            <td class="subformat"><a href="https://portalparts.acm.org/hippo/latex_templates/acmart-primary.zip">ACMart</a>,
              <b>double-blind</b>, 25 pages excluding references
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.siam.org/conferences-events/siam-conferences/soda27/" target="_blank">SODA</a>
              <span class="tooltiptext"><?php echo $full_name['SODA']; ?></span>
            </td>
            <td class="location">Philadelphia, Pennsylvania, USA</td>
            <td class="deadline">9 July 2026</td>
            <td class="date">24-27 January 2027</td>
            <td class="notification"></td>
            <td class="subformat"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://fmcad.org/FMCAD26/vstte/" target="_blank">VSTTE</a>
              <span class="tooltiptext"><?php echo $full_name['VSTTE']; ?></span>
            </td>
            <td class="location">Graz, Austria</td>
            <td class="deadline">10/17 July 2026</td>
            <td class="date">14 September 2026</td>
            <td class="notification">22 August 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>,
              post-proceeding;
              co-located with <a href="https://fmcad.org/FMCAD26/" target="_blank">FMCAD</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://sofsem2027.conf.uoi.gr/" target="_blank">SOFSEM</a>
              <span class="tooltiptext"><?php echo $full_name['SOFSEM']; ?></span>
            </td>
            <td class="location">Ioannina, Greece</td>
            <td class="deadline">15/18 September 2026</td>
            <td class="date">2-5 February 2027</td>
            <td class="notification">10 November 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://conf.researchr.org/home/wadt-2026" target="_blank">WADT</a>
              <span class="tooltiptext"><?php echo $full_name['WADT']; ?></span>
            </td>
            <td class="location"></td>
            <td class="deadline">17 September 2026</td>
            <td class="date">29 June - 3 July 2026</td>
            <td class="notification">29 October 2026</td>
            <td class="subformat"><b>post-proceedings</b></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://etaps.org/2027/conferences/fossacs/" target="_blank">FoSSaCS</a>
              <span class="tooltiptext"><?php echo $full_name['FoSSaCS']; ?></span>
            </td>
            <td class="location">Copenhagen, Denmark</td>
            <td class="deadline">15 October 2026</td>
            <td class="date">10-15 April 2027</td>
            <td class="notification">22 December 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>,
              18 pages regular;
              part of <a href="https://etaps.org/2027/" target="_blank">ETAPS</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://etaps.org/2027/conferences/ifs/" target="_blank">iFS</a>
              <span class="tooltiptext"><?php echo $full_name['iFS']; ?></span>
            </td>
            <td class="location">Copenhagen, Denmark</td>
            <td class="deadline">15 October 2026</td>
            <td class="date">10-15 April 2027</td>
            <td class="notification">22 December 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>,
              16 pages + 2 pages references long, 8 pages + 1 page references short;
              part of <a href="https://etaps.org/2027/" target="_blank">ETAPS</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://etaps.org/2027/conferences/tacas/" target="_blank">TACAS</a>
              <span class="tooltiptext"><?php echo $full_name['TACAS']; ?></span>
            </td>
            <td class="location">Copenhagen, Denmark</td>
            <td class="deadline">15 October 2026</td>
            <td class="date">10-15 April 2027</td>
            <td class="notification">22 December 2026</td>
            <td class="subformat"><a href="llncs2e.zip">LNCS</a>,
              18 pages regular, 6 pages tool demonstrations;
              part of <a href="https://etaps.org/2027/" target="_blank">ETAPS</a>
            </td>
          </tr>
	</tbody>
	<tfoot>
	  <tr>
	    <th>Conference</th>
	    <th>City, Country</th>
	    <th>Deadline</th>
	    <th>Date</th>
	    <th>Notification</th>
	    <th>Submission format and comments</th>
          </tr>
	</tfoot>
      </table>

      <h2 id="running">Running conferences</h2>

      <nav class="navlist">
	<ul class="navlist">
	  <li class="navlist"><a href="#">Home</a></li>
      	  <li class="navlist"><a href="#ahead">Deadline ahead</a></li>
	  <li class="navlist"><a class="active" href="#running">Running conferences</a></li>
      	  <li class="navlist"><a href="#future">Future conferences (deadline over)</a></li>
	  <li class="navlist"><a href="#planning">Conference planning</a></li>
	  <li class="navlist"><a href="#instructions">Instructions</a></li>
	  <li class="navlist"><a href="#included">Included conferences</a></li>
	</ul>
      </nav>

      <!-- <p> -->
        <!-- 	During the Covid-19 crisis, this section also includes <b>CANCELLED</b> conferences, as well as those held <b>ONLINE</b>. -->
        <!-- </p> -->

      <table class="conference">
	<thead>
	  <tr>
	    <th>Conference</th>
	    <th>City, Country</th>
	    <th>Date</th>
	    <th>Remark</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
	    <td class="confname"><a href="https://cyprusconferences.org/aamas2026/" target="_blank">AAMAS</a>
	      <span class="tooltiptext"><?php echo $full_name['AAMAS']; ?></span>
	    </td>
	    <td class="location">Paphos, Cyprus</td>
	    <td class="running-date">25-29 May 2026</td>
            <td class="remark"></td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://www.ipdps.org/" target="_blank">IPDPS</a>
              <span class="tooltiptext"><?php echo $full_name['IPDPS']; ?></span>
            </td>
            <td class="location">New Orleans, Louisiana, USA</td>
            <td class="running-date">25-29 May 2026</td>
            <td class="remark"></td>
          </tr>
	  <tr>
	    <td class="confname"><a href="https://functional-logic.org/events/flops/2026/" target="_blank">FLOPS</a>
	      <span class="tooltiptext"><?php echo $full_name['FLOPS']; ?></span>
	    </td>
	    <td class="location">Tsukuba, Japan</td>
	    <td class="running-date">26-28 May 2026</td>
            <td class="remark"></td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://sites.google.com/view/cpaior2026/" target="_blank">CPAIOR</a>
              <span class="tooltiptext"><?php echo $full_name['CPAIOR']; ?></span>
            </td>
            <td class="location">Rabat, Morocco</td>
            <td class="running-date">26-29 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://recomb.org/recomb2026/" target="_blank">RECOMB</a>
              <span class="tooltiptext"><?php echo $full_name['RECOMB']; ?></span>
            </td>
            <td class="location">Thessaloniki, Greece</td>
            <td class="running-date">26-29 May 2026</td>
            <td class="remark"></td>
          </tr>
	</tbody>
	<tfoot>
	  <tr>
	    <th>Conference</th>
	    <th>City, Country</th>
	    <th>Date</th>
	    <th>Remark</th>
	  </tr>
	</tfoot>
      </table>

      
      <h2 id="future">Future conferences with deadline over</h2>

      <nav class="navlist">
	<ul class="navlist">
	  <li class="navlist"><a href="#">Home</a></li>
      	  <li class="navlist"><a href="#ahead">Deadline ahead</a></li>
	  <li class="navlist"><a href="#running">Running conferences</a></li>
      	  <li class="navlist"><a class="active" href="#future">Future conferences (deadline over)</a></li>
	  <li class="navlist"><a href="#planning">Conference planning</a></li>
	  <li class="navlist"><a href="#instructions">Instructions</a></li>
	  <li class="navlist"><a href="#included">Included conferences</a></li>
	</ul>
      </nav>

      <!-- <p> -->
        <!-- 	During the Covid-19 crisis, this section also includes <b>CANCELLED</b> conferences, as well as those held <b>ONLINE</b>. -->
        <!-- </p> -->

      <table class="conference">
	<thead>
	  <tr>
	    <th>Conference</th>
	    <th>City, Country</th>
	    <th>Date</th>
	    <th>Notification</th>
	    <th>Final version</th>
	    <th>Early registration</th>
	    <th>Remarks and other indications</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
	    <td class="confname"><a href="https://2026.sigmod.org/" target="_blank">PODS<br>&nbsp;</a>
	      <span class="tooltiptext"><?php echo $full_name['PODS']; ?></span>
	    </td>
	    <td class="location">Bengaluru, India</td>
	    <td class="date">31 May - 5 June 2026</td>
	    <td class="notification">8 February 2026<br>1 March 2026</td>
            <td class="final"></td>
            <td class="registration">31 March 2026</td>
	    <td class="remark">
	      co-located with <a href="https://2026.sigmod.org/" target="_blank">SIGMOD</a>
	    </td>
	  </tr>
	  <tr>
	    <td class="confname"><a href="https://2026.sigmod.org/" target="_blank">SIGMOD<br>&nbsp;</a>
	      <span class="tooltiptext"><?php echo $full_name['SIGMOD']; ?></span>
	    </td>
	    <td class="location">Bengaluru, India</td>
	    <td class="date">31 May - 5 June 2026</td>
	    <td class="notification">4 January 2026<br>23 February 2026</td>
            <td class="final"></td>
            <td class="registration">31 March 2026</td>
	    <td class="remark">
	      co-located with <a href="https://2026.sigmod.org/" target="_blank">PODS</a>
	    </td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://wg2026.be/" target="_blank">WG</a>
              <span class="tooltiptext"><?php echo $full_name['WG']; ?></span>
            </td>
            <td class="location">Kortrijk, Belgium</td>
            <td class="date">2-4 June 2026</td>
            <td class="notification">3 April 2026</td>
            <td class="final">4 May 2026</td>
            <td class="registration">26 April 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://cgweek26.computational-geometry.org/" target="_blank">SoCG<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['SoCG']; ?></span>
            </td>
            <td class="location">New Brunswick, New Jersey, USA</td>
            <td class="date">2-5 June 2026</td>
            <td class="notification">5 February 2026</td>
            <td class="final">24 March 2026</td>
            <td class="registration">30 April 2026<br>EDT (UTC-04:00)</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://2026.highlightsofalgorithms.org/" target="_blank">HALG</a>
              <span class="tooltiptext"><?php echo $full_name['HALG']; ?></span>
            </td>
            <td class="location">Stockholm, Sweden</td>
            <td class="date">8-10 June 2026</td>
            <td class="notification">early April</td>
            <td class="final"></td>
            <td class="registration">4 May 2026</td>
            <td class="remark">no proceedings</td>
          </tr>
          <tr>
            <td class="confname"><a href="https://iwoca2026.limos.fr/" target="_blank">IWOCA</a>
              <span class="tooltiptext"><?php echo $full_name['IWOCA']; ?></span>
            </td>
            <td class="location">Clermont-Ferrand, France</td>
            <td class="date">8-12 June 2026</td>
            <td class="notification">25 March 2026</td>
            <td class="final">6 April 2026</td>
            <td class="registration">11 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://caise26.polimi.it/" target="_blank">CAiSE</a>
              <span class="tooltiptext"><?php echo $full_name['CAiSE']; ?></span>
            </td>
            <td class="location">Verona, Italy</td>
            <td class="date">8-12 June 2026</td>
            <td class="notification">12 February 2026</td>
            <td class="final"></td>
            <td class="registration">3 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.discotec.org/2026/" target="_blank">DisCoTec</a>
              <span class="tooltiptext"><?php echo $full_name['DisCoTec']; ?></span>
            </td>
            <td class="location">Urbino, Italy</td>
            <td class="date">8-12 June 2026</td>
            <td class="notification">24 March 2026</td>
            <td class="final">3 April 2026</td>
            <td class="registration">17 May 2026</td>
            <td class="remark">federated conference including
              <a href="https://www.discotec.org/2026/coordination" target="_blank">COORDINATION</a>,
              <a href="https://www.discotec.org/2026/dais" target="_blank">DAIS</a>,
              and
              <a href="https://www.discotec.org/2026/forte" target="_blank">FORTE</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.discotec.org/2026/coordination" target="_blank">COORDINATION</a>
              <span class="tooltiptext"><?php echo $full_name['COORDINATION']; ?></span>
            </td>
            <td class="location">Urbino, Italy</td>
            <td class="date">8-12 June 2026</td>
            <td class="notification">24 March 2026</td>
            <td class="final">3 April 2026</td>
            <td class="registration">17 May 2026</td>
            <td class="remark">
              part of <a href="https://www.discotec.org/2026/" target="_blank">DisCoTec</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.discotec.org/2026/dais" target="_blank">DAIS<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['DAIS']; ?></span>
            </td>
            <td class="location">Urbino, Italy</td>
            <td class="date">8-12 June 2026</td>
            <td class="notification">27 March 2026</td>
            <td class="final">3 April 2026</td>
            <td class="registration">17 May 2026</td>
            <td class="remark">
              part of <a href="https://www.discotec.org/2026/" target="_blank">DisCoTec</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.discotec.org/2026/forte" target="_blank">FORTE</a>
              <span class="tooltiptext"><?php echo $full_name['FORTE']; ?></span>
            </td>
            <td class="location">Urbino, Italy</td>
            <td class="date">8-12 June 2026</td>
            <td class="notification">27 March 2026</td>
            <td class="final">3 April 2026</td>
            <td class="registration">17 May 2026</td>
            <td class="remark">
              part of <a href="https://www.discotec.org/2026/" target="_blank">DisCoTec</a>
            </td>
          </tr>
	  <tr>
	    <td class="confname"><a href="https://sirocco2026.webspace.durham.ac.uk/" target="_blank">SIROCCO</a>
	      <span class="tooltiptext"><?php echo $full_name['SIROCCO']; ?></span>
	    </td>
	    <td class="location">Durham, United Kingdom</td>
	    <td class="date">9-11 June 2026</td>
	    <td class="notification">20 January 2026</td>
            <td class="final"></td>
            <td class="registration">30 April 2026</td>
            <td class="remark"></td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://cpm2026.compute.dtu.dk/" target="_blank">CPM<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['CPM']; ?></span>
            </td>
            <td class="location">Copenhagen, Denmark</td>
            <td class="date">15-17 June 2026</td>
            <td class="notification">23 December 2025<br>1 April 2026</td>
            <td class="final"></td>
            <td class="registration">12 May 2025</td>
            <td class="remark">
              two submission rounds
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://events.math.unipd.it/ipco2026/" target="_blank">IPCO</a>
              <span class="tooltiptext"><?php echo $full_name['IPCO']; ?></span>
            </td>
            <td class="location">Padova, Italy</td>
            <td class="date">17-19 June 2026</td>
            <td class="notification">15 February 2026</td>
            <td class="final">25 March 2026</td>
            <td class="registration">30 April 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://swat2026.compute.dtu.dk/" target="_blank">SWAT</a>
              <span class="tooltiptext"><?php echo $full_name['SWAT']; ?></span>
            </td>
            <td class="location">Copenhagen, Denmark</td>
            <td class="date">17-19 June 2026</td>
            <td class="notification">10 April 2026</td>
            <td class="final">17 April 2026</td>
            <td class="registration">12 May 2026</td>
            <td class="remark">
              co-located with
              <a href="https://cpm2026.compute.dtu.dk/" target="_blank">CPM</a>
              and
              <a href="https://sea2026.github.io/" target="_blank">SEA</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://theory.utdallas.edu/AAIM2026/" target="_blank">AAIM</a>
              <span class="tooltiptext"><?php echo $full_name['AAIM']; ?></span>
            </td>
            <td class="location">Dallas, Texas, USA</td>
            <td class="date">19-21 June 2026</td>
            <td class="notification">6 May 2026</td>
            <td class="final">13 May 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://sea2026.github.io/" target="_blank">SEA</a>
              <span class="tooltiptext"><?php echo $full_name['SEA']; ?></span>
            </td>
            <td class="location">Copenhagen, Denmark</td>
            <td class="date">22–24 June 2026</td>
            <td class="notification">31 March 2026</td>
            <td class="final"></td>
            <td class="registration">12 May 2026</td>
            <td class="remark">
              co-located with
              <a href="https://cpm2026.compute.dtu.dk/" target="_blank">CPM</a>
              and
              <a href="https://swat2026.compute.dtu.dk/" target="_blank">SWAT</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://aofa2026.info/" target="_blank">AofA</a>
              <span class="tooltiptext"><?php echo $full_name['AofA']; ?></span>
            </td>
            <td class="location">Munich, Germany</td>
            <td class="date">22-26 June 2026</td>
            <td class="notification">20 April 2026</td>
            <td class="final">4 May 2026</td>
            <td class="registration">17 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://conf-2026.petrinet.net/" target="_blank">Petri Nets</a>
              <span class="tooltiptext"><?php echo $full_name['PetriNets']; ?></span>
            </td>
            <td class="location">Hamburg, Germany</td>
            <td class="date">22-26 June 2026</td>
            <td class="notification">8 March 2026</td>
            <td class="final">22 March 2026</td>
            <td class="registration">31 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://acm-stoc.org/stoc2026/" target="_blank">STOC</a>
              <span class="tooltiptext"><?php echo $full_name['STOC']; ?></span>
            </td>
            <td class="location">Salt Lake City, Utah, USA</td>
            <td class="date">22-26 June 2026</td>
            <td class="notification">1 February 2026</td>
            <td class="final">31 March 2026</td>
            <td class="registration">6 June 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://2026.debs.org/" target="_blank">DEBS</a>
              <span class="tooltiptext"><?php echo $full_name['DEBS']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">23-26 June 2026</td>
            <td class="notification">8 May 2026</td>
            <td class="final">15 May 2026</td>
            <td class="registration">24 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://sites.google.com/view/loft2026/home" target="_blank">LOFT</a>
              <span class="tooltiptext"><?php echo $full_name['LOFT']; ?></span>
            </td>
            <td class="location">London, United Kingdom</td>
            <td class="date">24-26 June 2026</td>
            <td class="notification"></td>
            <td class="final"></td>
            <td class="registration">24 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://icaps26.icaps-conference.org/" target="_blank">ICAPS</a>
              <span class="tooltiptext"><?php echo $full_name['ICAPS']; ?></span>
            </td>
            <td class="location">Dublin, Ireland</td>
            <td class="date">27 June - 2 July 2026</td>
            <td class="notification">20 February 2026</td>
            <td class="final"></td>
            <td class="registration">5 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://learningtheory.org/colt2026/" target="_blank">COLT</a>
              <span class="tooltiptext"><?php echo $full_name['COLT']; ?></span>
            </td>
            <td class="location">San Diego, California, USA</td>
            <td class="date">29 June - 3 July 2026</td>
            <td class="notification">4 May 2026</td>
            <td class="final"></td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://conf.researchr.org/track/ecmfa-2026/ecmfa-2026" target="_blank">ECMFA<br>&nbsp;<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['ECMFA']; ?></span>
            </td>
            <td class="location">Rennes, France</td>
            <td class="date">29 June - 3 July 2026</td>
            <td class="notification">6 February 2026<br>10 April 2026<br>15 May 2026</td>
            <td class="final">1 June 2026</td>
            <td class="registration">27 May 2026</td>
            <td class="remark">
              part of <a href="https://conf.researchr.org/home/staf-2026" target="_blank">STAF</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://conf.researchr.org/home/icgt-2026" target="_blank">ICGT</a>
              <span class="tooltiptext"><?php echo $full_name['ICGT']; ?></span>
            </td>
            <td class="location">Rennes, France</td>
            <td class="date">29 June - 3 July 2026</td>
            <td class="notification">6 April 2026</td>
            <td class="final"></td>
            <td class="registration">27 May 2026</td>
            <td class="remark">
              part of <a href="https://conf.researchr.org/home/staf-2026" target="_blank">STAF</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://events.illc.uva.nl/aiml2026/" target="_blank">AiML</a>
              <span class="tooltiptext"><?php echo $full_name['AiML']; ?></span>
            </td>
            <td class="location">Amsterdam, Netherlands</td>
            <td class="date">29 June - 3 July 2026</td>
            <td class="notification">24 April 2026</td>
            <td class="final">15 May 2026</td>
            <td class="registration">22 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
	    <td class="confname"><a href="http://dlt-ncma-2026.sciencesconf.org" target="_blank">DLT</a>
              <span class="tooltiptext"><?php echo $full_name['DLT']; ?></span>
            </td>
	    <td class="location">Rouen, France</td>
	    <td class="date">30 June - 3 July 2026</td>
	    <td class="notification">10 April 2026</td>
            <td class="final">15 April 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
	  </tr>
	  <tr>
	    <td class="confname"><a href="https://matchup2026.crest.science/" target="_blank">MATCH-UP</a>
	      <span class="tooltiptext"><?php echo $full_name['MATCH-UP']; ?></span>
	    </td>
	    <td class="location">Paris, France</td>
	    <td class="date">1-3 July 2026</td>
	    <td class="notification">15 April 2026</td>
            <td class="final">1 June 2026</td>
            <td class="registration">15 May 2026</td>
            <td class="remark"></td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://litis.univ-lehavre.fr/sand2026/" target="_blank">SAND</a>
              <span class="tooltiptext"><?php echo $full_name['SAND']; ?></span>
            </td>
            <td class="location">Le Havre, France</td>
            <td class="date">1-3 July 2026</td>
            <td class="notification">21 April 2026</td>
            <td class="final">2 May 2026</td>
            <td class="registration">10 June 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://tase2026.github.io/" target="_blank">TASE</a>
              <span class="tooltiptext"><?php echo $full_name['TASE']; ?></span>
            </td>
            <td class="location">Shanghai, China</td>
            <td class="date">4-6 July 2026</td>
            <td class="notification">15 April 2026</td>
            <td class="final">1 May 2026</td>
            <td class="registration">30 May / 20 June 2026</td>
            <td class="remark">first registration date for authors, second regular</td>
          </tr>
          <tr>
            <td class="confname"><a href="https://scml.risc.jku.at/conference-2026/" target="_blank">SCML</a>
              <span class="tooltiptext"><?php echo $full_name['SCML']; ?></span>
            </td>
            <td class="location">Hagenberg, Austria</td>
            <td class="date">6-8 July 2026</td>
            <td class="notification">25 May 2026</td>
            <td class="final"></td>
            <td class="registration">8/15 June 2026</td>
            <td class="remark">first registration date for presenters, second for non-presenters</td>
          </tr>
          <tr>
            <td class="confname"><a href="https://ec26.sigecom.org/" target="_blank">EC</a>
              <span class="tooltiptext"><?php echo $full_name['EC']; ?></span>
            </td>
            <td class="location">Rome, Italy</td>
            <td class="date">6-10 July 2026</td>
            <td class="notification">18 May 2026</td>
            <td class="final"></td>
            <td class="registration">29 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.podc.org/" target="_blank">PODC</a>
              <span class="tooltiptext"><?php echo $full_name['PODC']; ?></span>
            </td>
            <td class="location">Egham, England, UK</td>
            <td class="date">6-10 July 2026</td>
            <td class="notification">29 April 2026</td>
            <td class="final"></td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              co-located with
              <a href="https://icalppodcspaa2026.cs.rhul.ac.uk/icalp/" target="_blank">ICALP</a> and
              <a href="https://spaa.acm.org/" target="_blank">SPAA</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://spaa.acm.org/" target="_blank">SPAA</a>
              <span class="tooltiptext"><?php echo $full_name['SPAA']; ?></span>
            </td>
            <td class="location">Egham, England, UK</td>
            <td class="date">6-10 July 2026</td>
            <td class="notification">15 May 2026</td>
            <td class="final">5 June 2026</td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              co-located with
              <a href="https://icalppodcspaa2026.cs.rhul.ac.uk/icalp/" target="_blank">ICALP</a> and
              <a href="https://www.podc.org/" target="_blank">PODC</a>
            </td>
          </tr>
	  <tr>
	    <td class="confname"><a href="https://www.antsxvii.org/" target="_blank">ANTS</a>
	      <span class="tooltiptext"><?php echo $full_name['ANTS']; ?></span>
	    </td>
	    <td class="location">Groningen, Netherlands</td>
	    <td class="date">6-10 July 2026</td>
	    <td class="notification">20 April 2026</td>
            <td class="final">5 June 2026</td>
            <td class="registration">15 June 2026</td>
            <td class="remark">post-proceedings</td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://icml.cc/" target="_blank">ICML</a>
              <span class="tooltiptext"><?php echo $full_name['ICML']; ?></span>
            </td>
            <td class="location"> Seoul, South Korea</td>
            <td class="date">6-11 July 2026</td>
            <td class="notification">30 April 2026</td>
            <td class="final"></td>
            <td class="registration">15 June 2026</td>
            <td class="remark">registration <b>cancellation</b> deadline</td>
          </tr>
          <tr>
            <td class="confname"><a href="https://icalppodcspaa2026.cs.rhul.ac.uk/icalp/" target="_blank">ICALP</a>
              <span class="tooltiptext"><?php echo $full_name['ICALP']; ?></span>
            </td>
            <td class="location">Egham, England, UK</td>
            <td class="date">7-10 July 2026</td>
            <td class="notification">20 April 2026</td>
            <td class="final">11 May 2026</td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              co-located with
              <a href="https://www.podc.org/" target="_blank">PODC</a> and
              <a href="https://spaa.acm.org/" target="_blank">SPAA</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.sc-square.org/CSA/workshop11.html" target="_blank">SC2</a>
              <span class="tooltiptext"><?php echo $full_name['SC2']; ?></span>
            </td>
            <td class="location">Oldenburg, Germany</td>
            <td class="date">13 July 2026</td>
            <td class="notification">22 May 2026</td>
            <td class="final">1 June 2026</td>
            <td class="registration">14June 2026</td>
            <td class="remark">
              co-located with <a href="https://www.issac-conference.org/2026/" target="_blank">ISSAC</a>
            </td>
          </tr>
	  <tr>
	    <td class="confname"><a href="https://www.issac-conference.org/2026/" target="_blank">ISSAC</a>
	      <span class="tooltiptext"><?php echo $full_name['ISSAC']; ?></span>
	    </td>
	    <td class="location">Oldenburg, Germany</td>
	    <td class="date">13-16 July 2026</td>
            <td class="notification">1 May 2026</td>
            <td class="final">8 May 2026</td>
            <td class="registration">14 June 2026</td>
            <td class="remark"></td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://gecco-2026.sigevo.org/" target="_blank">GECCO</a>
              <span class="tooltiptext"><?php echo $full_name['GECCO']; ?></span>
            </td>
            <td class="location">San José, Costa Rica</td>
            <td class="date">13-17 July 2026</td>
            <td class="notification">20 March 2026</td>
            <td class="final">10 April 2026</td>
            <td class="registration">11 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://nmr.krportal.org/2026/" target="_blank">NMR</a>
              <span class="tooltiptext"><?php echo $full_name['NMR']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">17-19 July 2026</td>
            <td class="notification">18 May 2026</td>
            <td class="final">17 June 2026</td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://dl-2026.github.io/" target="_blank">DL</a>
              <span class="tooltiptext"><?php echo $full_name['DL']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">17-19 July 2026</td>
            <td class="notification">20 May 2026</td>
            <td class="final">21 June 2026</td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://sites.google.com/view/aspocp2026/" target="_blank">ASPOCP</a>
              <span class="tooltiptext"><?php echo $full_name['ASPOCP']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">18 July 2026</td>
            <td class="notification">31 Mai 2026</td>
            <td class="final"></td>
            <td class="registration">1 June 2026</td>
            <td class="remark">workshop of <a href="https://www.floc26.org/" target="_blank">FLoC</a></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://ml4sp.github.io/" target="_blank">ML4SP</a>
              <span class="tooltiptext"><?php echo $full_name['ML4SP']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">18 July 2026</td>
            <td class="notification">25 May 2026</td>
            <td class="final">2 July 2026</td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              workshop of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://lsfa-workshop.github.io/2026/" target="_blank">LSFA</a>
              <span class="tooltiptext"><?php echo $full_name['LSFA']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">18-19 July 2026</td>
            <td class="notification">25 May 2026</td>
            <td class="final"></td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://proofcomplexityworkshop.gitpages.uni-jena.de/" target="_blank">Proof Complexity</a>
              <span class="tooltiptext"><?php echo $full_name['ProofComplexity']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">18-19 July 2026</td>
            <td class="notification">20 May 2026</td>
            <td class="final"></td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>,
              workshop of <a href="https://satisfiability.org/SAT26/" target="_blank">SAT</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://qbf-workshop.github.io/" target="_blank">QBF</a>
              <span class="tooltiptext"><?php echo $full_name['QBF']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">19 July 2026</td>
            <td class="notification">27 May 2026</td>
            <td class="final"></td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              workshop of <a href="https://www.floc26.org/" target="_blank">FLoC</a>,
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://wpte2026.github.io/" target="_blank">WPTE</a>
              <span class="tooltiptext"><?php echo $full_name['WPTE']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">19 July 2026</td>
            <td class="notification">25 May 2026</td>
            <td class="final">29 June 2026</td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>,
              workshop of <a href="https://fscd2026.github.io/" target="_blank">FSCD</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://theduworkshop.github.io/ThEduWebSite/#thedu26-presentation" target="_blank">ThEdu</a>
              <span class="tooltiptext"><?php echo $full_name['ThEdu']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">19 July 2026</td>
            <td class="notification">1 June 2026</td>
            <td class="final"></td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              workshop of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="http://www.termgraph.org.uk/2026/" target="_blank">TERMGRAPH</a>
              <span class="tooltiptext"><?php echo $full_name['TERMGRAPH']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">19 July 2026</td>
            <td class="notification">27 May 2026</td>
            <td class="final">11 June 2026</td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              workshop of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://cp2026.a4cp.org/" target="_blank">CP</a>
              <span class="tooltiptext"><?php echo $full_name['CP']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">20-23 July 2026</td>
            <td class="notification">30 April 2026</td>
            <td class="final">7 May 2026</td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://lics.siglog.org/lics26/" target="_blank">LICS</a>
              <span class="tooltiptext"><?php echo $full_name['LICS']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">20-23 July 2026</td>
            <td class="notification">16 April 2026</td>
            <td class="final"></td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
	  <tr>
	    <td class="confname"><a href="https://fscd2026.github.io/" target="_blank">FSCD</a>
	      <span class="tooltiptext"><?php echo $full_name['FSCD']; ?></span>
	    </td>
	    <td class="location">Lisbon, Portugal</td>
	    <td class="date">20-23 July 2026</td>
            <td class="notification">16 April 2026</td>
            <td class="final">30 April 2026</td>
            <td class="registration">15 May 2026</td>
	    <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://www.semsys.aau.at/events/iclp2026/" target="_blank">ICLP<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['ICLP']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">20-23 July 2026</td>
            <td class="notification">12/27 March 2026<br>24 April 2026</td>
            <td class="final"></td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://kr.org/KR2026/" target="_blank">KR</a>
              <span class="tooltiptext"><?php echo $full_name['KR']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">20-23 July 2026</td>
            <td class="notification">13 April 2026</td>
            <td class="final">3 May 2026</td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://satisfiability.org/SAT26/" target="_blank">SAT</a>
              <span class="tooltiptext"><?php echo $full_name['SAT']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">20-23 July 2026</td>
            <td class="notification">30 April 2026</td>
            <td class="final">14 May 2026</td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://icdcs2026.icdcs.org/" target="_blank">ICDCS</a>
              <span class="tooltiptext"><?php echo $full_name['ICDCS']; ?></span>
            </td>
            <td class="location">Seoul, South Korea</td>
            <td class="date">20-24 July 2026</td>
            <td class="notification"></td>
            <td class="final"></td>
            <td class="registration">15 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://event.ntu.edu.sg/cocoon2026/" target="_blank">COCOON<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['COCOON']; ?></span>
            </td>
            <td class="location">Singapore</td>
            <td class="date">23-25 July 2026</td>
            <td class="notification">6 May 2026</td>
            <td class="final">29 May 2026</td>
            <td class="registration">31 May 2026<br>23:59 (UTC+08)</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www3.risc.jku.at/conferences/unif2026/" target="_blank">UNIF</a>
              <span class="tooltiptext"><?php echo $full_name['UNIF']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">24 July 2026</td>
            <td class="notification">5 June 2026</td>
            <td class="final">13 June 2026</td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              workshop of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://lfmtp.github.io/lfmtp-page/workshops/2026/" target="_blank">LFMTP</a>
              <span class="tooltiptext"><?php echo $full_name['LFMTP']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">24 July 2026</td>
            <td class="notification">28 May 2026</td>
            <td class="final">10 June 2026</td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>, workshop of <a href="https://fscd2026.github.io/" target="_blank">FSCD</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://iltp.de/ARQNL-2026/" target="_blank">ARQNL</a>
              <span class="tooltiptext"><?php echo $full_name['ARQNL']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">24 July 2026</td>
            <td class="notification">1 June 2026</td>
            <td class="final">29 June 2026</td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              workshop of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://iwc2026.github.io/" target="_blank">IWC</a>
              <span class="tooltiptext"><?php echo $full_name['IWC']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">24 July 2026</td>
            <td class="notification">28 May 2026</td>
            <td class="final">23 June 2026</td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              workshop of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://paar2026.github.io/" target="_blank">PAAR</a>
              <span class="tooltiptext"><?php echo $full_name['PAAR']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">25 July 2026</td>
            <td class="notification">20 May 2026</td>
            <td class="final">1 July 2026</td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              workshop of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://termination-portal.org/wiki/21st_International_Workshop_on_Termination" target="_blank">WST</a>
              <span class="tooltiptext"><?php echo $full_name['WST']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">25 July 2026</td>
            <td class="notification">26 May 2026</td>
            <td class="final">26 June 2026</td>
            <td class="registration">1 June 2026</td>
            <td class="remark">
              workshop of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://conferences.i-cav.org/2026/" target="_blank">CAV<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['CAV']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">26-29 July 2026</td>
            <td class="notification">4 March 2026<br>17 April 2026</td>
            <td class="final"></td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
	  <tr>
	    <td class="confname"><a href="https://csf2026.ieee-security.org/" target="_blank">CSF</a>
	      <span class="tooltiptext"><?php echo $full_name['CSF']; ?></span>
	    </td>
	    <td class="location">Lisbon, Portugal</td>
	    <td class="date">26-29 July 2026</td>
	    <td class="notification">1 April 2026</td>
            <td class="final"></td>
            <td class="registration">15 May 2026</td>
	    <td class="remark">
	      part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
	    </td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://www.floc26.org/ijcar" target="_blank">IJCAR</a>
              <span class="tooltiptext"><?php echo $full_name['IJCAR']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">26-29 July 2026</td>
            <td class="notification">14 April 2026</td>
            <td class="final">15 June 2026</td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://itp-conference-2026.github.io/" target="_blank">ITP</a>
              <span class="tooltiptext"><?php echo $full_name['ITP']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">26-29 July 2026</td>
            <td class="notification">26 April 2026</td>
            <td class="final">24 May 2026</td>
            <td class="registration">15 May 2026</td>
            <td class="remark">
              part of <a href="https://www.floc26.org/" target="_blank">FLoC</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.uni-trier.de/en/universitaet/fachbereiche-faecher/fachbereich-iv/faecher/informatikwissenschaften/professuren/theoretische-informatik/research/conferences-and-workshops/translate-to-englisch-mcu-2026" target="_blank">MCU</a>
              <span class="tooltiptext"><?php echo $full_name['MCU']; ?></span>
            </td>
            <td class="location">Trier, Germany</td>
            <td class="date">27-29 July 2026</td>
            <td class="notification">15 June 2026</td>
            <td class="final"></td>
            <td class="registration">30 June 2026</td>
            <td class="remark">
              co-located with <a href="https://www.uni-trier.de/en/universitaet/fachbereiche-faecher/fachbereich-iv/faecher/informatikwissenschaften/professuren/theoretische-informatik/research/conferences-and-workshops/translate-to-englisch-cie-2026" target="_blank">CiE</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://iphils.uj.edu.pl/tacl/" target="_blank">TACL</a>
              <span class="tooltiptext"><?php echo $full_name['TACL']; ?></span>
            </td>
            <td class="location">Krak&oacute;w, Poland</td>
            <td class="date">27-31 July 2026</td>
            <td class="notification">27 April 2026</td>
            <td class="final"></td>
            <td class="registration">31 May 2026</td>
            <td class="remark">summer school 21-25 July 2026</td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.uni-trier.de/en/universitaet/fachbereiche-faecher/fachbereich-iv/faecher/informatikwissenschaften/professuren/theoretische-informatik/research/conferences-and-workshops/translate-to-englisch-cie-2026" target="_blank">CiE</a>
              <span class="tooltiptext"><?php echo $full_name['CiE']; ?></span>
            </td>
            <td class="location">Trier, Germany</td>
            <td class="date">27-31 July 2026</td>
            <td class="notification">27 April 2026</td>
            <td class="final">4 May 2026</td>
            <td class="registration">30 June 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://cca-net.de/cca2026/" target="_blank">CCA</a>
              <span class="tooltiptext"><?php echo $full_name['CCA']; ?></span>
            </td>
            <td class="location">Trier, Germany</td>
            <td class="date">29-31 July 2026</td>
            <td class="notification">5 June 2026</td>
            <td class="final">26 June 2026</td>
            <td class="registration">30 June 2026</td>
            <td class="remark">
              co-located with
              <a href="https://www.uni-trier.de/en/universitaet/fachbereiche-faecher/fachbereich-iv/faecher/informatikwissenschaften/professuren/theoretische-informatik/research/conferences-and-workshops/translate-to-englisch-cie-2026" target="_blank">CiE</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://computationalcomplexity.org/" target="_blank">CCC</a>
              <span class="tooltiptext"><?php echo $full_name['CCC']; ?></span>
            </td>
            <td class="location">Lisbon, Portugal</td>
            <td class="date">3-6 August 2026</td>
            <td class="notification">1 May 2026</td>
            <td class="final">end of May</td>
            <td class="registration">10 July 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="http://wollic.org/wollic2026/" target="_blank">WoLLIC</a>
              <span class="tooltiptext"><?php echo $full_name['WoLLIC']; ?></span>
            </td>
            <td class="location">Lima, Peru</td>
            <td class="date">3-6 August 2026</td>
            <td class="notification">5 May 2026</td>
            <td class="final">20 May 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://research.cs.queensu.ca/ciaa2026/" target="_blank">CIAA</a>
              <span class="tooltiptext"><?php echo $full_name['CIAA']; ?></span>
            </td>
            <td class="location">Kingston, Ontario, Canada</td>
            <td class="date">5-8 August 2026</td>
            <td class="notification">1 May 2026</td>
            <td class="final">8 May 2026</td>
            <td class="registration">1 July 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://research.cs.queensu.ca/dcfs2026/" target="_blank">DCFS</a>
              <span class="tooltiptext"><?php echo $full_name['DCFS']; ?></span>
            </td>
            <td class="location">Kingston, Ontario, Canada</td>
            <td class="date">9-11 August 2026</td>
            <td class="notification">24 April 2026</td>
            <td class="final">1 May 2026</td>
            <td class="registration">1 July 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
	    <td class="confname"><a href="https://kdd2026.kdd.org/" target="_blank">KDD<br>&nbsp;</a>
	      <span class="tooltiptext"><?php echo $full_name['KDD']; ?></span>
	    </td>
	    <td class="location">Jeju Island, South Korea</td>
	    <td class="date">9-13 August 2026</td>
	    <td class="notification">23 November 2025<br>16 May 2026</td>
            <td class="final"></td>
            <td class="registration">17 June 2026</td>
	    <td class="remark">
	      two submission cycles
            </td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://sites.google.com/view/cccg-2026/" target="_blank">CCCG</a>
              <span class="tooltiptext"><?php echo $full_name['CCCG']; ?></span>
            </td>
            <td class="location">Orillia, Ontario, Canada</td>
            <td class="date">12-14 August 2026</td>
            <td class="notification">12 June 2026</td>
            <td class="final">30 June 2026</td>
            <td class="registration">15 July 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://socs26.search-conference.org/" target="_blank">SoCS</a>
              <span class="tooltiptext"><?php echo $full_name['SoCS']; ?></span>
            </td>
            <td class="location">Bremerhaven, Germany</td>
            <td class="date">14-16 August 2026</td>
            <td class="notification">16 May 2026</td>
            <td class="final">5 June 2026</td>
            <td class="registration">31 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://2026.ijcai.org/" target="_blank">IJCAI<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['IJCAI']; ?></span>
            </td>
            <td class="location">Bremen, Germany</td>
            <td class="date">15-21 August 2026</td>
            <td class="notification">4 March 2026<br>29 April 2026</td>
            <td class="final">15 May 2026</td>
            <td class="registration">15 June 2026</td>
            <td class="remark">joint with ECAI</td>
          </tr>
          <tr>
            <td class="confname"><a href="https://crypto.iacr.org/2026/" target="_blank">CRYPTO</a>
              <span class="tooltiptext"><?php echo $full_name['CRYPTO']; ?></span>
            </td>
            <td class="location">Santa Barbara, California, USA</td>
            <td class="date">17-20 August 2026</td>
            <td class="notification">4 May 2026</td>
            <td class="final">8 June 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://graphdrawing.github.io/gd2026/" target="_blank">GD</a>
              <span class="tooltiptext"><?php echo $full_name['GD']; ?></span>
            </td>
            <td class="location">St. Catharines, Ontario, Canada</td>
            <td class="date">17-21 August 2026</td>
            <td class="notification">24 June 2026</td>
            <td class="final">29 July 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://approxconference.wordpress.com/" target="_blank">APPROX</a>
              <span class="tooltiptext"><?php echo $full_name['APPROX']; ?></span>
            </td>
            <td class="location">Boston, Massachusetts, USA</td>
            <td class="date">19-21 August 2026</td>
            <td class="notification">25 June 2026</td>
            <td class="final">12 July 2026</td>
            <td class="registration"></td>
            <td class="remark">
              co-located with <a href="https://randomconference.com/random-2026-home/" target="_blank">RANDOM</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://randomconference.com/random-2026-home/" target="_blank">RANDOM</a>
              <span class="tooltiptext"><?php echo $full_name['RANDOM']; ?></span>
            </td>
            <td class="location">Boston, Massachusetts, USA</td>
            <td class="date">19-21 August 2026</td>
            <td class="notification">25 June 2026</td>
            <td class="final">12 July 2026</td>
            <td class="registration"></td>
            <td class="remark">
              co-located with <a href="https://approxconference.wordpress.com/" target="_blank">APPROX</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://2026.fedcsis.org/" target="_blank">FedCSIS</a>
              <span class="tooltiptext"><?php echo $full_name['FedCSIS']; ?></span>
            </td>
            <td class="location">Riga, Latvia</td>
            <td class="date">23-26 August 2026</td>
            <td class="notification">6 June 2026</td>
            <td class="final">19 June 2026</td>
            <td class="registration">19 June 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://2026.declarativeai.net/ruleml-rr" target="_blank">RuleML+RR</a>
              <span class="tooltiptext"><?php echo $full_name['RuleML+RR']; ?></span>
            </td>
            <td class="location">Vilnius, Lithuania</td>
            <td class="date">24-26 August 2026</td>
            <td class="notification">3 July 2026</td>
            <td class="final"></td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://2026.euro-par.org/" target="_blank">Euro-Par</a>
              <span class="tooltiptext"><?php echo $full_name['Euro-Par']; ?></span>
            </td>
            <td class="location">Pisa, Italy</td>
            <td class="date">24-28 August 2026</td>
            <td class="notification">30 April 2026</td>
            <td class="final">22 May 2026</td>
            <td class="registration">30 June 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://mfcs2026.irif.fr/" target="_blank">MFCS</a>
              <span class="tooltiptext"><?php echo $full_name['MFCS']; ?></span>
            </td>
            <td class="location">Paris, France</td>
            <td class="date">24-28 August 2026</td>
            <td class="notification">19 June 2026</td>
            <td class="final">26 June 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://icfp26.sigplan.org/" target="_blank">ICFP</a>
              <span class="tooltiptext"><?php echo $full_name['ICFP']; ?></span>
            </td>
            <td class="location">Indianapolis, Indiana, USA</td>
            <td class="date">24-29 August 2026</td>
            <td class="notification">10 June 2026</td>
            <td class="final">1 July 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://patatconference.org/patat2026/" target="_blank">PATAT</a>
              <span class="tooltiptext"><?php echo $full_name['PATAT']; ?></span>
            </td>
            <td class="location">Nottingham, United Kingdom</td>
            <td class="date">25-28 August 2026</td>
            <td class="notification">15 May 2026</td>
            <td class="final">22 June 2026</td>
            <td class="registration">22 June 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://concepts2026.org/" target="_blank">CONCEPTS</a>
              <span class="tooltiptext"><?php echo $full_name['CONCEPTS']; ?></span>
            </td>
            <td class="location">Montpellier, France</td>
            <td class="date">31 August - 4 September 2026</td>
            <td class="notification">20 April 2026</td>
            <td class="final">15 May 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://algo-conference.org/2026/esa/" target="_blank">ESA</a>
              <span class="tooltiptext"><?php echo $full_name['ESA']; ?></span>
            </td>
            <td class="location">L&apos;Aquila, Italy</td>
            <td class="date">31 August - 2 September 2026</td>
            <td class="notification">26 June 2026</td>
            <td class="final"></td>
            <td class="registration"></td>
            <td class="remark">
              part of <a href="https://algo-conference.org/2026/" target="_blank">ALGO</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://algo-conference.org/2026/wabi/" target="_blank">WABI</a>
              <span class="tooltiptext"><?php echo $full_name['WABI']; ?></span>
            </td>
            <td class="location">L&apos;Aquila, Italy</td>
            <td class="date">31 August - 4 September 2026</td>
            <td class="notification">25 June 2026</td>
            <td class="final">2 July 2026</td>
            <td class="registration"></td>
            <td class="remark">
              part of <a href="https://algo-conference.org/2026/" target="_blank">ALGO</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://time26.cnr.it/" target="_blank">TIME</a>
              <span class="tooltiptext"><?php echo $full_name['TIME']; ?></span>
            </td>
            <td class="location">Cork, Ireland</td>
            <td class="date">1-3 September 2026</td>
            <td class="notification">22 June 2026</td>
            <td class="final">24 July 2026</td>
            <td class="registration">10 July 2026</td>
            <td class="remark">also author registration deadline</td>
          </tr>
	  <tr>
	    <td class="confname"><a href="https://confest-2026.github.io/" target="_blank">CONFEST</a>
	      <span class="tooltiptext"><?php echo $full_name['CONFEST']; ?></span>
	    </td>
	    <td class="location">Liverpool, United Kingdom</td>
	    <td class="date">1-5 September 2026</td>
	    <td class="notification"></td>
	    <td class="final"></td>
	    <td class="registration"></td>
	    <td class="remark">federated conference including
	      <a href="https://confest-2026.github.io/concur/">CONCUR</a>,
	      <a href="https://confest-2026.github.io/fmics/">FMICS</a>,
	      <a href="https://confest-2026.github.io/qestformats/">QEST</a>,
	      and
	      <a href="https://confest-2026.github.io/qestformats/">FORMATS</a>
	    </td>
	  </tr>
          <tr>
            <td class="confname"><a href="https://confest-2026.github.io/concur/" target="_blank">CONCUR</a>
              <span class="tooltiptext"><?php echo $full_name['CONCUR']; ?></span>
            </td>
            <td class="location">Liverpool, United Kingdom</td>
            <td class="date">1-5 September 2026</td>
            <td class="notification">15 June 2026</td>
            <td class="final">29 June 2026</td>
            <td class="registration"></td>
            <td class="remark">
              part of <a href="https://confest-2026.github.io/" target="_blank">CONFEST</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.qest-formats.org/" target="_blank">QEST</a>
              <span class="tooltiptext"><?php echo $full_name['QEST']; ?></span>
            </td>
            <td class="location">Liverpool, United Kingdom</td>
            <td class="date">2-4 September 2026</td>
            <td class="notification">3 June 2026</td>
            <td class="final">24 June 2026</td>
            <td class="registration"></td>
            <td class="remark">
              artifact submission 27 April 2026;
              part of <a href="https://confest-2026.github.io/" target="_blank">CONFEST</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.qest-formats.org/" target="_blank">FORMATS</a>
              <span class="tooltiptext"><?php echo $full_name['FORMATS']; ?></span>
            </td>
            <td class="location">Liverpool, United Kingdom</td>
            <td class="date">2-4 September 2026</td>
            <td class="notification">3 June 2026</td>
            <td class="final">24 June 2026</td>
            <td class="registration"></td>
            <td class="remark">
              artifact submission 27 April 2026;
              part of <a href="https://confest-2026.github.io/" target="_blank">CONFEST</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://confest-2026.github.io/fmics/" target="_blank">FMICS</a>
              <span class="tooltiptext"><?php echo $full_name['FMICS']; ?></span>
            </td>
            <td class="location">Liverpool, United Kingdom</td>
            <td class="date">2-4 September 2026</td>
            <td class="notification">1 June 2026</td>
            <td class="final">15 June 2026</td>
            <td class="registration"></td>
            <td class="remark">
              part of <a href="https://confest-2026.github.io/" target="_blank">CONFEST</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://lpnmr2026.aics.aau.at/" target="_blank">LPNMR</a>
              <span class="tooltiptext"><?php echo $full_name['LPNMR']; ?></span>
            </td>
            <td class="location">Klagenfurt, Austria</td>
            <td class="date">7-11 September 2026</td>
            <td class="notification">11 June 2026</td>
            <td class="final">2 July 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://scn.unisa.it" target="_blank">SCN</a>
              <span class="tooltiptext"><?php echo $full_name['SCN']; ?></span>
            </td>
            <td class="location">Amalfi (SA), Italy</td>
            <td class="date">14-16 September 2026</td>
            <td class="notification">28 April 2028</td>
            <td class="final">15 May 2026</td>
            <td class="registration">15 May 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://fmcad.org/FMCAD26/" target="_blank">FMCAD</a>
              <span class="tooltiptext"><?php echo $full_name['FMCAD']; ?></span>
            </td>
            <td class="location">Graz, Austria</td>
            <td class="date">14-18 September 2026</td>
            <td class="notification">19 July 2026</td>
            <td class="final">1 August 2026</td>
            <td class="registration">1 August 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://sites.google.com/di.uniroma1.it/esorics2026/" target="_blank">ESORICS</a>
              <span class="tooltiptext"><?php echo $full_name['ESORICS']; ?></span>
            </td>
            <td class="location">Rome, Italy</td>
            <td class="date">14-18 September 2026</td>
            <td class="notification">12 June 2026</td>
            <td class="final">26 June 2026</td>
            <td class="registration">26 June 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://euramas.github.io/eumas2026/" target="_blank">EUMAS</a>
              <span class="tooltiptext"><?php echo $full_name['EUMAS']; ?></span>
            </td>
            <td class="location">Malm&ouml;, Sweden</td>
            <td class="date">21-25 September 2026</td>
            <td class="notification">30 June 2026</td>
            <td class="final">19 July 2026</td>
            <td class="registration">31 July 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://cicm-conference.org/2026/cicm.php" target="_blank">CICM</a>
              <span class="tooltiptext"><?php echo $full_name['CICM']; ?></span>
            </td>
            <td class="location">Ljubljana, Slovenia</td>
            <td class="date">21-25 September 2026</td>
            <td class="notification">10 June 2026</td>
            <td class="final">1 July 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://safecomp2026.webs.upv.es/" target="_blank">SAFECOMP</a>
              <span class="tooltiptext"><?php echo $full_name['SAFECOMP']; ?></span>
            </td>
            <td class="location">Valencia, Spain</td>
            <td class="date">22-25 September 2026</td>
            <td class="notification">1 May 2026</td>
            <td class="final">7 June 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.imn.htwk-leipzig.de/WLP2026/" target="_blank">WLP</a>
              <span class="tooltiptext"><?php echo $full_name['WLP']; ?></span>
            </td>
            <td class="location">Dresden, Germany</td>
            <td class="date">23 September 2026</td>
            <td class="notification">6 July 2026</td>
            <td class="final">14 July 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://conf.researchr.org/home/splash-issta-2026/sas-2026" target="_blank">SAS</a>
              <span class="tooltiptext"><?php echo $full_name['SAS']; ?></span>
            </td>
            <td class="location">Oakland, California, USA</td>
            <td class="date">3-9 October 2026</td>
            <td class="notification">3 July 2026</td>
            <td class="final">17 July 2026</td>
            <td class="registration"></td>
            <td class="remark">
              part of <a href="https://2026.splashcon.org/" target="_blank">SPLASH</a>
            </td>
          </tr>
          <tr>
            <td class="confname"><a href="https://pact2026.github.io/" target="_blank">PACT</a>
              <span class="tooltiptext"><?php echo $full_name['PACT']; ?></span>
            </td>
            <td class="location">Chicago, Illinois, USA</td>
            <td class="date">19-22 October 2026</td>
            <td class="notification">5 August 2026</td>
            <td class="final">2 October 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://sanjeevkhanna.org/FOCS2026_CFP.html" target="_blank">FOCS<br>&nbsp;</a>
              <span class="tooltiptext"><?php echo $full_name['FOCS']; ?></span>
            </td>
            <td class="location">New York City, New York, USA</td>
            <td class="date">8-11 November 2026</td>
            <td class="notification">3 July 2026</td>
            <td class="final"></td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://adt2026.sciencesconf.org/" target="_blank">ADT</a>
              <span class="tooltiptext"><?php echo $full_name['ADT']; ?></span>
            </td>
            <td class="location">Paris, France</td>
            <td class="date">16-18 November 2026</td>
            <td class="notification">27 July 2026</td>
            <td class="final">25 August 2026</td>
            <td class="registration">1 October 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://www.siam.org/conferences-events/siam-conferences/sdm26/" target="_blank">SDM</a>
              <span class="tooltiptext"><?php echo $full_name['SDM']; ?></span>
            </td>
            <td class="location">Salt Lake City, Utah, USA</td>
            <td class="date">19-20 November 2026</td>
            <td class="notification">late July</td>
            <td class="final"></td>
            <td class="registration">19 October 2026</td>
            <td class="remark"></td>
          </tr>
          <tr>
            <td class="confname"><a href="https://conf.researchr.org/track/aplas-atva-2026/atva-2026" target="_blank">ATVA</a>
              <span class="tooltiptext"><?php echo $full_name['ATVA']; ?></span>
            </td>
            <td class="location">Hong Kong, SAR China</td>
            <td class="date">1-5 December 2026</td>
            <td class="notification">23 July 2026</td>
            <td class="final">10 September 2026</td>
            <td class="registration"></td>
            <td class="remark"></td>
          </tr>
	</tbody>
	<tfoot>
	  <tr>
	    <th>Conference</th>
	    <th>City, Country</th>
	    <th>Date</th>
	    <th>Notification</th>
	    <th>Final version</th>
	    <th>Early registration</th>
	    <th>Remarks and other indications</th>
	  </tr>
	</tfoot>
      </table>

      <h2 id="planning">Conference planning</h2>

      <nav class="navlist">
	<ul class="navlist">
	  <li class="navlist"><a href="#">Home</a></li>
      	  <li class="navlist"><a href="#ahead">Deadline ahead</a></li>
	  <li class="navlist"><a href="#running">Running conferences</a></li>
      	  <li class="navlist"><a href="#future">Future conferences (deadline over)</a></li>
	  <li class="navlist"><a class="active" href="#planning">Conference planning</a></li>
	  <li class="navlist"><a href="#instructions">Instructions</a></li>
	  <li class="navlist"><a href="#included">Included conferences</a></li>
	</ul>
      </nav>

      <p>
	This section serves
      </p>
      <ol>
	<li>for planning conferences in the future,</li>
	<li>to indicate the planned (tentative) dates for a conference, and</li>
	<li>to inform organizers of other conferences about these dates to avoid scheduling clashes.</li>
      </ol>

      <p>
	The <b>calendar</b> for the years <a href="http://www.timeanddate.com/calendar/" target="_blank">2026</a> and <a href="http://www.timeanddate.com/calendar/?year=2027" target="_blank">2027</a> can help you to plan the conferences.
      </p>

      <p>
	If you wish the tentative schedule of your conference to be listed here,
	send me an e-mail
	(change &nbsp;_at_&nbsp; to @ and &nbsp;_dot_&nbsp;  twice to .)
	with the following template:
      </p>

      <p class="central">
        <a href="mailto:hermann_at_lix_dot_polytechnique_dot_fr?cc=martin_dot_krejca_at_polytechnique_dot_edu&subject=%5Bconf%5D%20New%20planned%20conference%20with%20tentative%20schedule&body=Please%2C%20include%20the%20following%20conference%20with%20the%20tentative%20dates%20into%20your%20planning.%0A%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%3Ctr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22confname%22%3E%3Ca%20href%3D%22http%3A%2F%2Fmy-url%22%3Etarget%3D%22_blank%22%3EMy%20Conference%3C%2Fa%3E%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22year%22%3EPlanning%20year%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22location%22%3EMy%20city%2C%20My%20country%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22starting-date%22%3EDD1%20MONTH%20YYYY%20starting%20date%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22ending-date%22%3EDD2%20MONTH%20YYYY%20ending%20date%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22remark%22%3E%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%3C%2Ftr%3E%0A%0AThanks%20in%20advance.%0ABest%20regards%2C%0A%0AJohn%20Doe%0A">E-mail with a template for a <b>planned conference</b></a>
</p>

<table class="conference">
  <thead>
    <tr>
      <th>Conference</th>
      <th>Year</th>
      <th>City, Country</th>
      <th>Starting date</th>
      <th>Ending date</th>
      <th>Remark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="confname"><a href="https://www.floc26.org/" target="_blank">FLoC</a>
	<span class="tooltiptext"><?php echo $full_name['FLoC']; ?></span>
      </td>
      <td class="year">2026</td>
      <td class="location">Lisbon, Portugal</td>
      <td class="starting-date">18 July 2026</td>
      <td class="ending-date">29 July 2026</td>
      <td class="remark">summer school 13-17 July 2026;
	includes
	<a href="https://conferences.i-cav.org/2026/" target="_blank">CAV</a>,
	<a href="https://cp2026.a4cp.org/" target="_blank">CP</a>,
	<a href="https://csf2026.ieee-security.org/" target="_blank">CSF</a>,
	<a href="https://fscd2026.github.io/" target="_blank">FSCD</a>,
	<a href="https://www.semsys.aau.at/events/iclp2026/" target="_blank">ICLP</a>,
	<a href="https://www.floc26.org/ijcar" target="_blank">IJCAR</a>,
	<a href="https://itp-conference-2026.github.io/" target="_blank">ITP</a>,
	<a href="https://kr.org/KR2026/">KR</a>,
	<a href="https://lics.siglog.org/lics26/" target="_blank">LICS</a>, 
	<a href="https://satisfiability.org/SAT26/" target="_blank">SAT</a>
      </td>
    </tr>
    <tr>
      <td class="confname"><a href="https://algo-conference.org/2026/" target="_blank">ALGO</a>
        <span class="tooltiptext"><?php echo $full_name['ALGO']; ?></span>
      </td>
      <td class="year">2026</td>
      <td class="location">L&apos;Aquila, Italy</td>
      <td class="starting-date">31 August 2026</td>
      <td class="ending-date">4 September 2026</td>
      <td class="remark">federated conference including
        <a href="https://algo-conference.org/2026/algocloud/" target="_blank">ALGOCLOUD</a>,
        <a href="https://algo-conference.org/2026/algowin/" target="_blank">ALGOWIN</a>,
        <a href="https://algo-conference.org/2026/atmos/" target="_blank">ATMOS</a>,
        <a href="https://algo-conference.org/2026/esa/" target="_blank">ESA</a>,
        <a href="https://algo-conference.org/2026/ipec/" target="_blank">IPEC</a>,
        <a href="https://algo-conference.org/2026/wabi/" target="_blank">WABI</a>,
        and
        <a href="https://algo-conference.org/2026/waoa/" target="_blank">WAOA</a>
      </td>
    </tr>
    <tr>
      <td class="confname"><a href="https://lap.math.hr/LAP2026/" target="_blank">LAP</a>
        <span class="tooltiptext"><?php echo $full_name['LAP']; ?></span>
      </td>
      <td class="year">2026</td>
      <td class="location">Dubrovnik, Croatia</td>
      <td class="starting-date">23 September 2026</td>
      <td class="ending-date">27 September 2026</td>
      <td class="remark"></td>
    </tr>
    <tr>
      <td class="confname"><a href="https://2026.splashcon.org/" target="_blank">SPLASH</a>
        <span class="tooltiptext"><?php echo $full_name['SPLASH']; ?></span>
      </td>
      <td class="year">2026</td>
      <td class="location">Oakland, California, USA</td>
      <td class="starting-date">3 October 2026</td>
      <td class="ending-date">9 October 2026</td>
      <td class="remark"></td>
    </tr>
    <tr>
      <td class="confname"><a href="https://opodis26.software.imdea.org/" target="_blank">OPODIS</a>
        <span class="tooltiptext"><?php echo $full_name['OPODIS']; ?></span>
      </td>
      <td class="year">2026</td>
      <td class="location">Madrid, Spain</td>
      <td class="starting-date">9 December 2026</td>
      <td class="ending-date">11 December 2026</td>
      <td class="remark"></td>
    </tr>
    <tr>
      <td class="confname"><a href="https://www.siam.org/conferences-events/siam-conferences/alenex27/" target="_blank">ALENEX</a>
        <span class="tooltiptext"><?php echo $full_name['ALENEX']; ?></span>
      </td>
      <td class="year">2027</td>
      <td class="location">Philadelphia, Pennsylvania, USA</td>
      <td class="starting-date">24 January 2027</td>
      <td class="ending-date">25 January 2027</td>
      <td class="remark">co-located with <a href="https://www.siam.org/conferences-events/siam-conferences/soda27/" target="_blank">SODA</a></td>
    </tr>
    <tr>
      <td class="confname"><a href="https://www.siam.org/conferences-events/siam-conferences/sosa27/" target="_blank">SOSA</a>
        <span class="tooltiptext"><?php echo $full_name['SOSA']; ?></span>
      </td>
      <td class="year">2027</td>
      <td class="location">Philadelphia, Pennsylvania, USA</td>
      <td class="starting-date">25 January 2027</td>
      <td class="ending-date">26 January 2027</td>
      <td class="remark">co-located with <a href="https://www.siam.org/conferences-events/siam-conferences/soda27/" target="_blank">SODA</a></td>
    </tr>
    <tr>
      <td class="confname"><a href="no-webpage-yet.html" target="_blank">AAAI</a>
        <span class="tooltiptext"><?php echo $full_name['AAAI']; ?></span>
      </td>
      <td class="year">2027</td>
      <td class="location">Montreal, Canada</td>
      <td class="starting-date">16 February 2027</td>
      <td class="ending-date">23 February 2027</td>
      <td class="remark"></td>
    </tr>
    <tr>
      <td class="confname"><a href="https://www.stacs-conf.org/" target="_blank">STACS</a>
        <span class="tooltiptext"><?php echo $full_name['STACS']; ?></span>
      </td>
      <td class="year">2027</td>
      <td class="location">G&ouml;ttingen, Germany</td>
      <td class="starting-date">8 March 2027</td>
      <td class="ending-date">12 March 2027</td>
      <td class="remark">no proper web page yet</td>
    </tr>
    <tr>
      <td class="confname"><a href="https://edbticdt2027.github.io/" target="_blank">EDBT</a>
        <span class="tooltiptext"><?php echo $full_name['EDBT']; ?></span>
      </td>
      <td class="year">2027</td>
      <td class="location">Lille, France</td>
      <td class="starting-date">6 April 2027</td>
      <td class="ending-date">9 April 2027</td>
      <td class="remark"></td>
    </tr>
    <tr>
      <td class="confname"><a href="https://edbticdt2027.github.io/" target="_blank">ICDT</a>
        <span class="tooltiptext"><?php echo $full_name['ICDT']; ?></span>
      </td>
      <td class="year">2027</td>
      <td class="location">Lille, France</td>
      <td class="starting-date">6 April 2027</td>
      <td class="ending-date">9 April 2027</td>
      <td class="remark"></td>
    </tr>
    <tr>
      <td class="confname"><a href="https://eurocg2027.on.liu.se/" target="_blank">EuroCG</a>
        <span class="tooltiptext"><?php echo $full_name['EuroCG']; ?></span>
      </td>
      <td class="year">2027</td>
      <td class="location">Norrk&ouml;ping, Sweden</td>
      <td class="starting-date">6 April 2027</td>
      <td class="ending-date">9 April 2027</td>
      <td class="remark"></td>
    </tr>
    <tr>
      <td class="confname"><a href="https://etaps.org/2027/" target="_blank">ETAPS</a>
        <span class="tooltiptext"><?php echo $full_name['ETAPS']; ?></span>
      </td>
      <td class="year">2027</td>
      <td class="location">Copenhagen, Denmark</td>
      <td class="starting-date">10 April 2027</td>
      <td class="ending-date">15 April 2027</td>
      <td class="remark">
        federated conference including
        <a href="https://etaps.org/2027/conferences/esop/" target="_blank">ESOP</a>,
        <a href="https://etaps.org/2027/conferences/fossacs/" target="_blank">FoSSaCS</a>,
        <a href="https://etaps.org/2027/conferences/ifs/" target="_blank">iFS</a>,
        and
        <a href="https://etaps.org/2027/conferences/tacas/" target="_blank">TACAS</a>
      </td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Conference</th>
      <th>Year</th>
      <th>City, Country</th>
      <th>Starting date</th>
      <th>Ending date</th>
      <th>Remark</th>
    </tr>
  </tfoot>
</table>



<h2 id="instructions">Instructions for listing your conference here</h2>

<nav class="navlist">
  <ul class="navlist">
    <li class="navlist"><a href="#">Home</a></li>
    <li class="navlist"><a href="#ahead">Deadline ahead</a></li>
    <li class="navlist"><a href="#running">Running conferences</a></li>
    <li class="navlist"><a href="#future">Future conferences (deadline over)</a></li>
    <li class="navlist"><a href="#planning">Conference planning</a></li>
    <li class="navlist"><a class="active" href="#instructions">Instructions</a></li>
    <li class="navlist"><a href="#included">Included conferences</a></li>
  </ul>
</nav>

<p>
  If you wish your conference to be listed here,
  send me an e-mail
  (change &nbsp;_at_&nbsp; to @ and &nbsp;_dot_&nbsp;  twice to .)
  with one of the following templates:
</p>

      <p class="central">
        <a href="mailto:hermann_at_lix_dot_polytechnique_dot_fr?cc=martin_dot_krejca_at_polytechnique_dot_edu&subject=%5Bconf%5D%20New%20conference%20with%20deadline%20ahead&body=Please%2C%20include%20the%20following%20conference%20in%20your%20list.%0A%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%3Ctr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22confname%22%3E%3Ca%20href%3D%22http%3A%2F%2Fmy-url%22%20target%3D%22_blank%22%3EMy%20Conference%3C%2Fa%3E%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22location%22%3EMy%20city%2C%20My%20country%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22deadline%22%3EDD%20MONTH%20YYYY%20deadline%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22date%22%3EDD1-DD2%20MONTH%20YYYY%20date%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22notification%22%3EDD%20MONTH%20YYYY%20notification%20of%20acceptance%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22subformat%22%3Eformat%20of%20submission%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%3C%2Ftr%3E%0A%0AThanks%20in%20advance.%0ABest%20regards%2C%0A%0AJohn%20Doe%0A">E-mail with a template for a conference with its <b>deadline ahead</b></a>

<br><br>

<a href="mailto:hermann_at_lix_dot_polytechnique_dot_fr?cc=martin_dot_krejca_at_polytechnique_dot_edu&subject=%5Bconf%5D%20%20New%20future%20conference%20with%20deadline%20over&body=Please%2C%20include%20the%20following%20conference%20in%20your%20list.%0A%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%3Ctr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22confname%22%3E%3Ca%20href%3D%22http%3A%2F%2Fmy-url%22%20target%3D%22_blank%22%3EMy%20Conference%3C%2Fa%3E%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22location%22%3EMy%20city%2C%20My%20country%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22date%22%3EDD1-DD2%20MONTH%20YYYY%20date%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22notification%22%3EDD%20MONTH%20YYYY%20notification%20of%20acceptance%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22final%22%3EDD%20MONTH%20YYYY%20final%20version%20due%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22registration%22%3EDD%20MONTH%20YYYY%20early%20registration%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20class%3D%22remark%22%3E%3C%2Ftd%3E%0A%20%20%20%20%20%20%20%20%3C%2Ftr%3E%0A%0AThanks%20in%20advance.%0ABest%20regards%2C%0A%0AJohn%20Doe%0A">E-mail with a template for a <b>future conference with deadline over</b></a>

</p>

<p>
  This webpage is updated regularly, at least once a day.
  Only serious conferences in connection with theoretical computer science will be listed.
</p>

<h2 id="included">Following conferences are included in this list</h2>

<nav class="navlist">
  <ul class="navlist">
    <li class="navlist"><a href="#">Home</a></li>
    <li class="navlist"><a href="#ahead">Deadline ahead</a></li>
    <li class="navlist"><a href="#running">Running conferences</a></li>
    <li class="navlist"><a href="#future">Future conferences (deadline over)</a></li>
    <li class="navlist"><a href="#planning">Conference planning</a></li>
    <li class="navlist"><a href="#instructions">Instructions</a></li>
    <li class="navlist"><a class="active" href="#included">Included conferences</a></li>
  </ul>
</nav>

<p class="central" style="font: bold 1.25em Verdana, Geneva, Arial Black, sans-serif;">
  Toggle list of included conferences with full names
  &nbsp;&nbsp;&nbsp;
  <button onclick="popUp('popup')"><span id="btn" style="width: 50px; font: bold 1.25em Verdana, Geneva, Arial Black, sans-serif; color: red;">show</span></button>
</p>

<div id="popup" style="display: none;">
  <nav class="navlist">
    <ul class="navlist" style="width:85%; position: fixed; bottom: 0;">
      <li class="navlist" style="float:right"><a class="active" href="#included">Back to top of Included conferences</a></li>
    </ul>
  </nav>
  <table class="central">
    <tbody>
      <?php
       ksort($full_name);
       foreach ($full_name as $ident => $name) {
      echo "<tr>\n";
        echo "<td>$ident</td>\n";
        echo "<td>$name</td>\n";
        echo "</tr>\n";
      }
      ?>
    </tbody>
  </table>
  <!-- <nav class="navlist"> -->
    <!--   <ul class="navlist"> -->
      <!--     <li class="navlist" style="float:right"><a class="active" href="#included">Back to Included conferences</a></li> -->
      <!--   </ul> -->
    <!-- </nav> -->
</div>

<p>
  If you are an organizer of one of these conferences and you do not see that conference listed here.
  please send me a messsage using the aforementioned instructions.
</p>

<p></p>
<hr>

<div class="central">
  <a href="http://info.flagcounter.com/s2OK"><img src="http://s10.flagcounter.com/countxl/s2OK/bg_EAF3DA/txt_000000/border_CCCCCC/columns_8/maxflags_48/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Flag Counter"></a>
</div>

<hr>


<p>
  <a href="https://validator.w3.org/check?uri=referer">
    <img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88">
  </a>

  <a href="https://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px"
         src="https://jigsaw.w3.org/css-validator/images/vcss"
         alt="Valid CSS!" />
  </a>
</p>

<p>&copy; Miki Hermann &amp; Martin Krej&ccaron;a (LIX, Ecole Polytechnique), 2015-2026</p>

<!-- Created: Wed Dec 30 18:09:29 CET 2015 -->
<!-- hhmts start -->
Last modified: Thu, 28 May 2026 07:32:08 CEST
<!-- hhmts end -->
</div>
</body>
</html>
