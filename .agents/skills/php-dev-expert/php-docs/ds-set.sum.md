# Retorna a soma de todos os valores no conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.sum.php

---

# Ds\Set::sum

(PECL ds >= 1.0.0)

Ds\Set::sum — Retorna a soma de todos os valores no conjunto

### Descrição

public function **Ds\Set::sum**(): [int](language.types.integer.md)|[float](language.types.float.md)

Retorna a soma de todos os valores no conjunto.

> **Nota**:
>
> Arrays e objetos são considerados iguais a zero ao calcular a soma.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A soma de todos os valores no conjunto como um [float](language.types.float.md) ou [int](language.types.integer.md)
dependendo dos valores no conjunto.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::sum()** com inteiros**

```
<?php
$set = new \Ds\Set([1, 2, 3]);
var_dump($set->sum());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(6)
```

**Exemplo #2 Exemplo de **Ds\Set::sum()** com flutuantes**

```
<?php
$set = new \Ds\Set([1, 2.5, 3]);
var_dump($set->sum());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
float(6.5)
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
