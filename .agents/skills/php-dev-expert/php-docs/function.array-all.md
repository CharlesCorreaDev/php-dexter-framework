# Verifica se todos os elementos de um array satisfazem uma função de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-all.php

---

# array\_all

(PHP 8 >= 8.4.0)

array\_all — Verifica se todos os elementos de um [array](language.types.array.md) satisfazem uma função de retorno

### Descrição

function **array\_all**([array](language.types.array.md) `$array`, [callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

**array\_all()** retorna **`true`**, se a função de retorno
`callback` retornar **`true`** para todos os elementos.
Caso contrário, retorna **`false`**.

### Parâmetros

`array`
:   O [array](language.types.array.md) a ser pesquisado.

`callback`
:   A função de retorno a ser chamada para verificar cada elemento, que precisa ter
    a seguinte assinatura:

    function callback([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

    Se esta função retornar **`false`**, **`false`** é retornado por
    **array\_all()** e a função de retorno não será chamada para
    os elementos restantes.

### Valor Retornado

A função retorna **`true`**, se `callback` retornar
**`true`** para todos os elementos. Caso contrário retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **array\_all()****

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

// Verifica se todos os nomes de animais têm menos de 12 letras.
var_dump(array_all($array, function (string $value) {
    return strlen($value) < 12;
}));

// Verifica se todos os nomes de animais têm mais que 5 letras.
var_dump(array_all($array, function (string $value) {
    return strlen($value) > 5;
}));

// Verifica se todas as chaves são strings.
var_dump(array_all($array, function (string $value, $key) {
   return is_string($key);
}));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(true)
```

### Veja também

- [array\_any()](function.array-any.md) - Verifica se pelo menos um elemento de um array satisfaz uma função de retorno
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
