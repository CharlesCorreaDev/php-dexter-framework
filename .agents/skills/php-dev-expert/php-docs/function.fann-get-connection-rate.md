# Obtém a taxa de conexão usada quando a rede foi criada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-connection-rate.php

---

# fann\_get\_connection\_rate

(PECL fann >= 1.0.0)

fann\_get\_connection\_rate — Obtém a taxa de conexão usada quando a rede foi criada

### Descrição

function **fann\_get\_connection\_rate**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

Obtém a taxa de conexão usada quando a rede foi criada.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

A taxa de conexão usada quando a rede foi criada, ou **`false`** em caso de erro.

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
