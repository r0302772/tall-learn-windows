<div>
    <h3>7.2 The AD Promotion Wizard</h3>
    <p>First, we will install the necessary software that AD requires. Then configure and activate AD using the "promote
        to a domain controller" wizard.</p>

    <h4>7.2.1 Software Installation</h4>
    <ol>
        <li>Open "Server Manager".</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_1.png" alt="" title="">
        <li>Via "manage," you can go to "add roles and features". This wizard will appear:</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_2.png" alt="" title="">
        <li>Click on "next".</li>
        <li>Choose "role-based or feature-based" installation:</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_3.png" alt="" title="">
        <li>You will see in the next window on which device you will install something:</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_4.png" alt="" title="">
        <li>Continue by pressing "next".</li>
        <li>This will take you to the wizard where you select the option "Active Directory Domain Services":</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_5.png" alt="" title="">
        <li>When Active Directory Domain Services is selected, you will be asked if a number of features need to be
            installed. This is definitely recommended.
        </li>
        <li>Then you come to this window. You don't have to tick anything extra here, and you click on "next".</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_6.png" alt="" title="">
        <li>In this window click on "next".</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_7.png" alt="" title="">
        <li>In the next window click on "install".</li>
        <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_8.png" alt="" title="">
    </ol>

    <p>
        The newly installed role will become visible in the Server Manager, but the information bar indicates that the
        domain is not yet working. For this, we need to configure it first.
    </p>

    <p>
        At the top of "Server Manager," you will see a yellow warning symbol. This indicates that there are still some
        steps to be done to complete the installation. Click on the yellow warning icon and select "Promote this server
        to a domain controller" from the menu.
    </p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_9.png" alt="" title="">

    <p>
        Your DC will be the first domain controller in a new domain. A domain can grow to a group of domains and then we
        call it a forest.
    </p>
    <p>For that reason, we choose in the wizard the option: " add a new forest".</p>
    <p>The name of your forest is "<strong>cursusdom.tm</strong>"</p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_10.png" alt="" title="">

    <p>
        First, we need to choose the domain and forest structure. In this case, we will create a new base domain, so we
        have to choose to create a new forest.
    </p>

    <p>
        The name of this forest should be a double one anyway, with a dot in the middle. (Otherwise, the name can't be
        supported by DNS)
    </p>

    <p>In the next screen, we make the following settings:</p>

    <ul>
        <li>forest and domain functional levels: set both to Windows server 2016 (This setting has the following
            consequences: All domains which at least run windows server 2016 can join the domain you are installing now.
            If the domain functional level is set to 2008R2, domain controllers running at least 2008R2 will be able to
            join your domain as an extra domain controller. The choice you make is stricter (Windows server 2016 for
            domain and forest functional level. This means that domain controllers running older versions of windows
            server will no longer be able to replicate. Older versions of windows server we can no longer add as domain
            controller either. We can, however, add all kinds of versions of windows server as a member server in our
            networks. The setting mainly affects the domain controllers and the version we run on them).
        </li>
        <li>functionalities of the domain controller: make sure that DNS and GC are ticked.</li>
        <li>restore mode password: this must be a complex password that meets the minimum requirements of the password
            policy: choose : abc123!
        </li>
    </ul>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_11.png" alt="" title="">

    <p>
        <strong>Forest and domain functional levels indicate</strong> which operating systems may be brought into the
        domain as domain controllers. The domain functional level indicates which version of a windows server must have
        at least to be allowed to become DC.
    </p>

    <p>
        The forest functional level indicates the minimum domain functional level a domain must have to be allowed to
        join the forest.
    </p>

    <p>
        This is important for certain functionalities. For example, the recycle bin for AD objects only works in a
        Forest functional level of windows 2008 R2.
    </p>

    <p>Note that these settings can only be set up. So you should not be too keen on a high functional level.</p>

    <p><strong>As functionalities of the domain controller</strong>, we have a DNS server, global catalog</p>

    <p>The DNS server will be installed and configured automatically.</p

    <p>
        The <strong>restore mode password</strong> will only be used rarely. You will use it when you do an
        uninstallation of the domain controller and when you use the recovery console to fix boot and login problems
        (e.g., If a display driver causes your server to crash, and you can't login to install another driver, then we
        need to boot into the recovery console and change the drivers from there).
    </p>

    <p>
        In the window below, it is normal to get a yellow warning about DNS. An attempt is made to find a second DNS
        server as backup, but there is none. We can't fix that at the moment either. That's why we ignore this
        remark/warning and press "next". (The option "create DNS delegation" should not be clicked on)
    </p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_12.png" alt="" title="">

    <p>In the next window, you will see the shortened name of your windows domain: "cursusdom"</p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_13.png" alt="" title="">

    <p>The Netbios name is chosen based on the domain name. Normally we never have to change it.</p>

    <p>The next screen suggests some default folders to store the necessary information.</p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_14.png" alt="" title="">

    <p>
        In the overview screen, it is possible to export the settings to a file. This is especially useful to automate
        the installation of a domain.
    </p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_15.png" alt="" title="">

    <p>
        After that, a screen will be visible for a while which will take care of the complete configuration. It is
        necessary to reboot after this to complete the installation.
    </p>

    <img src="/assets/img/config/devops_and_security/installing_active_directory/the_ad_promotion_wizard/the_ad_promotion_wizard_16.png" alt="" title="">

    <p>
        After the overview, the system checks whether all the prerequisites have been met. Normally this is the case.
        Click on "Install" to install the domain controller.
    </p>
</div>
