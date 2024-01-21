<div>
    <h2>2 Default Permissions and Inheritance</h2>

    <p>In this step, you will:</p>

    <ul>
        <li>Make decisions about “Inheritance,” and you will switch it off where necessary.</li>
        <li>Work with default permissions (Read by default, Modify by default, ...) via the interface (generic
            permissions).
        </li>
        <li>Start with tools to familiarize you with the individual permissions. Afterward, we won’t use these tools to
            configure permissions.
        </li>
        <li>Work with default permissions via command-line tools.</li>
    </ul>

    <h3>2.1 Test Environment</h3>

    <p>We first create a number of folders and files to use as a test environment.</p>

    <ol>
        <li>Create a number of directories:</li>
    </ol>

    <p>Open PowerShell. Create new folders with:</p>
    <pre><code>Cd c:\.</code></pre>
    <pre><code>New-item c:\manual -Type Directory</code></pre>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_1.png" alt="" title="">

    <p>Request the permissions of the “c:\manual” folder via a command-line tool (the tool is called "icacls.exe" - not
        a PowerShell cmdlet). Open <strong>cmd.exe</strong> and enter this:</p>

    <code>icacls.exe c:\manual</code>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_2.png" alt="" title="">

    <p>Compare this to the permissions you can see in the interface.</p>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_3.png" alt="" title="">

    <p>Brief explanation of the ICACLS.EXE output:</p>

    <ul>
        <li>"(OI)(CI):F" means Full Control "This Folder, Subfolders and files"</li>
        <li>"(OI)(CI):M" means Modify "This Folder, Subfolders and files"</li>
        <li>"(I)(OI)(CI):M" means Modify "This Folder, Subfolders and files," and the permission is inherited from a
            parent folder
        </li>
        <li>"/inheritance:r" means remove all inherited ACL's from parent</li>
        <ul>
            <li>e - enable inheritance</li>
            <li>d - disable inheritance and copy the ACEs</li>
            <li>r - remove all inherited ACEs</li>
        </ul>
    </ul>

    <p>You can also query the permissions via PowerShell. The output is more detailed, and therefore it is currently
        more difficult for you to extract information from it. This is the command you can use in PowerShell to query
        the NTFS permissions:</p>

    <code>Get-Acl c:\manual | Format-List</code>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_4.png" alt="" title="">

    <h3>2.2 Modify Inheritance by Setting New "Parent Folder"</h3>

    <p>Folder “c:\manual” becomes a new parent and passes permissions to sub folders and files via inheritance.</p>

    <ul>
        <li>Make “c:\manual” a new parent:</li>
        <li>Use option 2</li>
    </ul>

    <table>
        <thead>
        <tr>
            <th>Option 1</th>
            <th>Option 2</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Via the interface</td>
            <td>Via command line</td>
        </tr>
        <tr>
            <td>
                Go to the properties of the folder. Go to the "advanced view" of the security tab:
                <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_5.png" alt=""
                     title="">
            </td>
            <td>
                Command:<code>Icacls.exe c:\manual /inheritance:d</code>
                <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_6.png" alt=""
                     title="">
            </td>
        </tr>
        <tr>
            <td>
                Click "disable inheritance" and choose "convert inherited permissions ..."
                <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_7.png" alt=""
                     title="">
            </td>
            <td>
                The permissions now look like this in the interface.
                <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_8.png" alt=""
                     title="">
            </td>
        </tr>
        </tbody>
    </table>

    <p>
        Notice the difference in the permissions. Before you converted the folder "manual" to a parent, you saw
        inherited permissions that you could not modify. Now that the folder has become a parent folder, you can change
        the permissions. In the next step, we are going to change permissions on the "manual" folder. We also need some
        new user accounts to test this. These new user accounts are also going to be listed in the permissions list.
    </p>

    <h3>2.3 Permissions Testing via User Accounts</h3>

    <p>
        We create a number of user accounts. With those users, we can log in and test what we can and cannot do on the
        test folders and test files:
    </p>

    <h4>Creation of New User Accounts</h4>

    <ol>
        <li>Open the "mmc.exe" console and add the snap-in "local users & groups".</li>
    </ol>

    <p>Run <code>“mmc.exe”</code></p>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_9.png" alt="" title="">

    <p>Via "file" and "add/remove snap-in" add the snap-in "local users & groups":</p>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_10.png" alt="" title="">

    <p>Choose: "local computer" in the popup:</p>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_11.png" alt="" title="">

    <p>
        Using the "users" folder, create a new user: "userGR" (GR is the abbreviation for "generic read"). This test
        user will be allowed to open and read the contents of the c:\manual folder.
    </p>

    <p>
        Right-click on the "users" folder and choose "new user". In the dialog box below you can enter everything.
    </p>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_12.png" alt="" title="">

    <p>
        In the same way, create: "userGW" (GW is the abbreviation for "generic write"). This test user will be able to
        read, open, edit, and delete the contents of the c:\manual folder.
    </p>

    <p>
        Both users are only members of the "Users" group. You can check this by double-clicking on the user. In the tab
        sheet "member Of", you see that your test user is automatically a member of the group "users". <strong>In all
            exercises
            and exam questions, we always assume that user accounts are by default all members of the group
            "users".</strong>
    </p>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_13.png" alt="" title="">

    <p>
        You may keep the management console on the desktop. That way you can open it later if you want to add more
        users.
    </p>

    <p>
        In the mmc.exe window, choose "file," and "save as." Choose your desktop as the location and give a name for the
        management console you are saving.
    </p>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_14.png" alt="" title="">

    <p>You can now close the management console.</p>

    <h3>2.4 Adjust Default Permissions for Test Users</h3>

    <p>Make sure you are logged in as an administrator. We are going to configure the folder c:\manual so that:</p>

    <ul>
        <li>userGR can read only the folder c:\manual and its contents (read & execute)</li>
        <li>userGW can read and edit (modify)</li>
        <li>administrators have all permissions on the folder and its contents (full control).</li>
        <li>other users do not have access to the c:manual folder</li>
    </ul>

    <p>With these commands you can set the NTFS permissions:</p>

    <ol>
        <li>Open the command prompt: cmd.exe (not the PowerShell !!!)</li>
        <li>Enter the following commands:</li>
    </ol>

    <p>(the last two commands remove the allow or grant permissions for users and authenticated users)</p>

    <pre><code>icacls.exe c:\manual /grant "userGR":(OI)(CI)R</code></pre>
    <pre><code>icacls.exe c:\manual /grant "userGW":(OI)(CI)M</code></pre>
    <pre><code>icacls.exe c:\manual /remove:g "users"</code></pre>
    <pre><code>icacls.exe c:\manual /remove:g "authenticated users"</code></pre>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_15.png" alt="" title="">

    <p>Your permissions now look like this:</p>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_16.png" alt="" title="">

    <p>Log on with userGR and userGW and test out the permissions.</p>

    <ul>
        <li>Log on with userGR and try to create a new file in the folder c:\manual</li>
        <li>Log on with userGW and try to create a new folder, create and edit a file</li>
        <li>Log on with userGR and try to open and edit a file created by userGW.</li>
    </ul>

    <p>
        Also, check what permissions are currently on files and folders when users create them. Also find out where
        those permissions on new objects come from.
    </p>

    <p>
        In the exercises that we're doing this semester, 99 percent of them are just working with the "generic
        permissions."
    </p>

    <p>This is the overview of the "generic permissions".</p>

    <h4>GR = GENERIC READ ONLY</h4>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_17.png" alt="" title="">
    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_18.png" alt="" title="">

    <h4>GRX = GENERIC READ and EXECUTE</h4>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_19.png" alt="" title="">
    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_20.png" alt="" title="">

    <h4>GM = GENERIC MODIFY</h4>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_21.png" alt="" title="">

    <h4>GF = GENERIC FULL CONTROL</h4>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_22.png" alt="" title="">
    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_23.png" alt="" title="">

    <h4>GENERIC WRITE ONLY</h4>

    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_24.png" alt="" title="">
    <img src="/assets/img/exercises/generic_permissions/default_permissions_and_inheritance_25.png" alt="" title="">
</div>
