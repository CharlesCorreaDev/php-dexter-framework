# Commands Reference | LSWS | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/commands/

---

# Command Reference[¶](#command-reference "Permanent link")

The following commands are for use with LiteSpeed Web Server.

Tip

The default installation location for LSWS is `/usr/local/lsws/`.

## Control commands[¶](#control-commands "Permanent link")

```
$ sudo service lsws {start|restart|stop|reload|condrestart|try-restart|status|help}

start       - start web server
stop        - stop web server
restart     - gracefully restart web server with zero down time
reload      - same as restart
condrestart - gracefully restart web server if server is running
try-restart - same as condrestart
status      - show service status
help        - this screen
```

```
$ sudo chkconfig lsws {on|off}
```

## License commands[¶](#license-commands "Permanent link")

Register a new license key (-r)

```
$ sudo /usr/local/lsws/bin/lshttpd -r
```

Test current license locally (-t)

```
$ sudo /usr/local/lsws/bin/lshttpd -t
```

Verify current license against license server (-V). This command will force communication with LiteSpeed licensing server immediately.

```
$ sudo /usr/local/lsws/bin/lshttpd -V
```

Migrate current license (-m)

```
$ sudo /usr/local/lsws/bin/lshttpd -m
```

## Misc commands[¶](#misc-commands "Permanent link")

If you forgot your admin web console login, you can reset your password from the command line

```
$ sudo /usr/local/lsws/admin/misc/admpass.sh
```

Check version

```
$ sudo /usr/local/lsws/bin/lshttpd -v
```

Switch version

```
$ sudo /usr/local/lsws/admin/misc/mgr_ver.sh <version>
```

Force re-install/update

```
$ sudo /usr/local/lsws/admin/misc/lsup.sh -f -v <version>
```

Install/Uninstall startup script

```
$ sudo /usr/local/lsws/admin/misc/rc-inst.sh
$ sudo /usr/local/lsws/admin/misc/rc-uninst.sh
```
