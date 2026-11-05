# Retorna a resposta "hello" mais recente do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-serverdescription.gethelloresponse.php

---

# MongoDB\Driver\ServerDescription::getHelloResponse

(mongodb >=1.13.0)

MongoDB\Driver\ServerDescription::getHelloResponse — Retorna a resposta "hello" mais recente do servidor

### Descrição

final public function **MongoDB\Driver\ServerDescription::getHelloResponse**(): [array](language.types.array.md)

Retorna um array de informações que descrevem o servidor. Este array é derivado
da resposta mais recento ao comando
[» hello](https://www.mongodb.com/docs/manual/reference/command/hello/) (no momento em que
[MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md) foi construído)
obtida através do
[» monitoramento do servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md).

> **Nota**:
>
> Quando o driver estiver conectado a um balanceador de carga, esse método retornará um
> array vazio, pois os balanceadores de carga não são monitorados. Isso contrasta com
> [MongoDB\Driver\Server::getInfo()](mongodb-driver-server.getinfo.md), que retornaria a resposta do comando
> [» hello](https://www.mongodb.com/docs/manual/reference/command/hello/)
> do servidor de apoio
> no handshake de conexão inicial.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de informações que descrevem o servidor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Server::getInfo()](mongodb-driver-server.getinfo.md) - Retorna um array de informações que descrevem este servidor
- Comando [» hello](https://www.mongodb.com/docs/manual/reference/command/hello/) no manual do MongoDB
- [» Especificação de descoberta e monitoramento de servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md)

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
