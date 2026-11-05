# Retorna o tipo de um objeto de variante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-get-type.php

---

# variant\_get\_type

(PHP 5, PHP 7, PHP 8)

variant\_get\_type — Retorna o tipo de um objeto de variante

### Descrição

function **variant\_get\_type**([variant](class.variant.md) `$variant`): [int](language.types.integer.md)

Retorna o tipo de um objeto de variante.

### Parâmetros

`variant`
:   O objeto de variante.

### Valor Retornado

Esta função retorna um valor inteiro que indica o tipo de
`variant`, que pode ser uma instância das classes
[com](class.com.md), [dotnet](class.dotnet.md) ou
[variant](class.variant.md). O valor de retorno pode ser comparado
com uma das constantes **`VT_*`**.

O valor de retorno para objetos COM e DOTNET normalmente será
**`VT_DISPATCH`**; o único motivo pelo qual esta função funciona para
essas classes é porque COM e DOTNET são derivados de VARIANT.

### Veja também

- [variant\_set\_type()](function.variant-set-type.md) - Converte uma variante em outro tipo "in loco"

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
