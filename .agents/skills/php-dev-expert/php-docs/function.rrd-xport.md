# Exporta as informações sobre o banco de dados RRD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrd-xport.php

---

# rrd\_xport

(PECL rrd >= 0.9.0)

rrd\_xport — Exporta as informações sobre o banco de dados RRD

### Descrição

function **rrd\_xport**([array](language.types.array.md) `$options`): [array](language.types.array.md)

Exporta as informações sobre o arquivo de banco de dados RRD. Esses dados podem ser convertidos
para um arquivo XML por meio de um script PHP de espaço do usuário e, em seguida, restaurados
como um arquivo de banco de dados RRD.

### Parâmetros

`options`
:   Várias opções para exportação, veja a página de manual de rrd xport.

### Valor Retornado

Array com informações sobre o arquivo de banco de dados RRD, ou **`false`** em caso de falha.

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
