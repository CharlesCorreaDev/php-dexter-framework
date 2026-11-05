# Obtém o nome do namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionconstant.getnamespacename.php

---

# ReflectionConstant::getNamespaceName

(PHP 8 >= 8.4.0)

ReflectionConstant::getNamespaceName — Obtém o nome do namespace

### Descrição

public function **ReflectionConstant::getNamespaceName**(): [string](language.types.string.md)

Obtém o nome do namespace da constante.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome do namespace ou uma string vazia para o namespace global.

### Examples

**Exemplo #1 Exemplo de **ReflectionConstant::getNamespaceName()****

```
<?php
namespace Foo {
   const BAR = 'bar';
   var_dump((new \ReflectionConstant('Foo\BAR'))->getNamespaceName());
}

namespace {
   const BAR = 'bar';
   var_dump((new \ReflectionConstant('BAR'))->getNamespaceName());
}
?>
```

O exemplo acima produzirá:

```
string(3) "Foo"
string(0) ""
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
