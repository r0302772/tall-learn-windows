<x-learn-windows-layout>
    <x-slot name="description">How to make a shared folder between host & VM</x-slot>
    <x-slot name="title">How to make a shared folder between host & VM</x-slot>

    <p>
        Virtual machines are isolated containers, so the guest operating system in the virtual machine doesn't have
        access to your computer's file system. You'll have to set up shared folders in a program like VirtualBox or
        VMware to share files.
    </p>

    <p>
        By default, virtual machines do not have access to files on the host computer or on other virtual machines. If
        you want to provide that access, you must set up shared folders in your virtual machine app. To help the guest
        operating system inside the virtual machine understand what's going on, virtual machine apps present these
        shared folders as network file shares. The guest operating system accesses a folder on your PC just like it
        would a shared folder on a network.
    </p>

    <p>
        We're going to look at how to create shared folders in two of the most popular virtual machine apps---VirtualBox
        and VMware Workstation Player---but the process is similar in other virtual machine apps.
    </p>

    <h2>VirtualBox</h2>

    <p>
        VirtualBox's Shared Folders feature works with both Windows and Linux guest operating systems. To use the
        feature, you first need to install VirtualBox's Guest Additions in the guest virtual machine.
    </p>

    <p>
        With the virtual machine running, click the "Devices" menu and choose the "Insert Guest Additions CD image"
        option. This inserts a virtual CD that you can use within the guest operating system to install the Guest
        Additions.
    </p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_1.png"
        alt="" title="">

    <p>After the Guest Additions are installed, open the "Machine" menu and click the "Settings" option.</p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_2.png"
        alt="" title="">

    <p>
        In the "Settings" window, switch to the "Shared Folders" tab. Here you can see any shared folders you've set up.
        There are two types of shared folders. Machine Folders are permanent folders that are shared until you remove
        them. Transient Folders are temporary and are automatically removed when you restart or shut down the virtual
        machine.
    </p>

    <p>Click the "Add" button (the folder with a plus on it) to create a new shared folder.</p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_3.png"
        alt="" title="">

    <p>In the "Add Share" window, you can specify the following:</p>

    <ul>
        <li><strong>Folder Path</strong>: This is the location of the shared folder on your host operating system (your
            real PC).
        </li>
        <li><strong>Folder Name</strong>: This is how the shared folder will appear inside the guest operating system.
        </li>
        <li><strong>Read-only</strong>: By default, the virtual machine has full read-write access to the shared folder.
            Enable the "Read-only" checkbox if you want the virtual machine only to be able to read files from the
            shared folder, but not modify them.
        </li>
        <li><strong>Auto-mount</strong>: This option makes the guest operating system attempt to automatically mount the
            folder when it boots.
        </li>
        <li><strong>Make Permanent</strong>: This option makes the shared folder a Machine Folder. If you don't select
            this option, it becomes a transient folder that is removed with the virtual machine restarts.
        </li>
    </ul>

    <p>Make all your choices and then hit the "OK" button.</p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_4.png"
        alt="" title="">

    <p>
        You should now see the shared folders appear as network file shares. If you're using a Windows guest operating
        system, open File Explorer, select "Network", and then look under the "VBOXSRV" computer.
    </p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_5.png"
        alt="" title="">

    <h2>VMware Workstation Player</h2>

    <p>
        VMware's Shared Folders work with both Windows and Linux guest operating systems. To use the feature, you first
        need to install VMware Tools in the guest virtual machine. Open the "Player" menu, point to the "Manage" menu,
        and then select the "Install VMware Tools" option. This opens a dialog prompting you to download the tools and,
        when finished, inserts a virtual CD that you can use within the guest operating system to install the VMWare
        tools.
    </p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_6.png"
        alt="" title="">

    <p>
        After the VMware tools are installed, open the "Player" menu, point to the "Manage" menu, and then select the
        "Virtual Machine Settings" option.
    </p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_7.png"
        alt="" title="">

    <p>
        In the "Virtual Machine Settings" window, switch to the "Options" tab and select the "Shared Folders" setting on
        the left-hand side. Shared folders are disabled by default, and you can enable them in one of two ways. Select
        "Always enabled" if you want the Shared Folders feature to stay on even when you restart the virtual machine.
        Select the "Enabled until next power off or suspend" if you prefer to manually re-enable the feature after
        restarts.
    </p>

    <p>
        Optionally, you can select the "Map as a network drive in Windows guests" option if you want the share mapped to
        a drive letter in your guest operating system instead of having to dig through shared folders on the network.
    </p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_8.png"
        alt="" title="">

    <p>After enabling the feature, click the "Add" button to add a new shared folder.</p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_9.png"
        alt="" title="">

    <p>
        In the "Add Shared Folder Wizard" window, click "Next" to skip the welcome screen. On the "Name the Shared
        Folder" screen, use the "Host path" box to indicate the location of the shared folder on your host operating
        system (your real PC). Use the "Name" box to type the name of the folder as it should appear inside the virtual
        machine. When you're done, click the "Next" button.
    </p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_10.png"
        alt="" title="">

    <p>
        On the "Specify Shared Folder Attributes" screen, select the "Enable this share" option. If you don't, the share
        is still added to your list of shares and you can enable it later on an as-needed basis. By default, the virtual
        machine will have full read-write access to the folder. Select the "Read-only" option if you want the virtual
        machine only to be able to read files from the shared folder, but not modify them. When you're done, click the
        "Finish" button.
    </p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_11.png"
        alt="" title="">

    <p>
        You should now see the shared folders appear as network file shares. If you're using a Windows guest operating
        system, open File Explorer, select "Network", and then look under the "vmware-host" computer.
    </p>

    <img
        src="/assets/img/config/how_to_make_a_shared_folder_between_host_and_vm/how_to_make_a_shared_folder_between_host_and_vm_12.png"
        alt="" title="">

    <p>
        On a Linux guest system, you should find VMware Shared Folders under <code>/mnt/hgfs</code> in the root
        directory. If you're unsure how to find that, check out our
        <a href="https://www.howtogeek.com/117435/htg-explains-the-linux-directory-structure-explained/">guide to
            understanding the Linux directory structure</a>.
    </p>

    <p>
        If you have multiple virtual machines, you'll need to set up file sharing separately inside each one, although
        you can use the same shared folders within multiple virtual machines. Be careful when using shared folders,
        though. One of the great things about virtual machines is that they operate in their own sandbox---isolated from
        your real computer. If your virtual machine becomes compromised, the malware could potentially escape your
        virtual machine by infecting files in your shared folders.
    </p>

    Source: <a href="https://www.howtogeek.com/189974/how-to-share-your-computers-files-with-a-virtual-machine/">https://www.howtogeek.com/189974/how-to-share-your-computers-files-with-a-virtual-machine/</a>

</x-learn-windows-layout>
