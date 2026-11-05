# Cria uma imagem a partir de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrd-graph.php

---

# rrd\_graph

(PECL rrd >= 0.9.0)

rrd\_graph — Cria uma imagem a partir de dados

### Descrição

function **rrd\_graph**([string](language.types.string.md) `$filename`, [array](language.types.array.md) `$options`): [array](language.types.array.md)

Cria uma imagem para dados específicos do arquivo RRD.

### Parâmetros

`filename`
:   O nome do arquivo para o qual o gráfico será gerado. Geralmente, ele termina em
    `.png`, `.svg` ou
    `.eps`, dependendo do formato que você deseja gerar.

`options`
:   Opções para gerar imagem. Consulte a página de manual de rrd graph para todas as
    opções possíveis. Todas as opções (definições de dados, definições de variáveis, etc.)
    são permitidas.

### Valor Retornado

É retornado um array com informações sobre a imagem gerada, ou **`false`** em caso de falha.

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
