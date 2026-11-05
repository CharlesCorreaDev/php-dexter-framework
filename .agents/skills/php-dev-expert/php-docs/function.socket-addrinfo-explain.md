# Obtem explicação sobre informação de endereço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-addrinfo-explain.php

---

# socket\_addrinfo\_explain

(PHP 7 >= 7.2.0, PHP 8)

socket\_addrinfo\_explain — Obtem explicação sobre informação de endereço

### Descrição

function **socket\_addrinfo\_explain**([AddressInfo](class.addressinfo.md) `$address`): [array](language.types.array.md)

**socket\_addrinfo\_explain()** expõe a estrutura subjacente
de `addrinfo`.

### Parâmetros

`address`
:   Instância de [AddressInfo](class.addressinfo.md) criada a partir de [socket\_addrinfo\_lookup()](function.socket-addrinfo-lookup.md).

### Valor Retornado

Retorna um array contendo os campos na estrutura `addrinfo`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `address` agora espera uma instância de [AddressInfo](class.addressinfo.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [socket\_addrinfo\_bind()](function.socket-addrinfo-bind.md) - Cria e vincula a um soquete a partir de uma informação de endereço
- [socket\_addrinfo\_connect()](function.socket-addrinfo-connect.md) - Cria e conecta a um soquete a partir de uma informação de endereço
- [socket\_addrinfo\_lookup()](function.socket-addrinfo-lookup.md) - Obtém array com conteúdo de getaddrinfo() sobre o servidor informado

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
