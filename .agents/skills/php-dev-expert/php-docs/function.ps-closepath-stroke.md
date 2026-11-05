# Fecha e traça o caminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-closepath-stroke.php

---

# ps\_closepath\_stroke

(PECL ps >= 1.1.0)

ps\_closepath\_stroke — Fecha e traça o caminho

### Descrição

function **ps\_closepath\_stroke**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Conecta o último ponto com o primeiro ponto de um caminho e desenha a linha fechada
resultante.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_closepath()](function.ps-closepath.md) - Fecha caminho

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
