# Restaura o arquivo RRD a partir de um XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrd-restore.php

---

# rrd\_restore

(PECL rrd >= 0.9.0)

rrd\_restore — Restaura o arquivo RRD a partir de um XML

### Descrição

function **rrd\_restore**([string](language.types.string.md) `$xml_file`, [string](language.types.string.md) `$rrd_file`, [array](language.types.array.md) `$options` = ?): [bool](language.types.boolean.md)

Restaura o arquivo RRD a partir de um XML.

### Parâmetros

`xml_file`
:   Nome do arquivo XML com o despejo do arquivo de banco de dados RRD original.

`rrd_file`
:   Nome do arquivo de banco de dados RRD restaurado.

`options`
:   Array de opções para restauração. Consulte a página de manual de rrd restore.

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
