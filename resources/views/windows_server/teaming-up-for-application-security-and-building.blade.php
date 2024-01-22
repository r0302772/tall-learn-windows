<x-learn-windows-layout>
    <x-slot name="description">Teaming up for Application Security & Building</x-slot>
    <x-slot name="title">Teaming up for Application Security 🌈 & Building 🔨</x-slot>

    <h2>Contents</h2>

    <ul>
        <li>Building Secure Applications</li>
        <li>
            Security Team colours:
            <ul>
                <li>Pentesting, defensive security and their cooperation</li>
                <li>Building applications</li>
                <li>Security awareness: OWASP Top 10 Risks</li>
                <li>Security pre-empting tools & controls: OWASP Top 10 Pro-active controls</li>
                <li>SonarCloud in your CI/CD pipeline</li>
            </ul>
        </li>
        <li>Types of languages</li>
        <li>Getting to know Docker through a Lab</li>
    </ul>


    <h2>Building Secure Applications 🛡</h2>

    <p>Standing on the shoulders of Giants:</p>
    <ul>
        <li>IPsec framework for VPNs</li>
        <li>SSL/TLS</li>
    </ul>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/building_secure_applications_1.png"
        alt="" title="">

    <p>
        We keep building on top of existing code, adding layers of abstraction, using combinations of different
        technology stacks, frameworks, libraries,...
    </p>
    <p>Is our application still secure? And what if something goes wrong?</p>

    <h2>Red Team / Blue Team</h2>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/red_team_blue_team.png"
        alt="" title="">

    <h3>Red Team</h3>
    <p>
        <strong>The cyber-security red team</strong> is composed of specialized personnel hired for their ethical
        hacking skills to find
        vulnerabilities in an organization’s security measures. Red team security consists of offensive security experts
        specialized in penetration testing of different systems. One of the critical phases in the development of a
        defensive mechanism against unauthorized intrusions is the testing stage. The testing phase involves the staging
        of comprehensive attacking exercises against the defensive mechanism to assess its effectiveness. People tasked
        with carrying out these exercises belong to a red team. They leverage their attacking skills to uncover any
        weakness in technology, people, and processes that may lead to unauthorized access to an organization’s digital
        estate.
    </p>

    <p>Here are some common examples of <strong>red team security exercises:</strong></p>
    <ul>
        <li><strong>Penetration testing</strong> - Also referred to as ethical hacking, penetration testing is an
            activity where a red
            team tries to probe and infiltrate a secured system.
        </li>
        <li><strong>Social engineering</strong> - A process through which a red team tries to dupe an organization’s
            employee into
            providing access to a secured system.
        </li>
        <li><strong>Phishing</strong> - A red team acts by sending spoofed emails to an organization’s employees in an
            attempt to dupe
            them into clicking a fraudulent link that requests them to provide their login credentials.
        </li>
    </ul>

    <h3>Blue Team</h3>

    <p>
        <strong>Blue team security</strong> involves a team of professionals responsible for devising and executing
        preventive mechanisms
        against unauthorized intrusions. A blue team is responsible for defending against real threats and red teaming.
        In case of a successful intrusion from a real attacker or red team, members of the blue team are there to study
        the techniques used in the attack and develop preventive mechanisms that will prevent future attacks of the same
        type. The blue team is continuously engaged in strengthening the digital security infrastructure of an
        organization using programs such as Intrusion Detected Systems (IDS).
    </p>

    <p>The following are the common exercises carried out under <strong>blue team cyber-security:</strong></p>
    <ul>
        <li>Carrying out DNS assessments to ensure that there are no phishing activities in the network or any general
            issue with DNS transactions.
        </li>
        <li>Conducting a footprint analysis to ensure that there are no unidentified signatures in the network that may
            signal a breach.
        </li>
        <li>Managing firewall access controls and end-point security software on devices such as workstations.</li>
    </ul>

    <h2>Purple Team</h2>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/purple_team.png"
        alt="" title="">

    <p>
        <strong>Purple team security</strong> consists of more of a <strong>dynamic party between red and blue
            teams</strong> than a unit. It’s usually
        not a fixed team but often consists of people from both teams meeting up. Its purpose is to maximize the results
        of Red Team engagements and improve Blue Team capability.
    </p>
    <p>
        This is usually an already established, or created, effort within many security mature organizations. We’ve
        learned from experience that the business works best when Red and Blue Teams work together to improve the
        security of the organization. There are many Purple Teams already in existence and people happily declare their
        joint effort to Purple Team. All because knowing both attack and defense is a huge asset to any organization,
        team and individual.
    </p>

    <h2>Yellow Team</h2>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/yellow_team.png"
        alt="" title="">

    <p>
        These are the teams that build and design software, systems, and integrations. Application developers, software
        engineers and architects fall into this category.
    </p>

    <p>
        Their focus is usually on requirements, functionality, user experience and back-end performance. If we want to
        have applications, automations and processes designed and implemented securely, Red Team and Blue Team need to
        work with the Builders.
    </p>

    <h2>Orange Team</h2>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/orange_team.png"
        alt="" title="">

    <p>
        The reason for many security bugs within software is not malicious programmers, but a lack of security awareness
        within software development teams and architects.
    </p>
    <p>
        The purpose of the Orange <strong>dynamic party</strong> is to <strong><i>inspire Yellow Team to be more
                security conscious, increasing their security awareness by providing education to benefit software code
                and design implementation.</i></strong> There should be structured and ongoing engagements between Red
        and Yellow Team for the benefit of Yellow.
    </p>

    <p>
        Since Orange’s goal is to make developers think more like attackers, it will most likely start with certain Red
        Team members being available to Yellow Team. Working with developers to understand how attackers work will be
        the first step. A developer will then, in their brain, begin to <strong><i>internalise how to make their apps
                resistant</i></strong> to these types of attacks. Bringing in a Red or Orange Team member at the
        beginning of a software sprint allows for additional “Hacker Stories” and “Mis-use cases” to be developed
        alongside the team’s usual “User Stories” and “Use cases” that Yellow Team would typically rely upon to make
        features. This gives Yellow Team immediate feedback on areas they need to secure before they write a single line
        of code.
    </p>

    <h2>Orange Sec. Awareness: OWASP Top 10 AppSec Risks</h2>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/owasp.png"
        alt="" title="">

    <p>
        The Open Web Application Security Project (OWASP) is a non-profit foundation dedicated to improving the security
        of software.
    </p>

    <p>
        OWASP Top 10 is an online document on OWASP’s website that provides ranking of the top 10 most critical web
        application security risks based on:
    </p>
    <ul>
        <li>the frequency of discovered security defects</li>
        <li>the severity of the vulnerabilities</li>
        <li>the magnitude of their potential impacts</li>
    </ul>

    <p>The Top 10 Proactive Controls</p>
    <p>The list is ordered by importance with list item number 1 being the most important:</p>

    <ol>
        <li><strong>C1:</strong> Define Security Requirements</li>
        <li><strong>C2:</strong> Leverage Security Frameworks and Libraries</li>
        <li><strong>C3:</strong> Secure Database Access</li>
        <li><strong>C4:</strong> Encode and Escape Data</li>
        <li><strong>C5:</strong> Validate All Inputs</li>
        <li><strong>C6:</strong> Implement Digital Identity</li>
        <li><strong>C7:</strong> Enforce Access Controls</li>
        <li><strong>C8:</strong> Protect Data Everywhere</li>
        <li><strong>C9:</strong> Implement Security Logging and Monitoring</li>
        <li><strong>C10:</strong> Handle All Errors and Exceptions</li>
    </ol>

    <p>This is an Awareness document, which the naming reflects: A01, A02, A03, … A10</p>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/owasp_top_10.png"
        alt="" title="">

    <h1>The Top 10 Risks 2021</h1>

    <ol>
        <li>
            <strong>A01:2021-Broken Access Control</strong>
            <ul>
                <li>Moved up from the fifth position.</li>
                <li>Serious web application security risk.</li>
                <li>On average, 3.81% of applications tested had one or more Common Weakness Enumerations (CWEs).</li>
                <li>More than 318k occurrences of CWEs in this risk category.</li>
            </ul>
        </li>

        <li>
            <strong>A02:2021-Cryptographic Failures</strong>
            <ul>
                <li>Shifted up to #2.</li>
                <li>Previously known as A3:2017-Sensitive Data Exposure.</li>
                <li>Focuses on failures related to cryptography.</li>
                <li>Often leads to sensitive data exposure or system compromise.</li>
            </ul>
        </li>

        <li>
            <strong>A03:2021-Injection</strong>
            <ul>
                <li>Slides down to the third position.</li>
                <li>94% of the applications were tested for some form of injection.</li>
                <li>Average incidence rate of 3.37%.</li>
                <li>33 CWEs mapped into this category with the second most occurrences in applications (274k
                    occurrences).
                </li>
                <li>Cross-site Scripting is now part of this category in this edition.</li>
            </ul>
        </li>

        <li>
            <strong>A04:2021-Insecure Design</strong>
            <ul>
                <li>New category for 2021.</li>
                <li>Focuses on risks related to design flaws.</li>
                <li>Highlights the need for more threat modeling, secure design patterns, and reference architectures.
                </li>
                <li>An insecure design cannot be fixed by a perfect implementation.</li>
            </ul>
        </li>

        <li>
            <strong>A05:2021-Security Misconfiguration</strong>
            <ul>
                <li>Moved up from #6 in the previous edition.</li>
                <li>90% of applications were tested for some form of misconfiguration.</li>
                <li>Average incidence rate of 4.5%.</li>
                <li>Over 208k occurrences of CWEs mapped to this risk category.</li>
                <li>Former category for A4:2017-XML External Entities (XXE) is now part of this risk category.</li>
            </ul>
        </li>

        <li>
            <strong>A06:2021-Vulnerable and Outdated Components</strong>
            <ul>
                <li>Previously titled Using Components with Known Vulnerabilities.</li>
                <li>Moved up from #9 in 2017.</li>
                <li>Known issue that is challenging to test and assess risk.</li>
                <li>Only category without any Common Vulnerability and Exposures (CVEs) mapped to the included CWEs.
                </li>
                <li>Default exploit and impact weights of 5.0 are factored into their scores.</li>
            </ul>
        </li>

        <li>
            <strong>A07:2021-Identification and Authentication Failures</strong>
            <ul>
                <li>Previously Broken Authentication.</li>
                <li>Sliding down from the second position.</li>
                <li>Includes CWEs more related to identification failures.</li>
                <li>Integral part of the Top 10, but standardized frameworks seem to be helping.</li>
            </ul>
        </li>

        <li>
            <strong>A08:2021-Software and Data Integrity Failures</strong>
            <ul>
                <li>New category for 2021.</li>
                <li>Focuses on making assumptions related to software updates, critical data, and CI/CD pipelines
                    without verifying integrity.
                </li>
                <li>Highest weighted impacts from Common Vulnerability and Exposures/Common Vulnerability Scoring System
                    (CVE/CVSS) data mapped to the 10 CWEs in this category.
                </li>
                <li>A8:2017-Insecure Deserialization is now a part of this larger category.</li>
            </ul>
        </li>

        <li>
            <strong>A09:2021-Security Logging and Monitoring Failures</strong>
            <ul>
                <li>Previously A10:2017-Insufficient Logging & Monitoring.</li>
                <li>Added from the Top 10 community survey (#3).</li>
                <li>Moving up from #10 previously.</li>
                <li>Expanded to include more types of failures.</li>
                <li>Challenging to test for and isn't well represented in the CVE/CVSS data.</li>
                <li>Failures in this category can directly impact visibility, incident alerting, and forensics.</li>
            </ul>
        </li>

        <li>
            <strong>A10:2021-Server-Side Request Forgery</strong>
            <ul>
                <li>Added from the Top 10 community survey (#1).</li>
                <li>Relatively low incidence rate with above-average testing coverage.</li>
                <li>Above-average ratings for Exploit and Impact potential.</li>
                <li>Represents a scenario considered important by the security community members, even though it's not
                    illustrated in the data at this time.
                </li>
            </ul>
        </li>
    </ol>

    <p>You should be able to explain describe these in your own words… Use the resources to get to know them!</p>
    <ul>
        <li>From the <a href="https://owasp.org/Top10/A01_2021-Broken_Access_Control/">OWASP Official site</a>: Very
            technical
        </li>
        <li>From <a href="https://www.hacksplaining.com/owasp">Hacksplaining</a>: Straightforward, with examples</li>
        <li>From… a <a href="https://tryhackme.com/room/owasptop10">Red Teamer virtual box</a>?: Only if interested ⚔
        </li>
    </ul>

    <h3>An example: A03 Injection (the SQL kind)</h3>

    <p>Scenario #1: An application uses untrusted data in the construction of the following vulnerable SQL call:</p>
    <pre>
String query = "SELECT * FROM accounts WHERE custID='" + request.getParameter("id") + "'";
</pre>

    <p>Scenario #2: Blind trust in frameworks may result in queries that are still vulnerable:</p>
    <pre>
Query HQLQuery = session.createQuery("FROM accounts WHERE custID='" + request.getParameter("id") + "'");
</pre>

    <p>
        In both cases, the attacker modifies the ‘id’ parameter value in their browser to send: ‘ or ‘1’=’1 For example:
    </p>
    <pre>
https://example.com/app/accountView?id=' or '1'='1
</pre>

    <p>This changes the meaning of both queries to return all the records from the accounts table.</p>

    <a href="https://owasp.org/Top10/A03_2021-Injection/#example-attack-scenarios">
        https://owasp.org/Top10/A03_2021-Injection/#example-attack-scenarios
    </a>

    <h3>Pre-empting A03 Injection (the SQL kind)?</h3>

    <p>
        Main security control against SQL injection: ‘Query parameterization and binding’  Prepared statements are a
        form of query parameterization
    </p>

    <p>
        Scenario #1: The following code example uses a PreparedStatement, Java's implementation of a parameterized
        query:
    </p>
    <pre>
String query = "SELECT account_balance FROM user_data WHERE user_name = ? ";
PreparedStatement pstmt = connection.prepareStatement(query);
pstmt.setString(1, custname);
ResultSet results = pstmt.executeQuery();
</pre>

    <p>Scenario #2: Use the correct functions of the framework:</p>
    <pre>
Query HQLQuery = session.createQuery("from Inventory where productID=:productid");
HQLQuery.setParameter("productid", userSuppliedParameter);
</pre>

    <a href="https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html#defense-option-1-prepared-statements-with-parameterized-queries">
        https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html#defense-option-1-prepared-statements-with-parameterized-queries

    </a>

    <h2>Green Team</h2>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/green_team.png"
        alt="" title="">

    <p>
        Blue Team are not always aware of all the frameworks, libraries, third-party systems, network calls, and
        functionality added by Yellow Team.
    </p>

    <p>Yellow Team may sometimes be <i>barely aware of some of the dependencies behind their own code.</i></p>

    <p>
        In the event of an incident, Blue Team may <strong><i>not have the data needed to investigate</i></strong> or
        <strong><i>defend breached systems</i></strong>, and no one wants to test or touch the production environment
        for fear of it breaking.
    </p>

    <p>
        Green Team is another <strong>dynamic party</strong> that consists of ongoing structured interactions between
        the Blue Team and
        members of the software team, the Yellow Team. <strong>The ultimate goal is to improve code-based and
            design-based
            defense capability</strong> for detection, incident response, and data forensics.
    </p>
    <p>
        With Yellow Team working with Blue Team, catching an event before it becomes an incident, before it becomes a
        breach, is essential to the defense of any organization. In other words, <strong>pre-empting incidents</strong>.
    </p>


    <h3>Green Sec. Pre-empting: OWASP Pro-Active Controls</h3>

    <p>
        OWASP Top 10 Proactive Controls for Software Developers focus more on defensive techniques and controls, as
        opposed to risks.
        You can find the document with controls on the OWASP website <a
            href="https://owasp.org/www-project-proactive-controls/">here</a>.
    </p>

    <p>
        This document is organized with controls, and the naming reflects: C01, C02, C03, … C10. These controls are
        considered the most important and categories that every architect and developer should absolutely, 100% include
        in every project.
    </p>

    <blockquote>
        “the most important control and control categories that every architect and developershould absolutely, 100%
        include in every project.”
    </blockquote>

    <a href="https://owasp.org/www-pdf-archive/OWASP_Top_10_Proactive_Controls_V3.pdf">
        https://owasp.org/www-pdf-archive/OWASP_Top_10_Proactive_Controls_V3.pdf
    </a>

    <h3>C1: Define Security Requirements</h3>

    <img width="200"
         src="/assets/img/windows_server/teaming_up_for_application_security_and_building/define_security_requirements_1.png"
         alt="" title="">

    <p>What are the security requirements of our application and how do we get to them?</p>

    <p>
        For example, you can refer to the <a
            href="https://owasp.org/www-project-application-security-verification-standard/">
            OWASP Application Security Verification Standard</a>.
    </p>

    <p>This is a “standard” which means it's an extensive, elaborate document of requirements. The standard allows you
        to comply with different levels such as level 1, level 2, or level 3.</p>

    <p>The results of complying with these standards include:</p>
    <ul>
        <li>Secure Coding Guidelines for your team</li>
        <li>Secure Test-Driven Development</li>
        <li>Requirements that can be tested via Automatic Security Tests</li>
        <li>You can conduct more focused Penetration Testing</li>
        <li>You can initiate a Bug Bounty program, etc.</li>
    </ul>

    <a href="https://owasp.org/www-project-proactive-controls/v3/en/c1-security-requirements">
        https://owasp.org/www-project-proactive-controls/v3/en/c1-security-requirements
    </a>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/define_security_requirements_2.png"
        alt="" title="">

    <h3>C2: Leverage Security Frameworks and Libraries</h3>

    <p>You have to implement a lot of security controls! Stand on the shoulders of Giants in the Dev-world!</p>

    <p>
        Use native secure features before 3rd party libraries, for example, <a
            href="https://spring.io/projects/spring-security">Spring Security</a>.
    </p>

    <p>
        Or, use Open Source security libraries and frameworks that are well vetted. Always remember to keep them
        updated!
    </p>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/security_frameworks_and_libraries_1.png"
        alt="" title="">

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/security_frameworks_and_libraries_2.png"
        alt="" title="">

    <a href="https://owasp.org/www-project-proactive-controls/v3/en/c2-leverage-security-frameworks-libraries">
        https://owasp.org/www-project-proactive-controls/v3/en/c2-leverage-security-frameworks-libraries
    </a>

    <h3>C3: Secure Database Access</h3>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/secure_database_access.png"
        alt="" title="">

    <p>Securely managing database access is paramount to prevent vulnerabilities like SQL Injection. Consider the
        following measures:</p>

    <ul>
        <li>Refer to the <a href="https://owasp.org/www-project-proactive-controls/v3/en/c3-secure-database"
                            target="_blank">OWASP Proactive Controls</a> for comprehensive guidance on secure database
            practices.
        </li>
        <li>Utilize the <a href="https://cheatsheetseries.owasp.org/cheatsheets/Query_Parameterization_Cheat_Sheet.html"
                           target="_blank">Query Parameterization Cheat Sheet</a> for practical tips on securing
            database queries.
        </li>
        <li>Explore the <a href="https://cheatsheetseries.owasp.org/cheatsheets/Database_Security_Cheat_Sheet.html"
                           target="_blank">Database Security Cheat Sheet</a> for additional insights into securing
            databases.
        </li>
        <li>Visit the <a href="https://cheatsheetseries.owasp.org/index.html" target="_blank">OWASP Cheat Sheet
                Series</a> for a collection of cheat sheets covering various security topics.
        </li>
    </ul>

    <h3>C4: Encode and Escape Data</h3>

    <p>Protecting against XSS attacks is critical. Follow these practices:</p>

    <ul>
        <li>Refer to the <a
                href="https://cheatsheetseries.owasp.org/cheatsheets/Injection_Prevention_Cheat_Sheet.html#rule-2-encode-data"
                target="_blank">OWASP Injection Prevention Cheat Sheet</a> for insights on encoding data to prevent
            injection attacks.
        </li>
        <li>Guard against XSS vulnerabilities by using HTML sanitizers and tools like <a
                href="https://github.com/cure53/DOMPurify" target="_blank">DOMPurify</a>.
        </li>
        <li>Be cautious when using the .innerHTML function in JavaScript, as HTML manipulation can be tricky.</li>
        <li>Frameworks often provide auto-escaping features; leverage them to enhance security.</li>
    </ul>

    <h3>C5: Validate All Inputs</h3>

    <p>Ensure the security of your application by validating all inputs. Here's what you can do:</p>

    <ul>
        <li>Understand and implement input validation using the <a
                href="https://cheatsheetseries.owasp.org/cheatsheets/Input_Validation_Cheat_Sheet.html" target="_blank">OWASP
                Input Validation Cheat Sheet</a>.
        </li>
        <li>Make use of the validation options offered by your framework, but be aware of potential flaws.</li>
        <li>Employ Static Application Security Testing (SAST) and Dynamic Application Security Testing (DAST) tools for
            effective discovery of XSS vulnerabilities.
        </li>
    </ul>

    <h3>Dynamic & Static Application Security Testing</h3>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/dynamic_and_static_application_security_testing_1.png"
        alt="" title="">

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/dynamic_and_static_application_security_testing_2.png"
        alt="" title="">

    <p><strong>Static Application Security Testing (SAST):</strong></p>
    <p>
        SAST is a white-box testing method that analyzes source code from the inside, examining components while they
        are at rest.
    </p>

    <p><strong>Dynamic Application Security Testing (DAST):</strong></p>
    <p>
        DAST, also known as a web application vulnerability scanner, is a black-box security test. It simulates external
        attacks on an application while the application is running, attempting to penetrate it from the outside by
        checking exposed interfaces for vulnerabilities.
    </p>
    <p>
        For a list of DAST tools, refer to <a href="https://owasp.org/www-community/Vulnerability_Scanning_Tools"
                                              target="_blank">OWASP's Vulnerability Scanning Tools</a>.
    </p>

    <p>
        The dynamic aspect of DAST testing comes from its execution in a dynamic environment. Unlike SAST, which scans
        an application's code line by line when the application is at rest, DAST testing is performed while the
        application is running. While DAST can be used in production, testing is usually carried out in a QA
        environment.
    </p>

    <h3>Green Sec. Pre-empting: SAST SonarCloud in CI/CD</h3>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/pre_empting_sast_sonarcloud_in_ci_cd_1.png"
        alt="" title="">

    <p>
        <a href="https://sonarcloud.io/" target="_blank">SonarCloud</a> is a free Static Application Security Testing
        (SAST) tool that can be used for free in public GitHub projects using GitHub Actions CI/CD.
    </p>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/pre_empting_sast_sonarcloud_in_ci_cd_2.png"
        alt="" title="">

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/pre_empting_sast_sonarcloud_in_ci_cd_3.png"
        alt="" title="">

    <h3>C8: Protect Data Everywhere</h3>

    <p>Data in Transit: Remember HTTPS?</p>
    <p>Data at Rest (in storage):</p>
    <ul>
        <li>Use standard well-vetted crypto libraries (Lipsodium, Tink)</li>
        <li>Use a form of secrets management to protect application secrets and keys (<a href="https://vaultproject.io/"
                                                                                         target="_blank">vaultproject.io</a>)
        </li>
        <li>Personal Hardware Security Module</li>
    </ul>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/protect_data_everywhere_1.png"
        alt="" title="">

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/protect_data_everywhere_2.png"
        alt="" title="">

    <h3>C9: Implement Security Logging and Monitoring</h3>

    <p>Provide traceability! Remember: Incident Response, forensics = work as a team!</p>

    <p>Three main things to log:</p>
    <ol>
        <li>Any and all input validation failures = Someone tries to enter something strange into a field</li>
        <li>Any and all authentication events = Successful and failed log-ins</li>
        <li>Any and all access control failures = Someone tries to access something they shouldn’t</li>
    </ol>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/white_team.png"
        alt="" title="">

    <h3>Building Secure Applications 🔨</h3>

    <p>Do we need to build every application to turn it into something runnable?</p>

    <p>Interpreted Languages: Python, JavaScript, PHP, …</p>
    <p>
        The instructions are not directly executed by the target machine, but instead read and executed by some other
        program, an interpreter.
    </p>

    <p>Compiled Languages: Java, C#, C, C++, …</p>
    <p>Need a “build” step, they need to be manually compiled first.</p>
    <p>Are converted directly into machine code that the processor can execute.</p>
    <p>
        <code>mvn package</code> or <code>mvn verify</code> for Java (with Maven), <br> <code>dotnet build</code> for
        C#
    </p>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/building_secure_applications_2.png"
        alt="" title="">

    <p>Compiled or interpreted, an application can be transported, delivered and ran in a Docker container</p>
    <p>You should really get to know this…</p>

    <p>Not straightforward to set up on Windows:</p>
    <ul>
        <li>In a Linux VM on VirtualBox. Nice to try stuff out but not that handy to develop</li>
        <li>Using Docker Desktop based on Windows Subsystem for Linux. Nice to develop but does not work alongside
            VirtualBox
        </li>
    </ul>

    <h3>Building Secure Applications 🔨 Docker Lab</h3>

    <p>You will get to know Docker using an in-browser VM environment</p>
    <p><a href="https://training.play-with-docker.com/" target="_blank">https://training.play-with-docker.com/</a></p>
    <p>Create a Docker account: <a href="https://hub.docker.com/" target="_blank">https://hub.docker.com/</a></p>
    <p>Make <a href="https://training.play-with-docker.com/beginner-linux/">the Lab</a></p>
    <p>When you finished you should have an idea what <a
            href="https://github.com/miverboven/brank-edge-service-ex/blob/master/.github/workflows/main.yml">
            lines 24-31 in this CI/CD file</a> mean and do!</p>

    <p>
        After 1st Lab… optional <a href="https://training.play-with-docker.com/ops-s1-hello/" target="_blank">for people
            interested in infra & administration</a>
    </p>

    <img
        src="/assets/img/windows_server/teaming_up_for_application_security_and_building/building_secure_applications_docker_lab.png"
        alt="" title="">

</x-learn-windows-layout>
