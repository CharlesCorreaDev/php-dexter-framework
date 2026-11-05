# Obtém o nome do namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getnamespacename.php

---

# ReflectionClass::getNamespaceName

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ReflectionClass::getNamespaceName — Obtém o nome do namespace

### Descrição

public function **ReflectionClass::getNamespaceName**(): [string](language.types.string.md)

Obtém o nome do namespace.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome do namespace.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::getNamespaceName()****

```
<?php
namespace A\B;

class Foo { }

$class = new \ReflectionClass('stdClass');

var_dump($class->inNamespace());
var_dump($class->getName());
var_dump($class->getNamespaceName());
var_dump($class->getShortName());

$class = new \ReflectionClass('A\\B\\Foo');

var_dump($class->inNamespace());
var_dump($class->getName());
var_dump($class->getNamespaceName());
var_dump($class->getShortName());
?>
```

O exemplo acima produzirá:

```
bool(false)
string(8) "stdClass"
string(0) ""
string(8) "stdClass"

bool(true)
string(7) "A\B\Foo"
string(3) "A\B"
string(3) "Foo"
```

### Veja também

- [ReflectionClass::getParentClass()](reflectionclass.getparentclass.md) - Obtém a classe pai
- [namespaces](language.namespaces.md)

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
