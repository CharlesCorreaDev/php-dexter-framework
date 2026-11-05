# Verifica se o parâmetro tem um tipo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.hastype.php

---

# ReflectionParameter::hasType

(PHP 7, PHP 8)

ReflectionParameter::hasType — Verifica se o parâmetro tem um tipo

### Descrição

public function **ReflectionParameter::hasType**(): [bool](language.types.boolean.md)

Verifica se o parâmetro possui um tipo associado a ele.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se um tipo for especificado, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionParameter::hasType()****

```
<?php
function someFunction(string $param, $param2 = null) {}

$reflectionFunc = new ReflectionFunction('someFunction');
$reflectionParams = $reflectionFunc->getParameters();

var_dump($reflectionParams[0]->hasType());
var_dump($reflectionParams[1]->hasType());
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(false)
```

### Veja também

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
