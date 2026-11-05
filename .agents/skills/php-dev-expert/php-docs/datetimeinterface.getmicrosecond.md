# Obtém a parte de microssegundos do timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeinterface.getmicrosecond.php

---

# DateTimeInterface::getMicrosecond

# DateTimeImmutable::getMicrosecond

# DateTime::getMicrosecond

(PHP 8 >= 8.4.0)

DateTimeInterface::getMicrosecond -- DateTimeImmutable::getMicrosecond -- DateTime::getMicrosecond — Obtém a parte de microssegundos do timestamp Unix

### Descrição

public function **DateTimeInterface::getMicrosecond**(): [int](language.types.integer.md)

public function **DateTimeImmutable::getMicrosecond**(): [int](language.types.integer.md)

public function **DateTime::getMicrosecond**(): [int](language.types.integer.md)

Obtém a parte de microssegundos do timestamp Unix.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a parte de microssegundos do timestamp Unix que representa a data/horário.

### Examples

**Exemplo #1 Exemplo de **DateTimeInterface::getMicrosecond()****

```
<?php
$date = new DateTimeImmutable('2024-01-01 12:34:56.789123');
var_dump($date->format('u'));
var_dump($date->getMicrosecond());
?>
```

O exemplo acima produzirá:

```
string(6) "789123"
int(789123)
```

### Veja também

- [DateTimeInterface::getTimestamp()](datetime.gettimestamp.md) - Obtém o timestamp Unix
- [DateTimeInterface::format()](datetime.format.md) - Retorna a data formatada de acordo com um formato informado

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
