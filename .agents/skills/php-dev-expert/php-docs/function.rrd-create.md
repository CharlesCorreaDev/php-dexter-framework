# Cria arquivo de banco de dados rrd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrd-create.php

---

# rrd\_create

(PECL rrd >= 0.9.0)

rrd\_create — Cria arquivo de banco de dados rrd

### Descrição

function **rrd\_create**([string](language.types.string.md) `$filename`, [array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

Cria o arquivo de banco de dados rrd.

### Parâmetros

`filename`
:   Nome do arquivo para o rrd recém-criado.

`options`
:   Opções para criação de rrd - lista de strings. Consulte a página de manual de rrd create
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
