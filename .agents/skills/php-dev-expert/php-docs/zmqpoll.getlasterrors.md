# Obtém erros da consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqpoll.getlasterrors.php

---

# ZMQPoll::getLastErrors

(PECL zmq >= 0.5.0)

ZMQPoll::getLastErrors — Obtém erros da consulta

### Descrição

public function **ZMQPoll::getLastErrors**(): [array](language.types.array.md)

Retorna os ids dos objetos que tiveram erro na última consulta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array contendo os ids dos itens que tiveram erro na última consulta. Um arrau vazio é
retornado se não houveram erros.

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
