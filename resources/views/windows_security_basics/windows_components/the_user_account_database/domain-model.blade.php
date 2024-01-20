<div>
    <h3>1.2.2 Domain Model</h3>

    <p>
        In a Domain model, at least one Windows server with Active Directory Service is needed. The Active Directory
        creates a centralized user account database and provides a "Single Sign-On" environment:
    </p>

    <ul>
        <li>Active Directory creates a domain name (e.g., "Thomasmore.be") during the creation of the database.</li>
        <li>Every computer in the domain is trusted by the Active Directory database.</li>
        <li>Administrators make user accounts in the AD database, allowing users to log on from any domain member
            computer.
        </li>
        <li>The local user account database no longer validates user credentials; instead, credentials are sent over the
            network to the Active Directory database.
        </li>
        <li>An authentication protocol handles the authentication process, and users can change their password from any
            domain computer.
        </li>
        <li>A Windows Server hosting an Active Directory database is known as the "domain controller."</li>
    </ul>
</div>
