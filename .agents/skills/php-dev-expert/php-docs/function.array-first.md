# Obtém o primeiro valor de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-first.php

---

# array\_first

(PHP 8 >= 8.5.0)

array\_first — Obtém o primeiro valor de um array

### Descrição

function **array\_first**([array](language.types.array.md) `$array`): [mixed](language.types.mixed.md)

Obtém o primeiro valor do `array` fornecido.

### Parâmetros

`array`
:   Um array.

### Valor Retornado

Retorna o primeiro valor de `array` se o array não estiver vazio;
**`null`** caso contrário.

### Examples

**Exemplo #1 Uso básico de **array\_first()****

```
<?php
$array = [1 => 'a', 0 => 'b', 3 => 'c', 2 => 'd'];

$firstValue = array_first($array);

var_dump($firstValue);
?>
```

O exemplo acima produzirá:

```
string(1) "a"
```

### Veja também

- [array\_key\_first()](function.array-key-first.md) - Obtém a primeira chave de um array
- [array\_last()](function.array-last.md) - Obtém o último valor de um array

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
