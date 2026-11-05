# Environmental Settings | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/environmental-settings

---

# Environmental Settings

- ### On this Page

  - [Validation](docs_5x__extend__environmental-settings.md#validation)
  - [Autosuggest Inputs](docs_5x__extend__environmental-settings.md#autosuggest-inputs)

Plugin settings that may need to change per-environment, or contain sensitive information, should be implemented as **environmental settings**.

Environmental settings are settings whose raw values may reference an environment variable or alias, and which get parsed by [craft\helpers\App::parseEnv()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-app.html#method-parseenv) at runtime.

Here’s an example model with a `$secretKey` property that may be set to an environment variable, and a `getSecretKey()` method that is responsible for parsing the value.

```
use craft\base\Model;
use craft\helpers\App;

class MyModel extends Model
{
    /**
     * @var string the raw secret key (e.g. '$ENV_NAME')
     */
    public $secretKey;

    /**
     * @return string the parsed secret key (e.g. 'XXXXXXXXXXX')
     */
    public function getSecretKey(): string
    {
        return App::parseEnv($this->secretKey);
    }
}
```

## [#](#validation)Validation

If your environmental settings require special validation rules, you can have the validators check the parsed values rather than the raw values using [craft\behaviors\EnvAttributeParserBehavior  (opens new window)](https://docs.craftcms.com/api/v5/craft-behaviors-envattributeparserbehavior.html).

```
use craft\base\Model;
use craft\behaviors\EnvAttributeParserBehavior;

class MyModel extends Model
{
    public function behaviors(): array
    {
        return [
            'parser' => [
                'class' => EnvAttributeParserBehavior::class,
                'attributes' => ['secretKey'],
            ],
        ];
    }

    public function rules(): array
    {
        return [
            ['secretKey', 'required'],
            ['secretKey', 'string', 'length' => 50],
        ];
    }

    // ...
}
```

## [#](#autosuggest-inputs)Autosuggest Inputs

To guide users when entering your setting’s value in the control panel, give your setting an autosuggest input.

```
{% import '_includes/forms.twig' as forms %}

{{ forms.autosuggestField({
  label: 'Secret Key'|t('plugin-handle'),
  id: 'secret-key',
  name: 'secretKey',
  value: myModel.secretKey,
  suggestEnvVars: true
}) }}
```

When `suggestEnvVars` is set to `true`, the autosuggest input will call [craft\web\twig\variables\Cp::getEnvSuggestions()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-cp.html#method-getenvsuggestions) to get its suggestions, and a tip will show up below the form field advising the user that they can set the value to an environment variable.

If your setting is for a URL or file system path, you should also set `suggestAliases` to `true`.

```
{{ forms.autosuggestField({
  // ...
  suggestEnvVars: true,
  suggestAliases: true
}) }}
```

### [#](#limiting-values)Limiting Values

When a setting has a limited number of valid values (and isn’t open-ended), the `forms.selectizeField()` helper can help users discover appropriate environmental values:

```
{{ forms.selectizeField({
  label: 'Region'|t('my-plugin'),
  instructions: 'The region this resource is located in.'|t('my-plugin'),
  id: 'region',
  name: 'region',
  options: [
    { label: 'Asia Pacific (Hong Kong)', value: 'ap-east-1' },
    { label: 'Europe (Milan)', value: 'eu-south-1' },
    { label: 'US West (N. California)', value: 'us-west-1' },
  ],
  includeEnvVars: true,
  value: model.region,
  errors: model.getErrors('region')
}) }}
```

For boolean settings, a similar `forms.booleanMenuField()` is available:

```
{{ forms.booleanMenuField({
  label: "Use authentication"|t('my-plugin'),
  id: 'useAuthentication',
  name: 'useAuthentication',
  includeEnvVars: true,
  value: model.useAuthentication,
}) }}
```

Boolean fields only list environment variables that contain values satisfying PHP’s underlying [boolean filters  (opens new window)](https://www.php.net/manual/en/filter.filters.validate.php).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/environmental-settings.md)
