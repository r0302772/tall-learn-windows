<div>
    <h2>5 Network environment virtual machines</h2>

    <p>
        Let's have a look at the network settings within Virtual Box. These are the network settings we use in our
        courses:
    </p>

    <ul>
        <li>NAT (default setting in Virtual Box)</li>
        <li>Internal</li>
        <li>Network bridged</li>
    </ul>

    <h3>5.1 NAT</h3>
    <p>This is the default setting for Virtual Box. What are the features?</p>
    <ul>
        <li>Each virtual machine gets the same IP address</li>
        <li>Because each VM has the same address, VMs cannot connect to each other.</li>
        <li>VMs do have internet access.</li>
    </ul>

    <h3>5.2 Internal</h3>
    <p>What are the characteristics?</p>
    <ul>
        <li>Each virtual machine gets its own virtual network card</li>
        <li>Each virtual network card can be connected to other vm's that have the same network settings (provided that
            IP settings are entered correctly)
        </li>
        <li>VMs do not have internet access and do not have access to the LAN network that your host system is connected
            to.
        </li>
    </ul>

    <h3>5.3 Network Bridged</h3>
    <p>What are the characteristics?</p>
    <ul>
        <li>Each virtual machine gets its own virtual network card</li>
        <li>Each virtual network card can be connected to other vm's that have the same network settings (provided that
            IP settings are entered correctly)
        </li>
        <li>VMs do have internet access and can access the LAN network that your host system is connected to.</li>
        <li>Since the VMs are connected to the LAN network of your host system they can also request a DHCP address.
        </li>
        <li>All VMs are then part of your LAN Network and can also be contacted from your LAN network.</li>
        <li>There is one important condition: in the Thomas More network, the wifi network is secured in such a way that
            each laptop can only get 1 ip address from the dhcp server. If you use this setting on your laptop, then you
            will not receive an IP address and you will not be able to enjoy all of the benefits that we have listed
            here. In the majority of classes on the Thomas More network, the desktop PCs on the network are protected in
            the same way.
        </li>
        <li>There are a number of classes in the Thomas More network where we have disabled this security for the wired
            network.
        </li>
        <li>At home, you will be able to use this setting in your own network without any problems. With the same
            setting that works at home, you will suddenly find that your vm's at school no longer work. <strong>Pay
                attention to this, so you don't needlessly search for solutions or problems.</strong>
        </li>
    </ul>

    <p>
        To be sure, check again that all virtual machines have the same network settings. Otherwise, the virtual
        machines will not be able to connect to each other. You need to go through these steps for <strong>each</strong>
        virtual machine to do the check.
    </p>
    <ul>
        <li>Right click and choose "Settings".</li>
        <li>Go to "Network".</li>
        <li>Set the Adapter 1 to "Associated with Internal Network". (You will leave the name "intnet" for all virtual
            machines)
        </li>
        <img src="/assets/img/config/devops_and_security/network_environment_virtual_machines/network_environment_virtual_machines.png" alt="" title="">
        <li>Do this for each virtual machine.</li>
        <li>Click on "Ok".</li>
    </ul>
</div>
