# Define a data e hora baseada em um timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.settimestamp.php

---

# DateTime::setTimestamp

# date\_timestamp\_set

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DateTime::setTimestamp -- date\_timestamp\_set — Define a data e hora baseada em um timestamp Unix

### Descrição

Estilo orientado a objetos

public function **DateTime::setTimestamp**([int](language.types.integer.md) `$timestamp`): [DateTime](class.datetime.md)

Estilo procedural

function [date\_timestamp\_set](function.date-timestamp-set.md)([DateTime](class.datetime.md) `$object`, [int](language.types.integer.md) `$timestamp`): [DateTime](class.datetime.md)

Define a data e hora baseada em um timestamp Unix.

Equivalente a [DateTimeImmutable::setTimestamp()](datetimeimmutable.settimestamp.md) mas funciona com
[DateTime](class.datetime.md).

A versão procedural usa o objeto [DateTime](class.datetime.md) como
seu primeiro argumento.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md).
    A função modifica este objeto.

`timestamp`
:   Timestam Unix representando a data.
    Configurar o timestamp fora dos limites de [int](language.types.integer.md) é possível utilizando o método
    [DateTimeImmutable::modify()](datetimeimmutable.modify.md) com o formato `@`.

### Valor Retornado

Retorna o objeto [DateTime](class.datetime.md) modificado para encadeamento de métodos.

### Veja também

- [DateTimeImmutable::setTimestamp()](datetimeimmutable.settimestamp.md) - Define a data e o horário com base em um timestamp Unix
- [DateTime::setMicrosecond()](datetime.setmicrosecond.md) - Define a parte de microssegundos do horário

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
