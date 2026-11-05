# A classe SoapParam

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.soapparam.php

---

# A classe SoapParam

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa o parâmetro para uma chamada SOAP.

## Resumo da classe

class ****SoapParam****
{

/\* Propriedades \*/

public
[string](language.types.string.md)
[$param\_name](class.soapparam.md#soapparam.props.param-name);

public
[mixed](language.types.mixed.md)
[$param\_data](class.soapparam.md#soapparam.props.param-data);

/\* Métodos \*/

public function [\_\_construct](soapparam.construct.md)([mixed](language.types.mixed.md) `$data`, [string](language.types.string.md) `$name`)

}

## Propriedades

param\_data

param\_name

## Índice

- [SoapParam::\_\_construct](soapparam.construct.md) — Construtor SoapParam

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
