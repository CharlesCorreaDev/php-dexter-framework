# How WordPress processes Post Content – Documentation

> **Fonte / Source:** https://wordpress.org/documentation/article/how-wordpress-processes-post-content/

---

# How WordPress processes Post Content

## In this article

Table of Contents

- [Visual Editor](#visual-editor)
- [wpautop() WordPress Function](#wpautop-wordpress-function)
- [Texturize](#texturize)
- [Convert Smilies](#convert-smilies)
- [Convert Characters](#convert-characters)
- [Methods to Prevent Processing](#methods-to-prevent-processing)

[Back to top](#wp--skip-link--target)

WordPress processes text entered in the [Write Post Screen](article__administration-screens.md#add-new-post) multiple times before the text is finally displayed on a web page within your WordPress blog. The processing of the text filters out the unwanted code and conforms the text to a form that the browser can interpret. Without attention to detail and familiarity with WordPress’s post content filtering, this can cause unwanted changes.

The majority of the conversion and filters are found in the `wp-includes/formatting.php` file.

Some typical problems some users have with these filtering and processing functions are:

1. Empty paragraphs, closing span tags, and line break (BR) elements are removed upon saving.
2. Classes are removed from elements.
3. DIV elements are converted to P elements.
4. Javascripts and code are converted to displayable code rather than actionable code. See [Using Javascript](https://codex.wordpress.org/Using_Javascript) for information on how to incorporate Javascript into a blog post.

The following is step-by-step list of how WordPress processes post content text before the final version is displayed.

## [Visual Editor](#visual-editor)

Not all WordPress bloggers use Visual Editor, but if you do, it will change various codes upon saving an entry to prepare it for publishing.

## [wpautop() WordPress Function](#wpautop-wordpress-function)

[`wpautop()`](https://codex.wordpress.org/Function_Reference/wpautop) is a core WordPress [function](https://developer.wordpress.org/reference/) that automatically processes, fixes, and modifies the text of a post.

It puts in line breaks, paragraph tags, opens and closes tags that aren’t opened and closed, and cleans up duplicate HTML tags.

## [Texturize](#texturize)

Texturize ([wptexturize()](https://codex.wordpress.org/Function_Reference/wptexturize)) is a text filter enabled by default that modifies posted text or comments to present a more readable and visually attractive output.

While it creates aesthetically pleasant text, it might create difficulties when posting code examples in a programming language. In such situations modification of the text is not desirable because it might create syntactically incorrect code.

A few examples include:

```
"quoted text" becomes “quoted text”
'quoted text' becomes ‘quoted text’
          --- becomes —
           -- becomes –
          ... becomes …
          (c) becomes ©
          (r) becomes ®
         (tm) becomes ™
           '' becomes ”
           `` becomes “
  president's becomes president’s
  presidents' becomes presidents’
          12' becomes 12′
          12" becomes 12″
          2x4 becomes 2×4
```

## [Convert Smilies](#convert-smilies)

The `convert_smilies()` function converts combinations of characters into [smilies or emoticons](https://wordpress.org/support/article/using-smilies/) within the post, page, and comment text. For example, if smilies are enabled, WordPress will recognize “:” and “D” (:D) and turn it into a smiling face ( 😀 ).

The key to making smilies work is to put a space before and after the keystroke combination. If placed up against the text, it will not convert.

If conversion of smilies is not desired, turn it off through the **Settings > Writing** panel.

## [Convert Characters](#convert-characters)

The `formatting.php` code file contains numerous functions which help publish character entities, accents, and non-English characters to a form recognizable by the web browser.

Generally, these work excellently, however, your browser may not recognize various language characters unless that language is activated in your web browser. See your browser’s documentation for more information on adding language character recognition to your browser.

## [Methods to Prevent Processing](#methods-to-prevent-processing)

There are a variety of Plugins to change the filtering process WordPress uses by default. It is highly recommended that you do not change the core programming but use WordPress Plugins to change all or some of the content processing. See the [WordPress Plugins Directory](https://wordpress.org/plugins/) for various Plugins that change the post content filtering process.

## Was this article helpful? How could it be improved? [Cancel reply](article__how-wordpress-processes-post-content.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fhow-wordpress-processes-post-content%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

February 25, 2019

Last updated

July 4, 2023
