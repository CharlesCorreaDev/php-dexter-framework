# A classe SoapHeader

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.soapheader.php

---

# A classe SoapHeader

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa um cabeçalho SOAP.

## Resumo da classe

class ****SoapHeader****
{

/\* Propriedades \*/

public
[string](language.types.string.md)
[$namespace](class.soapheader.md#soapheader.props.namespace);

public
[string](language.types.string.md)
[$name](class.soapheader.md#soapheader.props.name);

public
[mixed](language.types.mixed.md)
[$data](class.soapheader.md#soapheader.props.data) = null;

public
[bool](language.types.boolean.md)
[$mustUnderstand](class.soapheader.md#soapheader.props.mustunderstand);

public
[string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md)
[$actor](class.soapheader.md#soapheader.props.actor);

/\* Métodos \*/

public function [\_\_construct](soapheader.construct.md)(  
    [string](language.types.string.md) `$namespace`,  
    [string](language.types.string.md) `$name`,  
    [mixed](language.types.mixed.md) `$data` = ?,  
    [bool](language.types.boolean.md) `$mustunderstand` = ?,  
    [string](language.types.string.md) `$actor` = ?  
)

}

## Propriedades

actor

data

mustUnderstand

name

namespace

## Índice

- [SoapHeader::\_\_construct](soapheader.construct.md) — Construtor SoapHeader

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
