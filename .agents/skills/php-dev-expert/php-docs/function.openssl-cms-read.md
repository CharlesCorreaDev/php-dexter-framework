# Exporta o arquivo CMS para um array de certificados PEM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-cms-read.php

---

# openssl\_cms\_read

(PHP 8)

openssl\_cms\_read — Exporta o arquivo CMS para um array de certificados PEM

### Descrição

function **openssl\_cms\_read**([string](language.types.string.md) `$input_filename`, [array](language.types.array.md) `&$certificates`): [bool](language.types.boolean.md)

Realiza exatamente o análogo de [openssl\_pkcs7\_read()](function.openssl-pkcs7-read.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`input_filename`

`certificates`

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
