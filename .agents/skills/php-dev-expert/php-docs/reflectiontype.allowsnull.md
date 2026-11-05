# Verifica se nulo é permitido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectiontype.allowsnull.php

---

# ReflectionType::allowsNull

(PHP 7, PHP 8)

ReflectionType::allowsNull — Verifica se nulo é permitido

### Descrição

public function **ReflectionType::allowsNull**(): [bool](language.types.boolean.md)

Verifica se o parâmetro permite **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se **`null`** é permitido, caso contrário **`false`**

### Examples

**Exemplo #1 Exemplo de **ReflectionType::allowsNull()****

```
<?php
function someFunction(string $param, stdClass $param2 = null) {}

$reflectionFunc = new ReflectionFunction('someFunction');
$reflectionParams = $reflectionFunc->getParameters();

var_dump($reflectionParams[0]->getType()->allowsNull());
var_dump($reflectionParams[1]->getType()->allowsNull());
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [ReflectionNamedType::isBuiltin()](reflectionnamedtype.isbuiltin.md) - Verifica se é um tipo interno
- [ReflectionType::\_\_toString()](reflectiontype.tostring.md) - Para string
- [ReflectionParameter::getType()](reflectionparameter.gettype.md) - Obtém o tipo de um parâmetro

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
