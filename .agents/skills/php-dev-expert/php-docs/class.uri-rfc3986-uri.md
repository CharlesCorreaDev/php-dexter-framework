# A classe Uri\Rfc3986\Uri

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.uri-rfc3986-uri.php

---

# A classe Uri\Rfc3986\Uri

(PHP 8 >= 8.5.0)

## Introdução

## Resumo da classe

namespace **Uri\Rfc3986**;

final
readonly
class ****Uri****
{

/\* Métodos \*/

public function [\_\_construct](uri-rfc3986-uri.construct.md)([string](language.types.string.md) `$uri`, [?](language.types.null.md)[Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md) `$baseUrl` = **`null`**)

public function [\_\_debugInfo](uri-rfc3986-uri.debuginfo.md)(): [array](language.types.array.md)

public function [equals](uri-rfc3986-uri.equals.md)([Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md) `$uri`, [Uri\UriComparisonMode](enum.uri-uricomparisonmode.md) `$comparisonMode` = **`Uri\UriComparisonMode::ExcludeFragment`**): [bool](language.types.boolean.md)

public function [getFragment](uri-rfc3986-uri.getfragment.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getHost](uri-rfc3986-uri.gethost.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getPassword](uri-rfc3986-uri.getpassword.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getPath](uri-rfc3986-uri.getpath.md)(): [string](language.types.string.md)

public function [getPort](uri-rfc3986-uri.getport.md)(): [?](language.types.null.md)[int](language.types.integer.md)

public function [getQuery](uri-rfc3986-uri.getquery.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getRawFragment](uri-rfc3986-uri.getrawfragment.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getRawHost](uri-rfc3986-uri.getrawhost.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getRawPassword](uri-rfc3986-uri.getrawpassword.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getRawPath](uri-rfc3986-uri.getrawpath.md)(): [string](language.types.string.md)

public function [getRawQuery](uri-rfc3986-uri.getrawquery.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getRawScheme](uri-rfc3986-uri.getrawscheme.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getRawUserInfo](uri-rfc3986-uri.getrawuserinfo.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getRawUsername](uri-rfc3986-uri.getrawusername.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getScheme](uri-rfc3986-uri.getscheme.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getUserInfo](uri-rfc3986-uri.getuserinfo.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getUsername](uri-rfc3986-uri.getusername.md)(): [?](language.types.null.md)[string](language.types.string.md)

public static function [parse](uri-rfc3986-uri.parse.md)([string](language.types.string.md) `$uri`, [?](language.types.null.md)[Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md) `$baseUrl` = **`null`**): [?](language.types.null.md)static

public function [resolve](uri-rfc3986-uri.resolve.md)([string](language.types.string.md) `$uri`): static

public function [\_\_serialize](uri-rfc3986-uri.serialize.md)(): [array](language.types.array.md)

public function [toRawString](uri-rfc3986-uri.torawstring.md)(): [string](language.types.string.md)

public function [toString](uri-rfc3986-uri.tostring.md)(): [string](language.types.string.md)

public function [\_\_unserialize](uri-rfc3986-uri.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

public function [withFragment](uri-rfc3986-uri.withfragment.md)([?](language.types.null.md)[string](language.types.string.md) `$fragment`): static

public function [withHost](uri-rfc3986-uri.withhost.md)([?](language.types.null.md)[string](language.types.string.md) `$host`): static

public function [withPath](uri-rfc3986-uri.withpath.md)([string](language.types.string.md) `$path`): static

public function [withPort](uri-rfc3986-uri.withport.md)([?](language.types.null.md)[int](language.types.integer.md) `$port`): static

public function [withQuery](uri-rfc3986-uri.withquery.md)([?](language.types.null.md)[string](language.types.string.md) `$query`): static

public function [withScheme](uri-rfc3986-uri.withscheme.md)([?](language.types.null.md)[string](language.types.string.md) `$scheme`): static

public function [withUserInfo](uri-rfc3986-uri.withuserinfo.md)(#[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$userinfo`): static

}

## Índice

- [Uri\Rfc3986\Uri::\_\_construct](uri-rfc3986-uri.construct.md) — Constrói o objeto Uri
- [Uri\Rfc3986\Uri::\_\_debugInfo](uri-rfc3986-uri.debuginfo.md) — Retorna o estado interno da URI
- [Uri\Rfc3986\Uri::equals](uri-rfc3986-uri.equals.md) — Verifica se duas URIs são equivalentes
- [Uri\Rfc3986\Uri::getFragment](uri-rfc3986-uri.getfragment.md) — Obtém o componente fragment normalizado
- [Uri\Rfc3986\Uri::getHost](uri-rfc3986-uri.gethost.md) — Obtém o componente host normalizado
- [Uri\Rfc3986\Uri::getPassword](uri-rfc3986-uri.getpassword.md) — Obtém a senha normalizada
- [Uri\Rfc3986\Uri::getPath](uri-rfc3986-uri.getpath.md) — Obtém o componente path normalizado
- [Uri\Rfc3986\Uri::getPort](uri-rfc3986-uri.getport.md) — Obtém o componente port normalizado
- [Uri\Rfc3986\Uri::getQuery](uri-rfc3986-uri.getquery.md) — Obtém o componente query normalizado
- [Uri\Rfc3986\Uri::getRawFragment](uri-rfc3986-uri.getrawfragment.md) — Obtém o componente fragment bruto
- [Uri\Rfc3986\Uri::getRawHost](uri-rfc3986-uri.getrawhost.md) — Obtém o componente host bruto
- [Uri\Rfc3986\Uri::getRawPassword](uri-rfc3986-uri.getrawpassword.md) — Obtém a senha bruta
- [Uri\Rfc3986\Uri::getRawPath](uri-rfc3986-uri.getrawpath.md) — Obtém o componente path bruto
- [Uri\Rfc3986\Uri::getRawQuery](uri-rfc3986-uri.getrawquery.md) — Obtém o componente query bruto
- [Uri\Rfc3986\Uri::getRawScheme](uri-rfc3986-uri.getrawscheme.md) — Obtém o componente scheme bruto
- [Uri\Rfc3986\Uri::getRawUserInfo](uri-rfc3986-uri.getrawuserinfo.md) — Obtém o componente userinfo bruto
- [Uri\Rfc3986\Uri::getRawUsername](uri-rfc3986-uri.getrawusername.md) — Obtém o username bruto
- [Uri\Rfc3986\Uri::getScheme](uri-rfc3986-uri.getscheme.md) — Obtém o componente scheme normalizado
- [Uri\Rfc3986\Uri::getUserInfo](uri-rfc3986-uri.getuserinfo.md) — Obtém o componente userinfo normalizado
- [Uri\Rfc3986\Uri::getUsername](uri-rfc3986-uri.getusername.md) — Obtém o username normalizado
- [Uri\Rfc3986\Uri::parse](uri-rfc3986-uri.parse.md) — Analisa uma URI
- [Uri\Rfc3986\Uri::resolve](uri-rfc3986-uri.resolve.md) — Resolve uma URI com o objeto atual como URL base
- [Uri\Rfc3986\Uri::\_\_serialize](uri-rfc3986-uri.serialize.md) — Serializa o objeto Uri
- [Uri\Rfc3986\Uri::toRawString](uri-rfc3986-uri.torawstring.md) — Recompõe a URI bruta
- [Uri\Rfc3986\Uri::toString](uri-rfc3986-uri.tostring.md) — Recompõe a URI normalizada
- [Uri\Rfc3986\Uri::\_\_unserialize](uri-rfc3986-uri.unserialize.md) — Desserializa o parâmetro 'data' em um objeto Uri
- [Uri\Rfc3986\Uri::withFragment](uri-rfc3986-uri.withfragment.md) — Modifica o componente fragment
- [Uri\Rfc3986\Uri::withHost](uri-rfc3986-uri.withhost.md) — Modifica o componente host
- [Uri\Rfc3986\Uri::withPath](uri-rfc3986-uri.withpath.md) — Modifica o componente path
- [Uri\Rfc3986\Uri::withPort](uri-rfc3986-uri.withport.md) — Modifica o componente port
- [Uri\Rfc3986\Uri::withQuery](uri-rfc3986-uri.withquery.md) — Modifica o componente query
- [Uri\Rfc3986\Uri::withScheme](uri-rfc3986-uri.withscheme.md) — Modifica o componente scheme
- [Uri\Rfc3986\Uri::withUserInfo](uri-rfc3986-uri.withuserinfo.md) — Modifica o componente userinfo

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
