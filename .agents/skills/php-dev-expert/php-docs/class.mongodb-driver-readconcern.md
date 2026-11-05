# A classe MongoDB\Driver\ReadConcern

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-readconcern.php

---

# A classe MongoDB\Driver\ReadConcern

(mongodb >=1.1.0)

## Introdução

A classe **MongoDB\Driver\ReadConcern** controla o nível de
isolamento para operações de leitura em conjuntos de réplicas e fragmentos de conjuntos de réplicas. Esta
opção requer o MongoDB 3.2 ou posterior.

## Resumo da classe

final

class **MongoDB\Driver\ReadConcern**
implements
[MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md), [Serializable](class.serializable.md) {

/\* Propriedades \*/

public
readonly
?[string](language.types.string.md)
[$level](class.mongodb-driver-readconcern.md#mongodb-driver-readconcern.props.level);

/\* Constantes \*/

const
[string](language.types.string.md)
[AVAILABLE](class.mongodb-driver-readconcern.md#mongodb-driver-readconcern.constants.linearizable) = "available";

const
[string](language.types.string.md)
[LINEARIZABLE](class.mongodb-driver-readconcern.md#mongodb-driver-readconcern.constants.linearizable) = "linearizable";

const
[string](language.types.string.md)
[LOCAL](class.mongodb-driver-readconcern.md#mongodb-driver-readconcern.constants.local) = "local";

const
[string](language.types.string.md)
[MAJORITY](class.mongodb-driver-readconcern.md#mongodb-driver-readconcern.constants.majority) = "majority";

const
[string](language.types.string.md)
[SNAPSHOT](class.mongodb-driver-readconcern.md#mongodb-driver-readconcern.constants.snapshot) = "snapshot";

/\* Métodos \*/

final public function [bsonSerialize](mongodb-driver-readconcern.bsonserialize.md)(): [stdClass](class.stdclass.md)

final public function [\_\_construct](mongodb-driver-readconcern.construct.md)([?](language.types.null.md)[string](language.types.string.md) `$level` = **`null`**)

final public function [getLevel](mongodb-driver-readconcern.getlevel.md)(): [?](language.types.null.md)[string](language.types.string.md)

final public function [isDefault](mongodb-driver-readconcern.isdefault.md)(): [bool](language.types.boolean.md)

}

## Propriedades

level
:   O nível de preocupação de leitura. **`null`** se nenhum nível foi especificado.

## Constantes predefinidas

**`MongoDB\Driver\ReadConcern::AVAILABLE`**
:   Padrão para leitura de secundários quando
    `afterClusterTime` e `level` não são
    especificados.

    A consulta retorna os dados mais recentes da instância. Não fornece nenhuma
    garantia de que os dados foram gravados na maioria dos membros do conjunto de
    réplicas (ou seja, podem ser revertidos).

    Para coleções não fragmentadas (incluindo coleções em uma implantação
    autônoma ou uma implantação de conjunto de réplicas), as preocupações de leitura `"local"` e
    `"available"` se comportam de forma idêntica.

    Para um cluster fragmentado, a preocupação de leitura `"available"`
    fornece maior tolerância para partições, uma vez que não espera por
    garantias de consistência. No entanto, uma consulta com
    preocupação de leitura `"available"` pode retornar documentos órfãos
    se o fragmento estiver passando por migrações de blocos desde a
    preocupação de leitura `"available"`, ao contrário da
    preocupação de leitura `"local"`, que não entra em contato
    com o servidor primário do fragmento nem com os servidores de configuração para obter metadados atualizados.

**`MongoDB\Driver\ReadConcern::LINEARIZABLE`**
:   A consulta retorna dados que refletem todas as gravações bem-sucedidas emitidas com uma
    preocupação de gravação de `"majority"` *e*
    reconhecida antes do início da operação de leitura. Para conjuntos de réplicas
    executados com `writeConcernMajorityJournalDefault` igual
    a **`true`**, a preocupação de leitura linearizável retorna dados que nunca serão
    revertidos.

    Com `writeConcernMajorityJournalDefault` igual a
    **`false`**, o MongoDB não esperará que as gravações `w: "majority"`
    sejam duráveis ​​antes de reconhecê-las. Como tal,
    as operações de gravação `"majority"` poderiam possivelmente ser revertidas
    no caso de perda de um membro do conjunto de réplicas.

    Pode-se especificar a preocupação de leitura linearizável apenas para operações de
    leitura no primário.

    As garantias de preocupação de leitura linearizáveis ​​só se aplicam se as operações
    de leitura especificarem um filtro de consulta que identifique exclusivamente um único
    documento.

    **Dica**

    Sempre use `maxTimeMS` com preocupação de leitura linearizável
    caso a maioria dos membros que contêm dados estejam indisponíveis.
    `maxTimeMS` garante que a operação não seja bloqueada
    indefinidamente e, em vez disso, garante que a operação retorne um erro se
    a preocupação de leitura não puder ser atendida.

    A preocupação de leitura linearizável requer MongoDB 3.4.

**`MongoDB\Driver\ReadConcern::LOCAL`**
:   Padrão para leituras em relação ao primário se `level` não
    for especificado e para leituras em relação a secundários se `level`
    não for especificado, mas `afterClusterTime` for especificado.

    A consulta retorna os dados mais recentes da instância. Não fornece
    nenhuma garantia de que os dados foram gravados na maioria dos membros do conjunto de
    réplicas (ou seja, podem ser revertidos).

**`MongoDB\Driver\ReadConcern::MAJORITY`**
:   A consulta retorna os dados mais recentes da instância reconhecidos como
    tendo sido gravados para a maioria dos membros do conjunto de réplicas.

    Para usar o nível de preocupação de leitura de `"majority"`, os conjuntos
    de réplicas devem usar o mecanismo de armazenamento WiredTiger e o protocolo de escolha versão 1.

**`MongoDB\Driver\ReadConcern::SNAPSHOT`**
:   A preocupação de leitura `"snapshot"` está disponível para
    transações multi-documentos e, a partir do MongoDB 5.0, certas operações
    de leitura fora das transações multi-documentos.

    Se a transação não fizer parte de uma sessão causalmente consistente, após
    a confirmação da transação com preocupação de gravação `"majority"`, é
    garantido que as operações de transação tenham lido um instantâneo de
    dados confirmados pela maioria.

    Se a transação fizer parte de uma sessão causalmente consistente, após
    a confirmação da transação com preocupação de gravação `"majority"`, é
    garantido que as operações de transação tenham lido um instantâneo de
    dados confirmados pela maioria que fornece consistência causal com a
    operação imediatamente anterior ao início da transação.

    Fora das transações multi-documentos, a preocupação de leitura
    `"snapshot"` está disponíveis nos primários e secundários
    para as seguintes operações de leitura: `find`,
    `aggregate` e `distinct` (em
    coleções não fragmentadas). Todos os outros comandos de leitura proíbem
    `"snapshot"`.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |
| PECL mongodb 1.11.0 | Adicionada a constante **`MongoDB\Driver\ReadConcern::SNAPSHOT`**. |
| PECL mongodb 1.7.0 | Implementa [Serializable](class.serializable.md). |
| PECL mongodb 1.4.0 | Adicionada a constante **`MongoDB\Driver\ReadConcern::AVAILABLE`**. |
| PECL mongodb 1.2.0 | Adicionada a constante **`MongoDB\Driver\ReadConcern::LINEARIZABLE`**.  Implementa [MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md). |

## Veja também

- [» Referência de Preocupação de Leitura](https://www.mongodb.com/docs/manual/reference/read-concern/)

## Índice

- [MongoDB\Driver\ReadConcern::bsonSerialize](mongodb-driver-readconcern.bsonserialize.md) — Retorna um objeto para serialização BSON
- [MongoDB\Driver\ReadConcern::\_\_construct](mongodb-driver-readconcern.construct.md) — Cria uma nova preocupação de leitura
- [MongoDB\Driver\ReadConcern::getLevel](mongodb-driver-readconcern.getlevel.md) — Retorna o nível da preocupação de leitura
- [MongoDB\Driver\ReadConcern::isDefault](mongodb-driver-readconcern.isdefault.md) — Verifica se esta é a preocupação de leitura padrão

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
