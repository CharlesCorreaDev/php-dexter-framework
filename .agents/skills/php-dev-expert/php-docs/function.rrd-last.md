# Obtém o registro de data e horário Unix da última amostra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrd-last.php

---

# rrd\_last

(PECL rrd >= 0.9.0)

rrd\_last — Obtém o registro de data e horário Unix da última amostra

### Descrição

function **rrd\_last**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)

Retorna o registro de data e horário UNIX da atualização mais recente do banco de dados RRD.

### Parâmetros

`filename`
:   Nome do arquivo de banco de dados RRD.

### Valor Retornado

Inteiro como registro de data e horário Unix dos dados mais recentes do banco de dados RRD.

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
