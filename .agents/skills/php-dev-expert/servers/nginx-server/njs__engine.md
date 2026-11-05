# JavaScript Engine

> **Fonte / Source:** https://nginx.org/en/docs/njs/engine.html

---

## JavaScript Engine

Starting from version [0.8.6](njs__changes.md#njs0.8.6),
multiple JavaScript engines are supported.
To specify a particular engine, use the `js_engine` directive
available for both the
[http](http__ngx_http_js_module.md#js_engine)
and
[stream](stream__ngx_stream_js_module.md#js_engine).
By default, the njs engine is used.

#### njs engine

> The njs engine is deprecated
> since [1.0.0](njs__changes.md#njs1.0.0);
> new code should use the
> [QuickJS](#quickjs_engine) engine instead.

njs is an embeddable JavaScript engine
developed as a part of the njs module.
See the [Compatibility](njs__compatibility.md) section for details.

#### QuickJS engine

[QuickJS](https://bellard.org/quickjs/) is a lightweight,
embeddable JavaScript engine that supports
the [ES2023](https://tc39.es/ecma262/2023/) specification,
including features as modules, asynchronous generators, proxies and BigInt.

Since version [0.8.6](njs__changes.md#njs0.8.6),
a drop-in replacement for
[njs/nginx objects](njs__reference.md)
has been introduced
to ensure compatibility with the njs engine, with the following exceptions:

- njs-specific API:
  [`njs.dump()`](njs__reference.md#njs_dump),
  `console.dump()`.
- deprecated API:
  `require()`,
  use the `import` statement instead.
- `js_preload_object` directive for
  [http](http__ngx_http_js_module.md#js_preload_object)
  and
  [stream](stream__ngx_stream_js_module.md#js_preload_object).

njs built-in modules status:

- [`buffer`](njs__reference.md#buffer):
  since [0.8.6](njs__changes.md#njs0.8.6).
- [`crypto`](njs__reference.md#crypto):
  since [0.8.10](njs__changes.md#njs0.8.10).
- [`fs`](njs__reference.md#njs_api_fs):
  since [0.8.9](njs__changes.md#njs0.8.9).
- [`querystring`](njs__reference.md#querystring):
  since [0.8.10](njs__changes.md#njs0.8.10).
- [`WebCrypto`](njs__reference.md#builtin_crypto):
  since [0.8.10](njs__changes.md#njs0.8.10).
- [`xml`](njs__reference.md#xml):
  since [0.8.10](njs__changes.md#njs0.8.10).
- [`zlib`](njs__reference.md#zlib):
  since [0.8.5](njs__changes.md#njs0.8.5).

njs built-in objects status:

- [`process`](njs__reference.md#process):
  since [0.8.8](njs__changes.md#njs0.8.8).
- [`TextDecoder`](njs__reference.md#textdecoder):
  since [0.8.10](njs__changes.md#njs0.8.10).
- [`TextEncoder`](njs__reference.md#textencoder):
  since [0.8.10](njs__changes.md#njs0.8.10).

nginx built-in objects status:

- [`ngx.fetch`](njs__reference.md#ngx_fetch):
  since [0.9.1](njs__changes.md#njs0.9.1).
- [`shared dictionary`](njs__reference.md#ngx_shared):
  since [0.8.8](njs__changes.md#njs0.8.8).
