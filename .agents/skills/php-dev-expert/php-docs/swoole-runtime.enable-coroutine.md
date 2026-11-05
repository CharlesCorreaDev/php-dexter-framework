# Habilita corrotina para funções especificadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-runtime.enable-coroutine.php

---

# Swoole\Runtime::enableCoroutine

(No version information available, might only be in Git)

Swoole\Runtime::enableCoroutine — Habilita corrotina para funções especificadas

### Descrição

public static function **Swoole\Runtime::enableCoroutine**([int](language.types.integer.md) `$flags` = SWOOLE\_HOOK\_ALL): [void](language.types.void.md)

Este método habilita o suporte a corrotinas para funções PHP especificadas com base nos sinalizadores fornecidos.
Ele deve ser chamado uma vez no início da aplicação.

### Parâmetros

`flags`
:   Máscara de bits de sinalizadores que especificam quais funções devem ser conectadas. Podem ser combinados usando o operador |.
    Sinalizadores disponíveis:
    **`SWOOLE_HOOK_TCP`**,
    **`SWOOLE_HOOK_UDP`**,
    **`SWOOLE_HOOK_UNIX`**,
    **`SWOOLE_HOOK_UDG`**,
    **`SWOOLE_HOOK_SSL`**,
    **`SWOOLE_HOOK_TLS`**,
    **`SWOOLE_HOOK_SLEEP`**,
    **`SWOOLE_HOOK_FILE`**,
    **`SWOOLE_HOOK_STREAM_FUNCTION`**,
    **`SWOOLE_HOOK_BLOCKING_FUNCTION`**,
    **`SWOOLE_HOOK_PROC`**,
    **`SWOOLE_HOOK_CURL`**,
    **`SWOOLE_HOOK_NATIVE_CURL`**,
    **`SWOOLE_HOOK_SOCKETS`**,
    **`SWOOLE_HOOK_STDIO`**,
    **`SWOOLE_HOOK_PDO_PGSQL`**,
    **`SWOOLE_HOOK_PDO_ODBC`**,
    **`SWOOLE_HOOK_PDO_ORACLE`**,
    **`SWOOLE_HOOK_PDO_SQLITE`**
    ou **`SWOOLE_HOOK_ALL`** para todas as opções.

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
