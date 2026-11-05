# Mapeia um escalar para uma instância de enumeração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/backedenum.from.php

---

# BackedEnum::from

(PHP 8 >= 8.1.0)

BackedEnum::from — Mapeia um escalar para uma instância de enumeração

### Descrição

public static function **BackedEnum::from**([int](language.types.integer.md)|[string](language.types.string.md) `$value`): static

O método **from()** traduz uma [string](language.types.string.md) ou um [int](language.types.integer.md)
para o caso correspondente do Enum, se houver. Se não houver caso correspondente definido, ele irá emitir
um [ValueError](class.valueerror.md).

### Parâmetros

`value`
:   O valor escalar a ser mapeado para um caso de enumeração.

### Valor Retornado

Uma instância de caso para esta enumeração.

### Examples

**Exemplo #1 Uso Básico**

O exemplo a seguir ilustra como os casos de enumeração são retornados.

```
<?php
enum Suit: string
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';
}

$h = Suit::from('H');

var_dump($h);

$b = Suit::from('B');
?>
```

O exemplo acima produzirá:

```
enum(Suit::Hearts)

Fatal error: Uncaught ValueError: "B" is not a valid backing value for enum "Suit" in /file.php:15
```

### Veja também

- [UnitEnum::cases()](unitenum.cases.md) - Gera uma lista de casos de uma enumeração
- [BackedEnum::tryFrom()](backedenum.tryfrom.md) - Mapeia um escalar para uma instância de enumeração ou nulo

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
