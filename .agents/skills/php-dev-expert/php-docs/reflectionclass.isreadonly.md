# Verifica se a classe é somente leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isreadonly.php

---

# ReflectionClass::isReadOnly

(PHP 8 >= 8.2.0)

ReflectionClass::isReadOnly — Verifica se a classe é somente leitura

### Descrição

public function **ReflectionClass::isReadOnly**(): [bool](language.types.boolean.md)

Verifica se uma classe é [somente leitura](language.oop5.basic.md#language.oop5.basic.class.readonly).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se uma classe for somente leitura, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::isReadOnly()****

```
<?php
class TestClass { }
readonly class TestReadOnlyClass { }

$normalClass = new ReflectionClass('TestClass');
$readonlyClass = new ReflectionClass('TestReadOnlyClass');

var_dump($normalClass->isReadOnly());
var_dump($readonlyClass->isReadOnly());

?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [ReflectionClass::isAbstract()](reflectionclass.isabstract.md) - Verifica se a classe é abstrata
- [Classes somente leitura](language.oop5.basic.md#language.oop5.basic.class.readonly)

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
