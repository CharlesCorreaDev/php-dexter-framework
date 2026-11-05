# Obtém o nome de um glifo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-symbol-name.php

---

# ps\_symbol\_name

(PECL ps >= 1.2.0)

ps\_symbol\_name — Obtém o nome de um glifo

### Descrição

function **ps\_symbol\_name**([resource](language.types.resource.md) `$psdoc`, [int](language.types.integer.md) `$ord`, [int](language.types.integer.md) `$fontid` = 0): [string](language.types.string.md)

Esta função precisa de um arquivo de métricas de fonte da Adobe para saber quais glifos estão
disponíveis.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`ord`
:   O parâmetro `ord` é a posição do glifo
    no vetor de codificação da fonte.

`fontid`
:   O identificador da fonte a ser usada. Se nenhuma fonte for especificada,
    a fonte atual será usada.

### Valor Retornado

O nome de um glifo na fonte fornecida.

### Veja também

- [ps\_symbol()](function.ps-symbol.md) - Gera um glifo
- [ps\_symbol\_width()](function.ps-symbol-width.md) - Obtém a largura de um glifo

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
