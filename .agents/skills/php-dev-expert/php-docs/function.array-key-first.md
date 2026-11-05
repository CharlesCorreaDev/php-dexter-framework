# Obtém a primeira chave de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-key-first.php

---

# array\_key\_first

(PHP 7 >= 7.3.0, PHP 8)

array\_key\_first — Obtém a primeira chave de um array

### Descrição

function **array\_key\_first**([array](language.types.array.md) `$array`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

Obtém a primeira chave do `array` fornecido sem afetar
o ponteiro do array interno.

### Parâmetros

`array`
:   Um array.

### Valor Retornado

Retorna a primeira chave do `array` se o array não estiver vazio;
**`null`** caso contrário.

### Examples

**Exemplo #1 Uso básico de **array\_key\_first()****

```
<?php
$array = ['a' => 1, 'b' => 2, 'c' => 3];

$firstKey = array_key_first($array);

var_dump($firstKey);
?>
```

O exemplo acima produzirá:

```
string(1) "a"
```

### Notas

**Dica**

Existem várias maneiras de fornecer essa funcionalidade para versões anteriores ao PHP 7.3.0.
É possível usar [array\_keys()](function.array-keys.md), mas isso pode ser bastante
ineficiente. Também é possível usar [reset()](function.reset.md) e [key()](function.key.md),
mas isso pode alterar o ponteiro do array interno. Uma solução eficiente, que não
altera o ponteiro interno do array, escrito como polyfill:

```
<?php
if (!function_exists('array_key_first')) {
    function array_key_first(array $arr) {
        foreach($arr as $key => $unused) {
            return $key;
        }
        return NULL;
    }
}
?>
```

### Veja também

- [array\_first()](function.array-first.md) - Obtém o primeiro valor de um array
- [array\_key\_last()](function.array-key-last.md) - Obtém a última chave de um array
- [reset()](function.reset.md) - Faz o ponteiro interno de um array apontar para o seu primeiro elemento

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
