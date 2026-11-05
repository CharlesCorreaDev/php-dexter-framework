# nginx JavaScript module

> **Fonte / Source:** https://nginx.org/en/docs/njs/index.html

---

## nginx JavaScript module

njs is an nginx module that extends the server's functionality through
JavaScript scripting, enabling the creation of custom
server-side logic and [more](#usecases).

nginx calls JavaScript handlers at a fixed set of
[integration points](njs__integration.md):
HTTP request and response processing phases, stream session phases,
variable evaluation, and periodic timers.
njs is not a standalone application runtime:
it has no start-up script and no event loop of its own,
JavaScript code runs only when nginx invokes a configured handler,
and control returns to nginx once the handler completes.

> The built-in
> [njs](njs__engine.md#njs_engine) JavaScript engine
> is deprecated
> since [1.0.0](njs__changes.md#njs1.0.0);
> new configurations should use the
> [QuickJS](njs__engine.md#quickjs_engine) engine.

#### Getting started

- [Download and install](njs__install.md)
- [Execution model and integration points](njs__integration.md)
- [Examples](https://github.com/nginx/njs-examples/)
- [Command-line interface](njs__cli.md)

#### Reference

- [Reference](njs__reference.md)
- [ngx\_http\_js\_module](http__ngx_http_js_module.md)
- [ngx\_stream\_js\_module](stream__ngx_stream_js_module.md)
- [JavaScript Engine](njs__engine.md)
- [Compatibility](njs__compatibility.md)
- [Native modules](njs__native_modules.md)
- [Using node modules with njs](njs__node_modules.md)
- [Writing njs code using TypeScript definition files](njs__typescript.md)
- [Understanding preloaded objects](njs__preload_objects.md)

#### Project

- [Changes](njs__changes.md)
- [Security](njs__security.md)
- [Tested OS and platforms](#tested_os_and_platforms)

#### Use cases

- Complex access control and security checks in njs
  before a request reaches an upstream server
- Manipulating response headers
- Writing flexible asynchronous content handlers and filters

See [examples](https://github.com/nginx/njs-examples/)
for more njs use cases.

#### Basic HTTP Example

To use njs in nginx:

- [install](njs__install.md) njs
- create an njs script file, for example, `http.js`.
  See [Reference](njs__reference.md)
  for the list of njs properties and methods.

  > ```
  > function hello(r) {
  >     r.return(200, "Hello world!");
  > }
  >
  > export default {hello};
  > ```
- in the `nginx.conf` file, enable
  [ngx\_http\_js\_module](http__ngx_http_js_module.md) module
  and specify the
  [js\_import](http__ngx_http_js_module.md#js_import)
  directive
  with the `http.js` script file:

  > ```
  > load_module modules/ngx_http_js_module.so;
  >
  > events {}
  >
  > http {
  >     # since 0.9.1
  >     js_engine qjs;
  >
  >     js_import http.js;
  >
  >     server {
  >         listen 8000;
  >
  >         location / {
  >             js_content http.hello;
  >         }
  >     }
  > }
  > ```

There is also a standalone [command line](njs__cli.md) utility
that can be used independently of nginx for njs development and debugging.

#### Tested OS and platforms

- FreeBSD / amd64;
- Linux / x86, amd64, arm64, ppc64el;
- Solaris 11 / amd64;
- macOS / x86\_64;

#### Presentation at nginx.conf 2018
