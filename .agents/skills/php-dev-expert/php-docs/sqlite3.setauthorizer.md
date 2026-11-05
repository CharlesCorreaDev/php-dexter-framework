# Configura um retorno de chamada a ser usado como um autorizador para limitar o que uma declaração pode fazer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.setauthorizer.php

---

# SQLite3::setAuthorizer

(PHP 8)

SQLite3::setAuthorizer — Configura um retorno de chamada a ser usado como um autorizador para limitar o que uma declaração pode fazer

### Descrição

public function **SQLite3::setAuthorizer**([?](language.types.null.md)[callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Define um retorno de chamada que será chamado pelo SQLite toda vez que uma ação for executada
(leitura, exclusão, atualização, etc.). Isso é usado ao preparar uma declaração SQL de
uma fonte não confiável para garantir que as declarações SQL não tentem acessar dados aos quais
não têm permissão para ver, ou que não tentem executar declarações maliciosas que
danifiquem o banco de dados. Por exemplo, um aplicativo pode permitir que um usuário insira consultas
SQL arbitrárias para avaliação por um banco de dados. Mas o aplicativo não quer que o usuário
possa fazer alterações arbitrárias no banco de dados. Um autorizador poderia então ser colocado em
prática enquanto o SQL inserido pelo usuário está sendo preparado, o que proíbe tudo exceto
declarações SELECT.

O retorno de chamada do autorizador pode ser chamado várias vezes para cada declaração preparada pelo
SQLite. Uma consulta `SELECT` ou `UPDATE` chamará o
autorizador para cada coluna que seria lida ou atualizada.

O autorizador é chamado com até cinco parâmetros. O primeiro parâmetro é sempre
fornecido e é um [int](language.types.integer.md) (código de ação) correspondente a uma constante de
`SQLite3`. Os outros parâmetros são passados apenas para algumas ações. A
tabela a seguir descreve o segundo e o terceiro parâmetros de acordo com a ação:

**Lista de códigos de ação e parâmetros**

| Ação | Segundo parâmetro | Terceiro parâmetro |
| --- | --- | --- |
| **`SQLite3::CREATE_INDEX`** | Nome do Índice | Nome da Tabela |
| **`SQLite3::CREATE_TABLE`** | Nome da Tabela | **`null`** |
| **`SQLite3::CREATE_TEMP_INDEX`** | Nome do Índice | Nome da Tabela |
| **`SQLite3::CREATE_TEMP_TABLE`** | Nome da Tabela | **`null`** |
| **`SQLite3::CREATE_TEMP_TRIGGER`** | Nome do Gatilho | Nome da Tabela |
| **`SQLite3::CREATE_TEMP_VIEW`** | Nome da Visualização | **`null`** |
| **`SQLite3::CREATE_TRIGGER`** | Nome do Gatilho | Nome da Tabela |
| **`SQLite3::CREATE_VIEW`** | Nome da Visualização | **`null`** |
| **`SQLite3::DELETE`** | Nome da Tabela | **`null`** |
| **`SQLite3::DROP_INDEX`** | Nome do Índice | Nome da Tabela |
| **`SQLite3::DROP_TABLE`** | Nome da Tabela | **`null`** |
| **`SQLite3::DROP_TEMP_INDEX`** | Nome do Índice | Nome da Tabela |
| **`SQLite3::DROP_TEMP_TABLE`** | Nome da Tabela | **`null`** |
| **`SQLite3::DROP_TEMP_TRIGGER`** | Nome do Gatilho | Nome da Tabela |
| **`SQLite3::DROP_TEMP_VIEW`** | Nome da Visualização | **`null`** |
| **`SQLite3::DROP_TRIGGER`** | Nome do Gatilho | Nome da Tabela |
| **`SQLite3::DROP_VIEW`** | Nome da Visualização | **`null`** |
| **`SQLite3::INSERT`** | Nome da Tabela | **`null`** |
| **`SQLite3::PRAGMA`** | Nome do Pragma | Primeiro argumento passado ao pragma, ou **`null`** |
| **`SQLite3::READ`** | Nome da Tabela | Nome da Coluna |
| **`SQLite3::SELECT`** | **`null`** | **`null`** |
| **`SQLite3::TRANSACTION`** | Operação | **`null`** |
| **`SQLite3::UPDATE`** | Nome da Tabela | Nome da Coluna |
| **`SQLite3::ATTACH`** | Nome do Arquivo | **`null`** |
| **`SQLite3::DETACH`** | Nome do Banco de Dados | **`null`** |
| **`SQLite3::ALTER_TABLE`** | Nome do Banco de Dados | Nome da Tabela |
| **`SQLite3::REINDEX`** | Nome do Índice | **`null`** |
| **`SQLite3::ANALYZE`** | Nome da Tabela | **`null`** |
| **`SQLite3::CREATE_VTABLE`** | Nome da Tabela | Nome do Módulo |
| **`SQLite3::DROP_VTABLE`** | Nome da Tabela | Nome do Módulo |
| **`SQLite3::FUNCTION`** | **`null`** | Nome da Função |
| **`SQLite3::SAVEPOINT`** | Operação | Nome do Ponto de Salvamento |
| **`SQLite3::RECURSIVE`** | **`null`** | **`null`** |

O 4º parâmetro será o nome do banco de dados (`"main"`,
`"temp"`, etc.) se aplicável.

O 5º parâmetro para o retorno de chamada do autorizador é o nome do gatilho ou
visualização mais interno responsável pela tentativa de acesso ou **`null`** se esta tentativa de acesso é
diretamente a partir do código SQL de nível superior.

Quando o retorno de chamada retorna **`SQLite3::OK`**, isso significa que a operação
solicitada é aceita. Quando o retorno de chamada retorna **`SQLite3::DENY`**,
a chamada que acionou o autorizador falhará com uma mensagem de erro explicando que o
acesso foi negado.

Se o código de ação for **`SQLite3::READ`** e o retorno de chamada retornar
**`SQLite3::IGNORE`**, então a declaração preparada é
construída para substituir um valor **`null`** no lugar da coluna da tabela que
seria lida se **`SQLite3::OK`** tivesse sido retornado. O
retorno **`SQLite3::IGNORE`** pode ser usado para negar a um usuário
não confiável o acesso a colunas individuais de uma tabela.

Quando uma tabela é referenciada por um `SELECT`, mas nenhum valor de coluna é
extraído dessa tabela (por exemplo, em uma consulta como `"SELECT count(*) FROM
table"`), então o retorno de chamada do autorizador **`SQLite3::READ`** é
invocado uma vez para essa tabela com um nome de coluna que é uma string vazia.

Se o código de ação for **`SQLite3::DELETE`** e o retorno de chamada retornar
**`SQLite3::IGNORE`**, então a operação DELETE prossegue, mas a
otimização de truncamento é desativada e todas as linhas são excluídas individualmente.

Apenas um autorizador pode estar em vigor em uma conexão de banco de dados de cada vez. Cada chamada
para **SQLite3::setAuthorizer()** substitui a chamada anterior. Desative o
autorizador instalando um retorno de chamada **`null`**. O autorizador é desativado por padrão.

O retorno de chamada do autorizador não deve fazer nada que modifique a conexão de banco de dados
que invocou o retorno de chamada do autorizador.

Observe que o autorizador é chamado apenas quando uma declaração é preparada, não quando ela é
executada.

Mais detalhes podem ser encontrados na
[» documentação do SQLite3](https://sqlite.org/c3ref/set_authorizer.html).

### Parâmetros

`callback`
:   O [callable](language.types.callable.md) a ser chamado.

    Se **`null`** for passado, isso desativará o retorno de chamada do autorizador atual.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Este método não lança nenhum erro, mas se um autorizador estiver habilitado e retornar um
valor inválido, a preparação da declaração lançará um erro (ou exceção, dependendo
do uso do método [SQLite3::enableExceptions()](sqlite3.enableexceptions.md)).

### Examples

**Exemplo #1 Exemplo de **SQLite3::setAuthorizer()****

Isso permite apenas o acesso à leitura, e apenas algumas colunas da
tabela `users` serão retornadas. Outras colunas serão substituídas por
**`null`**.

```
<?php
$db = new SQLite3('data.sqlite');
$db->exec('CREATE TABLE users (id, name, password);');
$db->exec('INSERT INTO users VALUES (1, \'Pauline\', \'Snails4eva\');');

$allowed_columns = ['id', 'name'];

$db->setAuthorizer(function (int $action, ...$args) use ($allowed_columns) {
    if ($action === SQLite3::READ) {
        list($table, $column) = $args;

        if ($table === 'users' && in_array($column, $allowed_columns)) {
            return SQLite3::OK;
        }

        return SQLite3::IGNORE;
    }

    return SQLite3::DENY;
});

print_r($db->querySingle('SELECT * FROM users WHERE id = 1;'));
```

O exemplo acima produzirá:

```
Array
(
    [id] => 1
    [name] => Pauline
    [password] =>
)
```

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
