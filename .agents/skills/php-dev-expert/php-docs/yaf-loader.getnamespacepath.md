# Obtém o caminho do namespace registrado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-loader.getnamespacepath.php

---

# Yaf\_Loader::getNamespacePath

(Yaf >=3.2.0)

Yaf\_Loader::getNamespacePath — Obtém o caminho do namespace registrado

### Descrição

public function **Yaf\_Loader::getNamespacePath**([string](language.types.string.md) `$namespaces`): [string](language.types.string.md)

Obtém o caminho do namespace registrado.

### Parâmetros

`namespace`
:   Uma string contendo o namespace.

### Valor Retornado

Uma [string](language.types.string.md) com o caminho. Caso o namespace não estiver registrado, retorna **`null`**.

### Examples

**Exemplo #1 Exemplo de [Yaf\_Loader::registerNamespace()](yaf-loader.registernamespace.md)**

```
<?php
$loader = Yaf_Loader::getInstance("/var/application/lib");
$loader->registerNamespace("\Vendor\PHP", "/var/lib/php");

$loader->getNamespacePath("\Vendor\PHP"); // '/var/lib/php'
$loader->getNamespacePath("\Vendor\JSP"); // '/var/application/lib'

?>
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
