# Verifica se a classe está definida internamente por uma extensão ou pelo núcleo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isinternal.php

---

# ReflectionClass::isInternal

(PHP 5, PHP 7, PHP 8)

ReflectionClass::isInternal — Verifica se a classe está definida internamente por uma extensão ou pelo núcleo

### Descrição

public function **ReflectionClass::isInternal**(): [bool](language.types.boolean.md)

Verifica se a classe é definida internamente por uma extensão, ou pelo núcleo, em oposição à definida pelo usuário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a classe estiver definida internamente por uma extensão ou pelo núcleo; ou **`false`** caso contrário.

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::isInternal()****

```
<?php
$internalclass = new ReflectionClass('ReflectionClass');

class Apple {}
$userclass = new ReflectionClass('Apple');

var_dump($internalclass->isInternal());
var_dump($userclass->isInternal());
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### Veja também

- [ReflectionClass::isUserDefined()](reflectionclass.isuserdefined.md) - Verifica se foi definida pelo usuário

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
