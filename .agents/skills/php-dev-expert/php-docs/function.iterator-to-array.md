# Copia o iterador em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iterator-to-array.php

---

# iterator\_to\_array

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

iterator\_to\_array — Copia o iterador em um array

### Descrição

function **iterator\_to\_array**([Traversable](class.traversable.md)|[array](language.types.array.md) `$iterator`, [bool](language.types.boolean.md) `$preserve_keys` = **`true`**): [array](language.types.array.md)

Copia os elementos de um iterador em um array.

### Parâmetros

`iterator`
:   O iterador que está sendo copiado.

`preserve_keys`
:   Se as chaves do iterador serão utilizadas como índices.

    Se a chave for um [array](language.types.array.md) ou
    [object](language.types.object.md), um erro warning será gerado. Chaves **`null`** serão
    convertidas em uma string vazia, chaves [float](language.types.float.md) serão
    truncadas em sua parte [int](language.types.integer.md),
    chaves [resource](language.types.resource.md) irão gerar um erro warning e serão convertidas para
    o seu resource ID, e as chaves [bool](language.types.boolean.md) serão convertidas para
    inteiros.

    > **Nota**:
    >
    > Se este parâmetro não for definido ou for definido como **`true`**, as chaves duplicadas serão
    > sobrescritas. O último valor com aquela chave estará no [array](language.types.array.md)
    > retornado. Defina esse parâmetro como **`false`** para receber todos os valores
    > em qualquer caso.

### Valor Retornado

Um [array](language.types.array.md) contendo os elementos do `iterator`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo de `iterator` foi ampliado de [Traversable](class.traversable.md) para [Traversable](class.traversable.md)|[array](language.types.array.md). |

### Examples

**Exemplo #1 Exemplo da **iterator\_to\_array()****

```
<?php
$iterator = new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour'));
var_dump(iterator_to_array($iterator, true));
var_dump(iterator_to_array($iterator, false));
?>
```

O exemplo acima produzirá:

```
array(4) {
  ["recipe"]=>
  string(8) "pancakes"
  [0]=>
  string(3) "egg"
  [1]=>
  string(4) "milk"
  [2]=>
  string(5) "flour"
}
array(4) {
  [0]=>
  string(8) "pancakes"
  [1]=>
  string(3) "egg"
  [2]=>
  string(4) "milk"
  [3]=>
  string(5) "flour"
}
```

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
