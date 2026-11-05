# Listagem de valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.listing.php

---

## Listagem de valores

Tanto Enumerações Puras quanto Enumerações Apoiadas implementam uma interface interna chamada
[UnitEnum](class.unitenum.md). `UnitEnum` inclui um método estático
`cases()`. `cases()` retorna um array embalado com
todos os Casos definidos na ordem de declaração.

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

enum NaipeApoiado: string
{
    case Copas = 'C';
    case Ouros = 'O';
    case Paus = 'P';
    case Espadas = 'E';
}

var_dump(NaipeApoiado::cases());
```

Definir manualmente um método `cases()` em uma enumeração resultará em um erro fatal.

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
