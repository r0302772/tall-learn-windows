<x-learn-windows-layout>
    <x-slot name="description">Exercise: User Management</x-slot>
    <x-slot name="title">Exercise: User Management</x-slot>

    <p><strong>Situation:</strong></p>
    <p>
        In this scenario, we will make 2 users. Look at profile and registry settings and make changes through the GUI
        and with PowerShell.
    </p>

    <p><strong>Exercise:</strong></p>

    <ol>
        <li>Log on as local administrator.</li>
        <li>Open the management console: <code>mmc.exe</code></li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_1.png" alt="" title="">
        <li>Add the “local users and groups” snap-in: from the menu: Use “file” > “add/remove snap-in”. Select “local
            computer”.
        </li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_2.png" alt="" title="">
        <li>Right–click on the “users” container. Create a new user with the name “user1”.</li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_3.png" alt="" title="">
        <li>Check the contents of the folder <code>c:\users</code>. For each user that logs on, a new folder with his or
            her settings (profile) will be created.
        </li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_4.png" alt="" title="">
        <li>At this point, there is no such profile for user1</li>
        <li>Close the management console and save a shortcut to the mmc that you created on your desktop.</li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_5.png" alt="" title="">
        <li>Log out as administrator.</li>
        <li>In Virtual Box, you can use the host key and the delete key (instead of Ctl + Alt + del). Or you can use the
            Virtual box interface: (“input” > “keyboard” > “insert ctrl-alt-del”)
        </li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_6.png" alt="" title="">
        <li>Choose “sign out”</li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_7.png" alt="" title="">
        <li>Log in with “user1”.</li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_8.png" alt="" title="">
        <li>Run through the startup configuration wizard and choose “no” at every step:</li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_9.png" alt="" title="">
        <li>In <code>c:\users\user1</code>, you will find the new default profile for user1.</li>
        <li>Use this command to find the SID number of user 1. Open PowerShell and enter :<br>
            <code>Get-WmiObject win32_useraccount | Select domain, name, sid</code></li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_10.png" alt="" title="">
        <li>Open the registry. Go to “Hkey_users”. There you will find a key with the SID number of the currently logged
            on user:
        </li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_11.png" alt="" title="">
        <li>Try to locate the key that determines what background bitmap that you are using on the desktop.</li>
        <li>We can do the same with groups:</li>
        <img src="/assets/img/exercises/user_management/exercise_user_management_12.png" alt="" title="">
        <li>We can also use the cmdlet: <code>get-localuser</code></li>
        <li>Try to make “user2”. User2 is a member of the Users and Administrators group. Use PowerShell and cmdlets
            like new-localuser and set-localuser and set-localgroup.
        </li>
    </ol>

</x-learn-windows-layout>
