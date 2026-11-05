# Verifica se a propriedade é dinâmica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isdynamic.php

---

# ReflectionProperty::isDynamic

(PHP 8 >= 8.4.0)

ReflectionProperty::isDynamic — Verifica se a propriedade é dinâmica

### Descrição

public function **ReflectionProperty::isDynamic**(): [bool](language.types.boolean.md)

Verifica se a propriedade foi declarada no momento da execusção ou se foi
criada no momento da compilação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a propriedade foi declarada no momento da execusção, ou **`false`** se
foi criada no momento da compilação.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::isDynamic()****

```
<?php

#[\AllowDynamicProperties]
class Foo {
    public $bar;
}

$o = new Foo();
$o->bar = 42;
$o->baz = 42;

$ro = new ReflectionObject($o);
var_dump($ro->getProperty('bar')->isDynamic());
var_dump($ro->getProperty('baz')->isDynamic());
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

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
