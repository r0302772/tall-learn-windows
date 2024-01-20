<x-learn-windows-layout>
    <x-slot name="description">Windows File & folder security - New Technology File System (NTFS)</x-slot>
    <x-slot name="title">Windows File & folder security - New Technology File System (NTFS)</x-slot>

    <p>
        In this section, we will look into the way that files and folders are protected on your system. The same form of
        protection is used in several environments and products:
    </p>
    <ul>
        <li>The registry follows the same rules that protect the file system</li>
        <li>Webservers, SQL database servers, Microsoft Exchange mail servers, Azure services also follow the rules
            governing permissions.
        </li>
    </ul>

    <p>
        Once you know how NTFS file and folder permissions work, you can also apply this knowledge to other
        environments.
    </p>

    <p>
        In the case of files and folders, it is the file system that will allow you to use this form of protection. A
        disk or partition formatted with FAT will not support the use of permissions. On such a system, you cannot
        protect files and folders and decide who can do what with data.
    </p>

    <p>
        If, however, your system is formatted with the NTFS file system, then your file system will store information
        about who can or cannot manipulate files and folders.
    </p>

    <p>We will break up the NTFS mechanism into these subjects:</p>
    <ul>
        <li>Inheritance of permissions</li>
        <li>Folder permissions</li>
        <li>File permissions</li>
        <li>Conflicting permissions: types</li>
        <li>Ownership property</li>
        <li>“Take ownership” user right</li>
        <li>“Take ownership” permission</li>
        <li>Sharing folders</li>
        <li>Auditing files and folders</li>
    </ul>

    @include('windows_security_basics.windows_file_and_folder_security_ntfs.inheritance-of-permissions')
    @include('windows_security_basics.windows_file_and_folder_security_ntfs.folder-permissions')
    @include('windows_security_basics.windows_file_and_folder_security_ntfs.file-permissions')
    @include('windows_security_basics.windows_file_and_folder_security_ntfs.conflicting-or-combining-permissions')
    @include('windows_security_basics.windows_file_and_folder_security_ntfs.copy-and-move-operations')
    @include('windows_security_basics.windows_file_and_folder_security_ntfs.ownership')
    @include('windows_security_basics.windows_file_and_folder_security_ntfs.sharing-level-permissions')
    @include('windows_security_basics.windows_file_and_folder_security_ntfs.auditing')
</x-learn-windows-layout>
