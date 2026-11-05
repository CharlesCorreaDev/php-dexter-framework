# Inverso modular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-invert.php

---

# gmp\_invert

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_invert — Inverso modular

### Descrição

function **gmp\_invert**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [GMP](class.gmp.md)|[false](language.types.singleton.md)

Computa o inverso de `num1` módulo
`num2`.

### Parâmetros

`num1`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`num2`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Um número GMP em caso de sucesso ou **`false`** se um inverso não existir.

### Examples

**Exemplo #1 Exemplo de **gmp\_invert()****

```
<?php
echo gmp_invert("5", "10"); // sem inverso, não mostra nada, resultado é FALSE
$invert = gmp_invert("5", "11");
echo gmp_strval($invert) . "\n";
?>
```

O exemplo acima produzirá:

```
9
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
