# Converte um número GMP para um inteiro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-intval.php

---

# gmp\_intval

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_intval — Converte um número GMP para um inteiro

### Descrição

function **gmp\_intval**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [int](language.types.integer.md)

Esta função converte um número GMP para um [int](language.types.integer.md) nativo do PHP.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Um valor [int](language.types.integer.md) de `num`.

### Examples

**Exemplo #1 Exemplo **gmp\_intval()****

```
<?php
// Mostra o valor correto
echo gmp_intval("2147483647") . "\n";

// Mostra um resultado errado, acima do limite de inteiro do PHP
echo gmp_intval("2147483648") . "\n";

// mostra o valor correto
echo gmp_strval("2147483648") . "\n";
?>
```

O exemplo acima produzirá:

```
2147483647
2147483647
2147483648
```

### Notas

**Aviso**

Esta função retorna um resultado útil somente se o número realmente
cabe em um inteiro PHP (isto é, tipo longo com sinal). Para simplesmente mostrar
o número GMP, use [gmp\_strval()](function.gmp-strval.md).

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
