<div>
    <h3>7.8 Shares in a domain environment</h3>

    <p>
        In the previous chapter, we made the comparison between a workgroup and a domain. When both VMs were in a
        workgroup, we couldn't open shared folders without also having a user account from another user account
        database.
    </p>

    <p>We have now solved this problem thanks to the domain configuration.</p>

    <p>How can you test this?</p>

    <ul>
        <li>Login as administrator to the domain controller.</li>
        <li>Open "Active Directory Users & Computers".</li>
        <li>Open the container "users".</li>
        <li>Create a new user with your first name. Use "abc123!" as the password.</li>
        <li>In the root of your C: drive, create the folder c:MyCompany.</li>
        <li>Share this folder and modify the NTFS permissions so that the user you just created for yourself has editing
            rights via NTFS.
        </li>
        <li>Switch to your Windows 10 device. Log in as the user you just created. (Note: just now we said there were
            two ways to log in).
        </li>
        <li>Connect from the Windows 10 VM to the server and open the shared folder. Test if you can edit the content of
            the shared folder. (If you can't, check the share permissions and NTFS permissions settings. Remember what
            we have seen about these permissions and the difference between share and NTFS permissions).
        </li>
    </ul>
</div>
