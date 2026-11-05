# Adiciona o item na lista de pesquisa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqpoll.add.php

---

# ZMQPoll::add

(PECL zmq >= 0.5.0)

ZMQPoll::add — Adiciona o item na lista de pesquisa

### Descrição

public function **ZMQPoll::add**([mixed](language.types.mixed.md) `$entry`, [int](language.types.integer.md) `$type`): [string](language.types.string.md)

Adiciona um novo item na lista de pesquisa e retorna o id interno do item adicionado. O item pode ser removido
da lista através da string de identificação retornada.

### Parâmetros

`entry`
:   Um objeto ZMQSocket ou um recurso de fluxo (stream) PHP

`type`
:   Define para qual atividade o socket será consultado.
    Consulte as constantes **`ZMQ::POLL_IN`** e **`ZMQ::POLL_OUT`**.

### Valor Retornado

Retorna uma string de identificação do item adicionado, que pode ser usada posteriormente para remover o item.
Lança uma exceção ZMQPollException caso haja erro.

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
