# Modifica um objeto DateTime, com adição de dias, meses, anos, horas, minutos e segundos.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.add.php

---

# DateTime::add

# date\_add

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DateTime::add -- date\_add — 
Modifica um objeto DateTime, com adição de dias, meses, anos, horas, minutos e segundos.

### Descrição

Estilo orientado a objetos

public function **DateTime::add**([DateInterval](class.dateinterval.md) `$interval`): [DateTime](class.datetime.md)

Estilo procedural

function [date\_add](function.date-add.md)([DateTime](class.datetime.md) `$object`, [DateInterval](class.dateinterval.md) `$interval`): [DateTime](class.datetime.md)

Adiciona o objeto [DateInterval](class.dateinterval.md) informado a um objeto
[DateTime](class.datetime.md) especificado.

Equivalente a [DateTimeImmutable::add()](datetimeimmutable.add.md) mas funciona com
[DateTime](class.datetime.md).

A versão procedural usa o objeto [DateTime](class.datetime.md) como
primeiro argumento.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md).
    A função modifica este objeto.

`interval`
:   Um objeto [DateInterval](class.dateinterval.md)

### Valor Retornado

Retorna o objeto [DateTime](class.datetime.md) modificado para encadeamento de métodos.

### Veja também

- [DateTimeImmutable::add()](datetimeimmutable.add.md) - Retorna um novo objeto, com adição de dias, meses, anos, horas, minutos e segundos

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
