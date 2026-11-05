# A classe Swoole\Channel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-channel.php

---

# A classe Swoole\Channel

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Channel**
{

/\* Métodos \*/

public function [\_\_destruct](swoole-channel.destruct.md)(): [void](language.types.void.md)

public function [pop](swoole-channel.pop.md)(): [mixed](language.types.mixed.md)

public function [push](swoole-channel.push.md)([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [stats](swoole-channel.stats.md)(): [array](language.types.array.md)

}

## Índice

- [Swoole\Channel::\_\_construct](swoole-channel.construct.md) — Constrói um canal Swoole
- [Swoole\Channel::\_\_destruct](swoole-channel.destruct.md) — Destrói um canal Swoole.
- [Swoole\Channel::pop](swoole-channel.pop.md) — Lê e retira dados do canal Swoole.
- [Swoole\Channel::push](swoole-channel.push.md) — Escreve e envia dados para o canal Swoole
- [Swoole\Channel::stats](swoole-channel.stats.md) — Obtém estatísticas do canal Swoole.

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
