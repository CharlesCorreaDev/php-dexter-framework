# Verifica se a classe é final

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isfinal.php

---

# ReflectionClass::isFinal

(PHP 5, PHP 7, PHP 8)

ReflectionClass::isFinal — Verifica se a classe é final

### Descrição

public function **ReflectionClass::isFinal**(): [bool](language.types.boolean.md)

Verifica se a classe é final.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a classe for final ou **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::isFinal()****

```
<?php
class       TestClass { }
final class TestFinalClass { }

$normalClass = new ReflectionClass('TestClass');
$finalClass  = new ReflectionClass('TestFinalClass');

var_dump($normalClass->isFinal());
var_dump($finalClass->isFinal());

?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [ReflectionClass::isAbstract()](reflectionclass.isabstract.md) - Verifica se a classe é abstrata
- [Palavra-chave final](language.oop5.final.md)

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
