<x-learn-windows-layout>
    <x-slot name="description">Exercise: File and folder permissions and disable inheritance</x-slot>
    <x-slot name="title">Exercise: File and folder permissions and disable inheritance</x-slot>

    <h2>1 Preparation:</h2>

    <p>Make sure that UAC is turned off on your device. (see previous lessons)</p>

    <p>Make sure you are logged in as administrator.</p>

    <h2>2 Situation:</h2>
    <p>We are working with this test environment:</p>

    <pre>
c:\expenses
c:\expenses\ExpenseReport_Sales1.txt
</pre>

    <p>In the C - drive create this folder and this file:</p>

    <pre>
c:\expenses
c:\expenses\ExpenseReport_Sales1.txt
</pre>

    <p>
        This test environment is created with the administrator's account. The administrator is the owner of all these
        files and folders.
    </p>

    <h3>2.1 These users have access to these file(s) and folders.</h3>
    <p>accountant<br>SalesRep</p>

    <p>
        Create both users. Neither user is a member of the administrators group. However, they are in the default group
        'users'.
    </p>

    <h3>
        2.2 Use the GUI to change the permissions. Change the permissions of the folder and files so users can use the
        files in the following way. Use generic permissions:
    </h3>


    <p>
        user: accountant -&gt; permissions: the accountant can read but not edit the file "ExpenseReport_Sales1.txt".
    </p>
    <p>User: SalesRep permissions -&gt; the SalesRep can read and edit the file "ExpenseReport_Sales1.txt".</p>
    <p>
        users: all administrators permissions -&gt; all administrators have all permissions on the file
        "ExpenseReport_Sales1.txt".
    </p>
    <p>
        all other users permissions -&gt; all other users do not have access to the file, and are not allowed to read,
        edit, ...
    </p>

    <p>
        Adjust the permissions of the folder and the file as described. You will have to turn on inheritance in the
        right places and adjust permissions. Test via the user accounts whether the permissions work or not.
    </p>

</x-learn-windows-layout>
