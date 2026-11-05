# mod_authnz_fcgi - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authnz_fcgi.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authnz\_fcgi

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Allows a FastCGI authorizer application to handle Apache httpd authentication and authorization |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authnz\_fcgi\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authnz\_fcgi.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.4.10 and later |

### Summary

This module allows FastCGI authorizer applications to
authenticate users and authorize access to resources. It supports
generic FastCGI authorizers which participate in a single phase
for authentication and authorization as well as Apache httpd-specific
authenticators and authorizors which participate in one or both
phases.

FastCGI authorizers can authenticate using user id and password,
such as for Basic authentication, or can authenticate using arbitrary
mechanisms.

### Topics

- ![](../images/down.gif) [Invocation modes](#invocations)
- ![](../images/down.gif) [Additional examples](#examples)
- ![](../images/down.gif) [Limitations](#limitations)
- ![](../images/down.gif) [Logging](#logging)

### Directives

- ![](../images/down.gif) [AuthnzFcgiCheckAuthnProvider](#authnzfcgicheckauthnprovider)
- ![](../images/down.gif) [AuthnzFcgiDefineProvider](#authnzfcgidefineprovider)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authnz_fcgi)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authnz_fcgi)

### See also

- [Authentication, Authorization,
  and Access Control](howto__auth.md)
- `mod_auth_basic`
- `fcgistarter`
- `mod_proxy_fcgi`

[![top](../images/up.gif)](#page-header)

## Invocation modes [¶](#invocations "Permanent link")

The invocation modes for FastCGI authorizers supported by this
module are distinguished by two characteristics, *type* and
auth *mechanism*.

*Type* is simply `authn` for authentication,
`authz` for authorization, or `authnz` for
combined authentication and authorization.

Auth *mechanism* refers to the Apache httpd configuration
mechanisms and processing phases, and can be `AuthBasicProvider`, `Require`, or `check_user_id`. The first two of these
correspond to the directives used to enable participation in the
appropriate processing phase.

Descriptions of each mode:

*Type* `authn`, *mechanism* `AuthBasicProvider`
:   In this mode,
    `FCGI_ROLE` is set to `AUTHORIZER` and
    `FCGI_APACHE_ROLE` is set to `AUTHENTICATOR`.
    The application must be defined as provider type *authn*
    using `AuthnzFcgiDefineProvider` and enabled with
    `AuthBasicProvider`.
    When invoked, the application is
    expected to authenticate the client using the provided user id and
    password. Example application:

    ```
    #!/usr/bin/perl
    use FCGI;
    my $request = FCGI::Request();
    while ($request->Accept() >= 0) {
        die if $ENV{'FCGI_APACHE_ROLE'} ne "AUTHENTICATOR";
        die if $ENV{'FCGI_ROLE'}        ne "AUTHORIZER";
        die if !$ENV{'REMOTE_PASSWD'};
        die if !$ENV{'REMOTE_USER'};

        print STDERR "This text is written to the web server error log.\n";

        if ( ($ENV{'REMOTE_USER' } eq "foo" || $ENV{'REMOTE_USER'} eq "foo1") &&
            $ENV{'REMOTE_PASSWD'} eq "bar" ) {
            print "Status: 200\n";
            print "Variable-AUTHN_1: authn_01\n";
            print "Variable-AUTHN_2: authn_02\n";
            print "\n";
        }
        else {
            print "Status: 401\n\n";
        }
    }
    ```

    Example configuration:

    ```
    AuthnzFcgiDefineProvider authn FooAuthn fcgi://localhost:10102/
    <Location "/protected/">
      AuthType Basic
      AuthName "Restricted"
      AuthBasicProvider FooAuthn
      Require ...
    </Location>
    ```

*Type* `authz`, *mechanism* `Require`
:   In this mode, `FCGI_ROLE` is set to `AUTHORIZER` and `FCGI_APACHE_ROLE` is set to
    `AUTHORIZER`. The application must be defined as
    provider type *authz* using `AuthnzFcgiDefineProvider`. When invoked, the application
    is expected to authorize the client using the provided user id and other
    request data. Example application:

    ```
    #!/usr/bin/perl
    use FCGI;
    my $request = FCGI::Request();
    while ($request->Accept() >= 0) {
        die if $ENV{'FCGI_APACHE_ROLE'} ne "AUTHORIZER";
        die if $ENV{'FCGI_ROLE'}        ne "AUTHORIZER";
        die if $ENV{'REMOTE_PASSWD'};

        print STDERR "This text is written to the web server error log.\n";

        if ($ENV{'REMOTE_USER'} eq "foo1") {
            print "Status: 200\n";
            print "Variable-AUTHZ_1: authz_01\n";
            print "Variable-AUTHZ_2: authz_02\n";
            print "\n";
        }
        else {
            print "Status: 403\n\n";
        }
    }
    ```

    Example configuration:

    ```
    AuthnzFcgiDefineProvider authz FooAuthz fcgi://localhost:10103/
    <Location "/protected/">
      AuthType ...
      AuthName ...
      AuthBasicProvider ...
      Require FooAuthz
    </Location>
    ```

*Type* `authnz`, *mechanism* `AuthBasicProvider` *+* `Require`
:   In this mode, which supports the web server-agnostic FastCGI
    `AUTHORIZER` protocol, `FCGI_ROLE` is set to
    `AUTHORIZER` and `FCGI_APACHE_ROLE` is not set.
    The application must be defined as provider type *authnz*
    using `AuthnzFcgiDefineProvider`. The application is expected to
    handle both authentication and authorization in the same invocation
    using the user id, password, and other request data. The invocation
    occurs during the Apache httpd API authentication phase. If the
    application returns 200 and the same provider is invoked during the
    authorization phase (via `Require`), mod\_authnz\_fcgi
    will return success for the authorization phase without invoking the
    application. Example application:

    ```
    #!/usr/bin/perl
    use FCGI;
    my $request = FCGI::Request();
    while ($request->Accept() >= 0) {
        die if $ENV{'FCGI_APACHE_ROLE'};
        die if $ENV{'FCGI_ROLE'} ne "AUTHORIZER";
        die if !$ENV{'REMOTE_PASSWD'};
        die if !$ENV{'REMOTE_USER'};

        print STDERR "This text is written to the web server error log.\n";

        if ( ($ENV{'REMOTE_USER' } eq "foo" || $ENV{'REMOTE_USER'} eq "foo1") &&
            $ENV{'REMOTE_PASSWD'} eq "bar" &&
            $ENV{'REQUEST_URI'} =~ m%/bar/.*%) {
            print "Status: 200\n";
            print "Variable-AUTHNZ_1: authnz_01\n";
            print "Variable-AUTHNZ_2: authnz_02\n";
            print "\n";
        }
        else {
            print "Status: 401\n\n";
        }
    }
    ```

    Example configuration:

    ```
    AuthnzFcgiDefineProvider authnz FooAuthnz fcgi://localhost:10103/
    <Location "/protected/">
      AuthType Basic
      AuthName "Restricted"
      AuthBasicProvider FooAuthnz
      Require FooAuthnz
    </Location>
    ```

*Type* `authn`, *mechanism* `check_user_id`
:   In this mode, `FCGI_ROLE` is set to `AUTHORIZER` and `FCGI_APACHE_ROLE` is set to
    `AUTHENTICATOR`. The application must be defined as
    provider type *authn* using `AuthnzFcgiDefineProvider`. `AuthnzFcgiCheckAuthnProvider`
    specifies when it is called. Example application:

    ```
    #!/usr/bin/perl
    use FCGI;
    my $request = FCGI::Request();
    while ($request->Accept() >= 0) {
        die if $ENV{'FCGI_APACHE_ROLE'} ne "AUTHENTICATOR";
        die if $ENV{'FCGI_ROLE'} ne "AUTHORIZER";

        # This authorizer assumes that the RequireBasicAuth option of 
        # AuthnzFcgiCheckAuthnProvider is On:
        die if !$ENV{'REMOTE_PASSWD'};
        die if !$ENV{'REMOTE_USER'};

        print STDERR "This text is written to the web server error log.\n";

        if ( ($ENV{'REMOTE_USER' } eq "foo" || $ENV{'REMOTE_USER'} eq "foo1") &&
            $ENV{'REMOTE_PASSWD'} eq "bar" ) {
            print "Status: 200\n";
            print "Variable-AUTHNZ_1: authnz_01\n";
            print "Variable-AUTHNZ_2: authnz_02\n";
            print "\n";
        }
        else {
            print "Status: 401\n\n";
            # If a response body is written here, it will be returned to
            # the client.
        }
    }
    ```

    Example configuration:

    ```
    AuthnzFcgiDefineProvider authn FooAuthn fcgi://localhost:10103/
    <Location "/protected/">
      AuthType ...
      AuthName ...
      AuthnzFcgiCheckAuthnProvider FooAuthn \
                                   Authoritative On \
                                   RequireBasicAuth Off \
                                   UserExpr "%{reqenv:REMOTE_USER}"
      Require ...
    </Location>
    ```

[![top](../images/up.gif)](#page-header)

## Additional examples [¶](#examples "Permanent link")

1. If your application supports the separate authentication and
   authorization roles (`AUTHENTICATOR` and `AUTHORIZER`), define
   separate providers as follows, even if they map to the same
   application:

   ```
   AuthnzFcgiDefineProvider authn  FooAuthn  fcgi://localhost:10102/
   AuthnzFcgiDefineProvider authz  FooAuthz  fcgi://localhost:10102/
   ```

   Specify the authn provider on
   `AuthBasicProvider`
   and the authz provider on
   `Require`:

   ```
   AuthType Basic
   AuthName "Restricted"
   AuthBasicProvider FooAuthn
   Require FooAuthz
   ```
2. If your application supports the generic `AUTHORIZER` role
   (authentication and authorizer in one invocation), define a
   single provider as follows:

   ```
   AuthnzFcgiDefineProvider authnz FooAuthnz fcgi://localhost:10103/
   ```

   Specify the authnz provider on both `AuthBasicProvider`
   and `Require`:

   ```
   AuthType Basic
   AuthName "Restricted"
   AuthBasicProvider FooAuthnz
   Require FooAuthnz
   ```

[![top](../images/up.gif)](#page-header)

## Limitations [¶](#limitations "Permanent link")

The following are potential features which are not currently
implemented:

Apache httpd access checker
:   The Apache httpd API *access check* phase is a separate
    phase from authentication and authorization. Some other FastCGI
    implementations implement this phase, which is denoted by the
    setting of `FCGI_APACHE_ROLE` to `ACCESS_CHECKER`.

Local (Unix) sockets or pipes
:   Only TCP sockets are currently supported.

Support for mod\_authn\_socache
:   mod\_authn\_socache interaction should be implemented for
    applications which participate in Apache httpd-style
    authentication.

Support for digest authentication using AuthDigestProvider
:   This is expected to be a permanent limitation as there is
    no authorizer flow for retrieving a hash.

Application process management
:   This is expected to be permanently out of scope for
    this module. Application processes must be controlled by
    other means. For example, `fcgistarter` can be used to
    start them.

AP\_AUTH\_INTERNAL\_PER\_URI
:   All providers are currently registered as
    AP\_AUTH\_INTERNAL\_PER\_CONF, which means that checks are not
    performed again for internal subrequests with the same
    access control configuration as the initial request.

Protocol data charset conversion
:   If mod\_authnz\_fcgi runs in an EBCDIC compilation
    environment, all FastCGI protocol data is written in EBCDIC
    and expected to be received in EBCDIC.

Multiple requests per connection
:   Currently the connection to the FastCGI authorizer is
    closed after every phase of processing. For example, if the
    authorizer handles separate *authn* and *authz*
    phases then two connections will be used.

URI Mapping
:   URIs from clients can't be mapped, such as with the `ProxyPass` used with FastCGI responders.

[![top](../images/up.gif)](#page-header)

## Logging [¶](#logging "Permanent link")

1. Processing errors are logged at log level `error`
   and higher.
2. Messages written by the application are logged at log
   level `warn`.
3. General messages for debugging are logged at log level
   `debug`.
4. Environment variables passed to the application are
   logged at log level `trace2`. The value of the
   `REMOTE_PASSWD` variable will be obscured,
   but **any other sensitive data will be visible in the
   log**.
5. All I/O between the module and the FastCGI application,
   including all environment variables, will be logged in printable
   and hex format at log level `trace5`. **All
   sensitive data will be visible in the log.**

`LogLevel` can be used
to configure a log level specific to mod\_authnz\_fcgi. For
example:

```
LogLevel info authnz_fcgi:trace8
```

[![top](../images/up.gif)](#page-header)

## AuthnzFcgiCheckAuthnProvider Directive [¶](#authnzfcgicheckauthnprovider "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables a FastCGI application to handle the check\_authn authentication hook. |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthnzFcgiCheckAuthnProvider provider-name|None option ...` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_fcgi |

This directive is used to enable a FastCGI authorizer to
handle a specific processing phase of authentication or
authorization.

Some capabilities of FastCGI authorizers require enablement
using this directive instead of
`AuthBasicProvider`:

- Non-Basic authentication; generally, determining the user
  id of the client and returning it from the authorizer; see the
  `UserExpr` option below
- Selecting a custom response code; for a non-200 response
  from the authorizer, the code from the authorizer will be the
  status of the response
- Setting the body of a non-200 response; if the authorizer
  provides a response body with a non-200 response, that body
  will be returned to the client; up to 8192 bytes of text are
  supported

*provider-name*
:   This is the name of a provider defined with `AuthnzFcgiDefineProvider`.

`None`
:   Specify `None` to disable a provider enabled
    with this directive in an outer scope, such as in a parent
    directory.

*option*
:   The following options are supported:

    Authoritative On|Off (default On)
    :   This controls whether or not other modules are allowed
        to run when this module has a FastCGI authorizer configured
        and it fails the request.

    DefaultUser *userid*
    :   When the authorizer returns success and `UserExpr`
        is configured and evaluates to an empty string (e.g., authorizer
        didn't return a variable), this value will be used as the user
        id. This is typically used when the authorizer has a concept of
        guest, or unauthenticated, users and guest users are mapped to
        some specific user id for logging and other purposes.

    RequireBasicAuth On|Off (default Off)
    :   This controls whether or not Basic auth is required
        before passing the request to the authorizer. If required,
        the authorizer won't be invoked without a user id and
        password; 401 will be returned for a request without that.

    UserExpr *expr* (no default)
    :   When Basic authentication isn't provided by the client
        and the authorizer determines the user, this expression,
        evaluated after calling the authorizer, determines the
        user. The expression follows [ap\_expr syntax](expr.md) and must resolve to a string. A typical
        use is to reference a `Variable-XXX`
        setting returned by the authorizer using an option like
        `UserExpr "%{reqenv:XXX}"`. If
        this option is specified and the user id can't be retrieved
        using the expression after a successful authentication, the
        request will be rejected with a 500 error.

[![top](../images/up.gif)](#page-header)

## AuthnzFcgiDefineProvider Directive [¶](#authnzfcgidefineprovider "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Defines a FastCGI application as a provider for authentication and/or authorization |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthnzFcgiDefineProvider type provider-name backend-address` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_fcgi |

This directive is used to define a FastCGI application as
a provider for a particular phase of authentication or
authorization.

*type*
:   This must be set to *authn* for authentication,
    *authz* for authorization, or *authnz* for
    a generic FastCGI authorizer which performs both checks.

*provider-name*
:   This is used to assign a name to the provider which is
    used in other directives such as
    `AuthBasicProvider`
    and
    `Require`.

*backend-address*
:   This specifies the address of the application, in the form
    *fcgi://hostname:port/*. The application process(es)
    must be managed independently, such as with
    `fcgistarter`.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authnz_fcgi.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authnz_fcgi.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
