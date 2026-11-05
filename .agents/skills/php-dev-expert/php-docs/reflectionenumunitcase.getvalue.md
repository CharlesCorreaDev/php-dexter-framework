# Obtém o objeto enum case descrito por este objeto de reflexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionenumunitcase.getvalue.php

---

# ReflectionEnumUnitCase::getValue

(PHP 8 >= 8.1.0)

ReflectionEnumUnitCase::getValue — Obtém o objeto enum case descrito por este objeto de reflexão

### Descrição

public function **ReflectionEnumUnitCase::getValue**(): [UnitEnum](class.unitenum.md)

Retorna o objeto enum case descrito por este objeto de reflexão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O objeto enum case descrito por este objeto de reflexão.

### Examples

**Exemplo #1 Exemplo de **ReflectionEnum::getValue()****

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

$rCase = $rEnum->getCase('Diamonds');

var_dump($rCase->getValue());
?>
```

O exemplo acima produzirá:

```
enum(Suit::Diamonds)
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
