# Exibe texto na posição fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-show-xy.php

---

# ps\_show\_xy

(PECL ps >= 1.1.0)

ps\_show\_xy — Exibe texto na posição fornecida

### Descrição

function **ps\_show\_xy**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$text`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

Exibe um texto na posição fornecida.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`text`
:   O texto a ser produzido.

`x`
:   Coordenada x do canto inferior esquerdo da caixa que envolve o texto.

`y`
:   Coordenada y do canto inferior esquerdo da caixa que envolve o texto.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_continue\_text()](function.ps-continue-text.md) - Continua o texto na próxima linha
- [ps\_show()](function.ps-show.md) - Exibe texto

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
