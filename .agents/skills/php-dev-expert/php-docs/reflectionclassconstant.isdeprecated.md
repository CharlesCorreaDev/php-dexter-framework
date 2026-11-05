# Verifica se está descontinuada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.isdeprecated.php

---

# ReflectionClassConstant::isDeprecated

(PHP 8 >= 8.4.0)

ReflectionClassConstant::isDeprecated — Verifica se está descontinuada

### Descrição

public function **ReflectionClassConstant::isDeprecated**(): [bool](language.types.boolean.md)

Verifica se a constante de classe está descontinuada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se estiver descontinuada, caso contrário **`false`**

### Examples

**Exemplo #1
Exemplo de **ReflectionClassConstant::isDeprecated()****

```
<?php
class Basket {
    #[\Deprecated(message: 'use Basket::APPLE como alternativa')]
    public const APLE = 'apple';

    public const APPLE = 'apple';
}
$classConstant = new ReflectionClassConstant('Basket', 'APLE');
var_dump($classConstant->isDeprecated());
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [Deprecated](class.deprecated.md)
- [ReflectionClassConstant::getDocComment()](reflectionclassconstant.getdoccomment.md) - Obtém comentários doc

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
