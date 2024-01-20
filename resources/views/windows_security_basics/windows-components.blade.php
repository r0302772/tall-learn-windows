<x-learn-windows-layout>
    <x-slot name="description">Windows components</x-slot>
    <x-slot name="title">Windows components</x-slot>

    <div>
        <p>In this chapter, we explore several Windows components that play a crucial role in determining the security
            of
            your environment. We examine a location where the configuration of your system is stored and explore areas
            where
            security settings are located. This information, combined with the model behind user management and domain
            management, provides a comprehensive overview of the Windows ecosystem in which applications and services
            function.
        </p>

        <p>These components form the foundation for both Windows client systems and Cloud and Server systems. There is a
            growing trend where the line between Network Operations (handled by system administrators) and Software
            Management (handled by programmers) is becoming less distinct. Developers and system administrators alike
            need
            to be aware of the environment in which a solution operates.
        </p>

        <p>While developers may not always set up a complete system, they require sufficient background knowledge about
            the
            setup for troubleshooting and performance maintenance. On the other hand, system administrators may not
            physically set up systems but manage "systems as code." In such scenarios, system admins configure and
            script
            how a system should be set up, rather than manually selecting options and running through wizards.
        </p>

        <p>As you move closer to a Cloud-based environment, programming and configuration skills become more essential.
            The
            close link between setting up and configuring a server environment and the software maintenance and
            performance
            of software is referred to as DEVOPS. DEVOPS forms the basis of the server course "Devops security," where
            we
            delve deeper into server and Cloud-based subject matter, building upon the knowledge of Windows client and
            server components.
        </p>
    </div>


    @include('windows_security_basics.windows_components.the-registry')
    @include('windows_security_basics.windows_components.the-user-account-database')
    @include('windows_security_basics.windows_components.user-account-control')
    @include('windows_security_basics.windows_components.user-and-group-management')
    @include('windows_security_basics.windows_components.services')
</x-learn-windows-layout>
