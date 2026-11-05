# Valor absoluto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-abs.php

---

# gmp\_abs

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_abs — Valor absoluto

### Descrição

function **gmp\_abs**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [GMP](class.gmp.md)

Obtém o valor absoluto de um número.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Retorna o valor absoluto de `num`, como um número GMP.

### Examples

**Exemplo #1 Exemplo de **gmp\_abs()****

```
<?php
$abs1 = gmp_abs("274982683358");
$abs2 = gmp_abs("-274982683358");

echo gmp_strval($abs1) . "\n";
echo gmp_strval($abs2) . "\n";
?>
```

O exemplo acima produzirá:

```
274982683358
274982683358
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
