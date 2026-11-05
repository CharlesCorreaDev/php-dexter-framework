# Email Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/email

---

# Email Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__email.md#settings)
  - [Development](docs_5x__reference__field-types__email.md#development)

Email fields give you a normal text input that requires a valid email address.

The new [Link field](docs_5x__reference__field-types__link.md) also supports email addresses.

## [#](#settings)Settings

Email fields have the following settings:

- **Placeholder Text** – The field’s placeholder text, to be displayed if the field has no value yet.

## [#](#development)Development

Calling an Email field in your templates will return the value that was entered in the field.

```
{% if user.email %}
  <h3>Email</h3>
  <a href="mailto:{{ user.email }}">{{ user.email }}</a>
{% endif %}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/email.md)
