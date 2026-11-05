# Retorna um caso específico de um Enum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionenum.getcase.php

---

# ReflectionEnum::getCase

(PHP 8 >= 8.1.0)

ReflectionEnum::getCase — Retorna um caso específico de um Enum

### Descrição

public function **ReflectionEnum::getCase**([string](language.types.string.md) `$name`): [ReflectionEnumUnitCase](class.reflectionenumunitcase.md)

Retorna o objeto de reflexão para um caso Enum específico por nome. Se o caso solicitado
não está definido, uma [ReflectionException](class.reflectionexception.md) é lançada.

### Parâmetros

`name`
:   O nome do caso a ser recuperado.

### Valor Retornado

Uma instância de [ReflectionEnumUnitCase](class.reflectionenumunitcase.md)
ou [ReflectionEnumBackedCase](class.reflectionenumbackedcase.md), conforme apropriado.

### Examples

**Exemplo #1 Exemplo de **ReflectionEnum::getCase()****

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

$rCase = $rEnum->getCase('Clubs');

var_dump($rCase->getValue());
?>
```

O exemplo acima produzirá:

```
enum(Suit::Clubs)
```

### Veja também

- [Enumerações](language.enumerations.md)
- [ReflectionEnum::getCases()](reflectionenum.getcases.md) - Retorna uma lista de todos os casos em um Enum
- [ReflectionEnum::hasCase()](reflectionenum.hascase.md) - Verifica um caso em um Enum
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
