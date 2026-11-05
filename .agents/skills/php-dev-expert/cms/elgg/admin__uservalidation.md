# User validation — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/admin/uservalidation.html

---

# User validation[](#user-validation "Permalink to this heading")

Plugins can influence how users are validated before they can use the website.

Contents

- [Listing of unvalidated users](#listing-of-unvalidated-users)
- [Require admin validation](#require-admin-validation)

## [Listing of unvalidated users](#id1)[](#listing-of-unvalidated-users "Permalink to this heading")

In the Admin section of the website is a list of all unvalidated users. Some actions can be taken on the users, like delete them from the system
or validate them.

Plugins have the option to add additional features to this list.

See also

An example of this is the [User validation by e-mail](plugins__uservalidationbyemail.md) plugin which doesn’t allow users onto the website until their e-mail address
is validated.

## [Require admin validation](#id2)[](#require-admin-validation "Permalink to this heading")

In the Site settings under the Users section there is a setting which can be enabled to require admin validation of a new user account before
the user can use their account. After registration the user gets notified that their account is awaiting validation by an administrator.

Site administrators can receive an e-mail notification that there are users awaiting validation.

After validation the user is notified that they can use their account.
