# Cria uma instância a partir de um timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.createfromtimestamp.php

---

# DateTime::createFromTimestamp

(PHP 8 >= 8.4.0)

DateTime::createFromTimestamp — Cria uma instância a partir de um timestamp Unix

### Descrição

public static function **DateTime::createFromTimestamp**([int](language.types.integer.md)|[float](language.types.float.md) `$timestamp`): static

Cria uma instância a partir de um timestamp Unix.

### Parâmetros

`timestamp`
:   Timestamp Unix representando a data/horário.
    Um valor [float](language.types.float.md) também é aceito, o que permite precisão de microssegundos.

### Valor Retornado

Retorna uma nova instância de [DateTime](class.datetime.md).

### Erros/Exceções

Se `timestamp` estiver fora do intervalo [**`PHP_INT_MIN`**, **`PHP_INT_MAX`**],
uma [DateRangeError](class.daterangeerror.md) é lançada.

### Examples

**Exemplo #1 Exemplo de **DateTime::createFromTimestamp()****

```
<?php
$date = DateTime::createFromTimestamp(123.456789);
echo $date->format('Y-m-d H:i:s.u');
?>
```

O exemplo acima produzirá:

```
1970-01-01 00:02:03.456789
```

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
