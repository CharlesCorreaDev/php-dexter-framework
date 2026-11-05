# A classe SoapVar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.soapvar.php

---

# A classe SoapVar

(PHP 5, PHP 7, PHP 8)

## Introdução

Uma classe que representa uma variável ou objeto para uso com serviços SOAP.

## Resumo da classe

class ****SoapVar****
{

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$enc\_type](class.soapvar.md#soapvar.props.enc-type);

public
[mixed](language.types.mixed.md)
[$enc\_value](class.soapvar.md#soapvar.props.enc-value) = null;

public
?[string](language.types.string.md)
[$enc\_stype](class.soapvar.md#soapvar.props.enc-stype) = null;

public
?[string](language.types.string.md)
[$enc\_ns](class.soapvar.md#soapvar.props.enc-ns) = null;

public
?[string](language.types.string.md)
[$enc\_name](class.soapvar.md#soapvar.props.enc-name) = null;

public
?[string](language.types.string.md)
[$enc\_namens](class.soapvar.md#soapvar.props.enc-namens) = null;

/\* Métodos \*/

public function [\_\_construct](soapvar.construct.md)(  
    [mixed](language.types.mixed.md) `$data`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$encoding`,  
    [?](language.types.null.md)[string](language.types.string.md) `$typeName` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$typeNamespace` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$nodeName` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$nodeNamespace` = **`null`**  
)

}

## Propriedades

enc\_name

enc\_namens

enc\_ns

enc\_type

enc\_stype

enc\_value

## Índice

- [SoapVar::\_\_construct](soapvar.construct.md) — Construtor SoapVar

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
