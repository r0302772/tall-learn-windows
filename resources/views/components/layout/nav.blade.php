<nav class="container mx-auto p-4 flex justify-between items-center">
    <a href="{{ route('home') }}" class="underline">Home</a>
    <a href="{{ route('contact') }}" class="underline">Contact</a>

    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <div class="cursor-pointer">Powershell</div>
        </x-slot>
        <x-slot name="content">
            <x-dropdown-link href="{{ route('powershell.introduction') }}">Introduction</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.powershell-cmdlets') }}">PowerShell: Cmdlets</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.basic-cmdlets') }}">Basic cmdlets</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.cmdlets-for-files-and-folders') }}">Cmdlets for files and
                folders
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.cmdlets-network-module') }}">Cmdlets: Network module
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.working-with-apis') }}">Working with API's</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.basic-pipelining') }}">Basic pipelining</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.advanced-pipelining') }}">Advanced pipelining</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.applications-of-pipelining') }}">Applications of pipelining
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.aliases') }}">Aliases</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.powershell-profiles') }}">PowerShell Profiles</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.output-format') }}">Output Format</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.exporting-objects') }}">Exporting objects</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.input-and-output') }}">Input & output</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.pester-testing') }}">Pester testing</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.history') }}">History</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.variables') }}">Variables</x-dropdown-link>
            <x-dropdown-link href="{{ route('powershell.references') }}">References</x-dropdown-link>
        </x-slot>
    </x-dropdown>

    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <div class="cursor-pointer">Windows Security Basics</div>
        </x-slot>
        <x-slot name="content">
            <x-dropdown-link href="{{ route('windows-security-basics.windows-components') }}">Windows Components
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('windows-security-basics.ntfs-security') }}">NTFS Security</x-dropdown-link>
        </x-slot>
    </x-dropdown>

    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <div class="cursor-pointer">Windows Server</div>
        </x-slot>
        <x-slot name="content">
            <x-dropdown-link href="{{ route('windows-server.devops-and-ci-cd') }}">DevOps & CI/CD 🚀</x-dropdown-link>
            <x-dropdown-link href="{{ route('windows-server.windows-server-and-ad-ldap') }}">Windows Server & AD/LDAP
                📝
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('windows-server.devops-and-ci-cd') }}">DNS 🔎</x-dropdown-link>
            <x-dropdown-link href="{{ route('windows-server.devops-and-ci-cd') }}">IIS, HTTPS & Web security 🔐
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('windows-server.devops-and-ci-cd') }}">Teaming up for Application Security
                🌈 & Building 🔨
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('windows-server.devops-and-ci-cd') }}">Active Directory AGDLP, GPO & DSC 📜
            </x-dropdown-link>
        </x-slot>
    </x-dropdown>

    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <div class="cursor-pointer">Exercises</div>
        </x-slot>
        <x-slot name="content">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <div class="cursor-pointer text-center">Windows Components</div>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link href="{{ route('exercises.registry') }}">Registry</x-dropdown-link>
                    <x-dropdown-link href="{{ route('exercises.user-management') }}">User Management</x-dropdown-link>
                </x-slot>
            </x-dropdown>
            <div class="border-t border-gray-100"></div>
            <x-dropdown align="left" width="48">
                <x-slot name="trigger">
                    <div class="cursor-pointer text-center">NTFS</div>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link href="{{ route('exercises.generic-permissions') }}">
                        Generic Permissions
                    </x-dropdown-link>
                    <x-dropdown-link
                        href="{{ route('exercises.file-and-folder-permissions-and-disable-inheritance') }}">
                        File and folder permissions and disable inheritance
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('exercises.file-and-folder-permissions-and-inheritance') }}">
                        File and folder permissions and inheritance
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('exercises.inherited-permissions') }}">
                        Inherited permissions
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('exercises.folder-permissions-inheritance') }}">
                        Folder permissions inheritance
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('exercises.summary-exercise') }}">
                        Summary exercise
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('exercises.ownership') }}">
                        Ownership
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('exercises.sharing-ownership') }}">
                        Sharing Ownership
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('exercises.auditing-and-ownership') }}">
                        Auditing and Ownership
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('exercises.review-exercise') }}">
                        Review exercise
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </x-slot>
    </x-dropdown>

    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <div class="cursor-pointer">Config</div>
        </x-slot>
        <x-slot name="content">
            <x-dropdown-link href="{{ route('config.installing-windows-10-on-virtual-box') }}">Installing Windows 10 on
                Virtual Box
            </x-dropdown-link>
        </x-slot>
    </x-dropdown>
</nav>
