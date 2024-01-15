<div>
    <h3 class="text-xl">1.1.b. Use of PowerShell 7.0</h3>

    <p>We also consulted internet sources to investigate the use of PowerShell on different operating systems. These
        were the conclusions:</p>

    <blockquote>
        <p>“PowerShell Core usage has grown significantly in the last two years. In particular, the bulk of our growth
            has come from Linux usage, an encouraging statistic given our investment in making PowerShell viable
            cross-platform. This chart represents the number of times pwsh.exe (or just pwsh on Linux/macOS) was started
            (unless telemetry was disabled).</p>
    </blockquote>
    <div>
        <img src="/storage/img/windows_powershell/introduction/use_of_powershell_7.0.png" alt="" title="">
    </div>
    <blockquote>
        <p>However, we also can clearly see that our Windows usage has not been growing as significantly, surprising
            given that PowerShell was popularized on the Windows platform. We believe that this could be occurring
            because existing Windows PowerShell users have existing automation that is incompatible with PowerShell Core
            because of unsupported modules, assemblies, and APIs. These folks are unable to take advantage of PowerShell
            Core’s new features, increased performance, and bug fixes. To address this, we are renewing our efforts
            towards a full replacement of Windows PowerShell 5.1 with our next release.</p>

        <p>This means that Windows PowerShell and PowerShell Core users will be able to use the same version of
            PowerShell to automate across Windows, Linux, and macOS and on Windows, and PowerShell 7 users will have a
            very high level of compatibility with Windows PowerShell modules they rely on today.” (<a
                href="https://devblogs.microsoft.com/powershell/the-next-release-of-powershell-powershell-7/"
                target="_blank">source</a>)</p>
    </blockquote>
</div>
