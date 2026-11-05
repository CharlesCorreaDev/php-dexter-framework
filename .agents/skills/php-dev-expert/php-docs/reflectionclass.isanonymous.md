# Verifica se uma classe é anônima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isanonymous.php

---

# ReflectionClass::isAnonymous

(PHP 7, PHP 8)

ReflectionClass::isAnonymous — Verifica se uma classe é anônima

### Descrição

public function **ReflectionClass::isAnonymous**(): [bool](language.types.boolean.md)

Verifica se uma classe é uma classe anônima.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a classe for anônima ou **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::isAnonymous()****

```
<?php
class TestClass {}
$anonClass = new class {};

$normalClass = new ReflectionClass('TestClass');
$anonClass  = new ReflectionClass($anonClass);

var_dump($normalClass->isAnonymous());
var_dump($anonClass->isAnonymous());

?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [ReflectionClass::isFinal()](reflectionclass.isfinal.md) - Verifica se a classe é final

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
