<div>
    <h2>2.6 Ownership</h2>

    <p>
        In this section we will look at “file and folder ownership”. We will examine how ownership will affect the
        permissions that are granted.
    </p>

    <p>
        This is a tricky subject because of the terminology. People tend to mix these concepts together and get confused
        when they don’t make the distinction between:
    </p>

    <ul>
        <li>
            a. The <strong>ownership ntfs permission</strong> : this permission is part of the Full Control set of
            permissions and can be
            granted
            on a file by file, or folder by folder basis. Whoever has this permissions can change the ownership
            property of the
            file or folder. They take over the ownership and become an owner, but they can’t pass the ownership to other
            users.
        </li>
        <li>
            b. The <strong>ownership property</strong> : this is not something that you grant. It’s a property of a file
            or folder. The
            person
            who creates a file or folder will automatically become the owner. The owner of a file can always change the
            permissions for that file or folder. In a certain sense that owner automatically has the “change permission”
            permission, even when that person does not have the “full control” permission set.
        </li>
        <li>
            c. The <strong>“take ownership of files or folders” user RIGHT</strong>: this is not an NTFS permission. It
            is a user right
            that is
            granted to certain groups through a registry setting. This user allows you to change the ownership status of
            every
            object of your system, regardless of your permissions. Administrators have this permission by default.
            Therefore ,
            they can become the owner of files and folders, and they can grant ownership to other people.
        </li>
    </ul>

    <p>
        Since changing ownership will affect who can change the permissions on a file or folder, it is considered as an
        important change. For that reason we will track who does this through “auditing” , which we will cover in the
        next section.
    </p>

    <p>But first, let’s take a closer look at the 3 types of ownership terminology that we just listed.</p>


    <h3>2.6.1 The Ownership Property</h3>
    <p>User "developer" is a member of the group "users".</p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/ownership_1.png"
        alt="" title="">

    <p>
        This user creates the file c:\scripts\powershell\dev.ps1. These are the “advanced view” properties of the file:
    </p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/ownership_2.png"
        alt="" title="">

    <p>Let's take note of some properties:</p>
    <ul>
        <li>At the top left-hand corner, you can see who the owner is. In this case, the user "developer" made the file
            and is the owner.
        </li>
        <li>User "developer" is a member of the "users" and "authenticated users" group. Therefore, the user is granted
            "modify" permissions (remember that "modify" permissions include the generic read permissions).
        </li>
    </ul>

    <p>If we look at the "effective access," we get this result:</p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/ownership_3.png"
        alt="" title="">

    <p>Even though the user only has "modify" permission, you still see that the user has the "change permission"
        permission. Being the owner does not determine if you can change ownership; that is left up to the "take
        ownership ntfs permission" or the "take ownership user right." Therefore, whatever the permissions of user
        "developer" are, he or she will always be able to change the permissions due to the ownership property.</p>
    <p>One more small remark:</p>
    <ul>
        <li>If a user is not a member of the group "administrators," the user who makes a file will become the owner.
        </li>
        <li>If a user is a member of the group "administrators," a member of the group administrators who makes a file
            will not be the individual owner. It is the group of "administrators" who will be the owner.
        </li>
    </ul>

    <h3>2.6.2 The Ownership NTFS Permission</h3>
    <p>If we grant user "developer" the "full control" set of generic permissions, then the user also gets the "take
        ownership ntfs permission." In that case, user "developer" can grant the ownership property to someone else, but
        once it is granted, it cannot be undone.</p>

    <h3>2.6.3 The "Take Ownership of Files and Folders" Permission</h3>
    <p>Imagine a situation where user "developer" has left the company. User "developer" has changed the permissions so
        that administrators have no access to file "dev.ps1." In this situation, the file would be lost, and for that
        reason, the "take ownership of files and folder" user right was created. The administrator can use the "take
        ownership" user right to become the owner of the file. Once he is the owner of the file, he can change the set
        of permissions. Once the permissions have been adapted, the administrator can use the same user right to grant
        ownership to the user who will replace user "developer."</p>

    <p>Where can you find the "take ownership" user right?</p>
    <ol>
        <li>If you open the management console, you can add the "group policy" object for the "local computer."</li>
        <img
            src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/ownership_4.png"
            alt="" title="">
        <li>The "local computer policy" shows us settings from the registry. "Computer configuration" settings are
            located in HKEY_Local_Machine. "User configuration" settings are located in HKEY_Users.
        </li>
        <img
            src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/ownership_5.png"
            alt="" title="">
        <li>If you open up: "computer configuration > windows settings > security settings > local policies > user
            rights assignment," you will find the "take ownership of files and other objects" user right.
        </li>
        <img
            src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/ownership_6.png"
            alt="" title="">
        <li>As you can see, this right is by default granted to the group of administrators.</li>
    </ol>
</div>
