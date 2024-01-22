<div>
    <h4>3.4.1 Updates</h4>
    <p>We complete the installation by installing the latest Windows updates on each VM.</p>
    <p>Both VMs still have the network setting "NAT". Therefore they still have internet access.</p>

    <p><strong>Install updates on your Windows 10 installation:</strong></p>
    <p>Through your configuration screen, you can retrieve and install Windows updates.</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/updates/updates_1.png" alt="" title="">

    <p><strong>Install updates on your Windows Server installation:</strong></p>
    <p>Through your configuration screen, you can retrieve and install Windows updates.</p>
    <p>
        Here you will notice a difference. You will see in red the message "some settings are managed by your
        organization."
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/updates/updates_2.png" alt="" title="">

    <p>
        If you click on the light blue text ("view configured update policies"), you will get to this screen. There you
        will find the explanation why you can or cannot install updates via the default settings on the server.
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/updates/updates_3.png" alt="" title="">

    <p>
        You can see in the window above that there is a reference to a "group policy". This is a file with registry
        settings. Using a group policy, you can install software, change settings, and fine-tune the security of your
        system from Active Directory. For now, we just wanted to show you where this default configuration comes from.
        In a later chapter, we will see how group policies work and how we can change them.
    </p>

</div>
