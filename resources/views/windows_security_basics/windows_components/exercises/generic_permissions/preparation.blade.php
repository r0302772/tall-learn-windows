<div>
    <h2>1 Preparation: Disable UAC</h2>

    <p>Before you start the exercise, check UAC settings:</p>

    <ul>
        <li>Open PowerShell and check the status of UAC.</li>
        <li>Check your status of UAC. Enter the command:</li>
    </ul>

    <pre><code>Get-ItemProperty -Path HKLM:\Software\Microsoft\Windows\CurrentVersion\policies\system -Name EnableLUA</code></pre>

    <p>If the setting in the registry is "1", then UAC is on.</p>

    <p>
        If UAC is <strong>off</strong>, you don't need to change anything. If UAC is <strong>on</strong>, then in the
        next step, you are going to turn it
        off.
    </p>

    <p>
        For NTFS exercises, it is important that you have a clear picture of the final permissions someone has on a
        folder or file. If UAC is <strong>off</strong>, it can cause confusion because you will not always be treated as
        an
        "administrator". If UAC is <strong>on</strong>, you will also notice that your system adds permissions if you do
        not take into
        account the consequences of UAC in your choice of permissions. Usually, you only notice afterward that this has
        happened, and that causes even more confusion.
    </p>

    <p>
        To avoid this kind of complex situation, we will first try to teach you how NTFS works without UAC. Once you
        have mastered all the basics, then at the end we can turn UAC back on and apply the same basics in a situation
        where UAC is on by default. In reality, we leave UAC on as much as possible for security reasons.
    </p>

    <p><strong>If UAC is still on</strong>, use this command and turn <strong>off</strong> UAC:</p>

    <ol>
        <li>Open PowerShell with "run as admin" (you must be a full administrator to make this adjustment in the
            registry).
        </li>
        <li>Run the following command:</li>
    </ol>

    <pre><code>Set-ItemProperty -Path HKLM:\Software\Microsoft\Windows\CurrentVersion\policies\system -Name EnableLUA -Value 0</code></pre>

    <img src="/assets/img/exercises/generic_permissions/preparation_1.png" alt="" title="">

    <p>A popup will appear indicating that you need to reboot the PC.</p>

    <ol>
        <li>Run the command:</li>
    </ol>

    <pre><code>Restart-Computer</code></pre>

    <p>After the reboot, UAC is off. If you open the command prompt or PowerShell, you will notice that they are
        automatically opened as administrator.</p>

    <img src="/assets/img/exercises/generic_permissions/preparation_2.png" alt="" title="">
</div>
