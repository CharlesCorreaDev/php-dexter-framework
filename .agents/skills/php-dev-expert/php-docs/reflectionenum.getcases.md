# Retorna uma lista de todos os casos em um Enum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionenum.getcases.php

---

# ReflectionEnum::getCases

(PHP 8 >= 8.1.0)

ReflectionEnum::getCases — Retorna uma lista de todos os casos em um Enum

### Descrição

public function **ReflectionEnum::getCases**(): [array](language.types.array.md)

Um Enum pode conter zero ou mais casos. Este método recupera todos os casos definidos,
em ordem lexical (ou seja, a ordem em que aparecem no código-fonte).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de objetos de reflexão Enum, um para cada caso no Enum. Para uma unidade Enum,
todos serão instâncias de [ReflectionEnumUnitCase](class.reflectionenumunitcase.md). Para um
Enum apoiado (backed), todos serão instâncias de [ReflectionEnumBackedCase](class.reflectionenumbackedcase.md).

### Examples

**Exemplo #1 Exemplo de **ReflectionEnum::getCases()****

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

$cases = $rEnum->getCases();

foreach ($cases as $rCase) {
    var_dump($rCase->getValue());
}
?>
```

O exemplo acima produzirá:

```
enum(Suit::Hearts)
enum(Suit::Diamonds)
enum(Suit::Clubs)
enum(Suit::Spades)
```

### Veja também

- [Enumerações](language.enumerations.md)
- [ReflectionEnum::getCase()](reflectionenum.getcase.md) - Retorna um caso específico de um Enum
- [ReflectionEnum::isBacked()](reflectionenum.isbacked.md) - Determina se um Enum é um Backed Enum

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
