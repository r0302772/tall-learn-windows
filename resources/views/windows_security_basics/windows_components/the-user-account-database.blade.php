<div>
    <h2>1.2 The User Account Database</h2>

    <p>
        Every security model must address the question of what to do with user accounts and where to store them. In a
        Windows client and server environment, two closely linked models are used:
    </p>

    <ul>
        <li><strong>Workgroup Model</strong></li>
        <li><strong>Domain Model</strong></li>
    </ul>

    <p>
        Both models work around the idea that a user has a single and unique number called an SID (Security Identifier
        Descriptor) and a database in which the user settings are stored.
    </p>

    @include('windows_security_basics.windows_components.the_user_account_database.workgroup-model')
    @include('windows_security_basics.windows_components.the_user_account_database.domain-model')
    @include('windows_security_basics.windows_components.the_user_account_database.windows-versions')
</div>
