# Explicando mensagens de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.file-upload.errors.php

---

## Explicando mensagens de erro

O PHP retorna um código de erro apropriado na array do arquivo.
O código de erro pode ser encontrado no segmento
`error` da array que é criada pelo PHP durante o envio do arquivo.
Em outras palavras, o erro pode ser encontrado em
[$\_FILES['userfile']['error']](reserved.variables.files.md).

O valor desse código de erro é uma das
constantes
**`UPLOAD_ERR_*`**.

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
