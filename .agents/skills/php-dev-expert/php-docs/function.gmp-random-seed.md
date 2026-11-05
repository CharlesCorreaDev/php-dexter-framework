# Define a semente do gerador de números aleatórios

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-random-seed.php

---

# gmp\_random\_seed

(PHP 7, PHP 8)

gmp\_random\_seed — Define a semente do gerador de números aleatórios

### Descrição

function **gmp\_random\_seed**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$seed`): [void](language.types.void.md)

### Parâmetros

`seed`
:   A semente a ser definida para as funções [gmp\_random()](function.gmp-random.md),
    [gmp\_random\_bits()](function.gmp-random-bits.md) e
    [gmp\_random\_range()](function.gmp-random-range.md).

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se o parâmetro `seed`
for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se `seed` for inválido, **gmp\_random\_seed()** agora lança uma exceção [ValueError](class.valueerror.md). Anteriormente, emitia um **`E_WARNING`** e retornava **`false`**. |

### Examples

**Exemplo #1 Exemplo de **gmp\_random\_seed()****

```
<?php
// define a semente
gmp_random_seed(100);

var_dump(gmp_strval(gmp_random(1)));

// define a semente para algo diferente
gmp_random_seed(gmp_init(-100));

var_dump(gmp_strval(gmp_random_bits(10)));

// define a semente para algo inválido
var_dump(gmp_random_seed('not a number'));
```

O exemplo acima produzirá:

```
string(20) "15370156633245019617"
string(3) "683"

Warning: gmp_random_seed(): Unable to convert variable to GMP - string is not an integer in %s on line %d
bool(false)
```

### Veja também

- [gmp\_init()](function.gmp-init.md) - Cria um número GMP
- [gmp\_random()](function.gmp-random.md) - Número aleatório
- [gmp\_random\_bits()](function.gmp-random-bits.md) - Numero aleatório
- [gmp\_random\_range()](function.gmp-random-range.md) - Obtém um inteiro uniformemente selecionado

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
