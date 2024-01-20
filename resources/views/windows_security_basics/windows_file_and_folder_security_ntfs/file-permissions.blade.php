<div>
    <h2>2.3 File Permissions</h2>

    <h3>2.3.1 File Permissions versus Folder Permissions</h3>
    <p>
        File permissions are also built with the same building blocks to make combinations. These are the individual
        permissions that we can combine to make generic combinations:
    </p>

    <img src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/file_permissions_1.png" alt=""
         title="">

    <p>You will notice:</p>
    <ul>
        <li>Some permissions get a different name, depending on whether it is used on a folder or a file (e.g., In
            situations where you configure a folder, we can use traverse folder and list folder. In the case of a file,
            there is no directory content, and we can’t jump to sub folders. For that reason, the same permission is
            called “execute file” when used on a .exe file or “read data” when used on a Word or text document).
        </li>
    </ul>

    <p>If we look at the combinations in the “basic view,” you also get generic combinations like:</p>
    <ul>
        <li>Read</li>
        <li>Read & Execute</li>
        <li>Modify</li>
        <li>Write</li>
        <li>Full Control</li>
    </ul>

    <p>When you choose “modify” in this situation, you will notice that “write” will also be automatically checked.</p>

    <table>
        <thead>
        <tr>
            <th><em>Before selecting “modify”</em></th>
            <th><em>After checking “modify”</em></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><img
                    src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/file_permissions_2.png"
                    alt="" title=""></td>
            <td><img
                    src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/file_permissions_3.png"
                    alt="" title=""></td>
        </tr>
        </tbody>
    </table>

    <p>
        These automatic selections make sense in real life. When you edit a Word document, there is no distinction
        between “modify” and “write”. Both together work in such a way that you can edit and save the Word document,
        change the name, etc. The only thing we can’t do with this combination is changing the permissions. So, once
        again, on files, we will probably apply either no permissions (generic deny all), read or read & execute, modify
        and write (generic change) or full control.
    </p>

    <img src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/file_permissions_4.png" alt=""
         title="">

    <h3>2.3.2 Comparison and Overview of Permissions</h3>

    <ul>
        <li><strong>Full Control:</strong> Users can modify, add, move and delete files and directories, as well as
            their associated properties. In addition, users can change permissions settings for all files and
            subdirectories.
        </li>
        <li><strong>Modify:</strong> Users can view and modify files and file properties, including deleting and adding
            files to a directory or file properties to a file.
        </li>
        <li><strong>Read & Execute:</strong> Users can run executable files, including scripts.</li>
        <li><strong>Read:</strong> Users can view files, file properties and directories.</li>
        <li><strong>Write:</strong> Users can write to a file and add files to directories.</li>
    </ul>

    <p>Here is the list of advanced permissions:</p>

    <ul>
        <li><strong>Traverse Folder/Execute File:</strong> Users can navigate through folders to reach other files or
            folders, even if they have no permissions for these files or folders. Users can also run executable files.
            The Traverse Folder permission takes effect only when the group or user doesn't have the “Bypass Traverse
            Checking” right in the Group Policy snap-in.
        </li>
        <li><strong>List Folder/Read Data:</strong> Users can view a list of files and sub folders within the folder as
            well as the content of the files.
        </li>
        <li><strong>Read Attributes:</strong> Users can view the attributes of a file or folder, such as whether it is
            read-only or hidden.
        </li>
        <li><strong>Write Attributes:</strong> Users can change the attributes of a file or folder.</li>
        <li><strong>Read Extended Attributes:</strong> Users can view the extended attributes of a file or folder, such
            as permissions and creation and modification times.
        </li>
        <li><strong>Write Extended Attributes:</strong> Users can change the extended attributes of a file or folder.
        </li>
        <li><strong>Create Files/Write Data:</strong> The “Create Files” permission allows users to create files within
            the folder. (This permission applies to folders only.) The “Write Data” permission allows users to make
            changes to the file and overwrite existing content. (This permission applies to files only.)
        </li>
        <li><strong>Create Folders/Append Data:</strong> The “Create Folders” permission allows users to create folders
            within a folder. (This permission applies to folders only.) The “Append Data” permission allows users to
            make changes to the end of the file, but they can’t change, delete or overwrite existing data. (This
            permission applies to files only.)
        </li>
        <li><strong>Delete:</strong> Users can delete the file or folder. (If users don’t have the “Delete” permission
            on a file or folder, they can still delete it if they have the “Delete Sub folders And Files” permission on
            the parent folder.)
        </li>
        <li><strong>Read Permissions:</strong> Users can read the permissions of a file or folder, such as “Full
            Control”, “Read”, and “Write”.
        </li>
        <li><strong>Change Permissions:</strong> Users can change the permissions of a file or folder.</li>
        <li><strong>Take Ownership:</strong> Users can take ownership of the file or folder. The owner of a file or
            folder can always change permissions on it, regardless of any existing permissions that protect the file or
            folder.
        </li>
        <li><strong>Synchronize:</strong> Users can use the object for synchronization. This enables a thread to wait
            until the object is in the signaled state. This right is not presented in ACL Editor. You can read more
            about it <a
                href="https://rohnspowershellblog.wordpress.com/2015/01/16/what-does-the-synchronize-file-system-right-mean">here</a>.
        </li>
    </ul>

    <a href="https://blog.netwrix.com/2018/04/18/how-to-manage-file-system-acls-with-powershell-scripts/">(Source)</a>

    <h3>2.3.3 Allow versus Deny</h3>

    <p>
        How do we go about using deny permissions? In practice, we use deny permissions only when it is really
        necessary. Users or groups that are not in an Access Control List (ACL) don’t get any permissions, and therefore
        they can’t do anything. There is no need to explicitly add users or groups in those cases.
    </p>

    <p>
        When does it make sense to use deny? In a case where a whole group gets an allow permission, but one member of a
        group should not get it, it makes sense to add the whole group with an “allow” permission and add a single user
        with “deny”. This way, everyone except one single user will be able to do something. That‘s a good and efficient
        way of using “deny”.
    </p>

    <p>
        Avoid using “deny” when possible. Avoid that the ACL list becomes too long. If you notice a lot of deny
        permissions, or long ACL’s then there are probably things that need a re-think when it comes to groups or
        inheritance. Watch out for that.
    </p>

    <h3>2.3.4 PowerShell and Permissions</h3>

    <p>We can use 2 cmdlets to work with ACL’s:</p>
    <ul>
        <li>Get-acl</li>
        <li>Set-acl</li>
    </ul>

    <p><strong>Get-acl:</strong> We can use get-acl to look up the NTFS permissions.</p>

    <p>Example:</p>

    <pre><code>Get-Acl script2.txt</code></pre>

    <img src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/file_permissions_5.png" alt=""
         title="">

    <p>We will pipe the output to a list to get a better idea of the output :</p>

    <pre><code>Get-Acl script2.txt | Format-List</code></pre>

    <img src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/file_permissions_6.png" alt=""
         title="">

    <p>
        Here you can see how NTFS permissions look at the lowest level. We use a special descriptive language called
        SDDL to link permissions to SID numbers.
    </p>

    <p>You can also see who is the owner, and which users or groups are granted permissions.</p>

    <p>
        <strong>Set-acl:</strong> Since the way that NTFS permissions are described in the ACL is very compact, it is
        not
        straight forward to set permissions. You have to use the low-level terminology to do so.
    </p>

    <p>Example:</p>

    <pre><code>$acl = Get-Acl c:\scripts\powershell\script2.txt
$AccessRule = New-Object System.Security.AccessControl.FileSystemAccessRule("Guests","FullControl","Allow")
$acl.SetAccessRule($AccessRule)
$acl | Set-Acl c:\scripts\powershell\script2.txt</code></pre>

    <img src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/file_permissions_7.png" alt=""
         title="">

    <p>This will be the result:</p>

    <img src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/file_permissions_8.png" alt=""
         title="">

    <p>Overview of PowerShell Permissions</p>

    <img src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/file_permissions_9.png" alt=""
         title="">

    <a href="https://blog.netwrix.com/2018/04/18/how-to-manage-file-system-acls-with-powershell-scripts/">(Source)</a>
</div>
