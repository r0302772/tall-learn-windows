<div>
    <h2>2 Software Preparations</h2>

    <h3>2.1 Virtual Box</h3>

    <h4>2.1.1 If You Don’t Have Virtual Box</h4>

    <p>
        Download the latest version of Virtual Box by visiting the <a href="https://www.virtualbox.org/wiki/Downloads">Virtual
            Box download page</a>.
    </p>

    <p>After downloading, install the software using the default settings suggested by the installation wizard.</p>

    <h4>2.1.2 If You Are Running Virtual Box</h4>

    <p>Start Virtual Box on your computer.</p>

    <ol>
        <li>Choose "File" and "Check for Updates".</li>
        <li>You'll either get a popup with a download link to the updated version or an indication that you are running
            the latest version.
        </li>
    </ol>

    <img src="/assets/img/config/installing_windows_10_on_virtual_box/software_preparations_virtual_box.png" alt="" title="">

    <p>If you do not have the latest version, download and install the update.</p>

    <h3>2.2 Download and Install Trial Version of Windows 10 Enterprise Edition</h3>

    <p>
        Use this link to download <a href="https://www.microsoft.com/en-us/evalcenter/evaluate-windows-10-enterprise">Windows
            10 Enterprise Edition (64-bit)</a>.
    </p>

    <ol>
        <li>Choose the "ISO – enterprise" version.</li>
    </ol>

    <img src="/assets/img/config/installing_windows_10_on_virtual_box/software_preparations_windows_10_1.png" alt="" title="">

    <ol>
        <li>Enter the registration details.</li>
    </ol>

    <img src="/assets/img/config/installing_windows_10_on_virtual_box/software_preparations_windows_10_2.png" alt="" title="">

    <ol>
        <li>Select the "64-bit" option and the language option "English".</li>
        <li>Click "Download" to start the download.</li>
    </ol>

    <h3>2.3 Virtualization Checkup in the BIOS</h3>

    <p>
        Before starting the installation, check your BIOS to see if your processor supports 64-bit virtualization. If
        virtualization is not enabled, you can only run 32-bit virtual machines.
    </p>

    <p>Follow these steps to check if virtualization is enabled:</p>

    <ol>
        <li>Open the command prompt on your computer.</li>
        <li>Run the command:</li>
    </ol>

    <pre><code>systeminfo.exe</code></pre>

    <img src="/assets/img/config/installing_windows_10_on_virtual_box/virtualization_checkup_in_the_bios_1.png" alt="" title="">

    <p>
        The last line of the output will check the virtualization or Hyper-V requirements. If the option "Virtualization
        enabled in firmware" is set to true, then you can support 64-bit virtual machines.
    </p>

    <img src="/assets/img/config/installing_windows_10_on_virtual_box/virtualization_checkup_in_the_bios_2.png" alt="" title="">

    <p>
        If it is not true, follow <a href="https://youtu.be/MOuTxfzCvMY">this procedure</a> to enter the BIOS and modify
        the virtualization setting.
    </p>

    <h3>2.4 Check Hyper-V Status</h3>

    <p>
        There are several virtualization products available. VirtualBox is open source and provided by Oracle. Windows
        10 has its own virtualization service called "Hyper-V." It is not recommended to run more than one hypervisor on
        the same computer as it may lead to software conflicts.
    </p>

    <p>Ensure that Hyper-V is not running on your computer by following these steps:</p>

    <ol>
        <li>Open PowerShell using the "run as administrator" option.</li>
    </ol>

    <img src="/assets/img/config/installing_windows_10_on_virtual_box/check_hyper_v_status_1.png" alt="" title="">

    <ol>
        <li>Run the command:</li>
    </ol>

    <pre><code>Get-WindowsOptionalFeature -FeatureName Microsoft-Hyper-V-All -Online</code></pre>

    <img src="/assets/img/config/installing_windows_10_on_virtual_box/check_hyper_v_status_2.png" alt="" title="">

    <p>
        If the state is "disabled," you don't need to do anything. If it is enabled, check why you are using Hyper-V and
        disable or remove Hyper-V. Ensure that no other applications you are running require Hyper-V; otherwise, they
        may no longer work.
    </p>
</div>
