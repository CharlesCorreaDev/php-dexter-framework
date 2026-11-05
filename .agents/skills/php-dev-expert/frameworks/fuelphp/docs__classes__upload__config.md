# Upload Config - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/upload/config.html

---

## Upload Class

The upload class allows to securely process files that have been uploaded to the application.
It allows you to filter uploads in various ways, define what the destination filenames should look like, or filter on size or length of the filename.

### Configuration

The upload class is configured through the `fuel/core/config/upload.php` configuration file. It is already populated with a default configuration. You can override this configuration by copying this config file to your application config directory, and modify that file as needed.

The following configuration settings can be defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| auto\_process | boolean | ``` true ``` | If true, the uploaded files will be validated using the configuration stored in the config file as soon as you use the Upload class. |
| max\_size | integer | ``` 0 ``` | The maximum size in bytes for every file uploaded. To disable the maximum size limit, set this parameter to zero. |
| ext\_whitelist | array | ``` array() ``` | Array of allowed file extensions. If empty or not defined, all file extensions are allowed. Extensions need to be defined in lower case only. If a file is uploaded in upper case, its extension will be matched against the whitelist in lower case. |
| ext\_blacklist | array | ``` array() ``` | Array of disallowed file extensions. If empty or not defined, all file extensions are allowed. Extensions need to be defined in lower case only. If a file is uploaded in upper case, its extension will be matched against the blacklist in lower case. |
| type\_whitelist | array | ``` array() ``` | Array of allowed file types. If empty or not defined, all file types are allowed. A file type is the part of the file's mimetype before the slash. So if the mimetype is "text/plain", add "text" to this array to allow files of this type. |
| type\_blacklist | array | ``` array() ``` | Array of disallowed file types. If empty or not defined, all file types are allowed. |
| mime\_whitelist | array | ``` array() ``` | Array of allowed file mimetypes. If empty or not defined, all mimetypes are allowed. |
| mime\_blacklist | array | ``` array() ``` | Array of disallowed file mimetypes. If empty or not defined, all mimetypes are allowed. |
| prefix | string | ``` '' ``` | When you save an uploaded file, the filename will be prefixed with this string. |
| suffix | string | ``` '' ``` | When you save an uploaded file, the filename will be suffixed with this string. |
| extension | string | ``` '' ``` | When you save an uploaded file, the filename's extension will be replaced with this string. |
| path | string | ``` '' ``` | Path to save the uploaded files to. |
| create\_path | boolean | ``` true ``` | If true, the path defined will be created if it doesn't exist. The Upload class supports recursive directory creation, so if the permissions are set properly, any path can be created. |
| path\_chmod | integer | ``` 0777 ``` | Permissions to be set on the path after it has been created. This value has to be defined in octal notation, with a leading zero. |
| file\_chmod | integer | ``` 0666 ``` | Permissions to be set on the uploaded file after it has been saved to the path defined. This value has to be defined in octal notation, with a leading zero. |
| auto\_rename | boolean | ``` true ``` | If true, the filename will be suffixed with a sequence number in case the file already exists in the path specified. The sequence number will be the next available number, starting with 1. |
| overwrite | boolean | ``` false ``` | If true, the file will be overwritten when saved in case it already exists. This setting will be ignored if 'auto\_rename' is true. |
| randomize | boolean | ``` false ``` | If true, the file will be assigned a random 32-character name (an MD5 string) when saved. Other settings will still be applied. |
| normalize | boolean | ``` false ``` | If true, the filename will be converted to an ASCII name, and all spaces replaced by underscores, when saved. |
| normalize\_separator | string | ``` '_' ``` | If you’ve set normalize to `true` you can change what spaces are changed to, rather than underscores by default. |
| max\_length | integer | ``` 0 ``` | The maximum length of a filename. This is measured on the filename as it will be saved, after all filename options have been processed. To disable the maximum size limit, set this parameter to zero. |
| new\_name | string | *none* | The new filename. This is setting is not set in the default config, but is supplied to the *Upload::process* config. The new name will not overwrite the prefix and suffix.  **Note:** When uploading multiple files, make sure the auto\_rename setting is set to true, to avoid multiple uploads overwriting the same destination file! |
| change\_case | boolean | *false* | This option allows you to force a case on the filename. Possible values are 'upper' and 'lower'. |

Caution: if you intend to call Upload::process() manually, make sure **auto\_process** is set to **false**. If not, the uploaded files will be processed twice with duplicate file entries as a result.
