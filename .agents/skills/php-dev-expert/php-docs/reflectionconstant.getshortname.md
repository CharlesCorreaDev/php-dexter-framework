# Obtém o nome abreviado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionconstant.getshortname.php

---

# ReflectionConstant::getShortName

(PHP 8 >= 8.4.0)

ReflectionConstant::getShortName — Obtém o nome abreviado

### Descrição

public function **ReflectionConstant::getShortName**(): [string](language.types.string.md)

Obtém o nome abreviado da constante, a parte sem o namespace.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome abreviado da constante.

### Examples

**Exemplo #1 Exemplo de **ReflectionConstant::getShortName()****

```
<?php
namespace Foo;

const BAR = 'bar';

echo (new \ReflectionConstant('Foo\BAR'))->getShortName();
?>
```

O exemplo acima produzirá:

```
BAR
```

### Veja também

- [ReflectionConstant::getName()](reflectionconstant.getname.md) - Obtém o nome

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
