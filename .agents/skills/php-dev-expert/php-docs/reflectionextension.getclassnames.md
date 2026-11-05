# Obtém nomes de classes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.getclassnames.php

---

# ReflectionExtension::getClassNames

(PHP 5, PHP 7, PHP 8)

ReflectionExtension::getClassNames — Obtém nomes de classes

### Descrição

public function **ReflectionExtension::getClassNames**(): [array](language.types.array.md)

Obtém uma lista de nomes de classes conforme definido na extensão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de nomes de classes, conforme definido na extensão.
Se nenhuma classe for definida, um array vazio será retornado.

### Examples

**Exemplo #1 Exemplo de **ReflectionExtension::getClassNames()****

```
<?php
$ext = new ReflectionExtension('XMLWriter');
var_dump($ext->getClassNames());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [0]=>
  string(9) "XMLWriter"
}
```

### Veja também

- [ReflectionExtension::getClasses()](reflectionextension.getclasses.md) - Obtém classes
- [ReflectionExtension::getName()](reflectionextension.getname.md) - Obtém o nome da extensão

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
