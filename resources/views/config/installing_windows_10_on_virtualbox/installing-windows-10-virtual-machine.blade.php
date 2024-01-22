<div>
    <h2>3 Installing Windows 10 Virtual Machine</h2>

    <p>
        <strong>Preparation:</strong> Locate the Windows setup ISO file that you downloaded in the previous step. Open
        VirtualBox on your computer.
    </p>

    <h3>3.1 Creating Your First Virtual Machine</h3>

    <p>In VirtualBox, we will create a new virtual machine:</p>

    <ol>
        <li>Open VirtualBox.</li>
        <li>Use the "New" button to start the VM creation wizard.</li>
        <li>Use the following details for your virtual machine:
            <ul>
                <li>Name: "win10_64CB"</li>
                <li>Select the folder to store the VM files on your computer.</li>
                <li>Choose OS version: "Windows 10 64-bit" and press "Next."</li>
            </ul>
        </li>
        <img
            src="/assets/img/config/installing_windows_10_on_virtual_box/creating_your_first_virtual_machine/creating_your_first_virtual_machine_1.png"
            alt="" title="">
        <li>Select the amount of RAM for your VM (2GB is sufficient) and press "Next."</li>
        <img
            src="/assets/img/config/installing_windows_10_on_virtual_box/creating_your_first_virtual_machine/creating_your_first_virtual_machine_2.png"
            alt="" title="">
        <li>Select "Create a new virtual hard disk" and press "Create."</li>
        <img
            src="/assets/img/config/installing_windows_10_on_virtual_box/creating_your_first_virtual_machine/creating_your_first_virtual_machine_3.png"
            alt="" title="">
        <li>Select file type "VDI" and press "Next."</li>
        <img
            src="/assets/img/config/installing_windows_10_on_virtual_box/creating_your_first_virtual_machine/creating_your_first_virtual_machine_4.png"
            alt="" title="">
        <li>Select "Dynamic" and press "Next."</li>
        <img
            src="/assets/img/config/installing_windows_10_on_virtual_box/creating_your_first_virtual_machine/creating_your_first_virtual_machine_5.png"
            alt="" title="">
        <li>Select the size of the virtual hard disk (e.g., 50GB) and press "Next."</li>

        <img
            src="/assets/img/config/installing_windows_10_on_virtual_box/creating_your_first_virtual_machine/creating_your_first_virtual_machine_6.png"
            alt="" title="">
        <li>Hit "Create" to finish.</li>
    </ol>

    <p>Your new virtual machine is created. Click the "Settings" button to view the settings.</p>

    <p>Check that the network card setting is "NAT" to allow your VM to access the internet.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/creating_your_first_virtual_machine/creating_your_first_virtual_machine_7.png"
        alt="" title="">

    <p>
        Double-click on the virtual machine. The popup window will ask for the location of the installation ISO file.
        Use the yellow browse button to indicate the folder where you stored your ISO file.
    </p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/creating_your_first_virtual_machine/creating_your_first_virtual_machine_8.png"
        alt="" title="">

    <p>After opening the browse button, use the "Add" button to locate the ISO file.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/creating_your_first_virtual_machine/creating_your_first_virtual_machine_9.png"
        alt="" title="">

    <p>Click "Start" to begin the installation.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/creating_your_first_virtual_machine/creating_your_first_virtual_machine_10.png"
        alt="" title="">

    <h3>3.2 Installing Windows</h3>

    <p>In the first step of the installation, select the keyboard or input method. Choose "Belgian (Period)" for your
        keyboard or input method. Language and time settings are "English."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_1.png"
        alt="" title="">

    <p>Continue with "Next" and choose "Install now."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_2.png"
        alt="" title="">

    <p>Select the checkbox ("I accept the license terms") to accept the license agreement.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_3.png"
        alt="" title="">

    <p>Select "Custom: Install Windows only."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_4.png"
        alt="" title="">

    <p>Select Drive 0 (this is the VDI file that you made with the wizard) and hit "Next."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_5.png"
        alt="" title="">

    <p>Your installation will now start:</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_6.png"
        alt="" title="">

    <p>Select region: "Belgium." Continue with "Yes."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_7.png"
        alt="" title="">

    <p>Select the keyboard layout: "Belgian (period)" and hit "Yes" to continue.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_8.png"
        alt="" title="">

    <p>We don’t need additional keyboard layouts. Hit “Skip” to continue.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_9.png"
        alt="" title="">

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_10.png"
        alt="" title="">

    <p>
        In the next step, select the username and password for your virtual machine. You will need this to log in to
        your machine. We will not be using an online account like your Hotmail account. Do not sign in with a Microsoft
        account.
    </p>

    <p>In the bottom left corner, you will find the option: “Domain join instead.” Hit this option.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_11.png"
        alt="" title="">

    <p>Enter the username: “admin.”</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_12.png"
        alt="" title="">

    <p>
        Because this is a test environment, leave the password box empty. Press "No" in the next window (we will be
        configuring access across resources or devices).
    </p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_13.png"
        alt="" title="">

    <p>Select "Don’t use online speech recognition" and hit "Accept."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_14.png"
        alt="" title="">

    <p>Select "No" and hit "Accept."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_15.png"
        alt="" title="">

    <p>Select "No" and hit "Accept."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_16.png"
        alt="" title="">

    <p>Select "Send required diagnostic data" and hit "Accept."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_17.png"
        alt="" title="">

    <p>Select "No" and hit "Accept."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_18.png"
        alt="" title="">

    <p>Select "No" and hit "Accept."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_19.png"
        alt="" title="">

    <p>Select "No" and hit "Accept."</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_windows/installing_windows_20.png"
        alt="" title="">

    <p>
        This brings us to the end of the installation, but watch out. Your installation CD-ROM or ISO file is still
        linked to the virtual machine. Just like in a real machine, if you boot from an installation CD, you will be
        asked if you want to start the installation. Watch out that you don’t boot from the ISO file again, or you will
        have to redo the entire installation.
    </p>

    <p>
        <strong>Watch out:</strong> At the end of the installation wizard, you will reboot. <strong>DO NOT BOOT FROM THE
            ISO FILE !!!</strong>
    </p>

    <h3>3.3 Installing Virtual Box guest additions</h3>

    <p>
        It can be hard to switch from the virtual machine to the OS on your computer (we call this OS the “host” system
        for the virtual machines). Drag and drop or copy and paste will not work between the host and the virtual
        machines.
    </p>

    <p>We can solve this by installing the “Virtual Box guest additions”. These are the steps you need to take:</p>

    <p>In Virtual Box go to: “Devices” and select “Install Guest Additions.”</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_virtual_box_guest_additions/installing_virtual_box_guest_additions_1.png"
        alt="" title="">

    <p>
        Virtual Box will mount an ISO file in a virtual CD-ROM drive within your virtual machine. Open Windows Explorer
        in your virtual machine (not in your host system).
    </p>

    <p>Go to the CD-ROM drive.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_virtual_box_guest_additions/installing_virtual_box_guest_additions_2.png"
        alt="" title="">

    <p>Open the CD-ROM drive. You will find the setup files for the Virtual Box guest additions:</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_virtual_box_guest_additions/installing_virtual_box_guest_additions_3.png"
        alt="" title="">

    <p>
        Double-click “VBoxWindowsAdditions-amd64”. This will launch the installation wizard for the 64-bit installation
        of the Virtual Box guest additions. This is the first step in the installation wizard:
    </p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_virtual_box_guest_additions/installing_virtual_box_guest_additions_4.png"
        alt="" title="">

    <p>Hit “Next” to continue in the wizard. Accept the folder location and hit “Next”.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_virtual_box_guest_additions/installing_virtual_box_guest_additions_5.png"
        alt="" title="">

    <p>Leave the default settings, and click on “Install”.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_virtual_box_guest_additions/installing_virtual_box_guest_additions_6.png"
        alt="" title="">

    <p>In the popup window, click on “Install”.</p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_virtual_box_guest_additions/installing_virtual_box_guest_additions_7.png"
        alt="" title="">

    <p><strong>Reboot your system. Guest additions only work after a reboot.</strong></p>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_virtual_box_guest_additions/installing_virtual_box_guest_additions_8.png"
        alt="" title="">

    <p>You can now activate copy and paste between the host system and the virtual machine:</p>

    <ul>
        <li>Select devices and choose the option “bidirectional” for copy and paste options.</li>
    </ul>

    <img
        src="/assets/img/config/installing_windows_10_on_virtual_box/installing_virtual_box_guest_additions/installing_virtual_box_guest_additions_9.png"
        alt="" title="">

    <p>
        You will also be able to access the C drive on your host system from within your virtual machine. You will need
        this in the next step.
    </p>
</div>
