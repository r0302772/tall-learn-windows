<x-learn-windows-layout>
    <x-slot name="description">Windows Server & AD/LDAP</x-slot>
    <x-slot name="title">Windows Server & AD/LDAP 📝</x-slot>

    <h2>1 Active Directory & Domains</h2>

    <p>
        In case a network contains a Windows Server running Active Directory, this server can provide the functionality
        and structure to take network resources and organise, give rights to and make policies for them.
    </p>

    <h3>Workgroup</h3>
    <img src="/assets/img/windows_server/windows_server_and_ad_ldap/rundown_active_directory_and_domains/workgroup.png" alt="" title="">
    <ul>
        <li>All computers and machines are <a href="https://nl.wikipedia.org/wiki/Peer-to-peer">peers</a>. No machine has hierarchical power over another.</li>
        <li>Each computer has its own database with user accounts. To use a computer of the workgroup you need an
            account on that specific computer itself.
        </li>
        <li>Usually there are not more than 10 to 20 computers in a Workgroup.</li>
        <li>All computers of the workgroup need to be in the same local network or subnet.</li>
    </ul>

    <h3>Domain</h3>
    <img src="/assets/img/windows_server/windows_server_and_ad_ldap/rundown_active_directory_and_domains/domain_1.png" alt="" title="">
    <ul>
        <li>Some machines are servers which are running Active Directory. These servers are used to manage and
            administer other machines.
        </li>
        <li>Active Directory contains a central database with user accounts. This opens up the possibility of logging in
            on different machines of the domain using the same account.
        </li>
        <li>A domain can contain many thousands of machines.</li>
        <li>Computers are allowed to be on different subnets or local networks.</li>
    </ul>

    <h3>Domain - in technical terms</h3>
    <ul>
        <li>A domain is represented as a triangle.</li>
        <li>Each domain has a domain name, for example local.thomasmore.be or cursusdom.tm. This name is set whenever a
            Windows Server is promoted to be the first Domain Controller of the domain.
        </li>
        <li>We can add computers and machines to the domain. When added, the domain name gets placed behind the current
            name of the computer. PC01 -> Added to domain -> PC01.cursusdom.tm
        </li>
        <li>To add a computer to the domain, you need to set the <a
                href="https://www.windowscentral.com/how-change-your-pcs-dns-settings-windows-10">preferred DNS
                setting</a> of the computer to the IP of the domain controller.
        </li>
        <li>User accounts are added on the Domain Controller machine</li>
    </ul>

    <img src="/assets/img/windows_server/windows_server_and_ad_ldap/rundown_active_directory_and_domains/domain_2.png" alt="" title="">

    <img src="/assets/img/windows_server/windows_server_and_ad_ldap/rundown_active_directory_and_domains/active_directory_and_domains.png" alt="" title="">

</x-learn-windows-layout>
