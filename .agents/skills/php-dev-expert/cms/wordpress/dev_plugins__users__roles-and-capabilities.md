# Roles and Capabilities – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/users/roles-and-capabilities/

---

# Roles and Capabilities

## In this article

Table of Contents

- [Roles](#roles)
  - [Adding Roles](#adding-roles)
  - [Removing Roles](#removing-roles)
- [Capabilities](#capabilities)
  - [Adding Capabilities](#adding-capabilities)
  - [Removing Capabilities](#removing-capabilities)
- [Using Roles and Capabilities](#using-roles-and-capabilities)
  - [Get Role](#get-role)
  - [User Can](#user-can)
  - [Current User Can](#current-user-can)
  - [Example](#example)
- [Multisite](#multisite)
- [Reference](#reference)

Copy page
[View as Markdown](dev_plugins__users__roles-and-capabilities.md)

[Back to top](#wp--skip-link--target)

Roles and capabilities are two important aspects of WordPress that allow you to control user privileges.

WordPress stores the Roles and their Capabilities in the `options` table under the `user_roles` key.

## [Roles](#roles)

A role defines a set of capabilities for a user. For example, what the user may see and do in his dashboard.

**By default, WordPress have six roles:**

- Super Admin
- Administrator
- Editor
- Author
- Contributor
- Subscriber

More roles can be added and the default roles can be removed.

![](https://i0.wp.com/developer.wordpress.org/files/2014/09/wp-roles.png?resize=405%2C142&ssl=1)

### [Adding Roles](#adding-roles)

Add new roles and assign capabilities to them with [add\_role()](https://developer.wordpress.org/reference/functions/add_role/) .

```
function wporg_simple_role() {
	add_role(
		'simple_role',
		'Simple Role',
		array(
			'read'         => true,
			'edit_posts'   => true,
			'upload_files' => true,
		),
	);
}

// Add the simple_role.
add_action( 'init', 'wporg_simple_role' );
```

After the first call to [add\_role()](https://developer.wordpress.org/reference/functions/add_role/) , the Role and it’s Capabilities will be stored in the database!

Sequential calls will do nothing: including altering the capabilities list, which might not be the behavior that you’re expecting.

To alter the capabilities list in bulk: remove the role using [remove\_role()](https://developer.wordpress.org/reference/functions/remove_role/) and add it again using [add\_role()](https://developer.wordpress.org/reference/functions/add_role/) with the new capabilities.

Make sure to do it only if the capabilities differ from what you’re expecting (i.e. condition this) or you’ll degrade performance considerably!

### [Removing Roles](#removing-roles)

Remove roles with [remove\_role()](https://developer.wordpress.org/reference/functions/remove_role/) .

```
function wporg_simple_role_remove() {
	remove_role( 'simple_role' );
}

// Remove the simple_role.
add_action( 'init', 'wporg_simple_role_remove' );
```

After the first call to [remove\_role()](https://developer.wordpress.org/reference/functions/remove_role/) , the Role and it’s Capabilities will be removed from the database!

Sequential calls will do nothing.

If you’re removing the default roles:

- We advise **against** removing the Administrator and Super Admin roles!
- Make sure to keep the code in your plugin/theme as future WordPress updates may add these roles again.
- Run  
  `update_option('default_role', YOUR_NEW_DEFAULT_ROLE)`  
  since you’ll be deleting `subscriber` which is WP’s default role.

## [Capabilities](#capabilities)

Capabilities define what a **role** can and can not do: edit posts, publish posts, etc.

Custom post types can require a certain set of Capabilities.

### [Adding Capabilities](#adding-capabilities)

You may define new capabilities for a role.

Use [get\_role()](https://developer.wordpress.org/reference/functions/get_role/) to get the role object, then use the `add_cap()` method of that object to add a new capability.

```
function wporg_simple_role_caps() {
	// Gets the simple_role role object.
	$role = get_role( 'simple_role' );

	// Add a new capability.
	$role->add_cap( 'edit_others_posts', true );
}

// Add simple_role capabilities, priority must be after the initial role definition.
add_action( 'init', 'wporg_simple_role_caps', 11 );
```

It’s possible to add custom capabilities to any role.

Under the default WordPress admin, they would have no effect, but they can be used for custom admin screen and front-end areas.

### [Removing Capabilities](#removing-capabilities)

You may remove capabilities from a role.

The implementation is similar to Adding Capabilities with the difference being the use of `remove_cap()` method for the role object.

## [Using Roles and Capabilities](#using-roles-and-capabilities)

### [Get Role](#get-role)

Get the role object including all of it’s capabilities with [get\_role()](https://developer.wordpress.org/reference/functions/get_role/) .

```
get_role( $role );
```

### [User Can](#user-can)

Check if a user have a specified **role** or **capability** with [user\_can()](https://developer.wordpress.org/reference/functions/user_can/) .

```
user_can( $user, $capability );
```

There is an undocumented, third argument, $args, that may include the object against which the test should be performed.

E.g. Pass a post ID to test for the capability of that specific post.

### [Current User Can](#current-user-can)

[current\_user\_can()](https://developer.wordpress.org/reference/functions/current_user_can/) is a wrapper function for [user\_can()](https://developer.wordpress.org/reference/functions/user_can/) using the current user object as the `$user` parameter.

Use this in scenarios where back-end and front-end areas should require a certain level of privileges to access and/or modify.

```
current_user_can( $capability );
```

### [Example](#example)

Here’s a practical example of adding an Edit link on the in a template file if the user has the proper capability:

```
if ( current_user_can( 'edit_posts' ) ) {
	edit_post_link( esc_html__( 'Edit', 'wporg' ), '<p>', '</p>' );
}
```

## [Multisite](#multisite)

The [current\_user\_can\_for\_blog()](https://developer.wordpress.org/reference/functions/current_user_can_for_blog/) function is used to test if the current user has a certain **role** or **capability** on a specific blog.

```
current_user_can_for_blog( $blog_id, $capability );
```

## [Reference](#reference)

Codex Reference for [User Roles and Capabilities](https://wordpress.org/support/article/roles-and-capabilities/).

First published

September 24, 2014

Last updated

November 17, 2022

[Previous
Users
Previous: Users](dev_plugins__users.md)

[Next
Working with User Metadata
Next: Working with User Metadata](dev_plugins__users__working-with-user-metadata.md)
