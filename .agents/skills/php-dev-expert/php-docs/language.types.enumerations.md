# Enumerações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.enumerations.php

---

## Enumerações

(PHP 8 >= 8.1.0)

### Enumerações Básicas

Enumerações são uma camada de restrição sobre classes e constantes de classe,
destinadas a fornecer uma maneira de definir um conjunto fechado de valores possíveis para um tipo.

```
<?php
enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function do_stuff(Suit $s)
{
    // ...
}

do_stuff(Suit::Spades);
?>
```

Para uma discussão completa, consulte o capítulo
sobre [enumerações.](language.enumerations.md)

### Casting

Se um enum for convertido em um [object](language.types.object.md), ele não será
modificado. Se um enum for convertido em um [array](language.types.array.md),
será criado um array com uma única chave de `name` (para enumerações puras) ou
um array com chaves `name` e `value`
(para enumerações com backup). Todos os outros tipos de conversão resultarão em erro.

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
