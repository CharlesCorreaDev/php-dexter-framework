# A message “ ‘sys_errlist’                 is deprecated;                 use ‘strerror’ or ‘strerror_r’                 instead ”

> **Fonte / Source:** https://nginx.org/en/docs/sys_errlist.html

---

## A message “ ‘sys\_errlist’ is deprecated; use ‘strerror’ or ‘strerror\_r’ instead ”

**Q:**
While building nginx version 0.7.66, 0.8.35 or higher on Linux
the following warning messages are issued:

> ```
> warning: `sys_errlist' is deprecated;
>     use `strerror' or `strerror_r' instead
> warning: `sys_nerr' is deprecated;
>     use `strerror' or `strerror_r' instead
> ```

**A:**
This is normal: nginx has to use the deprecated sys\_errlist[] and sys\_nerr
in signal handlers because strerror() and strerror\_r() functions
are not Async-Signal-Safe.
