# Define as opções da expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexiterator.setpregflags.php

---

# RegexIterator::setPregFlags

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RegexIterator::setPregFlags — Define as opções da expressão regular

### Descrição

public function **RegexIterator::setPregFlags**([int](language.types.integer.md) `$pregFlags`): [void](language.types.void.md)

Define as opções da expressão regular.

### Parâmetros

`pregFlags`
:   As opções da expressão regular. Consulte [RegexIterator::\_\_construct()](regexiterator.construct.md)
    para uma visão geral das opções disponíveis.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **RegexIterator::setPregFlags()****

Cria um novo RegexIterator que filtra todas as entradas em que a chave do array começa com 'test'.

```
<?php
$test = array ('test 1', 'another test', 'test 123');

$arrayIterator = new ArrayIterator($test);
$regexIterator = new RegexIterator($arrayIterator, '/^test/', RegexIterator::GET_MATCH);

$regexIterator->setPregFlags(PREG_OFFSET_CAPTURE);

foreach ($regexIterator as $key => $value) {
    var_dump($value);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [0]=>
  array(2) {
    [0]=>
    string(4) "test"
    [1]=>
    int(0)
  }
}
array(1) {
  [0]=>
  array(2) {
    [0]=>
    string(4) "test"
    [1]=>
    int(0)
  }
}
```

### Veja também

- [RegexIterator::getPregFlags()](regexiterator.getpregflags.md) - Retorna as opções da expressão regular

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
