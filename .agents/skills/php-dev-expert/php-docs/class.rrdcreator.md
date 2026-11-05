# A classe RRDCreator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.rrdcreator.php

---

# A classe RRDCreator

(PECL rrd >= 0.9.0)

## Introdução

Classe para criação de arquivo de banco de dados RRD.

## Resumo da classe

class **RRDCreator**
{

/\* Métodos \*/

public function [\_\_construct](rrdcreator.construct.md)([string](language.types.string.md) `$path`, [string](language.types.string.md) `$startTime` = ?, [int](language.types.integer.md) `$step` = 0)

public function [addArchive](rrdcreator.addarchive.md)([string](language.types.string.md) `$description`): [void](language.types.void.md)

public function [addDataSource](rrdcreator.adddatasource.md)([string](language.types.string.md) `$description`): [void](language.types.void.md)

public function [save](rrdcreator.save.md)(): [bool](language.types.boolean.md)

}

## Índice

- [RRDCreator::addArchive](rrdcreator.addarchive.md) — Adiciona RRA - arquivo de valores de dados para cada fonte de dados
- [RRDCreator::addDataSource](rrdcreator.adddatasource.md) — Adiciona definição de fonte de dados para banco de dados RRD
- [RRDCreator::\_\_construct](rrdcreator.construct.md) — Cria uma nova instância de RRDCreator
- [RRDCreator::save](rrdcreator.save.md) — Salva o banco de dados RRD em um arquivo

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
