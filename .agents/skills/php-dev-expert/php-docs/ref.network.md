# Funções de Network

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.network.php

---

# Funções de Network

## Índice

- [checkdnsrr](function.checkdnsrr.md) — Verifica os registros DNS correspondentes para o nome do host ou endereço IP informado
- [closelog](function.closelog.md) — Fecha conexão com o registrador do sistema
- [dns\_check\_record](function.dns-check-record.md) — Sinônimo de checkdnsrr
- [dns\_get\_mx](function.dns-get-mx.md) — Sinônimo de getmxrr
- [dns\_get\_record](function.dns-get-record.md) — Busca registros de recursos DNS associados a um nome de host
- [fsockopen](function.fsockopen.md) — Abre uma conexão socket de domínio Unix ou de Internet
- [gethostbyaddr](function.gethostbyaddr.md) — Obtém nome do servidor de Internet correspondente ao endereço de IP fornecido
- [gethostbyname](function.gethostbyname.md) — Obtém o endereço IPv4 correspondente a um determinado nome de host da Internet
- [gethostbynamel](function.gethostbynamel.md) — Obtém uma lista de endereços IPv4 correspondentes a um determinado nome de host da
  Internet
- [gethostname](function.gethostname.md) — Obtém o nome do host
- [getmxrr](function.getmxrr.md) — Obtém registros MX correspondentes a um determinado nome de host da Internet
- [getprotobyname](function.getprotobyname.md) — Obtém o número do protocolo associado ao nome do protocolo
- [getprotobynumber](function.getprotobynumber.md) — Obtém o nome do protocolo associado ao número do protocolo
- [getservbyname](function.getservbyname.md) — Obtém o número da porta associado a um serviço e protocolo de Internet
- [getservbyport](function.getservbyport.md) — Obtém o serviço de Internet que corresponde à porta e ao protocolo
- [header](function.header.md) — Envia um cabeçalho HTTP bruto
- [header\_register\_callback](function.header-register-callback.md) — Chama uma função de cabeçalho
- [header\_remove](function.header-remove.md) — Remove cabeçalhos definidos anteriormente
- [headers\_list](function.headers-list.md) — Retorna uma lista de cabeçalhos de resposta enviados (ou prontos para enviar)
- [headers\_sent](function.headers-sent.md) — Verifica se ou onde os cabeçalhos foram enviados
- [http\_clear\_last\_response\_headers](function.http-clear-last-response-headers.md) — Limpa os cabeçalhos de resposta HTTP armazenados
- [http\_get\_last\_response\_headers](function.http-get-last-response-headers.md) — Recupera os últimos cabeçalhos de reposta HTTP
- [http\_response\_code](function.http-response-code.md) — Obtém ou define o código de resposta HTTP
- [inet\_ntop](function.inet-ntop.md) — Converte um endereço de Internet compactado em uma representação legível
- [inet\_pton](function.inet-pton.md) — Converte um endereço IP legível em sua representação de endereço de Internet compactado
- [ip2long](function.ip2long.md) — Converte uma string contendo um endereço com pontos do protocolo da Internet (IPv4) em um número inteiro longo
- [long2ip](function.long2ip.md) — Converte um endereço inteiro longo em uma string no formato padrão com pontos da Internet (IPv4)
- [net\_get\_interfaces](function.net-get-interfaces.md) — Obtém interfaces de rede
- [openlog](function.openlog.md) — Abre conexão com o registrador do sistema
- [pfsockopen](function.pfsockopen.md) — Abra uma conexão persistente de soquete de domínio Unix ou de Internet
- [request\_parse\_body](function.request-parse-body.md) — Lê e analisa o corpor da requisição e retorna o resultado
- [setcookie](function.setcookie.md) — Envia um cookie
- [setrawcookie](function.setrawcookie.md) — Envie um cookie sem codificar em URL o valor do cookie
- [socket\_get\_status](function.socket-get-status.md) — Sinônimo de stream\_get\_meta\_data
- [socket\_set\_blocking](function.socket-set-blocking.md) — Sinônimo de stream\_set\_blocking
- [socket\_set\_timeout](function.socket-set-timeout.md) — Sinônimo de stream\_set\_timeout
- [syslog](function.syslog.md) — Gera uma mensagem de registro do sistema

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
