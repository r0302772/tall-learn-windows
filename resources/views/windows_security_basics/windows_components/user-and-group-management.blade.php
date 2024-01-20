<div>
    <h2>1.4 User and group management</h2>

    <h3>1.4.1 User management with the GUI</h3>

    <p>
        This course covers the use of the local user account database stored on every Windows installation in a
        Workgroup environment. Access to the local user account database is available through the Management Console and
        the "local user & groups" snap-in. The local user account database is stored in the HKEY_LOCAL_MACHINE registry
        hive.
    </p>

    <p>
        The snap-in allows the creation of new local users and groups. Here is a list of default user accounts:
    </p>

    <img src="/assets/img/windows_security_basics/windows_components/user_and_group_management_1.png" alt="" title="">

    <p>
        Here is a list of default groups:
    </p>

    <img src="/assets/img/windows_security_basics/windows_components/user_and_group_management_2.png" alt="" title="">

    <p>To create a new user, right-click on the "users" folder and choose "new user."</p>

    <img src="/assets/img/windows_security_basics/windows_components/user_and_group_management_3.png" alt="" title="">

    <p>In the dialog window, enter the following information:</p>

    <ul>
        <li>User name (must be unique, not case-sensitive).</li>
        <li>Password (depending on Local Security policy settings).</li>
        <li>If creating a user for someone else, provide an initial password and check the option "user must change
            password at next logon."
        </li>
        <li>For compromised accounts or other reasons, the checkbox "account is disabled" might be checked.</li>
        <li>For accounts used by services, use options like "user cannot change password" and/or "password never
            expires."
        </li>
    </ul>

    <img src="/assets/img/windows_security_basics/windows_components/user_and_group_management_4.png" alt="" title="">

    <p>
        Once a user account is created, double-click on it to make it a member of specific groups. In Workgroup
        environments, default groups are commonly used to elevate the privileges of a standard user. For example, making
        a user a member of the "Remote Desktop Users" group allows them to open a remote desktop session to the
        computer.
    </p>

    <p>
        Administrators have extensive permissions on a system. However, sometimes you may want to grant users additional
        privileges without giving them full "administrators" membership. In such cases, membership in the "Power Users"
        group can be a suitable solution.
    </p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Power user group</th>
                <th class="px-6 py-3">Elevated privileges</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800"">Power users can’t make themselves member of the group “administrators”.</td>
                <td class="px-6 py-4">
                    <ul>
                        <li>Run legacy applications, in addition to Windows 2000 or Windows XP Professional certified
                            applications.
                        </li>
                        <li>Install programs that do not modify operating system files or install system services.</li>
                        <li>Customize systemwide resources including printers, date, time, power options, and other
                            Control
                            Panel resources.
                        </li>
                        <li>Create and manage local user accounts and groups.</li>
                        <li>Stop and start system services which are not started by default.</li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <h3>1.4.2 User management with PowerShell</h3>

    <p>
        Users, groups, and settings can also be managed using PowerShell. Here's an example of creating a user with a
        blank password using the "new-localuser" cmdlet:
    </p>

    <pre><code>New-LocalUser -Name "User02" -Description "Description of this account." -NoPassword</code></pre>

    <p>If a password is required, you can create a user with a password using the following PowerShell commands:</p>

    <pre><code>$Password = Read-Host -AsSecureString
New-LocalUser "User03" -Password $Password -FullName "Third User" -Description "Description of this account."</code></pre>

    <p>
        Remember that a new user won't automatically be a member of the "users" group; you'll need to do this manually
        using the "Add-LocalGroupMember" cmdlet. Other important PowerShell cmdlets for user management include:
    </p>

    <ul>
        <li>Set-localuser</li>
        <li>Get-localuser</li>
        <li>Enable-localuser</li>
        <li>Disable-localuser</li>
    </ul>
</div>
