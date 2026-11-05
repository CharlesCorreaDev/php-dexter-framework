# URI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.uri.php

---

# URI

# Introdução

Este capítulo descreve as funções que permitem trabalhar com
Identificadores Uniformes de Recursos (URIs). Uma URI é uma cadeia de caracteres
usada para identificar um recurso. URIs são usadas em tecnologias web para
identificar recursos na Internet.

Esta extensão implementa funcionalidades que seguem as
especificações da
[» RFC 3986,
Uniform Resource Identifier (URI): Generic Syntax](https://www.ietf.org/rfc/rfc3986.txt) e do Padrão
[» WHATWG URL](https://url.spec.whatwg.org/).

- [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md) — A classe Uri\Rfc3986\Uri
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
- [Uri\WhatWg\Url](class.uri-whatwg-url.md) — A classe Uri\WhatWg\Url
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
- [Uri\UriComparisonMode](enum.uri-uricomparisonmode.md) — A enumeração Uri\UriComparisonMode
- [Uri\UriException](class.uri-uriexception.md) — A classe Uri\UriException
- [Uri\UriError](class.uri-urierror.md) — A classe Uri\UriError
- [Uri\InvalidUriException](class.uri-invaliduriexception.md) — A classe Uri\InvalidUriException
- [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md) — A classe Uri\WhatWg\InvalidUrlException
  - [Uri\WhatWg\InvalidUrlException::\_\_construct](uri-whatwg-invalidurlexception.construct.md) — Constrói um objeto InvalidUrlException
- [Uri\WhatWg\UrlValidationError](class.uri-whatwg-urlvalidationerror.md) — A classe Uri\WhatWg\UrlValidationError
  - [Uri\WhatWg\UrlValidationError::\_\_construct](uri-whatwg-urlvalidationerror.construct.md) — Constrói um objeto UrlValidationError
- [Uri\WhatWg\UrlValidationErrorType](enum.uri-whatwg-urlvalidationerrortype.md) — A enumeração Uri\WhatWg\UrlValidationErrorType

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
