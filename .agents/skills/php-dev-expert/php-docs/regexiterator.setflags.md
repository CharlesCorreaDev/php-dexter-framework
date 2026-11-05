# Define as opções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexiterator.setflags.php

---

# RegexIterator::setFlags

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RegexIterator::setFlags — Define as opções

### Descrição

public function **RegexIterator::setFlags**([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

Define as opções.

### Parâmetros

`flags`
:   As opções a serem definidas, um conjunto de bits de constantes de classe.

    As opções disponíveis estão listadas abaixo. Os significados reais
    dessas bandeiras são descritos no
    [constantes predefinidas](class.regexiterator.md#regexiterator.constants).

    **Opções de [RegexIterator](class.regexiterator.md)**

    | valor | constante |
    | --- | --- |
    | 1 | [RegexIterator::USE\_KEY](class.regexiterator.md#regexiterator.constants.use-key) |

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **RegexIterator::setFlags()****

Cria um novo RegexIterator que filtra todas as entradas cuja chave começa com '`test`'.

```
<?php
$test = array ('str1' => 'test 1', 'teststr2' => 'another test', 'str3' => 'test 123');

$arrayIterator = new ArrayIterator($test);
$regexIterator = new RegexIterator($arrayIterator, '/^test/');
$regexIterator->setFlags(RegexIterator::USE_KEY);

foreach ($regexIterator as $key => $value) {
    echo $key . ' => ' . $value . "\n";
}
?>
```

O exemplo acima produzirá:

```
teststr2 => another test
```

### Veja também

- [RegexIterator::getFlags()](regexiterator.getflags.md) - Obtém opções

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
