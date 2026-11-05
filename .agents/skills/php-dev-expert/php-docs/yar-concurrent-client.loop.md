# Envia todas as chamadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar-concurrent-client.loop.php

---

# Yar\_Concurrent\_Client::loop

(PECL yar >= 1.0.0)

Yar\_Concurrent\_Client::loop — Envia todas as chamadas

### Descrição

public static function **Yar\_Concurrent\_Client::loop**([callable](language.types.callable.md) `$callback` = ?, [callable](language.types.callable.md) `$error_callback` = ?): [bool](language.types.boolean.md)

Envia todas as chamadas RPC remotas registradas.

### Parâmetros

`callback`
:   Se esta função de retorno estiver definida, o Yar a chamará depois que todas as chamadas
    tiverem sido enviadas e antes de qualquer retorno de resposta, com $callinfo NULL.

    Então, se o usuário não especificou a função de retorno ao registrar a chamada simultânea,
    esta função de retorno será usada para manipular a resposta; caso contrário, a função de retorno
    especificada durante o registro será usada.

`error_callback`
:   Se esta função de retorno estiver definida, o Yar chamará esta função de retorno quando
    ocorrer um erro.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yar\_Concurrent\_Client::loop()****

```
<?php
function callback($retval, $callinfo) {
     if ($callinfo == NULL) {
        echo "Agora, todas as solicitações foram enviadas e nenhuma resposta está disponível\n";
     } else {
        echo "Esta é uma resposta de chamada remota, o nome do método é ", $callinfo["method"],
             ", a sequência de chamada é " , $callinfo["sequence"] , "\n";
        var_dump($retval);
     }
}

function error_callback($type, $error, $callinfo) {
    error_log($error);
}

Yar_Concurrent_Client::call("http://host/api/", "some_method", array("parameters"), "callback");
Yar_Concurrent_Client::call("http://host/api/", "some_method", array("parameters"));   // se a função de retorno não for especificada,
                                                                               // a função de retorno no loop será usada
Yar_Concurrent_Client::call("http://host/api/", "some_method", array("parameters"), "callback", NULL, array(YAR_OPT_PACKAGER => "json"));
                                                                               // este servidor aceita empacotador json
Yar_Concurrent_Client::call("http://host/api/", "some_method", array("parameters"), "callback", NULL, array(YAR_OPT_TIMEOUT=>1));
                                                                               // tempo limite personalizado

Yar_Concurrent_Client::loop("callback", "error_callback"); // envia as solicitações,
                                                           // error_callback é opcional
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Agora, todas as solicitações foram enviadas e nenhuma resposta está disponível
Esta é uma resposta de chamada remota, o nome do método é some_method, a sequência de chamada é 4
string(11) "some_method"
Esta é uma resposta de chamada remota, o nome do método é some_method, a sequência de chamada é 1
string(11) "some_method"
Esta é uma resposta de chamada remota, o nome do método é some_method, a sequência de chamada é 2
string(11) "some_method"
Esta é uma resposta de chamada remota, o nome do método é some_method, a sequência de chamada é 3
string(11) "some_method"
```

### Veja também

- [Yar\_Concurrent\_Client::call()](yar-concurrent-client.call.md) - Registra uma chamada simultânea
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
