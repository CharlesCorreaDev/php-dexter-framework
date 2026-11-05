# Obtém o tipo de um parâmetro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.gettype.php

---

# ReflectionParameter::getType

(PHP 7, PHP 8)

ReflectionParameter::getType — Obtém o tipo de um parâmetro

### Descrição

public function **ReflectionParameter::getType**(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

Obtém o tipo associado de um parâmetro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto [ReflectionType](class.reflectiontype.md) se um tipo de parâmetro for
especificado, **`null`** caso contrário.

### Examples

**Exemplo #1 **ReflectionParameter::getType()** Uso a partir do PHP 7.1.0**

A partir do PHP 7.1.0, [ReflectionType::\_\_toString()](reflectiontype.tostring.md) foi descontinuado e
**ReflectionParameter::getType()** *pode* retornar uma
instância de [ReflectionNamedType](class.reflectionnamedtype.md). Para obter o nome do tipo de parâmetro,
**ReflectionNamedType()** está disponível neste caso.

```
<?php
function someFunction(int $param, $param2) {}

$reflectionFunc = new ReflectionFunction('someFunction');
$reflectionParams = $reflectionFunc->getParameters();
$reflectionType1 = $reflectionParams[0]->getType();
$reflectionType2 = $reflectionParams[1]->getType();

assert($reflectionType1 instanceof ReflectionNamedType);
echo $reflectionType1->getName(), PHP_EOL;
var_dump($reflectionType2);
?>
```

O exemplo acima produzirá:

```
int
NULL
```

**Exemplo #2 **ReflectionParameter::getType()** Uso antes do PHP 7.1.0**

```
<?php
function someFunction(int $param, $param2) {}

$reflectionFunc = new ReflectionFunction('someFunction');
$reflectionParams = $reflectionFunc->getParameters();
$reflectionType1 = $reflectionParams[0]->getType();
$reflectionType2 = $reflectionParams[1]->getType();

echo $reflectionType1, PHP_EOL;
var_dump($reflectionType2);
?>
```

Saída do exemplo acima no PHP 7.0:

```
int
NULL
```

**Exemplo #3 **ReflectionParameter::getType()** Uso no PHP 8.0.0 e posterior**

A partir do PHP 8.0.0, este método pode retornar uma instância [ReflectionNamedType](class.reflectionnamedtype.md) ou
uma instância de [ReflectionUnionType](class.reflectionuniontype.md). Este último é uma coleção do primeiro.
Para analisar um tipo, geralmente é conveniente normalizá-lo para um array de objetos [ReflectionNamedType](class.reflectionnamedtype.md)
A função a seguir retornará um array de `0` ou mais de instâncias
[ReflectionNamedType](class.reflectionnamedtype.md).

```
<?php
function getAllTypes(ReflectionParameter $reflectionParameter): array
{
    $reflectionType = $reflectionParameter->getType();

    if (!$reflectionType) return [];

    return $reflectionType instanceof ReflectionUnionType
        ? $reflectionType->getTypes()
        : [$reflectionType];
}
?>
```

### Veja também

- [ReflectionParameter::hasType()](reflectionparameter.hastype.md) - Verifica se o parâmetro tem um tipo
- [ReflectionType::\_\_toString()](reflectiontype.tostring.md) - Para string

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
