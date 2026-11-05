# Format - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/format.html

---

### Configuration

The Format class is configured through the `fuel/core/config/format.php` configuration file. It is already populated with a default configuration group. You can override this configuration by copying this config file to your application config directory, and modify that file as needed.

The following configuration settings can be defined:

#### CSV

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| delimiter | string | ``` ',' ``` | The field delimiter |
| enclosure | string | ``` '"' ``` | The enclosure character |
| newline | string | ``` '\n' ``` | The newline character used by to\_csv() method |
| escape | string | ``` '\\' ``` | The escape character |

By default, these configuration settings are used both for import and for export of CSV data. In case you need to
configure different settings for either import or export, you can an array key for it, and move the configuration
in there. The default configuration file already has this setup for you.

|  |  |  |  |
| --- | --- | --- | --- |
| regex\_newline | string | ``` '\n' ``` | The newline character used by regex to convert input data |
| enclose\_numbers | bool | ``` true ``` | If false, numbers will not be enclosed. If true, numbers will be enclosed too |

#### XML

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| basenode | string | ``` 'xml' ``` | XML basenode name |
| use\_cdata | boolean | ``` false ``` | Whether to use CDATA in nodes |
| bool\_representation | mixed | ``` null ``` | How booleans must be represented (0/1 vs false/true) |

#### JSON

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| options | integer | ``` JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP ``` | json\_encode() options |
