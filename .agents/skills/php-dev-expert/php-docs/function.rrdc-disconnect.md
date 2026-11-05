# Fecha qualquer conexão pendente com o daemon de cache rrd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rrdc-disconnect.php

---

# rrdc\_disconnect

(PECL rrd >= 1.1.2)

rrdc\_disconnect — Fecha qualquer conexão pendente com o daemon de cache rrd

### Descrição

function **rrdc\_disconnect**(): [void](language.types.void.md)

Fecha qualquer conexão pendente com o daemon de cache rrd

Esta função é chamada automaticamente quando todo o processo PHP é encerrado.
Depende do SAPI utilizado. Por exemplo, ela é chamada automaticamente ao final
de um script de linha de comando.

Fica a critério do usuário chamar esta função ao final de cada solicitação
ou não.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
