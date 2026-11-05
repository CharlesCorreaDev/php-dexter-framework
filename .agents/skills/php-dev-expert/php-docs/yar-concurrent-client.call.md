# Registra uma chamada simultânea

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar-concurrent-client.call.php

---

# Yar\_Concurrent\_Client::call

(PECL yar >= 1.0.0)

Yar\_Concurrent\_Client::call — Registra uma chamada simultânea

### Descrição

public static function **Yar\_Concurrent\_Client::call**(  
    [string](language.types.string.md) `$uri`,  
    [string](language.types.string.md) `$method`,  
    [array](language.types.array.md) `$parameters` = ?,  
    [callable](language.types.callable.md) `$callback` = ?,  
    [callable](language.types.callable.md) `$error_callback` = ?,  
    [array](language.types.array.md) `$options` = ?  
): [int](language.types.integer.md)

Registra uma chamada RPC, mas não a envia imediatamente, ela será enviada durante
uma nova chamada a [Yar\_Concurrent\_Client::loop()](yar-concurrent-client.loop.md).

### Parâmetros

`uri`
:   O URI do servidor RPC (HTTP, TCP).

`method`
:   Nome do serviço (também conhecido como nome do método).

`parameters`
:   Parâmetros.

`callback`
:   Uma função de retorno, que será chamada enquanto a resposta retorna.

`error_callback`
:   Se esta função de retorno for definida, o Yar chamará esta função quando ocorrer um erro.

`options`
:   Um [array](language.types.array.md) de opções.
    Consulte a lista de [constantes](yar.constants.md).

### Valor Retornado

Um ID exclusivo pode ser usado para identificar qual é a chamada.

### Examples

```
<?php

function callback($retval, $callinfo)
{
    var_dump($retval);
}

function error_callback($type, $error, $callinfo)
{
    error_log($error);
}

Yar_Concurrent_Client::call("http://host/api/", "some_method", array("parameters"), "callback");

// se a função de retorno não for especificada, a função de retorno no loop será usada
Yar_Concurrent_Client::call("http://host/api/", "some_method", array("parameters"));

// este servidor aceita empacotador json
Yar_Concurrent_Client::call("http://host/api/", "some_method", array("parameters"), "callback", NULL, array(YAR_OPT_PACKAGER => "json"));

// tempo limite personalizado
Yar_Concurrent_Client::call("http://host/api/", "some_method", array("parameters"), "callback", NULL, array(YAR_OPT_TIMEOUT => 1));

// As solicitações ainda não foram enviadas
```

O exemplo acima produzirá
algo semelhante a:

### Veja também

- [Yar\_Concurrent\_Client::loop()](yar-concurrent-client.loop.md) - Envia todas as chamadas
- [Yar\_Concurrent\_Client::reset()](yar-concurrent-client.reset.md) - Limpa todas as chamadas registradas
- [Yar\_Server::\_\_construct()](yar-server.construct.md) - Registra um servidor
- [Yar\_Server::handle()](yar-server.handle.md) - Inicia o servidor RPC

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
