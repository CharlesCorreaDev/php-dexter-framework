# Comments screen – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/comments-screen/

---

# Comments screen

## In this article

Table of Contents

- [Comments](#comments)
  - [Table of Comments](#table-of-comments)
  - [Filtering Options](#filtering-options)
  - [Using Selection, Actions, and Apply](#using-selection-actions-and-apply)
- [Edit Comment](#edit-comment)

[Back to top](#wp--skip-link--target)

In the **Comments Screen** you can edit or delete content found in comments to your posts, and you can mark comments as spam, send comments to the trash, and reply to comments. A number of rules can be defined about who can write comments, and how comments are moderated. These rules are managed via Administration > Settings > Discussion.

[![](https://i0.wp.com/wordpress.org/documentation/files/2019/01/comments-screen.png?fit=1171%2C329&ssl=1)](https://wordpress.org/support/?attachment_id=11124210)

Comments Screen

## [Comments](#comments)

### [Table of Comments](#table-of-comments)

The Table of Comments displays all the comments, with the most recent comment displayed first.

- **[ ]** – This checkbox, when clicked (checked), ‘selects’ that particular comment to be processed by a Bulk Action.
- **Gravatar** – This is a picture or gravatar of the comment author.
- **Author** – This is the name of the comment author. Below the comment author name is the comment author’s email address that can be clicked to begin an email to that address. Below the email address is the commenter’s web-site in the form of a URL that can be click to visit that commenter’s web-site. Below the email address is commenter’s IP address in the form of a link. Clicking that IP address link causes all the comments originated by that IP address to be displayed thus allowing a Bulk Action to be applied to all comments from that address.
- **Comment** – The first item in this column is the comment date and time presented as a link. Click the date and time will take you to that comment on your live site. Below the date and time is the actual comment that was submitted. Hovering over any comment gives you Immediate Actions that can be performed on that comment.
- **In Response To** – There are three elements. The text is the name of the post that inspired the comment, and links to the post editor for that entry. The View Post link leads to that post on your live site. The small bubble with the number in it shows the number of approved comments that post has received. If the bubble is gray, you have moderated all comments for that post. If it is blue, there are pending comments. Clicking the bubble will filter the comments screen to show only comments on that post.

#### [Sortable Columns](#sortable-columns)

Some column headings, such as the Author, and In Response To, can be
clicked to sort the Table of Comments in ascending or descending order.
Hover over the column title, for example Author, to see the up-arrow or
down-arrow. Click the heading to change the sort order.

#### [Page Navigation](#page-navigation)

Under the Screen Options, the number of Comments displayed per page
is determined. If more then one page of Comments is available, two
double-arrow boxes to move to the first and last page are provided.
Also two single-arrow boxes are displayed to move one page backward or
forward. Finally, a box showing the current page number can be used to
enter a page to directly display.

#### [Screen Options](#screen-options)

The Screen Options allow you to choose which columns are displayed, or not displayed, in the underlying Table. Clicking on the Screen Options tab shows a list of the columns with a check-box next to each column. Check the box for each column you want displayed in the Table, or uncheck the box to not display that column. In addition, the number of items you want displayed in the table can be set. Choose 1 to 999. Click the Screen Options tab again to close the Screen Options.

#### [Search](#search)

Above the Table, to the right, is a search box where you can enter a
word, or series of words, and click the “Search Comments” button to
search and display all the comments meeting your search words.

### [Filtering Options](#filtering-options)

At the top of this Screen are links such as All, Pending, Approved,
Spam, and Trash, that when clicked, will cause just the comments of that
type to be displayed in the underlying Table.

Below that and to the right of the Bulk Actions Apply button, is another filter option:

**Show all comment types**

This drop-down allows you to select, by type, which Posts are displayed in the Table of Comments. By default, “Show all comment types” is selected and all of the comments are displayed. Besides all comment types, this pull-down offers the ability to filter just comments or just pings.

### [Using Selection, Actions, and Apply](#using-selection-actions-and-apply)

#### [Selection](#selection)

This Screen allows Bulk Actions to be performed on one or more
comments selected in the Table. For Bulk Actions to be performed on
multiple comments at once, those comments must be first **selected** via one of these methods:

- **Select one comment at a time** – To select a comment, the
  checkbox to the left of the comment entry must be checked (clicked). It
  is possible to keep selecting more comments by checking their
  respective checkbox.
- **Select all comments in given Table** – All comments in a given
  table can be selected by checking the checkbox in the Table’s title, or
  footer bar. Of course, unchecking the header or footer title bar
  checkbox will cause all entries in that Table to be unchecked (NOT
  selected).
- **Reverse Selection** – A Reverse Selection means checked items
  become unchecked, and unchecked items become checked. A Reverse
  Selection is accomplished by holding the Shift key on the keyboard and
  clicking the header or footer title bar checkbox.

#### [Actions](#actions)

Actions describe the process to be performed on particular
comments. There are two styles of Actions that will be referred to as *Bulk Actions* and *Immediate Actions*. The following describes these Actions:

- **Bulk Actions** – These Actions can be performed on one, or more comments, at one time, if those comments have been previously selected. Bulk Actions are available, when appropriate, as choices in the Bulk Actions pull-down box, above the Table. The Bulk Actions allowed are Unapprove, Approve, Mark as Spam, and Move to Trash.
- **Immediate Actions** – Immediate Actions are performed immediately, on an individual comment. When the mouse cursor is moved over (hover) a comment, in the Comment column, under the comment itself the Immediate Actions of Unapprove, Reply, Quick Edit, Edit, Spam, and Trash appear as links. Click one of those links to initiate the corresponding Immediate Action.

The available Actions are described below:

- **Approve/Unapprove** – This Action is shared by one link. If a comment is currently in an approved state then this link shows as Unapprove (in orange), but if the comment is Unapproved this link shows as Approve (in green). Clicking the Approve or Unapprove link changes the comment to the opposite status. Both Approve and Unapprove are available as Bulk Actions.
- **Reply** – Available only as an Immediate Action. Clicking action cause the Reply to Comment edit window to display below the current comment and a reply to that comment can be made and sent when the Reply button is clicked.
- **Quick Edit** – Quick Edit is an “Immediate Action” that allows a quick in-line edit of the comment. See the Quick Edit section for details on this Action.
- **Edit** – This Action, an Immediate Action, initiated by click on the Edit option just below the comment, causes the Comments Edit Screen to display.
- **Spam** – This Action, shown in red, marks the comment as spam. Spam is available both as a Bulk Action, and an Immediate Action. See the Spam section for details on this Action.
- **Trash** – This Action, shown in red, sends the comment to the trash bin. Comments sent to the Trash later be restored or deleted permanently. Trash is available both as a Bulk Action, and an Immediate Action. See the Trash section for details on this Action.

##### [Quick Edit](#quick-edit)

Quick Edit is an Immediate Action performed on one comment by
clicking the Quick Edit link, under the comment in the Table of
Comments. Quick Edit is just an in-line edit that allows you to change
the following items–Name of commenter, Email of commenter, URL of
commenter, and the comment.

- **Cancel** – Click Cancel to cancel and abort the Edit of this comment.
- **Update Comment** – Click Update Comment to save the Edits made to this comment.

##### [Spam](#spam)

Once a comment has been marked as Spam, that comment and other Spam comments can be accessed via the Spam Filtering link above the Table of Comments. Once those Spam comments are accessed via that Filter link, then each Spam comment can be Unspammed or can be Deleted Permanently. In addition an Empty Spam button can be clicked and all comments that are marked as Spam are deleted permanently. The Empty Spam button deletes all Spam comments even if the comments are not selected.

##### [Trash](#trash)

Once a comment as be sent to the Trash, that and other Trashed comments can be accessed via the Trash Filtering link above the Table of Comments. Each of the Trashed comments can be Restored to the previous state before that comment was sent to the Trash. In addition, an Empty Trash button can be clicked and all comments in the Trash are deleted permanently. The Empty Trash button deletes all Trash comments even if the comments are not selected.

#### [Apply](#apply)

After one or more comments are *selected*, and after a *Bulk* Action is specified, the **Apply** button performs the given Action on the selected comments.

- **Apply** – Click the Apply button to execute the Bulk Action, specified in the Actions pull-down, on the selected comments. Remember, prior to executing Actions, one or more comments must be **selected**, as described before.

## [Edit Comment](#edit-comment)

Once a comment is edited this Screen display and allows the user to change the comment and the status of the comment.

[![](https://wordpress.org/documentation/files/2019/01/comments-edit-screen-1024x381.png)](https://wordpress.org/support/?attachment_id=11124216)

Edit Comment Screen

- **Author**
  - **Name** – The name given by the author of the comment.
  - **E-mail** – The e-mail address given by the author of the comment.
  - **URL** – The web-site URL given by the author of the comment.
- **Comment**
  - **Edit Comment box** – The edit box containing the content where changes can be made to said text.
- **Status**
  - **Approved** – Radio button to mark this comment as approved.
  - **Pending** – Radio button to mark this comment as pending (unapproved).
  - **Spam** – Radio button to mark this comment as spam.
  - **Submitted on** – Click the Edit button to edit the date and time this comment was submitted.
- **Actions**
  - **View Comment** – Views the entire comment and post as displayed on the blog.
  - **Move to Trash** – Click this link to send this comment to the Trash where it later can be restored or deleted permanently.
  - **Update** – Allows you to save the changes to the comment and return to the Table of Comments.

## Was this article helpful? How could it be improved? [Cancel reply](article__comments-screen.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fcomments-screen%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

January 24, 2019

Last updated

January 11, 2023
