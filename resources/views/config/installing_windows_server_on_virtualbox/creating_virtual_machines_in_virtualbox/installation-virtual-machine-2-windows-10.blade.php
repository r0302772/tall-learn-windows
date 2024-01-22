<div>
    <h3>3.4 Installation virtual machine 2: Windows 10</h3>

    <p>
        The steps in installing Windows 10 are the same as in the "Windows System Administration" course. Follow these
        guidelines to complete the Windows 10 installation.
    </p>

    <p>
        Open Virtual Box. Double-click on the virtual machine named "WIN10". This VM will now start up. In the pop-up
        that appears, use the browse button to point to the Windows 10 installation ISO file.
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_1.png"
         alt="" title="">

    <p>
        The setup will start and in the window below you choose the English version of Windows. For the "keyboard
        layout" you choose "Belgian (Period)". Click on "next" to continue.
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_2.png"
         alt="" title="">

    <p>In the window below click on "install now" to start the installation:</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_3.png"
         alt="" title="">

    <p>Then accept the license agreement and click "next".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_4.png"
         alt="" title="">

    <p>In the window below choose "custom : install windows only (advanced)".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_5.png"
         alt="" title="">

    <p>In the window below, select "drive 0 unallocated space" and click "next".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_6.png"
         alt="" title="">

    <p>
        Next you will be asked to enter the default settings for a number of settings. This is the window from which the
        wizard starts:
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_7.png"
         alt="" title="">

    <p>In the window below you choose as region : "Belgium".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_8.png"
         alt="" title="">

    <p>Next, in the window below, select the keyboard layout "Belgian (Period)".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_9.png"
         alt="" title="">

    <p>In the window for a second keyboard, click on "skip" to continue.</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_10.png"
         alt="" title="">

    <p>The next window is a <strong>difficult and confusing step.</strong></p>
    <p><strong>
            Make sure you make the right choice here. At the bottom left you select "domain join instead". This option
            allows you to enter the name of a new local user. The new administrator we are going to create is called
            "admin" and has a blank password. (By default windows suggests you use a Microsoft account. In this case the
            rest of your configuration will be different from described here. It also makes it extremely difficult to
            make the device a member of a Windows Active directory domain afterward).
        </strong>
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_11.png"
         alt="" title="">

    <p>Via the window below you create the new local user "<strong>admin</strong>":</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_12.png"
         alt="" title="">

    <p>In our test environment you can leave the password for this user <strong>blank</strong> and click "next".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_13.png"
         alt="" title="">

    <p>In the window below, select "don't use online speech recognition" and click "accept".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_14.png"
         alt="" title="">

    <p>In the window below, select "no".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_15.png"
         alt="" title="">

    <p>In the window below, select "no".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_16.png"
         alt="" title="">

    <p>In the window below, choose "basic" and click "accept".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_17.png"
         alt="" title="">

    <p>In the window below, select "no".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_18.png"
         alt="" title="">

    <p>In the window below, select "no".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_19.png"
         alt="" title="">

    <p>In the window below, select "no".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_20.png"
         alt="" title="">

    <p>In the window below, select "no".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_21.png"
         alt="" title="">

    <p>
        Your installation is now complete. But your ISO file is still available. It's as if you still have the
        installation DVD in your computer. If you reboot now, you will be asked again if you want to boot from the ISO
        file. If you do that (by accident), you will start the installation again and overwrite the installation you
        just did.
    </p>

    <p>
        To remove it, we would actually have to remove the DVD from the device. Virtually we do this by choosing this in
        the menu window of your Windows 10 virtual machine:
    </p>

    <p>Choose "devices" from the main menu. Choose "optical drives" and select "host drive".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/installation_virtual_machine_2_windows_10/installation_virtual_machine_2_windows_10_22.png"
         alt="" title="">

    @include('config.installing_windows_server_on_virtualbox.creating_virtual_machines_in_virtualbox.installation_virtual_machine_2_windows_10.updates')
    @include('config.installing_windows_server_on_virtualbox.creating_virtual_machines_in_virtualbox.installation_virtual_machine_2_windows_10.registration')
    @include('config.installing_windows_server_on_virtualbox.creating_virtual_machines_in_virtualbox.installation_virtual_machine_2_windows_10.visual-studio-code')
    @include('config.installing_windows_server_on_virtualbox.creating_virtual_machines_in_virtualbox.installation_virtual_machine_2_windows_10.install-virtual-box-guest-additions')
    @include('config.installing_windows_server_on_virtualbox.creating_virtual_machines_in_virtualbox.installation_virtual_machine_2_windows_10.network-settings')
    @include('config.installing_windows_server_on_virtualbox.creating_virtual_machines_in_virtualbox.installation_virtual_machine_2_windows_10.what-now-i-need-files-and-no-more-internet')
    @include('config.installing_windows_server_on_virtualbox.creating_virtual_machines_in_virtualbox.installation_virtual_machine_2_windows_10.key-combination-for-logging-in')
</div>
