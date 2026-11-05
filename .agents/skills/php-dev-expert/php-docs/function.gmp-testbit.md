# Testa se um bit está definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-testbit.php

---

# gmp\_testbit

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

gmp\_testbit — Testa se um bit está definido

### Descrição

function **gmp\_testbit**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`, [int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

Teste se o bit especificado está definido.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`index`
:   O bit a ser testado.

### Valor Retornado

Retorna **`true`** se o bit estiver definido em `num`,
caso contrário, **`false`**.

### Erros/Exceções

Um erro de nível **`E_WARNING`** será emitido quando
`index` for menor que zero, e **`false`**
será retornado.

### Examples

**Exemplo #1 Exemplo de **gmp\_testbit()****

```
<?php
$n = gmp_init("1000000");
var_dump(gmp_testbit($n, 1));
gmp_setbit($n, 1);
var_dump(gmp_testbit($n, 1));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [gmp\_setbit()](function.gmp-setbit.md) - Define um bit
- [gmp\_clrbit()](function.gmp-clrbit.md) - Limpa um bit

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
