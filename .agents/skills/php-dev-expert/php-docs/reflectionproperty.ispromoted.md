# Verifica se a propriedade é promovida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.ispromoted.php

---

# ReflectionProperty::isPromoted

(PHP 8)

ReflectionProperty::isPromoted — Verifica se a propriedade é promovida

### Descrição

public function **ReflectionProperty::isPromoted**(): [bool](language.types.boolean.md)

Verifica se a propriedade é [promovida](language.oop5.decon.md#language.oop5.decon.constructor.promotion)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a propriedade for promovida, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::isPromoted()****

```
<?php
class Foo {
    public $baz;

    public function __construct(public $bar) {}
}

$o = new Foo(42);
$o->baz = 42;

$ro = new ReflectionObject($o);
var_dump($ro->getProperty('bar')->isPromoted());
var_dump($ro->getProperty('baz')->isPromoted());
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### Veja também

- [ReflectionProperty::isDefault()](reflectionproperty.isdefault.md) - Verifica se a propriedade é uma propriedade padrão
- [ReflectionProperty::isInitialized()](reflectionproperty.isinitialized.md) - Verifica se uma propriedade foi inicializada
- [ReflectionProperty::getValue()](reflectionproperty.getvalue.md) - Obtém o valor

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
