# Obtém as flags de comportamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.getflags.php

---

# ArrayObject::getFlags

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ArrayObject::getFlags — Obtém as flags de comportamento

### Descrição

public function **ArrayObject::getFlags**(): [int](language.types.integer.md)

Obtém as flags de comportamento do [ArrayObject](class.arrayobject.md). Consulte o
método [ArrayObject::setFlags](arrayobject.setflags.md)
para obter uma lista das flags disponíveis.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna as flags de comportamento do ArrayObject.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::getFlags()****

```
<?php
// Array de frutas disponíveis
$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);

$fruitsArrayObject = new ArrayObject($fruits);

// Obtém as flags atuais
$flags = $fruitsArrayObject->getFlags();
var_dump($flags);

// Define novas flags
$fruitsArrayObject->setFlags(ArrayObject::ARRAY_AS_PROPS);

// Obtém as novas flags
$flags = $fruitsArrayObject->getFlags();
var_dump($flags);
?>
```

O exemplo acima produzirá:

```
int(0)
int(2)
```

### Veja também

- [ArrayObject::setFlags()](arrayobject.setflags.md) - Define as opções de comportamento

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
