# Obtém um ReflectionMethod para um método de classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getmethod.php

---

# ReflectionClass::getMethod

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getMethod — Obtém um [ReflectionMethod](class.reflectionmethod.md) para um método de classe

### Descrição

public function **ReflectionClass::getMethod**([string](language.types.string.md) `$name`): [ReflectionMethod](class.reflectionmethod.md)

Obtém um [ReflectionMethod](class.reflectionmethod.md) para um método de classe.

### Parâmetros

`name`
:   O nome do método a ser refletido.

### Valor Retornado

Um [ReflectionMethod](class.reflectionmethod.md).

### Erros/Exceções

Uma [ReflectionException](class.reflectionexception.md) se o método não existir.

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::getMethod()****

```
<?php
$class = new ReflectionClass('ReflectionClass');
$method = $class->getMethod('getMethod');
var_dump($method);
?>
```

O exemplo acima produzirá:

```
object(ReflectionMethod)#2 (2) {
  ["name"]=>
  string(9) "getMethod"
  ["class"]=>
  string(15) "ReflectionClass"
}
```

### Veja também

- [ReflectionClass::getMethods()](reflectionclass.getmethods.md) - Obtém um array de métodos

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
