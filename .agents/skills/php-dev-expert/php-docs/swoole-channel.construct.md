# Constrói um canal Swoole

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-channel.construct.php

---

# Swoole\Channel::\_\_construct

(PECL swoole >= 1.9.0)

Swoole\Channel::\_\_construct — Constrói um canal Swoole

### Descrição

public function **Swoole\Channel::\_\_construct**([string](language.types.string.md) `$size`)

O canal Swoole é uma estrutura de dados na memória que funciona como o Chan em Golang, implementado com base
em memória compartilhada e travas de mutex. Pode ser usado como uma fila de mensagens de alto desempenho na memória.
Constrói um canal Swoole com um tamanho fixo. O tamanho mínimo de um canal Swoole é 64KB.
Exceções serão lançadas se não houver memória suficiente.

### Parâmetros

`size`
:   O tamanho do canal Swoole.

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
