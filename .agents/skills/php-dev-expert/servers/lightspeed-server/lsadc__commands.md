# Commands Reference | LiteSpeed Web ADC | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsadc/commands/

---

# Commands Reference[¶](#commands-reference "Permanent link")

This reference lists all of the commands for LiteSpeed Web ADC (ADC).

**Note**: LiteSpeed Web ADC was previously known as LiteSpeed Load Balancer, hence the `lslb` references throughout.

By default, the commands covered here can be found in `/usr/local/lslb/bin/`.

## Control Commands[¶](#control-commands "Permanent link")

Usage:

```
./lslbctrl {start|stop|restart|reload|condrestrt|try-restart|status|help}
```

- `start`: start web server
- `stop`: stop web server
- `restart`: gracefully restart web server with zero down time
- `reload`: same as restart
- `condrestart`: gracefully restart web server if server is running
- `try-restart`: same as condrestart
- `status`: show service status
- `help`: this screen

### SysVinit[¶](#sysvinit "Permanent link")

Usage:

```
service lslb {start|restart|stop|reload|condrestart|try-restart|status|help}
```

To enable auto-start on system boot:

```
chkconfig lslb {on|off}
```

### systemd[¶](#systemd "Permanent link")

Usage:

```
systemctl {start|restart|stop|reload|condrestart|try-restart|status} lslb
```

To enable auto-start on system boot:

```
systemctl enable lslb
```

## License Commands[¶](#license-commands "Permanent link")

- Register a new license key (`-r`)

  ```
  /usr/local/lslb/bin/lslbd -r
  ```
- Test current license locally (`-t`)

  ```
  /usr/local/lslb/bin/lslbd -t
  ```
- Verify current license against license server (`-V`). This command will force communication with the LiteSpeed licensing server immediately.

  ```
  /usr/local/lslb/bin/lslbd -V
  ```
- Migrate current license (`-m`)

  ```
  /usr/local/lslb/bin/lslbd -m
  ```

## Miscellaneous Commands[¶](#miscellaneous-commands "Permanent link")

- If you forget your WebAdmin Console login, you can reset your password from the command line

  ```
  /usr/local/lslb/admin/misc/admpass.sh
  ```
- Check version

  ```
  /usr/local/lslb/bin/lslbd -v
  ```
- Switch version

  ```
  /usr/local/lslb/admin/misc/mgr_ver.sh <version>
  ```
- Force re-install/update

  ```
  /usr/local/lslb/admin/misc/lsup.sh -f -v <version>
  ```
- Force re-install/update to a specific version and build

  ```
  /usr/local/lslb/admin/misc/lsup.sh -f -v <version> -b <build number>
  ```
- Install/Uninstall startup script

  ```
  /usr/local/lslb/admin/misc/rc-inst.sh
  /usr/local/lslb/admin/misc/rc-uninst.sh
  ```
