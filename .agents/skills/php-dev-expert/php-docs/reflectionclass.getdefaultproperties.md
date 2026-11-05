# Obtém propriedades padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getdefaultproperties.php

---

# ReflectionClass::getDefaultProperties

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getDefaultProperties — Obtém propriedades padrão

### Descrição

public function **ReflectionClass::getDefaultProperties**(): [array](language.types.array.md)

Obtém propriedades padrão de uma classe (incluindo propriedades herdadas).

> **Nota**:
>
> Este método só funciona para propriedades estáticas quando usado em classes internas.
> O valor padrão de uma propriedade de classe estática não pode ser rastreado ao usar
> este método em classes definidas pelo usuário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de propriedades padrão, com a chave sendo o nome da
propriedade e o valor sendo o valor padrão da propriedade ou **`null`**
se a propriedade não tiver um valor padrão. A função não distingue
entre propriedades estáticas e não estáticas e não aceita modificadores de visibilidade
em conta.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::getDefaultProperties()****

```
<?php
class Bar {
    protected $inheritedProperty = 'inheritedDefault';
}

class Foo extends Bar {
    public $property = 'propertyDefault';
    private $privateProperty = 'privatePropertyDefault';
    public static $staticProperty = 'staticProperty';
    public $defaultlessProperty;
}

$reflectionClass = new ReflectionClass('Foo');
var_dump($reflectionClass->getDefaultProperties());
?>
```

O exemplo acima produzirá:

```
array(5) {
  ["staticProperty"]=>
  string(14) "staticProperty"
  ["property"]=>
  string(15) "propertyDefault"
  ["privateProperty"]=>
  string(22) "privatePropertyDefault"
  ["defaultlessProperty"]=>
  NULL
  ["inheritedProperty"]=>
  string(16) "inheritedDefault"
}
```

### Veja também

- [ReflectionClass::getProperties()](reflectionclass.getproperties.md) - Obtém propriedades
- [ReflectionClass::getStaticProperties()](reflectionclass.getstaticproperties.md) - Obtém propriedades estáticas
- [ReflectionClass::getProperty()](reflectionclass.getproperty.md) - Obtém um ReflectionProperty para a propriedade de uma classe

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
