# A clase php_user_filter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.php-user-filter.php

---

# A clase php\_user\_filter

(PHP 5, PHP 7, PHP 8)

## Introdução

Filhas desta classe são passadas à função
[stream\_filter\_register()](function.stream-filter-register.md).
Note que o método [\_\_construct](language.oop5.decon.md#object.construct) não é chamado;
em vez disso, [php\_user\_filter::onCreate()](php-user-filter.oncreate.md) deve ser usado para
inicialização.

## Resumo da classe

class ****php\_user\_filter****
{

/\* Propriedades \*/

public
[string](language.types.string.md)
[$filtername](class.php-user-filter.md#php-user-filter.props.filtername) = "";

public
[mixed](language.types.mixed.md)
[$params](class.php-user-filter.md#php-user-filter.props.params) = "";

public
?[resource](language.types.resource.md)
[$stream](class.php-user-filter.md#php-user-filter.props.stream) = null;

/\* Métodos \*/

public function [filter](php-user-filter.filter.md)(  
    [resource](language.types.resource.md) `$in`,  
    [resource](language.types.resource.md) `$out`,  
    [int](language.types.integer.md) `&$consumed`,  
    [bool](language.types.boolean.md) `$closing`  
): [int](language.types.integer.md)

public function [onClose](php-user-filter.onclose.md)(): [void](language.types.void.md)

public function [onCreate](php-user-filter.oncreate.md)(): [bool](language.types.boolean.md)

}

## Propriedades

filtername
:   Nome do filtro registrado por
    [stream\_filter\_append()](function.stream-filter-append.md).

params

stream

## Índice

- [php\_user\_filter::filter](php-user-filter.filter.md) — Chamada na aplicação do filtro
- [php\_user\_filter::onClose](php-user-filter.onclose.md) — Chamado no fechamento do filtro
- [php\_user\_filter::onCreate](php-user-filter.oncreate.md) — Chamado na criação do filtro

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
