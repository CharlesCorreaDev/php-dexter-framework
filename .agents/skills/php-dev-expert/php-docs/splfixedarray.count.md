# Retorna o tamanho do array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.count.php

---

# SplFixedArray::count

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplFixedArray::count — Retorna o tamanho do array

### Descrição

public function **SplFixedArray::count**(): [int](language.types.integer.md)

Retorna o tamanho do array.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tamanho do array.

### Examples

**Exemplo #1 Exemplo de **SplFixedArray::count()****

```
<?php
$array = new SplFixedArray(5);
echo $array->count() . "\n";
echo count($array) . "\n";
?>
```

O exemplo acima produzirá:

```
5
5
```

### Notas

> **Nota**:
>
> Este método é funcionalmente equivalente a [SplFixedArray::getSize()](splfixedarray.getsize.md).

> **Nota**:
>
> A contagem de elementos é sempre igual ao tamanho definido porque todos os valores são inicialmente
> inicializados com **`null`**.

### Veja também

- [SplFixedArray::getSize()](splfixedarray.getsize.md) - Obtém o tamanho do array

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
