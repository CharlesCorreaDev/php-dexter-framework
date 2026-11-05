# Atualiza o banco de dados RRD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrd-update.php

---

# rrd\_update

(PECL rrd >= 0.9.0)

rrd\_update — Atualiza o banco de dados RRD

### Descrição

function **rrd\_update**([string](language.types.string.md) `$filename`, [array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

Atualiza o arquivo de banco de dados RRD. Os dados de entrada são interpolados temporalmente de acordo com as
propriedades do arquivo de banco de dados RRD.

### Parâmetros

`filename`
:   Nome do arquivo do banco de dados RRD. Este banco de dados será atualizado.

`options`
:   Opções para atualizar o banco de dados RRD. Esta é uma lista de strings. Consulte a página de manual de rrd update
    para a lista completa de opções.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
