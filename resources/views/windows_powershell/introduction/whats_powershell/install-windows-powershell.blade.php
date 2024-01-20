<div>
    <h3>1.1.c. Install Windows PowerShell:</h3>

    <p>Windows PowerShell is available from Windows by default.</p>

    <p>
        <b>In this course, we base ourselves on PowerShell 5.0 and Windows 10 (current branch). PowerShell 7.0 is not
            yet
            installed, and only the novelties of PowerShell 7.0 will be discussed at the end. For the basics, we will
            not
            need the latest version of PowerShell. By the way, there is little difference between the operation of
            PowerShell 5.0 and PowerShell 7.0. A number of cmdlets have been added, but the basic idea and the operation
            have remained the same. Innovations are mainly to be found in the fact that it is cross-platform and open
            source. At the end of the course, we can do the update to PowerShell 7.0, but at the moment in the course,
            this
            would only slow us down unnecessarily.
        </b>
    </p>

    <p>All course material is written for Windows 10 64 bit (current branch). Through "system information," you can find
        out the version number of your Windows 10 virtual machine:</p>

    <img src="/assets/img/windows_powershell/introduction/install_windows_powershell_1.png" alt="" title="">
    <img src="/assets/img/windows_powershell/introduction/install_windows_powershell_2.png" alt="" title="">

    <code>Get-ComputerInfo | Select-Object WindowsVersion</code>

    <p>You can find out the version of PowerShell through this command:</p>
    <img src="/assets/img/windows_powershell/introduction/install_windows_powershell_3.png" alt="" title="">

    <code>$PSVersionTable.PSVersion</code>

    <p>Or you can use this pipeline command in PowerShell:</p>
    <img src="/assets/img/windows_powershell/introduction/install_windows_powershell_4.png" alt="" title="">

    <code>Get-Host | Select-Object Version</code>

</div>
