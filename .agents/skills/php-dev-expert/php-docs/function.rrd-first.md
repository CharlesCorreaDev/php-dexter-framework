# Obtém o registro de data e horário da primeira amostra do arquivo rrd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrd-first.php

---

# rrd\_first

(PECL rrd >= 0.9.0)

rrd\_first — Obtém o registro de data e horário da primeira amostra do arquivo rrd

### Descrição

function **rrd\_first**([string](language.types.string.md) `$file`, [int](language.types.integer.md) `$raaindex` = 0): [int](language.types.integer.md)

Retorna a primeira amostra de dados do RRA especificado do arquivo RRD.

### Parâmetros

`file`
:   Nome do arquivo de banco de dados RRD.

`raaindex`
:   Número de índice do RRA a ser examinado. O valor padrão é 0.

### Valor Retornado

Número inteiro de timestamp unix, ou **`false`** em caso de falha.

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
