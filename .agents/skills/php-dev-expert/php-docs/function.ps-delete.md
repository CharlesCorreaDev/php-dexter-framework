# Exclui todos os recursos de um documento PostScript

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-delete.php

---

# ps\_delete

(PECL ps >= 1.1.0)

ps\_delete — Exclui todos os recursos de um documento PostScript

### Descrição

function **ps\_delete**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Principalmente, libera a memória usada pelo documento. Também fecha um arquivo, caso ele não tenha sido
fechado antes com [ps\_close()](function.ps-close.md). Em qualquer caso, você deve
fechar o arquivo com [ps\_close()](function.ps-close.md) antes, porque
[ps\_close()](function.ps-close.md) não apenas fecha o arquivo, mas também gera a
parte final contendo comentários PostScript, como o número de páginas no
documento e a hierarquia de marcadores.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_close()](function.ps-close.md) - Fecha um documento PostScript

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
