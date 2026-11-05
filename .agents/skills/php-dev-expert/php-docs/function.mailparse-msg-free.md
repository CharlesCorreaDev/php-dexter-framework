# Libera um recurso MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-msg-free.php

---

# mailparse\_msg\_free

(PECL mailparse >= 0.9.0)

mailparse\_msg\_free — Libera um recurso MIME

### Descrição

function **mailparse\_msg\_free**([resource](language.types.resource.md) `$mimemail`): [bool](language.types.boolean.md)

Libera um recurso `MIME`.

### Parâmetros

`mimemail`
:   Um recurso `MIME` válido alocado por
    [mailparse\_msg\_create()](function.mailparse-msg-create.md) ou
    [mailparse\_msg\_parse\_file()](function.mailparse-msg-parse-file.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [mailparse\_msg\_create()](function.mailparse-msg-create.md) - Cria um recurso de email MIME
- [mailparse\_msg\_parse\_file()](function.mailparse-msg-parse-file.md) - Faz o parsing de um arquivo

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
