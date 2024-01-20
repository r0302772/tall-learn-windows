<x-learn-windows-layout>
    <x-slot name="description">Exercise: Summary exercise</x-slot>
    <x-slot name="title">Exercise: Summary exercise</x-slot>

    <h2>1. Curriculum</h2>
    <p>This exercise is based on the material from UNIT 2: chapters 2.1, 2.2, 2.3, 2.4</p>

    <h2>2. Scenario</h2>
    <p>
        A web design agency has created a folder structure for each web project with each client. Several employees work
        on this folder structure. Using NTFS permissions, we want to prevent employees from modifying files for which
        they are not responsible.
    </p>

    <h2>3. Test Setup</h2>

    <h3>3.1 Employees</h3>
    <table>
        <thead>
        <tr>
            <th>User</th>
            <th>Member of the Group</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Graphic designer</td>
            <td>Users</td>
        </tr>
        <tr>
            <td>webEditor</td>
            <td>Users</td>
        </tr>
        <tr>
            <td>webDeveloper</td>
            <td>Users</td>
        </tr>
        <tr>
            <td>webMaster</td>
            <td>Users, Administrators</td>
        </tr>
        </tbody>
    </table>

    <h3>3.2 Folder Structure</h3>
    <p>Log on as the user "admin" and create the following folder structure in the root of the C drive:</p>
    <pre>
C:\webProject
    \images
    \html
    \js
    \backup
</pre>

    <img src="/assets/img/exercises/summary_exercise/summary_exercise.png" alt="" title="">

    <p>You can add some txt documents to the folders to test with.</p>

    <h3>3.3 Authorization</h3>
    <p>Which users are allowed to do what?</p>

    <table>
        <thead>
        <tr>
            <th>Directory</th>
            <th>Authorizations</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>C:\webProject</td>
            <td>
                <ul>
                    <li>Graphic designer, WebEditor, and WebDeveloper: Generic Read</li>
                    <li>WebMaster and Administrator: Generic Full Control</li>
                    <li>All other users: Generic Read</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>C:\webProject\images</td>
            <td>
                <ul>
                    <li>Graphic designer: Generic Write</li>
                    <li>WebEditor and WebDeveloper: Generic Read</li>
                    <li>WebMaster: Generic Full Control</li>
                    <li>All other users: No Access</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>C:\webProject\html</td>
            <td>
                <ul>
                    <li>Graphic designer: Generic Read</li>
                    <li>WebEditor: Generic Write</li>
                    <li>WebDeveloper: No Access</li>
                    <li>WebMaster: Generic Full Control</li>
                    <li>All other users: No Access</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>C:\webProject\js</td>
            <td>
                <ul>
                    <li>Graphic designer: No Access</li>
                    <li>WebEditor: Generic Read</li>
                    <li>WebDeveloper: Generic Write</li>
                    <li>WebMaster: Generic Full Control</li>
                    <li>All other users: No Access</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>C:\webProject\backup</td>
            <td>
                <ul>
                    <li>Graphic designer: No Access</li>
                    <li>WebEditor: Generic Read</li>
                    <li>WebDeveloper: No Access</li>
                    <li>WebMaster: Generic Full Control</li>
                    <li>All other users: No Access</li>
                </ul>
            </td>
        </tr>
        </tbody>
    </table>

    <h3>3.4 Task: complete the table</h3>

    <p>
        Complete the table below. Note who has generic read, generic write, generic full control and no access to which
        folder.
    </p>

    <table>
        <thead>
        <tr>
            <th></th>
            <th>Graphic Designer</th>
            <th>WebEditor</th>
            <th>WebDeveloper</th>
            <th>Webmaster</th>
            <th>Users</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Webproject</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">Images</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">Html</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">Js</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">Back up</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <h3>3.5 Command: Change Permissions</h3>
    <p>Tips:</p>
    <ul>
        <li>Decide which folder will be a new parent.</li>
        <li>Don't forget that you can pass permissions to folders, files, or not.</li>
        <li>There are several possible solutions to this task.</li>
        <li>Secure all folders.</li>
        <li>
            You can document your answer by taking a screenshot of the permissions for each folder. This interface gives
            you the best overview.
        </li>
    </ul>

    <h3>3.6 Command: Backup with PowerShell</h3>
    <p>Create a PowerShell command or pipeline.</p>
    <p>
        This command selects all files that have been modified or created in the last week (in images, html, and js) and
        copies them to the "backup" folder.
    </p>
</x-learn-windows-layout>
