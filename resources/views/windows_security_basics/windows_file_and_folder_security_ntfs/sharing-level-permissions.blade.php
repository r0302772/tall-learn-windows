<div>
    <h2>2.7 Sharing Level Permissions</h2>

    <p>
        Just when you think you know all there is to know about NTFS permissions, you'll notice that there is another
        permissions or security tab on the folder level. Up to now, we have protected files and folders for local users
        logging on to the same computer. This is very practical for situations in which a number of people share the
        same computer.
    </p>

    <p>
        However, in a network environment, people will access data on the network. When people access the same folder
        over the network, we need to first of all make the folder available to them. If we turn a folder into a "shared
        folder," the folder will be accessible over the network if we type in this network or UNC path:
    </p>

    <code>\\computerName\shareName</code>

    <p>
        You will enter the computer name that you are accessing, and you will indicate which shared folder name you
        need. The name of a shared folder can be different from the name of a folder.
    </p>

    <p>First of all, we'll turn <code>c:\scripts</code> into the shared folder named "automate". Follow these steps:</p>

    <ol>
        <li>Take the properties of the folder "scripts".</li>
        <li>Go to the "sharing" tab.</li>
        <li>Use the "advanced sharing" button to open up this interface:</li>
    </ol>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/sharing_level_permissions_1.png"
        alt="" title="">

    <ol start="4">
        <li>Check the checkbox "share this folder" to activate network sharing.</li>
        <li>Select the "share name": "automate".</li>
    </ol>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/sharing_level_permissions_2.png"
        alt="" title="">

    <ol start="6">
        <li>"everyone": Read are the default share level permissions.</li>
        <img
            src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/sharing_level_permissions_3.png"
            alt="" title="">
        <li>Click on the "permissions" button. You can now add users or groups and choose from the generic permissions
            "read", "change", and "full control".
        </li>
        <li>You can now access your shared folder with this UNC path: <code>\\computerName\automate</code></li>
    </ol>

    <p>So how will these "shared folder" permissions affect the "NTFS permissions" that we configured on the security
        tab?</p>

    <p>
        You can compare "share level" permissions to a filter. Shares are managed and made available by the "server
        service" on servers and clients. Each time that you connect with a UNC path, you will connect to the "server
        service". This service will filter the permissions with which you enter the share.
    </p>

    <p>
        In the case of "everyone: read", the service will take away all the tools that you need to be able to perform
        write, delete, modify, and full control permissions. Even if you access a file in the shared folder where the
        NTFS permissions allow you to change the content of the file, you no longer have the necessary tools to do so.
    </p>

    <p>
        When we set the "shared folder" permissions, we have to make sure that we at least let people enter with the
        tools that they need. Once they enter with the necessary tools, we can then still be more restrictive on folder
        and file level with NTFS permissions.
    </p>

    <h3>2.7.1 Shared Folder Wizard</h3>

    <p>
        Please do not use the "shared folder wizard". This wizard is meant for end users and not for IT management. If
        you go to the "share" tab on a folder and click on the "share" button, you will get the "share wizard".
    </p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/sharing_level_permissions_4.png"
        alt="" title="">

    <p>It is meant for people who are not familiar with NTFS or share level permissions.</p>

    <p>
        Which brings us to the main issue or reason why we don't use it.
        <strong>
            The wizard will change both your NTFS and share level permissions. If you make the wrong choices in this
            wizard, you run the risk that it will mess up all the NTFS permissions that you have already set up.
        </strong>
    </p>
</div>
