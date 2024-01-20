<div>
    <h3>2.5 Copy and Move Operations</h3>

    <h4>2.5.1 Copy versus Move</h4>
    <p>Next, we will consider how copying or moving files and folders will affect permissions.</p>

    <table>
        <thead>
        <tr>
            <th>Scenario</th>
            <th>Copy</th>
            <th>Move</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>From c: drive to another location on the c: drive</td>
            <td>The copied file is a new file, created in a new target location and will inherit the permissions of the
                target folder.
            </td>
            <td>Moving from one folder to another folder on the same drive, let’s you keep the permissions of the
                original location.
            </td>
        </tr>
        <tr>
            <td>From the c: drive to another drive on the computer or on the network</td>
            <td>The copied file is a new file, created in a new target location and will inherit the permissions of the
                target folder.
            </td>
            <td>Moving from one drive to another drive is a “copy & delete” operation. Since you copy the file that you
                are moving first, you don’t keep the original file permissions , but inherit the permissions on the
                target folder.
            </td>
        </tr>
        </tbody>
    </table>

    <h3>2.5.2 Copying Permissions with PowerShell</h3>
    <p>
        There is a nice and easy pipeline trick that we can use to copy permissions (without copying data). If we use
        get-acl and set-acl in a pipeline command, this would be a possible solution:
    </p>

    <pre><code>Get-Acl c:\scripts\powershell\script1.ps1 | Set-Acl c:\scripts\powershell\script2.ps1</code></pre>
</div>
