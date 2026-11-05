# Authentication — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/extending/authentication.html

---

# Authentication[](#authentication "Link to this heading")

CodeIgniter provides an official authentication and authorization framework
[CodeIgniter Shield](libraries__official_packages.md#shield) for CodeIgniter 4,
It is designed to be secure, flexible, and easily extendable to meet the needs
of many different types of websites.

The following are recommended guidelines to encourage consistency among developers of
modules, projects, and the framework itself.

## Recommendations[](#recommendations "Link to this heading")

- Modules that handle login and logout operations should trigger the `login` and `logout` Events when successful
- Modules that define a “current user” should define the function `user_id()` to return the user’s unique identifier, or `null` for “no current user”

Modules that fulfill these recommendations may indicate compatibility by adding the following provision to **composer.json**:

```
"provide": {
    "codeigniter4/authentication-implementation": "1.0"
},
```

You may view a list of modules that provide this implementation on [Packagist](https://packagist.org/providers/codeigniter4/authentication-implementation).
