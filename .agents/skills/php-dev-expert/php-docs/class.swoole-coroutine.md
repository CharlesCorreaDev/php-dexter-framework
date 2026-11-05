# A classe Swoole\Coroutine

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-coroutine.php

---

# A classe Swoole\Coroutine

(PECL swoole >= 2.0.0)

## Introdução

## Resumo da classe

class **Swoole\Coroutine**
{

/\* Métodos \*/

public static function [call\_user\_func](swoole-coroutine.call-user-func.md)([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

public static function [call\_user\_func\_array](swoole-coroutine.call-user-func-array.md)([callable](language.types.callable.md) `$callback`, [array](language.types.array.md) `$param_array`): [mixed](language.types.mixed.md)

public static function [cli\_wait](swoole-coroutine.cli-wait.md)(): ReturnType

public static function [create](swoole-coroutine.create.md)(): ReturnType

public static function [getuid](swoole-coroutine.getuid.md)(): ReturnType

public static function [resume](swoole-coroutine.resume.md)(): ReturnType

public static function [suspend](swoole-coroutine.suspend.md)(): ReturnType

}

## Índice

- [Swoole\Coroutine::call\_user\_func](swoole-coroutine.call-user-func.md) — Chama um retorno de chamada fornecido pelo primeiro parâmetro
- [Swoole\Coroutine::call\_user\_func\_array](swoole-coroutine.call-user-func-array.md) — Chama um retorno de chamada com um array de parâmetros
- [Swoole\Coroutine::cli\_wait](swoole-coroutine.cli-wait.md) — Descrição
- [Swoole\Coroutine::create](swoole-coroutine.create.md) — Descrição
- [Swoole\Coroutine::getuid](swoole-coroutine.getuid.md) — Descrição
- [Swoole\Coroutine::resume](swoole-coroutine.resume.md) — Descrição
- [Swoole\Coroutine::suspend](swoole-coroutine.suspend.md) — Descrição

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
