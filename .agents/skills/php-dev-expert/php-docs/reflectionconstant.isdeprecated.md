# Verifica se foi descontinuada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionconstant.isdeprecated.php

---

# ReflectionConstant::isDeprecated

(PHP 8 >= 8.4.0)

ReflectionConstant::isDeprecated — Verifica se foi descontinuada

### Descrição

public function **ReflectionConstant::isDeprecated**(): [bool](language.types.boolean.md)

Verifica se a constante foi descontinuada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se estiver sido descontinuada, caso contrário **`false`**

### Examples

**Exemplo #1
Exemplo de **ReflectionConstant::isDeprecated()****

```
<?php
// E_STRICT foi descontinuada a partir do PHP 8.4
var_dump((new ReflectionConstant('E_STRICT'))->isDeprecated());
?>
```

Saída do exemplo acima no PHP 8.4:

```
bool(true)
```

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
