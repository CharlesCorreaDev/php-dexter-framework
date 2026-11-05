# Obtém ReflectionExtension da extensão de definição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionconstant.getextension.php

---

# ReflectionConstant::getExtension

(PHP 8 >= 8.5.0)

ReflectionConstant::getExtension — Obtém [ReflectionExtension](class.reflectionextension.md) da extensão de definição

### Descrição

public function **ReflectionConstant::getExtension**(): [?](language.types.null.md)[ReflectionExtension](class.reflectionextension.md)

Obtém um objeto [ReflectionExtension](class.reflectionextension.md) para a extensão
que definiu a constante.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [ReflectionExtension](class.reflectionextension.md) que representa a
extensão que definiu a constante, ou **`null`** para constantes definidas pelo usuário.

### Examples

**Exemplo #1 Uso básico de **ReflectionConstant::getExtension()****

```
<?php
var_dump((new ReflectionConstant('SQLITE3_TEXT'))->getExtension());
?>
```

O exemplo acima produzirá:

```
object(ReflectionExtension)#2 (1) {
  ["name"]=>
  string(7) "sqlite3"
}
```

### Veja também

- [ReflectionConstant::getExtensionName()](reflectionconstant.getextensionname.md) - Obtém o nome da extensão definidora

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
