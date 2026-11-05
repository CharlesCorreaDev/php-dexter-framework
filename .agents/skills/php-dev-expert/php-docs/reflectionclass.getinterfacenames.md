# Obtém os nomes das interfaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getinterfacenames.php

---

# ReflectionClass::getInterfaceNames

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionClass::getInterfaceNames — Obtém os nomes das interfaces

### Descrição

public function **ReflectionClass::getInterfaceNames**(): [array](language.types.array.md)

Obtém os nomes das interfaces.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array numérico com nomes de interface como valores.

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::getInterfaceNames()****

```
<?php
interface Foo { }

interface Bar { }

class Baz implements Foo, Bar { }

$rc1 = new ReflectionClass("Baz");

print_r($rc1->getInterfaceNames());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Foo
    [1] => Bar
)
```

### Veja também

- [ReflectionClass::getInterfaces()](reflectionclass.getinterfaces.md) - Obtém as interfaces

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
