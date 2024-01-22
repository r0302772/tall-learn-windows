<div>
    <h3>7.7 Right of use</h3>

    <p>We explore a bit further in our setup. How can we explain that users can add up to 10 computer accounts? What
        setting determines this?</p>

    <p>We will show you this setup, so you can become more familiar with group policies. Later on, we will have a
        separate chapter on group policies.</p>

    <p>In your <strong>virtual environment log in as administrator on the domain controller</strong>.</p>

    <ol>
        <li>Open "server manager".</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/right_of_use/right_of_use_1.png" alt="" title="">
        <li>In the top right corner choose "tools" and select "group policy management" from the list.</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/right_of_use/right_of_use_2.png" alt="" title="">
        <li>You will now see the Group Policy Management editor. Via the forest name, the division "domains", the domain
            name and the OU: domain controllers you will get to the default domain controllers policy. This file
            contains the default configuration which will be pushed to the domain controllers.
        </li>
        <li>Through the "settings" you can see which settings these are:</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/right_of_use/right_of_use_3.png" alt="" title="">
    </ol>

    <p>
        Since Windows Server 2008, any domain user can add computers to the domain, with a maximum of ten. This right is
        a sum of two different settings.
    </p>

    <p>The first setting is in the Default Domain Controllers Policy.</p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/right_of_use/right_of_use_4.png" alt="" title="">

    <p>
        Here all Authenticated Users have been given the right to add workstations to the domain. This right can be
        modified or overridden.
    </p>

    <p>
        The second setting is the number of computers the user can still add. This number is calculated from the number
        of computer accounts in the domain with the SID of that particular user as the "Owner".
    </p>

    <p>
        The default number can be checked with the help of ADSI-edit. You can open this tool by typing "adsiedit.msc" in
        your run window.
    </p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/right_of_use/right_of_use_5.png" alt="" title="">

    <p>You come to this window:</p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/right_of_use/right_of_use_6.png" alt="" title="">

    <p>
        <strong>Note</strong>: this is the low level editing tool of Active Directory. If you mess with it, you'll be in
        trouble. Compare it to the registry editor.
    </p>

    <p>
        Right-click on the empty master node and choose "Connect to...". The default settings are good to connect to
        your own computer, in our case the domain controller.
    </p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/right_of_use/right_of_use_7.png" alt="" title="">

    <p>
        Right-click on the main node, the one that starts with DC=... and in the Attribute Editor, find the option named
        "ms-DS-MachineAccountQuota".
    </p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/right_of_use/right_of_use_8.png" alt="" title="">

    <img src="/assets/img/config/devops_and_security/installing_active_directory/right_of_use/right_of_use_9.png" alt="" title="">

    <p>
        To check who is the owner of a computer, who added the account to Active Directory, we choose "Advanced
        Features" in the Active Directory Users and Computers menu from the "View" menu.
    </p>

    <p>
        When we right-click on a computer account, we can see the owner of the account in the Security tab via the
        Advanced button.
    </p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/right_of_use/right_of_use_10.png" alt="" title="">

    <p>In the above case, it is the domain administrator.</p>

    <p>
        As with NTFS permissions, it is not possible to get an overview of the owners of each computer account. Better
        scripting can provide a solution here. And so you see, NTFS permissions do not only apply to files and folders,
        but also to objects that reside in an Active Directory user account database.
    </p>

    <p>
        You will notice that many concepts (such as user rights, groups, NTFS permissions, ownership) from the Windows
        System Administration course are used here. Only this time we apply it on a server level.
    </p>
</div>
