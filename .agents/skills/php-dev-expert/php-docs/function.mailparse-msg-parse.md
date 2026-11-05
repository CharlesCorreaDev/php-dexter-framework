# Faz o parse incremental de dados no buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-msg-parse.php

---

# mailparse\_msg\_parse

(PECL mailparse >= 0.9.0)

mailparse\_msg\_parse — Faz o parse incremental de dados no buffer

### Descrição

function **mailparse\_msg\_parse**([resource](language.types.resource.md) `$mimemail`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Faz o parse incremental de dados no recurso de correio MIME fornecido.

Essa função permite transmitir porções de um arquivo de cada vez, em vez de
ler e analisar o arquivo inteiro.

### Parâmetros

`mimemail`
:   Um recurso `MIME` válido.

`data`
:   > **Nota**:
    >
    > O último trecho de `data` deve terminar com uma quebra de linha
    > (`CRLF`); caso contrário, a última linha da mensagem não será analisada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
