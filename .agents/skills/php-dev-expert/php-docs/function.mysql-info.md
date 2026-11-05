# Obtém informação sobre a consulta mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-info.php

---

# mysql\_info

(PHP 4 >= 4.3.0, PHP 5)

mysql\_info — Obtém informação sobre a consulta mais recente

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_info()](mysqli.info.md)

### Descrição

function **mysql\_info**([resource](language.types.resource.md) `$link_identifier` = NULL): [string](language.types.string.md)

Retorna informação detalhada sobre a última consulta.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna informação sobre o comando em caso de sucesso, ou **`false`** em
caso de falha. Confira o exemplo abaixo para ver quais comandos disponibilizam a informação
e qual pode ser o valor retornado. Comandos que não estão listados
irão retornar **`false`**.

### Examples

**Exemplo #1 Comandos MySQL relevantes**

Comandos que retornam valores de string. Os números são apenas para
proposito de ilustração; seus valores irão corresponder à consulta.

```
INSERT INTO ... SELECT ...
String format: Records: 23 Duplicates: 0 Warnings: 0
INSERT INTO ... VALUES (...),(...),(...)...
String format: Records: 37 Duplicates: 0 Warnings: 0
LOAD DATA INFILE ...
String format: Records: 42 Deleted: 0 Skipped: 0 Warnings: 0
ALTER TABLE
String format: Records: 60 Duplicates: 0 Warnings: 0
UPDATE
String format: Rows matched: 65 Changed: 65 Warnings: 0
```

### Notas

> **Nota**:
>
> **mysql\_info()** retornará um valor diferente de **`false`** para
> comandos INSERT ... VALUES apenas se múltiplas listas de valores forem
> especificadas no comando.

### Veja também

- [mysql\_affected\_rows()](function.mysql-affected-rows.md) - Obtém o número de linhas afetadas na operação anterior do MySQL
- [mysql\_insert\_id()](function.mysql-insert-id.md) - Obtém o ID gerado pela operação INSERT anterior
- [mysql\_stat()](function.mysql-stat.md) - Obtém o status atual do sistema

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
