# Chama uma função para cada elemento em um iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iterator-apply.php

---

# iterator\_apply

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

iterator\_apply — Chama uma função para cada elemento em um iterador

### Descrição

function **iterator\_apply**([Traversable](class.traversable.md) `$iterator`, [callable](language.types.callable.md) `$callback`, [?](language.types.null.md)[array](language.types.array.md) `$args` = **`null`**): [int](language.types.integer.md)

Chama uma função para cada elemento em um iterador.

### Parâmetros

`iterator`
:   O objeto iterador sobre o qual iterar.

`callback`
:   A função callback para chamar em cada elemento.
    Esta função recebe apenas os `args` dados, então
    é nulária por padrão. Se `count($args) === 3`, por exemplo,
    a função callback é ternária.
    > **Nota**:
    >
    > A função deve retornar **`true`** para continuar
    > iterando sobre o `iterator`.

`args`
:   Um [array](language.types.array.md) de argumentos; cada elemento de
    `args` é passado para a função callback
    `callback` como um argumento separado.

### Valor Retornado

Retorna a contagem de iteração.

### Examples

**Exemplo #1 Exemplo de **iterator\_apply()****

```
<?php
function print_caps(Iterator $iterator) {
    echo strtoupper($iterator->current()) . "\n";
    return TRUE;
}

$it = new ArrayIterator(array("Apples", "Bananas", "Cherries"));
iterator_apply($it, "print_caps", array($it));
?>
```

O exemplo acima produzirá:

```
APPLES
BANANAS
CHERRIES
```

### Veja também

- [array\_walk()](function.array-walk.md) - Aplica uma determinada função em cada elemento de um array

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
