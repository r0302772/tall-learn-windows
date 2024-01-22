<div>
    <h2>4 Windows As A Service</h2>

    <p>
        Microsoft bundles updates and updates are made available at fixed times. This is called "patch Tuesday".
        Companies adjust their update strategy to this timing. That way they can extensively test new updates before
        they go into production. If there are very serious security problems, there may be an interim security update.
    </p>

    <p>
        You can compare this with the process that a software developer goes through. That's why we now speak more and
        more of "Windows As A Service".
    </p>

    <img src="/assets/img/config/devops_and_security/windows_as_a_service/windows_as_a_service_1.png" alt="" title="">

    <h5>Task: choose the right Windows Update settings for your VM and answer these questions:</h5>
    <ul>
        <li>What is the difference between a feature and a quality update?</li>
        <li>What is a Semi-annual channel (targeted) update?</li>
        <li>Why is the Semi-annual channel option not available in every version of Windows?</li>
    </ul>

    <p>
        In our test environment, we don't need any updates. If we would run 2 virtual machines, it would also be very
        taxing on our hard disk. The bottleneck for the performance of our virtual machines is the size of our VDI
        files. Especially in a Datacenter environment with a lot of virtual machines, this is certainly undesirable.
    </p>

    <p>
        To avoid burdening the performance of your test environment with updates, we are going to turn off updates to
        the virtual machines. As you could have seen in the documentation, there is no setting to turn Windows Updates
        on or off. Therefore, as an interim solution for a test environment, we have to stop the Windows Update service.
        /p>

    <h3>4.1 Using PowerShell</h3>

    <p>Windows 10 and Windows Server 2019 settings no longer allow us to turn off updates. Previous versions did allow
        that.</p>

    <h3>4.2 Stop Windows Update Service</h3>

    <p>Log in to your first virtual machine (DC).</p>

    <p>Open PowerShell.</p>

    <p>Run the command you see in the screenshot:</p>

    <img src="/assets/img/config/devops_and_security/windows_as_a_service/windows_as_a_service_2.png" alt="" title="">

    <p>
        The last service in the list (wuauserv) we will stop and disable. This way we can block the updates. You can do
        this with the PowerShell commands from the screenshot below:
    </p>

    <img src="/assets/img/config/devops_and_security/windows_as_a_service/windows_as_a_service_3.png" alt="" title="">

    <p>
        You have now stopped the service, but on the next reboot it will be started again. Therefore, we need to change
        the "start up type" of the service as shown in this example:
    </p>

    <img src="/assets/img/config/devops_and_security/windows_as_a_service/windows_as_a_service_4.png" alt="" title="">

    <p>As long as you do not give your virtual machines in VirtualBox internet access, updates are not a problem.</p>
</div>
