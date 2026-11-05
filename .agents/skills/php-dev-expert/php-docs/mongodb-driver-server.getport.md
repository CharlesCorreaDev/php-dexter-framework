# Retorna a porta na qual este servidor está escutando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.getport.php

---

# MongoDB\Driver\Server::getPort

(mongodb >=1.0.0)

MongoDB\Driver\Server::getPort — Retorna a porta na qual este servidor está escutando

### Descrição

final public function **MongoDB\Driver\Server::getPort**(): [int](language.types.integer.md)

Retorna a porta na qual este servidor está escutando.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a porta na qual este servidor está escutando.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Server::getPort()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017/");
$server = $manager->selectServer();

var_dump($server->getPort());

?>
```

O exemplo acima produzirá:

```
int(27017)
```

### Veja também

- [MongoDB\Driver\Server::getInfo()](mongodb-driver-server.getinfo.md) - Retorna um array de informações que descrevem este servidor
- [MongoDB\Driver\ServerDescription::getPort()](mongodb-driver-serverdescription.getport.md) - Retorna a porta na qual este servidor está escutando

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
