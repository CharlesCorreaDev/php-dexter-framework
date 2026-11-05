# Calcula o complemento de um

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-com.php

---

# gmp\_com

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_com — Calcula o complemento de um

### Descrição

function **gmp\_com**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [GMP](class.gmp.md)

Retorna o complemento de um do valor `num`.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Retorna o complemento de um do valor `num`, como um número GMP.

### Examples

**Exemplo #1 Exemplo **gmp\_com()****

```
<?php
$com = gmp_com("1234");
echo gmp_strval($com) . "\n";
?>
```

O exemplo acima produzirá:

```
-1235
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
