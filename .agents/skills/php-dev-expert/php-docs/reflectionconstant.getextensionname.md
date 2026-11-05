# Obtém o nome da extensão definidora

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionconstant.getextensionname.php

---

# ReflectionConstant::getExtensionName

(PHP 8 >= 8.5.0)

ReflectionConstant::getExtensionName — Obtém o nome da extensão definidora

### Descrição

public function **ReflectionConstant::getExtensionName**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome da extensão que definiu a constante.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome da extensão que definiu a constante, ou **`false`** para constantes definidas pelo usuário.

### Examples

**Exemplo #1 Uso básico de **ReflectionConstant::getExtensionName()****

```
<?php
var_dump((new ReflectionConstant('SQLITE3_TEXT'))->getExtensionName());
?>
```

O exemplo acima produzirá:

```
string(7) "sqlite3"
```

### Veja também

- [ReflectionConstant::getExtension()](reflectionconstant.getextension.md) - Obtém ReflectionExtension da extensão de definição

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
