<x-learn-windows-layout>
    <x-slot name="description">Exercise: File and folder permissions and inheritance</x-slot>
    <x-slot name="title">Exercise: File and folder permissions and inheritance</x-slot>

    <h2>1 Preparation:</h2>

    <p>Make sure that UAC is turned off on your device. (see previous lessons)</p>

    <h2>2 Situation:</h2>
    <p>In the C drive, the following folders have been created:</p>

    <pre>
c:\expenses
c:\expenses\2020
c:\onkosten\2021
</pre>

    <p>In the expense folder, a file has been created for each representative.</p>

    <pre>
c:\expenses\2020\salesRep1.txt
c:\expenses\2020\salesRep2.txt
</pre>

    <img
        src="/assets/img/exercises/file_and_folder_permissions_and_inheritance/file_and_folder_permissions_and_inheritance.png"
        alt="" title="">

    <p>
        All these files and folders were created with the administrator's account. The administrator is the owner of all
        these files and folders. Create the folders and files as described above.
    </p>

    <h3>2.1 Users have access to these file(s) and folders.</h3>

    <p>Users:</p>
    <pre>
accountant
SalesRep1
SalesRep2
</pre>

    <p>
        Create these users. None of these users is a member of the administrators group. Change the permissions of the
        folder and files so that users can use the files in the following way:
    </p>

    <p>CHANGE THE DESCRIPTION TO GENERIC PERMISSIONS</p>

    <table>
        <thead>
        <tr>
            <th>C:\expenses</th>
            <th>C:\expenses</th>
            <th>Salesrep1.txt</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                Administrators have all permissions on these files.

                The bookkeeper may modify this folder, and may create new files and folders in this folder.
                All other users may open this folder (no more than that).
            </td>
            <td>
                Administrators have all permissions on these files.

                The accountant may open this folder (and no more than that)
                All other users may open this folder (no more than that).
            </td>
            <td>
                Each representative may edit and read his/her own expense report.
                Representatives are not allowed to read the expense notes of other representatives.
                Accountants may read the expense reports, but not edit them.
                Administrators have all permissions on these files.
                All other users are not allowed to open these files.
            </td>
        </tr>
        <tr>
            <th scope="row" colspan="3">Where do you turn inheritance on or off?</th>
        </tr>
        <tr>
            <td colspan="3"></td>
        </tr>
        <tr>
            <th scope="row" colspan="3">What permissions do you give to folders and files?</th>
        </tr>
        <tr>
            <td colspan="3"></td>
        </tr>
        </tbody>
    </table>

    <h3>2.2 Adjust the permissions of the folders and files</h3>

    <p>
        You will have to turn off inheritance in the right places and adjust permissions. Test via the user accounts
        whether the permissions work or not. You can use the following demo files as an aid:
    </p>

    <p>
        Note: there are several possible combinations of permissions to solve this. The intention is to use the most
        efficient combination of permissions to create a solution. We do not want to add unnecessary or useless
        permissions to files and folders.
    </p>
</x-learn-windows-layout>
