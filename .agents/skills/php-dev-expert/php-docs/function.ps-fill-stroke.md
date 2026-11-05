# Preenche e traça o caminho atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-fill-stroke.php

---

# ps\_fill\_stroke

(PECL ps >= 1.1.0)

ps\_fill\_stroke — Preenche e traça o caminho atual

### Descrição

function **ps\_fill\_stroke**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Preenche e desenha o caminho construído com funções de desenho
chamadas anteriormente, como [ps\_lineto()](function.ps-lineto.md).

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_fill()](function.ps-fill.md) - Preenche o caminho atual
- [ps\_stroke()](function.ps-stroke.md) - Desenha o caminho atual

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
