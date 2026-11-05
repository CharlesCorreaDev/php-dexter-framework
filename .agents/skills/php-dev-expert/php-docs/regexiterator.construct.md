# Cria um novo RegexIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexiterator.construct.php

---

# RegexIterator::\_\_construct

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

RegexIterator::\_\_construct — Cria um novo RegexIterator

### Descrição

public function **RegexIterator::\_\_construct**(  
    [Iterator](class.iterator.md) `$iterator`,  
    [string](language.types.string.md) `$pattern`,  
    [int](language.types.integer.md) `$mode` = **`RegexIterator::MATCH`**,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$pregFlags` = 0  
)

Cria um novo [RegexIterator](class.regexiterator.md) que filtra um
[Iterator](class.iterator.md) usando uma expressão regular.

### Parâmetros

`iterator`
:   O iterador ao qual aplicar este filtro de regex.

`pattern`
:   A expressão regular para fazer a correspondência.

`mode`
:   Modo de operação, consulte [RegexIterator::setMode()](regexiterator.setmode.md) para obter uma lista
    de modos.

`flags`
:   Opções especiais, consulte [RegexIterator::setFlags()](regexiterator.setflags.md) para obter uma lista
    de opções disponíveis.

`pregFlags`
:   As opções da expressão regular. Essas opções dependem do parâmetro de modo de operação:

    **[RegexIterator](class.regexiterator.md) preg\_flags**

    | modo de operação | opções disponíveis |
    | --- | --- |
    | RegexIterator::ALL\_MATCHES | Veja [preg\_match\_all()](function.preg-match-all.md). |
    | RegexIterator::GET\_MATCH | Veja [preg\_match()](function.preg-match.md). |
    | RegexIterator::MATCH | Veja [preg\_match()](function.preg-match.md). |
    | RegexIterator::REPLACE | nenhum. |
    | RegexIterator::SPLIT | Veja [preg\_split()](function.preg-split.md). |

### Erros/Exceções

Lança uma [InvalidArgumentException](class.invalidargumentexception.md) se o argumento `pattern` for inválido.

### Examples

**Exemplo #1 Exemplo de **RegexIterator::\_\_construct()****

Cria um novo RegexIterator que filtra todas as strings que começam com 'test'.

```
<?php
$arrayIterator = new ArrayIterator(array('test 1', 'another test', 'test 123'));
$regexIterator = new RegexIterator($arrayIterator, '/^test/');

foreach ($regexIterator as $value) {
    echo $value . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
test 1
test 123
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
