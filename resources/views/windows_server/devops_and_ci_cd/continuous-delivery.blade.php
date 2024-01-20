<div>
    <h2>1.4 Continuous Delivery</h2>

    <p>The next level of complexity regarding a DevOps pipeline on top of Continuous Integration is Continuous Delivery.
        In this case a production-ready executable, container, … is delivered to the customer or the location where
        users can download it, each time the pipeline runs. This usually includes other aspects to be integrated or at
        least thought of when using the pipeline, such as release branches, full quality testing, coordinating with the
        customer, … We will limit ourselves to the additional technical steps and tools.</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/continuous_delivery_1.png"
         alt="" title="">

    <h3>1.4.1 Containerize</h3>

    <p>Some application projects aim to produce an executable like a .jar-file, others deliver a web application still
        in a document-tree form or deliver a library or module. These deliverables are then installed or hosted on a
        machine or server, often a virtual machine. Virtual machines are quite expensive to run and running one just for
        an application gives you a lot of unused power, space, and features. The solution to this was the container, a
        small, flexible and minimal virtual environment that only has the needed components to make an application run.
        These containers can be described when the application is built, giving the developer full control over the
        environment of components in which the application will need to run, such as Python installations, modules,
        imports, … These containers can then be run by a larger server, without the server having anything to do or to
        know about the contents of the container, much like in real-life sea containers.</p>

    <p><strong>Tools:</strong></p>
    <p>The most popular name amongst these is the Docker container, which is described by a Dockerfile on how it needs
        to be built up and what it needs to contain. This Dockerfile can then be run with the Docker CLI. All of this
        can easily be done during a pipeline step, making it an important part of the current DevOps toolset. Docker
        Desktop is the GUI-driven starting point for developing and using Docker.</p>

    <p><strong>In practice:</strong></p>
    <p>We will investigate Docker, Dockerfiles and the pipeline integrations of it, later on in the course.</p>

    <h3>1.4.2 Store</h3>

    <p>Once a build is finished, executables, containers or packages can be stored in a centralized location or database
        called Artifactory or a Repository tool. Some application projects generate many builds per day and keeping
        track of all builds can be difficult. Hence, as soon as the build is generated and verified, it is sent to the
        repository for storage. Repository tools are used to store binary files such as .rar, .war, .exe. Msi etc. From
        here, testers can manually pick, deploy an artifact in a test environment to test if it does not happen
        automatically. In the same way they can also then choose to create a release to the public from these stored
        files.</p>

    <p><strong>Tools:</strong></p>
    <p>The choice of storage tools depends on the sort and nature of the deliverable. When the project’s aim is to
        produce a library or packages which can be imported into other projects, one can use the general online
        repositories like pypi.org for Python or MVNRepository for Java projects using Maven. Docker Hub is the main
        online repository for Docker containers. It does not store entire containers, but container images that become
        containers at runtime. There is of course more enterprise-level software that can be used as a tool to store
        many kinds of deliverables. One example of this is Jfrog Artifactory.</p>

    <p><strong>In practice:</strong></p>
    <p>We will be talking about Docker and Docker Hub later on in the course and will now limit ourselves to using the
        default GitHub Actions artifact upload in our example. GitHub has many cases where you can download the release
        of a piece of software. This can be achieved in two simple steps:</p>
    <ol>
        <li>Upload the output of the tested build using the Upload Artifact GitHub Action</li>
        <li>Make a release from the artifact that is now located alongside the completed pipeline on GitHub</li>
    </ol>
    <p>Both of these steps can be automated, however we will only include the first step in our example.</p>

    <p>Our pipeline example uses a new job called ‘release’ to more easily illustrate this. However, this is not needed
        as it is perfectly possible to include an upload artifact Action at the end of the previous job.</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/continuous_delivery_2.png"
         alt="" title="">

    <p>We will only describe the new features shown in this job:</p>

    <ul>
        <li>Line 21: The ‘needs’ keyword will ensure that this job will only start to run when the ‘test’ job has
            succeeded
        </li>
        <li>Line 25-28: This time around we only install Java 8</li>
        <li>Line 31-32: An illustration of how we can simply run bash commands in the pipeline VM and look at the
            output. Here it is used to showcase the directory which the pipeline is currently at
        </li>
        <li>Line 33-34: We then take a look at the ‘target’ directory, which is the location where the Maven package
            command places the resulting .jar-file
        </li>
        <li>Line 35-36: This Action can be used to upload anything from the pipeline VM to your GitHub Actions page:
            executables, lists, logs, … In this case, we use it to upload the .jar-file resulting from the build
        </li>
        <li>Line 38-39: These two parameters determine how the uploaded artifact will be named on your GitHub Actions
            page, and the path where it is now located inside the pipeline VM
        </li>
    </ul>

    <p>Below you can see the output of line 31-32, after selecting a pipeline run in the list of runs on the Actions
        page:</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/continuous_delivery_3.png"
         alt="" title="">

    <p>Any uploaded artifacts that come out of the pipeline get displayed on the same pipeline run page. Our uploaded
        .jar-file is included in a .rar-file named ‘artifact’ as we requested:</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/continuous_delivery_4.png"
         alt="" title="">

    <p>These can even be released to the public by creating releases or packages from the main page of your GitHub
        repository.</p>
</div>
