# Obtém a largura de um glifo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-symbol-width.php

---

# ps\_symbol\_width

(PECL ps >= 1.2.0)

ps\_symbol\_width — Obtém a largura de um glifo

### Descrição

function **ps\_symbol\_width**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [int](language.types.integer.md) `$ord`,  
    [int](language.types.integer.md) `$fontid` = 0,  
    [float](language.types.float.md) `$size` = 0.0  
): [float](language.types.float.md)

Calcula a largura de um glifo em pontos se ele foi gerado na fonte e no tamanho de fonte
fornecidos. Esta função precisa de um arquivo de métricas de fonte da Adobe para
calcular a largura precisa.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`ord`
:   A posição do glifo no vetor de codificação da fonte.

`fontid`
:   O identificador da fonte a ser usada. Se nenhuma fonte for especificada,
    a fonte atual será usada.

`size`
:   O tamanho da fonte. Se nenhum tamanho for especificado, o tamanho atual
    será usado.

### Valor Retornado

A largura de um glifo em pontos.

### Veja também

- [ps\_symbol()](function.ps-symbol.md) - Gera um glifo
- [ps\_symbol\_name()](function.ps-symbol-name.md) - Obtém o nome de um glifo

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
