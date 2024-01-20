<div>
    <h2>2.2 Folder Permissions</h2>

    <p>
        In this section, we will take a closer look at the permissions that we can use on the folder level. The next
        section will cover file permissions, which are almost exactly the same. In our exercises, we will rarely use
        individual permissions. Instead, we will group them together to put them to practical use.
    </p>

    <p>These are all the individual permissions that we can find on the folder c:\scripts:</p>

    <img src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/folder_permissions_1.png" alt="" title="">

    <p>
        We won’t use this interface to make changes to permissions unless we are in very specific cases. This just gives
        us a good idea of all the “building blocks” or permissions we can use to create a bundle that makes sense in
        real life. For example, “read attributes” allows you to take the properties of a folder and look at them. This
        way you can check folder size, dates of creation, compression, read-only attributes, etc. There aren’t many
        situations where you will grant this permission separately. Usually, we will combine them to create “generic
        permissions,” which you will find in the basic view of your security tab:
    </p>

    <img src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/folder_permissions_2.png" alt="" title="">

    <p>
        We used the “edit” button to show you the interface in which we can add users and groups and link them to
        “generic permissions.” This is the list of all “generic permissions”:
    </p>

    <table>
        <thead>
        <tr>
            <th>Permissions</th>
            <th>Generic Permissions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Read & Execute</td>
            <td>READ and execute</td>
        </tr>
        <tr>
            <td>Read</td>
            <td>READ permission and</td>
        </tr>
        <tr>
            <td>Modify</td>
            <td>WRITE</td>
        </tr>
        <tr>
            <td>Write</td>
            <td>CHANGE</td>
        </tr>
        <tr>
            <td>Read + Change + Change permissions and take ownership</td>
            <td>FULL CONTROL</td>
        </tr>
        <tr>
            <td>No permissions selected</td>
            <td>NO ACCESS</td>
        </tr>
        </tbody>
    </table>

    <h4>GENERIC READ and EXECUTE</h4>
    <p><strong>Description:</strong></p>
    <ul>
        <li>Allows you to open up folders and see the contents of the folder (folder listing).</li>
        <li>Allows you to open up files and check properties.</li>
        <li>Allows you to read NTFS permissions.</li>
        <li>Allows you to read and copy contents.</li>
        <li>Allows you to launch or execute programs, scripts, or executables.</li>
    </ul>

    <p>
        The only difference between “generic read” and “generic read and execute” is the permission to launch or start
        executables, programs, or scripts.
    </p>

    <h4>GENERIC CHANGE</h4>
    <p><strong>Description:</strong></p>
    <ul>
        <li>Allows all the Read and execute generic permissions.</li>
        <li>Allows you to move and delete folders and files.</li>
        <li>Allows you to edit or change properties or contents of folders and files.</li>
        <li>Allows the creation of new files and folders.</li>
    </ul>

    <h4>GENERIC FULL CONTROL</h4>
    <p><strong>Description:</strong></p>
    <ul>
        <li>Allows you all the Read and execute generic permissions.</li>
        <li>Allows you all the Change generic permissions.</li>
        <li>Allows you to make changes to the list of NTFS permissions.</li>
        <li>Allows you to change ownership.</li>
    </ul>

    <p>This gives you a side-by-side overview of all the different generic permissions in the GUI.</p>

    <img src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/folder_permissions_3.png" alt="" title="">
</div>
