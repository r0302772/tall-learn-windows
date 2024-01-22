<div>
    <h4>3.4.4 Install "Virtual Box Guest Additions"</h4>
    <p>
        At the moment, it can be inconvenient to switch between your host system and the virtual machines. For example,
        you cannot copy and paste text between systems. To solve this, you can install the "Virtual Box Guest
        Additions". We do this on both VMs.
    </p>

    <h4>On Windows Server</h4>
    <p>
        Go to "Devices" and choose "Insert Guest Additions CD image". You will now load an ISO file from Virtual Box
        into your VM.
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/install_virtualbox_guest_additions/install_virtualbox_guest_additions_1.png" alt="" title="">

    <p>
        This ISO file can be found in the Explorer of your Windows Server VM (not in your host VM). Go to the Explorer
        of your Windows Server VM. Open the CD Rom drive (D: in this example), and double-click on
        "VboxWindowsAdditions-amd64" to start the installation of the guest additions.
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/install_virtualbox_guest_additions/install_virtualbox_guest_additions_2.png" alt="" title="">

    <p>Click on "next" to start the installation.</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/install_virtualbox_guest_additions/install_virtualbox_guest_additions_3.png" alt="" title="">

    <p>On the screen below, click "next" to continue.</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/install_virtualbox_guest_additions/install_virtualbox_guest_additions_4.png" alt="" title="">

    <p>Keep the default settings. Click on "next" in the screen below to continue.</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/install_virtualbox_guest_additions/install_virtualbox_guest_additions_5.png" alt="" title="">

    <p>In the pop-up that appears, click on the "install" button.</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/install_virtualbox_guest_additions/install_virtualbox_guest_additions_6.png" alt="" title="">

    <p>Finally, click "finish" and reboot your device.</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/install_virtualbox_guest_additions/install_virtualbox_guest_additions_7.png" alt="" title="">

    <p>
        Finally, if you want to copy or paste text between your host system or between VMs, you have to go to "Devices"
        and choose "Shared Clipboard" and the option "Bidirectional".
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/install_virtualbox_guest_additions/install_virtualbox_guest_additions_8.png" alt="" title="">

    <h5>On Windows 10</h5>

    <p>
        On your Windows 10 VM, you follow the same steps as we just did for the server version. There you also install
        the Virtual Box Guest Additions.
    </p>
</div>
