# Including a Software License – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/plugin-basics/including-a-software-license/

---

# Including a Software License

Copy page
[View as Markdown](dev_plugins__plugin-basics__including-a-software-license.md)

[Back to top](#wp--skip-link--target)

Most WordPress plugins are released under the [GPL](http://www.gnu.org/licenses/gpl.html), which is the same license that [WordPress itself uses](https://wordpress.org/about/license/). However, there are other compatible options available. It is always best to clearly indicate the license your plugin uses.

In the [Header Requirements](dev_plugins__the-basics__header-requirements.md) section, we briefly mentioned how you can indicate your plugin’s license within the plugin header comment. Another common, and encouraged, practice is to place a license block comment near the top of your main plugin file (the same one that has the plugin header comment).

This license block comment usually looks something like this:

```
/*
{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.
*/
```

First published

September 16, 2014

Last updated

February 20, 2024

[Previous
Determining Plugin and Content Directories
Previous: Determining Plugin and Content Directories](dev_plugins__plugin-basics__determining-plugin-and-content-directories.md)

[Next
Uninstall Methods
Next: Uninstall Methods](dev_plugins__plugin-basics__uninstall-methods.md)
