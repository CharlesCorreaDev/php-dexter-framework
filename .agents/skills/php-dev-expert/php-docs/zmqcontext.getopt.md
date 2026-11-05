# Obtém uma opção de contexto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqcontext.getopt.php

---

# ZMQContext::getOpt

(PECL zmq >= 1.0.4)

ZMQContext::getOpt — Obtém uma opção de contexto

### Descrição

public function **ZMQContext::getOpt**([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

Retorna o valor de uma opção de contexto.

### Parâmetros

`key`
:   Um interiro representando a opção.
    Consulte as constantes **`ZMQ::CTXOPT_*`**.

### Valor Retornado

Retorna tanto uma [string](language.types.string.md) quanto um [int](language.types.integer.md) dependendo do parâmetro `key`. Lança
uma exceção ZMQContextException caso haja erro.

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
