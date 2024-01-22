<div>
    <h4>3.4.5 Network Settings</h4>
    <p>
        Both VMs now have the network setting "NAT" in Virtual Box. The advantage is that both devices get a DHCP
        address from Virtual Box, and they also have access to the Internet. The disadvantage of the "NAT" setting is
        that both VMs have the same IP address and cannot connect to each other. It's of no interest to our test bed.
        What do we need for our test stand?
    </p>

    <ul>
        <li>We want to simulate the Windows 10 device and the Windows Server in the same network. Both devices need to
            be able to connect to each other. Preferably, this is done via a fixed IP address.
        </li>
        <li>Both VMs should be able to connect to each other but don't need an internet connection for this test setup.
            Only for the chapter about DNS we will need an internet connection again.
        </li>
    </ul>

    <h5>Adjust network settings of both VMs</h5>
    <p>
        In this step, we are going to adjust the network settings of both VMs in Virtual Box. Open Virtual Box and take
        the network settings from DC1. Change the network settings from "NAT" to internal. The name of the network you
        are connected to is "intnet".
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/network_settings/network_settings_1.png" alt="" title="">

    <p>Do the same with the network settings of your Windows 10 device.</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/network_settings/network_settings_2.png" alt="" title="">

    <p>
        Both machines are now in the same network, but the default setting of your network cards in Windows is such that
        the machines need a DHCP server to get an IP address. Since this server does not exist, we will have to manually
        assign an IP address to both machines.
    </p>

    <h5>Adjust IP settings of both VMs</h5>

    <p>
        Log on to DC1. We will refresh you on how to change an IP address via PowerShell. First, we need to know the
        name of the network card. We will use this name to specify which changes we want to make to which network card.
    </p>

    <p>Via the cmdlet "Get-NetAdapter" you can retrieve the names and properties of all network cards.</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/network_settings/network_settings_3.png" alt="" title="">

    <p>
        Via the cmdlet "New-NetIPAddress" we can give the IP settings to a card. The network card of DC1 gets as IP
        address "192.168.1.1" and as subnet mask "255.255.255.0". We do not yet need a default gateway and DNS setting.
        These settings can be found in the chapter about installing Active Directory.
    </p>

    <p>This is an example of the adjustment of the IP settings on DC1:</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/network_settings/network_settings_4.png" alt="" title="">

    <p>If you check the settings via PowerShell or via the GUI, they look like this:</p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/network_settings/network_settings_5.png" alt="" title="">

    <p>Follow the same procedure and give VM "Win10" the IP address "192.168.1.2" and subnet mask "255.255.255.0".</p>

    <p>
        Note: to change an IP address you need to open PowerShell as administrator. (Think of the UAC settings). You
        cannot change an IP address as a normal user. If you change the IP address as a normal user, you get this error
        message:
    </p>

    <img src="/assets/img/config/devops_and_security/creating_virtual_machines_in_virtualbox/network_settings/network_settings_6.png" alt="" title="">

    <p>
        You now have 2 virtual machines in the same network. This network is shielded from the outside world and does
        not allow you to access the internet. In this case this is an advantage because you are freed from unwanted
        Windows updates. For a test environment it can't hurt that we don't receive updates and don't have access to the
        internet. (Downloading and installing updates is a big burden on the hard disk of a laptop and gives you the
        feeling that your virtual machine is suddenly slow. Adding more memory will not help, as the bottleneck is the
        hard disk).
    </p>

    <p>
        Don't forget that the firewall is enabled on both devices. The default firewall settings of your VMs allow you
        to connect to other devices and get information back. Conversely, connections starting at other devices are not
        allowed. In practice this means that both VMs cannot send a ping to each other.
    </p>

    <p>
        Use PowerShell to disable the firewall on both devices, just like you have seen in the Windows Administration
        course.
    </p>

    <p>
        Check that you can ping from one VM to another. If not, ask your teacher for advice before continuing with the
        next chapters.
    </p>
</div>
