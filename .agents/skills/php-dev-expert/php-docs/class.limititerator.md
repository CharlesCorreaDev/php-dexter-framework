# A classe LimitIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.limititerator.php

---

# A classe LimitIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

A classe **LimitIterator** permite a iteração sobre
um subconjunto limitado de itens em um [Iterator](class.iterator.md).

## Resumo da classe

class ****LimitIterator****
extends
[IteratorIterator](class.iteratoriterator.md)
{

/\* Métodos \*/

public function [\_\_construct](limititerator.construct.md)([Iterator](class.iterator.md) `$iterator`, [int](language.types.integer.md) `$offset` = 0, [int](language.types.integer.md) `$limit` = -1)

public function [current](limititerator.current.md)(): [mixed](language.types.mixed.md)

public function [getPosition](limititerator.getposition.md)(): [int](language.types.integer.md)

public function [key](limititerator.key.md)(): [mixed](language.types.mixed.md)

public function [next](limititerator.next.md)(): [void](language.types.void.md)

public function [rewind](limititerator.rewind.md)(): [void](language.types.void.md)

public function [seek](limititerator.seek.md)([int](language.types.integer.md) `$offset`): [int](language.types.integer.md)

public function [valid](limititerator.valid.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [IteratorIterator::current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [IteratorIterator::key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [IteratorIterator::rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [IteratorIterator::valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Examples

**Exemplo #1 Exemplo de uso de **LimitIterator****

```
<?php

// Cria um iterador para ser limitado
$fruits = new ArrayIterator(array(
    'apple',
    'banana',
    'cherry',
    'damson',
    'elderberry'
));

// Percorre pelas três primeiras frutas somente
foreach (new LimitIterator($fruits, 0, 3) as $fruit) {
    var_dump($fruit);
}

echo "\n";

// Percorre a partir da terceira fruta até o final
// Observação: a posição inicia a partir de zero para "apple"
foreach (new LimitIterator($fruits, 2) as $fruit) {
    var_dump($fruit);
}

?>
```

O exemplo acima produzirá:

```
string(5) "apple"
string(6) "banana"
string(6) "cherry"

string(6) "cherry"
string(6) "damson"
string(10) "elderberry"
```

## Índice

- [LimitIterator::\_\_construct](limititerator.construct.md) — Constrói um LimitIterator
- [LimitIterator::current](limititerator.current.md) — Obtém o elemento atual
- [LimitIterator::getPosition](limititerator.getposition.md) — Retorna a posição atual
- [LimitIterator::key](limititerator.key.md) — Obtém a chave atual
- [LimitIterator::next](limititerator.next.md) — Avança o iterador
- [LimitIterator::rewind](limititerator.rewind.md) — Retorna o iterador para o começo especificado no construtor
- [LimitIterator::seek](limititerator.seek.md) — Aponta para a posição especificada
- [LimitIterator::valid](limititerator.valid.md) — Verifica se o elemento atual é válido ou não

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
