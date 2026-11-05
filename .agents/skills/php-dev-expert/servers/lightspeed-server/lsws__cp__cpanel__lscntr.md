# LiteSpeed Containers | cPanel | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/lscntr/

---

# LiteSpeed Containers[¶](#litespeed-containers "Permanent link")

If you are providing web hosting and are not using CloudLinux, LiteSpeed Web Server offers LiteSpeed Containers: these provide some very powerful features which enable high performance, stable, and controlled web hosting:

- A controlled environment. Activating and providing access to the powerful kernel features of [Linux cgroups](https://en.wikipedia.org/wiki/Cgroups) you can isolate and limit specific resources for selected users based on limits you set.
- A sandboxed environment. Activating and providing access to the powerful kernel features of [Linux namespaces](https://en.wikipedia.org/wiki/Linux_namespaces) where like containers in general, each user sees an independent view of the file system.

LiteSpeed Containers is a part of LiteSpeed Web Server and simply needs to be activated to be used. Our configuration will help you activate the feature. If you have either WHM/cPanel or Plesk Control Panels, our PlugIns will help you configure the operating system components, set up and manage packages with defaults and get statistics. Full statistical support is provided by our Prometheus exporter which can be used to interface with Gafana and other statistical processing engines. Even if you don't want to use Prometheus, statistics are available in our control panels.

Warning

You *do not* need LiteSpeed Containers if you are currently using CloudLinux CageFS/LVE. These systems provide similar features and cannot be used at the same time.

## Activating LiteSpeed Containers[¶](#activating-litespeed-containers "Permanent link")

LiteSpeed Containers is activated in LiteSpeed in two steps:

- [Configure Namespaces](lsws__namespaces.md)
- [Configure cgroups](lsws__cgroups.md)

The remainder of LiteSpeed Container Management is done within the [Plugin](lsws__cp__cpanel__whm-litespeed-plugin__lscntr.md). Even minimum configuration of namespace and cgroups can be done in the Plugin when you enter a LiteSpeed Containers screen.
