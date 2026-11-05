# Retorna um iterador para a entrada atual se ela for um array ou um object

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivearrayiterator.getchildren.php

---

# RecursiveArrayIterator::getChildren

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveArrayIterator::getChildren — Retorna um iterador para a entrada atual se ela for um [array](language.types.array.md) ou um [object](language.types.object.md)

### Descrição

public function **RecursiveArrayIterator::getChildren**(): [?](language.types.null.md)[RecursiveArrayIterator](class.recursivearrayiterator.md)

Retorna um iterador para a entrada atual do iterador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um iterador para a entrada atual, se ela for um [array](language.types.array.md) ou um [object](language.types.object.md); ou **`null`** em caso de falha.

### Erros/Exceções

Uma [InvalidArgumentException](class.invalidargumentexception.md)
será lançada se a entrada atual não contiver um [array](language.types.array.md) ou um [object](language.types.object.md).

### Examples

**Exemplo #1 Exemplo de **RecursiveArrayIterator::getChildren()****

```
<?php
$fruits = array("a" => "limão", "b" => "laranja", array("a" => "maçã", "p" => "pêra"));

$iterator = new RecursiveArrayIterator($fruits);

while ($iterator->valid()) {

    if ($iterator->hasChildren()) {
        // imprime todos os filhos
        foreach ($iterator->getChildren() as $key => $value) {
            echo $key . ' : ' . $value . "\n";
        }
    } else {
        echo "Sem filhos.\n";
    }

    $iterator->next();
}
?>
```

O exemplo acima produzirá:

```
Sem filhos.
Sem filhos.
a : maçã
p : pêra
```

### Veja também

- [RecursiveArrayIterator::hasChildren()](recursivearrayiterator.haschildren.md) - Retorna se a entrada atual é um array ou um objeto

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
