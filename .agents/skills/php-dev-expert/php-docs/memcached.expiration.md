# Prazos de Expiração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.expiration.php

---

# Prazos de Expiração

Alguns comandos de armazenamento envolvem o envio de um valor de expiração (relativo a um
item ou a uma operação solicitada pelo cliente) para o servidor. Em todos esses
casos, o valor real enviado pode ser o tempo Unix (número de segundos
desde 1º de janeiro de 1970, como um número inteiro) ou um número de segundos a partir do
horário atual. Neste último caso, este número de segundos não pode ultrapassar
60\*60\*24\*30 (número de segundos em 30 dias); se o valor de expiração for maior
que isso, o servidor o considerará como um valor de tempo real do Unix,
em vez de um deslocamento do horário atual.

Se o valor de validade for `0` (o padrão), o item
nunca expira (embora possa ser excluído do servidor para dar lugar
a outros itens).

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
