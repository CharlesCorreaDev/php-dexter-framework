# Negativa o número

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-neg.php

---

# gmp\_neg

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_neg — Negativa o número

### Descrição

function **gmp\_neg**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [GMP](class.gmp.md)

Retorna o valor negativo de um número.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Retorna -`num`, como um número GMP.

### Examples

**Exemplo #1 Exemplo de **gmp\_neg()****

```
<?php
$neg1 = gmp_neg("1");
echo gmp_strval($neg1) . "\n";
$neg2 = gmp_neg("-1");
echo gmp_strval($neg2) . "\n";
?>
```

O exemplo acima produzirá:

```
-1
1
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
