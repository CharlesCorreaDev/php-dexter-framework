# Inicia uma nova sessão de cliente para uso com este cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.startsession.php

---

# MongoDB\Driver\Manager::startSession

(mongodb >=1.4.0)

MongoDB\Driver\Manager::startSession — Inicia uma nova sessão de cliente para uso com este cliente

### Descrição

final public function **MongoDB\Driver\Manager::startSession**([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Session](class.mongodb-driver-session.md)

Cria um objeto [MongoDB\Driver\Session](class.mongodb-driver-session.md) para as opções
fornecidas. A sessão pode então ser especificada ao executar comandos, consultas
e operações de gravação.

> **Nota**:
>
> Um [MongoDB\Driver\Session](class.mongodb-driver-session.md) só pode ser usado com o
> [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) a partir do qual foi criado.

### Parâmetros

`options`
:   **Opções**

    | Opção | Tipo | Descrição | Default |
    | --- | --- | --- | --- |
    | causalConsistency | [bool](language.types.boolean.md) | Configura a consistência causal em uma sessão. Se **`true`**, cada operação na sessão será ordenada causalmente após a operação anterior de leitura ou gravação. Se definido como **`false`**, desativa a consistência causal.  Consulte [» Consistência Causal](https://www.mongodb.com/docs/manual/core/read-isolation-consistency-recency/#causal-consistency) no manual do MongoDB para obter mais informações. | **`true`** |
    | defaultTransactionOptions | [array](language.types.array.md) | Opções padrão a serem aplicadas a transações recém-criadas. Estas opções são utilizadas a menos que sejam substituídas quando uma transação é iniciada com valores diferentes para cada opção.  **Opções**  | Opção | Tipo | Descrição | | --- | --- | --- | | maxCommitTimeMS | integer | A quantidade máxima de tempo em milissegundos para permitir que um único comando `commitTransaction` seja executado.  Se especificada, `maxCommitTimeMS` deve ser um inteiro de 32 bits com sinal com valor maior ou igual a zero. | | readConcern | [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md) | Um read concern a ser aplicado à operação.  Esta opção está disponível no MongoDB 3.2+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. | | readPreference | [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) | Uma preferência de leitura a ser usada para selecionar um servidor para a operação. | | writeConcern | [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) | Um write concern a ser aplicado à operação. |  Esta opção está disponível no MongoDB 4.0+. | `[]` |
    | snapshot | [bool](language.types.boolean.md) | Configure leituras de instantâneos em uma sessão. Se **`true`**, um timestamp será obtido da primeira operação de leitura suportada na sessão (ou seja, `find`, `aggregate` ou `distinct` não fragmentado). As operações de leitura subsequentes dentro da sessão utilizarão um nível de preocupação de leitura `"snapshot"` (instantâneo) para ler os dados confirmados pela maioria daquele timestamp. Se definido como **`false`**, desativa leituras de instantâneos.  As leituras de instantâneo requerem MongoDB 5.0+ e não podem ser usadas com consistência causal, transações ou operações de gravação. Se `"snapshot"` for **`true`**, `"causalConsistency"` será padronizado como **`false`**.  Consulte [» Preocupação de Leitura "snapshot"](https://www.mongodb.com/docs/manual/reference/read-concern-snapshot/#read-concern-and-atclustertime) no manual do MongoDB para obter mais informações. | **`false`** |

### Valor Retornado

Retorna um [MongoDB\Driver\Session](class.mongodb-driver-session.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se as opções `"causalConsistency"` e `"snapshot"` forem ambas **`true`**.
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) se a sessão não puder ser criada (ex.: libmongoc não suporta criptografia).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.11.0 | A opção `"snapshot"` foi adicionada. |
| PECL mongodb 1.6.0 | A opção `"maxCommitTimeMS"` foi adicionada a `"defaultTransactionOptions"`. |
| PECL mongodb 1.5.0 | A opção `"defaultTransactionOptions"` foi adicionada. |

### Veja também

- [MongoDB\Driver\Session](class.mongodb-driver-session.md)
- [» Consistência Causal](https://www.mongodb.com/docs/manual/core/read-isolation-consistency-recency/#causal-consistency) no manual do MongoDB

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
