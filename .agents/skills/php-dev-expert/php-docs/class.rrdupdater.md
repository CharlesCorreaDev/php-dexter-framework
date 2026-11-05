# A classe RRDUpdater

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.rrdupdater.php

---

# A classe RRDUpdater

(PECL rrd >= 0.9.0)

## Introdução

Classe para atualização de arquivo de banco de dados RDD.

## Resumo da classe

class **RRDUpdater**
{

/\* Métodos \*/

public function [\_\_construct](rrdupdater.construct.md)([string](language.types.string.md) `$path`)

public function [update](rrdupdater.update.md)([array](language.types.array.md) `$values`, [string](language.types.string.md) `$time`
 = time()
): [bool](language.types.boolean.md)

}

## Índice

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
