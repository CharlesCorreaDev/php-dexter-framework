# Envia uma consulta SQL ao MySQL sem buscar e armazenar em buffer as linhas de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-unbuffered-query.php

---

# mysql\_unbuffered\_query

(PHP 4 >= 4.0.6, PHP 5)

mysql\_unbuffered\_query — Envia uma consulta SQL ao MySQL sem buscar e armazenar em buffer as linhas de resultados

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- Consulte: [Consultas com e sem buffer](mysqlinfo.concepts.buffering.md)

### Descrição

function **mysql\_unbuffered\_query**([string](language.types.string.md) `$query`, [resource](language.types.resource.md) `$link_identifier` = NULL): [resource](language.types.resource.md)

**mysql\_unbuffered\_query()** envia a consulta SQL
`query` para o MySQL sem buscar e armazenar
automaticamente as linhas de resultados como
[mysql\_query()](function.mysql-query.md) faz. Isso economiza uma quantidade
considerável de memória com consultas SQL que produzem grandes conjuntos de resultados,
e o conjunto de resultados já pode ser processado imediatamente após a
primeira linha ter sido recuperada, pois não será necessário esperar até
que a consulta SQL completa seja executada. Para usar
**mysql\_unbuffered\_query()** enquanto múltiplas conexões
de banco de dados estão abertas, o parâmetro opcional
`link_identifier` deve ser especificado para identificar
qual conexão deve ser usada.

### Parâmetros

`query`
:   A consulta SQL a ser executada.

    Dados dentro da consulta devem ser [adequadamente escapados](function.mysql-real-escape-string.md).

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Para instruções SELECT, SHOW, DESCRIBE ou EXPLAIN,
**mysql\_unbuffered\_query()**
retorna um [resource](language.types.resource.md) em caso de sucesso, ou **`false`** em
caso de erro.

Para outros tipos de instruções SQL, UPDATE, DELETE, DROP, etc.,
**mysql\_unbuffered\_query()** retorna **`true`** em caso de sucesso
ou **`false`** em caso de erro.

### Notas

> **Nota**:
>
> Os benefícios de **mysql\_unbuffered\_query()** têm
> um custo: [mysql\_num\_rows()](function.mysql-num-rows.md) e
> [mysql\_data\_seek()](function.mysql-data-seek.md) não podem ser usadas em um conjunto
> de resultados retornado de **mysql\_unbuffered\_query()** , até
> que todas as linhas sejam buscadas. Também é necessário buscar todas as linhas de resultados
> de uma consulta SQL sem buffer antes de enviar uma nova consulta SQL ao MySQL,
> usando o mesmo `link_identifier`.

### Veja também

- [mysql\_query()](function.mysql-query.md) - Envia uma consulta MySQL

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
