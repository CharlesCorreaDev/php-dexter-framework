# Fecha a conexão MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-close.php

---

# mysql\_close

(PHP 4, PHP 5)

mysql\_close — Fecha a conexão MySQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_close()](mysqli.close.md)
- PDO: Atribuir o valor **`null`** ao objeto PDO

### Descrição

function **mysql\_close**([resource](language.types.resource.md) `$link_identifier` = NULL): [bool](language.types.boolean.md)

**mysql\_close()** fecha a conexão não persistente ao
servidor MySQL que está associado ao identificador de conexão especificado. Se
`link_identifier` não for especificado, a última conexão
aberta é usada.

Conexões MySQL não persistentes abertas e conjuntos de resultados são automaticamente destruídos quando um
script PHP termina sua execução. Portanto, embora seja opcional fechar conexões
abertas e liberar conjuntos de resultados, isso é recomendado.
Isso retornará imediatamente os recursos usados ao PHP e MySQL, o que pode
melhorar o desempenho. Para obter informações relacionadas, consulte a página
[liberando recursos](language.types.resource.md#language.types.resource.self-destruct).

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se nenhuma conexão for encontrada ou
    estabelecida, um erro de nível **`E_WARNING`** será
    gerado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo **mysql\_close()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conectado com sucesso';
mysql_close($link);
?>
```

O exemplo acima produzirá:

```
Conectado com sucesso
```

### Notas

> **Nota**:
>
> **mysql\_close()** não irá fechar conexões persistentes
> criadas por [mysql\_pconnect()](function.mysql-pconnect.md).
> Para detalhes adicionais, consulte a seção sobre
> [conexões persistentes](features.persistent-connections.md).

### Veja também

- [mysql\_connect()](function.mysql-connect.md) - Abre uma conexão a um servidor MySQL
- [mysql\_free\_result()](function.mysql-free-result.md) - Libera memória usada pelo resultado

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
