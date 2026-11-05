# Cria uma nova instância de RRDCreator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rrdcreator.construct.php

---

# RRDCreator::\_\_construct

(PECL rrd >= 0.9.0)

RRDCreator::\_\_construct — Cria uma nova instância de [RRDCreator](class.rrdcreator.md)

### Descrição

public function **RRDCreator::\_\_construct**([string](language.types.string.md) `$path`, [string](language.types.string.md) `$startTime` = ?, [int](language.types.integer.md) `$step` = 0)

Cria uma nova instância de [RRDCreator](class.rrdcreator.md).

### Parâmetros

`path`
:   Caminho para o arquivo de banco de dados RRD recém-criado.

`startTime`
:   Tempo para o primeiro valor no banco de dados RRD. O parâmetro suporta todos os formatos
    que são suportados pela chamada rrd create.

int`step`
:   Intervalo base em segundos com o qual os dados serão alimentados no banco de dados RRD.

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
