<x-learn-windows-layout>
    <x-slot name="description">Exercise: Ownership</x-slot>
    <x-slot name="title">Exercise: Ownership</x-slot>

    <h2>1. Preparation</h2>
    <p>Ensure UAC is turned off</p>
    <p>Make sure that UAC is turned off on your device (usually done in previous exercises).</p>

    <h2>2. Users</h2>
    <p>Create the following users on your virtual machine:</p>
    <ul>
        <li>accountant</li>
        <li>SalesPerson1</li>
        <li>SalesPerson2</li>
    </ul>
    <p>
        Create these users via PowerShell using the cmdlet <code>New-LocalUser</code>. None of these users is a member
        of the administrators group; they are members of the default "Users" group.
    </p>

    <h2>3. Situation</h2>
    <p>In the C drive, the following folders will be used:</p>
    <pre>
c:\expenseReports
c:\expenseReports\2018
c:\expenseReports\2019
</pre>

    <img src="/assets/img/exercises/ownership/ownership_1.png" alt="" title="">

    <img src="/assets/img/exercises/ownership/ownership_2.png" alt="" title="">

    <p>
        The folders were created with the administrator's account, who is the owner of all folders. However, the text
        files were created by the SalesPeople:
    </p>

    <ul>
        <li>C:\expenseReports</li>
        <li>C:\expenseReports\2018</li>
        <li>C:\expenseReports\2019</li>
        <li>C:\expenseReports\2018\SalesPerson1.txt (Owner: SalesPerson1)</li>
        <li>C:\expenseReports\2018\SalesPerson2.txt (Owner: SalesPerson2)</li>
    </ul>

    <h2>4. Who is the owner of the file or folder?</h2>

    <table>
        <thead>
        <tr>
            <th>Folder/file</th>
            <th>Owner</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>C:\expenseReports</td>
            <td></td>
        </tr>
        <tr>
            <td>C:\expenseReports\2018</td>
            <td></td>
        </tr>
        <tr>
            <td>C:\expenseReports\2019</td>
            <td></td>
        </tr>
        <tr>
            <td>C:\expenseReports\2018\SalesPerson1.txt</td>
            <td></td>
        </tr>
        <tr>
            <td>C:\expenseReports\2018\SalesPerson2.txt</td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <h2>5. Change Permissions</h2>
    <p>Adjust permissions for efficient and secure access:</p>

    <table>
        <thead>
        <tr>
            <th>C:\expenseReports</th>
            <th>C:\expenseReports\2018</th>
            <th>SalesPerson1.txt</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                Administrators have all permissions on this folder.
                The accountant may modify this folder, and may create new files and folders in this folder.
                All other users may open this folder (no more than that).
            </td>
            <td>
                Administrators have all permissions on these files.
                The accountant may open this folder (and no more than that)
                All other users may open this folder (no more than that).
            </td>
            <td>
                Each SalesPerson may edit and read his/her own expense report.
                SalesPeoples are not allowed to read the expense notes of other SalesPeople.
                Accountants may read the expense reports, but not edit them.
                Administrators have all permissions on these files.
                All other users are not allowed to open these files.
            </td>
        </tr>
        <tr>
            <th scope="row" colspan="3">Where do you turn inheritance on or off?</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row" colspan="3">What permissions do you give to folders and files?</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <h3>5.1 Log in as "SalesPerson1"</h3>
    <p>Can SalesPerson1 change the permissions of his own expense note?</p>

    <h3>5.2 Log in as "SalesPerson1"</h3>
    <p>Can SalesPerson1 change the permissions of the expense report of SalesPerson2 (SalesPerson2.txt)?</p>

    <h3>5.3 Log in as "SalesPerson1"</h3>
    <p>Can SalesPerson1 give reading rights to SalesPerson2?</p>

    <h3>5.4 Log in as SalesPerson1</h3>
    <p>
        SalesPerson1 takes away all permissions at his/her own expense. Why can SalesPerson1 take away all permissions
        and still restore his list of permissions?
    </p>

    <h3>5.5 Administrator Becoming the Owner</h3>
    <p>How can the administrator become the owner of the file "expenses_representative1.txt"?</p>

</x-learn-windows-layout>
