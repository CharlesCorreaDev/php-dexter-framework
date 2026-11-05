# A classe RRDGraph

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.rrdgraph.php

---

# A classe RRDGraph

(PECL rrd >= 0.9.0)

## Introdução

Classe para exportar dados do banco de dados RRD para arquivo de imagem.

## Resumo da classe

class **RRDGraph**
{

/\* Métodos \*/

public function [\_\_construct](rrdgraph.construct.md)([string](language.types.string.md) `$path`)

public function [save](rrdgraph.save.md)(): [array](language.types.array.md)

public function [saveVerbose](rrdgraph.saveverbose.md)(): [array](language.types.array.md)

public function [setOptions](rrdgraph.setoptions.md)([array](language.types.array.md) `$options`): [void](language.types.void.md)

}

## Índice

- [RRDGraph::\_\_construct](rrdgraph.construct.md) — Cria uma nova instância de RRDGraph
- [RRDGraph::save](rrdgraph.save.md) — Salva o resultado da consulta na imagem
- [RRDGraph::saveVerbose](rrdgraph.saveverbose.md) — Salva a consulta ao banco de dados RRD na imagem e retorna as informações detalhadas
  sobre o gráfico gerado
- [RRDGraph::setOptions](rrdgraph.setoptions.md) — Define as opções para exportação do gráfico rrd

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
