# Obtém o tipo de retorno especificado de uma função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getreturntype.php

---

# ReflectionFunctionAbstract::getReturnType

(PHP 7, PHP 8)

ReflectionFunctionAbstract::getReturnType — Obtém o tipo de retorno especificado de uma função

### Descrição

public function **ReflectionFunctionAbstract::getReturnType**(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

Obtém o tipo de retorno especificado de uma função refletida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto [ReflectionType](class.reflectiontype.md) se um tipo de retorno for
especificado, **`null`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionFunctionAbstract::getReturnType()****

```
<?php

function to_int($param) : int {
    return (int) $param;
}

$reflection1 = new ReflectionFunction('to_int');
echo $reflection1->getReturnType();
```

O exemplo acima produzirá:

```
int
```

**Exemplo #2 Uso em funções integradas**

```
<?php

$reflection2 = new ReflectionFunction('array_merge');

var_dump($reflection2->getReturnType());
```

O exemplo acima produzirá:

```
null
```

Isso ocorre porque muitas funções internas não possuem tipos especificados para seus
parâmetros ou valores de retorno. Portanto, é melhor evitar o uso deste
método em funções integradas.

### Veja também

- [ReflectionFunctionAbstract::hasReturnType()](reflectionfunctionabstract.hasreturntype.md) - Verifica se a função possui um tipo de retorno especificado
- [ReflectionType::\_\_toString()](reflectiontype.tostring.md) - Para string

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
