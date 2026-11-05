# Converte uma variante em outro tipo "in loco"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-set-type.php

---

# variant\_set\_type

(PHP 5, PHP 7, PHP 8)

variant\_set\_type — Converte uma variante em outro tipo "in loco"

### Descrição

function **variant\_set\_type**([variant](class.variant.md) `$variant`, [int](language.types.integer.md) `$type`): [void](language.types.void.md)

Esta função é similar a [variant\_cast()](function.variant-cast.md) exceto que
a variante é modificada "in loco"; nenhuma nova variante é criada. Os
parâmetros para esta função têm significado idêntico aos de
[variant\_cast()](function.variant-cast.md).

### Parâmetros

`variant`
:   A variante.

`type`

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [variant\_cast()](function.variant-cast.md) - Converter uma variante em um novo objeto variante de outro tipo
- [variant\_get\_type()](function.variant-get-type.md) - Retorna o tipo de um objeto de variante

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
