<div>
    <h3>3.4.6 What now? I need files and no more internet?</h3>
    <p>There are two possible solutions:</p>
    <p>
        <strong>Solution 1:</strong><br>
        Temporarily reset the network settings to "NAT" and set your IP setting to DHCP. Use "ipconfig /renew" to get a
        new IP address. After that, you will have internet access again. Do not forget to change your settings back to
        the settings we need for the test setup.
    </p>
    <p>
        <strong>Solution 2:</strong><br>
        Put the documents you need in a folder on your host system. Via the "virtual box guest" additions, you can
        connect from your VM to the folder on your host system. To do this, you do not need to make any changes to your
        network settings.
    </p>
</div>
