# Verifica se esta é a preocupação de leitura padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readconcern.isdefault.php

---

# MongoDB\Driver\ReadConcern::isDefault

(mongodb >=1.3.0)

MongoDB\Driver\ReadConcern::isDefault — Verifica se esta é a preocupação de leitura padrão

### Descrição

final public function **MongoDB\Driver\ReadConcern::isDefault**(): [bool](language.types.boolean.md)

Retorna se esta é a preocupação de leitura padrão (ou seja, nenhuma opção é
especificada). Este método destina-se principalmente a ser usado em conjunto com
[MongoDB\Driver\Manager::getReadConcern()](mongodb-driver-manager.getreadconcern.md) para determinar
se o gerenciador foi construído sem nenhuma opção de preocupação de leitura.

O driver não incluirá uma preocupação de leitura padrão em suas operações de leitura
(por exemplo, [MongoDB\Driver\Manager::executeQuery()](mongodb-driver-manager.executequery.md)) para
permitir que o servidor aplique seu próprio padrão. Bibliotecas que acessam a
preocupação de leitura do gerenciador para incluí-la em seus próprios comandos de leitura devem usar
esse método para garantir que as preocupações de leitura padrão não sejam definidas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se esta for a preocupação de leitura padrão ou **`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\ReadConcern::isDefault()****

```
<?php

$rc = new MongoDB\Driver\ReadConcern(null);
var_dump($rc->isDefault());

$rc = new MongoDB\Driver\ReadConcern(MongoDB\Driver\ReadConcern::MAJORITY);
var_dump($rc->isDefault());

$manager = new MongoDB\Driver\Manager('mongodb://127.0.0.1/?readConcernLevel=majority');
$rc = $manager->getReadConcern();
var_dump($rc->isDefault());

$manager = new MongoDB\Driver\Manager('mongodb://127.0.0.1/');
$rc = $manager->getReadConcern();
var_dump($rc->isDefault());

?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(false)
bool(true)
```

### Veja também

- [MongoDB\Driver\Manager::getReadConcern()](mongodb-driver-manager.getreadconcern.md) - Retorna a preocupação de leitura para o gerenciador
- [» Referência de Preocupação de Leitura](https://www.mongodb.com/docs/manual/reference/read-concern/)

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
