# Obtém o tipo de apoio de um Enum, se houver

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionenum.getbackingtype.php

---

# ReflectionEnum::getBackingType

(PHP 8 >= 8.1.0)

ReflectionEnum::getBackingType — Obtém o tipo de apoio de um Enum, se houver

### Descrição

public function **ReflectionEnum::getBackingType**(): [?](language.types.null.md)[ReflectionNamedType](class.reflectionnamedtype.md)

Se a enumeração for um apoiada, este método retornará uma instância
de [ReflectionType](class.reflectiontype.md) para o tipo de apoio do Enum.
Se não for apoiada, retornará **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma instância de [ReflectionNamedType](class.reflectionnamedtype.md) ou **`null`**
se a enumeração não tiver tipo de apoio.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo de retorno agora é declarado como `?ReflectionNamedType`. Anteriormente, `?ReflectionType` era declarado. |

### Examples

**Exemplo #1 Exemplo de **ReflectionEnum::getBackingType()****

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

$rBackingType = $rEnum->getBackingType();

var_dump((string) $rBackingType);
?>
```

O exemplo acima produzirá:

```
string(6) "string"
```

### Veja também

- [Enumerações](language.enumerations.md)
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
