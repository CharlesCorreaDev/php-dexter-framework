# Formata uma data/horário GMT/CUT

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmdate.php

---

# gmdate

(PHP 4, PHP 5, PHP 7, PHP 8)

gmdate — Formata uma data/horário GMT/CUT

### Descrição

function **gmdate**([string](language.types.string.md) `$format`, [?](language.types.null.md)[int](language.types.integer.md) `$timestamp` = **`null`**): [string](language.types.string.md)

Idêntica à função [date()](function.date.md), exceto que
o horário retornado será baseado no Horário de Greenwich (GMT).

### Parâmetros

`format`
:   O formato da saída da [string](language.types.string.md) da data. Veja as opções
    de formatação para a função [date()](function.date.md).

`timestamp`
:   O parâmetro opcional `timestamp` é um
    [int](language.types.integer.md) de timestamp Unix cujo padrão é a hora local
    atual se `timestamp` não for informado ou for **`null`**. Em outras
    palavras, o padrão é o valor de [time()](function.time.md).

### Valor Retornado

Retorna uma string da data formatada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timestamp` agora é anulável. |

### Examples

**Exemplo #1 Exemplo da **gmdate()****

```
<?php
date_default_timezone_set("Europe/Helsinki");

echo date("M d Y H:i:s e", mktime(0, 0, 0, 1, 1, 1998)) . "\n";
echo gmdate("M d Y H:i:s e", mktime(0, 0, 0, 1, 1, 1998));
```

O exemplo acima produzirá:

```
Jan 01 1998 00:00:00 Europe/Helsinki
Dec 31 1997 22:00:00 UTC
```

### Veja também

- [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md) - Retorna um novo objeto DateTimeImmutable
- [DateTimeInterface::format()](datetime.format.md) - Retorna a data formatada de acordo com um formato informado
- [date()](function.date.md) - Formata um timestamp Unix
- [mktime()](function.mktime.md) - Obtém um timestamp Unix de uma data
- [gmmktime()](function.gmmktime.md) - Obtém um timestamp Unix para uma data GMT
- [IntlDateFormatter::format()](intldateformatter.format.md) - Formata data/horário como uma string

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
