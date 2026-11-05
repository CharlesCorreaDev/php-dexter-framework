# Adiciona RRA - arquivo de valores de dados para cada fonte de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rrdcreator.addarchive.php

---

# RRDCreator::addArchive

(PECL rrd >= 0.9.0)

RRDCreator::addArchive — Adiciona RRA - arquivo de valores de dados para cada fonte de dados

### Descrição

public function **RRDCreator::addArchive**([string](language.types.string.md) `$description`): [void](language.types.void.md)

Adiciona a definição de RRA por meio da descrição do arquivo. O arquivo consiste em
um número de valores de dados ou estatísticas para cada uma das fontes de dados (DS) definidas.
As fontes de dados são definidas pelo método [RRDCreator::addDataSource()](rrdcreator.adddatasource.md).
É necessário chamar este método para cada arquivo solicitado.

### Parâmetros

`description`
:   Definição de arquivo - RRA. Este formato é o mesmo da definição de RRA no comando
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
