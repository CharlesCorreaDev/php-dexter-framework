# Obtém as interfaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getinterfaces.php

---

# ReflectionClass::getInterfaces

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getInterfaces — Obtém as interfaces

### Descrição

public function **ReflectionClass::getInterfaces**(): [array](language.types.array.md)

Obtém as interfaces.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) associativo de interfaces, com chaves com os nomes das interfaces
e os valores do array como objetos [ReflectionClass](class.reflectionclass.md).

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::getInterfaces()****

```
<?php
interface Foo { }

interface Bar { }

class Baz implements Foo, Bar { }

$rc1 = new ReflectionClass("Baz");

print_r($rc1->getInterfaces());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [Foo] => ReflectionClass Object
        (
            [name] => Foo
        )

    [Bar] => ReflectionClass Object
        (
            [name] => Bar
        )

)
```

### Veja também

- [ReflectionClass::getInterfaceNames()](reflectionclass.getinterfacenames.md) - Obtém os nomes das interfaces

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
