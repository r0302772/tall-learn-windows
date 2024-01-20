<div>
    <h2>2.8 Auditing</h2>

    <p>
        Even when we set up permissions correctly, we want to keep track of what happened when in certain cases. It
        usually comes down to either of these two situations:
    </p>

    <ul>
        <li><strong>Failure attempts:</strong> People who have insufficient privileges try to do things that are
            impossible due to NTFS restrictions. Every failed attempt is of interest to us, even though the attempt was
            unsuccessful.
        </li>
        <li><strong>Successful attempts:</strong> People have the necessary rights to perform an operation can also be
            tracked. On important data, it is sometimes necessary that we know who did what and when, even though they
            are not doing anything wrong. For example, an administrator has the right to delete log files, but even
            then, we want to know which administrator did this and when. Log files contain highly sensitive information
            and bring a degree of responsibility with them.
        </li>
    </ul>

    <p>
        File and folder auditing is supported by NTFS but is not activated by default for performance reasons. Once it
        is activated, we can decide what we want to monitor on a file and folder basis individually.
    </p>

    <h3>2.8.1 How do we activate auditing?</h3>

    <p>
        In order to activate "auditing," we need to make a registry change to HKEY_Local_Machine and reboot the system.
        How to configure and enable auditing?
    </p>

    <ol>
        <li>Open up the Management Console.</li>
        <li>Add the Group Policy snap-in for the local computer.</li>
        <li>Go to: "local computer policy > computer configuration > windows settings > security settings > local
            policies > audit policy".
        </li>
        <img
            src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/auditing_1.png"
            alt="" title="">
        <li>Enable "success" and "failure" on the item "audit object access".</li>
        <img
            src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/auditing_2.png"
            alt="" title="">
        <img
            src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/auditing_3.png"
            alt="" title="">
    </ol>

    <p>
        Auditing is now activated system-wide, but if we don’t specify what we want to audit and on what objects, we
        won’t see any auditing result.
    </p>

    <h3>2.8.2 NTFS auditing</h3>

    <p>
        In the next step, we can decide what events we want to audit on e.g. <code>c:\scripts\powershell\dev.ps1</code>.
        If we open up the advanced view of the permissions, you will find an "auditing" tab:
    </p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/auditing_4.png"
        alt="" title="">

    <p>
        In this example, we know that user "admin" cannot perform a write operation. He or she has insufficient NTFS
        permissions to do so. We still want to see if attempts were made. To that purpose, we have added user "admin" to
        the auditing tab, and we have checked "failure" attempts for "create files/write data" and "write attributes".
    </p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/auditing_5.png"
        alt="" title="">

    <p>These attempts will now be monitored and will be written to the "security log" in "event viewer".</p>

    <h3>2.8.3 Event viewer: security log</h3>

    <p>
        In this example, we logged on with user "admin" and we tried to open, edit, and save changes to "dev.ps1". These
        are the results of the attempt when we look at the security log:
    </p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/auditing_6.png"
        alt="" title="">

    <p>
        The event log contains an "audit failure" generated by the write attempt. You can see that user "admin"
        generated the log file entry. If we look closer into the event, we can see that notepad.exe was used to try and
        save something in dev.ps1.
    </p>

    <img
        src="/assets/img/windows_security_basics/windows_file_and_folder_security_ntfs/auditing_7.png"
        alt="" title="">
</div>
