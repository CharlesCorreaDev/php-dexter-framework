# Retorna se um iterador pode ser obtido para a entrada atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveregexiterator.haschildren.php

---

# RecursiveRegexIterator::hasChildren

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RecursiveRegexIterator::hasChildren — Retorna se um iterador pode ser obtido para a entrada atual

### Descrição

public function **RecursiveRegexIterator::hasChildren**(): [bool](language.types.boolean.md)

Retorna se um iterador pode ser obtido para a entrada atual. Este iterador pode ser
obtido via [RecursiveRegexIterator::getChildren()](recursiveregexiterator.getchildren.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se um iterador pode ser obtido para a entrada atual, caso contrário, retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **RecursiveRegexIterator::hasChildren()****

```
<?php
$rArrayIterator = new RecursiveArrayIterator(array('test1', array('tet3', 'test4', 'test5')));
$rRegexIterator = new RecursiveRegexIterator($rArrayIterator, '/^test/',
    RecursiveRegexIterator::ALL_MATCHES);

foreach ($rRegexIterator as $value) {
    var_dump($rRegexIterator->hasChildren());
}
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [RecursiveRegexIterator::getChildren()](recursiveregexiterator.getchildren.md) - Retorna um iterador para a entrada atual

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
