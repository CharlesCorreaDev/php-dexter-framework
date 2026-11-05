# Retorna a informações sobre o hash fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.password-get-info.php

---

# password\_get\_info

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

password\_get\_info — Retorna a informações sobre o hash fornecido

### Descrição

function **password\_get\_info**([string](language.types.string.md) `$hash`): [array](language.types.array.md)

Quando for fornecido um hash válido criado por um algoritmo suportado pela função
[password\_hash()](function.password-hash.md), esta função retornará um array com as
informações sobre esse hash.

### Parâmetros

`hash`
:   Um hash criado por [password\_hash()](function.password-hash.md).

### Valor Retornado

Retorna um array associativo com três elementos:

- `algo`, que corresponderá a uma
  [constante de algoritmo de senha](password.constants.md)
- `algoName`, que terá o nome legível do
  algoritmo
- `options`, que inclui as opções
  fornecidas ao se chamar a função [password\_hash()](function.password-hash.md)

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
