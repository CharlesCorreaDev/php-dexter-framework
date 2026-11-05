# A classe Yar_Concurrent_Client

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yar-concurrent-client.php

---

# A classe Yar\_Concurrent\_Client

(No version information available, might only be in Git)

## Introdução

## Resumo da classe

class **Yar\_Concurrent\_Client**
{

/\* Propriedades \*/

static
[$\_callstack](class.yar-concurrent-client.md#yar-concurrent-client.props.callstack);

static
[$\_callback](class.yar-concurrent-client.md#yar-concurrent-client.props.callback);

static
[$\_error\_callback](class.yar-concurrent-client.md#yar-concurrent-client.props.error-callback);

/\* Métodos \*/

public static function [call](yar-concurrent-client.call.md)(  
    [string](language.types.string.md) `$uri`,  
    [string](language.types.string.md) `$method`,  
    [array](language.types.array.md) `$parameters` = ?,  
    [callable](language.types.callable.md) `$callback` = ?,  
    [callable](language.types.callable.md) `$error_callback` = ?,  
    [array](language.types.array.md) `$options` = ?  
): [int](language.types.integer.md)

public static function [loop](yar-concurrent-client.loop.md)([callable](language.types.callable.md) `$callback` = ?, [callable](language.types.callable.md) `$error_callback` = ?): [bool](language.types.boolean.md)

public static function [reset](yar-concurrent-client.reset.md)(): [bool](language.types.boolean.md)

}

## Propriedades

\_callstack

\_callback

\_error\_callback

## Índice

- [Yar\_Concurrent\_Client::call](yar-concurrent-client.call.md) — Registra uma chamada simultânea
- [Yar\_Concurrent\_Client::loop](yar-concurrent-client.loop.md) — Envia todas as chamadas
- [Yar\_Concurrent\_Client::reset](yar-concurrent-client.reset.md) — Limpa todas as chamadas registradas

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
