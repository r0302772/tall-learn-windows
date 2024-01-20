<div>
    <h3>1.1.1 Opening the Registry</h3>

    <p>You can open the registry with several tools, one of which is <code>regedit.exe</code>.</p>

    <p>
        If you type in <code>regedit.exe</code> in your Start menu or the command prompt, the registry editor will open.
    </p>

    <img src="/assets/img/windows_security_basics/windows_components/opening_the_registry_1.png" alt="" title="">

    <p>
        <strong>Disclaimer:</strong> Be careful when you open and edit the registry. Making wrong modifications could
        render your operating system or software inoperative.
    </p>

    <p>
        When you look at the information visible in the registry editor, it looks more like a file system than a
        database. The hierarchical structure makes it easy to search for settings. Behind this hierarchical structure,
        you will find a number of files. There is no one single file in which you will find all the settings contained
        in the registry. So, we have several separate files, but all visible from within one location. All settings are
        accessible and structured in the same way, allowing us to make changes or look for the values of settings.
    </p>

    <p>
        Remember that this is the most low-level tool in which we can work. Normally, we will rely on other tools to
        make changes in a safer and more friendly way. For troubleshooting reasons, we might use this low-level tool if
        and when we are certain that we are making the right changes.
    </p>

    <p>Other tools that allow us to change the registry settings are:</p>
    <ul>
        <li><strong>Control Panel:</strong> This interface only shows us the settings necessary for day-to-day
            management. It provides a limited view of the registry database, and it is easy to make changes.
        </li>
        <li><strong>Snap-ins in the Management Console:</strong> The management console is an advanced version of the
            control panel. You can open it by running <code>mmc.exe</code>. Within the Management console, you can add
            snap-ins. These snap-ins are like the building blocks found in the Control Panel. There are advanced tools
            for user management, disk management, services, auditing, etc.
        </li>
        <li><strong>Powershell and Powershell providers:</strong> You can use Powershell and Powershell providers to
            access the registry. To open the registry, use the name of the section you want to access. You can use
            cmdlets like <code>get-childitem</code>, <code>new-item</code>, etc., similar to working with files and
            folders.
        </li>
    </ul>

    <p>Here is a quick example using "Event Viewer":</p>
    <ol>
        <li>Open <code>mmc.exe</code> (you can use the "start" and "run" menu for this).</li>
        <li>Enter <code>mmc.exe</code>.</li>
    </ol>

    <img src="/assets/img/windows_security_basics/windows_components/opening_the_registry_2.png" alt="" title="">

    <ol>
        <li>This empty window will open. Within this window, you can add the snap-ins of your choice by selecting "file"
            and "add/remove snap-in".
        </li>
        <li>In the list of available snap-ins, select "Event Viewer". Select the snap-in and press the "add" button to
            move it to the right-hand side of the interface.
        </li>
    </ol>

    <img src="/assets/img/windows_security_basics/windows_components/opening_the_registry_3.png" alt="" title="">

    <ol>
        <li>A popup will ask you if you want to look at the log files of your own system or on the ones located on a
            remote system. In our example, we will choose "local computer".
        </li>
    </ol>

    <img src="/assets/img/windows_security_basics/windows_components/opening_the_registry_4.png" alt="" title="">

    <ol>
        <li>You can now press "ok".</li>
        <li>In real life, we would add and combine all the snap-ins that we need to configure or modify our system.</li>
    </ol>

    <img src="/assets/img/windows_security_basics/windows_components/opening_the_registry_5.png" alt="" title="">

    <ol>
        <li>This is how "Event Viewer" will look in your interface.</li>
    </ol>

    <img src="/assets/img/windows_security_basics/windows_components/opening_the_registry_6.png" alt="" title="">

    <ol>
        <li>If you use the same snap-ins regularly, you can save your console file on the desktop. That will allow you
            to open up the management console, and the snap-ins of your choice will already be present.
        </li>
    </ol>

    <p>
        We now know which tools we can use to access the settings of our system. We have a choice of tools. Depending on
        what we want to change and how user-friendly we want to do this, we can make our choice. In the next step, we
        will analyze the structure of the registry.
    </p>
</div>
