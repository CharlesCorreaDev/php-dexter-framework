# Chama um retorno de chamada fornecido pelo primeiro parâmetro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-coroutine.call-user-func.php

---

# Swoole\Coroutine::call\_user\_func

(PECL swoole >= 2.0.0)

Swoole\Coroutine::call\_user\_func — Chama um retorno de chamada fornecido pelo primeiro parâmetro

### Descrição

public static function **Swoole\Coroutine::call\_user\_func**([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

Chama o `callback` fornecido pelo primeiro parâmetro e passa os parâmetros restantes como argumentos.

### Parâmetros

`callback`
:   O [callable](language.types.callable.md) a ser chamado.

`args`
:   Zero ou mais parâmetros a serem passados para o retorno de chamada.

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
