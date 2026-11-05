# Define onde os erros são registrados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-error-log.php

---

# fann\_set\_error\_log

(PECL fann >= 1.0.0)

fann\_set\_error\_log — Define onde os erros são registrados

### Descrição

function **fann\_set\_error\_log**([resource](language.types.resource.md) `$errdat`, [string](language.types.string.md) `$log_file`): [void](language.types.void.md)

Define onde os erros são registrados.

### Parâmetros

`errdat`
:   Um [resource](language.types.resource.md) de rede neural ou um [resource](language.types.resource.md) de dados de treinamento da rede neural.

`log_file`
:   O caminho para o arquivo de registro.

### Valor Retornado

Nenhum valor é retornado.

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
