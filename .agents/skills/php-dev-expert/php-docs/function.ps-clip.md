# Recorta o desenho no caminho atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-clip.php

---

# ps\_clip

(PECL ps >= 1.1.0)

ps\_clip — Recorta o desenho no caminho atual

### Descrição

function **ps\_clip**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Pega o caminho atual e o utiliza para definir a borda de uma área de recorte.
Tudo o que for desenhado fora dessa área não ficará visível.

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
