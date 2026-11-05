# Retorna a soma de todos os valores na deque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.sum.php

---

# Ds\Deque::sum

(PECL ds >= 1.0.0)

Ds\Deque::sum — Retorna a soma de todos os valores na deque

### Descrição

public function **Ds\Deque::sum**(): [int](language.types.integer.md)|[float](language.types.float.md)

Retorna a soma de todos os valores na deque.

> **Nota**:
>
> Arrays e objetos são considerados iguais a zero ao calcular a soma.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A soma de todos os valores na deque, seja como um [float](language.types.float.md) ou [int](language.types.integer.md),
dependendo dos valores na deque.

### Examples

**Exemplo #1 **Ds\Deque::sum()** exemplo inteiro**

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);
var_dump($deque->sum());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(6)
```

**Exemplo #2 **Ds\Deque::sum()** exemplo float**

```
<?php
$deque = new \Ds\Deque([1, 2.5, 3]);
var_dump($deque->sum());
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
