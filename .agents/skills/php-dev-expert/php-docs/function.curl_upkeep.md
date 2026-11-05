# Executa qualquer verificação de manutenção de conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl_upkeep.php

---

# curl\_upkeep

(PHP 8 >= 8.2.0)

curl\_upkeep — Executa qualquer verificação de manutenção de conexão

### Descrição

function **curl\_upkeep**([CurlHandle](class.curlhandle.md) `$handle`): [bool](language.types.boolean.md)

Disponível se construído em libcurl >= 7.62.0.

Alguns protocolos possuem mecanismos de "manutenção de conexão".
Esses mecanismos geralmente enviam algum tráfego nas conexões existentes para mantê-las vivas;
isso pode impedir que as conexões sejam fechadas devido a firewalls excessivamente zelosos, por exemplo.

A manutenção da conexão está atualmente disponível apenas para conexões HTTP/2.
Uma pequena quantidade de tráfego geralmente é enviada para manter uma conexão ativa.
O HTTP/2 mantém sua conexão enviando um quadro PING HTTP/2.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **curl\_upkeep()****

```
<?php
$url = "https://example.com";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_2_0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_UPKEEP_INTERVAL_MS, 200);
if (curl_exec($ch)) {
    usleep(300);
    var_dump(curl_upkeep($ch));
}
?>
```

### Veja também

- [curl\_init()](function.curl-init.md) - Inicializa uma sessão cURL

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
