# Obtém o nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionconstant.getname.php

---

# ReflectionConstant::getName

(PHP 8 >= 8.4.0)

ReflectionConstant::getName — Obtém o nome

### Descrição

public function **ReflectionConstant::getName**(): [string](language.types.string.md)

Obtém o nome da constante.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome da constante, que é composto pelo seu namespace e nome.

### Examples

**Exemplo #1 Exemplo de **ReflectionConstant::getName()****

```
<?php
namespace Foo;

const BAR = 'bar';

echo (new \ReflectionConstant('Foo\BAR'))->getName();
?>
```

O exemplo acima produzirá:

```
Foo\BAR
```

### Veja também

- [ReflectionConstant::getNamespaceName()](reflectionconstant.getnamespacename.md) - Obtém o nome do namespace

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
