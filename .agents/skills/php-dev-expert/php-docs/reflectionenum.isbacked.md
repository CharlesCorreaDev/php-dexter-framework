# Determina se um Enum é um Backed Enum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionenum.isbacked.php

---

# ReflectionEnum::isBacked

(PHP 8 >= 8.1.0)

ReflectionEnum::isBacked — Determina se um Enum é um Backed Enum

### Descrição

public function **ReflectionEnum::isBacked**(): [bool](language.types.boolean.md)

Um Backed Enum é aquele que possui um equivalente escalar de apoio nativo, seja um
[string](language.types.string.md) ou um [int](language.types.integer.md). Nem todos os Enums são apoiados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o Enum tiver um escalar de apoio, **`false`** se não.

### Examples

**Exemplo #1 Exemplo de **ReflectionEnum::isBacked()****

```
<?php
enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

enum BackedSuit: string
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';
}

var_dump((new ReflectionEnum(Suit::class))->isBacked());
var_dump((new ReflectionEnum(BackedSuit::class))->isBacked());
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [Enumerações](language.enumerations.md)
- [ReflectionEnum::getBackingType()](reflectionenum.getbackingtype.md) - Obtém o tipo de apoio de um Enum, se houver

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
