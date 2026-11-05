# Verifica se está descontinuada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.isdeprecated.php

---

# ReflectionFunctionAbstract::isDeprecated

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::isDeprecated — Verifica se está descontinuada

### Descrição

public function **ReflectionFunctionAbstract::isDeprecated**(): [bool](language.types.boolean.md)

Verifica se a função está descontinuada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se estiver descontinuada, caso contrário, **`false`**

### Examples

**Exemplo #1
Exemplo de **ReflectionFunctionAbstract::isDeprecated()****

```
<?php
$rf = new ReflectionFunction('ereg');
var_dump($rf->isDeprecated());
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [Deprecated](class.deprecated.md)
- [ReflectionFunctionAbstract::getDocComment()](reflectionfunctionabstract.getdoccomment.md) - Obtém comentário doc

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
