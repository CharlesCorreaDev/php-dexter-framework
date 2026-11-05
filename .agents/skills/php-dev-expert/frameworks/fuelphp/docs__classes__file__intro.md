# File Intro - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/file/intro.html

---

## File Class

### Introduction

The File class offers a set of methods for working with files & directories. This can
be done through some helper methods or through a more advanced object oriented method where
all files and directories are wrapped in objects.

### Configuration

The File class is highly configurable and gives you all the control you need over the behaviour
supplied by the class. Configuration settings vary from restricting filesystem access to setting
drivers by filetype.

The default file config is located at *core/config/file.php*. To change these settings
create a config file with your own settings at *app/config/file.php*.

The following configuration values can be defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| base\_config.basedir | string | ``` null ``` | The path to the basedir. Defaults to *null* for no restrictions. When defined this will restrict the access to that specific directory. |
| base\_config.extensions | array | ``` null ``` | Array of allowed extensions, null for all. If defined the File class will only handle the given extentions and filter out the rest. |
| base\_config.url | string | ``` null ``` | Base url for files, null for not available. |
| base\_config.use\_locks | null | ``` null ``` | Whether to use file locks. Set to *true* if you want the File class to use them. |
| base\_config.file\_handlers | array | ``` array ``` | Array of file drivers per extension. These allow you to use custom drivers on a by filetype basis. |
| magic\_file | string | ``` null ``` | Alternative location of the fileinfo() magic file. If not specified, the system default will be used. |
| chmod.files | integer | ``` 0666 ``` | Permissions for newly created files. |
| chmod.folders | integer | ``` 0777 ``` | Permissions for newly created directories. |
