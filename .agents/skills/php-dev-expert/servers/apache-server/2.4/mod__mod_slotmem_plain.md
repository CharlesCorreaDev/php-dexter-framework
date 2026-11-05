# mod_slotmem_plain - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_slotmem_plain.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_slotmem\_plain

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Slot-based shared memory provider. |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | slotmem\_plain\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_slotmem\_plain.c |

### Summary

`mod_slotmem_plain` is a memory provider which
provides for creation and access to a plain memory segment
in which the datasets are organized in "slots."

If the memory needs to be shared between threads and
processes, a better provider would be
`mod_slotmem_shm`.

`mod_slotmem_plain` provides the following API functions:

```
/* call the callback on all worker slots */
apr_status_t doall(ap_slotmem_instance_t *s, ap_slotmem_callback_fn_t *func, void *data, apr_pool_t *pool)

/* create a new slotmem with each item size is item_size */
apr_status_t create(ap_slotmem_instance_t **new, const char *name, apr_size_t item_size, unsigned int item_num, ap_slotmem_type_t type, apr_pool_t *pool)

/* attach to an existing slotmem */
apr_status_t attach(ap_slotmem_instance_t **new, const char *name, apr_size_t *item_size, unsigned int *item_num, apr_pool_t *pool)

/* get the direct pointer to the memory associated with this worker slot */
apr_status_t dptr(ap_slotmem_instance_t *s, unsigned int item_id, void **mem)

/* get/read the memory from this slot to dest */
apr_status_t get(ap_slotmem_instance_t *s, unsigned int item_id, unsigned char *dest, apr_size_t dest_len)

/* put/write the data from src to this slot */
apr_status_t put(ap_slotmem_instance_t *slot, unsigned int item_id, unsigned char *src, apr_size_t src_len)

/* return the total number of slots in the segment */
unsigned int num_slots(ap_slotmem_instance_t *s)

/* return the total data size, in bytes, of a slot in the segment */
apr_size_t slot_size(ap_slotmem_instance_t *s)

/* grab or allocate the first free slot and mark as in-use (does not do any data copying) */
apr_status_t grab(ap_slotmem_instance_t *s, unsigned int *item_id)

/* forced grab or allocate the specified slot and mark as in-use (does not do any data copying) */
apr_status_t fgrab(ap_slotmem_instance_t *s, unsigned int item_id)

/* release or free a slot and mark as not in-use (does not do any data copying) */
apr_status_t release(ap_slotmem_instance_t *s, unsigned int item_id)
```

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_slotmem_plain)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_slotmem_plain)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_slotmem_plain.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_slotmem_plain.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
