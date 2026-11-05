# Busca o buffer completo contendo os dados PS gerados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-get-buffer.php

---

# ps\_get\_buffer

(PECL ps >= 1.1.0)

ps\_get\_buffer — Busca o buffer completo contendo os dados PS gerados

### Descrição

function **ps\_get\_buffer**([resource](language.types.resource.md) `$psdoc`): [string](language.types.string.md)

Esta função ainda não foi implementada. Ela sempre retornará uma string
vazia. A ideia para uma implementação posterior é gravar o conteúdo
do arquivo PostScript em um buffer interno se a criação na memória for
solicitada e recuperar o conteúdo do buffer com esta função.
Atualmente, os documentos
criados na memória são enviados ao navegador sem buffer.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Veja também

- [ps\_open\_file()](function.ps-open-file.md) - Abre um arquivo para saída

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
