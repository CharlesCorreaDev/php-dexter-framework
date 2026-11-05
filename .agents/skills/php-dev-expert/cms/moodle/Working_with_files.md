# Working with files - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Working_with_files

---

# Working with files

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Managing content](Managing_content.md "Managing content") ► Working with files

[Managing content](Managing_content.md "Managing content")

- Working with files
- [Repositories](Repositories.md "Repositories")
- [Portfolios](Portfolios.md "Portfolios")
- [Working with media](Working_with_media.md "Working with media")
- [H5P](H5P.md "H5P")
- [Content bank](Content_bank.md "Content bank")
- [Data formats](Data_formats.md "Data formats")
- [Document converters](Document_converters.md "Document converters")
- [Filters](Filters.md "Filters")
- [Licences](Licences.md "Licences")
- [LTI External tools](LTI_External_tools.md "LTI External tools")
- [Plagiarism prevention](Plagiarism_prevention.md "Plagiarism prevention")
- [Download course content](Download_course_content.md "Download course content")

## Adding files to your course

Moodle provides an easy way for a teacher to present materials to their students. These materials may take the form of files such as word-processed documents or slideshow presentations. The materials can be displayed on the page either as individual items or bundled together inside folders. One teacher might for instance wish to share a single research document in pdf format; another might have a folder of sample past examination papers for students to download. Most types of files can be uploaded and accessed through Moodle but the student needs to have the correct software to be able to open them.

To add files to a Moodle course, you must first ensure you have the editing turned on.

### Drag and drop

- If you are using a modern browser, you can simply click, hold and drag and drop a file directly onto your course page. You will know if drag and drop is available to you because you will (briefly) see a message at the top of your screen:

[![](/503/en/images_en/a/a3/dragdropmessage.png)](https://docs.moodle.org/503/en/File:dragdropmessage.png)

To drag and drop a folder, you must first compress/zip it using whichever program your computer has.

![](https://i.ytimg.com/vi/f0dkLi37mg4/hqdefault.jpg)

[Drag and drop files in Moodle 4.4/4.5](https://www.youtube-nocookie.com/embed/f0dkLi37mg4?autoplay=1)

Load video

YouTube

YouTube might collect personal data. [Privacy Policy](https://www.youtube.com/howyoutubeworks/user-settings/privacy/)

Continue
Dismiss

Dragging and dropping files

### Add a resource or activity

- Instead of drag and drop, you can click the link 'Add an activity or resource' and select either [File](File.md "File") or [Folder](Folder.md "Folder") from the activity chooser.

![](https://i.ytimg.com/vi/z4fWG8GEWo8/hqdefault.jpg)

[Upload files in Moodle 4.4/4.5](https://www.youtube-nocookie.com/embed/z4fWG8GEWo8?autoplay=1)

Load video

YouTube

YouTube might collect personal data. [Privacy Policy](https://www.youtube.com/howyoutubeworks/user-settings/privacy/)

Continue
Dismiss

Uploading files

- The screen for uploading and displaying a file (or folder of files) includes an "add" button. Clicking on this button takes you to the [File picker](File_picker.md "File picker") which is the name given to the file storage and access area within Moodle. Find out more about the places you can upload or add files from in the [File picker](File_picker.md "File picker") page.
- There is also a block (with an arrow) into which you can drag and drop a file straight from your desktop into Moodle.

## Unzipping uploaded files

If you upload a single zipped file, Moodle will automatically unzip it for your students to see it in Moodle.

If you upload a number of files as a single zipped file, either as [File](File.md "File"), nor inside a [Folder](Folder.md "Folder"), Moodle will force the download.

## Viewing uploaded files

- Once uploaded, files appear as thumbnails in the file manager for easy recognition.
- Files view can be easily toggled between icons view or a table view with sizes and dates, or a hierarchical list view.

|  |  |  |
| --- | --- | --- |
| File picker icon view | File picker table view | File picker hierarchical list view |

## Editing or updating uploaded files

- Clicking on the name of an uploaded file opens up a pop up dialogue box which allows file details quickly to be altered.

## Creating a link to a file

- When an uploaded file - or a file from the [Content bank](Content_bank.md "Content bank"), Private files, Dropbox, File system or NextCloud repositories - is re-used elsewhere on Moodle, the teacher has the option to make a copy (a new, unconnected version) or to link to it (formerly known as a shortcut or alias).
- If a link is created, then when the original file is updated, it will change in all instances of the link. So a teacher might add course notes to their private files for example, and then add them into a number of courses. When the teacher makes an alteration in the file in their private files, this alteration will be reflected in all instances of the course notes.
- A link can be recognised by its thumbnail. See the difference in the screenshot below between the original file (left) and the link (right):
- To update a file, go to its original location (for example Private files) and upload your new version *with the same name* . You will be prompted to override or rename the file. Choose "override" and this file will replace your original file and the alisas/shortcuts will remain and all be updated to your latest version.

|  |  |
| --- | --- |
| Creating a link |  |

## SCORM files cannot be updated where alias/shortcut are used

Note: while it is possible to create alias files for SCORM activities, it is not possible to update the source file and have changes replicated in the alias.
Updating the original SCORM (.zip) file will update this location but all alias will convert to 'true copies' of the original and alias will be removed.

### Areas where links cannot be made

A link cannot be made in the following areas of Moodle:

- an assignment submission
- a forum post attachment
- a workshop submission
- a quiz essay
- a database activity file field

This is to prevent cases such as a student uploading an item for assessment and then subsequently changing the original in their private files. When a student uses a file from their private files in one of these instances, they do not see the options to "copy" or "link". Below is an example of a file added to an assignment:

|  |
| --- |
| Assignment submission with no option to create an alias |

## Site administration settings

An administrator can add new file types and view, edit and delete existing file types from *Site administration > Server > File types*. This means that, for example, if teachers and students on your site use a lot of files specific to a particular program, such files can now be recognised by Moodle, and, when downloaded, they will open in the correct program, rather than presenting themselves as a generic zip file.

[![](/503/en/images_en/thumb/a/a5/Filetypes1.png/500px-Filetypes1.png)](https://docs.moodle.org/503/en/File:Filetypes1.png)

Some examples from the list

### Adding a new file type

1. Scroll down to the bottom of the page and click the "Add" button

2. Add the details of your file type, using the example below as a guide. This example will add the .mobi extension (for a Kindle ebook) with the standard document icon.

[![](/503/en/images_en/thumb/2/25/newfiletype.png/500px-newfiletype.png)](https://docs.moodle.org/503/en/File:newfiletype.png)

Adding a new filetype

**NOTE: The mimetype is set for a file when it is added/uploaded in Moodle (not when it is downloaded). If you change the mimetype associated with a file extension it will not make any difference to existing files. Only files uploaded in the future will have the new mimetype.**

3. Click to save the changes and you will see your new file type has been added to the list:

[![](/503/en/images_en/thumb/1/18/customfileypesuccess.png/500px-customfileypesuccess.png)](https://docs.moodle.org/503/en/File:customfileypesuccess.png)

New type in the list

### Restricting allowed file types

- Allowed file types for [Workshop](Workshop.md "Workshop") submissions may be restricted
- It is possible to restrict file types for assignments. See [Assignment settings](Assignment_settings.md "Assignment settings").

### Removing a file type

- Clicking the X next to a file type will remove it from the site. You will be prompted to confirm before deletion.

### Editing an existing file type

- Clicking the edit icon next to a file type will allow you to change certain details, for example the associated icon and description. If you don't wish to use the default description, you can specify your own custom description (with multi-language tags if your site supports multi-languages) or you can use an alternative language string from mimetypes.php.

### Google docs and docx

Importing Google docs files as docx. See <https://moodle.org/mod/forum/discuss.php?d=320144>

## Alternative to MS PowerPoint and PDF files

The [Presentation](https://moodle.org/plugins/mod_revealjs) additional plugin displays multimedia HTML5 presentations and slide shows in users' web browsers. A web friendly and more feature rich alternative to MS PowerPoint and PDF. However, presentations must be uploaded to moodledata via FTP and you'll need to learn some basic HTML to create presentations for it.

## See also

- How to share a single file with students: [File resource](File_resource.md "File resource").
- How to share a folder of files with students: [Folder](Folder.md "Folder").
- Questions about the file picker: [File picker FAQ](File_picker_FAQ.md "File picker FAQ").
- [Restoring file aliases](Restoring_file_aliases.md "Restoring file aliases")

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Working_with_files&oldid=148966>"
