<div>
    <h2>1.1 The Registry</h2>

    <p>
        On your Windows Client and Server computer, you are running operating system components, tools, and software.
        All these items have their own configurations. The goal is to avoid conflicts between the configurations of
        different applications while having a centralized location to store and manage all this information. This
        centralized approach facilitates protection, backup, restoration, and the ability to locate configuration
        components.
    </p>

    <p>
        Between Windows 95 and Windows XP, the preferred choice was to use one centralized database to store the
        configuration of the entire operating system and the software running on it. Since Windows XP, this centralized
        approach has been extended. The Universal App philosophy now allows us to store configurations in XML files or
        JSON files. The advantage is that it won't change or affect your registry. However, the disadvantage is that we
        end up with more decentralized information on our system, making it harder to back up all settings in one go.
    </p>

    <p>
        Now, let's take a look at how we can open the registry and explore its structure.
    </p>

    @include('windows_security_basics.windows_components.the_registry.opening-the-registry')
    @include('windows_security_basics.windows_components.the_registry.structure-of-the-registry')
    @include('windows_security_basics.windows_components.the_registry.backup-and-restore-the-registry')
    @include('windows_security_basics.windows_components.the_registry.registry-permissions')
</div>
