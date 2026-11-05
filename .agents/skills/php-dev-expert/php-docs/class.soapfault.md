# A classe SoapFault

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.soapfault.php

---

# A classe SoapFault

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa uma falha SOAP.

## Resumo da classe

class ****SoapFault****
extends
[Exception](class.exception.md)
{

/\* Propriedades \*/

public
[string](language.types.string.md)
[$faultstring](class.soapfault.md#soapfault.props.faultstring);

public
?[string](language.types.string.md)
[$faultcode](class.soapfault.md#soapfault.props.faultcode) = null;

public
?[string](language.types.string.md)
[$faultcodens](class.soapfault.md#soapfault.props.faultcodens) = null;

public
?[string](language.types.string.md)
[$faultactor](class.soapfault.md#soapfault.props.faultactor) = null;

public
[mixed](language.types.mixed.md)
[$detail](class.soapfault.md#soapfault.props.detail) = null;

public
?[string](language.types.string.md)
[$\_name](class.soapfault.md#soapfault.props.name) = null;

public
[mixed](language.types.mixed.md)
[$headerfault](class.soapfault.md#soapfault.props.headerfault) = null;

public
[string](language.types.string.md)
[$lang](class.soapfault.md#soapfault.props.lang) = "";

/\* Propriedades herdadas \*/

protected
[string](language.types.string.md)
[$message](class.exception.md#exception.props.message) = "";

private
[string](language.types.string.md)
[$string](class.exception.md#exception.props.string) = "";

protected
[int](language.types.integer.md)
[$code](class.exception.md#exception.props.code);

protected
[string](language.types.string.md)
[$file](class.exception.md#exception.props.file) = "";

protected
[int](language.types.integer.md)
[$line](class.exception.md#exception.props.line);

private
[array](language.types.array.md)
[$trace](class.exception.md#exception.props.trace) = [];

private
?[Throwable](class.throwable.md)
[$previous](class.exception.md#exception.props.previous) = null;

/\* Métodos \*/

public function [\_\_construct](soapfault.construct.md)(  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$code`,  
    [string](language.types.string.md) `$string`,  
    [?](language.types.null.md)[string](language.types.string.md) `$actor` = **`null`**,  
    [mixed](language.types.mixed.md) `$details` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**,  
    [mixed](language.types.mixed.md) `$headerFault` = **`null`**,  
    [string](language.types.string.md) `$lang` = ""  
)

public function [\_\_toString](soapfault.tostring.md)(): [string](language.types.string.md)

/\* Métodos herdados \*/

final public function [Exception::getMessage](exception.getmessage.md)(): [string](language.types.string.md)

final public function [Exception::getPrevious](exception.getprevious.md)(): [?](language.types.null.md)[Throwable](class.throwable.md)

final public function [Exception::getCode](exception.getcode.md)(): [int](language.types.integer.md)

final public function [Exception::getFile](exception.getfile.md)(): [string](language.types.string.md)

final public function [Exception::getLine](exception.getline.md)(): [int](language.types.integer.md)

final public function [Exception::getTrace](exception.gettrace.md)(): [array](language.types.array.md)

final public function [Exception::getTraceAsString](exception.gettraceasstring.md)(): [string](language.types.string.md)

public function [Exception::\_\_toString](exception.tostring.md)(): [string](language.types.string.md)

private function [Exception::\_\_clone](exception.clone.md)(): [void](language.types.void.md)

}

## Propriedades

\_name

detail

faultactor

faultcode

faultcodens

faultstring

headerfault

lang
:   Atributo xml:lang do texto de motivo do SOAP 1.2.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Adicionada a propriedade [SoapFault::lang](class.soapfault.md#soapfault.props.lang). |

## Índice

- [SoapFault::\_\_construct](soapfault.construct.md) — Construtor SoapFault
- [SoapFault::\_\_toString](soapfault.tostring.md) — Obtém uma representação de string de um SoapFault

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
