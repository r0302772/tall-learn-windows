<div>
    <h2>2 Installing Virtual Box</h2>
    <p>
        In this chapter you will install Virtual Box on your laptop. In Virtual Box you create 2 virtual machines. This
        is the practical environment in which you will work on your exercises and assignments.
    </p>

    <h3>2.1 Download and installation</h3>
    <p>
        You can download VirtualBox at <a href="https://wwww.virtualbox.org">www.virtualbox.org</a>. You click on the
        logo in the middle of the screen. At the time of writing this course this was version 6.1. You can also use a
        later version. Keep in mind that VirtualBox is often updated.
    </p>

    <img src="/assets/img/config/devops_and_security/installing_virtualbox/installing_virtualbox_1.png" alt="" title="">

    <p>
        Then you need to click on the much smaller link for "Windows Hosts", unless you have an OS X or Linux host. In
        that case, you need to click on the corresponding link.
    </p>
    <ul>
        <li>Double-click on the file you just downloaded.</li>
        <li>Click "Next" at the introduction page.</li>
        <li>You may leave all items checked. Next.</li>
        <li>It's your choice whether you want links on your desktop and in your quick start bar. Links in the start menu
            and file associations are very useful though.
        </li>
        <img src="/assets/img/config/devops_and_security/installing_virtualbox/installing_virtualbox_2.png" alt="" title="">
        <li>A warning about network interruptions will appear. Click "Yes" and on the next screen "Install".</li>
        <li>During the installation there will be a message about a network driver. You may also install this.</li>
        <li>The installation is finished. Click "Finish".</li>
    </ul>

    <h3>2.2 Control 64 bit support in virtual box</h3>
    <p>
        In this step you will check if you can create 64 bit virtual machines. Windows Server 2019 exists only in 64 bit
        edition. For that reason, we also need to create virtual machines with 64 bit support.
    </p>

    <p>What could be reasons that you can't create 64 bit virtual machines?</p>
    <ul>
        <li>In your BIOS, virtualisation is not yet enabled for your processor.</li>
        <li>In your host system, a second hypervisor is running, like e.g. Hyper V</li>
    </ul>

    <p>How can you check if you have the necessary support.</p>
    <ul>
        <li>Start VirtualBox</li>
        <li>Click on the "new" button to start the wizard. If you only see 32 bit versions in the "versions" list, then
            you do not have the necessary support enabled on your laptop. If you see both 32 bit and 64 bit versions in
            the list then you have the necessary support on your laptop.
        </li>
    </ul>

    <img src="/assets/img/config/devops_and_security/installing_virtualbox/installing_virtualbox_3.png" alt="" title="">

    <p>How can you fix this?</p>
    <ul>
        <li>Check whether the cause is in the BIOS.</li>
        <p>In PowerShell, enter the command to see if the cause is in the BIOS:</p>
        <img src="/assets/img/config/devops_and_security/installing_virtualbox/installing_virtualbox_4.png" alt="" title="">
        <code>If you get the value "true" back, then "hardware virtualization" is enabled in the BIOS. If you get the
            value "false" back, you will have to reboot your laptop and change the virtualization setting in your
            BIOS.</code>
        <li>How to adjust the BIOS if you are working with UEFI boot? Follow these steps to reboot and access the BIOS :
            <a href="https://www.laptopmag.com/articles/access-bios-windows-10">https://www.laptopmag.com/articles/access-bios-windows-10</a>
        </li>
        <li>Adjust the hardware virtualization setting if necessary.</li>
    </ul>

    <p>
        If you want to quickly find out if Hyper-V is also configured on your Windows host system, you can use this
        PowerShell command in a shell with administrator privileges. The intention is that Hyper-V is not installed.
    </p>

    <img src="/assets/img/config/devops_and_security/installing_virtualbox/installing_virtualbox_5.png" alt="" title="">
</div>
