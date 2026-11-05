# Retorna uma chave de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.key.php

---

# key

(PHP 4, PHP 5, PHP 7, PHP 8)

key — Retorna uma chave de um array

### Descrição

function **key**([array](language.types.array.md)|[object](language.types.object.md) `$array`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

**key()** retorna a chave da posição atual de
um array.

### Parâmetros

`array`
:   O array.

### Valor Retornado

A função **key()** simplesmente retorna a
chave do elemento do array que está atualmente sendo apontada pelo
ponteiro interno. Isso não move o ponteiro de nenhuma forma. Se o
ponteiro interno aponta além do fim de elementos da lista ou o array está
vazio, **key()** retorna **`null`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Chamar esta função em [object](language.types.object.md)s foi descontinuado. Converta o [object](language.types.object.md) para um [array](language.types.array.md) usando [get\_mangled\_object\_vars()](function.get-mangled-object-vars.md) primeiro ou, em vez disso, use os métodos fornecidos por uma classe que implementa [Iterator](class.iterator.md), como [ArrayIterator](class.arrayiterator.md). |
| 7.4.0 | Instâncias de classes [SPL](book.spl.md) agora são tratadas como objetos vazios que não possuem propriedades em vez de chamar o método da interface [Iterator](class.iterator.md) com o mesmo nome desta função. |

### Examples

**Exemplo #1 Exemplo da **key()****

```
<?php
$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// este ciclo exibirá toda a chave do array associativo
// onde o valor é igual a "apple"
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array), "\n";
    }
    next($array);
}
?>
```

O exemplo acima produzirá:

```
fruit1
fruit4
fruit5
```

### Veja também

- [current()](function.current.md) - Retorna o elemento atual em um array
- [next()](function.next.md) - Avança o ponteiro interno de um array
- [array\_key\_first()](function.array-key-first.md) - Obtém a primeira chave de um array
- [foreach](control-structures.foreach.md)

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
