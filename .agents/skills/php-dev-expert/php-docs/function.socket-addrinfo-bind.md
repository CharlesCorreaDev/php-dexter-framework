# Cria e vincula a um soquete a partir de uma informação de endereço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-addrinfo-bind.php

---

# socket\_addrinfo\_bind

(PHP 7 >= 7.2.0, PHP 8)

socket\_addrinfo\_bind — Cria e vincula a um soquete a partir de uma informação de endereço

### Descrição

function **socket\_addrinfo\_bind**([AddressInfo](class.addressinfo.md) `$address`): [Socket](class.socket.md)|[false](language.types.singleton.md)

Cria uma instância de [Socket](class.socket.md) e a vincula à instância de [AddressInfo](class.addressinfo.md) informada. O valor de
retorno desta função pode ser usado com [socket\_listen()](function.socket-listen.md).

### Parâmetros

`address`
:   Instância de [AddressInfo](class.addressinfo.md) criada a partir de [socket\_addrinfo\_lookup()](function.socket-addrinfo-lookup.md).

### Valor Retornado

Retorna uma instância de [Socket](class.socket.md) em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [Socket](class.socket.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 8.0.0 | O parâmetro `address` agora espera uma instância de [AddressInfo](class.addressinfo.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [socket\_addrinfo\_connect()](function.socket-addrinfo-connect.md) - Cria e conecta a um soquete a partir de uma informação de endereço
- [socket\_addrinfo\_explain()](function.socket-addrinfo-explain.md) - Obtem explicação sobre informação de endereço
- [socket\_addrinfo\_lookup()](function.socket-addrinfo-lookup.md) - Obtém array com conteúdo de getaddrinfo() sobre o servidor informado
- [socket\_listen()](function.socket-listen.md) - Escuta uma conexão em um soquete

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
