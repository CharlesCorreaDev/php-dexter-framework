# Define o limite de falhas de bit usado durante o treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-bit-fail-limit.php

---

# fann\_set\_bit\_fail\_limit

(PECL fann >= 1.0.0)

fann\_set\_bit\_fail\_limit — Define o limite de falhas de bit usado durante o treinamento

### Descrição

function **fann\_set\_bit\_fail\_limit**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$bit_fail_limit`): [bool](language.types.boolean.md)

Define o limite de falhas de bit usado durante o treinamento.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`bit_fail_limit`
:   O limite de falhas de bit.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_bit\_fail\_limit()](function.fann-get-bit-fail-limit.md) - Retorna o limite de falha de bit usado durante o treinamento

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
