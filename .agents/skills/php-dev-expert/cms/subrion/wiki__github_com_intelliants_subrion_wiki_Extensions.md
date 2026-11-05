# Extensions · intelliants/subrion Wiki · GitHub

> **Fonte / Source:** https://github.com/intelliants/subrion/wiki/Extensions

---

This manual relates to the correct structure for Subrion templates, plugins, packages.

## Common Info

### Extension Name & Description

Extension name should be lowercase alphanumeric. You can also use underscore when needed, but it's recommended to avoid it. Please note, folder name *MUST BE* similar to the extension name in install.xml file.

Description tag in install.xml should be short and descriptive. It should not end with . (dot) so please carefully follow the instructions. If you want to add a detailed description of your extension you can put it in description.html file and format using HTML.

### Extension Icon

Extensions have an icon that represents package, plugin, or template. This icon is displayed on our websites and in Dashboard so it should be pretty. *We highly recommend to avoid using transparent images,* as they might look ugly for some pages.

Icon should be placed in FOLDER\_NAME/docs/img/ folder and it should have 'icon.png' name (PNG is required icon format). Dimensions are: 350px width, 350px height (Square format is required).

We highly recommend to add an icon file to all your extensions.

### Extension Screenshots

It is highly recommended to add screenshots to your extension so that users will be able to see how it looks if there is no demo available.

Screenshot image format: JPG  
Screenshot dimensions (minimum): 1200x900  
Screenshots folder: EXTENSION/docs/img/

## File structure

Below is the common structure for the extension.

### Template files structure

```
templates/
  templatename/
    css/
    img/
    docs/
      img/
        icon.png
      changelog.html (optional)
      description.html
      installation.html (optional)
      screenshots.html (optional)
    js/
    less/ (optional)
    packages/ (optional)
    plugins/ (optional)
    install.xml
    layout.tpl
```

### Plugin files structure

```
modules/
  modulename/
    docs/
      img/
        icon.png
      changelog.html (optional)
      description.html
      installation.html (optional)
      screenshots.html (optional)
    js/ (optional)
    includes/ (optional)
      classes/ (optional)
    templates/ (optional)
    install.xml
```

Plugin structure depends on the functionality your modules offer. Anyhow, it's recommended to follow the recommended structure. If you have any questions, please comment here.

## Extension release

Once you make sure your extension works fine, you might decide to share it with our community. We offer a way for you to release your extensions and start selling it on our website directly. Of course, you are allowed to release extensions free of charge. I'm sure this move will add much to your karma :) Anyhow, you decide.

So what we need to get started. You should carefully check the following extension attributes:

- Plugin name - it should be unique. Please make sure we don't have an extension with the same name on our website.
- Compatibility - please set the minimum core Subrion version your extension is compatible with.
- Version - it should be X.X.X format. No other versioning is allowed.
- Date - it should be YYYY-mm-dd. Ex: 2016-02-01 stands for 1st February, 2016

Once you make sure the extension data is correct, you need to create a zip file. *Please note you must put extension content in zip file, no need to pack the folder itself.* So your archive file should contain the following structure:

```
docs/
  img/
    icon.png
    changelog.html (optional)
    description.html
    installation.html (optional)
    screenshots.html (optional)
js/ (optional)
includes/ (optional)
  classes/ (optional)
templates/ (optional)
install.xml
```

You can upload your extension by using this instruction:

1. Go to subrion.org
2. Sign in by using your account
3. Click on your profile username at the top right
4. Move to Extensions
5. Click on Upload Extension button
6. Fill all the needed fields and upload your extension.
