# Verifica se a propriedade tem um valor padrão declarado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.hasdefaultvalue.php

---

# ReflectionProperty::hasDefaultValue

(PHP 8)

ReflectionProperty::hasDefaultValue — Verifica se a propriedade tem um valor padrão declarado

### Descrição

public function **ReflectionProperty::hasDefaultValue**(): [bool](language.types.boolean.md)

Verifica se a propriedade foi declarada com um valor padrão, incluindo um valor implícito
**`null`**. Retorna apenas **`false`** para propriedades digitadas sem valor padrão (ou
propriedades dinâmicas).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Se a propriedade tiver algum valor padrão (incluindo **`null`**) **`true`** é retornado;
Se a propriedade for digitada sem um valor padrão declarado ou for uma propriedade dinâmica, **`false`** é retornado.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::hasDefaultValue()****

```
<?php
class Foo {
    public $bar;
    public ?int $baz;
    public ?int $foo = null;
    public int $boing;

    public function __construct()
    {
        $this->ping = '';
    }
}

$ro = new ReflectionObject(new Foo());
var_dump($ro->getProperty('bar')->hasDefaultValue());
var_dump($ro->getProperty('baz')->hasDefaultValue());
var_dump($ro->getProperty('foo')->hasDefaultValue());
var_dump($ro->getProperty('boing')->hasDefaultValue());
var_dump($ro->getProperty('ping')->hasDefaultValue()); // Propriedade dinâmica
var_dump($ro->getProperty('pong')->hasDefaultValue()); // Propriedade não definida
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(true)
bool(false)
bool(false)

Fatal error: Uncaught ReflectionException: Property Foo::$pong does not exist in example.php
```

### Veja também

- [ReflectionProperty::getDefaultValue()](reflectionproperty.getdefaultvalue.md) - Retorna o valor padrão declarado para uma propriedade

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
