# Salva a consulta ao banco de dados RRD na imagem e retorna as informações detalhadas
   sobre o gráfico gerado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rrdgraph.saveverbose.php

---

# RRDGraph::saveVerbose

(PECL rrd >= 0.9.0)

RRDGraph::saveVerbose — Salva a consulta ao banco de dados RRD na imagem e retorna as informações detalhadas
sobre o gráfico gerado

### Descrição

public function **RRDGraph::saveVerbose**(): [array](language.types.array.md)

Salva a consulta ao banco de dados RRD em um arquivo de imagem definido pelo método [RRDGraph::\_\_construct()](rrdgraph.construct.md)
e retorna as informações detalhadas sobre o gráfico gerado. Se "-" for usado
como nome do arquivo de imagem, os dados da imagem também serão retornados no array de resultados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com informações detalhadas sobre a imagem gerada, ou **`false`** em caso de falha.

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
