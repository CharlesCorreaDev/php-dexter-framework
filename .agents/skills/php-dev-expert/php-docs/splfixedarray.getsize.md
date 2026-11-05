# Obtém o tamanho do array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.getsize.php

---

# SplFixedArray::getSize

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplFixedArray::getSize — Obtém o tamanho do array

### Descrição

public function **SplFixedArray::getSize**(): [int](language.types.integer.md)

Obtém o tamanho do array.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tamanho do array, como um [int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo de **SplFixedArray::getSize()****

```
<?php
$array = new SplFixedArray(5);
echo $array->getSize()."\n";
$array->setSize(10);
echo $array->getSize()."\n";
?>
```

O exemplo acima produzirá:

```
5
10
```

### Notas

> **Nota**:
>
> Este método é funcionalmente equivalente a [SplFixedArray::count()](splfixedarray.count.md)

### Veja também

- [SplFixedArray::count()](splfixedarray.count.md) - Retorna o tamanho do array

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
