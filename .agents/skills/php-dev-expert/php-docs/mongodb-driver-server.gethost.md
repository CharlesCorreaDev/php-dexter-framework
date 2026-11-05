# Retorna o nome do host deste servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.gethost.php

---

# MongoDB\Driver\Server::getHost

(mongodb >=1.0.0)

MongoDB\Driver\Server::getHost — Retorna o nome do host deste servidor

### Descrição

final public function **MongoDB\Driver\Server::getHost**(): [string](language.types.string.md)

Retorna o nome do host deste servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do host deste servidor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Server::getHost()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017/");
$server = $manager->selectServer();

var_dump($server->getHost());

?>
```

O exemplo acima produzirá:

```
string(9) "localhost"
```

### Veja também

- [MongoDB\Driver\Server::getInfo()](mongodb-driver-server.getinfo.md) - Retorna um array de informações que descrevem este servidor
- [MongoDB\Driver\ServerDescription::getHost()](mongodb-driver-serverdescription.gethost.md) - Retorna o nome do host deste servidor

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
