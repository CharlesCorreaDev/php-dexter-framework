# Verifica se a propriedade é uma propriedade padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isdefault.php

---

# ReflectionProperty::isDefault

(PHP 5, PHP 7, PHP 8)

ReflectionProperty::isDefault — Verifica se a propriedade é uma propriedade padrão

### Descrição

public function **ReflectionProperty::isDefault**(): [bool](language.types.boolean.md)

Verifica se a propriedade foi declarada no momento da compilação ou se a
propriedade foi declarada dinamicamente no momento da execução.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a propriedade foi declarada no momento da compilação, ou **`false`** se
ela foi criada no momento da execução.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::isDefault()****

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
var_dump($ro->getProperty('bar')->isDefault());
var_dump($ro->getProperty('baz')->isDefault());
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
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
