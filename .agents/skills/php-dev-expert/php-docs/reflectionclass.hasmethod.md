# Verifica se o método está definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.hasmethod.php

---

# ReflectionClass::hasMethod

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

ReflectionClass::hasMethod — Verifica se o método está definido

### Descrição

public function **ReflectionClass::hasMethod**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Verifica se um método específico está definido em uma classe.

### Parâmetros

`name`
:   Nome do método que está sendo verificado.

### Valor Retornado

**`true`** se tiver o método, caso contrário **`false`**

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::hasMethod()****

```
<?php
Class C {
    public function publicFoo() {
        return true;
    }

    protected function protectedFoo() {
        return true;
    }

    private function privateFoo() {
        return true;
    }

    static function staticFoo() {
        return true;
    }
}

$rc = new ReflectionClass("C");

var_dump($rc->hasMethod('publicFoo'));

var_dump($rc->hasMethod('protectedFoo'));

var_dump($rc->hasMethod('privateFoo'));

var_dump($rc->hasMethod('staticFoo'));

// C não deveria ter o método 'bar'
var_dump($rc->hasMethod('bar'));

// Nomes de métodos são insensíveis a maiúsculas/minúsculas
var_dump($rc->hasMethod('PUBLICfOO'));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(true)
bool(true)
bool(false)
bool(true)
```

### Veja também

- [ReflectionClass::hasConstant()](reflectionclass.hasconstant.md) - Verifica se a constante está definida
- [ReflectionClass::hasProperty()](reflectionclass.hasproperty.md) - Verifica se a propriedade está definida

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
