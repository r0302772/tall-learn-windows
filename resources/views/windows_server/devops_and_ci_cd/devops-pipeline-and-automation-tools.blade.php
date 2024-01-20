<div>
    <h2>1.1 DevOps Pipeline and Automation Tools</h2>

    <p>The essence of DevOps pipelines can be summarized in one sentence: Tools that automate code-related actions,
        either on premise or in the cloud, whereby one can customize these actions themselves. As is often the case with
        automation tools, these are the most popular and best-known part of DevOps to the point that searching for
        information on DevOps will just result in information on DevOps pipelines.</p>

    <p>We will go more in depth on the pipeline technology itself before we start with a practical example to illustrate
        the different steps which are usually included in a pipeline.</p>

    <p>Actions such as building your code into a runnable application or running tests are usually done on one’s own
        local machine at the start of a student’s career. However, in a production environment it is not enough that
        these actions work on your local machine, nor is it possible to keep doing this in a team.</p>

    <p>That’s why dedicated servers were set up to do these actions for a team on premise. Code was centralized on the
        server, built, and tested on the server itself. At first this was done by using home-made scripts. Later on
        specific tools became available that could be installed on the server and were specifically designed to more
        easily automate these actions together in a pipeline.</p>

    <p>A popular example of on-premise tools like these is Jenkins, an open-source system, or Azure DevOps Server, a
        system by Microsoft. Both still run commands and actions on the server itself, but provide a central system to
        manage these actions and other tools.</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/devops_pipeline_and_automation_tools_1.png" alt="" title="">

    <p>With the rise of Cloud a lot of SAAS (Software-as-a-service) solutions appeared. These services essentially still
        do the same but use temporary VM’s in the Cloud to run the actions in. Examples of these are CircleCI, Bamboo,
        TravisCI, Azure DevOps … Most of the Cloud services also have an on-premise version.</p>

    <p>For this course, we will be using GitHub Actions, the Cloud-based DevOps pipeline service of GitHub. This service
        is free and unlimited for public repositories on GitHub and free up until a certain point for private
        repositories.</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/devops_pipeline_and_automation_tools_2.png" alt="" title="">
</div>
