# Define uma data ISO

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.setisodate.php

---

# DateTime::setISODate

# date\_isodate\_set

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTime::setISODate -- date\_isodate\_set — Define uma data ISO

### Descrição

Estilo orientado a objetos

public function **DateTime::setISODate**([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$week`, [int](language.types.integer.md) `$dayOfWeek` = 1): [DateTime](class.datetime.md)

Estilo procedural

function [date\_isodate\_set](function.date-isodate-set.md)(  
    [DateTime](class.datetime.md) `$object`,  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$week`,  
    [int](language.types.integer.md) `$dayOfWeek` = 1  
): [DateTime](class.datetime.md)

Define uma data, de acordo com o padrão ISO 8601 - utilizando a diferença de semanas e dias
em vez de datas específicas.

Equivalente a [DateTimeImmutable::setISODate()](datetimeimmutable.setisodate.md) mas funciona com
[DateTime](class.datetime.md).

A versão procedural usa o objeto [DateTime](class.datetime.md) como
seu primeiro argumento.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md).
    A função modifica este objeto.

`year`
:   Ano da data.

`week`
:   Semana da data.

`dayOfWeek`
:   Diferença do primeiro dia da semana.

### Valor Retornado

Retorna o objeto [DateTime](class.datetime.md) modificado para encadeamento de métodos.

### Veja também

- [DateTimeImmutable::setISODate()](datetimeimmutable.setisodate.md) - Define a data ISO

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
