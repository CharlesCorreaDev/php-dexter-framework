# Obtém comentários doc

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getdoccomment.php

---

# ReflectionClass::getDocComment

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getDocComment — Obtém comentários doc

### Descrição

public function **ReflectionClass::getDocComment**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém comentários doc de uma classe. Os comentários doc começam com `/**`, seguido de espaço em branco.
Se houver vários comentários de documentos acima da definição de classe,
será pego o mais próximo da classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O comentário doc se existir, caso contrário **`false`**.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::getDocComment()****

```
<?php
/**
 * A test class
 *
 * @param  foo bar
 * @return baz
 */
class TestClass { }

$rc = new ReflectionClass('TestClass');
var_dump($rc->getDocComment());
?>
```

O exemplo acima produzirá:

```
string(60) "/**
 * A test class
 *
 * @param  foo bar
 * @return baz
 */"
```

### Veja também

- [ReflectionClass::getName()](reflectionclass.getname.md) - Obtém o nome da classe

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
