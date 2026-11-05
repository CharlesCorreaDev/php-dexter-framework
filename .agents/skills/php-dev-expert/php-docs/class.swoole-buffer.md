# A classe Swoole\Buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-buffer.php

---

# A classe Swoole\Buffer

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Buffer**
{

/\* Métodos \*/

public function [append](swoole-buffer.append.md)([string](language.types.string.md) `$data`): [int](language.types.integer.md)

public function [clear](swoole-buffer.clear.md)(): [void](language.types.void.md)

public function [\_\_destruct](swoole-buffer.destruct.md)(): [void](language.types.void.md)

public function [expand](swoole-buffer.expand.md)([int](language.types.integer.md) `$size`): [int](language.types.integer.md)

public function [read](swoole-buffer.read.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$length`): [string](language.types.string.md)

public function [recycle](swoole-buffer.recycle.md)(): [void](language.types.void.md)

public function [substr](swoole-buffer.substr.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$length` = ?, [bool](language.types.boolean.md) `$remove` = ?): [string](language.types.string.md)

public function [\_\_toString](swoole-buffer.tostring.md)(): [string](language.types.string.md)

public function [write](swoole-buffer.write.md)([int](language.types.integer.md) `$offset`, [string](language.types.string.md) `$data`): [void](language.types.void.md)

}

## Índice

- [Swoole\Buffer::append](swoole-buffer.append.md) — Anexa a string ou dados binários ao final do buffer de memória e retorna o novo tamanho da memória alocada.
- [Swoole\Buffer::clear](swoole-buffer.clear.md) — Limpa o buffer de memória.
- [Swoole\Buffer::\_\_construct](swoole-buffer.construct.md) — Alocação de blocos de memória de tamanho fixo.
- [Swoole\Buffer::\_\_destruct](swoole-buffer.destruct.md) — Destrói o buffer de memória do Swoole.
- [Swoole\Buffer::expand](swoole-buffer.expand.md) — Expande o tamanho do buffer de memória.
- [Swoole\Buffer::read](swoole-buffer.read.md) — Lê dados do buffer de memória com base no deslocamento e no comprimento.
- [Swoole\Buffer::recycle](swoole-buffer.recycle.md) — Libera a memória para o sistema operacional que não está sendo usada pelo buffer de memória.
- [Swoole\Buffer::substr](swoole-buffer.substr.md) — Lê dados do buffer de memória com base no deslocamento e no comprimento. Ou remove dados do buffer de memória.
- [Swoole\Buffer::\_\_toString](swoole-buffer.tostring.md) — Obtém o valor da string do buffer de memória.
- [Swoole\Buffer::write](swoole-buffer.write.md) — Escreve dados no buffer de memória. A memória alocada para o buffer não será alterada.

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
