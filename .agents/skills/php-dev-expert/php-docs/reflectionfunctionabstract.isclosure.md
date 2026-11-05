# Verifica se é um closure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.isclosure.php

---

# ReflectionFunctionAbstract::isClosure

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::isClosure — Verifica se é um closure

### Descrição

public function **ReflectionFunctionAbstract::isClosure**(): [bool](language.types.boolean.md)

Verifica se a função refletida é um [Closure](class.closure.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a função for um [Closure](class.closure.md), caso contrário, **`false`**.

### Examples

**Exemplo #1 Exemplo de **ReflectionFunctionAbstract::isClosure()****

```
<?php
// Não Closure
$function1 = 'str_replace';
$reflection1 = new ReflectionFunction($function1);
var_dump($reflection1->isClosure());

// Closure
$function2 = function () {};
$reflection2 = new ReflectionFunction($function2);
var_dump($reflection2->isClosure());
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [ReflectionFunctionAbstract::isGenerator()](reflectionfunctionabstract.isgenerator.md) - Retorna se esta função é um gerador

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
