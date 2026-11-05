# Obtém atributos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getattributes.php

---

# ReflectionClass::getAttributes

(PHP 8)

ReflectionClass::getAttributes — Obtém atributos

### Descrição

public function **ReflectionClass::getAttributes**([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

Retorna todos os atributos declarados nesta classe como um array de [ReflectionAttribute](class.reflectionattribute.md).

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

#[Fruit]
#[Red]
class Apple {
}

$class = new ReflectionClass('Apple');
$attributes = $class->getAttributes();
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

#[Fruit]
#[Red]
class Apple {
}

$class = new ReflectionClass('Apple');
$attributes = $class->getAttributes('Fruit');
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

#[Fruit]
#[Red]
class Apple {
}

$class = new ReflectionClass('Apple');
$attributes = $class->getAttributes(Color::class, ReflectionAttribute::IS_INSTANCEOF);
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

- [ReflectionClassConstant::getAttributes()](reflectionclassconstant.getattributes.md) - Obtém atributos
- [ReflectionFunctionAbstract::getAttributes()](reflectionfunctionabstract.getattributes.md) - Obtém atributos
- [ReflectionParameter::getAttributes()](reflectionparameter.getattributes.md) - Obtém Atributos
- [ReflectionProperty::getAttributes()](reflectionproperty.getattributes.md) - Obtém atributos

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
