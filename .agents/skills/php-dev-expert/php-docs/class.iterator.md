# A interface Iterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.iterator.php

---

# A interface Iterator

(PHP 5, PHP 7, PHP 8)

## Introdução

Interface para iteradores externos ou objetos poderem ser iterados
por eles mesmos internamente.

## Resumo da Interface

interface ****Iterator****
extends
[Traversable](class.traversable.md) {

/\* Métodos \*/

public function [current](iterator.current.md)(): [mixed](language.types.mixed.md)

public function [key](iterator.key.md)(): [mixed](language.types.mixed.md)

public function [next](iterator.next.md)(): [void](language.types.void.md)

public function [rewind](iterator.rewind.md)(): [void](language.types.void.md)

public function [valid](iterator.valid.md)(): [bool](language.types.boolean.md)

}

## Iterators predefinidos

O PHP já possui diversos iteradores para muitas das tarefas do dia a
dia. Veja [iteradores SPL](spl.iterators.md) para uma lista.

## Examples

**Exemplo #1 Utilização básica**

Este exemplo demonstra em qual ordem os métodos são chamados
quando estiver usando um [`foreach`](control-structures.foreach.md) em um iterador.

```
<?php
class myIterator implements Iterator {
    private $position = 0;
    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );

    public function __construct() {
        $this->position = 0;
    }

    public function rewind(): void {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    #[\ReturnTypeWillChange]
    public function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    #[\ReturnTypeWillChange]
    public function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function next(): void {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid(): bool {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}

$it = new myIterator;

foreach($it as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(18) "myIterator::rewind"
string(17) "myIterator::valid"
string(19) "myIterator::current"
string(15) "myIterator::key"
int(0)
string(12) "firstelement"

string(16) "myIterator::next"
string(17) "myIterator::valid"
string(19) "myIterator::current"
string(15) "myIterator::key"
int(1)
string(13) "secondelement"

string(16) "myIterator::next"
string(17) "myIterator::valid"
string(19) "myIterator::current"
string(15) "myIterator::key"
int(2)
string(11) "lastelement"

string(16) "myIterator::next"
string(17) "myIterator::valid"
```

## Veja também

Veja também a [iteração em objetos](language.oop5.iterations.md).

## Índice

- [Iterator::current](iterator.current.md) — Retorna o elemento atual
- [Iterator::key](iterator.key.md) — Retorna a chave do elemento atual
- [Iterator::next](iterator.next.md) — Move para o próximo elemento
- [Iterator::rewind](iterator.rewind.md) — Retrocede o Iterator para o primeiro elemento
- [Iterator::valid](iterator.valid.md) — Verifica se a posição atual é válida

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
