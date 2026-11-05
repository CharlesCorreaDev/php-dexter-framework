# Define o fator de escala

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-scale.php

---

# ps\_scale

(PECL ps >= 1.1.0)

ps\_scale — Define o fator de escala

### Descrição

function **ps\_scale**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

Define a escala horizontal e vertical do sistema de coordenadas.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`x`
:   Fator de escala na direção horizontal.

`y`
:   Fator de escala na direção vertical.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_rotate()](function.ps-rotate.md) - Define o fator de rotação
- [ps\_translate()](function.ps-translate.md) - Defina o ponto de translação

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
