# A classe Swoole\Runtime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-runtime.php

---

# A classe Swoole\Runtime

(No version information available, might only be in Git)

## Introdução

O Swoole\Runtime fornece suporte a corrotinas para diversas funções PHP por meio de um mecanismo de gancho,
permitindo que código síncrono funcione de forma assíncrona no ambiente de corrotinas.

## Resumo da classe

class **Swoole\Runtime**
{

/\* Métodos \*/

public static function [enableCoroutine](swoole-runtime.enable-coroutine.md)([int](language.types.integer.md) `$flags` = SWOOLE\_HOOK\_ALL): [void](language.types.void.md)

public static function [getHookFlags](swoole-runtime.get-hook-flags.md)(): [int](language.types.integer.md)

public static function [setHookFlags](swoole-runtime.set-hook-flags.md)([int](language.types.integer.md) `$flags`): [bool](language.types.boolean.md)

}

## Índice

- [Swoole\Runtime::enableCoroutine](swoole-runtime.enable-coroutine.md) — Habilita corrotina para funções especificadas
- [Swoole\Runtime::getHookFlags](swoole-runtime.get-hook-flags.md) — Obtém os sinalizadores de gancho atuais
- [Swoole\Runtime::setHookFlags](swoole-runtime.set-hook-flags.md) — Define sinalizadores de gancho para corrotina

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
