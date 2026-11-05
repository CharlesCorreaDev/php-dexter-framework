# Cria um novo objeto DateTimeImmutable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.date-create-immutable.php

---

# date\_create\_immutable

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

date\_create\_immutable — Cria um novo objeto [DateTimeImmutable](class.datetimeimmutable.md)

### Descrição

function **date\_create\_immutable**([string](language.types.string.md) `$datetime` = "now", [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = **`null`**): [DateTimeImmutable](class.datetimeimmutable.md)|[false](language.types.singleton.md)

Esta é a versão procedural de
[DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md).

Diferentemente do construtor de [DateTimeImmutable](class.datetimeimmutable.md), irá retornar
**`false`** em vez de uma exceção se a string
`datetime` for inválida.

### Parâmetros

Ver [DateTimeImmutable::\_\_construct](datetimeimmutable.construct.md).

### Valor Retornado

Retorna uma nova instância de DateTimeImmutable ou **`false`** em caso de falha

### Veja também

- [DateTimeImmutable::createFromFormat()](datetimeimmutable.createfromformat.md) - Interpreta um string de data/horário de acordo com o formato especificado

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
