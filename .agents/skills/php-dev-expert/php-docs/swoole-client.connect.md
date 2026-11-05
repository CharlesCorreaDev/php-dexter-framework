# Conecta à porta TCP ou UDP remota

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-client.connect.php

---

# Swoole\Client::connect

(PECL swoole >= 1.9.0)

Swoole\Client::connect — Conecta à porta TCP ou UDP remota

### Descrição

public function **Swoole\Client::connect**(  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port` = ?,  
    [int](language.types.integer.md) `$timeout` = ?,  
    [int](language.types.integer.md) `$flag` = ?  
): [bool](language.types.boolean.md)

### Parâmetros

`host`
:   O nome do host do endereço remoto.

`port`
:   O número da porta do endereço remoto.

`timeout`
:   O tempo limite (segundos) de conexão/envio/recebimento, o valor padrão é 0.1s.

`flag`
:   Se o tipo de cliente for UDP, a $flag significa se deve habilitar a configuração udp\_connect.
    Se a configuração udp\_connect estiver habilitada, o cliente só receberá dados do ip:porta especificados.
    Se o tipo de cliente for TCP e o $flag estiver definido como 1, deve-se usar swoole\_client\_select para verificar o status da conexão antes de enviar/receber.

### Valor Retornado

Se a conexão for estabelecida.

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
