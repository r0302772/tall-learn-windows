<div>
    <h3>7.6 Domain Membership</h3>

    <p>So how can you tell that a Windows 10 device is a member of a domain?</p>

    <ol>
        <li>Go to your Windows Server virtual machine (DC1).</li>

        <li>Log on to the domain controller (server) as administrator with the password: "abc123!".</li>

        <li>Start "server manager".</li>

        <li>Under "tools" you'll see "Active Directory Users & computers". This is the interface where you can manage
            the Active Directory database. Here you can see which users and computer accounts are available. You can
            create users and groups. You can reset passwords, ....
        </li>
        <p>This is the interface where you are:</p>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/domain_membership/domain_membership_1.png" alt="" title="">

        <li>You see the domain name. If you click on the folder "computers" you will see all computer accounts that are
            members of your domain. The name of your Windows 10 VM is there. Other servers which become a member of your
            domain will also be listed there. If you later make your FS VM a member of your domain, then it will also be
            there.
        </li>

        <li>In the same interface, you will find in the folder "domain controllers" the computer account of your
            server:
        </li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/domain_membership/domain_membership_2.png" alt="" title="">

        <li>In the same interface, you will find the domain administrator in the folder "users".</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/domain_membership/domain_membership_3.png" alt="" title="">
    </ol>

</div>
