# Templates structure · intelliants/subrion Wiki · GitHub

> **Fonte / Source:** https://github.com/intelliants/subrion/wiki/Templates-structure

---

Subrion CMS utilizes Smarty template engine. Smarty ideally fits for separating application logic and presentation.

Subrion templates are based on overrides. You can find all templates that are used on front-end in this folder: `[root]/templates/common`

The best way to get started with template is to check default Subrion template **Kickstart** here: <https://github.com/intelliants/subrion-template-kickstart>

## Naming conventions

### Template folder

Subrion template \*.tpl files should be kept in a separate folder. Folder name contains lowercase Latin letters and underscores only. Examples:

```
simpla_autos
publish_it
segin
locality
```

### Template files

Template file names should only contain Latin letters, digits, and dash. You should not use underscores, slashes, etc. in template filenames. Only `.tpl` file extension is allowed for template files. Examples:

❌ *Incorrect:*
`view_account.tpl`

✅ *Correct:*
`view-account.tpl`

## Template structure

The main file for the template is `layout.tpl` file.
