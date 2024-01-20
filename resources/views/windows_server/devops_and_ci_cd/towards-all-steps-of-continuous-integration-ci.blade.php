<div>
    <h2>1.3 Towards all steps of Continuous Integration: CI</h2>

    <p>We can expand our concept of a pipeline to include all the steps commonly known together as Continuous
        Integration or a CI pipeline. The Continuous Integration process’ goal is to take the regular code commits and
        continuously test and build binary artifacts from them. To get to this conceptual point we need include all the
        other tests that could be present besides unit tests:</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/towards_all_steps_of_continuous_integration_ci.png"
         alt="" title="">

    <p>We will not be including these in our example pipeline for the moment.</p>

    <h3>1.3.1 Static code analysis</h3>

    <p>Imagine a step where the code committed gets to build directly and it failed during. This becomes a slow and
        costly process in terms of resource utilization. The code must be checked to find software flaws,
        vulnerabilities, and security weaknesses such as SQL injection etc. without even building or running code. This
        is a fast check process where the code is checked for any syntax errors just as if a trusted and experienced
        developer is reading your code.</p>

    <p><strong>Tools:</strong></p>
    <p>Tools like SonarQube, Veracode, Appscan, etc. can be run on an on-premise sever, while alternatives like
        SonarCloud are able to integrate with Cloud-based pipelines.</p>

    <p><strong>In practice:</strong></p>
    <p>We will be applying and going deeper into static code analysis during a later chapter.</p>

    <h3>1.3.2 Integration tests</h3>

    <p>The main difference between integration tests and the unit tests that came before is that integration tests
        specifically test methods or modules of code that have integrations with other modules or components. For
        example, unit tests mock or make a fake of a database interface, while integration tests actually test the
        integration with a real database.</p>

    <p><strong>Tools:</strong></p>
    <p>The coding frameworks used for integration tests are the same as the ones used for unit tests as integration
        tests follow the same workings as unit tests, only with a lesser need for mocking or faking services or
        interfaces. The main difference lies in how we can effectively put these tests into our pipeline. For the
        integration tests to work, they need the services like databases up and running inside the pipeline VM with the
        right settings.</p>

    <p><strong>In practice:</strong></p>
    <p>In case of GitHub Actions there are 3 main options:</p>
    <ul>
        <li>Services or databases already pre-installed on the VM’s, like MySQL on Ubuntu</li>
        <li>Custom actions that install the service/database on the VM, like NoSQL MongoDB</li>
        <li>GitHub’s new official ‘services’, like PostgreSQL</li>
    </ul>
    <p>Our example uses no database so we will not be including any of these.</p>

    <h3>1.3.3 Other test stages</h3>

    <p>At this point we have a built application that has gone through quite an amount of testing already. Tests from
        now on will apply to the built application instead of components or methods. These include load tests which
        determine how many user requests an application can handle, or user tests which simulate the usage of
        application features in the way a user would use them or receive an error. Often these tests are more difficult
        to automate or include into a pipeline compared to unit or integration tests.</p>

    <p><strong>Tools:</strong></p>
    <p>Load testing on a large enterprise level is dominated by tools such as LoadRunner. A They are feature-rich tools
        with a large GUI and therefore need a dedicated installation on a server with some configuration that cannot
        easily be integrated into a SAAS Cloud-based pipeline. Open-source alternatives include Apache Jmeter, which
        also features a GUI but can also be ran from a script file. Thanks to this open-source nature, the community has
        been able to integrate Jmeter into a GitHub Action. Exceptions to these are tools such as the open-source tool
        Locust, a code-only (Python) non-GUI tool which has its own GitHub action as well.</p>

    <p>User testing used to be a very labor-intensive process in the days before widespread automation of tests. Every
        action that could be performed on a web application, including errors, would be typed out and given to a
        physical tester to perform. This was not only slow but also very expensive. Revisiting this process after every
        small new code edit would be impossible.</p>

    <p>With the advent of automated testing tools such as Selenium WebDriver appeared which could automate browser and
        user actions. These actions can be scripted out and automatically re-run at a moment's notice. As people worked
        on the open-source base of Selenium more tool started to appear which can run Selenium WebDriver tests even in a
        GitHub Action pipeline. There is a mobile app version of Selenium as well called Appium.</p>

    <p><strong>In practice:</strong></p>
    <p>These tests require significantly more know-how to implement and these tests often are not run every commit
        either, thus we will not be including them in our example.</p>

</div>
