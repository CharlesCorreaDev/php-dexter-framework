# RRDtool

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.rrd.php

---

# RRDtool

# Introdução

A extensão PECL/rrd fornece vinculações à biblioteca C do RRDtool.
O RRDtool é um sistema de registro e geração de gráficos de dados de alto desempenho,
padrão da indústria e de código aberto, para dados de séries temporais.

A página inicial do RRDtool é [» https://www.mrtg.org/rrdtool/](https://www.mrtg.org/rrdtool/).

- [Instalação/Configuração](rrd.setup.md)
  - [Dependências](rrd.requirements.md)
  - [Instalação](rrd.installation.md)
- [Examples](rrd.examples.md)
  - [Exemplo procedural de PECL/rrd](rrd.examples-procedural.md)
  - [Exemplo de PECL/rrd em programação OO](rrd.examples-oop.md)
- [Funções de RRD](ref.rrd.md)
  - [rrd\_create](function.rrd-create.md) — Cria arquivo de banco de dados rrd
  - [rrd\_error](function.rrd-error.md) — Obtém a última mensagem de erro
  - [rrd\_fetch](function.rrd-fetch.md) — Busca os dados para o gráfico como um array
  - [rrd\_first](function.rrd-first.md) — Obtém o registro de data e horário da primeira amostra do arquivo rrd
  - [rrd\_graph](function.rrd-graph.md) — Cria uma imagem a partir de dados
  - [rrd\_info](function.rrd-info.md) — Obtém informações sobre o arquivo rrd
  - [rrd\_last](function.rrd-last.md) — Obtém o registro de data e horário Unix da última amostra
  - [rrd\_lastupdate](function.rrd-lastupdate.md) — Obtém informações sobre os últimos dados atualizados
  - [rrd\_restore](function.rrd-restore.md) — Restaura o arquivo RRD a partir de um XML
  - [rrd\_tune](function.rrd-tune.md) — Ajusta algumas opções de cabeçalho de arquivo de banco de dados RRD
  - [rrd\_update](function.rrd-update.md) — Atualiza o banco de dados RRD
  - [rrd\_version](function.rrd-version.md) — Obtém informações sobre a biblioteca rrdtool subjacente
  - [rrd\_xport](function.rrd-xport.md) — Exporta as informações sobre o banco de dados RRD
  - [rrdc\_disconnect](function.rrdc-disconnect.md) — Fecha qualquer conexão pendente com o daemon de cache rrd
- [RRDCreator](class.rrdcreator.md) — A classe RRDCreator
  - [RRDCreator::addArchive](rrdcreator.addarchive.md) — Adiciona RRA - arquivo de valores de dados para cada fonte de dados
  - [RRDCreator::addDataSource](rrdcreator.adddatasource.md) — Adiciona definição de fonte de dados para banco de dados RRD
  - [RRDCreator::\_\_construct](rrdcreator.construct.md) — Cria uma nova instância de RRDCreator
  - [RRDCreator::save](rrdcreator.save.md) — Salva o banco de dados RRD em um arquivo
- [RRDGraph](class.rrdgraph.md) — A classe RRDGraph
  - [RRDGraph::\_\_construct](rrdgraph.construct.md) — Cria uma nova instância de RRDGraph
  - [RRDGraph::save](rrdgraph.save.md) — Salva o resultado da consulta na imagem
  - [RRDGraph::saveVerbose](rrdgraph.saveverbose.md) — Salva a consulta ao banco de dados RRD na imagem e retorna as informações detalhadas
    sobre o gráfico gerado
  - [RRDGraph::setOptions](rrdgraph.setoptions.md) — Define as opções para exportação do gráfico rrd
- [RRDUpdater](class.rrdupdater.md) — A classe RRDUpdater
  - [RRDUpdater::\_\_construct](rrdupdater.construct.md) — Cria uma nova instância de RRDUpdater
  - [RRDUpdater::update](rrdupdater.update.md) — Atualiza o arquivo de banco de dados RRD

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
