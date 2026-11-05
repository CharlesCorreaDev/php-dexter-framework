# Verifica se a constante está definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.hasconstant.php

---

# ReflectionClass::hasConstant

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

ReflectionClass::hasConstant — Verifica se a constante está definida

### Descrição

public function **ReflectionClass::hasConstant**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Verifica se a classe possui uma constante específica definida ou não.

### Parâmetros

`name`
:   O nome da constante que está sendo verificada.

### Valor Retornado

**`true`** se a constante estiver definida, caso contrário, **`false`**.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::hasConstant()****

```
<?php
class Foo {
    const c1 = 1;
}

$class = new ReflectionClass("Foo");

var_dump($class->hasConstant("c1"));
var_dump($class->hasConstant("c2"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(false)
```

### Veja também

- [ReflectionClass::hasMethod()](reflectionclass.hasmethod.md) - Verifica se o método está definido
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
