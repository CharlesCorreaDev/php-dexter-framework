# Destrói a rede neural inteira e libera adequadamente a memória associada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-destroy.php

---

# fann\_destroy

(PECL fann >= 1.0.0)

fann\_destroy — Destrói a rede neural inteira e libera adequadamente a memória associada

### Descrição

function **fann\_destroy**([resource](language.types.resource.md) `$ann`): [bool](language.types.boolean.md)

Destrói a rede neural inteira e libera adequadamente a memória associada.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

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
