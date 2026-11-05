# Overview | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/

---

# LiteSpeed Web Server[¶](#litespeed-web-server "Permanent link")

## Introduction[¶](#introduction "Permanent link")

LiteSpeed Web Server (LSWS) is a high-performance, secure, and easy-to-use web server that can be used as a drop-in replacement for an Apache web server. It can handle thousands of concurrent connections with a small memory footprint and thwart incoming attacks with ease.

## Minimum system requirements[¶](#minimum-system-requirements "Permanent link")

### Operating system[¶](#operating-system "Permanent link")

- Linux: kernel 3.0+
- CentOS: 7+
- Ubuntu: 18.04+
- Debian: 9+
- FreeBSD: 12.04+

### CPU[¶](#cpu "Permanent link")

- Intel: x86-64
- ARM: aarch64 (Linux only)

### Memory[¶](#memory "Permanent link")

- 512 MB or more

### Disk[¶](#disk "Permanent link")

- Installation: 200 MB
- Runtime: 300 MB or more. The amount of swap space required depends on usage.

Note

RAM-limited LSWS licenses are not recommended when using an LXC container (including Proxmox). LiteSpeed uses `sysinfo()` to detect memory size. As a result, you may hit the RAM limit when using an LXC container because it returns the *host* memory size.

Licenses with unlimited RAM do not have this problem.

## WebAdmin Console[¶](#webadmin-console "Permanent link")

LiteSpeed Web Server includes WebAdmin Console, a centralized control panel for managing and configuring web server settings. See the [WebAdmin documentation](https://www.litespeedtech.com/docs/webserver/admin) to learn more.

Video

See the [Best Practices for Securing WebAdmin Console](https://youtu.be/6gt8D6tUZQ0) video.

## Additional support[¶](#additional-support "Permanent link")

### Community support[¶](#community-support "Permanent link")

If you've explored our documentation and still have questions, you can find assistance from other LiteSpeed users through our community support forums:

- Join [the GoLiteSpeed Slack community](https://www.litespeedtech.com/slack)
- Visit [the LiteSpeed Forums](https://www.litespeedtech.com/support/forum/)

### Official LiteSpeed support[¶](#official-litespeed-support "Permanent link")

To be assisted by a LiteSpeed support technician, you can submit [a support ticket](https://store.litespeedtech.com/store/clientarea.php) from the LiteSpeed website's client area or by emailing `support@litespeedtech.com`.

Note

We're happy to provide limited free support for all LiteSpeed products and offer guidance where documentation may fall short. However, we are unable to offer general system administration support or hands-on assistance.

Should you require individualized configuration support or hands-on assistance with our products, you can order additional services from [the LiteSpeed Store](https://store.litespeedtech.com/store/index.php?rp=/store/supportservice).

Thank you for choosing LiteSpeed!

## Feedback[¶](#feedback "Permanent link")

Do you have some thoughts about this documentation site? Join [our GoLiteSpeed Slack](https://www.litespeedtech.com/slack), drop by [the #documentation channel](https://golitespeed.slack.com/messages/C3VSQTDGQ), and let us know what you think!
