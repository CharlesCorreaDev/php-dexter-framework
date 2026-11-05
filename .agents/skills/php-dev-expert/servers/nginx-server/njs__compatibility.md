# Compatibility

> **Fonte / Source:** https://nginx.org/en/docs/njs/compatibility.html

---

## Compatibility

This page describes the JavaScript surface provided by njs:

- the njs and nginx objects, built-in modules, and the
  `Buffer` object, available with both the
  [QuickJS](njs__engine.md#quickjs_engine) and
  [njs](njs__engine.md#njs_engine) engines;
- the ECMAScript language features implemented by the
  [njs](njs__engine.md#njs_engine) engine.

Definitions of njs specific properties and methods
not compliant with ECMAScript can be found in
[Reference](njs__reference.md).
Definitions of standard ECMAScript objects and methods
can be found in the
[ECMAScript
specification](http://www.ecma-international.org/ecma-262/).

#### njs and nginx objects, modules, and Buffer

The objects, modules, and methods listed below are available with both the
[QuickJS](njs__engine.md#quickjs_engine) and
[njs](njs__engine.md#njs_engine) engines,
unless noted otherwise.

- `Buffer` methods
  ([0.4.4](njs__changes.md#njs0.4.4)):
  - [`alloc`](njs__reference.md#buffer_alloc),
    [`allocUnsafe`](njs__reference.md#buffer_alloc_unsafe),
    [`byteLength`](njs__reference.md#buffer_bytelength),
    [`compare`](njs__reference.md#buffer_compare),
    [`concat`](njs__reference.md#buffer_concat),
    [`from`](njs__reference.md#buffer_from_array),
    [`isBuffer`](njs__reference.md#buffer_is_buffer),
    [`isEncoding`](njs__reference.md#buffer_is_encoding)
- `Buffer` prototype methods
  ([0.4.4](njs__changes.md#njs0.4.4)):
  - [`compare`](njs__reference.md#buf_compare),
    [`copy`](njs__reference.md#buf_copy),
    [`equals`](njs__reference.md#buf_equals),
    [`fill`](njs__reference.md#buf_fill),
    [`includes`](njs__reference.md#buf_includes),
    [`indexOf`](njs__reference.md#buf_indexof),
    [`lastIndexOf`](njs__reference.md#buf_lastindexof),
    [`readIntBE`](njs__reference.md#buf_readintbe),
    `readInt8`,
    `readInt16BE`,
    `readInt32BE`,
    [`readIntLE`](njs__reference.md#buf_readintle),
    `readInt16LE`,
    `readInt32LE`,
    [`readUIntBE`](njs__reference.md#buf_readuintbe),
    `readUInt8`,
    `readUInt16BE`,
    `readUInt32BE`,
    [`readUIntLE`](njs__reference.md#buf_readuintle),
    `readUInt16LE`,
    `readUInt32LE`,
    [`readDoubleBE`](njs__reference.md#buf_readdoublebe),
    [`readDoubleLE`](njs__reference.md#buf_readdoublele),
    [`readFloatBE`](njs__reference.md#buf_readfloatbe),
    [`readFloatLE`](njs__reference.md#buf_readfloatle),
    [`subarray`](njs__reference.md#buf_subarray),
    [`slice`](njs__reference.md#buf_slice),
    [`swap16`](njs__reference.md#buf_swap16),
    [`swap32`](njs__reference.md#buf_swap32),
    [`swap64`](njs__reference.md#buf_swap64),
    [`toJSON`](njs__reference.md#buf_tojson),
    [`toString`](njs__reference.md#buf_tostring),
    [`write`](njs__reference.md#buf_write),
    [`writeIntBE`](njs__reference.md#buf_writeintbe),
    `writeInt8`,
    `writeInt16BE`,
    `writeInt32BE`,
    [`writeIntLE`](njs__reference.md#buf_writeintle),
    `writeInt16LE`,
    `writeInt32LE`,
    [`writeUIntBE`](njs__reference.md#buf_writeuintbe),
    `writeUInt8`,
    `writeUInt16BE`,
    `writeUInt32BE`,
    [`writeUIntLE`](njs__reference.md#buf_writeuintle),
    `writeUInt16LE`,
    `writeUInt32LE`,
    [`writeDoubleBE`](njs__reference.md#buf_writedoublebe),
    [`writeDoubleLE`](njs__reference.md#buf_writedoublele),
    [`writeFloatBE`](njs__reference.md#buf_writefloatbe),
    [`writeFloatLE`](njs__reference.md#buf_writefloatle)
- [`Crypto`](njs__reference.md#crypto) methods
  ([0.2.0](njs__changes.md#njs0.2.0)):
  [`crypto.createHash`](njs__reference.md#crypto_createhash),
  [`crypto.createHmac`](njs__reference.md#crypto_createhmac)
- [`Query String`](njs__reference.md#querystring)
  methods
  ([0.4.3](njs__changes.md#njs0.4.3)):
  [`querystring.decode`](njs__reference.md#querystring_decode),
  [`querystring.encode`](njs__reference.md#querystring_encode),
  [`querystring.escape`](njs__reference.md#querystring_escape),
  [`querystring.parse`](njs__reference.md#querystring_parse),
  [`querystring.stringify`](njs__reference.md#querystring_stringify),
  [`querystring.unescape`](njs__reference.md#querystring_unescape)
- [`TextDecoder`](njs__reference.md#textdecoder)
  methods
  ([0.4.3](njs__changes.md#njs0.4.3)):
  [`encoding`](njs__reference.md#textdecoder_encoding),
  [`fatal`](njs__reference.md#textdecoder_fatal),
  [`ignoreBOM`](njs__reference.md#textdecoder_ignorebom),
  [`decode`](njs__reference.md#textdecoder_decode)
- [`TextEncoder`](njs__reference.md#textencoder)
  methods
  ([0.4.3](njs__changes.md#njs0.4.3)):
  [`encode`](njs__reference.md#textencoder_encode),
  [`encodeInto`](njs__reference.md#textencoder_encodeinto)
- [`XML`](njs__reference.md#xml)
  methods
  ([0.7.10](njs__changes.md#njs0.7.10)):
  [`parse`](njs__reference.md#xml_parse),
  [`xml.c14n`](njs__reference.md#xml_c14n),
  [`xml.exclusiveC14n`](njs__reference.md#xml_exclusivec14n)
- [`zlib`](njs__reference.md#zlib)
  methods
  ([0.7.12](njs__changes.md#njs0.7.12)):
  [`deflateRawSync`](njs__reference.md#zlib_deflaterawsync),
  [`deflateSync`](njs__reference.md#zlib_deflatesync),
  [`inflateRawSync`](njs__reference.md#zlib_inflaterawsync),
  [`inflateSync`](njs__reference.md#zlib_inflatesync)
- `File system` methods:
  [`fs.accessSync`](njs__reference.md#fs_accesssync)
  ([0.3.9](njs__changes.md#njs0.3.9)),
  [`fs.appendFileSync`](njs__reference.md#fs_appendfilesync),
  [`fs.closeSync`](njs__reference.md#fs_closesync),
  [`fs.existsSync`](njs__reference.md#fs_existssync)
  ([0.8.2](njs__changes.md#njs0.8.2)),
  [`fs.FileHandle`](njs__reference.md#fs_filehandle)
  ([0.7.7](njs__changes.md#njs0.7.7)),
  [`fs.fstatSync`](njs__reference.md#fs_fstatsync)
  ([0.7.7](njs__changes.md#njs0.7.7)),
  [`fs.lstatSync`](njs__reference.md#fs_lstatsync)
  ([0.7.1](njs__changes.md#njs0.7.1)),
  [`fs.mkdirSync`](njs__reference.md#fs_mkdirsync)
  ([0.4.2](njs__changes.md#njs0.4.2)),
  [`fs.openSync`](njs__reference.md#fs_opensync)
  ([0.7.7](njs__changes.md#njs0.7.7)),
  [`fs.promises.open`](njs__reference.md#fs_promises_open)
  ([0.7.7](njs__changes.md#njs0.7.7)),
  [`fs.readdirSync`](njs__reference.md#fs_readdirsync)
  ([0.4.2](njs__changes.md#njs0.4.2)),
  [`fs.readFileSync`](njs__reference.md#fs_readfilesync),
  [`fs.readSync`](njs__reference.md#fs_readsync)
  ([0.7.7](njs__changes.md#njs0.7.7)),
  [`fs.realpathSync`](njs__reference.md#fs_realpathsync)
  ([0.3.9](njs__changes.md#njs0.3.9)),
  [`fs.renameSync`](njs__reference.md#fs_renamesync)
  ([0.3.4](njs__changes.md#njs0.3.4)),
  [`fs.rmdirSync`](njs__reference.md#fs_rmdirsync)
  ([0.4.2](njs__changes.md#njs0.4.2)),
  [`fs.symlinkSync`](njs__reference.md#fs_symlinksync)
  ([0.3.9](njs__changes.md#njs0.3.9)),
  [`fs.unlinkSync`](njs__reference.md#fs_unlinksync)
  ([0.3.9](njs__changes.md#njs0.3.9)),
  [`fs.writeFileSync`](njs__reference.md#fs_writefilesync),
  [`fs.writeSync`](njs__reference.md#fs_writesync_buf)
  ([0.7.7](njs__changes.md#njs0.7.7))
- `fs.promises` API ([0.3.9](njs__changes.md#njs0.3.9)),
  asynchronous version of file system methods.
- Global functions:
  [`atob`](njs__reference.md#atob),
  [`btoa`](njs__reference.md#btoa)
  (available with the njs engine since
  [0.7.6](njs__changes.md#njs0.7.6)
  and with the QuickJS engine since
  [1.0.1](njs__changes.md#njs1.0.1))
- [`clearTimeout`](njs__reference.md#cleartimeout)
  and
  [`setTimeout`](njs__reference.md#settimeout)
  functions
  ([0.2.0](njs__changes.md#njs0.2.0))
- Global objects
  ([0.3.3](njs__changes.md#njs0.3.3)):
  - [`console`](njs__reference.md#console)
    ([0.8.2](njs__changes.md#njs0.8.2)):
    [`error`](njs__reference.md#console_error),
    [`info`](njs__reference.md#console_info),
    [`log`](njs__reference.md#console_log),
    [`time`](njs__reference.md#console_time),
    [`timeEnd`](njs__reference.md#console_time_end),
    [`warn`](njs__reference.md#console_warn)
  - [`crypto`](njs__reference.md#builtin_crypto)
    ([0.7.0](njs__changes.md#njs0.7.0)):
    [`getRandomValues`](njs__reference.md#crypto_get_random_values),
    [`randomUUID`](njs__reference.md#crypto_random_uuid)
    ([0.9.7](njs__changes.md#njs0.9.7)),
    [`subtle.encrypt`](njs__reference.md#crypto_subtle_encrypt),
    [`subtle.decrypt`](njs__reference.md#crypto_subtle_decrypt),
    [`subtle.deriveBits`](njs__reference.md#crypto_subtle_derive_bits),
    [`subtle.deriveKey`](njs__reference.md#crypto_subtle_derive_key),
    [`subtle.digest`](njs__reference.md#crypto_subtle_digest),
    [`subtle.exportKey`](njs__reference.md#crypto_subtle_export_key)
    ([0.7.10](njs__changes.md#njs0.7.10)),
    [`subtle.generateKey`](njs__reference.md#crypto_subtle_generate_key)
    ([0.7.10](njs__changes.md#njs0.7.10)),
    [`subtle.importKey`](njs__reference.md#crypto_subtle_import_key),
    [`subtle.sign`](njs__reference.md#crypto_subtle_sign),
    [`subtle.verify`](njs__reference.md#crypto_subtle_verify),
    [`subtle.wrapKey`](njs__reference.md#crypto_subtle_wrap_key)
    ([0.9.7](njs__changes.md#njs0.9.7)),
    [`subtle.unwrapKey`](njs__reference.md#crypto_subtle_unwrap_key)
    ([0.9.7](njs__changes.md#njs0.9.7))
  - `globalThis` alias
    ([0.3.8](njs__changes.md#njs0.3.8))
  - [`njs`](njs__reference.md#njs):
    [`version`](njs__reference.md#njs_version),
    [`version_number`](njs__reference.md#njs_version_number)
    ([0.7.4](njs__changes.md#njs0.7.4)),
    [`dump`](njs__reference.md#njs_dump)
    (njs engine only),
    [`memoryStats`](njs__reference.md#njs_memory_stats)
    ([0.7.8](njs__changes.md#njs0.7.8), njs engine only),
    [`on`](njs__reference.md#njs_on)
    ([0.5.2](njs__changes.md#njs0.5.2))
  - [`process`](njs__reference.md#process):
    [`argv`](njs__reference.md#process_argv),
    [`env`](njs__reference.md#process_env),
    [`pid`](njs__reference.md#process_pid),
    [`ppid`](njs__reference.md#process_ppid)
- nginx object methods:
  - [`HTTP Request`](njs__reference.md#http):
    [`r.done`](njs__reference.md#r_done)
    ([0.5.2](njs__changes.md#njs0.5.2)),
    [`r.error`](njs__reference.md#r_error),
    [`r.finish`](njs__reference.md#r_finish),
    [`r.internalRedirect`](njs__reference.md#r_internal_redirect),
    [`r.log`](njs__reference.md#r_log),
    [`r.return`](njs__reference.md#r_return)
    ([0.5.0](njs__changes.md#njs0.5.0)),
    [`r.send`](njs__reference.md#r_send)
    ([0.5.0](njs__changes.md#njs0.5.0)),
    [`r.sendBuffer`](njs__reference.md#r_sendbuffer)
    ([0.5.2](njs__changes.md#njs0.5.2)),
    [`r.sendHeader`](njs__reference.md#r_send_header),
    [`r.setReturnValue`](njs__reference.md#r_set_return_value)
    ([0.7.0](njs__changes.md#njs0.7.0)),
    [`r.subrequest`](njs__reference.md#r_subrequest),
    [`r.warn`](njs__reference.md#r_warn)
  - [`Stream Session`](njs__reference.md#stream):
    [`s.allow`](njs__reference.md#s_allow)
    ([0.2.4](njs__changes.md#njs0.2.4)),
    [`s.decline`](njs__reference.md#s_decline)
    ([0.2.4](njs__changes.md#njs0.2.4)),
    [`s.deny`](njs__reference.md#s_deny)
    ([0.2.4](njs__changes.md#njs0.2.4)),
    [`s.done`](njs__reference.md#s_done)
    ([0.2.4](njs__changes.md#njs0.2.4)),
    [`s.error`](njs__reference.md#s_error),
    [`s.log`](njs__reference.md#s_log),
    [`s.off`](njs__reference.md#s_off)
    ([0.2.4](njs__changes.md#njs0.2.4)),
    [`s.on`](njs__reference.md#s_on)
    ([0.2.4](njs__changes.md#njs0.2.4)),
    [`s.send`](njs__reference.md#s_send)
    ([0.2.4](njs__changes.md#njs0.2.4)),
    [`s.sendDownstream`](njs__reference.md#s_send_downstream)
    ([0.7.8](njs__changes.md#njs0.7.8)),
    [`s.sendUpstream`](njs__reference.md#s_send_upstream)
    ([0.7.8](njs__changes.md#njs0.7.8)),
    [`s.setReturnValue`](njs__reference.md#s_set_return_value)
    ([0.7.0](njs__changes.md#njs0.7.0)),
    [`s.warn`](njs__reference.md#s_warn)
  - [`Headers`](njs__reference.md#headers)
    ([0.5.1](njs__changes.md#njs0.5.1)):
    [`append`](njs__reference.md#headers_append),
    [`delete`](njs__reference.md#headers_delete),
    [`get`](njs__reference.md#headers_get),
    [`getAll`](njs__reference.md#headers_getall),
    [`forEach`](njs__reference.md#headers_foreach),
    [`has`](njs__reference.md#headers_has),
    [`set`](njs__reference.md#headers_set)
  - [`Request`](njs__reference.md#request)
    ([0.7.10](njs__changes.md#njs0.7.10)):
    [`arrayBuffer`](njs__reference.md#request_arraybuffer),
    [`headers`](njs__reference.md#request_headers),
    [`json`](njs__reference.md#request_json),
    [`text`](njs__reference.md#request_text)
  - [`Response`](njs__reference.md#response)
    ([0.5.1](njs__changes.md#njs0.5.1)):
    [`arrayBuffer`](njs__reference.md#response_arraybuffer),
    [`headers`](njs__reference.md#response_headers),
    [`json`](njs__reference.md#response_json),
    [`text`](njs__reference.md#response_text)
  - [`ngx`](njs__reference.md#ngx)
    ([0.5.0](njs__changes.md#njs0.5.0)):
    [`fetch`](njs__reference.md#ngx_fetch)
    ([0.5.1](njs__changes.md#njs0.5.1)),
    [`log`](njs__reference.md#ngx_log)
  - [`ngx.shared`](njs__reference.md#ngx_shared)
    ([0.8.0](njs__changes.md#njs0.8.0)):
    [`add`](njs__reference.md#dict_add),
    [`clear`](njs__reference.md#dict_clear),
    [`delete`](njs__reference.md#dict_delete),
    [`freeSpace`](njs__reference.md#dict_freespace),
    [`get`](njs__reference.md#dict_get),
    [`has`](njs__reference.md#dict_has),
    [`incr`](njs__reference.md#dict_incr),
    [`items`](njs__reference.md#dict_items),
    [`keys`](njs__reference.md#dict_keys),
    [`pop`](njs__reference.md#dict_pop),
    [`replace`](njs__reference.md#dict_replace),
    [`set`](njs__reference.md#dict_set),
    [`size`](njs__reference.md#dict_size),
    [`ttl`](njs__reference.md#dict_ttl)
    ([0.9.7](njs__changes.md#njs0.9.7))
- nginx object properties:
  - [`HTTP Request`](njs__reference.md#http):
    [`r.args`](njs__reference.md#r_args),
    [`r.headersIn`](njs__reference.md#r_headers_in),
    [`r.headersOut`](njs__reference.md#r_headers_out),
    [`r.httpVersion`](njs__reference.md#r_http_version),
    [`r.internal`](njs__reference.md#r_internal),
    [`r.jsVarNames`](njs__reference.md#r_js_var_names)
    ([0.9.9](njs__changes.md#njs0.9.9)),
    [`r.method`](njs__reference.md#r_method),
    [`r.parent`](njs__reference.md#r_parent),
    [`r.readRequestArrayBuffer`](njs__reference.md#r_read_request_array_buffer)
    ([0.9.9](njs__changes.md#njs0.9.9)),
    [`r.readRequestForm`](njs__reference.md#r_read_request_form)
    ([0.9.9](njs__changes.md#njs0.9.9)),
    [`r.readRequestJSON`](njs__reference.md#r_read_request_json)
    ([0.9.9](njs__changes.md#njs0.9.9)),
    [`r.readRequestText`](njs__reference.md#r_read_request_text)
    ([0.9.9](njs__changes.md#njs0.9.9)),
    [`r.rawHeadersIn`](njs__reference.md#r_raw_headers_in)
    ([0.4.1](njs__changes.md#njs0.4.1)),
    [`r.rawHeadersOut`](njs__reference.md#r_raw_headers_out)
    ([0.4.1](njs__changes.md#njs0.4.1)),
    [`r.rawVariables`](njs__reference.md#r_raw_variables)
    ([0.5.0](njs__changes.md#njs0.5.0)),
    [`r.remoteAddress`](njs__reference.md#r_remote_address),
    [`r.requestBuffer`](njs__reference.md#r_request_buffer)
    ([0.5.0](njs__changes.md#njs0.5.0)),
    [`r.requestText`](njs__reference.md#r_request_text),
    [`r.responseBuffer`](njs__reference.md#r_response_buffer)
    ([0.5.0](njs__changes.md#njs0.5.0)),
    [`r.responseText`](njs__reference.md#r_response_text)
    ([0.5.0](njs__changes.md#njs0.5.0)),
    [`r.status`](njs__reference.md#r_status),
    [`r.uri`](njs__reference.md#r_uri),
    [`r.variables`](njs__reference.md#r_variables)
    ([0.2.8](njs__changes.md#njs0.2.8))
  - [`Stream Session`](njs__reference.md#stream):
    [`s.jsVarNames`](njs__reference.md#s_js_var_names)
    ([0.9.9](njs__changes.md#njs0.9.9)),
    [`s.remoteAddress`](njs__reference.md#s_remote_address),
    [`s.rawVariables`](njs__reference.md#s_raw_variables)
    ([0.5.0](njs__changes.md#njs0.5.0)),
    [`s.status`](njs__reference.md#s_status)
    ([0.5.2](njs__changes.md#njs0.5.2)),
    [`s.variables`](njs__reference.md#s_variables)
    ([0.2.8](njs__changes.md#njs0.2.8))
  - [`Periodic Session`](njs__reference.md#periodic_session)
    ([0.8.1](njs__changes.md#njs0.8.1)):
    [`PeriodicSession.rawVariables`](njs__reference.md#periodic_session_raw_variables),
    [`PeriodicSession.variables`](njs__reference.md#periodic_session_variables)
  - [`Request`](njs__reference.md#request)
    ([0.7.10](njs__changes.md#njs0.7.10)):
    [`bodyUsed`](njs__reference.md#request_bodyused),
    [`cache`](njs__reference.md#request_cache),
    [`credentials`](njs__reference.md#request_credentials),
    [`method`](njs__reference.md#request_method),
    [`mode`](njs__reference.md#request_mode),
    [`url`](njs__reference.md#request_url)
  - [`Response`](njs__reference.md#response)
    ([0.5.1](njs__changes.md#njs0.5.1)):
    [`bodyUsed`](njs__reference.md#response_bodyused),
    [`ok`](njs__reference.md#response_ok),
    [`redirected`](njs__reference.md#response_redirect),
    [`status`](njs__reference.md#response_status),
    [`statusText`](njs__reference.md#response_statustext),
    [`type`](njs__reference.md#response_type),
    [`url`](njs__reference.md#response_url)
  - [`ngx`](njs__reference.md#ngx)
    ([0.5.0](njs__changes.md#njs0.5.0)):
    [`build`](njs__reference.md#ngx_build)
    ([0.8.0](njs__changes.md#njs0.8.0)),
    [`conf_file_path`](njs__reference.md#ngx_conf_file_path)
    ([0.8.0](njs__changes.md#njs0.8.0)),
    [`conf_prefix`](njs__reference.md#ngx_conf_prefix)
    ([0.7.8](njs__changes.md#njs0.7.8)),
    [`error_log_path`](njs__reference.md#ngx_error_log_path)
    ([0.8.0](njs__changes.md#njs0.8.0)),
    [`prefix`](njs__reference.md#ngx_prefix)
    ([0.8.0](njs__changes.md#njs0.8.0)),
    [`version`](njs__reference.md#ngx_version)
    ([0.8.0](njs__changes.md#njs0.8.0)),
    [`version_number`](njs__reference.md#ngx_version_number)
    ([0.8.0](njs__changes.md#njs0.8.0)),
    [`worker_id`](njs__reference.md#ngx_worker_id)
    ([0.8.0](njs__changes.md#njs0.8.0))
  - [`ngx.shared`](njs__reference.md#ngx_shared)
    ([0.8.0](njs__changes.md#njs0.8.0)):
    [`capacity`](njs__reference.md#dict_capacity),
    [`name`](njs__reference.md#dict_name),
    [`type`](njs__reference.md#dict_type)

#### ECMAScript compliance (njs engine)

> The ECMAScript language features listed below describe the
> [njs](njs__engine.md#njs_engine) engine,
> which is deprecated
> since [1.0.0](njs__changes.md#njs1.0.0).
> The [QuickJS](njs__engine.md#quickjs_engine)
> engine supports ES2023;
> new code should use the QuickJS engine instead.

The njs engine is implemented in compliance with
[ECMAScript 5.1](http://www.ecma-international.org/ecma-262/5.1/)
(strict mode) with some
[ECMAScript 6](http://www.ecma-international.org/ecma-262/6.0/)
and later extensions.
The compliance is still evolving.

- Boolean values, numbers, strings, objects, arrays,
  functions, function constructors
  ([0.3.6](njs__changes.md#njs0.3.6)),
  and regular expressions
- ES5.1 operators, ES7 exponentiation operators,
  ES2020 optional chaining
  ([0.9.6](njs__changes.md#njs0.9.6)),
  ES2021 logical assignment operators
  `||=`, `&&=`,
  `??=`
  ([0.9.6](njs__changes.md#njs0.9.6))
- ES5.1 statements:
  `break`,
  `catch`,
  `continue`,
  `do while`,
  `else`,
  `finally`,
  `for`,
  `for in`,
  `if`,
  `return`,
  `switch`,
  `throw`,
  `try`,
  `var`,
  `while`,
  labeled statements ([0.2.8](njs__changes.md#njs0.2.8))
- ES6 statements:
  `let` ([0.6.0](njs__changes.md#njs0.6.0)),
  `const` ([0.6.0](njs__changes.md#njs0.6.0)),
  `async` ([0.7.0](njs__changes.md#njs0.7.0)),
  `await` ([0.7.0](njs__changes.md#njs0.7.0))
- `Math` properties:
  - ES6:
    `E`,
    `LN10`,
    `LN2`,
    `LOG10E`,
    `LOG2E`,
    `PI`,
    `SQRT1_2`,
    `SQRT2`
- `Math` methods:
  - ES6:
    `abs`,
    `acos`,
    `acosh`,
    `asin`,
    `asinh`,
    `atan`,
    `atan2`,
    `atanh`,
    `cbrt`,
    `ceil`,
    `clz32`,
    `cos`,
    `cosh`,
    `exp`,
    `expm1`,
    `floor`,
    `fround`,
    `hypot`,
    `imul`,
    `log`,
    `log10`,
    `log1p`,
    `log2`,
    `max`,
    `min`,
    `pow`,
    `random`,
    `round`,
    `sign`,
    `sin`,
    `sinh`,
    `sqrt`,
    `tan`,
    `tanh`,
    `trunc`
- `Number` properties:
  - ES6:
    `EPSILON`,
    `MAX_SAFE_INTEGER`,
    `MAX_VALUE`,
    `MIN_SAFE_INTEGER`,
    `MIN_VALUE`,
    `NEGATIVE_INFINITY`,
    `NaN`,
    `POSITIVE_INFINITY`
- `Number` methods:
  - ES6:
    `isFinite`,
    `isInteger`,
    `isNaN`,
    `isSafeInteger`,
    `parseFloat`,
    `parseInt`
- `Number` prototype methods:
  - ES6:
    `toExponential`
    ([0.3.6](njs__changes.md#njs0.3.6)),
    `toFixed`
    ([0.3.6](njs__changes.md#njs0.3.6)),
    `toPrecision`
    ([0.3.6](njs__changes.md#njs0.3.6))
- `String` methods:
  - ES5.1:
    `fromCharCode`
  - ES6:
    `fromCodePoint`
- `String` prototype methods:
  - ES5.1:
    `charAt`,
    `concat`,
    `indexOf`,
    `lastIndexOf`,
    `match`,
    `replace`,
    `search`,
    `slice`,
    `split`,
    `substr`,
    `substring`,
    `toLowerCase`,
    `trim`,
    `toUpperCase`
  - ES6:
    `codePointAt`,
    `endsWith`,
    `includes`,
    `repeat`,
    `startsWith`
  - ES8:
    `padEnd`,
    `padStart`
  - ES9:
    `trimEnd`
    ([0.3.4](njs__changes.md#njs0.3.4)),
    `trimStart`
    ([0.3.4](njs__changes.md#njs0.3.4))
  - ES12:
    `replaceAll`
    ([0.7.10](njs__changes.md#njs0.7.10))
- `Object` methods:
  - ES5.1:
    `create` (support without properties list),
    `defineProperties` (accessor descriptors support
    since [0.3.3](njs__changes.md#njs0.3.3)),
    `defineProperty` (accessor descriptors support
    since [0.3.3](njs__changes.md#njs0.3.3)),
    `freeze`,
    `getOwnPropertyDescriptor`,
    `getOwnPropertyDescriptors`
    ([0.3.1](njs__changes.md#njs0.3.1)),
    `getOwnPropertyNames`
    ([0.3.1](njs__changes.md#njs0.3.1)),
    `getPrototypeOf`,
    `isExtensible`,
    `isFrozen`,
    `isSealed`,
    `keys`,
    `preventExtensions`,
    `seal`
  - ES6:
    `assign`
    ([0.3.7](njs__changes.md#njs0.3.7)),
    `is`
    ([0.3.8](njs__changes.md#njs0.3.8)),
    `setPrototypeOf`
    ([0.3.8](njs__changes.md#njs0.3.8))
  - ES8:
    `entries`
    ([0.2.7](njs__changes.md#njs0.2.7)),
    `values`
    ([0.2.7](njs__changes.md#njs0.2.7))
- `Object` prototype methods:
  - ES5.1:
    `hasOwnProperty`,
    `isPrototypeOf`
    ([0.3.0](njs__changes.md#njs0.3.0)),
    `propertyIsEnumerable`,
    `toString`,
    `valueOf`
- `Array` methods:
  - ES5.1:
    `isArray`
  - ES6:
    `of`,
    `from`
    ([0.8.0](njs__changes.md#njs0.8.0))
- `Array` prototype methods:
  - ES5.1:
    `concat`,
    `every`,
    `filter`,
    `forEach`,
    `indexOf`,
    `join`,
    `lastIndexOf`,
    `map`,
    `pop`,
    `push`,
    `reduce`,
    `reduceRight`,
    `reverse`,
    `shift`,
    `slice`,
    `some`,
    `sort`,
    `splice`,
    `unshift`
  - ES6:
    `copyWithin`
    ([0.3.7](njs__changes.md#njs0.3.7)),
    `fill`,
    `find`,
    `findIndex`
  - ES7: `includes`
  - ES2023:
    `toReversed`
    ([0.8.0](njs__changes.md#njs0.8.0)),
    `toSorted`
    ([0.8.0](njs__changes.md#njs0.8.0)),
    `toSpliced`
    ([0.8.0](njs__changes.md#njs0.8.0))
- `ArrayBuffer` methods
  ([0.3.8](njs__changes.md#njs0.3.8)):
  - ES6:
    `isView`
- `ArrayBuffer` prototype methods
  ([0.3.8](njs__changes.md#njs0.3.8)):
  - ES6:
    `slice`
- `Typed-array` constructors
  ([0.3.8](njs__changes.md#njs0.3.8)):
  - ES6:
    `Int8Array`,
    `Uint8Array`,
    `Uint8ClampedArray`,
    `Int16Array`,
    `Uint16Array`,
    `Int32Array`,
    `Uint32Array`,
    `Float32Array`,
    `Float64Array`
- `Typed-array` prototype methods
  ([0.3.8](njs__changes.md#njs0.3.8)):
  - ES6:
    `copyWithin`,
    `every`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `fill`,
    `filter`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `find`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `findIndex`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `forEach`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `includes`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `indexOf`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `join`,
    `lastIndexOf`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `map`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `reduce`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `reduceRight`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `reverse`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `set`,
    `slice`,
    `some`
    ([0.4.4](njs__changes.md#njs0.4.4)),
    `sort`
    ([0.4.2](njs__changes.md#njs0.4.2)),
    `subarray`,
    `toString`
  - ES2023:
    `toReversed`
    ([0.8.0](njs__changes.md#njs0.8.0)),
    `toSorted`
    ([0.8.0](njs__changes.md#njs0.8.0))
- `Promise` methods
  ([0.3.8](njs__changes.md#njs0.3.8)):
  - ES6:
    `all`
    ([0.6.2](njs__changes.md#njs0.6.2)),
    `race`
    ([0.6.2](njs__changes.md#njs0.6.2)),
    `reject`,
    `resolve`
  - ES2020:
    `allSettled`
    ([0.6.2](njs__changes.md#njs0.6.2))
  - ES2021:
    `any`
    ([0.6.2](njs__changes.md#njs0.6.2))
- `Promise` prototype methods
  ([0.3.8](njs__changes.md#njs0.3.8)):
  - ES6:
    `catch`,
    `finally`,
    `then`
- `Function` prototype methods:
  - ES5.1:
    `apply`,
    `bind`,
    `call`
- `RegExp` prototype accessor properties:
  - `flags` ([0.6.0](njs__changes.md#njs0.6.0)),
    `global`,
    `ignoreCase`,
    `multiline`,
    `source`,
    `sticky` ([0.6.0](njs__changes.md#njs0.6.0))
- `RegExp` prototype methods:
  - `[@@replace]`
    ([0.4.2](njs__changes.md#njs0.4.2)),
    `[@@split]`
    ([0.6.0](njs__changes.md#njs0.6.0))
  - ES5.1:
    `exec`,
    `test`,
    `toString`
- `RegExp` instance properties:
  - `lastIndex`
- `RegExp`
  ES9 named capture groups ([0.3.2](njs__changes.md#njs0.3.2))
- `DataView` prototype methods
  ([0.4.4](njs__changes.md#njs0.4.4)):
  - ES6:
    `getFloat32`,
    `getFloat64`,
    `getInt16`,
    `getInt32`,
    `getInt8`,
    `getUint16`,
    `getUint32`,
    `getUint8`,
    `setFloat32`,
    `setFloat64`,
    `setInt16`,
    `setInt32`,
    `setInt8`,
    `setUint16`,
    `setUint32`,
    `setUint8`
- `Date` methods:
  - ES5.1:
    `now`,
    `parse`,
    `UTC`
- `Date` prototype methods:
  - ES5.1:
    `getDate`,
    `getDay`,
    `getFullYear`,
    `getHours`,
    `getMilliseconds`,
    `getMinutes`,
    `getMonth`,
    `getSeconds`,
    `getTime`,
    `getTimezoneOffset`,
    `getUTCDate`,
    `getUTCDay`,
    `getUTCFullYear`,
    `getUTCHours`,
    `getUTCMilliseconds`,
    `getUTCMinutes`,
    `getUTCMonth`,
    `getUTCSeconds`,
    `toDateString`,
    `toISOString`,
    `toLocaleDateString`,
    `toLocaleString`,
    `toLocaleTimeString`,
    `toTimeString`,
    `toUTCString`,
    `setDate`,
    `setFullYear`,
    `setHours`,
    `setMinutes`,
    `setMilliseconds`,
    `setMonth`,
    `setSeconds`,
    `setTime`,
    `setUTCDate`,
    `setUTCFullYear`,
    `setUTCHours`,
    `setUTCMilliseconds`,
    `setUTCMinutes`,
    `setUTCMonth`,
    `setUTCSeconds`
- `JSON` methods:
  - ES5.1:
    `parse`,
    `stringify`
- `Symbol` methods
  ([0.7.6](njs__changes.md#njs0.7.6)):
  - `for`,
    `keyFor`
- ES5.1 `arguments` object
  ([0.2.5](njs__changes.md#njs0.2.5))
- ES6 rest parameters syntax (without destructuring support)
  ([0.2.7](njs__changes.md#njs0.2.7))
- ES5.1 global functions:
  `decodeURI`,
  `decodeURIComponent`,
  `encodeURI`,
  `encodeURIComponent`,
  `isFinite`,
  `isNaN`,
  `parseFloat`,
  `parseInt`
- `Error` objects:
  `Error`,
  `EvalError`,
  `InternalError`,
  `RangeError`,
  `ReferenceError`,
  `SyntaxError`,
  `TypeError`,
  `URIError`
- ES6 modules support:
  default `export` and
  default `import`
  statements
  ([0.3.0](njs__changes.md#njs0.3.0))
- ES6 arrow functions
  ([0.3.1](njs__changes.md#njs0.3.1))
- Template literals:
  multiline strings, expression interpolation, nesting templates
  ([0.3.2](njs__changes.md#njs0.3.2))
