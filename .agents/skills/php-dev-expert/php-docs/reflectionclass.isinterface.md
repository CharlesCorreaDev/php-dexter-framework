# Verifica se a classe é uma interface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isinterface.php

---

# ReflectionClass::isInterface

(PHP 5, PHP 7, PHP 8)

ReflectionClass::isInterface — Verifica se a classe é uma interface

### Descrição

public function **ReflectionClass::isInterface**(): [bool](language.types.boolean.md)

Verifica se a classe é uma interface.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a classe for uma interface ou **`false`** caso contrário.

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::isInterface()****

```
<?php
interface SomeInterface {
    public function interfaceMethod();
}

$class = new ReflectionClass('SomeInterface');
var_dump($class->isInterface());
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [ReflectionClass::isInstance()](reflectionclass.isinstance.md) - Verifica a classe por instância

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
