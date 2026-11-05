# Exibe a string de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-print-error.php

---

# fann\_print\_error

(PECL fann >= 1.0.0)

fann\_print\_error — Exibe a string de erro

### Descrição

function **fann\_print\_error**([resource](language.types.resource.md) `$errdat`): [void](language.types.void.md)

Exibe a string de erro.

### Parâmetros

`errdat`
:   Um [resource](language.types.resource.md) de rede neural ou um [resource](language.types.resource.md) de dados de treinamento da rede neural.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

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
