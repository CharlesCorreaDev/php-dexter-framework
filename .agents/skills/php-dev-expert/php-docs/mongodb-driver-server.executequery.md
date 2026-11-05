# Executa uma consulta de banco de dados neste servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.executequery.php

---

# MongoDB\Driver\Server::executeQuery

(mongodb >=1.0.0)

MongoDB\Driver\Server::executeQuery — Executa uma consulta de banco de dados neste servidor

### Descrição

final public function **MongoDB\Driver\Server::executeQuery**([string](language.types.string.md) `$namespace`, [MongoDB\Driver\Query](class.mongodb-driver-query.md) `$query`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

Executa a consulta neste servidor.

Os valores padrão para a opção `"readPreference"` e para a
opção `"readConcern"` da consulta serão inferidos de uma transação
ativa (indicada pela opção `"session"`), seguida
pelo [URI de conexão](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri).

> **Nota**:
>
> A opção `"readPreference"` não controla o servidor
> ao qual o driver emite a operação; ela sempre será executada
> neste objeto servidor. Em vez disso, ela pode ser usada ao emitir a operação para um
> servidor secundário (de uma conexão de conjunto de réplicas, não autônomas) ou nós mongo para
> garantir que o driver defina o protocolo de conexão de acordo ou adicione a
> preferência de leitura à operação, respectivamente.

### Parâmetros

`namespace` ([string](language.types.string.md))
:   Um namespace totalmente qualificado (por exemplo, `"nomeDoBancoDados.nomeDaColecao"`).

`query` ([MongoDB\Driver\Query](class.mongodb-driver-query.md))
:   A consulta a ser executada.

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | readPreference | [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) | Uma preferência de leitura a ser usada para selecionar um servidor para a operação. |
    | session | [MongoDB\Driver\Session](class.mongodb-driver-session.md) | Uma sessão para associar à operação. |

### Valor Retornado

Retorna [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md) em caso de sucesso.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança uma [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros (por exemplo, operadores de consulta inválidos).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | O parâmetro `options` não aceita mais uma instância de [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md). |
| PECL mongodb 1.21.0 | Passar um objeto [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) como `options` foi descontinuado e será removido na versão 2.0. |
| PECL mongodb 1.4.0 | O terceiro parâmetro agora é um array `options`. Para compatibilidade com versões anteriores, esse parâmetro ainda aceitará um objeto [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md). |

### Veja também

- [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)
- [MongoDB\Driver\Query](class.mongodb-driver-query.md)
- [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md)
- [MongoDB\Driver\Manager::executeQuery()](mongodb-driver-manager.executequery.md) - Executa uma consulta ao banco de dados

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
