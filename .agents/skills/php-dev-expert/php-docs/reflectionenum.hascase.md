# Verifica um caso em um Enum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionenum.hascase.php

---

# ReflectionEnum::hasCase

(PHP 8 >= 8.1.0)

ReflectionEnum::hasCase — Verifica um caso em um Enum

### Descrição

public function **ReflectionEnum::hasCase**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Determina se um determinado caso está definido em um Enum.

### Parâmetros

`name`
:   O caso a ser verificado.

### Valor Retornado

**`true`** se o caso for definido, **`false`** se não.

### Examples

**Exemplo #1 Exemplo de **ReflectionEnum::hasCase()****

```
<?php
enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

$rEnum = new ReflectionEnum(Suit::class);

var_dump($rEnum->hasCase('Hearts'));
var_dump($rEnum->hasCase('Horseshoes'));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### Veja também

- [Enumerações](language.enumerations.md)
- [ReflectionEnum::getCase()](reflectionenum.getcase.md) - Retorna um caso específico de um Enum
- [ReflectionEnum::getCases()](reflectionenum.getcases.md) - Retorna uma lista de todos os casos em um Enum

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
