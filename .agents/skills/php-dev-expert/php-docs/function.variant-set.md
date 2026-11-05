# Atribui um novo valor para um objeto de variante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-set.php

---

# variant\_set

(PHP 5, PHP 7, PHP 8)

variant\_set — Atribui um novo valor para um objeto de variante

### Descrição

function **variant\_set**([variant](class.variant.md) `$variant`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Converte `value` em uma variante e atribui ao objeto
`variant`; nenhum novo objeto variante é criado,
e o valor antigo de `variant` é liberado.

### Parâmetros

`variant`
:   A variante.

`value`

### Valor Retornado

Nenhum valor é retornado.

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
