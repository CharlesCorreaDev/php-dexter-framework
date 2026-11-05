# Chama um retorno de chamada com um array de parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-coroutine.call-user-func-array.php

---

# Swoole\Coroutine::call\_user\_func\_array

(PECL swoole >= 2.0.0)

Swoole\Coroutine::call\_user\_func\_array — Chama um retorno de chamada com um array de parâmetros

### Descrição

public static function **Swoole\Coroutine::call\_user\_func\_array**([callable](language.types.callable.md) `$callback`, [array](language.types.array.md) `$param_array`): [mixed](language.types.mixed.md)

Chama o retorno de chamada fornecido pelo primeiro parâmetro com os parâmetros em param\_array.

### Parâmetros

`callback`
:   O [callable](language.types.callable.md) a ser chamado.

`param_array`
:   Zero ou mais parâmetros no array a serem passados para o retorno de chamada.

### Valor Retornado

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
