# Verifica se o parâmetro espera um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.isarray.php

---

# ReflectionParameter::isArray

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

ReflectionParameter::isArray — Verifica se o parâmetro espera um array

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

Veja o exemplo abaixo para uma forma alternativa de derivar esta informação.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
public function **ReflectionParameter::isArray**(): [bool](language.types.boolean.md)

Verifica se o parâmetro espera um array.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se um [array](language.types.array.md) for esperado, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi preterida em favor de [ReflectionParameter::getType()](reflectionparameter.gettype.md). |

### Examples

**Exemplo #1 Equivalente a PHP 8.0.0**

A partir do PHP 8.0.0, o código a seguir reportará se um tipo declara arrays,
inclusive como parte de uma união.

```
<?php
function declaresArray(ReflectionParameter $reflectionParameter): bool
{
    $reflectionType = $reflectionParameter->getType();

    if (!$reflectionType) return false;

    $types = $reflectionType instanceof ReflectionUnionType
        ? $reflectionType->getTypes()
        : [$reflectionType];

    return in_array('array', array_map(fn(ReflectionNamedType $t) => $t->getName(), $types));
}
?>
```

### Veja também

- [ReflectionParameter::isOptional()](reflectionparameter.isoptional.md) - Verifica se opcional

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
