# Obtém o nome da classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getname.php

---

# ReflectionClass::getName

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getName — Obtém o nome da classe

### Descrição

public function **ReflectionClass::getName**(): [string](language.types.string.md)

Obtém o nome da classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome da classe.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::getName()****

```
<?php
namespace A\B;

class Foo { }

$function = new \ReflectionClass('stdClass');

var_dump($function->inNamespace());
var_dump($function->getName());
var_dump($function->getNamespaceName());
var_dump($function->getShortName());

$function = new \ReflectionClass('A\\B\\Foo');

var_dump($function->inNamespace());
var_dump($function->getName());
var_dump($function->getNamespaceName());
var_dump($function->getShortName());
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

- [ReflectionClass::getNamespaceName()](reflectionclass.getnamespacename.md) - Obtém o nome do namespace

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
