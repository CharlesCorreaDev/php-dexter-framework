# Cria um novo RecursiveRegexIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveregexiterator.construct.php

---

# RecursiveRegexIterator::\_\_construct

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RecursiveRegexIterator::\_\_construct — Cria um novo RecursiveRegexIterator

### Descrição

public function **RecursiveRegexIterator::\_\_construct**(  
    [RecursiveIterator](class.recursiveiterator.md) `$iterator`,  
    [string](language.types.string.md) `$pattern`,  
    [int](language.types.integer.md) `$mode` = **`RecursiveRegexIterator::MATCH`**,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$pregFlags` = 0  
)

Cria um novo iterador de expressão regular.

### Parâmetros

`iterator`
:   O iterador recursivo ao qual este filtro de regex será aplicado.

`pattern`
:   A expressão regular a ser correspondida.

`mode`
:   Modo de operação, consulte [RegexIterator::setMode()](regexiterator.setmode.md) para uma lista
    de modos.

`flags`
:   Opções especiais, consulte [RegexIterator::setFlags()](regexiterator.setflags.md) para uma lista
    de opções disponíveis.

`pregFlags`
:   As opções de expressão regular. Essas flags dependem do parâmetro de modo de operação:

    **[RegexIterator](class.regexiterator.md) preg\_flags**

    | modo de operação | opções disponíveis |
    | --- | --- |
    | RecursiveRegexIterator::ALL\_MATCHES | Veja [preg\_match\_all()](function.preg-match-all.md). |
    | RecursiveRegexIterator::GET\_MATCH | Veja [preg\_match()](function.preg-match.md). |
    | RecursiveRegexIterator::MATCH | Veja [preg\_match()](function.preg-match.md). |
    | RecursiveRegexIterator::REPLACE | nenhum. |
    | RecursiveRegexIterator::SPLIT | Veja [preg\_split()](function.preg-split.md). |

### Examples

**Exemplo #1 Exemplo de **RecursiveRegexIterator::\_\_construct()****

Cria um novo RegexIterator que filtra todas as strings que começam com 'test'.

```
<?php
$rArrayIterator = new RecursiveArrayIterator(array('test1', array('tet3', 'test4', 'test5')));
$rRegexIterator = new RecursiveRegexIterator($rArrayIterator, '/^test/',
    RecursiveRegexIterator::ALL_MATCHES);

foreach ($rRegexIterator as $key1 => $value1) {

    if ($rRegexIterator->hasChildren()) {

        // print all children
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

O exemplo acima produzirá
algo semelhante a:

```
No children
Children: test4 test5
```

### Veja também

- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [preg\_match\_all()](function.preg-match-all.md) - Realiza uma correspondência global de expressão regular
- [preg\_replace()](function.preg-replace.md) - Realiza uma pesquisa por uma expressão regular e substitui
- [preg\_split()](function.preg-split.md) - Divide uma string com base em expressão regular

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
