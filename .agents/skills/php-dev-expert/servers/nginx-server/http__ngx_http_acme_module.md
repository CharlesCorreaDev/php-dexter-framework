# Module ngx_http_acme_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_acme_module.html

---

## Module ngx\_http\_acme\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [acme\_issuer](#acme_issuer)      [uri](#uri)      [account\_key](#account_key)      [challenge](#challenge)      [common\_name\_in\_csr](#common_name_in_csr)      [contact](#contact)      [external\_account\_key](#external_account_key)      [preferred\_chain](#preferred_chain)      [profile](#profile)      [ssl\_trusted\_certificate](#ssl_trusted_certificate)      [ssl\_verify](#ssl_verify)      [state\_path](#state_path)      [accept\_terms\_of\_service](#accept_terms_of_service)      [acme\_shared\_zone](#acme_shared_zone)      [acme\_certificate](#acme_certificate) [Embedded Variables](#variables) |

The `ngx_http_acme_module` module implements
the automatic certificate management
([ACMEv2](https://datatracker.ietf.org/doc/html/rfc8555))
protocol.

The source code of the module is available
[here](https://github.com/nginx/nginx-acme).
Download and install instructions are available
[here](https://github.com/nginx/nginx-acme/blob/main/README.md).

The module is also available in a prebuilt
`nginx-module-acme`
[package](https://nginx.org/en/linux_packages.html#dynmodules)
and in `nginx-plus-module-acme` package
as part of our
[commercial subscription](https://www.f5.com/products/nginx) since 1.29.0.

#### Example Configuration

> ```
> resolver 127.0.0.1:53;
>
> acme_issuer example {
>     uri         https://acme.example.com/directory;
>     contact     admin@example.test;
>     state_path  /var/cache/nginx/acme-example;
>     accept_terms_of_service;
> }
>
> acme_shared_zone zone=ngx_acme_shared:1M;
>
> server {
>     listen 443 ssl;
>     server_name  .example.test;
>
>     acme_certificate example;
>
>     ssl_certificate       $acme_certificate;
>     ssl_certificate_key   $acme_certificate_key;
>
>     # do not parse the certificate on each request
>     ssl_certificate_cache max=2;
> }
>
> server {
>     # listener on port 80 is required to process ACME HTTP-01 challenges
>     listen 80;
>
>     location / {
>         return 404;
>     }
> }
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `acme_issuer name { ... }` |
| Default: | — |
| Context: | `http` |

Defines an ACME certificate issuer object.

|  |  |
| --- | --- |
| Syntax: | `uri uri;` |
| Default: | — |
| Context: | `acme_issuer` |

The
[directory URL](https://datatracker.ietf.org/doc/html/rfc8555#section-7.1.1)
of the ACME server.
This directive is mandatory.

|  |  |
| --- | --- |
| Syntax: | `account_key alg[:size] | file;` |
| Default: | — |
| Context: | `acme_issuer` |

The account's private key used for request authentication.

Accepted values:

- `ecdsa`:`256`/`384`/`521`
  for ES256, ES384, or ES512 JSON Web Signature algorithms
- `rsa`:`2048`/`3072`/`4096`
  for RS256.
- File path for an existing key, using one of the algorithms above.

The generated account keys are preserved across reloads,
but will be lost on restart unless [state\_path](#state_path) is configured.

|  |  |
| --- | --- |
| Syntax: | `challenge type;` |
| Default: | ``` challenge http-01; ``` |
| Context: | `acme_issuer` |

This directive appeared in version 0.2.0.

Specifies the ACME challenge type to be used for the issuer.

Accepted values:

- `http-01` (`http`)
- `tls-alpn-01` (`tls-alpn`)

> ACME challenges are versioned.
> If an unversioned name is specified,
> the module automatically selects the latest implemented version.

|  |  |
| --- | --- |
| Syntax: | `common_name_in_csr on | off;` |
| Default: | ``` common_name_in_csr off; ``` |
| Context: | `acme_issuer` |

This directive appeared in version 0.4.0.

If enabled, sets the Subject Common Name in the certificate request
to the first DNS name or the first IP address provided.

> Enabling this option may result in rejected certificate requests.

> Prior to version 0.4.0, the Subject Common Name was always set.

|  |  |
| --- | --- |
| Syntax: | `contact URL;` |
| Default: | — |
| Context: | `acme_issuer` |

Sets an array of URLs that the ACME server can use
to contact the client regarding account issues.
The `mailto:` scheme will be used
unless specified explicitly.

|  |  |
| --- | --- |
| Syntax: | `external_account_key kid file;` |
| Default: | — |
| Context: | `acme_issuer` |

This directive appeared in version 0.2.0.

Specifies a key identifier `kid` and a `file`
with the MAC key for
[external account authorization](https://datatracker.ietf.org/doc/html/rfc8555#section-7.3.4).

The value `data`:`key` can be specified
instead of the `file`, which loads a key directly from
the configuration without using intermediate files.

In both cases, the key is expected to be encoded in
[base64url](https://datatracker.ietf.org/doc/html/rfc4648#section-5).

|  |  |
| --- | --- |
| Syntax: | `preferred_chain name;` |
| Default: | — |
| Context: | `acme_issuer` |

This directive appeared in version 0.3.0.

Specifies the preferred certificate chain.

If the ACME server offers multiple certificate chains,
prefer the chain with the topmost certificate issued from the
Subject Common Name `name`.
If there are no matches, the default chain will be used.

|  |  |
| --- | --- |
| Syntax: | `profile name [require];` |
| Default: | — |
| Context: | `acme_issuer` |

This directive appeared in version 0.3.0.

Requests the
[certificate profile](https://datatracker.ietf.org/doc/html/draft-ietf-acme-profiles) `name` from the ACME server.

The `require` parameter will cause certificate renewals
to fail if the server does not support the specified profile.

|  |  |
| --- | --- |
| Syntax: | `ssl_trusted_certificate file;` |
| Default: | — |
| Context: | `acme_issuer` |

Specifies a `file` with trusted CA certificates in the PEM format
used to [verify](#ssl_verify) the certificate
of the ACME server.

|  |  |
| --- | --- |
| Syntax: | `ssl_verify on | off;` |
| Default: | ``` ssl_verify on; ``` |
| Context: | `acme_issuer` |

Enables or disables verification of the ACME server certificate.

|  |  |
| --- | --- |
| Syntax: | `state_path path | off;` |
| Default: | ``` state_path acme_<issuer>; ``` |
| Context: | `acme_issuer` |

Defines a directory for storing the module data
that can be persisted across restarts.
This can improve the load time by skipping some requests on startup,
and avoid hitting request rate limits on the ACME server.

The directory contains sensitive content, such as
the account key, issued certificates, and private keys.

The `off` parameter (0.2.0) disables storing the account
information and issued certificates on disk.

> Prior to version 0.2.0, the state directory was not created by default.

|  |  |
| --- | --- |
| Syntax: | `accept_terms_of_service;` |
| Default: | — |
| Context: | `acme_issuer` |

Agrees to the terms of service under which the ACME server will be used.
Some servers require accepting the terms of service
before account registration.
The terms are usually available on the ACME server's website,
and the URL will be printed to the error log if necessary.

|  |  |
| --- | --- |
| Syntax: | `acme_shared_zone zone=name:size;` |
| Default: | ``` acme_shared_zone zone=ngx_acme_shared:256k; ``` |
| Context: | `http` |

Allows increasing the size of in-memory storage of the module.
The shared memory zone will be used to store the issued certificates,
keys and challenge data for all the configured certificate issuers.

The default zone size is sufficient to hold approximately
50 ECDSA prime256v1 keys or 35 RSA 2048 keys.

|  |  |
| --- | --- |
| Syntax: | `acme_certificate issuer [identifier ...] [key=alg[:size]];` |
| Default: | — |
| Context: | `server` |

Defines a certificate with the list of `identifiers`
requested from issuer `issuer`.

The explicit list of identifiers can be omitted.
In this case, the identifiers will be taken from the
[server\_name](http__ngx_http_core_module.md#server_name) directive
in the same [server](http__ngx_http_core_module.md#server) block.
Not all values accepted in the `server_name`
are valid certificate identifiers:
regular expressions and wildcards are not supported.

The key parameter sets the type of a generated private key.
Supported key algorithms and sizes:
`ecdsa:256` (default),
`ecdsa:384`,
`ecdsa:521`,
`rsa:2048`,
`rsa:3072`,
`rsa:4096`.

#### Embedded Variables

The `ngx_http_acme_module` module supports embedded variables,
valid in the
[server](http__ngx_http_core_module.md#server) block with the
[acme\_certificate](#acme_certificate) directive:

`$acme_certificate`
:   SSL certificate that can be passed to the
    [ssl\_certificate](http__ngx_http_ssl_module.md#ssl_certificate)

`$acme_certificate_key`
:   SSL certificate private key that can be passed to
    [ssl\_certificate\_key](http__ngx_http_ssl_module.md#ssl_certificate_key)
