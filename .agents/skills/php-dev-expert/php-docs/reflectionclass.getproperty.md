# Obtém um ReflectionProperty para a propriedade de uma classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getproperty.php

---

# ReflectionClass::getProperty

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getProperty — Obtém um [ReflectionProperty](class.reflectionproperty.md) para a propriedade de uma classe

### Descrição

public function **ReflectionClass::getProperty**([string](language.types.string.md) `$name`): [ReflectionProperty](class.reflectionproperty.md)

Obtém um [ReflectionProperty](class.reflectionproperty.md) para a propriedade de uma classe.

### Parâmetros

`name`
:   O nome da propriedade.

### Valor Retornado

Um [ReflectionProperty](class.reflectionproperty.md).

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::getProperty()****

```
<?php
$class = new ReflectionClass('ReflectionClass');
$property = $class->getProperty('name');
var_dump($property);
?>
```

O exemplo acima produzirá:

```
object(ReflectionProperty)#2 (2) {
  ["name"]=>
  string(4) "name"
  ["class"]=>
  string(15) "ReflectionClass"
}
```

### Veja também

- [ReflectionClass::getProperties()](reflectionclass.getproperties.md) - Obtém propriedades

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
