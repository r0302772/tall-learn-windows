<x-learn-windows-layout>
    <x-slot name="description">Exercise: Registry</x-slot>
    <x-slot name="title">Exercise: Registry</x-slot>

    <p>This is the location of the registry files:</p>
    <p>
        The registry files (hives) are located at <code>Windows\System32\Config</code> folder. The hives are always in
        use when Windows is running. So, you’ll need a specialized program that uses Windows API or volume shadow to
        back up the hives.
    </p>

    <img src="/assets/img/exercises/registry/exercise_registry_1.png" alt="" title="">

    <a href="https://www.winhelponline.com/blog/automatically-backup-registry-hives-windows-10/">(source)</a>

    <p>
        However, you can enable periodic registry hive backups (in the Regback folder) by creating a new registry value.
    </p>
    <p>Start the Registry Editor (<code>regedit.exe</code>) and go to the following key:</p>

    <pre>HKEY_LOCAL_MACHINE\System\CurrentControlSet\Control\Session Manager\Configuration Manager</pre>

    <img src="/assets/img/exercises/registry/exercise_registry_2.png" alt="" title="">

    <ol>
        <li>Right-click on the “configuration manager” key and create a DWORD (32-bit) value named <code>EnablePeriodicBackup</code>
        </li>
    </ol>

    <img src="/assets/img/exercises/registry/exercise_registry_3.png" alt="" title="">

    <ol>
        <li>Double-click <code>EnablePeriodicBackup</code> and set its data to “1” (hexadecimal)</li>
    </ol>

    <p>3. How can we make the same change with Powershell?</p>
    <p>(tip: use <code>psdrive</code>, or use <code>Get-ChildItem</code> and <code>new-item</code>)</p>

{{--
    <pre><code>New-ItemProperty -Path "HKLM:\System\CurrentControlSet\Control\Session Manager\Configuration Manager" -Name EnablePeriodicBackup -Value 1 -PropertyType DWORD</code></pre>
--}}

    {{--<x-input/>--}}

    <p>How can we query the registry with Powershell to see if the value has been changed?</p>

{{--
    <pre><code>Get-ItemProperty -Path 'HKLM:\System\CurrentControlSet\Control\Session Manager\Configuration Manager' -Name 'EnablePeriodicBackup'</code></pre>
--}}

    {{--<x-input/>--}}

    <p>4. Exit the Registry Editor.</p>
    <p>5. <code>HKLM</code> settings are only read at boot. So you will need to reboot your system.</p>
    <p>How can we do this with Powershell?</p>

{{--
    <pre><code>Restart-Computer</code></pre>
--}}

    {{--<x-input/>--}}

    <p>
        See article: <a
            href="https://support.microsoft.com/en-in/help/4509719/the-system-registry-is-no-longer-backed-up-to-the-regback-folder-start">The
            system registry is no longer backed up to the RegBack folder starting in Windows 10 version
            1803</a> for more information.
    </p>

    <p>
        After you enable the above registry setting, restart Windows. Windows will back up the registry to the <code>C:\Windows\System32\Config\RegBack</code>
        folder once in 10 days, and when the
        <a href="https://www.winhelponline.com/blog/automatic-maintenance-disable-schedule-windows-8-10/">Automatic
            Maintenance</a> kicks in — i.e. if the user leaves the system idle
        for a considerable time. When Automatic Maintenance starts, it invokes the <code>RegIdleBackup</code> task which
        will update the RegBack folder.
    </p>

    <p>
        You may also launch Task Scheduler, right-click on the Registry Idle task and click Run to back up registry
        hives
        on demand. The <code>RegIdleBackup</code> task is located in the Scheduled Task Library, under the <code>Microsoft\Windows\Registry</code>
        folder.
    </p>

    <ol>
        <li>Open the “task scheduler”.</li>
    </ol>

    <img src="/assets/img/exercises/registry/exercise_registry_4.png" alt="" title="">

    <ol>
        <li>Open the “windows” section and locate the entry “registry”</li>
    </ol>

    <img src="/assets/img/exercises/registry/exercise_registry_5.png" alt="" title="">

    <ol>
        <li>Manually start the task by right-clicking on “RegIdleBackup” and choosing “run”.</li>
    </ol>

    <img src="/assets/img/exercises/registry/exercise_registry_6.png" alt="" title="">

    <p>You will see the status changing to “running”:</p>

    <img src="/assets/img/exercises/registry/exercise_registry_7.png" alt="" title="">

    <p>Run RegIdleBackup task Daily or Weekly</p>

    <p>
        One important thing to note is that the <code>RegIdleBackup</code> task automatically runs only once in 10 days.
        Additional triggers you set for the task are ignored.
    </p>

    <p>
        If you need to back up the registry on a daily basis or whenever needed, you can open Task Scheduler to run the
        task manually, on-demand. Alternately, run the following command-line elevated.
    </p>

    <pre>schtasks /run /i /tn "\Microsoft\Windows\Registry\RegIdleBackup"</pre>

    <img src="/assets/img/exercises/registry/exercise_registry_8.png" alt="" title="">

    <p>Finally, check the “regbackup” folder to see if changes were made.</p>

    <p>An alternative method is with the use of tools:</p>
    <p>
        You can also try this example: <a
            href="https://www.winhelponline.com/blog/automatically-backup-registry-hives-windows-10/#regbak_utility">How
            to Automatically Back up the Complete Registry in Windows 10 -
            Winhelponline</a>
    </p>


</x-learn-windows-layout>
