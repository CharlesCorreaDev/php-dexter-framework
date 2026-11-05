# Obtém a codificação do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-client-encoding.php

---

# pg\_client\_encoding

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

pg\_client\_encoding — 
Obtém a codificação do cliente

### Descrição

function **pg\_client\_encoding**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [string](language.types.string.md)

PostgreSQL suporta conversão automática de conjuntos de caracteres entre
servidor e cliente para determinados conjuntos de caracteres.
**pg\_client\_encoding()** retorna a codificação do cliente
como uma string. A string retornada será um dos
identificadores de codificação padrão do PostgreSQL.

> **Nota**:
>
> Se a libpq for compilada sem suporte à codificação multibyte,
> **pg\_client\_encoding()** sempre retornará
> `SQL_ASCII`. A codificação suportada depende da versão do
> PostgreSQL. Consulte as codificações suportadas na documentação do PostgreSQL.
>
> A função costumava ser chamada de **pg\_clientencoding()**.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

A codificação do cliente.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_client\_encoding()****

```
<?php
// Suponha que $conn seja uma conexão com um banco de dados ISO-8859-1
$encoding = pg_client_encoding($conn);

echo "A codificação do cliente é: ", $encoding, "\n";
?>
```

O exemplo acima produzirá:

```
A codificação do cliente é: ISO-8859-1
```

### Veja também

- [pg\_set\_client\_encoding()](function.pg-set-client-encoding.md) - Define a codificação do cliente

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
