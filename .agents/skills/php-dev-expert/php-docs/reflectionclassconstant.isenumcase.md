# Verifica se a constante de classe é um caso de enumeração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.isenumcase.php

---

# ReflectionClassConstant::isEnumCase

(PHP 8 >= 8.1.0)

ReflectionClassConstant::isEnumCase — Verifica se a constante de classe é um caso de enumeração

### Descrição

public function **ReflectionClassConstant::isEnumCase**(): [bool](language.types.boolean.md)

Verifica se a constante da classe é um caso de [enumeração](language.enumerations.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a constante de classe for um caso de enumeração; **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionClassConstant::isEnumCase()****

Distinguir entre casos de enumeração e constantes de classe regulares.

```
<?php
enum Status
{
    const BORING_CONSTANT = 'teste';
    const ENUM_VALUE = Status::PUBLISHED;

    case DRAFT;
    case PUBLISHED;
    case ARCHIVED;
}

$reflection = new ReflectionEnum(Status::class);
foreach ($reflection->getReflectionConstants() as $constant) {
    echo "{$constant->name} é ",
        $constant->isEnumCase() ? "um caso de enumeração" : "uma constante de classe comum",
        PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
BORING_CONSTANT é uma constante de classe comum
ENUM_VALUE é uma constante de classe comum
DRAFT é um caso de enumeração
PUBLISHED é um caso de enumeração
ARCHIVED é um caso de enumeração
```

### Veja também

- [ReflectionEnum](class.reflectionenum.md)

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
