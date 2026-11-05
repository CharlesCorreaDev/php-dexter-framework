# Busca os dados para o gráfico como um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrd-fetch.php

---

# rrd\_fetch

(PECL rrd >= 0.9.0)

rrd\_fetch — Busca os dados para o gráfico como um array

### Descrição

function **rrd\_fetch**([string](language.types.string.md) `$filename`, [array](language.types.array.md) `$options`): [array](language.types.array.md)

Obtém dados para a saída do gráfico do arquivo de banco de dados RRD como um array. Esta função
tem o mesmo resultado que [rrd\_graph()](function.rrd-graph.md), mas os dados recuperados são
retornados como um array, sem a criação de um arquivo de imagem.

### Parâmetros

`filename`
:   Nome do arquivo de banco de dados RRD.

`options`
:   Array de opções para especificação de resolução.

### Valor Retornado

Retorna informações sobre dados gráficos recuperados.

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
