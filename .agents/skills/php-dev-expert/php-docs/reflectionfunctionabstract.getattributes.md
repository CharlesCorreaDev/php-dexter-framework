# Obtém atributos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getattributes.php

---

# ReflectionFunctionAbstract::getAttributes

(PHP 8)

ReflectionFunctionAbstract::getAttributes — Obtém atributos

### Descrição

public function **ReflectionFunctionAbstract::getAttributes**([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

Retorna todos os atributos declarados nesta função ou método como um array de [ReflectionAttribute](class.reflectionattribute.md).

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

**Exemplo #1 Uso básico com um método de classe**

```
<?php
#[Attribute]
class Fruit {
}

#[Attribute]
class Red {
}

class Factory {
    #[Fruit]
    #[Red]
    public function makeApple(): string
    {
        return 'apple';
    }
}

$method = new ReflectionMethod('Factory', 'makeApple');
$attributes = $method->getAttributes();
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

**Exemplo #2 Uso básico com uma função**

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
function makeApple(): string
{
    return 'apple';
}

$function = new ReflectionFunction('makeApple');
$attributes = $function->getAttributes();
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

**Exemplo #3 Filtrando resultados por nome de classe**

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
function makeApple(): string
{
    return 'apple';
}

$function = new ReflectionFunction('makeApple');
$attributes = $function->getAttributes('Fruit');
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

**Exemplo #4 Filtrando resultados por nome de classe, com herança**

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
function makeApple(): string
{
    return 'apple';
}

$function = new ReflectionFunction('makeApple');
$attributes = $function->getAttributes('Color', ReflectionAttribute::IS_INSTANCEOF);
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
