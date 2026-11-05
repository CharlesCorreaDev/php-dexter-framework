# Para string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectiontype.tostring.php

---

# ReflectionType::\_\_toString

(PHP 7, PHP 8)

ReflectionType::\_\_toString — Para string

### Descrição

public function **ReflectionType::\_\_toString**(): [string](language.types.string.md)

Obtém o nome do tipo de parâmetro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tipo do parâmetro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **ReflectionType::\_\_toString()** foi retornado. |
| 7.1.0 | **ReflectionType::\_\_toString()** foi descontinuado. |

### Examples

**Exemplo #1 Exemplo de **ReflectionType::\_\_toString()****

```
<?php
function someFunction(string $param) {}

$reflectionFunc = new ReflectionFunction('someFunction');
$reflectionParam = $reflectionFunc->getParameters()[0];

echo $reflectionParam->getType();
```

O exemplo acima produzirá
algo semelhante a:

```
string
```

### Veja também

- [ReflectionNamedType::getName()](reflectionnamedtype.getname.md) - Obtém o nome do tipo como uma string
- [ReflectionNamedType::isBuiltin()](reflectionnamedtype.isbuiltin.md) - Verifica se é um tipo interno
- [ReflectionType::allowsNull()](reflectiontype.allowsnull.md) - Verifica se nulo é permitido
- [ReflectionUnionType::getTypes()](reflectionuniontype.gettypes.md) - Retorna os tipos incluídos no tipo de união
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
