# Extrai/decodifica uma seção da mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-msg-extract-part.php

---

# mailparse\_msg\_extract\_part

(PECL mailparse >= 0.9.0)

mailparse\_msg\_extract\_part — 
Extrai/decodifica uma seção da mensagem

### Descrição

function **mailparse\_msg\_extract\_part**([resource](language.types.resource.md) `$mimemail`, [string](language.types.string.md) `$msgbody`, [callable](language.types.callable.md) `$callbackfunc` = ?): [void](language.types.void.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`mimemail`
:   Um recurso `MIME` válido.

`msgbody`

`callbackfunc`

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [mailparse\_msg\_extract\_part\_file()](function.mailparse-msg-extract-part-file.md) - Extrai/decodifica uma seção da mensagem
- [mailparse\_msg\_extract\_whole\_part\_file()](function.mailparse-msg-extract-whole-part-file.md) - Extrai uma seção da mensagem incluindo cabeçalhos sem decodificar a codificação de transferência

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
