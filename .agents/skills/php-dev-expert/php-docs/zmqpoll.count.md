# Conta os itens na lista de consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqpoll.count.php

---

# ZMQPoll::count

(PECL zmq >= 0.5.0)

ZMQPoll::count — Conta os itens na lista de consulta

### Descrição

public function **ZMQPoll::count**(): [int](language.types.integer.md)

Conta os itens na lista de consulta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [int](language.types.integer.md) representando a quantidade de itens na lista de consulta.

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
