# Verifica se a classe é abstrata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isabstract.php

---

# ReflectionClass::isAbstract

(PHP 5, PHP 7, PHP 8)

ReflectionClass::isAbstract — Verifica se a classe é abstrata

### Descrição

public function **ReflectionClass::isAbstract**(): [bool](language.types.boolean.md)

Verifica se a classe é abstrata.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a classe for abstrata ou **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::isAbstract()****

```
<?php
class          TestClass { }
abstract class TestAbstractClass { }

$testClass     = new ReflectionClass('TestClass');
$abstractClass = new ReflectionClass('TestAbstractClass');

var_dump($testClass->isAbstract());
var_dump($abstractClass->isAbstract());
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [ReflectionClass::isInterface()](reflectionclass.isinterface.md) - Verifica se a classe é uma interface
- [Abstração de Classe](language.oop5.abstract.md)

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
