# Operação Módulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-mod.php

---

# gmp\_mod

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_mod — Operação Módulo

### Descrição

function **gmp\_mod**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [GMP](class.gmp.md)

Calcula o resto da divisão de `num1`
por `num2`. O resultado é sempre não-negativo, o
sinal de `num2` é ignorado.

### Parâmetros

`num1`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`num2`
:   O resto da divisão (módulo) que será calculado.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Um objeto [GMP](class.gmp.md).

### Examples

**Exemplo #1 Exemplo de **gmp\_mod()****

```
<?php
$mod = gmp_mod("8", "3");
echo gmp_strval($mod) . "\n";
?>
```

O exemplo acima produzirá:

```
2
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
