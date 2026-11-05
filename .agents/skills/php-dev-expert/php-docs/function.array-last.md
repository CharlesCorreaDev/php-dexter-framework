# Obtém o último valor de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-last.php

---

# array\_last

(PHP 8 >= 8.5.0)

array\_last — Obtém o último valor de um array

### Descrição

function **array\_last**([array](language.types.array.md) `$array`): [mixed](language.types.mixed.md)

Obtém o último valor do `array` fornecido.

### Parâmetros

`array`
:   Um array.

### Valor Retornado

Retorna o último valor de `array` se o array não estiver vazio;
**`null`** caso contrário.

### Examples

**Exemplo #1 Uso básico de **array\_last()****

```
<?php
$array = [1 => 'a', 0 => 'b', 3 => 'c', 2 => 'd'];

$lastValue = array_last($array);

var_dump($lastValue);
?>
```

O exemplo acima produzirá:

```
string(1) "d"
```

### Veja também

- [array\_key\_last()](function.array-key-last.md) - Obtém a última chave de um array
- [array\_first()](function.array-first.md) - Obtém o primeiro valor de um array

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
