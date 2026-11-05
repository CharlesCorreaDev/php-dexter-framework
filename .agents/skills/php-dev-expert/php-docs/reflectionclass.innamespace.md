# Verifica se está no namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.innamespace.php

---

# ReflectionClass::inNamespace

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ReflectionClass::inNamespace — Verifica se está no namespace

### Descrição

public function **ReflectionClass::inNamespace**(): [bool](language.types.boolean.md)

Verifica se esta classe está definida em um namespace.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a classe estiver no namespace especificado ou **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::inNamespace()****

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
- [Namespaces do PHP](language.namespaces.md)

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
