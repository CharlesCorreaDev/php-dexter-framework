# Retorna um primeiro elemento que satisfaz uma função de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-find.php

---

# array\_find

(PHP 8 >= 8.4.0)

array\_find — Retorna um primeiro elemento que satisfaz uma função de retorno

### Descrição

function **array\_find**([array](language.types.array.md) `$array`, [callable](language.types.callable.md) `$callback`): [mixed](language.types.mixed.md)

**array\_find()** retorna o valor do primeiro elemento de um
[array](language.types.array.md) para o qual a função `callback` retorna **`true`**.
Se nenhum elemento correspondente for encontrado, a função retorna **`null`**.

### Parâmetros

`array`
:   O [array](language.types.array.md) a ser pesquisado.

`callback`
:   A função de retorno a ser chamada para verificar cada elemento, que precisa
    ter a seguinte assinatura:

    function callback([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

    Se esta função retornar **`true`**, o valor é retornado por
    **array\_find()** e a função de retorno não será chamada para
    os elementos restantes.

### Valor Retornado

A função retorna o valor do primeiro elemento para o qual
`callback` retorna **`true`**. Se nenhum elemento correspondente for
encontrado, a função retorna **`null`**.

### Examples

**Exemplo #1 Exemplo de **array\_find()****

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

// Encontra o primeiro animal com nome maior que 4 letras.
var_dump(array_find($array, function (string $value) {
    return strlen($value) > 4;
}));

// Encontra o primeiro animal cujo nome começa com f.
var_dump(array_find($array, function (string $value) {
    return str_starts_with($value, 'f');
}));

// Encontra o primeiro animal onde a chave do array é a primeira letra do nome.
var_dump(array_find($array, function (string $value, $key) {
   return $value[0] === $key;
}));

// Encontra o primeiro animal onde a chave do array corresponde a uma expressão regular.
var_dump(array_find($array, function ($value, $key) {
   return preg_match('/^([a-f])$/', $key);
}));
?>
```

O exemplo acima produzirá:

```
string(8) "cachorro"
NULL
string(8) "elefante"
string(3) "cachorro"
```

### Veja também

- [array\_find\_key()](function.array-find-key.md) - Retorna a chave do primeiro elemento que satisfaz uma função de retorno
- [array\_all()](function.array-all.md) - Verifica se todos os elementos de um array satisfazem uma função de retorno
- [array\_any()](function.array-any.md) - Verifica se pelo menos um elemento de um array satisfaz uma função de retorno
- [array\_filter()](function.array-filter.md) - Filtra elementos de um array utilizando uma função callback
- [array\_reduce()](function.array-reduce.md) - Reduz um array para um único valor através de um processo iterativo via callback

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
