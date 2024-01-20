<div>
    <h2>1.2 Introducing Basic Pipeline Steps on GitHub Actions</h2>

    <p>A pipeline in GitHub Actions is also called a ‘workflow’ and is configured by using a .yml-file in a set
        subdirectory of your repository:</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/introducing_basic_pipeline_steps_on_github_actions_1.png"
         alt="" title="">

    <p>
        The .yml-file can be freely named but needs to always be placed in the
        .github/workflows directory on the root of your repository. An important point to note is to always use spaces
        instead of tabs in a .yml-file.
    </p>

    <p>Before we start to build up our steps, we need to define how our pipeline will look like and which tools it will
        use. We will keep it simple and only include the 4 basic first steps:</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/introducing_basic_pipeline_steps_on_github_actions_2.png"
         alt="" title="">

    <p>As you can see on the image above, each step has their own tool(s) listed. By now it should be obvious that we
        will be working with a simple Java application that displays a webpage using Spring Framework and Thymeleaf.</p>

    <h3>1.2.1 Plan</h3>

    <p>Planning is an obvious but necessary part of developing applications in a team. Ideas from within the team,
        features requested by clients, or fixes for problems detected through monitoring of a running application all
        need to be fit into a broader plan.</p>

    <p><strong>Tools:</strong></p>
    <p>Some planning tools can be applied to many different kinds of projects and are quite simple in usage, such as
        Trello or Monday. They usually fit with the Kanban style of working and support teams’ Agile process.</p>
    <p>Other planning tools are more dedicated to software development and are integrated with Git tools, such as GitHub
        Projects being integrated with GitHub or Jira with Bitbucket. Jira itself is highly popular with Belgian
        enterprises and has integrations with many other DevOps tools besides Git tooling.</p>

    <p><strong>In practice:</strong></p>
    <p>Highly integrated and feature-rich tools like Jira are often only needed when you are working on an
        enterprise-level project where multiple tools are already present. For smaller-scale projects, more basic tools
        or open-source tools like Github Projects are already sufficient. In that way, it is often not needed that
        planning tools are integrated into the DevOps pipeline as technology while they are an essential part of
        projects.</p>
    <p>In case planning tools are integrated into the DevOps pipeline, they give you the possibility to:</p>
    <ul>
        <li>Tie feature-branches of the repository to items/cards in the planning and automatically move them around the
            planning at merges, etc.
        </li>
        <li>Automatically stick logs and reports to related items in the planning</li>
        <li>Automatically create new planning items from issues or problems that get detected by monitoring tools</li>
    </ul>
    <p>We will not be including any interactions with our planning tool in our example, so the use of our planning tool
        is not reflected at all in our .yml-file.</p>

    <h3>1.2.2 Code Commit</h3>

    <p>A code commit stage is otherwise known as version control. A commit is an operation that sends the latest changes
        written by a developer to the repository. Every version of the code written by a developer is stored
        indefinitely. After a discussion and review of the changes with collaborators, developers will write the code
        and commit once the software requirements, feature enhancements, bug fixes, or change requests are
        completed.</p>

    <p><strong>Tools:</strong></p>
    <p>The classic on-premise version control solution is an SVN (Subversion) server. Nowadays there are a lot of
        Cloud-based solutions as well: GitHub, Gitlab, BitBucket, … Some of these also have an on-premise version.</p>

    <p><strong>In practice:</strong></p>
    <p>The role of the commit stage in a DevOps pipeline is often acting as the trigger to start the pipeline. A push or
        merge means that there is new code present that needs to be tested, built, … The .yml-file in our
        .github/workflows directory in our repository starts off like this:</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/introducing_basic_pipeline_steps_on_github_actions_3.png"
         alt="" title="">

    <ul>
        <li>Line 1: Each pipeline/workflow needs a name</li>
        <li>Line 3: This entire pipeline will start on a push to the master branch of the repository. There are a lot of
            different options that can trigger a pipeline to start, for GitHub Actions these are listed <a
                href="https://docs.github.com/en/actions/reference/events-that-trigger-workflows"
                target="_blank">here</a>.
        </li>
        <li>Line 5: This category will collect the different jobs of a GitHub Actions pipeline. These jobs are groups of
            different actions.
        </li>
    </ul>

    <h3>1.2.3 Build</h3>

    <p>Build tools help in compiling and creating executable files or packages (.exe, .dll, .jar, etc.) depending on the
        programming language used to write the source code. The features of these build tools differ from programming
        language to programming language, but generally include two main features:</p>

    <ul>
        <li>Compiling the code, and sometimes running tests</li>
        <li>Bringing in the required dependencies, imports, and libraries.</li>
    </ul>

    <p><strong>Tools:</strong></p>
    <p>A build tool is inherently tied to programming languages. That’s why some tools are mainly known in relation to
        these languages:</p>
    <ul>
        <li>Maven and Gradle for Java</li>
        <li>Cmake for C/C++</li>
        <li>Npm for JavaScript</li>
        <li>…</li>
    </ul>

    <p><strong>In practice:</strong></p>
    <p>We will dive deeper into building later in the course. We will handle the implementation of this step together
        with the following step.</p>

    <h3>1.2.4 Unit Tests</h3>

    <p>Unit tests are the first kind of automated tests you usually encounter during your programming career. They are
        used to test an isolated unit of code, most of the time a method, hence the name.</p>

    <p>The main use of these tests is to have automated quick tests to check whether methods (still) work as expected
        after adding new code. There are also development techniques that write these tests first and then write the
        least amount of code to make them pass, like Test-driven development.</p>

    <p>Some methods interact with other parts of the application, like a database. This is a problem for unit testing
        because an error in these connected parts can make the method fail even if there is nothing wrong with the
        method itself. Unit tests need to be able to test a method as an isolated unit. That is why we sometimes need to
        introduce method stubs or mock objects, which are essentially fake versions of what the method would usually
        interact with, like a fake database interface. We can then control what this fake does and make the interactions
        with it work perfectly.</p>

    <p><strong>Tools:</strong></p>
    <p>Programming languages have their own (unit) testing frameworks:</p>
    <ul>
        <li>JUnit5 for Java, with Mockito, MockMVC, … for creating stubs/mocks/fakes</li>
        <li>MSTest, VSTest, … for C# with Moq for creating stubs/mocks/fakes</li>
        <li>Mocha, Jasmine, … for JavaScript with Jest for creating stubs/mocks/fakes</li>
        <li>…</li>
    </ul>

    <p>Below is an example of a Java unit test created with Junit5 which tests the .multiply() method of the Calculator
        class, written inside a Java project.</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/introducing_basic_pipeline_steps_on_github_actions_4.png"
         alt="" title="">

    <p><strong>In practice:</strong></p>
    <p>The main thing a pipeline needs to do with unit tests is run them and report back or stop if they fail. In our
        case, we use our build tool Maven to both build and run the unit tests included in the source code. More
        specifically, it will do this on an Ubuntu Linux VM, once using Java version 8 and once using Java version
        11.</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/introducing_basic_pipeline_steps_on_github_actions_5.png"
         alt="" title="">

    <ul>
        <li>Line 6: One space to indent the name of the first job in this pipeline called ‘test’, you can name these
            freely.
        </li>
        <li>Line 7: Indicating on which platform / VM this job will run, in this case the latest version of Ubuntu.
            Windows, MacOS, or other Linux distros are also available.
        </li>
        <li>Lines 8-10: The strategy keyword allows you to insert variables into the job, whereby the job will be run
            once for each variable, and you can then use that variable in the currently running job. Here we use it to
            let the job run once for 8 and once for 11, which we will give the variable name of ‘java’. You can then see
            the variable return in line 17 where it is used to determine the java version that is installed on the VM.
        </li>
        <li>Line 11: This gives the job a description</li>
        <li>Line 12: This will contain all the steps/actions in the job</li>
        <li>Line 13: A step is indicated by a dash and every line below it with the same indentation will be included in
            that step. In this case, the step consists only of one action being used. An action is a pre-made
            functionality you can use in a GitHub Actions pipeline. You can look all of these up in the Marketplace.
            This action is an official GitHub action to checkout and copy the code of the repository into the currently
            running job VM: <a href="https://github.com/marketplace/actions/checkout" target="_blank">https://github.com/marketplace/actions/checkout</a>
        </li>
        <li>Line 14: This step has multiple lines and starts with a name for the step itself.</li>
        <li>Line 15: The step uses an official action to install Java on the VM: <a
                href="https://github.com/marketplace/actions/setup-java-jdk" target="_blank">https://github.com/marketplace/actions/setup-java-jdk</a>
        </li>
        <li>Lines 16-17: Actions can be used with variables as shown here to indicate the Java version that needs to be
            installed.
        </li>
        <li>Line 18: The last step of our current job is to run a command line command in the VM. Here we use Maven’s
            mvn clean test command to build the source code and run unit tests, based on the pom.xml file in the source
            code.
        </li>
    </ul>

    <p>More about this in a later chapter of the course.</p>

    <p>This constitutes the end of our job, which showed off how we could take the things that a starting student did on
        their local machine and include them in a DevOps pipeline using GitHub Actions.</p>
</div>
