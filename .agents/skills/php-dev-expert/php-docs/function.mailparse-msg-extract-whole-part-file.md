# Extrai uma seção da mensagem incluindo cabeçalhos sem decodificar a codificação de transferência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-msg-extract-whole-part-file.php

---

# mailparse\_msg\_extract\_whole\_part\_file

(PECL mailparse >= 0.9.0)

mailparse\_msg\_extract\_whole\_part\_file — Extrai uma seção da mensagem incluindo cabeçalhos sem decodificar a codificação de transferência

### Descrição

function **mailparse\_msg\_extract\_whole\_part\_file**([resource](language.types.resource.md) `$mimemail`, [string](language.types.string.md) `$filename`, [callable](language.types.callable.md) `$callbackfunc` = ?): [string](language.types.string.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`mimemail`
:   Um recurso `MIME` válido.

`filename`

`callbackfunc`

### Valor Retornado

### Veja também

- [mailparse\_msg\_extract\_part()](function.mailparse-msg-extract-part.md) - Extrai/decodifica uma seção da mensagem
- [mailparse\_msg\_extract\_part\_file()](function.mailparse-msg-extract-part-file.md) - Extrai/decodifica uma seção da mensagem

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
