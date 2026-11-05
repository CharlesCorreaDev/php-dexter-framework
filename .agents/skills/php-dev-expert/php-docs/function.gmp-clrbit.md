# Limpa um bit

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-clrbit.php

---

# gmp\_clrbit

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_clrbit — Limpa um bit

### Descrição

function **gmp\_clrbit**([GMP](class.gmp.md) `$num`, [int](language.types.integer.md) `$index`): [void](language.types.void.md)

Limpa (define para 0) o bit na posição `index` no número
informado em `num`. O índice começa em 0.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md).

`index`
:   O índice do bit a ser zerado. Índice 0 representa o bit menos significativo.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **gmp\_clrbit()****

```
<?php
$a = gmp_init("0xff");
gmp_clrbit($a, 0); // índice inicia em 0, o bit menos significativo
echo gmp_strval($a) . "\n";
?>
```

O exemplo acima produzirá:

```
254
```

### Notas

> **Nota**:
>
> Diferentemente de outras funções GMP, **gmp\_clrbit()**
> precisa ser chamada com um objeto GMP já existente (usando
> [gmp\_init()](function.gmp-init.md) por exemplo). Ele não será
> automaticamente criado.

### Veja também

- [gmp\_setbit()](function.gmp-setbit.md) - Define um bit
- [gmp\_testbit()](function.gmp-testbit.md) - Testa se um bit está definido

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
