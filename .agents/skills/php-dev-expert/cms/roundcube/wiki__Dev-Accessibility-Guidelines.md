# Dev Accessibility Guidelines · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Dev-Accessibility-Guidelines

---

# Guidelines for Maintaining Accessibility in the Roundcube Web Client

This document describes a list of rules and best practices for all developers creating UI components for the Roundcube webmail and plugins in order to improve the accessibility of the web application for people using assistive technologies.

## References

A collection of important references and sources regarding accessibility with notes concerning the Roundcube UI.

### [WCAG 2.0 Guidelines](http://www.w3.org/WAI/GL/WCAG20/)

- 1.1.1 [Non-text Content](http://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv-all.html): All non-text content that is presented to the user has a text alternative that serves the equivalent purpose
- Use `<label>` elements for each form element
- or set the `title` attribute where no label element is available
- 1.3.1 [Info and Relationships](http://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic.html): Information, structure, and relationships conveyed through presentation can be programmatically determined or are available in text.
- [ARIA11](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/ARIA11): Using ARIA landmarks (`role` and `aria-label` attributes) on UI blocks
- [ARIA17](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/ARIA17): Using grouping roles to identify related form controls
- [H71](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/H71): Providing a description for groups of form controls using fieldset and legend elements
- [H48](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/H48): Using ol, ul and dl for lists or groups of links
- [H51](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/H51) Using table markup to present tabular information
- [ARIA2](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/ARIA2): Identifying a required field with the aria-required property
- 1.4.4 [Resize text](http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-scale.html): Except for captions and images of text, text can be resized without assistive technology up to 200 percent without loss of content or functionality.
- [C28](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/C28): Specifying the size of text containers using em units
- 1.4.8 [Presentation](http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-visual-presentation.htmlVisual): For the visual presentation of blocks of text
- [C23](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/C23): Specifying text and background colors of secondary content such as banners, features and navigation in CSS while not specifying text and background colors of the main content
- 2.1.1 [Keyboard](http://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation-keyboard-operable.html): All functionality of the content is operable through a keyboard interface without requiring specific timings for individual keystrokes.
- [G202](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/G202): Ensuring keyboard control for all functionality
- Proper [tabindex](http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-focus-order.html)
- [2.4.7 Focus Visible](http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-focus-visible.html)
- Checkboxes for list selection!
- 2.4 Content structure
- 2.4.6 [Headings and Labels](http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-descriptive.html): Headings and labels describe topic or purpose.
- Alternatively, use ARIA `role` attributes
- Annotate different sections of the screen (e.g. toolbar, messages list, folders, preview)
- 2.4.10 [Section Headings](http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-headings.html): Section headings are used to organize the content.
- [H64](http://www.w3.org/TR/WCAG20-TECHS/H64.html) Using the title attribute of the frame and iframe elements
- 2.4.8 Location: Information about the user's location within a set of Web pages
- [G128](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/G128): Indicating current location within navigation bars
- 3.2.3 [Consistent Navigation](http://www.w3.org/TR/UNDERSTANDING-WCAG20/consistent-behavior-consistent-locations.html): Navigational mechanisms that are repeated on multiple Web pages within a set of Web pages occur in the same relative order each time they are repeated
- 3.2.4 [Consistent Identification](http://www.w3.org/TR/UNDERSTANDING-WCAG20/consistent-behavior-consistent-functionality.html): Components that have the same functionality within a set of Web pages are identified consistently.
- 3.3 Input Assistance
- 3.3.1 [Error Identification](http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-identified.html): If an input error is automatically detected, the item that is in error is identified and the error is described to the user in text
- 3.3.2 [Labels or Instructions](http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-cues.html): Labels or instructions are provided when content requires user input.
- 3.3.5 [Help](http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-context-help.html): Context-sensitive help is available.

### [WAI ARIA](http://www.w3.org/TR/wai-aria/)

- <http://www.w3.org/WAI/intro/aria>
- <https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA>
- <http://www.interactiveaccessibility.com/blog/introduction-wai-aria>
- Basic rules for [Building Accessible Applications with WAI-ARIA](http://www.w3.org/TR/wai-aria-primer/#buildingaccessibleapplications)

1. Use native markup when possible.
2. Apply the appropriate roles.
3. Preserve semantic structure.
4. Build relationships.
5. Set states and properties in response to events.
6. Support full, usable keyboard navigation.
7. Synchronize the visual interface with the accessible interface.

- [WAI-ARIA 1.0 Authoring Practices](http://www.w3.org/TR/wai-aria-practices/)

### [Marco’s accessibility blog](http://www.marcozehe.de/)

- [What is WAI-ARIA, what does it do for me, and what not](http://www.marcozehe.de/2014/03/27/what-is-wai-aria-what-does-it-do-for-me-and-what-not/)
- [WAI-ARIA for screen reader users](http://www.marcozehe.de/2014/05/03/wai-aria-for-screen-reader-users-an-overview-of-things-you-can-find-in-some-mainstream-web-apps-today/)

### Screen Readers and Assistive Technology Tools

- [JAWS](http://www.freedomscientific.com/jaws-hq.asp)
- [NVDA](http://www.nvaccess.org/)
- [ORCA](https://wiki.gnome.org/Projects/Orca)
- [Chromevox](http://www.chromevox.com/)
- [WindowEyes](http://www.gwmicro.com/Window-Eyes/)
- [Accessibility Evaluation Toolbar for Firefox](https://addons.mozilla.org/de/firefox/addon/accessibility-evaluation-toolb/)
- [Juicy Studio Accessibility Toolbar for Firefox](https://addons.mozilla.org/en-US/firefox/addon/juicy-studio-accessibility-too/)
- [Fangs Screen Reader Emulator for Firefox](https://addons.mozilla.org/en-US/firefox/addon/fangs-screen-reader-emulator/)
- [Chrome Accessibility Developer Tools](https://chrome.google.com/webstore/detail/accessibility-developer-t/fpkknkljclfencbdbgkenhalefipecmb)
- [Web Accessibility Toolbar (WAT)](http://www.paciellogroup.com/resources/wat) for Internet Explorer
- Safari + Voiceover (Mac)

## Suggested Best Practices for Roundcube Developers

### 1. Keyboard Navigation

Every UI element SHALL be operable with the keyboard. That includes:

- Receiving focus using the tab key
- Clearly indicate focused status
- Action is executable by pressing enter or space
- Instructions are available if keyboard navigation for a specific widget differs from the standard actions

### 2. Annotated Content Structure

- The individual areas of the application UI SHALL be annotated with section headers and/or appropriate `role` attributes.
- The order and nesting of elements in the DOM should be reasonable for a top-down reading although elements are absolutely positioned with CSS.

### 3. Full Link Texts for Icon Buttons

Links which are rendered as graphical buttons with icons SHALL have full and explaining link texts nonetheless. Hide the text with `text-indent:-5000px` when rendering an icon button with CSS backgrounds or leave the link tag empty and set the `title` attribute.

### 4. Labelled Input Elements

Each input element (e.g. text box, drop-down selection, etc.) SHALL be clearly labelled with a description about the expected information to be entered. Either using `<label>` elements or `title` attributes.

### 5. Expanded State in Control Buttons

For buttons expanding/collapsing hidden UI elements or opening menus, set the `aria-expanded` attribute according to the state of the controlled element. This can be for buttons opening menus or toggling some hidden options.

A button which opens a popup menu should use the following attributes:

```
<a ... onclick="return rcmail.command('menu-open','<menu-id>',this,event);
  aria-haspopup="true" aria-expanded="false" aria-owns="<menu-element-id>">
```

And containers representing a popup menu typically look like this:

```
<div id="menu-id" class="popupmenu" aria-hidden="true">
    <h3 id="aria-label-menutitle" class="voice">A Sample Menu</h3>
    <ul id="menu-element-id" class="toolbarmenu" role="menu" aria-labelledby="aria-label-menutitle">
        <li role="menuitem"><roundcube:button command="..." /></li>
        <li role="menuitem"><roundcube:button command="..." /></li>
    </ul>
</div>
```

### 6. Autocompletion Elements

For text elements that trigger autocompletion suggestions on keypress, add the following attributes: `aria-autocomplete="list" aria-expanded="false"`. Upon results being displayed, add `aria-haspopup="true"` and `aria-owns="<listbox-id>"` to the input element and reset them once the list is hidden again. The arrow keys shall then move through the suggestions and either *Enter* or *Tab* copies the selected item into the text box. In order to make screen readers speak the selected item, set the `aria-activedescendant="<selected-option-element-id>"` attribute to the input element.

Read [Marco's Easy ARIA Tip #7](http://www.marcozehe.de/2014/03/11/easy-aria-tip-7-use-listbox-and-option-roles-when-constructing-autocomplete-lists/) for more in-depth information.

### 7. Use common Widget Objects

For lists, treelists, dialogs or other standard UI components, use the javascript widget objects Roundcube ships with or jQuery UI widgets. Both have accessibility support already built in.

- For hierarchical lists: `rcube_treelist_widget` from treelist.js
- For record lists: `rcube_list_widget` from list.js
- For buttons: `<roundcube:button command="..." />` in skin templates
- For menus: `rcmail.command('menu-open')` and `rcmail.command('menu-close')`
- For dialogs: `rcmail.show_popup_dialog()`or jQuery UI `$.dialog()`
- For tabbed UI elements, use jQuery UI `$.tabs()`

### 8. Updating Status Texts Declared as Live Region

Parts of the UI that get updated during the interaction with the application (e.g. display of "Messages 1 to 20 of 356") should have the [aria-live](http://www.w3.org/TR/wai-aria/states_and_properties#aria-live) attribute to let screen readers read changes to the user.
For updated status texts, the following attributes are appropriate: `aria-live="polite" aria-relevant="text"`

## Methods to Verify Accessibility

(extract from <http://www.bitvtest.de/bitvtest/das_testverfahren_im_detail/pruefschritte.html>)

### Keyboard Navigation

Open the page in your browser. Use the *Tab* and/or *Arrow* keys to move focus through the UI. Check the following:

- Every button and form element should be reachable using the keyboard.
- Focused element should be clearly visible/highlighted. You should always know which element has the focus.
- Action of the UI elements (e.g. button click) can be executed by the keyboard (by hitting *Enter* or *Space*).
- When an action opens a menu or a dialog, the first element of that menu/dialog should get the focus.
- *Esc* closes menus and dialogs and sets focus back to the opening button.

### Content Structure and Section Headings

In Firefox's Web Developer Toolbar select *CSS > Disable Styles > Disable All Styles*.[BR](wiki__BR.md)
Check the document structure for

- Correct Headings (h1 - h6). The page requires at least one h1
- Sane order of the UI components
- Every button should be accessible as textual link
- Complex forms should be structured with `<fieldset>` elements containing `<legend>` titles

### Landmarks and Frame Title

In Firefox's Juicy Studio Accessibility Toolbar, select *ARIA > Document Landmarks*.[BR](wiki__BR.md)
Check the annotated areas for correct assignments:

- There should be one `main` role area
- Navigational elements should be labelled with `navigation`
- Search boxes should have the role `search`

In Internet Explorer's Web Accessibility Toolbar select *Frames > Frame Name / Title*.[BR](wiki__BR.md)
Check that every iframe has a meaningful title set.

### Listings as HTML List Elements

In Internet Explorer's Web Accessibility Toolbar select *Structure > List Elements*.[BR](wiki__BR.md)
Check if all listings, especially hierarchical ones are represented with `<ul>` and `<ol>` elements

### Data Table Structure

In Internet Explorer's Web Accessibility Toolbar select *Tables > Show Data Tables*.[BR](wiki__BR.md)
Check if all column and row headers are correctly marked up with `<th>` elements.

In Firefox's Accessibility Evaluation Toolbar, select *Navigation > Tata Tables*.[BR](wiki__BR.md)
Navigate through the table using the Left/Right/Up/Down buttons and check the headers and content listing.

### Icons with Title Attributes

Every UI element represented by an icon or color graphic should have a descriptive `title` attribute.[BR](wiki__BR.md)
To check, move the mouse over every icon and wait for the tooltip to show up.

### Labelled Form Elements

Every form input element should have a linked `<label>` element or `title` attribute.

- For `<label>` elements, open the page in your browser and click on the text describing an input field. If correctly linked, the input field gets the focus upon click on the label.
- If there's no visible text describing the form element, move the mouse over the element and wait for the `title` to be displayed as tooltip.

### Voice Output

Enable [Chromevox](http://www.chromevox.com) in Chrome or [Voiceover](http://smallbusiness.chron.com/enable-voiceover-mac-46095.html) on Mac OS X. Use the keyboard to navigate through the application and listen to the voice output. The spoken element is highlighted in the browser window. Voiceover also has an option to mute audio speech and displays the text on the screen.

## Questions and Answers

*Role or additional actions for messages (loading, confirmation, errors)?*::
[ARIA18](http://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140408/ARIA18): Using `aria-alertdialog` to Identify Errors. [BR](wiki__BR.md)
[ARIA Roles](http://www.w3.org/TR/wai-aria/roles#alert) Set `role="alert"` for spoken messages and `role="status"` for non-spoken background status information. [BR](wiki__BR.md)
Roundcube's internal message system (`rcmail.display_message(...)` already implement these.

*Best order of content blocks (topnav, toolbar, folders, messages)?*::
?

*Toolbar navigation (focus shift) with cursor keys?*::
Marco’s accessibility blog posts suggest to navigate with cursor keys in toolbars. Are Roundcube's toolbars really of the type where that would be expected?

## Unordered TODOs in Current UI Implementation

### General

- Describe UI blocks with section headings or `role` attributes. ✓
- Add proper `title` attributes to iframes ✓
- Make toolbar buttons and folders/messages list items accessible by keyboard (tab); highlight focused item ✓
- Declare buttons that open a popup menu with `aria-haspopup` attributes ✓
- Indicate selected state in task list with `aria-selected` ?
- Extend list and treelist widgets with ARIA attributes like `role` and `aria-expanded` ✓
- Add (hidden) submit buttons to search boxes ?
- Keyboard navigation in popup menus: ✓
- Focus first item when opening menu (from keyboard event) ✓
- Hide popup menus again when tabbing away ✓
- Use `<th>` tags for table headers ✓

### Mail

- Allow tabbing into message list and activate keyboard navigation ✓
- Describe keyboard navigation for list widget (in hidden text block?) ✓
- Annotate Quota display with descriptive text ✓
- Make the compose address book listing a `role="listbox"` widget ✓
- Check screen reading of autocompletion popup ✓

### Address Book

- Make the contacts listing a `role="listbox"` widget ✓
- Annotate tabbed view in contact view/edit with ARIA attributes ✓

### Settings

- Check form element/label assignments ✓
- Flag required fields
- Improve form validation feedback
