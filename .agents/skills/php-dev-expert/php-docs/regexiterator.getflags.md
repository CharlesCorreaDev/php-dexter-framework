# Obtém opções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexiterator.getflags.php

---

# RegexIterator::getFlags

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RegexIterator::getFlags — Obtém opções

### Descrição

public function **RegexIterator::getFlags**(): [int](language.types.integer.md)

Retorna as opções, veja [RegexIterator::setFlags()](regexiterator.setflags.md)
para obter uma lista de opções disponíveis.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna as opções definidas.

### Examples

**Exemplo #1 Exemplo de **RegexIterator::getFlags()****

```
<?php

$test = array ('str1' => 'test 1', 'teststr2' => 'another test', 'str3' => 'test 123');

$arrayIterator = new ArrayIterator($test);
$regexIterator = new RegexIterator($arrayIterator, '/^test/');
$regexIterator->setFlags(RegexIterator::USE_KEY);

if ($regexIterator->getFlags() & RegexIterator::USE_KEY) {
    echo 'Filtragem baseada nas chaves dos arrays.';
} else {
    echo 'Filtragem baseada nos valores dos arrays.';
}
?>
```

O exemplo acima produzirá:

```
Filtragem baseada nas chaves dos arrays.
```

### Veja também

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
