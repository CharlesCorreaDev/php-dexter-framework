# Executa uma ou mais operações de gravação neste servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.executebulkwrite.php

---

# MongoDB\Driver\Server::executeBulkWrite

(mongodb >=1.0.0)

MongoDB\Driver\Server::executeBulkWrite — Executa uma ou mais operações de gravação neste servidor

### Descrição

final public function **MongoDB\Driver\Server::executeBulkWrite**([string](language.types.string.md) `$namespace`, [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) `$bulk`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)

Executa uma ou mais operações de gravação neste servidor.

Um [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) pode ser construído com
uma ou mais operações de gravação de vários tipos (por exemplo, atualizações, exclusões e
inserções). O driver tentará enviar operações do mesmo tipo ao
servidor no menor número possível de solicitações para otimizar viagens de ida e volta.

O valor padrão para a opção `"writeConcern"` será
inferido de uma transação ativa (indicada pela
opção `"session"`), seguida pelo
[URI de conexão](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri).

### Parâmetros

`namespace` ([string](language.types.string.md))
:   Um namespace totalmente qualificado (por exemplo, `"nomeDoBancoDados.nomeDaColecao"`).

`bulk` ([MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md))
:   As gravações a serem executadas.

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | session | [MongoDB\Driver\Session](class.mongodb-driver-session.md) | Uma sessão para associar à operação. |
    | writeConcern | [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) | Um write concern a ser aplicado à operação. |

### Valor Retornado

Retorna [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md) em caso de sucesso.

### Erros/Exceções

- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `bulk` não contiver nenhuma operação de gravação.
- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `bulk` já tiver sido executado. Os objetos [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) não podem ser executados várias vezes.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se a opção `"session"` for usada em combinação com uma preocupação de escrita não confirmada.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança uma exceção [MongoDB\Driver\Exception\BulkWriteException](class.mongodb-driver-exception-bulkwriteexception.md) em caso de qualquer falha de escrita (por exemplo, erro de escrita, falha ao aplicar uma preocupação de escrita).
- Lança um [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | O parâmetro `options` não aceita mais uma instância de [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md). |
| PECL mongodb 1.21.0 | Passar um objeto [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) como `options` foi descontinuado e será removido na versão 2.0. |
| PECL mongodb 1.4.4 | [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) será lançada se a opção `"session"` for usada em combinação com uma preocupação de gravação não reconhecida. |
| PECL mongodb 1.4.0 | O terceiro parâmetro agora é um array `options`. Para compatibilidade com versões anteriores, esse parâmetro ainda aceitará um objeto [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md). |
| PECL mongodb 1.3.0 | [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) agora é lançada se `bulk` não contiver nenhuma operação de gravação. Anteriormente, uma [MongoDB\Driver\Exception\BulkWriteException](class.mongodb-driver-exception-bulkwriteexception.md) era lançada. |

### Notas

> **Nota**:
>
> É responsabilidade do invocador garantir que o servidor seja capaz
> de executar a operação de escrita. Por exemplo, executar uma operação de escrita
> em um servidor secundário (excluindo seu banco de dados "local") falhará.

### Veja também

- [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md)
- [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)
- [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)
- [MongoDB\Driver\Manager::executeBulkWrite()](mongodb-driver-manager.executebulkwrite.md) - Executa uma ou mais operações de escrita

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
