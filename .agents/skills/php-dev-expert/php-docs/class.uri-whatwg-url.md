# A classe Uri\WhatWg\Url

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.uri-whatwg-url.php

---

# A classe Uri\WhatWg\Url

(PHP 8 >= 8.5.0)

## Introdução

## Resumo da classe

namespace **Uri\WhatWg**;

final
readonly
class ****Url****
{

/\* Métodos \*/

public function [\_\_construct](uri-whatwg-url.construct.md)([string](language.types.string.md) `$uri`, [?](language.types.null.md)[Uri\WhatWg\Url](class.uri-whatwg-url.md) `$baseUrl` = **`null`**, [array](language.types.array.md) `&$softErrors` = **`null`**)

public function [\_\_debugInfo](uri-whatwg-url.debuginfo.md)(): [array](language.types.array.md)

public function [equals](uri-whatwg-url.equals.md)([Uri\WhatWg\Url](class.uri-whatwg-url.md) `$url`, [Uri\UriComparisonMode](enum.uri-uricomparisonmode.md) `$comparisonMode` = **`Uri\UriComparisonMode::ExcludeFragment`**): [bool](language.types.boolean.md)

public function [getAsciiHost](uri-whatwg-url.getasciihost.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getFragment](uri-whatwg-url.getfragment.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getPassword](uri-whatwg-url.getpassword.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getPath](uri-whatwg-url.getpath.md)(): [string](language.types.string.md)

public function [getPort](uri-whatwg-url.getport.md)(): [?](language.types.null.md)[int](language.types.integer.md)

public function [getQuery](uri-whatwg-url.getquery.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getScheme](uri-whatwg-url.getscheme.md)(): [string](language.types.string.md)

public function [getUnicodeHost](uri-whatwg-url.getunicodehost.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getUsername](uri-whatwg-url.getusername.md)(): [?](language.types.null.md)[string](language.types.string.md)

public static function [parse](uri-whatwg-url.parse.md)([string](language.types.string.md) `$uri`, [?](language.types.null.md)[Uri\WhatWg\Url](class.uri-whatwg-url.md) `$baseUrl` = **`null`**, [array](language.types.array.md) `&$errors` = **`null`**): [?](language.types.null.md)static

public function [resolve](uri-whatwg-url.resolve.md)([string](language.types.string.md) `$uri`, [array](language.types.array.md) `&$softErrors` = **`null`**): static

public function [\_\_serialize](uri-whatwg-url.serialize.md)(): [array](language.types.array.md)

public function [toAsciiString](uri-whatwg-url.toasciistring.md)(): [string](language.types.string.md)

public function [toUnicodeString](uri-whatwg-url.tounicodestring.md)(): [string](language.types.string.md)

public function [\_\_unserialize](uri-whatwg-url.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

public function [withFragment](uri-whatwg-url.withfragment.md)([?](language.types.null.md)[string](language.types.string.md) `$fragment`): static

public function [withHost](uri-whatwg-url.withhost.md)([?](language.types.null.md)[string](language.types.string.md) `$host`): static

public function [withPassword](uri-whatwg-url.withpassword.md)(#[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password`): static

public function [withPath](uri-whatwg-url.withpath.md)([string](language.types.string.md) `$path`): static

public function [withPort](uri-whatwg-url.withport.md)([?](language.types.null.md)[int](language.types.integer.md) `$port`): static

public function [withQuery](uri-whatwg-url.withquery.md)([?](language.types.null.md)[string](language.types.string.md) `$query`): static

public function [withScheme](uri-whatwg-url.withscheme.md)([string](language.types.string.md) `$scheme`): static

public function [withUsername](uri-whatwg-url.withusername.md)([?](language.types.null.md)[string](language.types.string.md) `$username`): static

}

## Índice

- [Uri\WhatWg\Url::\_\_construct](uri-whatwg-url.construct.md) — Constrói o objeto Url
- [Uri\WhatWg\Url::\_\_debugInfo](uri-whatwg-url.debuginfo.md) — Retorna o estado interno da URL
- [Uri\WhatWg\Url::equals](uri-whatwg-url.equals.md) — Verifica se duas URLs são equivalentes
- [Uri\WhatWg\Url::getAsciiHost](uri-whatwg-url.getasciihost.md) — Obtém o componente host como uma string ASCII
- [Uri\WhatWg\Url::getFragment](uri-whatwg-url.getfragment.md) — Obtém o componente fragment
- [Uri\WhatWg\Url::getPassword](uri-whatwg-url.getpassword.md) — Obtém o componente password
- [Uri\WhatWg\Url::getPath](uri-whatwg-url.getpath.md) — Obtém o componente path
- [Uri\WhatWg\Url::getPort](uri-whatwg-url.getport.md) — Obtém o componente port
- [Uri\WhatWg\Url::getQuery](uri-whatwg-url.getquery.md) — Obtém o componente de consulta
- [Uri\WhatWg\Url::getScheme](uri-whatwg-url.getscheme.md) — Obtém o componente scheme
- [Uri\WhatWg\Url::getUnicodeHost](uri-whatwg-url.getunicodehost.md) — Obtém o componente host como uma string Unicode
- [Uri\WhatWg\Url::getUsername](uri-whatwg-url.getusername.md) — Obtém o componente username
- [Uri\WhatWg\Url::parse](uri-whatwg-url.parse.md) — Analisa uma URL
- [Uri\WhatWg\Url::resolve](uri-whatwg-url.resolve.md) — Resolve uma URL com o objeto atual como URL base
- [Uri\WhatWg\Url::\_\_serialize](uri-whatwg-url.serialize.md) — Serializa o objeto Url
- [Uri\WhatWg\Url::toAsciiString](uri-whatwg-url.toasciistring.md) — Recompõe a URL como uma string ASCII
- [Uri\WhatWg\Url::toUnicodeString](uri-whatwg-url.tounicodestring.md) — Recompõe a URL como uma string Unicode
- [Uri\WhatWg\Url::\_\_unserialize](uri-whatwg-url.unserialize.md) — Desserializa o parâmetro 'data' em um objeto Url
- [Uri\WhatWg\Url::withFragment](uri-whatwg-url.withfragment.md) — Modifica o componente fragment
- [Uri\WhatWg\Url::withHost](uri-whatwg-url.withhost.md) — Modifica o componente host
- [Uri\WhatWg\Url::withPassword](uri-whatwg-url.withpassword.md) — Modifica o componente password
- [Uri\WhatWg\Url::withPath](uri-whatwg-url.withpath.md) — Modifica o componente path
- [Uri\WhatWg\Url::withPort](uri-whatwg-url.withport.md) — Modifica o componente port
- [Uri\WhatWg\Url::withQuery](uri-whatwg-url.withquery.md) — Modifica o componente query
- [Uri\WhatWg\Url::withScheme](uri-whatwg-url.withscheme.md) — Modifica o componente scheme
- [Uri\WhatWg\Url::withUsername](uri-whatwg-url.withusername.md) — Modifica o componente username

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
