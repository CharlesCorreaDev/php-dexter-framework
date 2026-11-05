# Authentication | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/api-reference/auth

---

Attempts to authenticate with the API using a email/password combination.

After authenticating with the API, the returned object is a CompanyUser object which is a bridge linking the user to the company.

The company user object contains the users permissions (admin/owner or fine grained permissions) You will most likely want to
also include in the response of this object both the company and the user object, this can be done by using the include parameter.

```
/api/v1/login?include=company,user
```

[postLogin](docs__api-reference__post-login.md)

[postPasskey login options](docs__api-reference__post-passkey-login-options.md)

[getList passkeys](docs__api-reference__get-settings-passkeys.md)

[postCreate passkey](docs__api-reference__post-settings-passkeys.md)

[postPasskey registration options](docs__api-reference__post-settings-passkeys-options.md)

[deleteDelete passkey](docs__api-reference__delete-settings-passkey.md)
