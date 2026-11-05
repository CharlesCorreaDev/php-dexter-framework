# Fecha um documento PostScript

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-close.php

---

# ps\_close

(PECL ps >= 1.1.0)

ps\_close — Fecha um documento PostScript

### Descrição

function **ps\_close**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Fecha o documento PostScript.

Esta função grava a parte final do documento PostScript.
Ela também grava a árvore de favoritos. **ps\_close()**
não libera nenhum recurso, o que é feito por [ps\_delete()](function.ps-delete.md).

Esta função também é chamada por [ps\_delete()](function.ps-delete.md) se
não tiver sido chamada antes.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_open\_file()](function.ps-open-file.md) - Abre um arquivo para saída
- [ps\_delete()](function.ps-delete.md) - Exclui todos os recursos de um documento PostScript

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
