# Retorna mensagens de erro para o log

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.swoole-error-log.php

---

# swoole\_error\_log

(PECL swoole >= 4.5.8)

swoole\_error\_log — Retorna mensagens de erro para o log

### Descrição

function **swoole\_error\_log**([int](language.types.integer.md) `$level`, [string](language.types.string.md) `$msg`): [void](language.types.void.md)

Retorna mensagens de erro para o log.

### Parâmetros

`level`
:   Nível de log, constantes podem ser usadas: **`SWOOLE_LOG_DEBUG`**,
    **`SWOOLE_LOG_TRACE`**,
    **`SWOOLE_LOG_INFO`**,
    **`SWOOLE_LOG_NOTICE`**,
    **`SWOOLE_LOG_WARNING`**,
    **`SWOOLE_LOG_ERROR`**,
    **`SWOOLE_LOG_NONE`**

`msg`
:   Conteúdo da mensagem a ser escrito no log.

### Valor Retornado

Nenhum valor é retornado.

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
