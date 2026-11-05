# Adiciona definição de fonte de dados para banco de dados RRD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rrdcreator.adddatasource.php

---

# RRDCreator::addDataSource

(PECL rrd >= 0.9.0)

RRDCreator::addDataSource — Adiciona definição de fonte de dados para banco de dados RRD

### Descrição

public function **RRDCreator::addDataSource**([string](language.types.string.md) `$description`): [void](language.types.void.md)

O RRD pode aceitar entradas de diversas fontes de dados (DS), por
exemplo, tráfego de entrada e saída. Este método adiciona a fonte de dados
por descrição. É necessário chamar este método para cada fonte de dados.

### Parâmetros

`description`
:   Definição de fonte de dados - DS. Este formato é o mesmo da definição de DS no comando
    rrd create. Consulte a página de manual do comando rrd create para obter mais detalhes.

### Valor Retornado

Nenhum valor é retornado.

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
