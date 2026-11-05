# Retorna a última mensagem de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-errstr.php

---

# fann\_get\_errstr

(PECL fann >= 1.0.0)

fann\_get\_errstr — Retorna a última mensagem de erro

### Descrição

function **fann\_get\_errstr**([resource](language.types.resource.md) `$errdat`): [string](language.types.string.md)

Retorna a última mensagem de erro.

### Parâmetros

`errdat`
:   Um [resource](language.types.resource.md) de rede neural ou um [resource](language.types.resource.md) de dados de treinamento da rede neural.

### Valor Retornado

A última mensagem de erro, ou **`false`** em caso de erro.

### Veja também

- [fann\_reset\_errstr()](function.fann-reset-errstr.md) - Redefine a string do último erro
- [fann\_get\_errno()](function.fann-get-errno.md) - Retorna o número do último erro

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
