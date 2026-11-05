# Retorna o modo de operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexiterator.getmode.php

---

# RegexIterator::getMode

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RegexIterator::getMode — Retorna o modo de operação

### Descrição

public function **RegexIterator::getMode**(): [int](language.types.integer.md)

Retorna o modo de operação, consulte [RegexIterator::setMode()](regexiterator.setmode.md)
para a lista de modos de operação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o modo de operação.

### Examples

**Exemplo #1 Exemplo de **RegexIterator::getMode()****

```
<?php

$test = array ('str1' => 'test 1', 'teststr2' => 'another test', 'str3' => 'test 123');

$arrayIterator = new ArrayIterator($test);
$regexIterator = new RegexIterator($arrayIterator, '/^[a-z]+/', RegexIterator::GET_MATCH);

$mode = $regexIterator->getMode();
if ($mode & RegexIterator::GET_MATCH) {
    echo 'Obtendo a correspondência para cada item.';
} elseif ($mode & RegexIterator::ALL_MATCHES) {
    echo 'Obtendo todas as correspondências para cada item.';
} elseif ($mode & RegexIterator::MATCH) {
    echo 'Obtendo cada item se ele corresponder.';
} elseif ($mode & RegexIterator::SPLIT) {
    echo 'Obtendo partes separadas de cada um.';
}
?>
```

O exemplo acima produzirá:

```
Obtendo a correspondência para cada item.
```

### Veja também

- [RegexIterator::setMode()](regexiterator.setmode.md) - Define o modo de operação

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
