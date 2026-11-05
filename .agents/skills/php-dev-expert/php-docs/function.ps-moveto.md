# Define o ponto atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-moveto.php

---

# ps\_moveto

(PECL ps >= 1.1.0)

ps\_moveto — Define o ponto atual

### Descrição

function **ps\_moveto**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

Define o ponto atual para novas coordenadas. Se esta for a primeira chamada de
**ps\_moveto()** após o término de um caminho anterior, ela
iniciará um novo caminho. Se esta função for chamada no meio de um caminho,
ela apenas definirá o ponto atual e iniciará um subcaminho.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`x`
:   Coordenada x do ponto de destino.

`y`
:   Coordenada y do ponto de destino.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_lineto()](function.ps-lineto.md) - Desenha uma linha

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
