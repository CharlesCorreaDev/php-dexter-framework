# Assign custom fields – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/assign-custom-fields/

---

# Assign custom fields

## In this article

Table of Contents

- [Displaying Custom Fields in the Block Editor](#displaying-custom-fields-in-the-block-editor)
  - [Usage](#usage)
- [Displaying Custom Fields on the front end](#displaying-custom-fields-on-the-front-end)

[Back to top](#wp--skip-link--target)

WordPress has the ability to allow post authors to assign custom fields to a post. This arbitrary extra information is known as **metadata**. This **metadata** can include bits of information such as:

- **Mood:** Happy
- **Currently Reading:** Cinderella
- **Listening To:** Rock Around the Clock
- **Weather:** Hot and humid

With some extra coding, it is possible to achieve more complex actions, such as using the **metadata** to store an expiration date for a post.

Metadata is handled with **key/value** pairs. The **key** is the name of the metadata element. The **value** is the information that will appear in the metadata list on each individual post that the information is associated with.

**Keys** can be used more than once per post. For example, if you were reading two different books (perhaps a technical book at work and a fiction at home), you could create a “reading” key and use it twice on the same post, once for each book.

Here is an example of what this information might look like on your post:

```
Currently Reading: Calvin and Hobbes  
Today's Mood: Jolly and Happy
```

## [Displaying Custom Fields in the Block Editor](#displaying-custom-fields-in-the-block-editor)

![Option button and Preferences menu  in the sidebar](https://wordpress.org/documentation/files/2018/10/custom-fileds-1-6.8-177x300.jpg)

In the Block Editor, Custom Fields area is hidden by default if they have not been used before. To display the area, follow the below steps.

Note: Before displaying the Custom Fields area, make sure your content is saved since page reload is required for this option change.

1. Click Options button (three dots icon) at the right of the top toolbar.
2. Select Preferences
3. Select General tab and turn on the Custom fields in the Advanced section
4. Click Select & Reload Page button

![Custom fields in the Preferences panel](https://wordpress.org/documentation/files/2018/10/cusom-fields-2-6.8.jpg)

You’ll see Custom Fields in the bottom of the Block Editor.

To hide the Custom Fields area again, return to Preferences, turn off the Custom fields toggle, and reload the page.

### [Usage](#usage)

Based upon our example above, let’s add two custom fields, one called “Currently Reading” and the other “Today’s Mood”. Please follow the below steps to add this information to a post using Custom Fields.

1. To create a new **Custom Field** called “Currently Reading”, click Enter new button, enter the text “Currently Reading” (without the quotes) in the text entry field titled **Name**.
2. The newly created **Key** (“Currently Reading”) should now be assigned a **Value**, which in our case is the name of the book currently being read, “Calvin and Hobbes”. Type “Calvin and Hobbes” in the *Value* field, again without the quotes.
3. Click **Add Custom Field** button to save this custom information for that post.

![](https://wordpress.org/documentation/files/2018/10/custom_field_example.jpg)

Custom Fields

To add your “Today’s Mood”, repeat the process and add “Today’s Mood” to the **key** and a description of your mood in the **value** text boxes and click **Add Custom Field** to save this information with the post.

On your next post, you can add a new book and mood to your metadata. In the **Custom Fields** section, the **Key** will now feature a pull-down list with the previously entered Custom Fields. Choose “Currently Reading” and then enter the new book you are reading in the **value**. Click **Add Custom Field** and then repeat the process to add “Today’s Mood”.

You only need to create a new “KEY” **once**, after which you can assign a value to that key for every post, if you so desire. You can also assign more than one *Value* to a key, for a post. This will come in handy for people who read more than one book at a time.

## [Displaying Custom Fields on the front end](#displaying-custom-fields-on-the-front-end)

To display the Custom Fields for each post, you have to use a template tag that customizes your theme. For more details about it, please refer to:

- [the\_meta()](https://developer.wordpress.org/reference/functions/the_meta/) – Template tag that automatically lists all Custom Fields of a post
- [get\_post\_custom()](https://developer.wordpress.org/reference/functions/get_post_custom/) and [get\_post\_meta()](https://developer.wordpress.org/reference/functions/get_post_meta/) – Retrieves one or all metadata of a post.
- [get\_post\_custom\_values()](https://developer.wordpress.org/reference/functions/get_post_custom_values/) – Retrieves values for a custom post field.
- [Template Tags](https://developer.wordpress.org/themes/basics/template-tags/) – WordPress Theme Developers Handbook page on Template Tags

You may install a plugin that manages custom fields by searching “[custom fields](https://wordpress.org/plugins/search/custom+fields/)” in the plugins directory.

## Was this article helpful? How could it be improved? [Cancel reply](article__assign-custom-fields.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fassign-custom-fields%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

October 27, 2018

Last updated

June 29, 2026
