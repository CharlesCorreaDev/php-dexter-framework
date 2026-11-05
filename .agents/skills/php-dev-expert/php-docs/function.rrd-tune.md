# Ajusta algumas opções de cabeçalho de arquivo de banco de dados RRD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrd-tune.php

---

# rrd\_tune

(PECL rrd >= 0.9.0)

rrd\_tune — Ajusta algumas opções de cabeçalho de arquivo de banco de dados RRD

### Descrição

function **rrd\_tune**([string](language.types.string.md) `$filename`, [array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

Altera algumas opções no arquivo de cabeçalho do banco de dados RRD. Por exemplo, renomeia a origem para
os dados, etc.

### Parâmetros

`filename`
:   Nome do arquivo de banco de dados RRD.

`options`
:   Opções com propriedades de arquivo de banco de dados RRD que serão alteradas. Consulte a
    página de manual de rrd tune para obter detalhes.

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
