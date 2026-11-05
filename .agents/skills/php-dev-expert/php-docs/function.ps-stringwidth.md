# Obtém a largura de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-stringwidth.php

---

# ps\_stringwidth

(PECL ps >= 1.1.0)

ps\_stringwidth — Obtém a largura de uma string

### Descrição

function **ps\_stringwidth**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$text`,  
    [int](language.types.integer.md) `$fontid` = 0,  
    [float](language.types.float.md) `$size` = 0.0  
): [float](language.types.float.md)

Calcula a largura de uma string em pontos se ela foi gerada
na fonte e no tamanho de fonte fornecidos.
Esta função precisa de um arquivo de métricas
de fonte da Adobe para calcular a largura precisa. Se o kerning estiver ativado,
ele será levado em consideração.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`text`
:   O texto para o qual a largura deve ser calculada.

`fontid`
:   O identificador da fonte a ser usada. Se nenhuma fonte for especificada,
    a fonte atual será usada.

`size`
:   O tamanho da fonte. Se nenhum tamanho for especificado, o tamanho atual
    será usado.

### Valor Retornado

Largura de uma string em pontos.

### Veja também

- [ps\_string\_geometry()](function.ps-string-geometry.md) - Obtém a geometria de uma string

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
