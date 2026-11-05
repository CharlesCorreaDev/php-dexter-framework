# Retorna um objeto de reflexão para um gancho especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.gethook.php

---

# ReflectionProperty::getHook

(PHP 8 >= 8.4.0)

ReflectionProperty::getHook — Retorna um objeto de reflexão para um gancho especificado

### Descrição

public function **ReflectionProperty::getHook**([PropertyHookType](enum.propertyhooktype.md) `$type`): [?](language.types.null.md)[ReflectionMethod](class.reflectionmethod.md)

Obtém o reflexo do gancho da propriedade, se houver.

### Parâmetros

`PropertyHookType`
:   O tipo de gancho a ser solicitado.

### Valor Retornado

Se o hook solicitado for definido, uma instância de [ReflectionMethod](class.reflectionmethod.md) será retornada.
Caso contrário, o método retornará **`null`**.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::getHook()****

```
<?php
class Example
{
    public string $name { get => "Nome aqui"; }
}

$rClass = new \ReflectionClass(Example::class);
$rProp = $rClass->getProperty('name');
var_dump($rProp->getHook(PropertyHookType::Get));
var_dump($rProp->getHook(PropertyHookType::Set));
?>
```

O exemplo acima produzirá:

```
object(ReflectionMethod)#4 (2) {
  ["name"]=>
  string(10) "$name::get"
  ["class"]=>
  string(7) "Example"
}
NULL
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
