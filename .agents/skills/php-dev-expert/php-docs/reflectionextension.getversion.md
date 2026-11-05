# Obtém a versão da extensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.getversion.php

---

# ReflectionExtension::getVersion

(PHP 5, PHP 7, PHP 8)

ReflectionExtension::getVersion — Obtém a versão da extensão

### Descrição

public function **ReflectionExtension::getVersion**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém a versão da extensão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A versão da extensão ou **`null`** se a extensão não tiver versão.

### Examples

**Exemplo #1 Exemplo de **ReflectionExtension::getVersion()****

```
<?php
$ext = new ReflectionExtension('mysqli');
var_dump($ext->getVersion());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(3) "0.1"
```

### Veja também

- [ReflectionExtension::info()](reflectionextension.info.md) - Imprime informações da extensão

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
