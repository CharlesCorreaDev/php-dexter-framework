# Verifica se a propriedade está definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.hasproperty.php

---

# ReflectionClass::hasProperty

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

ReflectionClass::hasProperty — Verifica se a propriedade está definida

### Descrição

public function **ReflectionClass::hasProperty**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Verifica se a propriedade especificada está definida.

### Parâmetros

`name`
:   Nome da propriedade que está sendo verificada.

### Valor Retornado

**`true`** se tiver a propriedade, caso contrário **`false`**

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::hasProperty()****

```
<?php
class Foo {
    public    $p1;
    protected $p2;
    private   $p3;

}

$obj = new ReflectionObject(new Foo());

var_dump($obj->hasProperty("p1"));
var_dump($obj->hasProperty("p2"));
var_dump($obj->hasProperty("p3"));
var_dump($obj->hasProperty("p4"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
bool(true)
bool(false)
```

### Veja também

- [ReflectionClass::hasConstant()](reflectionclass.hasconstant.md) - Verifica se a constante está definida
- [ReflectionClass::hasMethod()](reflectionclass.hasmethod.md) - Verifica se o método está definido

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
