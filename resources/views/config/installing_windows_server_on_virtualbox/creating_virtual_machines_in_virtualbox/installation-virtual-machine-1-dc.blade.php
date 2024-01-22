<div>
    <h3>3.3 Installation virtual machine 1: DC</h3>

    <p>
        Open Virtual Box. Double-click on the virtual machine named "DC". This vm will now start up. In the pop-up that
        appears, you can use the browse button to point to the Windows server 2019 installation ISO file.
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_1_dc/installation_virtual_machine_1_dc_1.png" alt="" title="">

    <p>
        The setup will start and in the window below you choose the English version of Windows. For the "keyboard
        layout" you choose "Belgian (Period)". Click on "next" to continue.
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_1_dc/installation_virtual_machine_1_dc_2.png" alt="" title="">

    <p>Then you can click on "Install now".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_1_dc/installation_virtual_machine_1_dc_3.png" alt="" title="">

    <p>At this server VM we choose the option "desktop experience":</p>
    <p>
        This version does have a GUI. (If you accidentally choose the first version in the list, then you are installing
        the "core edition" of Windows Server. This version has no GUI. All administration has to be done through the
        command prompt or powershell. This is also called a "headless server". It's the intention that this server is
        managed remotely with tools like Remote Powershell. )
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_1_dc/installation_virtual_machine_1_dc_4.png" alt="" title="">

    <p>Accept the license terms and click "Next".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_1_dc/installation_virtual_machine_1_dc_5.png" alt="" title="">

    <p>Choose a "Custom installation".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_1_dc/installation_virtual_machine_1_dc_6.png" alt="" title="">

    <p>The screen showing the installation location will show "unallocated space". Click "Next" again.</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_1_dc/installation_virtual_machine_1_dc_7.png" alt="" title="">

    <p>
        Finally, you enter the password for the user "administrator". Your password must be at least 7 characters long
        and contain at least 3 types of characters. We call this a complex password.
    </p>
    <p> For example, choose this password: <strong>abc123!</strong></p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_1_dc/installation_virtual_machine_1_dc_8.png" alt="" title="">

    <p>You can now log on to the computer.</p>

    <p>
        Your installation is now complete. But your ISO file is still available. It's as if you still have the
        installation DVD in your computer. If you reboot now, you will be asked again if you want to boot from the ISO
        file. If you do that (by accident), you will start the installation again and overwrite the installation you
        just did.
    </p>

    <p>Choose "devices" from the main menu. Choose "optical drives" and select "host drive".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_1_dc/installation_virtual_machine_1_dc_9.png" alt="" title="">
</div>
