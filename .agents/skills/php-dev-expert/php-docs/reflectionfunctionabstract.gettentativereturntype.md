# Retorna o tipo de retorno provisório associado à função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.gettentativereturntype.php

---

# ReflectionFunctionAbstract::getTentativeReturnType

(PHP 8 >= 8.1.0)

ReflectionFunctionAbstract::getTentativeReturnType — Retorna o tipo de retorno provisório associado à função

### Descrição

public function **ReflectionFunctionAbstract::getTentativeReturnType**(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

Retorna o [tipo de retorno provisório](class.returntypewillchange.md) associado à função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto [ReflectionType](class.reflectiontype.md) se um tipo de retorno provisório for
especificado, **`null`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionFunctionAbstract::getTentativeReturnType()****

```
<?php

$method = new ReflectionMethod(\ArrayAccess::class, 'offsetGet');
var_dump($method->getTentativeReturnType());
```

O exemplo acima produzirá
algo semelhante a:

```
object(ReflectionNamedType)#2 (0) {
}
```

### Veja também

- [ReflectionFunctionAbstract::getReturnType()](reflectionfunctionabstract.getreturntype.md) - Obtém o tipo de retorno especificado de uma função
- [ReflectionFunctionAbstract::hasTentativeReturnType()](reflectionfunctionabstract.hastentativereturntype.md) - Retorna se a função tem um tipo de retorno provisório
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
