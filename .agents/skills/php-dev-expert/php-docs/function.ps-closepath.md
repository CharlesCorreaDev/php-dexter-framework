# Fecha caminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-closepath.php

---

# ps\_closepath

(PECL ps >= 1.1.0)

ps\_closepath — Fecha caminho

### Descrição

function **ps\_closepath**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Conecta o último ponto com o primeiro ponto de um caminho. O caminho
resultante pode ser usado para traçar, preencher, recortar, etc.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_clip()](function.ps-clip.md) - Recorta o desenho no caminho atual
- [ps\_closepath\_stroke()](function.ps-closepath-stroke.md) - Fecha e traça o caminho

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
