# Define as conexões na rede

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-weight-array.php

---

# fann\_set\_weight\_array

(PECL fann >= 1.0.0)

fann\_set\_weight\_array — Define as conexões na rede

### Descrição

function **fann\_set\_weight\_array**([resource](language.types.resource.md) `$ann`, [array](language.types.array.md) `$connections`): [bool](language.types.boolean.md)

Define as conexões na rede.

Somente os pesos podem ser modificados, conexões e pesos são ignorados se já não existirem na rede.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`connections`
:   Um array de objetos [FANNConnection](class.fannconnection.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

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
