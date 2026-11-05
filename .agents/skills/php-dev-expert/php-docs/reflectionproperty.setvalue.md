# Define valor da propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.setvalue.php

---

# ReflectionProperty::setValue

(PHP 5, PHP 7, PHP 8)

ReflectionProperty::setValue — Define valor da propriedade

### Descrição

public function **ReflectionProperty::setValue**([?](language.types.null.md)[object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function **ReflectionProperty::setValue**([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define (altera) o valor da propriedade.

> **Nota**:
>
> Para definir valores de propriedades estáticas, use `ReflectionProperty::setValue(null, $value)`.

### Parâmetros

`object`
:   Para propriedades estáticas, informe **`null`**.
    Para propriedades não estáticas, informe o objeto.

`value`
:   O novo valor.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar este método com um único argumento está descontinuado, use `ReflectionProperty::setValue(null, $value)` para propriedades estáticas. |
| 8.1.0 | Propriedades privadas e protegidas podem ser acessadas por **ReflectionProperty::setValue()** imediatamente. Anteriormente, eles precisavam ser acessíveis chamando [ReflectionProperty::setAccessible()](reflectionproperty.setaccessible.md); caso contrário, uma [ReflectionException](class.reflectionexception.md) era lançada. |

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::setValue()****

```
<?php
class Foo {
    public static $staticProperty;

    public $property;
    protected $privateProperty;
}

$reflectionClass = new ReflectionClass('Foo');

// A partir do PHP 8.3, passar null como primeiro argumento é necessário
// para acessar propriedades estáticas.
$reflectionProperty = $reflectionClass->getProperty('staticProperty');
$reflectionProperty->setValue(null, 'foo');
var_dump(Foo::$staticProperty);

$foo = new Foo;

$reflectionClass->getProperty('property')->setValue($foo, 'bar');
var_dump($foo->property);

$reflectionProperty = $reflectionClass->getProperty('privateProperty');
$reflectionProperty->setAccessible(true); // requerido apenas antes do PHP 8.1.0
$reflectionProperty->setValue($foo, 'foobar');
var_dump($reflectionProperty->getValue($foo));
?>
```

O exemplo acima produzirá:

```
string(3) "foo"
string(3) "bar"
string(6) "foobar"
```

### Veja também

- [ReflectionProperty::getValue()](reflectionproperty.getvalue.md) - Obtém o valor
- [ReflectionProperty::setAccessible()](reflectionproperty.setaccessible.md) - Define acessibilidade da propriedade
- [ReflectionClass::setStaticPropertyValue()](reflectionclass.setstaticpropertyvalue.md) - Define o valor da propriedade estática pública

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
