# Retorna as opções da expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexiterator.getpregflags.php

---

# RegexIterator::getPregFlags

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RegexIterator::getPregFlags — Retorna as opções da expressão regular

### Descrição

public function **RegexIterator::getPregFlags**(): [int](language.types.integer.md)

Retorna as opções da expressão regular, consulte [RegexIterator::\_\_construct()](regexiterator.construct.md)
para a lista de opções.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma máscara de bits das opções da expressão regular.

### Examples

**Exemplo #1 Exemplo de **RegexIterator::getPregFlags()****

```
<?php

$test = array ('str1' => 'test 1', 'teststr2' => 'another test', 'str3' => 'test 123');

$arrayIterator = new ArrayIterator($test);
$regexIterator = new RegexIterator($arrayIterator, '/\s/', RegexIterator::SPLIT);
$regexIterator->setPregFlags(PREG_SPLIT_NO_EMPTY | PREG_SPLIT_OFFSET_CAPTURE);

if ($regexIterator->getPregFlags() & PREG_SPLIT_NO_EMPTY) {
    echo 'Ignoring empty pieces';
} else {
    echo 'Not ignoring empty pieces';
}

?>
```

O exemplo acima produzirá:

```
Ignoring empty pieces
```

### Veja também

- [RegexIterator::setPregFlags()](regexiterator.setpregflags.md) - Define as opções da expressão regular

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
