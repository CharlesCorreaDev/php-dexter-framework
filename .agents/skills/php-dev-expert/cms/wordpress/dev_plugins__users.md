# Users – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/users/

---

# Users

## In this article

Table of Contents

- [Roles and Capabilities](#roles-and-capabilities)
- [The Principle of Least Privileges](#the-principle-of-least-privileges)

Copy page
[View as Markdown](dev_plugins__users.md)

[Back to top](#wp--skip-link--target)

A *User* is an access account with corresponding capabilities within the WordPress installation. Each WordPress user has, at the bare minimum, a username, password and email address.

Once a user account is created, that user may log in using the WordPress Admin (or programmatically) to access WordPress functions and data. WordPress stores the Users in the `users` table.

## [Roles and Capabilities](#roles-and-capabilities)

Users are assigned [roles](dev_plugins__users__roles-and-capabilities.md#roles), and each role has a set of [capabilities](dev_plugins__users__roles-and-capabilities.md#capabilities).

You can create new roles with their own set of capabilities. Custom capabilities can also be created and assigned to existing roles or new roles.

In WordPress, developers can take advantage of user roles to limit the set of actions an account can perform.

## [The Principle of Least Privileges](#the-principle-of-least-privileges)

WordPress adheres to the principal of least privileges, the practice of giving a user *only* the privileges that are essential for performing the desired work. You should follow this lead when possible by creating roles where appropriate and checking capabilities before performing sensitive tasks.

First published

September 24, 2014

Last updated

December 14, 2023

[Previous
Working with Custom Taxonomies
Previous: Working with Custom Taxonomies](dev_plugins__taxonomies__working-with-custom-taxonomies.md)

[Next
Roles and Capabilities
Next: Roles and Capabilities](dev_plugins__users__roles-and-capabilities.md)
