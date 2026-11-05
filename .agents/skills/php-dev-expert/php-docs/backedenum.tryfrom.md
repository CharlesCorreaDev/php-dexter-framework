# Mapeia um escalar para uma instância de enumeração ou nulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/backedenum.tryfrom.php

---

# BackedEnum::tryFrom

(PHP 8 >= 8.1.0)

BackedEnum::tryFrom — Mapeia um escalar para uma instância de enumeração ou nulo

### Descrição

public static function **BackedEnum::tryFrom**([int](language.types.integer.md)|[string](language.types.string.md) `$value`): [?](language.types.null.md)static

O método **tryFrom()** traduz uma [string](language.types.string.md) ou um [int](language.types.integer.md)
para o caso correspondente do Enum, se houver. Se não houver caso correspondente definido, ele irá
retornar nulo.

### Parâmetros

`value`
:   O valor escalar a ser mapeado para um caso de enumeração.

### Valor Retornado

Uma instância de caso para esta enumeração, ou [null](language.types.null.md) se não encontrado.

### Examples

**Exemplo #1 Uso básico**

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

$h = Suit::tryFrom('H');

var_dump($h);

$b = Suit::tryFrom('B') ?? Suit::Spades;

var_dump($b);
?>
```

O exemplo acima produzirá:

```
enum(Suit::Hearts)
enum(Suit::Spades)
```

### Veja também

- [UnitEnum::cases()](unitenum.cases.md) - Gera uma lista de casos de uma enumeração
- [BackedEnum::from()](backedenum.from.md) - Mapeia um escalar para uma instância de enumeração

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
