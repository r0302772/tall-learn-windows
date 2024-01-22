<div>
    <h3>7.1 Prior</h3>
    <p>
        Active Directory is based on the DNS standard. Without DNS, there is no AD possible. For that reason, we will
        dedicate a chapter to DNS later in this course. Whatever profile you have (APP/BI/CCS/IOT)... Sooner or later,
        you will be confronted with DNS and name resolution. This is the process of converting a computer name to an IP
        address. Without DNS, we would all have to connect to websites, shares, printers by typing in their IP address
        and knowing it by heart.
    </p>

    <p>
        Because DNS is so crucial, it also means that things can go wrong when DNS doesn't work or isn't configured
        correctly. CCS students may expect to do a lot of DNS troubleshooting in their careers. APP students will also
        do
        name resolution troubleshooting or have to take the rules of name resolution into account when working on CI/CD
        solutions.
    </p>

    <p>What do we build in this chapter?</p>

    <p>Right now on your laptop in VirtualBox, you have 2 virtual machines that are on the same network.</p>
    <ul>
        <li>One server with interface: if a server is not yet a domain controller, we call it a member server.</li>
        <li>One client PC: Windows 10: this device is still a member of a workgroup.</li>
    </ul>

    <p>
        On the server with the interface (DC), we will install DNS and AD. Once the installation is done, we will add
        the Windows 10 device to the domain.
    </p>

    <p>
        Therefore, we first need to look at the IP settings of the devices. If the devices cannot connect to each other
        via IP, the membership of AD will not work either. In this chapter, we will only need to adjust the IP settings
        of the DC and Win10.
    </p>

    <table>
        <thead>
        <tr>
            <th>Device</th>
            <th>DC</th>
            <th>Windows 10</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>IP</td>
            <td>192.168.1.1</td>
            <td>192.168.1.2</td>
        </tr>
        <tr>
            <td>Subnet Mask</td>
            <td>255.255.255.0</td>
            <td>255.255.255.0</td>
        </tr>
        <tr>
            <td>Default Gateway</td>
            <td>No default gateway</td>
            <td>No default gateway</td>
        </tr>
        <tr>
            <td>Preferred DNS</td>
            <td>Not yet set</td>
            <td>Not yet set</td>
        </tr>
        </tbody>
    </table>

    <p>
        The installation of AD and DNS is done via a wizard. <strong>There is, however, one setting which the wizard
            itself
            does
            not change. If you do not enter this setting correctly before starting the installation of AD, then your
            installation will fail!</strong>
    </p>

    <p><strong>What is this magical setting?</strong></p>
    <p>
        On the future domain controller set in the TCP/IP settings "<strong>preferred DNS</strong>" to 127.0.0.1. This
        means that the domain controller will do queries and registrations of computer names on the DNS server which is
        installed on the domain controller by the wizard.
    </p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/installing_active_directory.png" alt="" title="">

    <p>
        If you leave the DNS setting that the server gets from the DHCP server, the DC will try to register with a DNS
        server of the Thomas More network where your DC has no rights at all. Your installation will fail, and Windows
        10
        will not be able to join the domain.
    </p>

    <p>
        <strong>Assignment:</strong> Change the preferred DNS setting on the server to "127.0.0.1".
        You can do this through the GUI, or you can use the cmdlet: "set-dnsClientServerAddress".
    </p>

    <p><strong>Assignment:</strong> Change the preferred DNS setting on the Windows 10 to "192.168.1.1".</p>
</div>
