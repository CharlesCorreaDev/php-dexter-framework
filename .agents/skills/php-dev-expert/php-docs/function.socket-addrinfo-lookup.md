# Obtém array com conteúdo de getaddrinfo() sobre o servidor informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-addrinfo-lookup.php

---

# socket\_addrinfo\_lookup

(PHP 7 >= 7.2.0, PHP 8)

socket\_addrinfo\_lookup — Obtém array com conteúdo de getaddrinfo() sobre o servidor informado

### Descrição

function **socket\_addrinfo\_lookup**([string](language.types.string.md) `$host`, [?](language.types.null.md)[string](language.types.string.md) `$service` = **`null`**, [array](language.types.array.md) `$hints` = []): [array](language.types.array.md)|[false](language.types.singleton.md)

Pesquisa diferentes formas de se conectar ao servidor informado no parâmetro `host`. O array retornado contém
um conjunto de instâncias de [AddressInfo](class.addressinfo.md) que podem ser vinculadas usando [socket\_addrinfo\_bind()](function.socket-addrinfo-bind.md).

### Parâmetros

`host`
:   Nome do servidor a ser pesquisado.

`service`
:   O serviço ao qual será feita a conexão. Se o serviço for uma string numérica, ele designa a porta.
    Caso contrário, ele define o nome do serviço de rede que é mapeado a uma porta pelo sistema operacional.

`hints`
:   Este parâmetro contém dicas que fornecem critérios para seleção dos endereços retornados. Pode-se especificar
    essas dicas conforme definido na chamada getaddrinfo() do sistema operacional.

### Valor Retornado

Retorna um array de instâncias de [AddressInfo](class.addressinfo.md) que podem ser usadas com
a família de funções socket\_addrinfo\_\*.
Em caso de falha, retorna **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança um [TypeError](class.typeerror.md) se qualquer valor do array `hints` não puder ser convertido para inteiro, e pode lançar um [ValueError](class.valueerror.md) se quaisquer desses valores transbordarem. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna um array de instâncias de [AddressInfo](class.addressinfo.md); anteriormente, retornava um array de [resource](language.types.resource.md)s. |
| 8.0.0 | `service` agora pode ser nulo. |

### Veja também

- [socket\_addrinfo\_bind()](function.socket-addrinfo-bind.md) - Cria e vincula a um soquete a partir de uma informação de endereço
- [socket\_addrinfo\_connect()](function.socket-addrinfo-connect.md) - Cria e conecta a um soquete a partir de uma informação de endereço
- [socket\_addrinfo\_explain()](function.socket-addrinfo-explain.md) - Obtem explicação sobre informação de endereço

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
