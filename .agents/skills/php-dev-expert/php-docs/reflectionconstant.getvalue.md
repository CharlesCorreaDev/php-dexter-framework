# Obtém o valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionconstant.getvalue.php

---

# ReflectionConstant::getValue

(PHP 8 >= 8.4.0)

ReflectionConstant::getValue — Obtém o valor

### Descrição

public function **ReflectionConstant::getValue**(): [mixed](language.types.mixed.md)

Obtém o valor da constante.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor da constante.

### Examples

**Exemplo #1 Exemplo de [ReflectionProperty::getValue()](reflectionproperty.getvalue.md)**

```
<?php
const FOO = 'foo';

var_dump((new \ReflectionConstant('FOO'))->getValue());
?>
```

O exemplo acima produzirá:

```
string(3) "foo"
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
