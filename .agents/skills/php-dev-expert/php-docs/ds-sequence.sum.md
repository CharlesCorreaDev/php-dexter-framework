# Retorna a soma de todos os valores na sequência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.sum.php

---

# Ds\Sequence::sum

(PECL ds >= 1.0.0)

Ds\Sequence::sum — Retorna a soma de todos os valores na sequência

### Descrição

abstract public function **Ds\Sequence::sum**(): [int](language.types.integer.md)|[float](language.types.float.md)

Retorna a soma de todos os valores na sequência.

> **Nota**:
>
> Arrays e objetos são considerados iguais a zero ao calcular a soma.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A soma de todos os valores na sequência, seja como [float](language.types.float.md) ou [int](language.types.integer.md),
dependendo dos valores na sequência.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::sum()** com inteiros**

```
<?php
$sequence = new \Ds\Vector([1, 2, 3]);
var_dump($sequence->sum());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(6)
```

**Exemplo #2 Exemplo de **Ds\Sequence::sum()** com flutuantes**

```
<?php
$sequence = new \Ds\Vector([1, 2.5, 3]);
var_dump($sequence->sum());
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
