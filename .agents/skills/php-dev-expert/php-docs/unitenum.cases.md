# Gera uma lista de casos de uma enumeração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/unitenum.cases.php

---

# UnitEnum::cases

(PHP 8 >= 8.1.0)

UnitEnum::cases — Gera uma lista de casos de uma enumeração

### Descrição

public static function **UnitEnum::cases**(): [array](language.types.array.md)

Este método irá retornar um array de todos os casos de uma enumeração, em ordem de declaração.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de todos os casos definidos desta enumeração, em ordem de declaração.

### Examples

**Exemplo #1 Uso básico**

O exemplo a seguir ilustra como os casos de enumeração são retornados.

```
<?php
enum Naipe
{
    case Copas;
    case Ouros;
    case Paus;
    case Espadas;
}

var_dump(Naipe::cases());
```

O exemplo acima produzirá:

```
array(4) {
  [0]=>
  enum(Naipe::Copas)
  [1]=>
  enum(Naipe::Ouros)
  [2]=>
  enum(Naipe::Paus)
  [3]=>
  enum(Naipe::Espadas)
}
```

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
