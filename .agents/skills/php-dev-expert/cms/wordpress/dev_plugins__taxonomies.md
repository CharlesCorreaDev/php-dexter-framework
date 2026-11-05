# Taxonomies – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/taxonomies/

---

# Taxonomies

Copy page
[View as Markdown](dev_plugins__taxonomies.md)

[Back to top](#wp--skip-link--target)

A **Taxonomy** is a fancy word for the classification/grouping of things. Taxonomies can be hierarchical (with parents/children) or flat.

WordPress stores the Taxonomies in the `term_taxonomy` database table allowing developers to register Custom Taxonomies along the ones that already exist.

Taxonomies have **Terms** which serve as the topic by which you classify/group things. They are stored inside the `terms` table.

For example: a Taxonomy named “Art” can have multiple Terms, such as “Modern” and “18th Century”.

This chapter will show you how to register Custom Taxonomies, how to retrieve their content from the database, and how to render them to the public.

WordPress 3.4 and earlier had a Taxonomy named “Links” which was deprecated in WordPress 3.5.

First published

February 5, 2015

Last updated

December 14, 2023

[Previous
Working with Custom Post Types
Previous: Working with Custom Post Types](dev_plugins__post-types__working-with-custom-post-types.md)

[Next
Term Splitting (WordPress 4.2)
Next: Term Splitting (WordPress 4.2)](dev_plugins__taxonomies__split-terms-wp-4-2.md)
