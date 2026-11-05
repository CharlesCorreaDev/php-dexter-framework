# Retorna a soma de todos os valores no vetor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.sum.php

---

# Ds\Vector::sum

(PECL ds >= 1.0.0)

Ds\Vector::sum — Retorna a soma de todos os valores no vetor

### Descrição

public function **Ds\Vector::sum**(): [int](language.types.integer.md)|[float](language.types.float.md)

Retorna a soma de todos os valores no vetor.

> **Nota**:
>
> Arrays e objetos são considerados iguais a zero ao calcular a soma.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A soma de todos os valores no vetor como um [float](language.types.float.md) ou [int](language.types.integer.md),
dependendo dos valores no vetor.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::sum()** com inteiros**

```
<?php
$vector = new \Ds\Vector([1, 2, 3]);
var_dump($vector->sum());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(6)
```

**Exemplo #2 Exemplo de **Ds\Vector::sum()** com flutuantes**

```
<?php
$vector = new \Ds\Vector([1, 2.5, 3]);
var_dump($vector->sum());
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
