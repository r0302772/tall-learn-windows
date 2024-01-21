<x-learn-windows-layout>
    <x-slot name="description">Exercise: Auditing and ownership</x-slot>
    <x-slot name="title">Exercise: Auditing and ownership</x-slot>

    <h2>1 Create the following users with PowerShell</h2>

    <ul>
        <li>User: "designer"</li>
        <li>User: "HtmlEditor"</li>
        <li>User: "webAdmin"</li>
    </ul>

    <p>PowerShell commands:</p>

    <h2>2 Create a folder structure for a web hosting company</h2>

    <ul>
        <li>In the root of the C-drive, there is the folder: "WEBSITE"</li>
        <li>In the folder C:\WEBSITE, there are the following subfolders:
            <ul>
                <li>C:\website\JPGLibrary</li>
                <li>C:\website\HTML</li>
            </ul>
            <strong>(Important: user webadmin creates this folder structure)</strong>
        </li>
    </ul>

    <p>PowerShell commands:</p>

    <h2>3 Following users have access to these folders/files</h2>

    <ol>
        <li>The user "<strong>designer</strong>" is allowed to open and read the folder and contents of C:\website. In
            the folder
            <strong>C:\website\JPGLibrary</strong>, he/she may read and edit files and folders. He/she does not have
            access to
            the folder <strong>C:\website\HTML</strong>
        </li>

        <li>The user "<strong>htmlEditor</strong>" is allowed to open and read the folder and contents of C:\website. In
            the
            folder <strong>C:\website\JPGLibrary</strong>, he/she is only allowed to read files and folders (no more).
            He/she has
            access to the folder <strong>C:\website\HTML and may read and edit folders/files in it.</strong>
        </li>

        <li>The user "<strong>webadmin</strong>" is allowed to fully manage the permissions for ALL 3 Folders and their
            contents
            and is granted all permissions for this. This user may also change the permissions on the folders
            and their contents. He/she will not have to edit or delete files and folders. This user can read
            files and folders from all 3 folders.
        </li>

        <li><strong>All administrators may read and access the 3 folders and their contents. All other users</strong>
            have no access to these folders.In this scenario, administrators do not use their "take ownership" user
            right to change permissions.
        </li>
    </ol>

    <h2>4 Based on this scenario, complete this table before you change the permissions:</h2>

    <p>Who made the folders?</p>

    <table>
        <tr>
            <th></th>
            <th>designer</th>
            <th>Htmleditor</th>
            <th>Webadmin</th>
            <th>administrators</th>
            <th>users</th>
        </tr>
        <tr>
            <th scope="row">Member of the group...</th>
            <td></td>
            <td></td>
            <td></td>
            <td>N/A</td>
            <td>N/A</td>
        </tr>
        <tr>
            <th scope="row">C:\website</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">C:\website\JPGLibrary</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">C:\website\HTML</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <h2>5 Document the security you have put on folders/files</h2>

    <p>Example of advanced view.</p>
    <img src="/assets/img/exercises/auditing_and_ownership/auditing_and_ownership.png" alt="" title="">

    <p>Use a screenshot of the advanced view of each folder:</p>
    <h5>c:\website</h5>
    <p>Screenshot NTFS permissions:</p>

    <h5>c:\website\jpglibrary</h5>
    <p>Screenshot NTFS permissions:</p>

    <h5>C:\WEBSITE\HTML</h5>
    <p>Screenshot NTFS permissions:</p>

    <h2>6 Permissions for Webadmin</h2>
    <p>
        Suppose Webadmin is only a member of the group users. Webadmin has created the folders, and other users have
        filled the content.
    </p>

    <table>
        <tr>
            <th></th>
            <th>designer</th>
            <th>Htmleditor</th>
            <th>Webadmin</th>
            <th>administrators</th>
            <th>users</th>
        </tr>
        <tr>
            <th scope="row">Member of the group...</th>
            <td></td>
            <td></td>
            <td>users</td>
            <td>N/A</td>
            <td>N/A</td>
        </tr>
        <tr>
            <th scope="row">C:\website</th>
            <td>Correctly set</td>
            <td>Correctly set</td>
            <td>Full control</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">C:\website\JPGLibrary</th>
            <td>Correctly set</td>
            <td>Correctly set</td>
            <td>Read, list, read & execute</td>
            <td>Correctly set</td>
            <td>Correctly set</td>
        </tr>
        <tr>
            <th scope="row">C:\website\HTML</th>
            <td>Correctly set</td>
            <td>Correctly set</td>
            <td>Read, list, read & execute</td>
            <td>Correctly set</td>
            <td>Correctly set</td>
        </tr>
    </table>

    <p>Can webadmin manage the permissions for the content of the 3 folders?</p>

    <h2>7 Permissions for Webadmin (Member of Users Group)</h2>
    <p>Suppose Webadmin is a member of the group users, and other users have filled the content.</p>

    <table>
        <tr>
            <th></th>
            <th>designer</th>
            <th>Htmleditor</th>
            <th>Webadmin</th>
            <th>administrators</th>
            <th>users</th>
        </tr>
        <tr>
            <th scope="row">Member of the group...</th>
            <td></td>
            <td></td>
            <td>users</td>
            <td>N/A</td>
            <td>N/A</td>
        </tr>
        <tr>
            <th scope="row">C:\website</th>
            <td>Correctly set</td>
            <td>Correctly set</td>
            <td>Full control</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">C:\website\JPGLibrary</th>
            <td>Correctly set</td>
            <td>Correctly set</td>
            <td>Full control</td>
            <td>Correctly set</td>
            <td>Correctly set</td>
        </tr>
        <tr>
            <th scope="row">C:\website\HTML</th>
            <td>Correctly set</td>
            <td>Correctly set</td>
            <td>Full control</td>
            <td>Correctly set</td>
            <td>Correctly set</td>
        </tr>
    </table>

    <ul>
        <li>Can webadmin manage the permissions of the 3 folders?</li>
        <li>Can webadmin manage the permissions of the content of the 3 folders?</li>
    </ul>

    <h2>8 Permissions for Webadmin (Member of Administrators Group)</h2>
    <p>Suppose Webadmin is a member of the Administrators group, and other users have filled the content.</p>

    <table>
        <tr>
            <th></th>
            <th>designer</th>
            <th>Htmleditor</th>
            <th>Webadmin</th>
            <th>administrators</th>
            <th>users</th>
        </tr>
        <tr>
            <th scope="row">Member of the group...</th>
            <td></td>
            <td></td>
            <td>administrators</td>
            <td>N/A</td>
            <td>N/A</td>
        </tr>
        <tr>
            <th scope="row">C:\website</th>
            <td>Correctly set</td>
            <td>Correctly set</td>
            <td>Full control</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">C:\website\JPGLibrary</th>
            <td>Correctly set</td>
            <td>Correctly set</td>
            <td>Read, read & execute, list</td>
            <td>Correctly set</td>
            <td>Correctly set</td>
        </tr>
        <tr>
            <th scope="row">C:\website\HTML</th>
            <td>Correctly set</td>
            <td>Correctly set</td>
            <td>Read, read & execute, list</td>
            <td>Correctly set</td>
            <td>Correctly set</td>
        </tr>
    </table>

    <ul>
        <li>Can webadmin manage the permissions of the 3 folders?</li>
        <li>Can webadmin manage the permissions of the content of the 3 folders?</li>
    </ul>

    <h2>9 Share Folder Over Network</h2>
    <p>Document the configuration of your shared folder. Test the connection and permissions.</p>

    <h2>10 Use Auditing</h2>
    <p>Check who is reading the folder or files. Check something that a user may not and cannot do.</p>
    <ul>
        <li>Screenshot configuration:</li>
        <li>Screenshot log file with audit events</li>
    </ul>

    <h2>11 PowerShell and Security Log Files</h2>
    <p>Provide an example of how to analyze the security log file via PowerShell.</p>
</x-learn-windows-layout>
