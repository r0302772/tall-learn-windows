<div>
    <h3>7.5 Login to Windows 10</h3>

    <p>After the reboot, you can log in to your Windows 10 device in two ways:</p>

    <p><strong>Method 1:</strong> Local Login</p>
    <p>
        Suppose you want to log in with the local user "admin". Then in the box for the login name, you're going to
        enter this: "<code>.admin</code>". The "<code>.admin</code>" refers to the local user account database that is
        on the Windows 10 device (see Windows System Administration course). When you log in this way, you only have
        rights to edit files and folders and settings on the Windows 10 device, but you cannot make any changes or
        connections on the servers or on the other devices that are members of the domain.
    </p>

    <p><strong>Method 2:</strong> Domain Login</p>
    <p>
        Suppose you want to log in as the domain administrator on your Windows 10 device. Then in the box of the login
        name in the login window, you enter this: "<code>cursusdom\administrator</code>" or <code>administrator@cursusdom.tm</code>.
        Your login and password will be sent to the Active Directory database, and your login details will be checked
        there. Once you're logged in, you'll get an access token that gives you access to other devices, folders,
        settings on other servers in the domain.
    </p>

    <p><strong>Command:</strong> Try to log in both ways.</p>

    <p>In all exercises, we use domain accounts and log in to the domain.</p>
</div>
