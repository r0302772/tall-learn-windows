<x-learn-windows-layout>
    <x-slot name="description">Exercise: Folder permissions inheritance</x-slot>
    <x-slot name="title">Exercise: Folder permissions inheritance</x-slot>

    <h2>1. Preparation</h2>

    <p>Turn off User Account Control (UAC)</p>
    <p>Normally, this has already been done in the previous exercise. Verify this to be sure.</p>

    <h2>2. Create Folder Structure</h2>

    <img src="/assets/img/exercises/folder_permissions_inheritance/folder_permissions_inheritance.png" alt="" title="">

    <pre>
c:\video
    \assembly
    \upload
    \raw
</pre>

    <h2>3. Make c:\video a 'parent'</h2>
    <p>Turn off inheritable permissions on this folder and preserve the permissions it originally had.</p>

    <h2>4. Permissions for c:\video</h2>
    <p>In the folder c:\video, give the following permissions:</p>
    <ul>
        <li>Everyone: Generic Read (List, Read, Execute)</li>
        <li>Authenticated Users: Generic Read (List, Read, Execute)</li>
        <li>Administrators: Full Control (All Permissions)</li>
    </ul>

    <h2>5. Create New User "Producer"</h2>
    <p>This user is a member of the group of users.</p>

    <h2>6. Permissions for User "Producer"</h2>
    <p>User "Producer" must be able to read and edit all directories (Generic Write: Read, Execute, List, Modify, Write).</p>

    <h2>7. Permissions for Other Users</h2>
    <p>Other users can only open the "upload" folder ("raw" and "edit" are not allowed).</p>

</x-learn-windows-layout>
