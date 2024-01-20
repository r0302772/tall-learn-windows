<div>
    <h2>3 Appendix: Background Information on the Tool "icacls"</h2>

    <p>Examples:</p>

    <pre><code>icacls "d:apps" /grant "domain admins":(OI)(CI)F /inheritance:r
icacls "d:apps" /grant "everyone":(OI)(CI)M /inheritance:r</code></pre>

    <p>
        On the profiles share, only the "domain admins" should be allowed to enter all "Folders, Sub folders and files"
        (hence the (OI)(CI):F), everyone else should be able to read "this folder only". So without a combination of
        (CI) and/or (OI) it means "this folder only".
    </p>

    <pre><code>icacls "d:profiles" /grant "domain admins":(OI)(CI)F /inheritance:r
icacls "d:profiles" /grant "everyone":R /inheritance:r</code></pre>

    <pre><code>icacls "d:ers" /grant "domain admins":(OI)(CI)F /inheritance:r
icacls "d:ers" /grant "everyone":R /inheritance:r</code></pre>

    <p>
        In a command prompt, this command means: <code>icacls f:* /remove mdemarco /T</code>. Icacls will search every
        file and folder from the root of the F drive down and remove any permissions granted to or denied to mdemarco.
        Be careful not to remove deny permissions that could result in a user being able to access data they aren't
        supposed to. If you want to remove only allow permissions, change the command to the following: <code>icacls
            f:/remove:g mdemarco /T</code>. To remove only deny permissions, change <code>/remove:g</code> to <code>/remove:d</code>.
    </p>

    <p>Examples:</p>

    <ul>
        <li>"(OI)(CI):F" means Full Control "This Folder, Sub folders and files"</li>
        <li>"(OI)(CI):M" means Modify "This Folder, Sub folders and files"</li>
        <li>"/inheritance:r" means remove all inherited ACL's from the parent</li>
    </ul>

    <p>Possible combinations:</p>

    <ul>
        <li>(OI) This folder and files</li>
        <li>(CI) This folder and sub folders.</li>
        <li>(OI)(CI) This folder, sub folders, and files.</li>
        <li>(OI)(CI)(IO) Sub folders and files only.</li>
        <li>(CI)(IO) Sub folders only.</li>
        <li>(OI)(IO) Files only.</li>
    </ul>

    <p>And the permission possibilities:</p>

    <pre><code>N - no access
F - full access
M - modify access
RX - read and execute access
R - read-only access
W - write-only access
D - delete access
DE - delete
RC - read control
WDAC - write DAC
WO - write owner
S - synchronize
AS - access system security
MA - maximum allowed
GR - generic read
GW - generic write
GE - generic execute
GA - generic all
RD - read data/list directory
WD - write data/add file
AD - append data/add subdirectory
REA - read extended attributes
WEA - write extended attributes
X - execute/traverse
DC - delete child
RA - read attributes
WA - write attributes</code></pre>

    <p>Here's the description of all the possible NTFS permissions:</p>

    <table>
        <thead>
        <tr>
            <th>Permission</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Traverse Folder/Execute File</th>
            <td>For folders: Traverse Folder allows or denies moving through folders to reach other files or folders,
                even if the user has no permissions for the traversed folders. (Applies to folders only.) Traverse
                folder takes effect only when the group or user is not granted the Bypass traverse checking user right
                in the Group Policy snap-in. (By default, the 'Everyone' group is given the Bypass traverse checking user
                right.) For files: Execute File allows or denies running program files. (Applies to files only). Setting
                the Traverse Folder permission on a folder does not automatically set the Execute File permission on all
                files within that folder.
            </td>
        </tr>
        <tr>
            <th scope="row">List Folder/Read Data</th>
            <td>List Folder allows or denies viewing file names and sub folder names within the folder. List Folder only
                affects the contents of that folder and does not affect whether the folder you are setting the
                permission on will be listed. (Applies to folders only.) Read Data allows or denies viewing data in
                files. (Applies to files only.)
            </td>
        </tr>
        <tr>
            <th scope="row">Read Attributes</th>
            <td>Allows or denies viewing the attributes of a file or folder, such as read-only and hidden. Attributes
                are defined by NTFS.
            </td>
        </tr>
        <tr>
            <th scope="row">Read Extended Attributes</th>
            <td>Allows or denies viewing the extended attributes of a file or folder. Extended attributes are defined by
                programs and may vary by program.
            </td>
        </tr>
        <tr>
            <th scope="row">Create Files/Write Data</th>
            <td>Create Files allows or denies creating files within the folder. (Applies to folders only.) Write Data
                allows or denies making changes to the file and overwriting existing content. (Applies to files only.)
            </td>
        </tr>
        <tr>
            <th scope="row">Create Folders/Append Data</th>
            <td>Create Folders allows or denies creating folders within the folder. (Applies to folders only.) Append
                Data allows or denies making changes to the end of the file but not changing, deleting, or overwriting
                existing data. (Applies to files only.)
            </td>
        </tr>
        <tr>
            <th scope="row">Write Attributes</th>
            <td>Allows or denies changing the attributes of a file or folder, such as read-only or hidden. The Write
                Attributes permission does not imply creating or deleting files or folders; it only includes the
                permission to make changes to the attributes of a file or folder.
            </td>
        </tr>
        <tr>
            <th scope="row">Write Extended Attributes</th>
            <td>Allows or denies changing the extended attributes of a file or folder. The Write Extended Attributes
                permission does not imply creating or deleting files or folders; it only includes the permission to make
                changes to the attributes of a file or folder.
            </td>
        </tr>
        <tr>
            <th scope="row">Delete Sub folders and Files</th>
            <td>Allows or denies deleting sub folders and files, even if the Delete permission has not been granted on
                the sub folder or file. (Applies to folders.)
            </td>
        </tr>
        <tr>
            <th scope="row">Delete</th>
            <td>Allows or denies deleting the file or folder. If you do not have 'Delete' permission on a file or folder,
                you can still delete it if you have been granted Delete Sub folders and Files on the parent folder.
            </td>
        </tr>
        <tr>
            <th scope="row">Read Permissions</th>
            <td>Allows or denies reading permissions of the file or folder, such as Full Control, Read, and Write.</td>
        </tr>
        <tr>
            <th scope="row">Change Permissions</th>
            <td>Allows or denies changing permissions of the file or folder, such as Full Control, Read, and Write.</td>
        </tr>
        <tr>
            <th scope="row">Take Ownership</th>
            <td>Allows or denies taking ownership of the file or folder. The owner of a file or folder can always change
                permissions on it, regardless of any existing permissions that protect the file or folder.
            </td>
        </tr>
        <tr>
            <th scope="row">Synchronize</th>
            <td>Allows or denies different threads to wait on the handle for the file or folder and synchronize with
                another thread that may signal it. This permission applies only to multithreaded, multiprocess programs.
            </td>
        </tr>
        </tbody>
    </table>
</div>
