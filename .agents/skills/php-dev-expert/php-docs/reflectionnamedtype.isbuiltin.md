# Verifica se é um tipo interno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionnamedtype.isbuiltin.php

---

# ReflectionNamedType::isBuiltin

(PHP 7, PHP 8)

ReflectionNamedType::isBuiltin — Verifica se é um tipo interno

### Descrição

public function **ReflectionNamedType::isBuiltin**(): [bool](language.types.boolean.md)

Verifica se o tipo é um tipo interno no PHP. Um tipo interno é qualquer tipo que
não é uma classe, interface ou trait.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se for um tipo interno, caso contrário **`false`**

### Examples

**Exemplo #1 Exemplo de **ReflectionNamedType::isBuiltin()****

```
<?php
class SomeClass {}

function someFunction(string $param, SomeClass $param2, stdClass $param3) {}

$reflectionFunc = new ReflectionFunction('someFunction');
$reflectionParams = $reflectionFunc->getParameters();

var_dump($reflectionParams[0]->getType()->isBuiltin());
var_dump($reflectionParams[1]->getType()->isBuiltin());
var_dump($reflectionParams[2]->getType()->isBuiltin());
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(false)
```

Observe que o método **ReflectionNamedType::isBuiltin()**
não faz distinção entre classes internas e personalizadas. Para fazer essa
distinção, o método [ReflectionClass::isInternal()](reflectionclass.isinternal.md)
deve ser usado no nome da classe retornada.

### Veja também

- [ReflectionType::allowsNull()](reflectiontype.allowsnull.md) - Verifica se nulo é permitido
- [ReflectionType::\_\_toString()](reflectiontype.tostring.md) - Para string
- [ReflectionClass::isInternal()](reflectionclass.isinternal.md) - Verifica se a classe está definida internamente por uma extensão ou pelo núcleo
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
