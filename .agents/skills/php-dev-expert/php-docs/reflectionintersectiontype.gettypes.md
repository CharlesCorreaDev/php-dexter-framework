# Retorna os tipos incluídos no tipo de interseção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionintersectiontype.gettypes.php

---

# ReflectionIntersectionType::getTypes

(PHP 8 >= 8.1.0)

ReflectionIntersectionType::getTypes — Retorna os tipos incluídos no tipo de interseção

### Descrição

public function **ReflectionIntersectionType::getTypes**(): [array](language.types.array.md)

Retorna os reflexos dos tipos incluídos no tipo de interseção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de objetos [ReflectionType](class.reflectiontype.md).

### Examples

**Exemplo #1 Exemplo de **ReflectionIntersectionType::getTypes()****

```
<?php

function someFunction(Iterator&Countable $value) {}

$reflectionFunc = new ReflectionFunction('someFunction');
$reflectionParam = $reflectionFunc->getParameters()[0];

var_dump($reflectionParam->getType()->getTypes());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
    [0] =>
    class ReflectionNamedType#4(0) {
    }
    [1] =>
    class ReflectionNamedType#5(0) {
    }
}
```

### Veja também

- [ReflectionType::allowsNull()](reflectiontype.allowsnull.md) - Verifica se nulo é permitido
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
