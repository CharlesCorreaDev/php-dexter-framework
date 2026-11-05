# Obtém a geometria de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-string-geometry.php

---

# ps\_string\_geometry

(PECL ps >= 1.2.0)

ps\_string\_geometry — Obtém a geometria de uma string

### Descrição

function **ps\_string\_geometry**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$text`,  
    [int](language.types.integer.md) `$fontid` = 0,  
    [float](language.types.float.md) `$size` = 0.0  
): [array](language.types.array.md)

Esta função é semelhante a [ps\_stringwidth()](function.ps-stringwidth.md), mas retorna
um array de dimensões contendo a largura, a linha ascendente e a linha descendente
do texto.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`text`
:   O texto para o qual a geometria deve ser calculada.

`fontid`
:   O identificador da fonte a ser usada. Se nenhuma fonte for especificada,
    a fonte atual será usada.

`size`
:   O tamanho da fonte. Se nenhum tamanho for especificado, o tamanho atual
    será usado.

### Valor Retornado

Um array com as dimensões de uma string. O elemento 'width' contém a
largura da string conforme retornado por [ps\_stringwidth()](function.ps-stringwidth.md). O
elemento 'descender' contém o descendente máximo e 'ascender' o
ascendente máximo da string.

### Veja também

- [ps\_continue\_text()](function.ps-continue-text.md) - Continua o texto na próxima linha
- [ps\_stringwidth()](function.ps-stringwidth.md) - Obtém a largura de uma string

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
