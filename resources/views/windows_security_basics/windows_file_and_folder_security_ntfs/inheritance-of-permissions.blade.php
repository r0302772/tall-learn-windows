<div>
    <h2>2.1 Inheritance of Permissions</h2>

    <p>
        Let’s take a look at the permissions that are set on the root of the C – drive and on a sub folder in the C
        drive. In the root of the C: drive, we made the folder “scripts”.
    </p>

    <p>
        If we right-click on the “scripts” folder and choose “properties”, we will find the “security” tab. This is
        where the NTFS permissions are located. The list of permissions is called an “Access Control List” or ACL.
    </p>

    <p>There are a few things that you will notice:</p>
    <ul>
        <li>The presence of the group “Authenticated users,” an implicitly built-in group for Windows Systems.</li>
        <li>The greyed out check boxes indicating inherited permissions from a parent folder.</li>
    </ul>

    <p>
        Another thing to notice is about the permissions. You see read, modify, … permissions linked to greyed out check
        boxes. You cannot change or uncheck these check boxes. This indicates that the permissions are inherited from a
        parent folder.
    </p>

    <p>
        Disabling UAC (User Account Control) will make the permissions more visible, and you can now change them. This
        makes it easier to explain NTFS permissions.
    </p>

    <p>
        If you use the “advanced” button, then you get a better view of the permissions. We call this “advanced view”.
    </p>

    <p>Let’s run through the information in the interface:</p>
    <ul>
        <li>You will find “allow” or “deny” permissions</li>
        <li>You will find which user or group is granted or denied permissions.</li>
        <li>You will see the level of permissions (e.g. read & execute, modify, full control, special access, …)</li>
        <li>You will see from which parent the permissions are inherited. (in this case, we see that c:\scripts inherits
            permissions from c:\)
        </li>
        <li>In the last column you can see to which objects the permissions are passed on. You can decide whether
            folders, files, subfolders get to inherit the permissions from the parent.
        </li>
        <li>You will also find a “disable” inheritance button.</li>
    </ul>

    <p>
        If you use the “disable inheritance” button on c:\scripts, you get options to either “convert” or “remove”
        inheritance. The “convert” option keeps the list of permissions but makes c:\scripts a new parent. The “remove”
        option clears the list of permissions, making c:\scripts a new parent as well.
    </p>

    <p>
        In the exercises, we will look at different strategies to manipulate inheritance and the best ways to achieve
        desired results.
    </p>

    <p>
        Don’t forget that even files inherit permissions, not only folders. For example, if we create a script in
        c:\scripts\powershell\script1.ps1, then script1.ps1 will inherit permissions from the parent folder
        “c:\scripts”.
    </p>
</div>
