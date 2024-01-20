<x-learn-windows-layout>
    <x-slot name="description">Exercise: Inherited Permissions</x-slot>
    <x-slot name="title">Exercise: Inherited Permissions</x-slot>

    <p>In the previous exercise:</p>
    <ul>
        <li>We used "<code>icacls.exe</code>" to view and modify permissions.</li>
        <li>We used the GUI to view permissions. (we have not yet used the GUI to make adjustments)</li>
        <li>We saw a cmdlet that allows us to query NTFS permissions.</li>
    </ul>

    <h2>1. Instruction</h2>
    <p>Depending on what we want to do, certain tools will be more or less appropriate. </p>

    <p>Example:</p>

    <ul>
        <li><code>Icacls.exe</code> is good for changing default permissions in a simple and orderly way.</li>
        <li>The GUI helps you to easily modify permissions in great detail and allows you to quickly find out what the
            final permissions of a user will be.
        </li>
        <li>Powershell allows you to get permissions via “<code>Get-Acl</code>”. This is very detailed information. We
            can do this
            remotely. We can do this for a lot of devices and a lot of directories and gather a lot of information in an
            orderly way.
        </li>
    </ul>

    <h2>2. Description</h2>
    <p>
        In this exercise, we are going to use "<code>Set-Acl</code>" to change inheritance on a folder. We did the same
        in the previous exercise using icacls.exe. In most of the exercises, we are going to use the GUI to adjust
        permissions. As a learning environment, this is the easiest way for you to quickly master the basic principles
        of NTFS. We are going to test this on the "<code>c:\temp</code>" folder.
    </p>

    <h2>3. Method</h2>

    <h3>3.1 Test case</h3>
    <ul>
        <li>Log in as administrator to your virtual machine.</li>
        <li>In the root of the C drive, create the new folder "<code>c:\temp</code>".</li>
    </ul>

    <p>Powershell command:</p>
    <pre><code>New-item -path c:\temp -type directory</code></pre>

    <img src="/assets/img/exercises/inherited_permissions/inherited_permissions_1.png" alt="" title="">

    <p>
        Put a screenshot here with the permissions that are on the <code>c:\ root</code> folder. Then you can compare
        this with the configuration we will end up with. Choose a screenshot of the "advanced view". Example of
        "advanced view".
    </p>

    <img src="/assets/img/exercises/inherited_permissions/inherited_permissions_2.png" alt="" title="">


    <h4>3.2 Permission adjustments via set-acl</h4>
    <ul>
        <li>Open Powershell.</li>
        <li>Via these powershell commands we are going to change the settings for inheritance. First execute the
            commands, and then we will go through what happened in each command.
        </li>
    </ul>

    <img src="/assets/img/exercises/inherited_permissions/inherited_permissions_3.png" alt="" title="">

    <p>Explanation of each command:</p>

    <table>
        <tbody>
        <tr>
            <th scope="row">$folder = 'c:\temp'</th>
            <td>We place the folder we want to manage in a variable $folder</td>
        </tr>
        <tr>
            <th scope="row">$acl = get-acl -path $folder</th>
            <td>
                We retrieve all ntfs permissions of the c:\temp directory and store them temporarily in a variable $acl.
                If you type the name of the variable you can see what information is stored in it.
            </td>
        </tr>
        <tr>
            <th scope="row">$acl.SetAccessRuleProtection($True, $True)</th>
            <td>
                In the variable $acl we change one of the properties. This is the property that determines inheritance.
            </td>
        </tr>
        <tr>
            <th scope="row">Set-Acl -path $folder -AclObject $acl</th>
            <td>
                The newly set permissions are now applied to the c:\temp folder via the set-acl cmdlet. With set-acl we
                can change permissions on file and folder objects.
            </td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>Check the properties of the folder in the GUI. What has changed in the folder?</li>
        <li>Delete the folder c:\temp</li>
    </ul>
</x-learn-windows-layout>
