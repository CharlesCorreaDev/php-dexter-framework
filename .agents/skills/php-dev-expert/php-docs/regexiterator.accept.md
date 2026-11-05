# Obtém o status de aceitação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexiterator.accept.php

---

# RegexIterator::accept

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RegexIterator::accept — Obtém o status de aceitação

### Descrição

public function **RegexIterator::accept**(): [bool](language.types.boolean.md)

Faz corresponder `(string)` **RegexIterator::current()**
(ou **RegexIterator::key()** se a
opção  [RegexIterator::USE\_KEY](class.regexiterator.md#regexiterator.constants.use-key) estiver definida)
contra a expressão regular.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se houver correspondência, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **RegexIterator::accept()****

Este exemplo mostra que apenas os itens que correspondem à expressão regular são aceitos.

```
<?php
$names = new ArrayIterator(array('Ann', 'Bob', 'Charlie', 'David'));
$filter = new RegexIterator($names, '/^[B-D]/');
foreach ($filter as $name) {
    echo $name . PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
Bob
Charlie
David
```

### Veja também

- [Constantes RegexIterator](class.regexiterator.md#regexiterator.constants)
- [RegexIterator::setFlags()](regexiterator.setflags.md) - Define as opções

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
