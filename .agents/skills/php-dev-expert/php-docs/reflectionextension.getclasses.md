# Obtém classes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.getclasses.php

---

# ReflectionExtension::getClasses

(PHP 5, PHP 7, PHP 8)

ReflectionExtension::getClasses — Obtém classes

### Descrição

public function **ReflectionExtension::getClasses**(): [array](language.types.array.md)

Obtém uma lista de classes de uma extensão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de objetos [ReflectionClass](class.reflectionclass.md), um
para cada classe dentro da extensão. Se nenhuma classe for definida,
um array vazio é retornado.

### Examples

**Exemplo #1 Exemplo de **ReflectionExtension::getClasses()****

```
<?php
$ext = new ReflectionExtension('XMLWriter');
var_dump($ext->getClasses());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  ["XMLWriter"]=>
  object(ReflectionClass)#2 (1) {
    ["name"]=>
    string(9) "XMLWriter"
  }
}
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
