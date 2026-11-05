# Creating an IP Whitelist | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Control-Panel/Creating-an-IP-Whitelist

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Creating an IP Whitelist

Zenbership allows you to greatly improve the security of your administrative dashboard by creating a "white-list" of IP addresses that will be permitted to access the program.

By default, the program accepts all IPs attempting to access the control panel. This is called "single-layer" security, since users only need a valid username and password to access the control panel. The IP white-list adds a second layer of security by requiring that the user's IP be permitted to laod the control panel before they can attempt to log in.

## Things to Remember

If you choose to employ a white-list, only the IPs on the list will have access. This means that if you white-list an employee's work computer but want him/her to work from home as well, you would need to white-list the home computer's IP as well.

You also need to remember that most IPs are dynamic, meaning that they change over time. This means that you will have to keep the white-list up-to-date with any changes to dynamic IPs.

## Establishing a White-List

To establish a white list, you will need to edit the file named "ip\_whitelist.php" located in the "admin/sd-system" folder. The default file looks like this:

```
<?php
$whitelist_ips = array();
// $whitelist_ips[] = '123.123.123.123';
// $whitelist_ips[] = '456.456.456.456';
```

To white-list an IP, effectively blocking all other IPs from accessing the control panel, update the file to look like this, keeping in mind that you will need to update the actual IP address in this example to reflect the true IP addresses you are attempting to white list:

```
<?php
$whitelist_ips = array();
$whitelist_ips[] = '11.22.33.44';
$whitelist_ips[] = '99.88.77.66';
```

In this example, "11.22.33.44" and "99.88.77.66" would be permitted to access the control panel, while all other IPs would not.

## Determining an IP Address

You can determine your IP address by visiting "[What is My IP?](http://www.whatismyip.com/)" from the computer you are going to white list, or alternatively, simply search google for "[What is My IP?](https://www.google.com/search?q=What+is+My+IP%3F)".

### Article Links

- [Things to Remember](#Things_to_Remember)
- [Establishing a White-List](#Establishing_a_White-List)
- [Determining an IP Address](#Determining_an_IP_Address)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/07/11.  
Last updated on 2013/07/11.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)
