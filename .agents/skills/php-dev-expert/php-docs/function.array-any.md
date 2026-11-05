# Verifica se pelo menos um elemento de um array satisfaz uma função de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-any.php

---

# array\_any

(PHP 8 >= 8.4.0)

array\_any — Verifica se pelo menos um elemento de um [array](language.types.array.md) satisfaz uma função de retorno

### Descrição

function **array\_any**([array](language.types.array.md) `$array`, [callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

**array\_any()** retorna **`true`**, se a função de retorno
`callback` retornar **`true`** para qualquer elemento.
Caso contrário retorna **`false`**.

### Parâmetros

`array`
:   O [array](language.types.array.md) a ser pesquisado.

`callback`
:   A função de retorno a ser chamada para verificar cada elemento, que precisa
    ter a seguinte assinatura:

    function callback([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

    Se esta função retornar **`true`**, **`true`** é retornado por
    **array\_any()** e a função de retorno não será chamada para
    os elementos restantes.

### Valor Retornado

A função retorna **`true`**, se houver pelo menos um elemento para o qual
`callback` retorna **`true`**. Caso contrário retorna
**`false`**.

### Examples

**Exemplo #1 Exemplo de **array\_any()****

```
<?php
$array = [
    'a' => 'cachorro',
    'b' => 'gato',
    'c' => 'vaca',
    'd' => 'pato',
    'e' => 'elefante',
    'f' => 'ganso'
];

// Verifica se algum nome de animal tem mais de 5 letras.
var_dump(array_any($array, function (string $value) {
    return strlen($value) > 5;
}));

// Verifica se algum nome de animal tem menos de 3 letras.
var_dump(array_any($array, function (string $value) {
    return strlen($value) < 3;
}));

// Verifica se alguma chave do array não é uma string.
var_dump(array_any($array, function (string $value, $key) {
   return !is_string($key);
}));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(false)
```

### Veja também

- [array\_all()](function.array-all.md) - Verifica se todos os elementos de um array satisfazem uma função de retorno
- [array\_filter()](function.array-filter.md) - Filtra elementos de um array utilizando uma função callback
- [array\_find()](function.array-find.md) - Retorna um primeiro elemento que satisfaz uma função de retorno
- [array\_find\_key()](function.array-find-key.md) - Retorna a chave do primeiro elemento que satisfaz uma função de retorno

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
