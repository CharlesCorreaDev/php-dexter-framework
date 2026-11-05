# Troubleshooting - Installation - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/installation/troubleshooting.html

---

### 500 Error with clean installation

#### Happens When...

When your HTTP server has insufficient permissions to follow symbolic links around the filesystem.

#### Solution

Check the *.htaccess* file and modify the following line

```
Option +FollowSymLinks
```

so that it reads:

```
Option +SymLinksIfOwnerMatch
```
