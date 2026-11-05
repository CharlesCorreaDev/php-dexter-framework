# A interface SeekableIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.seekableiterator.php

---

# A interface SeekableIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

O iterador Seekable.

## Resumo da Interface

interface ****SeekableIterator****
extends
[Iterator](class.iterator.md) {

/\* Métodos \*/

public function [seek](seekableiterator.seek.md)([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

/\* Métodos herdados \*/

public function [Iterator::current](iterator.current.md)(): [mixed](language.types.mixed.md)

public function [Iterator::key](iterator.key.md)(): [mixed](language.types.mixed.md)

public function [Iterator::next](iterator.next.md)(): [void](language.types.void.md)

public function [Iterator::rewind](iterator.rewind.md)(): [void](language.types.void.md)

public function [Iterator::valid](iterator.valid.md)(): [bool](language.types.boolean.md)

}

## Examples

**Exemplo #1 Utilização básica**

Este exemplo demonstra a criação de um **SeekableIterator** personalizado,
buscando uma posição e lidando com uma posição inválida.

```
<?php
class MySeekableIterator implements SeekableIterator {

    private $position;

    private $array = array(
        "first element",
        "second element",
        "third element",
        "fourth element"
    );

    /* Método necessário para a interface SeekableIterator */

    public function seek($position) {
      if (!isset($this->array[$position])) {
          throw new OutOfBoundsException("invalid seek position ($position)");
      }

      $this->position = $position;
    }

    /* Methods required for Iterator interface */

    public function rewind() {
        $this->position = 0;
    }

    public function current() {
        return $this->array[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function valid() {
        return isset($this->array[$this->position]);
    }
}

try {

    $it = new MySeekableIterator;
    echo $it->current(), "\n";

    $it->seek(2);
    echo $it->current(), "\n";

    $it->seek(1);
    echo $it->current(), "\n";

    $it->seek(10);

} catch (OutOfBoundsException $e) {
    echo $e->getMessage();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
first element
third element
second element
invalid seek position (10)
```

## Índice

- [SeekableIterator::seek](seekableiterator.seek.md) — Aponta para uma posição

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
