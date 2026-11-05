# Retorna se esta classe é clonável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.iscloneable.php

---

# ReflectionClass::isCloneable

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionClass::isCloneable — Retorna se esta classe é clonável

### Descrição

public function **ReflectionClass::isCloneable**(): [bool](language.types.boolean.md)

Retorna se esta classe é clonável.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a classe for clonável, **`false`** caso contrário.

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::isCloneable()****

```
<?php
class NotCloneable {
    public $var1;

    private function __clone() {
    }
}

class Cloneable {
    public $var1;
}

$notCloneable = new ReflectionClass('NotCloneable');
$cloneable = new ReflectionClass('Cloneable');

var_dump($notCloneable->isCloneable());
var_dump($cloneable->isCloneable());
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

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
