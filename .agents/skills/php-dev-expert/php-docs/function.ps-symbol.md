# Gera um glifo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-symbol.php

---

# ps\_symbol

(PECL ps >= 1.2.0)

ps\_symbol — Gera um glifo

### Descrição

function **ps\_symbol**([resource](language.types.resource.md) `$psdoc`, [int](language.types.integer.md) `$ord`): [bool](language.types.boolean.md)

Gera o glifo na posição `ord` no vetor de codificação
da fonte atual. A codificação de uma fonte pode ser
definida ao carregar a fonte com [ps\_findfont()](function.ps-findfont.md).

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`ord`
:   A posição do glifo no vetor de codificação da fonte.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_symbol\_name()](function.ps-symbol-name.md) - Obtém o nome de um glifo
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
