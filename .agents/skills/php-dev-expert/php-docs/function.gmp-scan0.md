# Procura por 0

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-scan0.php

---

# gmp\_scan0

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_scan0 — Procura por 0

### Descrição

function **gmp\_scan0**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [int](language.types.integer.md) `$start`): [int](language.types.integer.md)

Pesquisa `num1`, iniciando com o bit
definido em `start`, no sentido dos bits mais significativos,
até que o primeiro bit 0 seja encontrado.

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
primeira posição é 0.

### Examples

**Exemplo #1 Exemplo de **gmp\_scan0()****

```
<?php
// Bit "0" é encontrado na posição 3. A posição inicia em 0.
$s1 = gmp_init("10111", 2);
echo gmp_scan0($s1, 0) . "\n";

// Bit "0" é encontrado na posição 7. A posição inicia em 5.
$s2 = gmp_init("101110000", 2);
echo gmp_scan0($s2, 5) . "\n";
?>
```

O exemplo acima produzirá:

```
3
7
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
