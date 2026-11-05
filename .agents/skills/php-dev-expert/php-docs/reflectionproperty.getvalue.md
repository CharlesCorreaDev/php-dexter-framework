# Obtém o valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.getvalue.php

---

# ReflectionProperty::getValue

(PHP 5, PHP 7, PHP 8)

ReflectionProperty::getValue — Obtém o valor

### Descrição

public function **ReflectionProperty::getValue**([?](language.types.null.md)[object](language.types.object.md) `$object` = **`null`**): [mixed](language.types.mixed.md)

Obtém o valor da propriedade.

### Parâmetros

`object`
:   Se a propriedade não for estática, um objeto deve ser fornecido para buscar a
    propriedade. Se você deseja buscar a propriedade padrão sem
    fornecer um objeto use [ReflectionClass::getDefaultProperties()](reflectionclass.getdefaultproperties.md)
    em vez disso.

### Valor Retornado

O valor atual da propriedade.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Propriedades privadas e protegidas podem ser acessadas por **ReflectionProperty::getValue()** imediatamente. Anteriormente, elas precisavam ser acessíveis chamando [ReflectionProperty::setAccessible()](reflectionproperty.setaccessible.md); caso contrário uma [ReflectionException](class.reflectionexception.md) era lançada. |
| 8.0.0 | `object` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::getValue()****

```
<?php
class Foo {
    public static $staticProperty = 'foobar';

    public $property = 'barfoo';
    protected $privateProperty = 'foofoo';
}

$reflectionClass = new ReflectionClass('Foo');

var_dump($reflectionClass->getProperty('staticProperty')->getValue());
var_dump($reflectionClass->getProperty('property')->getValue(new Foo));

$reflectionProperty = $reflectionClass->getProperty('privateProperty');
$reflectionProperty->setAccessible(true); // necessário apenas antes do PHP 8.1.0
var_dump($reflectionProperty->getValue(new Foo));
?>
```

O exemplo acima produzirá:

```
string(6) "foobar"
string(6) "barfoo"
string(6) "foofoo"
```

### Veja também

- [ReflectionProperty::setValue()](reflectionproperty.setvalue.md) - Define valor da propriedade
- [ReflectionProperty::setAccessible()](reflectionproperty.setaccessible.md) - Define acessibilidade da propriedade
- [ReflectionClass::getDefaultProperties()](reflectionclass.getdefaultproperties.md) - Obtém propriedades padrão
- [ReflectionClass::getStaticPropertyValue()](reflectionclass.getstaticpropertyvalue.md) - Obtém o valor da propriedade estática

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
