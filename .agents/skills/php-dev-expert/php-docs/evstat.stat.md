# Inicia a chamada stat

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evstat.stat.php

---

# EvStat::stat

(PECL ev >= 0.2.0)

EvStat::stat — Inicia a chamada stat

### Descrição

public
function **EvStat::stat**(): [bool](language.types.boolean.md)

Inicia a chamada stat (atualiza cache interno). Faz estatísticas (usando
`lstat`)
do caminho
path
especificado no observador e define para os valores encontrados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se
path
existir. Caso contrário, **`false`**.

### Veja também

- [EvStat::attr()](evstat.attr.md) - Retorna os valores detectados mais recentemente por Ev
- [EvStat::prev()](evstat.prev.md) - Retorna o conjunto anterior de valores retornados por EvStat::attr

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
