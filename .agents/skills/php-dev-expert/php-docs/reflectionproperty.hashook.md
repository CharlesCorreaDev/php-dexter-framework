# Retorna se a propriedade tem um determinado gancho definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.hashook.php

---

# ReflectionProperty::hasHook

(PHP 8 >= 8.4.0)

ReflectionProperty::hasHook — Retorna se a propriedade tem um determinado gancho definido

### Descrição

public function **ReflectionProperty::hasHook**([PropertyHookType](enum.propertyhooktype.md) `$type`): [bool](language.types.boolean.md)

Retorna se a propriedade tem um determinado gancho definido.

### Parâmetros

`PropertyHookType`
:   O tipo de gancho a ser verificado.

### Valor Retornado

Retorna **`true`** se o hook estiver definido nesta propriedade, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::hasHook()****

```
<?php
class Example
{
    public string $name { get => "Nome aqui"; }
}

$rClass = new \ReflectionClass(Example::class);
$rProp = $rClass->getProperty('name');
var_dump($rProp->hasHook(PropertyHookType::Get));
var_dump($rProp->hasHook(PropertyHookType::Set));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### Veja também

- [ReflectionMethod](class.reflectionmethod.md)
- [PropertyHookType](enum.propertyhooktype.md)

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
