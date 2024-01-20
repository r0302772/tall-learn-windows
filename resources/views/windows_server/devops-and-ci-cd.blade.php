<x-learn-windows-layout>
    <x-slot name="description">DevOps & CI/CD</x-slot>
    <x-slot name="title">DevOps & CI/CD 🚀</x-slot>

    <div>
        <p>DevOps has grown to be an omnipresent and important term in IT, even though the specific meaning people give
            to
            it can differ a lot. Despite these differences, one is able to spot a few general underlying aspects that
            can
            define a ‘DevOps culture’ and can bring us closer to understanding this term.</p>

        <p>We will start off from the 5 points on how Google sees DevOps culture:</p>

        <ol>
            <li>
                <p>Reduce organization silos:</p>
                <ul>
                    <li>Development teams, infrastructure teams, … need to start thinking and communicating as one team
                        and
                        move towards actually forming one team
                    </li>
                    <li>Developers need to have knowledge about operations and operations need to have knowledge about
                        development
                    </li>
                </ul>
            </li>

            <li>
                <p>Accept failure as normal:</p>
                <ul>
                    <li>Implement fail-safes from the start during coding and deployment and see the occurrence of
                        failures
                        as a certainty in the long term
                    </li>
                    <li>Do not play the blame game when a failure does lead to larger problems but see how a fail-safe
                        can
                        be implemented
                    </li>
                </ul>
            </li>

            <li>
                <p>Implement gradual change:</p>
                <ul>
                    <li>Make small changes in code easier by using automation so that a code change does not lead to a
                        heap
                        of work every single time
                    </li>
                    <li>Reduce the need for hellish crunch months having huge changes right before releases</li>
                </ul>
            </li>

            <li>
                <p>Measure everything:</p>
                <ul>
                    <li>Automatic monitoring for security, capacity or other incidents is essential to implement gradual
                        changes fast and solve these incidents
                    </li>
                    <li>Detailed monitoring brings new insights into the usage of different application features and
                        user
                        interest
                    </li>
                </ul>
            </li>

            <li>
                <p>Leverage tooling & automation:</p>
                <ul>
                    <li>Use automation tools to help the other points come into reality</li>
                    <li>Standardize tools and working methods to bring development and operations closer together</li>
                </ul>
            </li>
        </ol>

        <p>You will probably notice that these 5 points overlap and are tied to each other. This is not a surprise as we
            were still talking about DevOps culture. These ideas need to get implemented into organizations in various
            ways
            and degrees by using DevOps tools or methodologies.</p>

        <p>A well-known methodology is Agile, with one of its core aspects being gradual changes and development in
            sprints.</p>

        <p>However, DevOps is usually most recognized for the tooling that automates the entire process of application
            development and operations, from the coding up until the eventual monitoring of a running application. This
            sequence of implemented automatic steps and tools is often called a DevOps pipeline. The rest of this
            chapter
            will be dedicated to this pipeline and the tools it contains.</p>

        <p>Google itself has SRE teams which are essentially focused on operations and less on development. That’s also
            why
            the implementation of the DevOps culture in these parts of Google will differ a bit from how we implement it
            to
            start off with. You can see their implementation as SRE <a
                href="https://www.youtube.com/watch?v=uTEL8Ff1Zvk"
                target="_blank">here</a>.
        </p>
    </div>

    @include('windows_server.devops_and_ci_cd.devops-pipeline-and-automation-tools')
    @include('windows_server.devops_and_ci_cd.introducing-basic-pipeline-steps-on-github-actions')
    @include('windows_server.devops_and_ci_cd.towards-all-steps-of-continuous-integration-ci')
    @include('windows_server.devops_and_ci_cd.continuous-delivery')
    @include('windows_server.devops_and_ci_cd.continuous-deployment')
</x-learn-windows-layout>
