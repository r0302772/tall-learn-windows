<div>
    <h3>7.3 Making Windows 10 a Member of the Domain</h3>

    <p>
        Now your first domain controller is installed, and you have your own domain. You can now make the Windows 10 virtual machine a member of the domain.
    </p>

    <p>
        <strong>Attention:</strong> Your TCP/IP settings must be correct; otherwise, you will not be able to join the domain. The setting "preferred DNS" is the most important one. If you want a device to join a domain, you have to enter the domain name. Windows 10 needs to find the PC name of the server and the IP address of the server. This data is stored in the DNS service on the domain controller. If you use the wrong DNS server, you won't find this information and won't be able to join the domain.
    </p>

    <p><strong>How do you proceed to make your Windows 10 VM a member of the domain "cursusdom.tm"?</strong></p>

    <ol>
        <li>Check the network settings of your Windows 10 virtual machine. In Virtual Box, this must be set as "internal network".</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/making_windows_10_a_member_of_the_domain/making_windows_10_a_member_of_the_domain_1.png" alt="" title="">
        <li>Start up your Windows 10 virtual machine.</li>
        <li>Log in with the local user "admin". This user has a blank password.</li>
        <li>Open the network settings. Give the device a fixed IP address (192.168.1.2) and use as the preferred DNS server the IP address of your domain controller (192.168.1.1).</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/making_windows_10_a_member_of_the_domain/making_windows_10_a_member_of_the_domain_2.png" alt="" title="">
        <li>Via "Control Panel" and "System," you can change the computer name and workgroup membership. You don't have to change the PC name, but we will make the PC a member of the domain "cursusdom.tm". Choose "rename this computer". Click on the "change" button. Select the option "domain". Enter the name of the domain: "cursusdom.tm". Click on "OK".</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/making_windows_10_a_member_of_the_domain/making_windows_10_a_member_of_the_domain_3.png" alt="" title="">
        <li>You need the permission of the domain administrator to join the domain "cursusdom". Enter the domain administrator's name and password.</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/making_windows_10_a_member_of_the_domain/making_windows_10_a_member_of_the_domain_4.png" alt="" title="">
        <li>Close all windows and restart your Windows 10 device.</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/making_windows_10_a_member_of_the_domain/making_windows_10_a_member_of_the_domain_5.png" alt="" title="">
    </ol>

    <p><strong>Remark:</strong> Since Windows Server 2008, domain users can add ten computers by default.</p>
</div>
