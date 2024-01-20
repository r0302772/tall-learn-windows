<div>
    <h3>1.1.2 Structure of the Registry</h3>

    <p>The registry is split up into two parts:</p>
    <ul>
        <li><strong>Settings that will be the same for every user working on the same machine
                (HKEY_LOCAL_MACHINE)</strong></li>
        <li><strong>Settings that can change for every single user (HKEY_USERS)</strong>: This part contains default
            settings that you get when you log on to the system for the first time. These settings will then be stored
            for every single user so that each user can choose his or her user environment.
        </li>
    </ul>

    <img src="/assets/img/windows_security_basics/windows_components/structure_of_the_registry.png" alt="" title="">

    <p>Additional folders link to specific areas within either of the two registry parts that are frequently
        accessed:</p>
    <ul>
        <li><strong>HKEY_CURRENT_USER</strong>: Links to HKEY_USERS\SID number. This section contains specific user
            settings for a particular user. Users have unique numbers called Security Identifier Descriptor (SID)
            numbers. Settings such as OneDrive, printer preferences, and keyboard layouts are stored here.
        </li>
        <li><strong>HKEY_CURRENT_CONFIG</strong>: Linked to HKEY_LOCAL_MACHINE\SYSTEM. System settings such as network
            IP, network settings, hardware, and service settings are stored here.
        </li>
        <li><strong>HKEY_CLASSES_ROOT</strong>: Linked to HKEY_LOCAL_MACHINE\SOFTWARE. Applications that are installed
            will have their settings stored here.
        </li>
    </ul>

    <p>Example: "In which locations can we find keyboard layout settings?"</p>
    <ul>
        <li>When you start your system, the logon window uses the keyboard layout stored in HKEY_LOCAL_MACHINE. It is
            the same layout that all users will use, and they can't add or remove keyboard layouts.
        </li>
        <li>The first time you log on, you create a new section in HKEY_USERS with the same number as your unique SID
            number. This section gets a copy of all settings stored in HKEY_USERS\DEFAULT, including the keyboard layout
            setting.
        </li>
        <li>Once the keyboard setting is in your registry section, you can add keyboard layouts for your own use. These
            changes won't affect the default or other users.
        </li>
    </ul>

    <p>
        Consider this: "Imagine that you choose a Qwerty layout during the installation of Windows, and you want to
        correct this for all users." How would you go about this? Since keyboard layout settings are stored in three
        locations, it might be more complicated than it seems at first glance.
    </p>
</div>
