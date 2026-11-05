# Modifica a caixa de todas as chaves em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-change-key-case.php

---

# array\_change\_key\_case

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

array\_change\_key\_case — Modifica a caixa de todas as chaves em um array

### Descrição

function **array\_change\_key\_case**([array](language.types.array.md) `$array`, [int](language.types.integer.md) `$case` = **`CASE_LOWER`**): [array](language.types.array.md)

Retorna um array com todas as chaves de `array` em
minúsculo ou maiúsculo. Índices numéricos são mantidos como são.

### Parâmetros

`array`
:   O array a ser modificado

`case`
:   Tanto **`CASE_UPPER`** quanto
    **`CASE_LOWER`** (padrão)

### Valor Retornado

Retorna um array com as chaves em minúsculo ou maiúsculo.

### Examples

**Exemplo #1 Exemplo da função **array\_change\_key\_case()****

```
<?php
$input_array = array("primeiRo" => 1, "segunDo" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
?>
```

O exemplo acima produzirá:

```
Array
(
    [PRIMEIRO] => 1
    [SEGUNDO] => 4
)
```

### Notas

> **Nota**:
>
> Se um array tem índices que serão os mesmos após a utilização desta função
> (ex: "`chaVE`" e "`CHave`"), o valor que estiver ao final do array
> irá sobrescrever os outros índices.

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
