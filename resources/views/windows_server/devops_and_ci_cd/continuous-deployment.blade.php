<div>
    <h2>1.5 Continuous Deployment</h2>

    <p>Continuous Deployment is the ‘final’ stage of a DevOps pipeline where the code that was committed by the
        developers is deployed into the production after standard testing. It simplifies the process of update by
        eliminating manual scripting and enabling real-time monitoring. This can be seen as an alternative or an
        addition to Continuous Delivery as not all projects require a release and instead opt for a direct deploy to
        hosting.
    </p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/continuous_deployment_1.png"
         alt="" title="">

    <p>
        The arrow pointing from the monitoring to the plan step represents the issues discovered during
        monitoring being placed as new planning items which need to be solved. This way the DevOps pipeline is one
        continuous loop, as to why it often gets represented with an infinity symbol.
    </p>

    <h3>1.5.1 Deploy</h3>

    <p>The possibility of doing simple automatic deployments of web applications has increased greatly in the last
        years. More and more hosting providers offer Cloud solutions which are tailored to be integrated with many
        different DevOps pipelines and which can host a multitude of application types. Larger on-premise hosting has
        developed this integration capacity as well, even if it usually requires more effort to set up. For anything
        larger than a simple website, deployment is not as simple as uploading something to hosting. It is carried out
        after going through a staging environment and using deployment strategies like Blue-Green, Canary Analysis,
        etc.</p>

    <p><strong>Tools:</strong></p>
    <p>Netifly or Heroku are Cloud-based hosting providers which offer a free-tier, which gets taken advantage of by
        small-scale users who can then attach their own paid domain name. More classic types of hosting can still be
        deployed to as well from a pipeline by using SSH. Larger projects which use containers often make use of hosting
        on Kubernetes, an open-source container orchestration platform which can manage the deployment of many
        containers at once. A lot of Cloud providers offer a Kubernetes service which easily integrate with DevOps
        pipelines.</p>

    <p><strong>In practice:</strong></p>
    <p>Our simple example uses a Heroku free-tier offer to host our Java web application. We need to first create a
        Heroku account and register an app on the free-tier. With that completed we can build it into our GitHub Actions
        pipeline, for the sake of example as a new job:</p>

    <img src="/assets/img/windows_server/devops_and_ci_cd/continuous_deployment_2.png"
         alt="" title="">

    <ul>
        <li>Line 45: The action which deploys our project to Heroku works off of our unbuilt code and not an executable
            like a .jar-file. That is why testing and building the project before this stage is even more essential in
            this case.
        </li>
        <li>Line 46: As there is no official GitHub Action to deploy a project to Heroku, we use a community-made one.
            One can recognize this by the naming convention where the original creator’s name is at the front of the
            Action use tag instead of the generic ‘actions’ term.
        </li>
        <li>Line 47-50: To make a connection and upload to Heroku, the pipeline needs to include a few parameters to
            authenticate and authorize the running pipeline. To get these into the pipeline safely one needs to add them
            to the ‘Secrets’ section in the Settings tab of the repository main page.
        </li>
    </ul>

    <img src="/assets/img/windows_server/devops_and_ci_cd/continuous_deployment_3.png"
         alt="" title="">

    <h3>1.5.2 Monitor</h3>

    <p>To make a software deployment failsafe and robust, tracking the application’s health in a production environment
        is essential. Application monitoring tools will trace the performance metrics like CPU utilization or latency
        and will check for security incidents. Log analyzers will scan logs produced by applications and OS to identify
        behavior and track the source of problems. In case of any issue, notifications are sent out to ensure safety and
        reliability. The monitoring stage helps businesses gather intelligence about how their new software changes
        contribute to revenue, helps the infrastructure team track the system behavior trend and do capacity planning
        but also gives the development team insights into fixes or new features that are needed. This is also why
        monitoring has an influence on the first planning stage of the DevOps pipeline.</p>

    <p><strong>Tools:</strong></p>
    <p>Modern monitoring tools like Prometheus can even integrate with Kubernetes to not only trace the load on
        application but also instruct Kubernetes to duplicate containers with applications to work through the extra
        load. Security monitoring tools like the ones offered by Contrast are able to provide you with live monitoring
        for security incidents, instead of only relying on logs.</p>

    <p><strong>In practice:</strong></p>
    <p>We will not be including any monitoring in our example. Later in the course, we will highlight a few monitoring
        tools more.</p>

</div>
