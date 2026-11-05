# Verifica se esta é a preocupação de gravação padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeconcern.isdefault.php

---

# MongoDB\Driver\WriteConcern::isDefault

(mongodb >=1.3.0)

MongoDB\Driver\WriteConcern::isDefault — Verifica se esta é a preocupação de gravação padrão

### Descrição

final public function **MongoDB\Driver\WriteConcern::isDefault**(): [bool](language.types.boolean.md)

Retorna se esta é a preocupação de gravação padrão (ou seja, nenhuma opção
é especificada). Este método destina-se principalmente a ser usado em conjunto com
[MongoDB\Driver\Manager::getWriteConcern()](mongodb-driver-manager.getwriteconcern.md) para determinar
se o gerenciador foi construído sem nenhuma opção de preocupação de gravação.

O driver não incluirá uma preocupação de gravação padrão em suas operações de gravação
(por exemplo, [MongoDB\Driver\Manager::executeBulkWrite()](mongodb-driver-manager.executebulkwrite.md))
para permitir que o servidor aplique seu próprio padrão, que pode ter sido
[» modificado](https://www.mongodb.com/docs/manual/core/replica-set-write-concern/#modify-default-write-concern).
Bibliotecas que acessam a preocupação de gravação do gerenciador para incluí-la em seus próprios
comandos de gravação devem usar esse método para garantir que as preocupações de gravação
padrão não sejam definidas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se esta for a preocupação de gravação padrão ou **`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteConcern::isDefault()****

```
<?php

$wc = new MongoDB\Driver\WriteConcern(1);
var_dump($wc->isDefault());

$manager = new MongoDB\Driver\Manager('mongodb://127.0.0.1/?w=majority');
$wc = $manager->getWriteConcern();
var_dump($wc->isDefault());

$manager = new MongoDB\Driver\Manager('mongodb://127.0.0.1/');
$wc = $manager->getWriteConcern();
var_dump($wc->isDefault());

?>
```

O exemplo acima produzirá:

```
bool(false)
bool(false)
bool(true)
```

### Veja também

- [MongoDB\Driver\Manager::getWriteConcern()](mongodb-driver-manager.getwriteconcern.md) - Retorna a procupação de gravação para o gerenciador
- [» Modificar preocupação de gravação padrão](https://www.mongodb.com/docs/manual/core/replica-set-write-concern/#modify-default-write-concern) no manual do MongoDB
- [» Referência de Preocupação de Gravação](https://www.mongodb.com/docs/manual/reference/write-concern/)

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
