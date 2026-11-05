# Obtém o construtor da classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getconstructor.php

---

# ReflectionClass::getConstructor

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getConstructor — Obtém o construtor da classe

### Descrição

public function **ReflectionClass::getConstructor**(): [?](language.types.null.md)[ReflectionMethod](class.reflectionmethod.md)

Obtém o construtor da classe refletida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [ReflectionMethod](class.reflectionmethod.md) refletindo o construtor da classe ou **`null`** se a classe
não tem construtor.

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::getConstructor()****

```
<?php
$class = new ReflectionClass('ReflectionClass');
$constructor = $class->getConstructor();
var_dump($constructor);
?>
```

O exemplo acima produzirá:

```
object(ReflectionMethod)#2 (2) {
  ["name"]=>
  string(11) "__construct"
  ["class"]=>
  string(15) "ReflectionClass"
}
```

### Veja também

- [ReflectionClass::getName()](reflectionclass.getname.md) - Obtém o nome da classe

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
