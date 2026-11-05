# Retorna o número do último erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-errno.php

---

# fann\_get\_errno

(PECL fann >= 1.0.0)

fann\_get\_errno — Retorna o número do último erro

### Descrição

function **fann\_get\_errno**([resource](language.types.resource.md) `$errdat`): [int](language.types.integer.md)

Retorna o número do último erro.

### Parâmetros

`errdat`
:   Um [resource](language.types.resource.md) de rede neural ou um [resource](language.types.resource.md) de dados de treinamento da rede neural.

### Valor Retornado

O número do erro, ou **`false`** em caso de erro.

### Veja também

- [fann\_reset\_errno()](function.fann-reset-errno.md) - Redefine o número do último erro
- [fann\_get\_errstr()](function.fann-get-errstr.md) - Retorna a última mensagem de erro

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
