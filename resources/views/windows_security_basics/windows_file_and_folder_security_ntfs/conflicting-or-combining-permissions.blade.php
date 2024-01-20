<div>
    <h2>2.4 Conflicting or Combining Permissions</h2>

    <p>
        Once you add users and groups and give them permissions, there will be situations in which there will be
        conflicting permissions. Here are a few possible situations:
    </p>

    <ul>
        <li>There could be a situation where a user is a member of several groups and each group has different
            permissions
        </li>
        <li>There could also be a situation where a user gets one or more “deny” permissions, while being granted
            permissions as a member of another group
        </li>
        <li>And there could even be situations where inherited permissions conflict with object-specific (or
            non-inherited permissions)
        </li>
    </ul>

    <h3>2.4.1 Combining Allow Permissions</h3>
    <p>Let’s start with a practical example.</p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/conflicting_or_combining_permissions_1.png"
        alt="" title="">

    <p>In this example, user admin is a member of the groups:</p>
    <ul>
        <li>Administrators</li>
        <li>Authenticated users</li>
    </ul>

    <p>
        Remember what we said in the chapter about groups. We manually added user “admin” to the group of
        “administrators”. We couldn't add him or her to the group “authenticated users” because that is an implicit
        group.
    </p>

    <p>
        User membership for user “admin” looks like this in “local users and computers”. In exercises or questions we
        assume that you are aware of the fact that a user is automatically part of other groups when we show you the
        group membership interface from “local users and computers”.
    </p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/conflicting_or_combining_permissions_2.png"
        alt=""
        title="">

    <p>This means that user “admin” is eligible for these permissions:</p>
    <ul>
        <li>As a user he or she gets: read & execute</li>
        <li>As a member of the group “administrators” he or she gets full control</li>
        <li>As a member of the group “authenticated users” he or she gets modify.</li>
    </ul>

    <p>What will happen in such a situation and what will be your effective permissions?</p>

    <p>
        In the case where you are granted several “allow” permissions, you get to keep all the permissions that you get.
        In this case, the list builds up so that your “effective permissions” will be “full control”.
    </p>

    <p>You can easily check this on the “effective access” tab:</p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/conflicting_or_combining_permissions_3.png"
        alt="" title="">

    <p>
        The “effective access” tab helps you simulate what the final set of permissions of a user will be, without
        having to log on with that user account. In reality, we can log on with the account of other users and ask them
        their password so that we can check if we configured the permissions correctly.
    </p>

    <h3>2.4.2 Combining Allow and Deny Permissions</h3>
    <p>
        If we are confronted with a situation where you get a combination of “allow” and “deny” permissions, then things
        will be different.
    </p>

    <p>Let’s look at this example:</p>
    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/conflicting_or_combining_permissions_4.png"
        alt="" title="">

    <p>Once again, we are testing this with user “admin”. User “admin” is a member of the group “administrators”.</p>

    <p>This means that user ‘admin’ is eligible for these permissions:</p>
    <ul>
        <li>User admin: deny read & execute</li>
        <li>Administrators group: full control</li>
        <li>Authenticated users group: modify</li>
    </ul>

    <p>What will the end result be in this situation?</p>

    <p>
        In this case, you get the combination of all the allow permissions. This would leave user “admin” with the full
        set of “full control” permissions. However, there is still a “deny” permission and “deny” permissions can’t be
        compensated through other forms of allow permissions. So, in the end, “read & execute” is taken away from your
        set of “full control” permissions. That still leaves user “admin” with the right to change the file name, change
        the content of the file by overwriting is with a drag and drop operation, by changing file properties (but not
        permissions), etc.
    </p>

    <h3>2.4.3 Combining “Inherited” and “Object-Specific” Permissions</h3>
    <p>
        The last situation is more complicated and will probably arise when people make the wrong choices when using
        “deny” or “inheritance”.
    </p>

    <p>In this case, we are looking at the permissions of c:\scripts\powershell\script2.txt</p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/conflicting_or_combining_permissions_5.png"
        alt="" title="">

    <p>Take a closer look at the places from which we get permissions:</p>
    <ul>
        <li>Line 1: user “admin” inherits a “deny” permission that was set on the folder c:\scripts\powershell. This is
            an inherited permission that prohibits us to edit, save, and modify the file.
        </li>
        <li>Line 2 is also an inherited permission and it allows us to read something.</li>
        <li>The rest of the permissions linked to groups are also inherited.</li>
    </ul>

    <p>
        So we have a combination of all sorts of inherited permissions. If we bundle all of them together, then the
        “deny” permissions cast the final verdict.
    </p>

    <p>User “admin” can do “everything” except “write” as the “effective access” tab demonstrates.</p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/conflicting_or_combining_permissions_6.png"
        alt="" title="">

    <p>
        You can recreate this situation yourself to take a closer look at the permissions. However, things will change
        if we now decide to change permissions on the file object itself. This is the change that we will make:
    </p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/conflicting_or_combining_permissions_7.png"
        alt="" title="">

    <p>Pay attention to the color of the checkboxes for user “admin”.</p>
    <ul>
        <li>There is one “write -allow” permission that is in black: this is an object-specific permission.</li>
        <li>There is one “write -deny” permission that is greyed out: this is an inherited permission.</li>
    </ul>

    <p>So which of the two will take precedence and win?</p>

    <p>
        In situations where there is a conflict between an object-specific permission and an inherited permission, then
        the object-specific permission will take precedence over the inherited permission. Whether the permission is
        'allow' or 'deny' does not matter. So, the previous rule, where we saw that deny permissions take precedence over
        allow permission, no longer applies in these situations.
    </p>

    <p>Let’s look at the “effective permissions” tab to check it:</p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/conflicting_or_combining_permissions_8.png"
        alt="" title="">

    <p>
        From the screenshot of “effective permissions” you can see that user admin keeps the “write” permissions, even
        though there was an inherited “deny” permission.
    </p>
</div>
