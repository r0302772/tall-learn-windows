<div>
    <h2>3 Creating virtual machines in VirtualBox </h2>

    <p>
        For this course you need to <strong>create at least two virtual machines in VirtualBox</strong>. So you have to
        go through the installation procedure twice.
    </p>

    <p>We'll proceed in this order:</p>
    <ul>
        <li>First we download the installation files of Windows 10 and Windows Server</li>
        <li>We create the virtual machines in VirtualBox</li>
        <li>We do the installation of Windows 10 and Windows Server.</li>
    </ul>

    <h3>3.1.1 Download Windows 10</h3>
    <p>
        Before installing your Windows 10 virtual machine, you can download a trial version of Windows 10 from : <a
            href="https://www.microsoft.com/en-us/evalcenter/evaluate-windows-10-enterprise">
            https://www.microsoft.com/en-us/evalcenter/evaluate-windows-10-enterprise</a>
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/download_windows_10/download_windows_10_1.png" alt="" title="">

    <p>Choose the "enterprise edition":</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/download_windows_10/download_windows_10_2.png" alt="" title="">

    <p>Click on "continue". Enter your registration details: (this may, for example, be your hotmail account)</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/download_windows_10/download_windows_10_3.png" alt="" title="">

    <p>Select the "64 bit" , "English version": And click on "download".</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/download_windows_10/download_windows_10_4.png" alt="" title="">

    <p>In our example, we downloaded the ISO file to the "c:\sources" folder.</p>

    <h3>3.1.2 Download Windows Server</h3>
    <p>You can download the trial edition of Windows Server 2019 from this link:</p>
    <a href="https://www.microsoft.com/en-us/evalcenter/evaluate-windows-server-2019">
        Try Windows Server 2019 on Microsoft Evaluation Center</a>
    <p>Choose the "ISO" version:</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/download_windows_server/download_windows_server_1.png" alt="" title="">

    <p>Enter your registration information the way you did for the Windows 10 download:</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/download_windows_server/download_windows_server_2.png" alt="" title="">

    <p>Download the English ISO version:</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/download_windows_server/download_windows_server_3.png" alt="" title="">

    <p>In our example, we downloaded the ISO file to the "c:\sources" folder.</p>

    <h3>3.1.3 Set folder location virtual machines</h3>
    <p>Before creating the virtual machines, it is best that you decide where you want to store the virtual machines on
        your laptop. Default this will be in your "documents" folder. This is not always the most convenient
        solution.</p>
    <p>Choose on which partition/disk you want to place your virtual machines.</p>
    <p>Create a new folder on that disk. In our example this became E:\VM. On your laptop you may choose what is best
        for you.</p>
    <p>Make sure you have enough free space in that location. A default installation of Windows 10 can take up 8Gb of
        space. A default installation of Windows Server can take up 10Gb.</p>
    <p><strong>How do you specify which folder should be used by default for the creation of new virtual
            machines?</strong></p>
    <ul>
        <li>Open Virtual Box</li>
        <li>Go to "File" and select "Preferences".</li>
        <li>In this window you can enter the default folder.</li>
        <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/set_folder_location_virtual_machines.png" alt="" title="">
    </ul>

    <h3>3.1.4 Virtual machine 1: DC1</h3>
    <ul>
        <li>In the VirtualBox interface, click the blue star that says "New" under it.</li>
        <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/virtual_machine_1_dc1/virtual_machine_1_dc1_1.png" alt="" title="">
        <li>Enter the name of your new virtual machine. The first one you create is "DC1".</li>
        <li>Also select the type. DC1 has as version: "Windows 2019 (64 bit)". You will also see in the wizard the
            default folder that you set in the previous step. Click "Next".
        </li>
        <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/virtual_machine_1_dc1/virtual_machine_1_dc1_2.png" alt="" title="">
        <li>DC1 needs 2048 MB memory. Click "Next".</li>
        <li>Leave "Create new virtual hard drive" on and click "Create".</li>
        <li>A VDI file type is good. Continue and click "Next".</li>
        <li>You want a dynamically allocated hard disk. Continue via "Next".</li>
        <li>The name and size (50 GB) are Ok. Click "Create".</li>
        <li>Check the network card settings of the new virtual machine. You can open this window via the settings:</li>
        <p>At the "network" option, keep the default setting "NAT" for now.</p>
        <li><strong>Wait with the installation of Windows Server. We are going to create all virtual machines in Virtual
                Box first.</strong></li>
        <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/virtual_machine_1_dc1/virtual_machine_1_dc1_3.png" alt="" title="">
    </ul>

    <h3>3.1.5 Virtual machine 2: WIN10</h3>
    <ul>
        <li>In the VirtualBox interface, click the blue star that says "New" under it.</li>
        <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/virtual_machine_2_win10/virtual_machine_2_win10_1.png" alt="" title="">
        <li>Enter the name of your new virtual machine. The first one you create is "WIN10".</li>
        <li>Also select the type. WIN10 has as version: "Windows 10 (64 bit)". Click "Next".</li>
        <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/virtual_machine_2_win10/virtual_machine_2_win10_2.png" alt="" title="">
        <li>WIN10 requires 1024 MB of memory. Click "Next".</li>
        <li>Leave "Create new virtual hard drive" enabled and click "Create".</li>
        <li>A VDI file type is good. Continue via "Next".</li>
        <li>You want a dynamically allocated hard drive. Click on "Next".</li>
        <li>The name, (WIN10), and size (50 GB), are Ok. Click on "Create" to continue.</li>
        <li>Check the settings of the network card of the new virtual machine. You can open this window via the
            settings:
        </li>
        <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/virtual_machine_2_win10/virtual_machine_2_win10_3.png" alt="" title="">
        <p>Under the option "network" leave the default setting "NAT" for now.</p>
    </ul>

    <p><strong>Overview of the virtual machines we have now created:</strong></p>
    <p>The new virtual machines have been created, but not yet installed. You will find these machines in your
        console:</p>
    <p><strong>First virtual machine: DC1</strong></p>
    <ul>
        <li>Name: DC1</li>
        <li>OS: Windows 2019 (64 Bit) Desktop edition</li>
        <li>Memory: 2048 GB</li>
        <li>Hard disk size: 50 GB</li>
        <li>Network: provisional: NAT</li>
    </ul>
    <p><strong>Second virtual machine: WIN10</strong></p>
    <ul>
        <li>Name: W10</li>
        <li>OS: Windows 10 (64 Bit)</li>
        <li>Memory: 1024 GB</li>
        <li>Hard disk size: 50 GB</li>
        <li>Network: provisional: NAT</li>
    </ul>
    <p>Your console now looks like this.</p>

    @include('config.devops_and_security.creating_virtual_machines_in_virtualbox.installing-windows')
    @include('config.devops_and_security.creating_virtual_machines_in_virtualbox.installation-virtual-machine-1-dc')
    @include('config.devops_and_security.creating_virtual_machines_in_virtualbox.installation-virtual-machine-2-windows-10')
    @include('config.devops_and_security.creating_virtual_machines_in_virtualbox.overview-virtual-machines')
    @include('config.devops_and_security.creating_virtual_machines_in_virtualbox.close')
</div>
