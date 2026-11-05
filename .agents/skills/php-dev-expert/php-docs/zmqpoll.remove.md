# Remove um item da lista de consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqpoll.remove.php

---

# ZMQPoll::remove

(PECL zmq >= 0.5.0)

ZMQPoll::remove — Remove um item da lista de consulta

### Descrição

public function **ZMQPoll::remove**([mixed](language.types.mixed.md) `$item`): [bool](language.types.boolean.md)

Remove o item da lista de consulta. O parâmetro `item` pode ser um objeto ZMQSocket,
um recurso de fluxo (stream) ou o id retornado pelo método [ZMQPoll::add()](zmqpoll.add.md).

### Parâmetros

`item`
:   O objeto ZMQSocket, recurso de fluxo (stream) ou a [string](language.types.string.md) id do item.

### Valor Retornado

Retorna verdadeiro caso o item tenha sido removido e falso caso o objeto
com o id informado não existe na lista de pesquisa.

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
