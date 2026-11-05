# Cria um RecursiveFilterIterator a partir de um RecursiveIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivefilteriterator.construct.php

---

# RecursiveFilterIterator::\_\_construct

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveFilterIterator::\_\_construct — Cria um RecursiveFilterIterator a partir de um RecursiveIterator

### Descrição

public function **RecursiveFilterIterator::\_\_construct**([RecursiveIterator](class.recursiveiterator.md) `$iterator`)

Cria um [RecursiveFilterIterator](class.recursivefilteriterator.md) a partir de um [RecursiveIterator](class.recursiveiterator.md).

### Parâmetros

`iterator`
:   O [RecursiveIterator](class.recursiveiterator.md) a ser filtrado.

### Examples

**Exemplo #1 Exemplo básico de **RecursiveFilterIterator()****

```
<?php
class TestsOnlyFilter extends RecursiveFilterIterator {
    public function accept() {
        // Aceita o item atual se pudermos percorrer ele
        // ou é um valor começando com "test"
        return $this->hasChildren() || (strpos($this->current(), "test") !== FALSE);
    }
}

$array    = array("test1", array("taste2", "test3", "test4"), "test5");
$iterator = new RecursiveArrayIterator($array);
$filter   = new TestsOnlyFilter($iterator);

foreach(new RecursiveIteratorIterator($filter) as $key => $value)
{
    echo $value . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
test1
test3
test4
test5
```

**Exemplo #2 Exemplo de **RecursiveFilterIterator()****

```
<?php
class StartsWithFilter extends RecursiveFilterIterator {

    protected $word;

    public function __construct(RecursiveIterator $rit, $word) {
        $this->word = $word;
        parent::__construct($rit);
    }

    public function accept() {
        return $this->hasChildren() OR strpos($this->current(), $this->word) === 0;
    }

    public function getChildren() {
        return new self($this->getInnerIterator()->getChildren(), $this->word);
    }
}

$array    = array("test1", array("taste2", "test3", "test4"), "test5");
$iterator = new RecursiveArrayIterator($array);
$filter   = new StartsWithFilter($iterator, "test");

foreach(new RecursiveIteratorIterator($filter) as $key => $value)
{
    echo $value . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
test1
test3
test4
test5
```

### Veja também

- [RecursiveFilterIterator::getChildren()](recursivefilteriterator.getchildren.md) - Retorna os filhos do iterador interno contidos em um RecursiveFilterIterator
- [RecursiveFilterIterator::hasChildren()](recursivefilteriterator.haschildren.md) - Verifica se o elemento atual do iterador interno tem filhos
- [FilterIterator::accept()](filteriterator.accept.md) - Verifica se o elemento atual do iterador é aceitável

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
