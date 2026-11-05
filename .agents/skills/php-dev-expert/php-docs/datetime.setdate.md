# Define a data

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.setdate.php

---

# DateTime::setDate

# date\_date\_set

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTime::setDate -- date\_date\_set — Define a data

### Descrição

Estilo orientado a objetos

public function **DateTime::setDate**([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$day`): [DateTime](class.datetime.md)

Estilo procedural

function [date\_date\_set](function.date-date-set.md)(  
    [DateTime](class.datetime.md) `$object`,  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$day`  
): [DateTime](class.datetime.md)

Redefine a data atual do objeto Datetime para uma diferente.

Equivalente a [DateTimeImmutable::setDate()](datetimeimmutable.setdate.md) mas funciona com
[DateTime](class.datetime.md), e modifica o objeto existente.

A versão procedural usa o objeto [DateTime](class.datetime.md) como
seu primeiro argumento.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md).
    A função modifica este objeto.

`year`
:   Ano da data.

`month`
:   Mês da data.

`day`
:   Dia da data.

### Valor Retornado

Retorna o objeto [DateTime](class.datetime.md) modificado para encadeamento de métodos.

### Veja também

- [DateTimeImmutable::setDate()](datetimeimmutable.setdate.md) - Define a data

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
