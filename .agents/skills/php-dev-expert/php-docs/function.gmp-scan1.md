# Procura por 1

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-scan1.php

---

# gmp\_scan1

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_scan1 — Procura por 1

### Descrição

function **gmp\_scan1**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [int](language.types.integer.md) `$start`): [int](language.types.integer.md)

Pesquisa `num1`, iniciando com o bit
definido em `start`, no sentido dos bits mais significativos,
até que o primeiro bit 1 seja encontrado.

### Parâmetros

`num1`
:   O número a ser pesquisado.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`start`
:   O bit inicial.

### Valor Retornado

Retorna a posição do bit encontrado, como um [int](language.types.integer.md). A
primeira posição é 0. Se nenhum bit 1 for encontrado, retorna -1.

### Examples

**Exemplo #1 Exemplo de **gmp\_scan1()****

```
<?php
// Bit "1" é encontrado na posição 3. A posição inicia em 0.
$s1 = gmp_init("01000", 2);
echo gmp_scan1($s1, 0) . "\n";

// Bit "1" é encontrado na posição 9. A posição inicia em 5.
$s2 = gmp_init("01000001111", 2);
echo gmp_scan1($s2, 5) . "\n";
?>
```

O exemplo acima produzirá:

```
3
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
