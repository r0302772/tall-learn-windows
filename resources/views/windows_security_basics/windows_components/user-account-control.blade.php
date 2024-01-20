<div>
    <h2>1.3 User Account Control (UAC)</h2>

    <p>
        The user created during the Windows installation is the local administrator of the machine. Another local
        administrator account in the domain is named "administrator," but it is disabled by default. You can check this
        in the Microsoft Management Console by opening the "local users & groups" snap-in.
    </p>

    <img src="/assets/img/windows_security_basics/windows_components/user_account_control_1.png" alt="" title="">

    <p>
        In this example, the user "admin" was created during the installation process. Checking the "member of" tab for
        either the "admin" or "administrator" account will show that they are members of the "administrators" group.
    </p>

    <img src="/assets/img/windows_security_basics/windows_components/user_account_control_2.png" alt="" title="">

    <p>
        Membership in the "administrators" group grants various user rights and privileges, allowing full management of
        settings on the machine. However, there is a restriction on the use of these administrative privileges known as
        User Account Control (UAC).
    </p>

    <p>
        Before Windows 8, local administrators had unrestricted access to perform any actions immediately. However, this
        approach posed security risks. Most tasks on a computer do not require administrative privileges, and granting
        such privileges unnecessarily could be exploited by malicious scripts or software.
    </p>

    <p>
        UAC introduces a mechanism where every account is treated as a standard user by default. Elevated privileges are
        granted only when necessary, reducing the risk of abuse. UAC prompts appear when administrative actions are
        attempted, and the user is temporarily granted elevated privileges.
    </p>

    <p>Two scenarios trigger the elevation of privileges:</p>

    <ol>
        <li><strong>Manual Elevation:</strong> When using a shortcut, right-clicking, and choosing "run as
            administrator," a UAC prompt will appear, asking for confirmation to elevate privileges from a standard user
            to an administrator.
        </li>
    </ol>

    <img src="/assets/img/windows_security_basics/windows_components/user_account_control_3.png" alt="" title="">
    <img src="/assets/img/windows_security_basics/windows_components/user_account_control_4.png" alt="" title="">

    <ol>
        <li><strong>Automatic Elevation:</strong> Some operations trigger UAC prompts automatically when insufficient
            privileges are detected. An icon with a shield usually indicates such cases.
        </li>
    </ol>

    <img src="/assets/img/windows_security_basics/windows_components/user_account_control_5.png" alt="" title="">

</div>
