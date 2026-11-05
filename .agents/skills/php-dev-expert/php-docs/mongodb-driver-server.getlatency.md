# Retorna a latência deste servidor em milissegundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.getlatency.php

---

# MongoDB\Driver\Server::getLatency

(mongodb >=1.0.0)

MongoDB\Driver\Server::getLatency — Retorna a latência deste servidor em milissegundos

### Descrição

final public function **MongoDB\Driver\Server::getLatency**(): [?](language.types.null.md)[integer](language.types.integer.md)

Retorna a latência deste servidor em milissegundos. Este é o
[» tempo de ida e volta](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md#round-trip-time)
de um comando `hello`
medido pelo cliente .

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a latência deste servidor em milissegundos ou **`null`** se nenhuma latência
tiver sido medida (por exemplo, o cliente está conectado a um balanceador de carga).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.11.0 | Este método retornará **`null`** se nenhuma latência tiver sido medida. Nas versões anteriores, um número inteiro sempre era retornado e um valor não definido poderia ser relatado como `-1`. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Server::getLatency()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017/");
$server = $manager->selectServer();

var_dump($server->getLatency());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(592)
```

### Veja também

- [MongoDB\Driver\Server::getInfo()](mongodb-driver-server.getinfo.md) - Retorna um array de informações que descrevem este servidor
- [MongoDB\Driver\ServerDescription::getRoundTripTime()](mongodb-driver-serverdescription.getroundtriptime.md) - Retorna o tempo de ida e volta do servidor em milissegundos
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
