<x-learn-windows-layout>
    <x-slot name="description">Exercise: Sharing ownership</x-slot>
    <x-slot name="title">Exercise: Sharing ownership</x-slot>

    <h2>1 Preparation</h2>

    <p>
        Make sure that UAC is off. Use powershell to check whether UAC is turned off (you have normally already done
        this in the previous exercise)
    </p>

    <p>
        If UAC is on, and you do not use authenticated users, the administrator will have problems interpreting and
        granting permissions.
    </p>

    <p>PowerShell command:</p>

    <h2>2 Create users</h2>

    <p>Create the following users with a PowerShell command:</p>

    <img src="/assets/img/exercises/sharing_ownership/sharing_ownership_1.png" alt="" title="">

    <p>
        Both users are created on a Windows 10 device that is a member of a workgroup. Both users are only members of
        the group "users" (if you double-click on the users and use the "groups" tab to view the properties of the
        users)
    </p>

    <p>
        If necessary, check the theory on implicit and explicit groups.
        Check if the new users are a member of the “users” group.
    </p>

    <p>PowerShell command:</p>

    <h2>3 Create folders</h2>

    <p>
        Create the following folder structure (with the administrator user account): Use powershell commands to create
        the folders and the files:
    </p>

    <img src="/assets/img/exercises/sharing_ownership/sharing_ownership_2.png" alt="" title="">

    <p>PowerShell command:</p>

    <h2>4 Create files</h2>

    <p>
        In the root of the C: drive is the folder PR.
        The folder "PR" contains 3 subfolders: "budget", "offer", "templates".
    </p>
    <ul>
        <li>In the folder "budget" is the file "advertisingbudget.txt"</li>
        <li>In the folder "quotes" is the file "quote123.txt"</li>
        <li>In the folder "templates" is the file "wordtemplate.dotx"</li>
    </ul>

    <p>PowerShell command:</p>

    <h2>5 Security</h2>

    <p>The following security must be placed on the folders:</p>

    <ul>
        <li>The folder "<strong>PR</strong>" is readable by all users. On the folder "PR" all administrators have all
            ntfs permissions
        </li>
        <li>The folder <strong>"templates" can be read by all users.</strong></li>
        <li>In the "<strong>templates</strong>" folder only administrators may read and change the content of files.
            Johan_Marketing and Peter_Sales are
            <strong>only allowed to read and copy</strong> the templates in this folder, <strong>but not to change
                them.</strong></li>
        <li>In the <strong>"BUDGET" folder</strong> the administrators have all ntfs permissions. The users have no
            access to the "BUDGET" folder. On the "BUDGET" folder Johan_Marketing has read and edit permissions. On the
            "BUDGET" folder, Peter_sales only has read rights. The same rights apply to the files that are in the BUDGET
            folder.
        </li>
        <li>In the <strong>"quotes" folder</strong>, only one admin account (the account you are working with now) has
            all ntfs permissions. All other administrators have NO permissions on this folder. All other users have no
            access to this folder. On the "quotes" folder Johan_marketing only has read permissions. Peter_Sales has
            both read and write permissions on the "quotes" folder. The same permissions are given to the files in the
            folder "quotes”
        </li>
    </ul>

    <p>
        Take inheritance into account. Use generic combinations as much as possible. In situations where generic
        combinations are not enough, you can make your own combination of permissions. Avoid deny permissions.
    </p>

    <p>
        CREATE AN OVERVIEW OF THE PERMISSIONS. This will help you make the right choices before you start configuring
        permissions. On the next page there is already a table you can use. <strong>In that table you can also put the
            screenshots with the ntfs permissions. We can use this to give you feedback on your solution.</strong>
    </p>

    <table>
        <thead>
        <tr>
            <th>Folder structure</th>
            <th>Permissions</th>
            <th>Owner</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">C:\PR</th>
            <td>(Describe the permissions you need here …)</td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">PERMISSIONS ON FILES IN...</th>
            <td>(Drop a screenshot of the advanced view with an overview of all permissions.)</td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">C:\PR\BUDGET</th>
            <td>(Describe the permissions you need here …)</td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">PERMISSIONS ON FILES IN...</th>
            <td>(Drop a screenshot of the advanced view with an overview of all permissions.)</td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">C:\PR\QUOTES</th>
            <td>(Describe the permissions you need here …)</td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">PERMISSIONS ON FILES IN...</th>
            <td>(Drop a screenshot of the advanced view with an overview of all permissions.)</td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">C:\PR\TEMPLATES</th>
            <td>(Describe the permissions you need here …)</td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">PERMISSIONS ON FILES IN...</th>
            <td>(Drop a screenshot of the advanced view with an overview of all permissions.)</td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <p>
        The "<strong>PR</strong>" folder must be able to be <strong>shared</strong> with other users over the network.
        Users who connect to the folder
        over the network should be granted the same permissions as when they work locally on the device.
    </p>

    <p>How do you share the folder over the network?</p>

    <p>What permissions do you use to enter share security? Screenshot:</p>

    <p>How do you connect over the network to the PR folder?</p>

    <p>How to create a shared folder with PowerShell?</p>

    <p>
        NEVER USE !!!!!!!!!!!!!!!!! THE SHARING WIZARD. THIS WIZARD CHANGES BOTH YOUR SHARE LEVEL PERMISSIONS AND YOUR
        NTFS PERMISSIONS!!!!
    </p>

    <h2>6 Check permissions</h2>

    <p>Check that the effective permissions for these users are correct.</p>

    <p>
        user "Johan_marketing" must become owner of the file "advertisingbudget.txt". We don't want to put user
        Johan_marketing in another group. Give <strong>2 ways</strong> for Johan_marketing to become owner himself or with the help of
        someone else.
    </p>

    <p>Solution 1:</p>
    <p>Solution 2:</p>

    <h2>Ownership: Repetition</h2>

    <table>
        <thead>
        <tr>
            <th>Ownership <strong>property</strong></th>
            <th>Take ownership <strong>RIGHT</strong></th>
            <th>Take ownership <strong>PERMISSION</strong></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>= "change permission"</td>
            <td>Group Policy</td>
            <td>Part of the full control permission</td>
        </tr>
        <tr>
            <td>
                Can change permissions as long as he/she is owner. <br>
                Regardless of the permissions on the file and folder, the user can change the permissions <br>
                Can change permissions and not necessarily ownership (see third column)
            </td>
            <td>
                Can take ownership. <br>
                Can give ownership.
            </td>
            <td>
                Can take ownership. <br>
                Can not give ownership.
            </td>
        </tr>
        </tbody>
    </table>

</x-learn-windows-layout>
