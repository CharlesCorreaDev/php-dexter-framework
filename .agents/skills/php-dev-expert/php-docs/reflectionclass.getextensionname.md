# Obtém o nome da extensão que definiu a classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getextensionname.php

---

# ReflectionClass::getExtensionName

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getExtensionName — Obtém o nome da extensão que definiu a classe

### Descrição

public function **ReflectionClass::getExtensionName**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome da extensão que definiu a classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome da extensão que definiu a classe, ou **`false`** para classes definidas pelo usuário.

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::getExtensionName()****

```
<?php
$class = new ReflectionClass('ReflectionClass');
$extension = $class->getExtensionName();
var_dump($extension);
?>
```

O exemplo acima produzirá:

```
string(10) "Reflection"
```

### Veja também

- [ReflectionClass::getExtension()](reflectionclass.getextension.md) - Obtém um objeto ReflectionExtension para a extensão que definiu a classe

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
