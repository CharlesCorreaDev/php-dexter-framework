# Redefine o número do último erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-reset-errno.php

---

# fann\_reset\_errno

(PECL fann >= 1.0.0)

fann\_reset\_errno — Redefine o número do último erro

### Descrição

function **fann\_reset\_errno**([resource](language.types.resource.md) `$errdat`): [void](language.types.void.md)

Redefine o número do último erro.

### Parâmetros

`errdat`
:   Um [resource](language.types.resource.md) de rede neural ou um [resource](language.types.resource.md) de dados de treinamento da rede neural.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [fann\_get\_errno()](function.fann-get-errno.md) - Retorna o número do último erro
- [fann\_reset\_errstr()](function.fann-reset-errstr.md) - Redefine a string do último erro

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
