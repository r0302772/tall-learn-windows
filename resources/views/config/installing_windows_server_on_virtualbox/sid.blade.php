<div>
    <h2>6 SID</h2>
    <p>
        In the Windows System Administration lessons, we talked about SIDs. These are the unique numbers we assign to
        users, groups, and computers. With these numbers, they make themselves known in the network.
    </p>

    <h3>6.1 Domain membership versus workgroup</h3>
    <p>
        We'll quickly refresh what you saw in the "Windows System Administration" course.
        If a Windows 10 device is not a member of a domain, then we can only log on to that device if we have a local
        user account. PCs in a workgroup each have their own local user account database, and PCs in a workgroup do not
        exchange this information.
    </p>

    <p>
        In a company, you get a user account with which you have to be able to log on to every PC in the network. This
        is only possible if the PCs are members of the domain. Because they are members of the domain, the local user
        account database is no longer used, but you make use of a centralized user account database. We call this
        centralized user account database "Active Directory". Learn how to work with AD
    </p>

    <p>In this chapter, you will learn about:</p>
    <ul>
        <li>Domain controllers</li>
        <li>User accounts</li>
        <li>Computer accounts</li>
        <li>Logging on to Active Directory</li>
    </ul>

    <h3>6.2 The domain controller</h3>
    <p>
        A domain controller is a server on which Active Directory is installed. Active Directory is a database where we
        can keep track of users, groups, passwords, and settings. Web servers, applications, database servers, ... Use
        this central database to authenticate people and to determine what they can and cannot do.
    </p>

    <h3>6.3 SIDs and your test setup</h3>
    <p>What do you notice about this in your test setup?</p>
    <p>
        A server version and a Windows version don't really differ that much. The main difference is the performance and
        the kind of extra services we can run on a server and not on a Windows client PC. Think about a webserver or an
        SQL server for instance. We'll make a short overview of similarities and differences.
    </p>
    <p> We could describe the test environment like this:</p>

    <table>
        <thead>
        <tr>
            <th>Windows 10</th>
            <th>DC</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Is a member of a workgroup</td>
            <td>Is also a member of a workgroup</td>
        </tr>
        <tr>
            <td>
                <img src="/assets/img/config/devops_and_security/sid/sid_1.png" alt="" title="">
            </td>
            <td>
                <img src="/assets/img/config/devops_and_security/sid/sid_2.png" alt="" title="">
            </td>
        </tr>
        <tr>
            <td>Has its own user account database with users and groups.</td>
            <td>Has its own user account database with users and groups.</td>
        </tr>
        <tr>
            <td>User admin has its own SID</td>
            <td>User administrator has its own SID</td>
        </tr>
        <tr>
            <td>The computer account has its own SID. If the name of the PC changes, the SID remains the same.</td>
            <td>The computer account has its own SID. If the name of the PC changes, the SID remains the same.</td>
        </tr>
        <tr>
            <td>Users who are not in the user account database cannot connect to this device over the network.</td>
            <td>Users who are not in the user account database cannot connect to this device over the network.</td>
        </tr>
        </tbody>
    </table>

    <p><strong>How can you test this in practice?</strong></p>
    <ul>
        <li>Make sure the firewall on both devices is turned off. Normally, you have already done this in a previous
            step. You can check it here:
        </li>
        <img src="/assets/img/config/devops_and_security/sid/sid_3.png" alt="" title="">
        <li>Log on as the user "admin" on "Win10".</li>
        <li>Create the folder c:³ forColleagues on "Win10".</li>
        <img src="/assets/img/config/devops_and_security/sid/sid_4.png" alt="" title="">
        <li>Share this folder by making it a shared folder. (See Windows System Administration course).</li>
        <li>You can place a text document in this folder so that you can test access to it.</li>
        <li>Switch to "DC" and connect to the shared folder. You can do this from the start menu by going to 2.168.1.2
            forColleagues.
        </li>
        <li>You will notice that you cannot connect with your current identity as an administrator. You get this message
            because your account is not recognized by the Windows device.
        </li>
        <img src="/assets/img/config/devops_and_security/sid/sid_5.png" alt="" title="">
        <li>You can try the same thing in the other direction. You can create a shared folder on the server just like
            you did on Windows 10. Connect you can from Windows10 to Windows Server the same way, and you will find that
            you cannot connect.
        </li>
    </ul>

    <p><strong>Decision:</strong></p>
    <p>
        Devices that are in a workgroup environment can hardly share data with each other. Whether it's a server or a
        Windows client doesn't matter.
    </p>
    <p>The problem is caused by 2 user account databases that don't trust each other.</p>
    <p>
        The solution is to have all devices trusting each other use the same user account database. All devices that
        trust each other are called an "Active Directory Domain," and the database of users that they all trust is
        called the "Active Directory Database". This database is installed on a server. The server which possesses the
        database is called the "domain controller". In the next step, we will configure the server we are running now as
        the domain controller.
    </p>
</div>
