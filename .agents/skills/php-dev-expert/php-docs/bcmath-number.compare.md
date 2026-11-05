# Compara dois números de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.compare.php

---

# BcMath\Number::compare

(PHP 8 >= 8.4.0)

BcMath\Number::compare — Compara dois números de precisão arbitrária

### Descrição

public function **BcMath\Number::compare**([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [int](language.types.integer.md)

Compara dois números de precisão arbitrária.
Este método se comporta como o [operador nave espacial](language.operators.comparison.md).

### Parâmetros

`num`
:   O valor com o qual será feita a comparação.

`scale`
:   O parâmetro `scale` especifica a escala a ser usada para comparação.
    Se for **`null`**, todos os dígitos são usados na comparação.

### Valor Retornado

Retorna `0` se os dois números forem iguais,
`1` se $this for maior que `num`,
`-1` cado contrário.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num` é [string](language.types.string.md) e não é uma string numérica BCMath bem formada
- `scale` está fora do intervalo válido

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::compare()** quando `scale` não é especificado**

```
<?php
$number = new BcMath\Number('1.234');

var_dump(
    $number->compare(new BcMath\Number('1.234')),
    $number->compare('1.23400'),
    $number->compare('1.23401'),
    $number->compare(1),
);
?>
```

O exemplo acima produzirá:

```
int(0)
int(0)
int(-1)
int(1)
```

**Exemplo #2 Exemplo de **BcMath\Number::compare()** com especificação explícita de `scale`**

```
<?php
$number = new BcMath\Number('1.234');

var_dump(
    $number->compare(new BcMath\Number('1.299'), 1),
    $number->compare('1.24', 2),
    $number->compare('1.22', 2),
    $number->compare(1, 0),
);
?>
```

O exemplo acima produzirá:

```
int(0)
int(-1)
int(1)
int(0)
```

### Veja também

- [bccomp()](function.bccomp.md) - Compara dois números de precisão arbitrária

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
