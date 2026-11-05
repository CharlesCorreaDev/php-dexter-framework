# Retorna um array de todos os ganchos nesta propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.gethooks.php

---

# ReflectionProperty::getHooks

(PHP 8 >= 8.4.0)

ReflectionProperty::getHooks — Retorna um array de todos os ganchos nesta propriedade

### Descrição

public function **ReflectionProperty::getHooks**(): [array](language.types.array.md)

Retorna uma lista de todos os ganchos nesta propriedade.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de objetos [ReflectionMethod](class.reflectionmethod.md) indexados pelo gancho a que se destinam.
Por exemplo, uma propriedade com ganchos `get` e `set` retornará
um array de 2 elementos com chaves de string `get` e `set`,
cada uma das quais é um objeto [ReflectionMethod](class.reflectionmethod.md).
A ordem em que são retornados é explicitamente indefinida.
Se nenhum gancho for definido, um array vazio será retornado.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::getHooks()****

```
<?php
class Example
{
    public string $name { get => "Nome aqui"; }

    public int $count;
}

$rClass = new \ReflectionClass(Example::class);

$rProp = $rClass->getProperty('name');
var_dump($rProp->getHooks());

$rProp = $rClass->getProperty('count');
var_dump($rProp->getHooks());
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["get"]=>
  object(ReflectionMethod)#3 (2) {
    ["name"]=>
    string(10) "$name::get"
    ["class"]=>
    string(7) "Example"
  }
}
array(0) {
}
```

### Veja também

- [ReflectionMethod](class.reflectionmethod.md)
- [ReflectionProperty::hasHooks()](reflectionproperty.hashooks.md) - Retorna se a propriedade tem algum gancho definido

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
