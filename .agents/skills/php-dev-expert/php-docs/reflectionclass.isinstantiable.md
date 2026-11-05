# Verifica se a classe é instanciável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isinstantiable.php

---

# ReflectionClass::isInstantiable

(PHP 5, PHP 7, PHP 8)

ReflectionClass::isInstantiable — Verifica se a classe é instanciável

### Descrição

public function **ReflectionClass::isInstantiable**(): [bool](language.types.boolean.md)

Verifica se a classe é instanciável.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a classe for instanciável ou **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::isInstantiable()****

```
<?php
class C { }

interface iface {
    function f1();
}

class ifaceImpl implements iface {
    function f1() {}
}

abstract class abstractClass {
    function f1() { }
    abstract function f2();
}

class D extends abstractClass {
    function f2() { }
}

trait T {
    function f1() {}
}

class privateConstructor {
    private function __construct() { }
}

$classes = array(
    "C",
    "iface",
    "ifaceImpl",
    "abstractClass",
    "D",
    "T",
    "privateConstructor",
);

foreach($classes  as $class ) {
    $reflectionClass = new ReflectionClass($class);
    echo "$class é instânciável?  ";
    var_dump($reflectionClass->isInstantiable());
}

?>
```

O exemplo acima produzirá:

```
C é instânciável?  bool(true)
iface é instânciável?  bool(false)
ifaceImpl é instânciável?  bool(true)
abstractClass é instânciável?  bool(false)
D é instânciável?  bool(true)
T é instânciável?  bool(false)
privateConstructor é instânciável?  bool(false)
```

### Veja também

- [ReflectionClass::isInstance()](reflectionclass.isinstance.md) - Verifica a classe por instância

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
