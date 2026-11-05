# Cria um novo objeto DateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.date-create.php

---

# date\_create

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

date\_create — Cria um novo objeto [DateTime](class.datetime.md)

### Descrição

function **date\_create**([string](language.types.string.md) `$datetime` = "now", [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = **`null`**): [DateTime](class.datetime.md)|[false](language.types.singleton.md)

Esta é a versão procedural de
[DateTime::\_\_construct()](datetime.construct.md).

Diferentemente do construtor de [DateTime](class.datetime.md), irá retornar
**`false`** em vez de uma exceção se a string
`datetime` for inválida.

### Parâmetros

Ver [DateTimeImmutable::\_\_construct](datetimeimmutable.construct.md).

### Valor Retornado

Retorna uma nova instância de DateTime ou **`false`** em caso de falha

### Veja também

- [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md) - Retorna um novo objeto DateTimeImmutable
- [DateTimeImmutable::createFromFormat()](datetimeimmutable.createfromformat.md) - Interpreta um string de data/horário de acordo com o formato especificado
- [DateTime::\_\_construct()](datetime.construct.md) - Retorna um novo objeto DateTime

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
