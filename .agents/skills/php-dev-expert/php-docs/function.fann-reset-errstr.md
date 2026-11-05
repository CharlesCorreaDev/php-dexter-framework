# Redefine a string do último erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-reset-errstr.php

---

# fann\_reset\_errstr

(PECL fann >= 1.0.0)

fann\_reset\_errstr — Redefine a string do último erro

### Descrição

function **fann\_reset\_errstr**([resource](language.types.resource.md) `$errdat`): [void](language.types.void.md)

Redefine a string do último erro.

### Parâmetros

`errdat`
:   Um [resource](language.types.resource.md) de rede neural ou um [resource](language.types.resource.md) de dados de treinamento da rede neural.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [fann\_get\_errstr()](function.fann-get-errstr.md) - Retorna a última mensagem de erro
- [fann\_reset\_errno()](function.fann-reset-errno.md) - Redefine o número do último erro

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
