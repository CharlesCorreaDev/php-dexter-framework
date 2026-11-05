# A interface IteratorAggregate

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.iteratoraggregate.php

---

# A interface IteratorAggregate

(PHP 5, PHP 7, PHP 8)

## Introdução

Interface para criar um iterador externo.

## Resumo da Interface

interface ****IteratorAggregate****
extends
[Traversable](class.traversable.md) {

/\* Métodos \*/

public function [getIterator](iteratoraggregate.getiterator.md)(): [Traversable](class.traversable.md)

}

## Examples

**Exemplo #1 Uso básico**

```
<?php

class myData implements IteratorAggregate
{
    public function getIterator(): Traversable
    {
        return new ArrayIterator([
            "key one" => "item one",
            "key two" => "item two",
            "key three" => "item three"
        ]);
    }
}

$obj = new myData();

foreach ($obj as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}
```

O exemplo acima produzirá
algo semelhante a:

```
string(7) "key one"
string(8) "item one"

string(7) "key two"
string(8) "item two"

string(9) "key three"
string(10) "item three"
```

## Índice

- [IteratorAggregate::getIterator](iteratoraggregate.getiterator.md) — Recupera um iterador ou Traversable externo

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
