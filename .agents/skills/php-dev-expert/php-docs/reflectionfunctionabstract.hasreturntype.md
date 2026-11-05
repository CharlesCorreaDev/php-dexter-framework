# Verifica se a função possui um tipo de retorno especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.hasreturntype.php

---

# ReflectionFunctionAbstract::hasReturnType

(PHP 7, PHP 8)

ReflectionFunctionAbstract::hasReturnType — Verifica se a função possui um tipo de retorno especificado

### Descrição

public function **ReflectionFunctionAbstract::hasReturnType**(): [bool](language.types.boolean.md)

Verifica se a função refletida possui um tipo de retorno especificado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a função possui um tipo de retorno especificado, caso contrário, **`false`**.

### Examples

**Exemplo #1 Exemplo de **ReflectionFunctionAbstract::hasReturnType()****

```
<?php

function to_int($param): int
{
    return (int) $param;
}

$reflection1 = new ReflectionFunction('to_int');
var_dump($reflection1->hasReturnType());
```

O exemplo acima produzirá:

```
bool(true)
```

**Exemplo #2 Uso em funções integradas**

```
<?php

$reflection2 = new ReflectionFunction('array_merge');

var_dump($reflection2->hasReturnType());
```

O exemplo acima produzirá:

```
bool(false)
```

### Veja também

- [ReflectionFunctionAbstract::getReturnType()](reflectionfunctionabstract.getreturntype.md) - Obtém o tipo de retorno especificado de uma função

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
