# Define um bit

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-setbit.php

---

# gmp\_setbit

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_setbit — Define um bit

### Descrição

function **gmp\_setbit**([GMP](class.gmp.md) `$num`, [int](language.types.integer.md) `$index`, [bool](language.types.boolean.md) `$value` = **`true`**): [void](language.types.void.md)

Define para 1 o bit na posição `index` no número `num`.

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md).

`index`
:   A posição do bit a ser definido. Posição 0 representa o bit menos significativo.

`value`
:   True para definir o bit (igual a 1 / ligado); false para limpar o bit (igual a 0 / desligado).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **gmp\_setbit()** - posição 0**

```
<?php
$a = gmp_init("2"); //
echo gmp_strval($a), ' -> 0b', gmp_strval($a, 2), "\n";
gmp_setbit($a, 0); // 0b10 agora se torna 0b11
echo gmp_strval($a), ' -> 0b', gmp_strval($a, 2), "\n";
?>
```

O exemplo acima produzirá:

```
2 -> 0b10
3 -> 0b11
```

**Exemplo #2 Exemplo de **gmp\_setbit()** - posição 1**

```
<?php
$a = gmp_init("0xfd");
echo gmp_strval($a), ' -> 0b', gmp_strval($a, 2), "\n";
gmp_setbit($a, 1); // posição inicia em 0
echo gmp_strval($a), ' -> 0b', gmp_strval($a, 2), "\n";
?>
```

O exemplo acima produzirá:

```
253 -> 0b11111101
255 -> 0b11111111
```

**Exemplo #3 Exemplo de **gmp\_setbit()** - limpando um bit**

```
<?php
$a = gmp_init("0xff");
echo gmp_strval($a), ' -> 0b', gmp_strval($a, 2), "\n";
gmp_setbit($a, 0, false); // limpa o bit na posição 0
echo gmp_strval($a), ' -> 0b', gmp_strval($a, 2), "\n";
?>
```

O exemplo acima produzirá:

```
255 -> 0b11111111
254 -> 0b11111110
```

### Notas

> **Nota**:
>
> Ao contrário da maioria das outras funções GMP, **gmp\_setbit()**
> deve ser chamada com um objeto GMP que já exista (usando
> [gmp\_init()](function.gmp-init.md) por exemplo). Um objeto não será
> criado automaticamente.

### Veja também

- [gmp\_clrbit()](function.gmp-clrbit.md) - Limpa um bit
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
