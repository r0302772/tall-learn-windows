<div>
    <h2>1.5 Services</h2>

    <p>In this final section of the chapter, let's explore what services are.</p>

    <p>You can obtain a list of all the services running on your system by using the Management Console to open up the "services" snap-in.</p>

    <img src="/assets/img/windows_security_basics/windows_components/services.png" alt="" title="">

    <p>Here are a few characteristics of services:</p>

    <ul>
        <li>The Windows operating system categorizes processes into two types: those running in "kernel mode" and those running in "user mode." Services are part of the kernel mode, which is essential for the operating system's stability.</li>
        <li>Services are automatically started at boot in a specific sequence, and certain processes can only start if others are already running.</li>
        <li>Users with sufficient privileges can stop or start services.</li>
        <li>Services run as a specific user account, with crucial services often running under the "system" user account, which has the highest privileges.</li>
        <li>To get more information on services, you can use PowerShell with the cmdlet "Get-Service."</li>
    </ul>

</div>
