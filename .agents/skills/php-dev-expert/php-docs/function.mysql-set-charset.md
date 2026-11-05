# Define o conjunto de caracteres do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-set-charset.php

---

# mysql\_set\_charset

(PHP 5 >= 5.2.3)

mysql\_set\_charset — Define o conjunto de caracteres do cliente

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_set\_charset()](mysqli.set-charset.md)
- PDO: Adicionar `charset` à string de conexão, por exemplo `charset=utf8`

### Descrição

function **mysql\_set\_charset**([string](language.types.string.md) `$charset`, [resource](language.types.resource.md) `$link_identifier` = NULL): [bool](language.types.boolean.md)

Define o conjunto de caracteres padrão para a conexão atual.

### Parâmetros

`charset`
:   Um nome válido de conjunto de caracteres.

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

> **Nota**:
>
> Esta função requer o MySQL 5.0.7 ou mais recente.

> **Nota**:
>
> Esta é a maneira preferida de alterar o conjunto de caracteres. Usar
> [mysql\_query()](function.mysql-query.md) para configurá-lo (como em `SET NAMES utf8`)
> não é recomendado. Consulte a seção [conceitos do conjunto de caracteres MySQL](mysqlinfo.concepts.charset.md)
> para obter mais informações.

### Veja também

- [Configurando conjuntos de caracteres no MySQL](mysqlinfo.concepts.charset.md)
- [» Lista de conjuntos de caracteres suportados pelo MySQL](https://dev.mysql.com/doc/mysql/en/charset-charsets.html)
- [mysql\_client\_encoding()](function.mysql-client-encoding.md) - Retorna o nome do conjunto de caracteres

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
