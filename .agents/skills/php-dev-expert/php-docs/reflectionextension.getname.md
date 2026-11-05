# Obtém o nome da extensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.getname.php

---

# ReflectionExtension::getName

(PHP 5, PHP 7, PHP 8)

ReflectionExtension::getName — Obtém o nome da extensão

### Descrição

public function **ReflectionExtension::getName**(): [string](language.types.string.md)

Obtém o nome das extensões.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome das extensões.

### Examples

**Exemplo #1 Exemplo de **ReflectionExtension::getName()****

```
<?php
$ext = new ReflectionExtension('mysqli');
var_dump($ext->getName());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(6) "mysqli"
```

### Veja também

- [ReflectionExtension::getClassNames()](reflectionextension.getclassnames.md) - Obtém nomes de classes

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
