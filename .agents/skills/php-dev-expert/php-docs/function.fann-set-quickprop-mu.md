# Define o fator mu do Quickprop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-quickprop-mu.php

---

# fann\_set\_quickprop\_mu

(PECL fann >= 1.0.0)

fann\_set\_quickprop\_mu — Define o fator mu do Quickprop

### Descrição

function **fann\_set\_quickprop\_mu**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$quickprop_mu`): [bool](language.types.boolean.md)

Define o fator mu do Quickprop.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`quickprop_mu`
:   O fator mu.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_quickprop\_mu()](function.fann-get-quickprop-mu.md) - Retorna o fator mu

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
