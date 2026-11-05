# Obtém informações sobre os últimos dados atualizados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrd-lastupdate.php

---

# rrd\_lastupdate

(PECL rrd >= 0.9.0)

rrd\_lastupdate — Obtém informações sobre os últimos dados atualizados

### Descrição

function **rrd\_lastupdate**([string](language.types.string.md) `$filename`): [array](language.types.array.md)

Obtém um array do registro de data e horário UNIX e os valores armazenados para cada data na
atualização mais recente do arquivo de banco de dados RRD.

### Parâmetros

`file`
:   Nome do arquivo de banco de dados RRD.

### Valor Retornado

Array de informações sobre a última atualização, ou **`false`** em caso de falha.

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
