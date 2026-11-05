# Obtém o valor escalar que apoia este caso Enum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionenumbackedcase.getbackingvalue.php

---

# ReflectionEnumBackedCase::getBackingValue

(PHP 8 >= 8.1.0)

ReflectionEnumBackedCase::getBackingValue — Obtém o valor escalar que apoia este caso Enum

### Descrição

public function **ReflectionEnumBackedCase::getBackingValue**(): [int](language.types.integer.md)|[string](language.types.string.md)

Obtém o valor escalar que apoia este caso Enum.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O equivalente escalar deste caso enum.

### Examples

**Exemplo #1 Exemplo de **ReflectionEnum::getBackingValue()****

```
<?php
enum Suit: string
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';
}

$rEnum = new ReflectionEnum(Suit::class);

$rCase = $rEnum->getCase('Spades');

var_dump($rCase->getBackingValue());
?>
```

O exemplo acima produzirá:

```
string(1) "S"
```

### Veja também

- [Enumerações](language.enumerations.md)

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
