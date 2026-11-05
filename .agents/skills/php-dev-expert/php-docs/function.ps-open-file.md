# Abre um arquivo para saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-open-file.php

---

# ps\_open\_file

(PECL ps >= 1.1.0)

ps\_open\_file — Abre um arquivo para saída

### Descrição

function **ps\_open\_file**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$filename` = ?): [bool](language.types.boolean.md)

Cria um novo arquivo no disco e grava o documento PostScript nele. O
arquivo será fechado quando [ps\_close()](function.ps-close.md) for chamado.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`filename`
:   O nome do arquivo postscript.
    Se `filename` não for passado, o documento será
    criado na memória e toda a saída irá diretamente para o navegador.

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
