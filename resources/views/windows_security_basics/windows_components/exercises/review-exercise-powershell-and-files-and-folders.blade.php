<x-learn-windows-layout>
    <x-slot name="description">Exercise: Review Powershell and files and folders</x-slot>
    <x-slot name="title">Exercise: Review Powershell and files and folders</x-slot>

    <h2>1 Preparation</h2>

    <p>In this exercise we are going to review some topics about powershell, pipeline commands and NTFS permissions.</p>
    <p>
        You have already created a number of users in the previous exercises. Use the powershell cmdlet
        <code>Get-LocalUser</code> to get the list of users you have created.
    </p>
    <p>This is what I get as an example in my virtual environment:</p>

    <img
        src="/assets/img/exercises/review_exercise_powershell_and_files_and_folders/review_exercise_powershell_and_files_and_folders_1.png"
        alt="" title="">

    <p>
        Use the cmdlets "<code>ConvertTo-Html</code>" and "<code>Export-Csv</code>" to export the list of user
        information
        to a document.
    </p>

    <h3>2.1 Get Enabled Users (true)</h3>
    <p>
        Get a list of enabled users using PowerShell cmdlet <code>Get-LocalUser</code>. Write a pipeline command that
        checks if the value of enabled is true.
    </p>

    <h3>2.2 Get Enabled Users (false)</h3>

    <p>Rewrite your pipeline command by checking when the value of enabled is not equal to the boolean value $false</p>

    <h3>2.3 Reverse Alphabetical Order</h3>
    <p>Get an alphabetical list of all enabled users in reverse order:</p>

    <h3>2.4 List of Users Names</h3>
    <p>Get a list of names of enabled users:</p>

    <h3>2.5 Count Enabled Users</h3>
    <p>Count how many enabled users there are:</p>

    <h3>2.6 Create Folder for Each User</h3>
    <p>Create a folder for each enabled user in C:\myUsers:</p>

    <h3>2.7 Copy NTFS Permissions</h3>
    <p>I have secured one of the folders we have just created: </p>
    <img
        src="/assets/img/exercises/review_exercise_powershell_and_files_and_folders/review_exercise_powershell_and_files_and_folders_2.png"
        alt="" title="">
    <p>
        C:\MyUsers\admin is protected so that user Admin can read the directory, all users can read the directory, and
        system has full control.
    </p>

    <p>Secure the c:\MyUsers\admin folder on your virtual machine in the same way.</p>

    <h2>Time for a PowerShell trick:</h2>

    <p>We can copy the permissions of one folder via powershell and transfer them to another folder.</p>
    <p>Via get-acl we can get the permissions.</p>
    <p>Via set-acl we can change the permissions.</p>

    <p>We can use this trick:</p>
    <code>Get-Acl c:\Myusers\admin |set-acl c:\MyUsers\NewUser</code>

    <p>
        By running this in a pipeline, you can retrieve permissions, copy and transfer them to a new folder.
    </p>

    <h3>2.8 Share a Folder via PowerShell</h3>
    <p>Share the folder c:\folder using PowerShell:</p>

    <h3>2.9 Avoiding Share Wizard</h3>
    <img
        src="/assets/img/exercises/review_exercise_powershell_and_files_and_folders/review_exercise_powershell_and_files_and_folders_3.png"
    alt="" title="">
    <p>Why <strong>do we avoid the use of this interface</strong> to share a folder?</p>

    <h3>2.10 Share Wizard and NTFS Permissions</h3>
    <p>
        You have just copied NTFS and set them. These are the permissions on the "accountant" folder.
        (c:\myUsers\accountant)
    </p>
    <img
        src="/assets/img/exercises/review_exercise_powershell_and_files_and_folders/review_exercise_powershell_and_files_and_folders_4.png"
        alt="" title="">
    <p>
        If you use the share wizard, the wizard will suggest the options below. We are not going to change them. We will
        share the folder using the wizard. <strong>(just to prove why we avoid using the wizard)</strong>
    </p>
    <img
        src="/assets/img/exercises/review_exercise_powershell_and_files_and_folders/review_exercise_powershell_and_files_and_folders_5.png"
        alt="" title="">
    <p>After using the share wizard, check if NTFS permissions are still set as intended:</p>

    <h3>2.11 Add Users to Administrators Group</h3>
    <p>Add new users ("new1", "new2", "new3") to the "administrators" group:</p>

    <h3>2.12 Create Shared Folder for INTRANET</h3>
    <p>Create a shared folder for c:\INTRANET:</p>

    <h3>2.13 Change Share Level Permissions</h3>
    <p>Change share level permissions for the "INTRANET" shared folder:</p>

    <h3>2.14 Get Share Level Permissions</h3>
    <p>Get share level permissions on the "INTRANET" shared folder:</p>

    <h3>2.15 Get Command History</h3>
    <p>Use <code>Get-History</code> to view the PowerShell commands used.</p>

    <h3>2.16 Variables in Practice</h3>
    <p>Experiment with making, clearing, and using variables based on the commands in the provided source.</p>

    <p>Source: <a href="https://opensource.com/article/19/8/variables-powershell">https://opensource.com/article/19/8/variables-powershell</a>
    </p>
</x-learn-windows-layout>
