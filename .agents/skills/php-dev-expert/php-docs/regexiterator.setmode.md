# Define o modo de operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexiterator.setmode.php

---

# RegexIterator::setMode

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RegexIterator::setMode — Define o modo de operação

### Descrição

public function **RegexIterator::setMode**([int](language.types.integer.md) `$mode`): [void](language.types.void.md)

Define o modo de operação.

### Parâmetros

`mode`
:   O modo de operação.

    Os modos disponíveis estão listados abaixo. Os significados reais
    desses modos são descritos no
    [constantes predefinidas](class.regexiterator.md#regexiterator.constants).

    **Modos de [RegexIterator](class.regexiterator.md)**

    | valor | constante |
    | --- | --- |
    | 0 | [RegexIterator::MATCH](class.regexiterator.md#regexiterator.constants.match) |
    | 1 | [RegexIterator::GET\_MATCH](class.regexiterator.md#regexiterator.constants.get-match) |
    | 2 | [RegexIterator::ALL\_MATCHES](class.regexiterator.md#regexiterator.constants.all-matches) |
    | 3 | [RegexIterator::SPLIT](class.regexiterator.md#regexiterator.constants.split) |
    | 4 | [RegexIterator::REPLACE](class.regexiterator.md#regexiterator.constants.replace) |

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **RegexIterator::setMode()****

```
<?php
$test = array ('str1' => 'test 1', 'test str2' => 'another test', 'str3' => 'test 123');

$arrayIterator = new ArrayIterator($test);
// Filtra tudo que comece com 'test ' seguido de um ou mais números.
$regexIterator = new RegexIterator($arrayIterator, '/^test (\d+)/');
// Modo de operação: Subtitui o valor atual com a correspondência
$regexIterator->setMode(RegexIterator::GET_MATCH);

foreach ($regexIterator as $key => $value) {
    // imprime os números correspondidos
    echo $key . ' => ' . $value[1] . PHP_EOL;
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
str1 => 1
str3 => 123
```

### Veja também

- [RegexIterator::getMode()](regexiterator.getmode.md) - Retorna o modo de operação

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
