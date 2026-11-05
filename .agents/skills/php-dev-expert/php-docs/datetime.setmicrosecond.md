# Define a parte de microssegundos do horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.setmicrosecond.php

---

# DateTime::setMicrosecond

(PHP 8 >= 8.4.0)

DateTime::setMicrosecond — Define a parte de microssegundos do horário

### Descrição

public function **DateTime::setMicrosecond**([int](language.types.integer.md) `$microsecond`): static

Define a parte de microssegundos do horário.

Funciona como em [DateTimeImmutable::setMicrosecond()](datetimeimmutable.setmicrosecond.md), porém com
[DateTime](class.datetime.md).

### Parâmetros

`microsecond`
:   O valor de microssegundos a ser definido (`0` a `999999`).

### Valor Retornado

Retorna o objeto [DateTime](class.datetime.md) modificado para encadeamento de métodos.

### Erros/Exceções

Se `microsecond` estiver fora do intervalo [`0`, `999999`],
uma [DateRangeError](class.daterangeerror.md) é lançada.

### Examples

**Exemplo #1 Exemplo de **DateTime::setMicrosecond()****

```
<?php
$date = DateTime::createFromTimestamp(123.456789);
echo $date->format('Y-m-d H:i:s.u') . PHP_EOL;
$date->setMicrosecond(987654);
echo $date->format('Y-m-d H:i:s.u') . PHP_EOL;
?>
```

O exemplo acima produzirá:

```
1970-01-01 00:02:03.456789
1970-01-01 00:02:03.987654
```

### Veja também

- [DateTimeInterface::getMicrosecond()](datetimeinterface.getmicrosecond.md) - Obtém a parte de microssegundos do timestamp Unix

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
