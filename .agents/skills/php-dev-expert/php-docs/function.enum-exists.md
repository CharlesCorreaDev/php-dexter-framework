# Verifica se uma enumeração foi definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enum-exists.php

---

# enum\_exists

(PHP 8 >= 8.1.0)

enum\_exists — Verifica se uma enumeração foi definida

### Descrição

function **enum\_exists**([string](language.types.string.md) `$enum`, [bool](language.types.boolean.md) `$autoload` = **`true`**): [bool](language.types.boolean.md)

Esta função verifica se o [enum](language.enumerations.md) fornecido foi definido.

### Parâmetros

`enum`
:   O nome da enumetação. O nome é verificado sem sensibilidade a maiúsculas/minúsculas.

`autoload`
:   Se deve-se [carregar automaticamente](language.oop5.autoload.md)
    a enumeração caso não tenha sido carregada.

### Valor Retornado

Retorna **`true`** se `enum` é uma enumeração definida,
**`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **enum\_exists()****

```
<?php
// Verifica se a enumeração existe antes de tentar usá-la
if (enum_exists(Suit::class)) {
    $myclass = Suit::Hearts;
}
?>
```

### Veja também

- [function\_exists()](function.function-exists.md) - Retorna true se a função informada estiver definida
- [class\_exists()](function.class-exists.md) - Verifica se uma classe foi definida
- [interface\_exists()](function.interface-exists.md) - Verifica se a interface foi definida
- [get\_declared\_classes()](function.get-declared-classes.md) - Retorna um array com os nomes das classes definidas

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
