# Inicia uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.starttransaction.php

---

# MongoDB\Driver\Session::startTransaction

(mongodb >=1.5.0)

MongoDB\Driver\Session::startTransaction — Inicia uma transação

### Descrição

final public function **MongoDB\Driver\Session::startTransaction**([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [void](language.types.void.md)

Inicia uma transação de vários documentos associada à sessão. A qualquer momento,
pode-se ter no máximo uma transação aberta por sessão. Após iniciar
uma transação, o objeto de sessão deve ser passado para cada operação através
da opção `"session"` (por exemplo,
[MongoDB\Driver\Manager::executeBulkWrite()](mongodb-driver-manager.executebulkwrite.md)) para
associar aquela operação com a transação.

As transações podem ser confirmadas por meio de
[MongoDB\Driver\Session::commitTransaction()](mongodb-driver-session.committransaction.md) e
abortadas com
[MongoDB\Driver\Session::abortTransaction()](mongodb-driver-session.aborttransaction.md).
As transações também são abortadas automaticamente quando a sessão é fechada
pela coleta de lixo ou chamando explicitamente
[MongoDB\Driver\Session::endSession()](mongodb-driver-session.endsession.md).

### Parâmetros

`options`
:   As opções podem ser passadas como argumento para este método. Cada elemento neste
    array de opções substitui a opção correspondente da
    opção `"defaultTransactionOptions"`, se definida ao
    iniciar a sessão com
    [MongoDB\Driver\Manager::startSession()](mongodb-driver-manager.startsession.md).

    **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | maxCommitTimeMS | integer | A quantidade máxima de tempo em milissegundos para permitir que um único comando `commitTransaction` seja executado.  Se especificada, `maxCommitTimeMS` deve ser um inteiro de 32 bits com sinal com valor maior ou igual a zero. |
    | readConcern | [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md) | Um read concern a ser aplicado à operação.  Esta opção está disponível no MongoDB 3.2+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. |
    | readPreference | [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) | Uma preferência de leitura a ser usada para selecionar um servidor para a operação. |
    | writeConcern | [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) | Um write concern a ser aplicado à operação. |

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\CommandException](class.mongodb-driver-exception-commandexception.md) se a transação não pôde ser iniciada devido a um problema no servidor (por exemplo, um bloqueio não pôde ser obtido).
- Lança uma [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) se a transação não puder ser iniciada (por exemplo, uma transação já foi iniciada).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.6.0 | A opção `"maxCommitTimeMS"` foi adicionada. |

### Veja também

- [MongoDB\Driver\Manager::startSession()](mongodb-driver-manager.startsession.md) - Inicia uma nova sessão de cliente para uso com este cliente
- [MongoDB\Driver\Session::commitTransaction()](mongodb-driver-session.committransaction.md) - Confirma uma transação
- [MongoDB\Driver\Session::abortTransaction()](mongodb-driver-session.aborttransaction.md) - Aborta uma transação

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
