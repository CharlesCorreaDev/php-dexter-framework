# Define a fonte a ser usada na saída seguinte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setfont.php

---

# ps\_setfont

(PECL ps >= 1.1.0)

ps\_setfont — Define a fonte a ser usada na saída seguinte

### Descrição

function **ps\_setfont**([resource](language.types.resource.md) `$psdoc`, [int](language.types.integer.md) `$fontid`, [float](language.types.float.md) `$size`): [bool](language.types.boolean.md)

Define uma fonte, que deve ser carregada previamente com
[ps\_findfont()](function.ps-findfont.md). A saída de texto sem definir uma fonte
resulta em erro.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`fontid`
:   O identificador de fonte retornado por [ps\_findfont()](function.ps-findfont.md).

`size`
:   O tamanho da fonte.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_findfont()](function.ps-findfont.md) - Carrega uma fonte
- [ps\_set\_text\_pos()](function.ps-set-text-pos.md) - Define a posição para saída de texto para um exemplo

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
