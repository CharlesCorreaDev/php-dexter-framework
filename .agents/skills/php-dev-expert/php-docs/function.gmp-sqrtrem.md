# Raiz quadrada com resto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-sqrtrem.php

---

# gmp\_sqrtrem

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_sqrtrem — Raiz quadrada com resto

### Descrição

function **gmp\_sqrtrem**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [array](language.types.array.md)

Calcula a raiz quadrada de um número, com resto.

### Parâmetros

`num`
:   O número do qual será calculada a raiz quadrada.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Retorna um array onde o primeiro elemento é a raiz quadrada inteira de
`num` e o segundo é o resto
(isto é, a diferença entre `num` e o
quadrado do primeiro elemento).

### Examples

**Exemplo #1 Exemplo de **gmp\_sqrtrem()****

```
<?php
list($sqrt1, $sqrt1rem) = gmp_sqrtrem("9");
list($sqrt2, $sqrt2rem) = gmp_sqrtrem("7");
list($sqrt3, $sqrt3rem) = gmp_sqrtrem("1048576");

echo gmp_strval($sqrt1) . ", " . gmp_strval($sqrt1rem) . "\n";
echo gmp_strval($sqrt2) . ", " . gmp_strval($sqrt2rem) . "\n";
echo gmp_strval($sqrt3) . ", " . gmp_strval($sqrt3rem) . "\n";
?>
```

O exemplo acima produzirá:

```
3, 0
2, 3
1024, 0
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
