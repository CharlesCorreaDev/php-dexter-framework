# Retorna um iterador para a entrada atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveregexiterator.getchildren.php

---

# RecursiveRegexIterator::getChildren

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RecursiveRegexIterator::getChildren — Retorna um iterador para a entrada atual

### Descrição

public function **RecursiveRegexIterator::getChildren**(): [RecursiveRegexIterator](class.recursiveregexiterator.md)

Retorna um iterador para a entrada atual do iterador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um iterador para a entrada atual, se puder ser iterado pelo iterador interno.

### Erros/Exceções

Uma [InvalidArgumentException](class.invalidargumentexception.md)
será lançada se a entrada atual não contiver um valor que possa ser iterado pelo
iterador interno.

### Examples

**Exemplo #1 Exemplo de **RecursiveRegexIterator::getChildren()****

```
<?php
$rArrayIterator = new RecursiveArrayIterator(array('test1', array('tet3', 'test4', 'test5')));
$rRegexIterator = new RecursiveRegexIterator($rArrayIterator, '/^test/',
    RecursiveRegexIterator::ALL_MATCHES);

foreach ($rRegexIterator as $key1 => $value1) {

    if ($rRegexIterator->hasChildren()) {

        // imprime todos os filhos
        echo "Children: ";
        foreach ($rRegexIterator->getChildren() as $key => $value) {
            echo $value . " ";
        }
        echo "\n";
    } else {
        echo "No children\n";
    }

}
?>
```

O exemplo acima produzirá:

```
No children
Children: test4 test5
```

### Veja também

- [RecursiveRegexIterator::hasChildren()](recursiveregexiterator.haschildren.md) - Retorna se um iterador pode ser obtido para a entrada atual

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
