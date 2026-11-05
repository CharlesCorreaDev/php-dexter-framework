# Obtém atributos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.getattributes.php

---

# ReflectionProperty::getAttributes

(PHP 8)

ReflectionProperty::getAttributes — Obtém atributos

### Descrição

public function **ReflectionProperty::getAttributes**([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

Retorna todos os atributos declarados nesta propriedade de classe como um array de [ReflectionAttribute](class.reflectionattribute.md).

### Parâmetros

`name`
:   Filtra os resultados para incluir apenas instâncias de [ReflectionAttribute](class.reflectionattribute.md)
    para atributos correspondentes a este nome de classe.

`flags`
:   Flags para determinar como filtrar os resultados, se `name`
    for fornecido.

    O padrão é `0`, que retornará apenas os resultados para atributos que
    são da classe `name`.

    A única outra opção disponível é usar **`ReflectionAttribute::IS_INSTANCEOF`**,
    que usará `instanceof` para filtragem.

### Valor Retornado

Array de atributos, como um objeto [ReflectionAttribute](class.reflectionattribute.md).

### Examples

**Exemplo #1 Uso básico**

```
<?php
#[Attribute]
class Fruit {
}

#[Attribute]
class Red {
}

class Basket {
    #[Fruit]
    #[Red]
    public string $apple = 'apple';
}

$property = new ReflectionProperty('Basket', 'apple');
$attributes = $property->getAttributes();
print_r(array_map(fn($attribute) => $attribute->getName(), $attributes));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Fruit
    [1] => Red
)
```

**Exemplo #2 Filtrando resultados pelo nome da classe**

```
<?php
#[Attribute]
class Fruit {
}

#[Attribute]
class Red {
}

class Basket {
    #[Fruit]
    #[Red]
    public string $apple = 'apple';
}

$property = new ReflectionProperty('Basket', 'apple');
$attributes = $property->getAttributes('Fruit');
print_r(array_map(fn($attribute) => $attribute->getName(), $attributes));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Fruit
)
```

**Exemplo #3 Filtrando resultados pelo nome da classe, com herança**

```
<?php
interface Color {
}

#[Attribute]
class Fruit {
}

#[Attribute]
class Red implements Color {
}

class Basket {
    #[Fruit]
    #[Red]
    public string $apple = 'apple';
}

$property = new ReflectionProperty('Basket', 'apple');
$attributes = $property->getAttributes('Color', ReflectionAttribute::IS_INSTANCEOF);
print_r(array_map(fn($attribute) => $attribute->getName(), $attributes));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Red
)
```

### Veja também

- [ReflectionClass::getAttributes()](reflectionclass.getattributes.md) - Obtém atributos
- [ReflectionClassConstant::getAttributes()](reflectionclassconstant.getattributes.md) - Obtém atributos
- [ReflectionFunctionAbstract::getAttributes()](reflectionfunctionabstract.getattributes.md) - Obtém atributos
- [ReflectionParameter::getAttributes()](reflectionparameter.getattributes.md) - Obtém Atributos

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
