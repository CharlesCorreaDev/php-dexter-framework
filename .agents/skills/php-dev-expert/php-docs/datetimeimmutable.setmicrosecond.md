# Define a parte de microssegundos do horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.setmicrosecond.php

---

# DateTimeImmutable::setMicrosecond

(PHP 8 >= 8.4.0)

DateTimeImmutable::setMicrosecond — Define a parte de microssegundos do horário

### Descrição

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setMicrosecond() does not modify the object itself")]  
public function **DateTimeImmutable::setMicrosecond**([int](language.types.integer.md) `$microsecond`): static

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) construído a partir
do antigo, com a parte de microssegundos modificada.

### Parâmetros

`microsecond`
:   O valor de microssegundos a ser definido (`0` a `999999`).

### Valor Retornado

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) com os dados modificados.

### Erros/Exceções

Se `microsecond` estiver fora do intervalo [`0`, `999999`],
uma [DateRangeError](class.daterangeerror.md) é lançada.

### Examples

**Exemplo #1 Exemplo de **DateTimeImmutable::setMicrosecond()****

```
<?php
$date = DateTimeImmutable::createFromTimestamp(123.456789);
echo $date->format('Y-m-d H:i:s.u') . PHP_EOL;
$date = $date->setMicrosecond(987654);
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
