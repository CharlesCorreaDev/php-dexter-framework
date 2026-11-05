# Retorna se a função tem um tipo de retorno provisório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.hastentativereturntype.php

---

# ReflectionFunctionAbstract::hasTentativeReturnType

(PHP 8 >= 8.1.0)

ReflectionFunctionAbstract::hasTentativeReturnType — Retorna se a função tem um tipo de retorno provisório

### Descrição

public function **ReflectionFunctionAbstract::hasTentativeReturnType**(): [bool](language.types.boolean.md)

Retorna se a função tem um [tipo de retorno provisório](class.returntypewillchange.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a função tiver um tipo de retorno provisório, caso contrário, **`false`**.

### Examples

**Exemplo #1 Exemplo de **ReflectionFunctionAbstract::hasTentativeReturnType()****

```
<?php

$method = new ReflectionMethod(\ArrayAccess::class, 'offsetGet');
var_dump($method->hasTentativeReturnType());
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [ReflectionFunctionAbstract::getTentativeReturnType()](reflectionfunctionabstract.gettentativereturntype.md) - Retorna o tipo de retorno provisório associado à função
- [ReflectionFunctionAbstract::hasReturnType()](reflectionfunctionabstract.hasreturntype.md) - Verifica se a função possui um tipo de retorno especificado
- [Compatibilidade do Tipo de Retorno com Classes Internas](language.oop5.inheritance.md#language.oop5.inheritance.internal-classes)

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
