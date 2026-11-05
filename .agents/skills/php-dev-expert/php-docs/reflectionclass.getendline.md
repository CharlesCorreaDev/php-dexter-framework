# Obtém a linha final

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getendline.php

---

# ReflectionClass::getEndLine

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getEndLine — Obtém a linha final

### Descrição

public function **ReflectionClass::getEndLine**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o número da linha final de uma definição de classe definida pelo usuário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número da linha final da classe definida pelo usuário ou **`false`** se desconhecido.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::getEndLine()****

```
<?php
// Test Class
class TestClass { }

$rc = new ReflectionClass('TestClass');

echo $rc->getEndLine();
?>
```

O exemplo acima produzirá:

```
3
```

### Veja também

- [ReflectionClass::getStartLine()](reflectionclass.getstartline.md) - Obtém o número da linha inicial

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
