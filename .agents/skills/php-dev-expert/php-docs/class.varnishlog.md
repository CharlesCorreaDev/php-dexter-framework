# A classe VarnishLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.varnishlog.php

---

# A classe VarnishLog

(PECL varnish >= 0.6)

## Introdução

## Resumo da classe

class **VarnishLog**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[TAG\_Debug](class.varnishlog.md#varnishlog.constants.tag-debug) = 0;

const
[int](language.types.integer.md)
[TAG\_Error](class.varnishlog.md#varnishlog.constants.tag-error) = 1;

const
[int](language.types.integer.md)
[TAG\_CLI](class.varnishlog.md#varnishlog.constants.tag-cli) = 2;

const
[int](language.types.integer.md)
[TAG\_StatSess](class.varnishlog.md#varnishlog.constants.tag-statsess) = 3;

const
[int](language.types.integer.md)
[TAG\_ReqEnd](class.varnishlog.md#varnishlog.constants.tag-reqend) = 4;

const
[int](language.types.integer.md)
[TAG\_SessionOpen](class.varnishlog.md#varnishlog.constants.tag-sessionopen) = 5;

const
[int](language.types.integer.md)
[TAG\_SessionClose](class.varnishlog.md#varnishlog.constants.tag-sessionclose) = 6;

const
[int](language.types.integer.md)
[TAG\_BackendOpen](class.varnishlog.md#varnishlog.constants.tag-backendopen) = 7;

const
[int](language.types.integer.md)
[TAG\_BackendXID](class.varnishlog.md#varnishlog.constants.tag-backendxid) = 8;

const
[int](language.types.integer.md)
[TAG\_BackendReuse](class.varnishlog.md#varnishlog.constants.tag-backendreuse) = 9;

const
[int](language.types.integer.md)
[TAG\_BackendClose](class.varnishlog.md#varnishlog.constants.tag-backendclose) = 10;

const
[int](language.types.integer.md)
[TAG\_HttpGarbage](class.varnishlog.md#varnishlog.constants.tag-httpgarbage) = 11;

const
[int](language.types.integer.md)
[TAG\_Backend](class.varnishlog.md#varnishlog.constants.tag-backend) = 12;

const
[int](language.types.integer.md)
[TAG\_Length](class.varnishlog.md#varnishlog.constants.tag-length) = 13;

const
[int](language.types.integer.md)
[TAG\_FetchError](class.varnishlog.md#varnishlog.constants.tag-fetcherror) = 14;

const
[int](language.types.integer.md)
[TAG\_RxRequest](class.varnishlog.md#varnishlog.constants.tag-rxrequest) = 15;

const
[int](language.types.integer.md)
[TAG\_RxResponse](class.varnishlog.md#varnishlog.constants.tag-rxresponse) = 16;

const
[int](language.types.integer.md)
[TAG\_RxStatus](class.varnishlog.md#varnishlog.constants.tag-rxstatus) = 17;

const
[int](language.types.integer.md)
[TAG\_RxURL](class.varnishlog.md#varnishlog.constants.tag-rxurl) = 18;

const
[int](language.types.integer.md)
[TAG\_RxProtocol](class.varnishlog.md#varnishlog.constants.tag-rxprotocol) = 19;

const
[int](language.types.integer.md)
[TAG\_RxHeader](class.varnishlog.md#varnishlog.constants.tag-rxheader) = 20;

const
[int](language.types.integer.md)
[TAG\_TxRequest](class.varnishlog.md#varnishlog.constants.tag-txrequest) = 21;

const
[int](language.types.integer.md)
[TAG\_TxResponse](class.varnishlog.md#varnishlog.constants.tag-txresponse) = 22;

const
[int](language.types.integer.md)
[TAG\_TxStatus](class.varnishlog.md#varnishlog.constants.tag-txstatus) = 23;

const
[int](language.types.integer.md)
[TAG\_TxURL](class.varnishlog.md#varnishlog.constants.tag-txurl) = 24;

const
[int](language.types.integer.md)
[TAG\_TxProtocol](class.varnishlog.md#varnishlog.constants.tag-txprotocol) = 25;

const
[int](language.types.integer.md)
[TAG\_TxHeader](class.varnishlog.md#varnishlog.constants.tag-txheader) = 26;

const
[int](language.types.integer.md)
[TAG\_ObjRequest](class.varnishlog.md#varnishlog.constants.tag-objrequest) = 27;

const
[int](language.types.integer.md)
[TAG\_ObjResponse](class.varnishlog.md#varnishlog.constants.tag-objresponse) = 28;

const
[int](language.types.integer.md)
[TAG\_ObjStatus](class.varnishlog.md#varnishlog.constants.tag-objstatus) = 29;

const
[int](language.types.integer.md)
[TAG\_ObjURL](class.varnishlog.md#varnishlog.constants.tag-objurl) = 30;

const
[int](language.types.integer.md)
[TAG\_ObjProtocol](class.varnishlog.md#varnishlog.constants.tag-objprotocol) = 31;

const
[int](language.types.integer.md)
[TAG\_ObjHeader](class.varnishlog.md#varnishlog.constants.tag-objheader) = 32;

const
[int](language.types.integer.md)
[TAG\_LostHeader](class.varnishlog.md#varnishlog.constants.tag-lostheader) = 33;

const
[int](language.types.integer.md)
[TAG\_TTL](class.varnishlog.md#varnishlog.constants.tag-ttl) = 34;

const
[int](language.types.integer.md)
[TAG\_Fetch\_Body](class.varnishlog.md#varnishlog.constants.tag-fetch-body) = 35;

const
[int](language.types.integer.md)
[TAG\_VCL\_acl](class.varnishlog.md#varnishlog.constants.tag-vcl-acl) = 36;

const
[int](language.types.integer.md)
[TAG\_VCL\_call](class.varnishlog.md#varnishlog.constants.tag-vcl-call) = 37;

const
[int](language.types.integer.md)
[TAG\_VCL\_trace](class.varnishlog.md#varnishlog.constants.tag-vcl-trace) = 38;

const
[int](language.types.integer.md)
[TAG\_VCL\_return](class.varnishlog.md#varnishlog.constants.tag-vcl-return) = 39;

const
[int](language.types.integer.md)
[TAG\_VCL\_error](class.varnishlog.md#varnishlog.constants.tag-vcl-error) = 40;

const
[int](language.types.integer.md)
[TAG\_ReqStart](class.varnishlog.md#varnishlog.constants.tag-reqstart) = 41;

const
[int](language.types.integer.md)
[TAG\_Hit](class.varnishlog.md#varnishlog.constants.tag-hit) = 42;

const
[int](language.types.integer.md)
[TAG\_HitPass](class.varnishlog.md#varnishlog.constants.tag-hitpass) = 43;

const
[int](language.types.integer.md)
[TAG\_ExpBan](class.varnishlog.md#varnishlog.constants.tag-expban) = 44;

const
[int](language.types.integer.md)
[TAG\_ExpKill](class.varnishlog.md#varnishlog.constants.tag-expkill) = 45;

const
[int](language.types.integer.md)
[TAG\_WorkThread](class.varnishlog.md#varnishlog.constants.tag-workthread) = 46;

const
[int](language.types.integer.md)
[TAG\_ESI\_xmlerror](class.varnishlog.md#varnishlog.constants.tag-esi-xmlerror) = 47;

const
[int](language.types.integer.md)
[TAG\_Hash](class.varnishlog.md#varnishlog.constants.tag-hash) = 48;

const
[int](language.types.integer.md)
[TAG\_Backend\_health](class.varnishlog.md#varnishlog.constants.tag-backend-health) = 49;

const
[int](language.types.integer.md)
[TAG\_VCL\_Log](class.varnishlog.md#varnishlog.constants.tag-vcl-log) = 50;

const
[int](language.types.integer.md)
[TAG\_Gzip](class.varnishlog.md#varnishlog.constants.tag-gzip) = 51;

/\* Métodos \*/

public function [\_\_construct](varnishlog.construct.md)([array](language.types.array.md) `$args` = ?)

public function [getLine](varnishlog.getline.md)(): [array](language.types.array.md)

public static function [getTagName](varnishlog.gettagname.md)([int](language.types.integer.md) `$index`): [string](language.types.string.md)

}

## Constantes predefinidas

**`VarnishLog::TAG_Debug`**

**`VarnishLog::TAG_Error`**

**`VarnishLog::TAG_CLI`**

**`VarnishLog::TAG_StatSess`**

**`VarnishLog::TAG_ReqEnd`**

**`VarnishLog::TAG_SessionOpen`**

**`VarnishLog::TAG_SessionClose`**

**`VarnishLog::TAG_BackendOpen`**

**`VarnishLog::TAG_BackendXID`**

**`VarnishLog::TAG_BackendReuse`**

**`VarnishLog::TAG_BackendClose`**

**`VarnishLog::TAG_HttpGarbage`**

**`VarnishLog::TAG_Backend`**

**`VarnishLog::TAG_Length`**

**`VarnishLog::TAG_FetchError`**

**`VarnishLog::TAG_RxRequest`**

**`VarnishLog::TAG_RxResponse`**

**`VarnishLog::TAG_RxStatus`**

**`VarnishLog::TAG_RxURL`**

**`VarnishLog::TAG_RxProtocol`**

**`VarnishLog::TAG_RxHeader`**

**`VarnishLog::TAG_TxRequest`**

**`VarnishLog::TAG_TxResponse`**

**`VarnishLog::TAG_TxStatus`**

**`VarnishLog::TAG_TxURL`**

**`VarnishLog::TAG_TxProtocol`**

**`VarnishLog::TAG_TxHeader`**

**`VarnishLog::TAG_ObjRequest`**

**`VarnishLog::TAG_ObjResponse`**

**`VarnishLog::TAG_ObjStatus`**

**`VarnishLog::TAG_ObjURL`**

**`VarnishLog::TAG_ObjProtocol`**

**`VarnishLog::TAG_ObjHeader`**

**`VarnishLog::TAG_LostHeader`**

**`VarnishLog::TAG_TTL`**

**`VarnishLog::TAG_Fetch_Body`**

**`VarnishLog::TAG_VCL_acl`**

**`VarnishLog::TAG_VCL_call`**

**`VarnishLog::TAG_VCL_trace`**

**`VarnishLog::TAG_VCL_return`**

**`VarnishLog::TAG_VCL_error`**

**`VarnishLog::TAG_ReqStart`**

**`VarnishLog::TAG_Hit`**

**`VarnishLog::TAG_HitPass`**

**`VarnishLog::TAG_ExpBan`**

**`VarnishLog::TAG_ExpKill`**

**`VarnishLog::TAG_WorkThread`**

**`VarnishLog::TAG_ESI_xmlerror`**

**`VarnishLog::TAG_Hash`**

**`VarnishLog::TAG_Backend_health`**

**`VarnishLog::TAG_VCL_Log`**

**`VarnishLog::TAG_Gzip`**

## Índice

- [VarnishLog::\_\_construct](varnishlog.construct.md) — Construtor de Varnishlog
- [VarnishLog::getLine](varnishlog.getline.md) — Obtém a próxima linha de registro
- [VarnishLog::getTagName](varnishlog.gettagname.md) — Obtém a string da etiqueta de registro pelo seu índice

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
