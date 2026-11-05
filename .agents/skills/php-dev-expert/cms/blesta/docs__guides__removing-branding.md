# Removing Branding | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/guides/removing-branding

---

Version: 6

On this page

Removing Branding

Please note that branding should be removed from unbranded licenses only. Removing branding from a branded license is in violation of the licensing agreement. It is also a violation of the license agreement to claim copyright of the software.

## Branding[â](#branding "Direct link to Branding")

Branding can be removed from either the client or admin area, or both the client and admin area.

### Client Area[â](#client-area "Direct link to Client Area")

To remove client area branding, edit the file **~/app/views/client/bootstrap/structure.pdt** and look toward the bottom of the file for a line that starts with `<p>Powered by` and remove the line.

![](/assets/images/removingbranding-clientarea-36f7cc4603a4bead985a5881ed3c2e13.png)

### Admin Area[â](#admin-area "Direct link to Admin Area")

It's usually not necessary to remove the branding in the admin area as no clients will see it. However, to remove admin area branding, edit the file **~/app/views/admin/paradigm/partials/sidebar.pdt** and look toward the bottom of the file for a line that begins with "Blesta Â© 2007-" and edit as desired.

![](/assets/images/removingbranding-adminarea-4cb7cbc8f0daecc3193ea476f6912075.png)
