<div>
    <div>
        <h3 class="text-xl">1.1.a. PowerShell Development:</h3>

        <p><u>The ultimate goal:</u> <b>"To be able to configure everything (local and remote) via a command shell."</b>
        </p>

        <p>Unlike Unix programs, where the CLI commands form the basis of the GUI, <b>at Microsoft the GUI is the
                essence</b> and it is <u>difficult to</u> create <u>a matching textual command set.</u></p>

        <p>It became clear to Microsoft that both users and system administrators wanted a comprehensive textual shell
            to perform all kinds of tasks. In addition, system administrators should be able to execute the same
            commands on servers and client PCs. Very often, they also need to be able to do this remotely.</p>

        <p>In the summer of 2001, <b>Jeffrey Snover</b> (Microsoft) started studying .NET and started a <b>project</b>
            called <b>Monad</b>. The code name "Monad" comes from Gottfied Leibniz, a philosopher who stated that
            <u>the universe consists of elements called Monads and exist in a pre-programmed harmony.</u> A Monad, the
            name comes from the Greek, means "one, alone and unique," is a unique unity.
        </p>

        <p>Powershell resembles the philosophy of Leibniz in the sense that <b>Powershell creates order in the complex
                tasks in
                the
                form of a series of components (cmdlets)</b>. The shell itself is written in C#.
        </p>

        <p>The latest version of Windows Powershell still uses C# and is based on <b>.NET CORE</b>. This allows us to
            use
            Powershell on
            both Linux, MAC, Windows client and server. In addition, it has become open source and is available on
            GitHub.
            (link: <a href="https://github.com/PowerShell/PowerShell">https://github.com/PowerShell/PowerShell</a>)</p>
    </div>

    <div>
        <img src="/storage/img/windows_powershell/introduction/powershell_development.png" alt="" title="">
    </div>

    <div>
        <h4 class="text-lg underline font-bold">What's .NET?</h4>

        <p>.NET (dotNET) is <u>an application framework that ensures the collaboration of applications and libraries
                (classes,
                functions,...) written in different programming languages.</u></p>

        <p>Programs extract necessary information from these libraries (classes, functions, ...). In other words, the
            programs
            need these libraries. They can't do without each other. That's why every Windows user needs the Microsoft
            .NET
            Framework.</p>

        <ul>
            <li>.NET was developed by Microsoft.</li>
            <li>.NET is only available for Microsoft applications.</li>
            <li>It consists of a large number of classes that a developer can use when creating programs.</li>
        </ul>

        <p><b>Windows Powershell is an object-based Shell built on top of the Microsoft .NET framework.</b> This allows
            it to
            directly
            use the extensive libraries of the .NET Framework. This allows everyone to write their own Powershell
            cmdlets.
            Using
            C# code and .NET classes you can create your own cmdlets and extend Powershell.</p>
    </div>

    <div>
        <h4 class="text-lg underline font-bold">What's .NET CORE?</h4>

        <p>.NET Core is the first version of the .NET Framework that is open source and multi-platform.</p>

        <ul>
            <li>It allows you to use the same editor (Visual Studio Code Editor) on Windows, MAC, and Linux.</li>
            <li>The .NET Core framework itself is also cross-platform.</li>
            <li>You can run it on MAC, Linux, and Windows.</li>
        </ul>

        <p>If you build cmdlets with .NET Core classes, your cmdlets will also be cross-platform. In practice, this
            means
            that
            we can now write an ASP.NET web application in C sharp and that the application can run on both a Linux and
            Windows
            web server. Or we can write a windows desktop application in C sharp and run that same application on
            Linux.</p>

        <p>In this way, we see more and more that the walls between the different operating systems are
            disappearing.</p>
    </div>

    <div>
        <h4 class="text-lg underline font-bold">Powershell Versions:</h4>

        <p>Windows Powershell 1.0 was launched in 2006 for Windows XP SP2 and SP (service pack3), Windows Server 2003,
            and
            Windows Vista. For Windows Server 2008, it was an optional component.</p>

        <p>Windows Powershell 2.0 was launched in 2009 and runs on all recent versions of Windows: Windows 8, Windows 7,
            Windows
            Vista with SP1 or SP2, Windows XP with SP3, ...</p>

        <p>Windows Powershell 3.0 was launched in December 2011. It is integrated with Windows 8 and Windows Server
            2012. It
            is
            available as a separate installation for Windows 7 with Service Pack 1, for Windows Server 2008 with Service
            Pack 1,
            and for Windows Server 2008 R2 with Service Pack 1.</p>

        <p>In Nov. 2013 Windows Powershell 4.0 was developed. This version of Powershell is integrated into Windows 8.1
            and
            Windows Server 2012 R2.</p>

        <p>Meanwhile, <b>version 5</b> is already on the market. This version is integrated into <b>Windows 10</b> and
            Windows Server
            2016.</p>

        <p>And the successor of Powershell (version 6.0) is based on .NET Core. This means that Powershell is now open
            source
            and we can now use it on Linux and Windows. Conversely, the same had already happened with BASH commands,
            which
            we
            can also run on Windows.</p>

        <p>At the launch of Powershell 6.0, it was also decided to create the code Open Source. Modifications, updates,
            and
            documentation can, therefore, be found on Github. In the meantime, a whole community of programmers and
            companies
            who have written extra cmdlets for their products has also been created there.</p>

        <p>PowerShell 7.1.1 is the latest update made available for general use in early 2021.</p>

        <p>PowerShell 7 currently supports the following operating systems on x64, including:</p>

        <ul>
            <li>Windows 8.1, and 10</li>
            <li>Windows Server 2012, 2012 R2, 2016, and 2019</li>
            <li>macOS 10.13+</li>
            <li>Red Hat Enterprise Linux (RHEL) / CentOS 7</li>
            <li>Fedora 30+</li>
            <li>Debian 9</li>
            <li>Ubuntu LTS 16.04+</li>
            <li>Alpine Linux 3.8+</li>
        </ul>

        <p>Additionally, PowerShell 7.0 supports ARM32 and ARM64 flavors of Debian, Ubuntu, and ARM64 Alpine Linux.</p>
    </div>
</div>
