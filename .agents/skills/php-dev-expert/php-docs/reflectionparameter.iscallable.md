# Retorna se o parâmetro DEVE ser um callable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.iscallable.php

---

# ReflectionParameter::isCallable

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionParameter::isCallable — Retorna se o parâmetro DEVE ser um callable

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

Veja o exemplo abaixo para uma forma alternativa de derivar esta informação.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
public function **ReflectionParameter::isCallable**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o parâmetro for [callable](language.types.callable.md), **`false`** se não for
ou **`null`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi preterida em favor de [ReflectionParameter::getType()](reflectionparameter.gettype.md). |

### Examples

**Exemplo #1 Equivalente a PHP 8.0.0**

A partir do PHP 8.0.0, o código a seguir reportará se um tipo suporta callables,
inclusive como parte de uma união.

```
<?php
function declaresCallable(ReflectionParameter $reflectionParameter): bool
{
    $reflectionType = $reflectionParameter->getType();

    if (!$reflectionType) return false;

    $types = $reflectionType instanceof ReflectionUnionType
        ? $reflectionType->getTypes()
        : [$reflectionType];

   return in_array('callable', array_map(fn(ReflectionNamedType $t) => $t->getName(), $types));
}
?>
```

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
