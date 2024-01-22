<div>
    <h2>8 LDAP and Authentication Protocols</h2>

    <p>
        In chapter 7.7, you already noticed that Active Directory is a complex whole, more than just a database with
        some users and groups. The core of this course is authentication.
    </p>

    <p>
        Wherever we look in the IT world, we find that applications or operating systems have to authenticate themselves
        against a database. This could be a browser that asks you to log in via Google or Facebook to access another
        site, an operating system that is a member of a domain asking to become a member of a domain, or an intranet
        website where you have to log in with the same credentials as your Windows 10 device that is a member of your
        domain.
    </p>

    <p>
        Authentication protocols are essential for secure and standardized login processes. Two examples of such
        protocols are Kerberos and OAuth 2.0:
    </p>

    <table>
        <tr>
            <th>Kerberos</th>
            <th>OAuth 2.0</th>
        </tr>
        <tr>
            <td>Works with a ticket system.</td>
            <td>Is based on SSL.</td>
        </tr>
        <tr>
            <td>Active Directory Database must be accessible in cash.</td>
            <td>Widely accepted standard for not sending login details to a website but transferring the full login to
                sites like Google, Facebook, etc.
            </td>
        </tr>
        <tr>
            <td>Each ticket gives permission to do something, sensitive to time changes for security.</td>
            <td></td>
        </tr>
        <tr>
            <td>Domain controllers are behind a firewall.</td>
            <td>Cons include the lack of control over user data and technical difficulties in meeting requirements.</td>
        </tr>
        <tr>
            <td>A solution is to run AD in the cloud in Azure.</td>
            <td></td>
        </tr>
    </table>

    <p>
        <strong>Azure DevOps Application:</strong> This document describes how to connect from Azure DevOps to your
        GitHub repository using OAuth: <a
            href="https://docs.microsoft.com/en-us/azure/devops/boards/github/connect-to-github?view=azure-devops"
            target="_blank">Connect to GitHub</a>
    </p>

    <p>
        In this course, you will become familiar with many requirements needed for OAuth. The next part will introduce
        you to some authentication protocols and AD protocols by connecting to a Debian operating system. We will use a
        Python script to retrieve information from Active Directory, simulating a scenario where Debian is an
        application requiring information from AD securely.
    </p>

    <h3>8.1 Python-LDAP-Debian Simulation</h3>

    <p>
        For this simulation, we relied on <a
            href="https://blog.thomastoye.be/python-ldap-authentication-with-microsoft-active-directory-46661bebc483"
            target="_blank">this source</a>. Follow these steps to test the simulation:
    </p>

    <ol>
        <li>You already have a domain controller with an AD database, simulating the database you are accessing for
            validation.
        </li>
        <li>Create a new virtual machine (Debian 32-bit installation). Ensure internet access for this virtual machine
            by configuring virtual box network settings. Use the following command to fetch the LDAP packages:
            <pre><code>sudo apt-get install python3-ldap</code></pre>
            (Note: The screenshot shows 'python-ldap,' but that command has been deprecated in favor of 'python3-ldap.')
        </li>
        <img src="/assets/img/config/devops_and_security/ldap_and_authentication_protocols/python_ldap_debian_simulation/python_ldap_debian_simulation_1.png" alt="" title="">
        <li>Change the virtual box network settings of your Debian VM to have a fixed IP address and be able to contact
            the domain controller with that IP address.
        </li>
        <li>Attempt to make an LDAP connection using example code provided in the source.</li>
    </ol>

    <p>This is a piece of example code for a connection to an AD directory:</p>

    <img src="/assets/img/config/devops_and_security/ldap_and_authentication_protocols/python_ldap_debian_simulation/python_ldap_debian_simulation_2.png" alt="" title="">

    <p>You can adapt this code to your own environment and IP settings.</p>
    <p>
        Make sure your Debian device and your AD domain controller have the correct IP settings and can connect to each
        other.
    </p>
    <p>
        Just because you can connect doesn't mean you automatically have access to AD. This is a protected database, and
        only users who are in the database can access it. That's why we need authentication before we can consult
        anything.
    </p>
    <p>This is a piece of example code to authenticate via Linux:</p>

    <img src="/assets/img/config/devops_and_security/ldap_and_authentication_protocols/python_ldap_debian_simulation/python_ldap_debian_simulation_3.png" alt="" title="">

    <p>This is an example of what you'll see if you try to log in with the wrong credentials during the connection:</p>

    <img src="/assets/img/config/devops_and_security/ldap_and_authentication_protocols/python_ldap_debian_simulation/python_ldap_debian_simulation_4.png" alt="" title="">

    <p>
        Note: if you connect too often with wrong credentials your AD user account will be locked out. At that moment
        the administrator of AD needs to unlock the user to get access again. This can explain why you can't connect
        with the right credentials.
    </p>

    <p>
        If you wish to analyze the code further, you can use the test script from <a
            href="https://blog.thomastoye.be/python-ldap-authentication-with-microsoft-active-directory-46661bebc483"
            target="_blank">this link</a>.
    </p>

    <p>
        For those interested in the security behind this connection, you can monitor the connection via Wireshark to
        observe network activity, whether it's clear text, and more.
    </p>
</div>
