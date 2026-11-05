# Vincula variáveis a instruções preparadas como parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-bind.php

---

# cubrid\_bind

(PECL CUBRID >= 8.3.0)

cubrid\_bind — Vincula variáveis a instruções preparadas como parâmetros

### Descrição

function **cubrid\_bind**(  
    [resource](language.types.resource.md) `$req_identifier`,  
    [int](language.types.integer.md) `$bind_index`,  
    [mixed](language.types.mixed.md) `$bind_value`,  
    [string](language.types.string.md) `$bind_value_type` = ?  
): [bool](language.types.boolean.md)

A função **cubrid\_bind()** é usada para vincular valores a
marcadores nomeados ou de ponto de interrogação na instrução SQL
passada a [cubrid\_prepare()](function.cubrid-prepare.md). Se
`bind_value_type` não for informado, string será o tipo
padrão.

> **Nota**:
>
> Se o tipo de dado a ser vinculado for BLOB/CLOB, o CUBRID tentará mapear o
> dado como um fluxo do PHP. Se o tipo real do valor não for um fluxo,
> o CUBRID o converterá para string e o usará como caminho completo e nome
> do arquino no sistema de arquivos do cliente.
>
> Se o tipo de dado a ser vinculado explicitamente for ENUM, o argumento `bind_value`
> deve ser o elemento da enumeração que estará no formato de string.
>
> No ambiente compartilhado CUBRID, o `bind_value_type` precisa ser incluído na
> função **cubrid\_bind()**.

A tabela a seguir mostra os tipos de valores substitutos.

**Tipos de dados vinculados CUBRID**

| Suporte | Tipo Vinculado | Tipo SQL Correspondente |
| --- | --- | --- |
| Suportado | STRING | CHAR, VARCHAR |
|  | NCHAR | NCHAR, NVARCHAR |
|  | BIT | BIT, VARBIT |
|  | NUMERIC ou NUMBER | SHORT, INT, NUMERIC |
|  | FLOAT | FLOAT |
|  | DOUBLE | DOUBLE |
|  | TIME | TIME |
|  | DATE | DATE |
|  | TIMESTAMP | TIMESTAMP |
|  | OBJECT | OBJECT |
|  | ENUM | ENUM |
|  | BLOB | BLOB |
|  | CLOB | CLOB |
|  | NULL | NULL |
| Não Suportado | SET | SET |
|  | MULTISET | MULTISET |
|  | SEQUENCE | SEQUENCE |

### Parâmetros

`req_identifier`
:   Identificador de requisição como um resultado de
    [cubrid\_prepare()](function.cubrid-prepare.md).

`bind_index`
:   Localização dos parâmetros de vinculação. Inicia com 1.

`bind_value`
:   Valor real para vinculação.

`bind_value_type`
:   Um tipo de valor a vincular. Omitido por padrão.
    Assim, o sistema usa string internamente por padrão. No entanto, é necessário
    especificar o tipo exato do valor como um argumento quando ele for NCHAR,
    BIT, ou BLOB/CLOB.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.1 | Adicionado suporte aos tipos de dados BLOB/CLOB. |

### Examples

**Exemplo #1 Exemplo de **cubrid\_bind()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

$result = cubrid_execute($conn, "SELECT code FROM event WHERE sports='Basketball' and gender='M'");
$row = cubrid_fetch_array($result, CUBRID_ASSOC);
$event_code = $row["code"];

cubrid_close_request($result);

$game_req = cubrid_prepare($conn, "SELECT athlete_code FROM game WHERE host_year=1992 and event_code=? and nation_code='USA'");
cubrid_bind($game_req, 1, $event_code, "number");
cubrid_execute($game_req);

printf("--- Time dos Sonhos (Time de basquete olímpico masculino dos Estados Unidos de 1992) ---\n");
while ($athlete_code = cubrid_fetch_array($game_req, CUBRID_NUM)) {
    $athlete_req = cubrid_prepare($conn, "SELECT name FROM athlete WHERE code=? AND nation_code='USA' AND event='Basketball' AND gender='M'");
    cubrid_bind($athlete_req, 1, $athlete_code[0], "number");
    cubrid_execute($athlete_req);
    $row = cubrid_fetch_assoc($athlete_req);
    printf("%s\n", $row["name"]);
}

cubrid_close_request($game_req);
cubrid_close_request($athlete_req);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
--- Time dos Sonhos (Time de basquete olímpico masculino dos Estados Unidos de 1992) ---
Stockton John
Robinson David
Pippen Scottie
Mullin C.
Malone Karl
Laettner C.
Jordan Michael
Johnson Earvin
Ewing Patrick
Drexler Clyde
Bird Larry
Barkley Charles
```

**Exemplo #2 Exemplo de **cubrid\_bind()** com CLOB**

```
<?php
$con = cubrid_connect("localhost", 33000, "demodb", "dba", "");
if ($con) {
    cubrid_execute($con,"DROP TABLE if exists php_cubrid_lob_test");
    cubrid_execute($con,"CREATE TABLE php_cubrid_lob_test (doc_content CLOB)");
    $sql = "INSERT INTO php_cubrid_lob_test(doc_content) VALUES(?)";
    $req = cubrid_prepare($con, $sql);

    $fp = fopen("book.txt", "rb");

    cubrid_bind($req, 1, $fp, "clob");
    cubrid_execute($req);
}
?>
```

**Exemplo #3 Exemplo de **cubrid\_bind()** com BLOB**

```
<?php
$con = cubrid_connect("localhost", 33000, "demodb", "dba", "");
if ($con) {
    cubrid_execute($con,"DROP TABLE if exists php_cubrid_lob_test");
    cubrid_execute($con,"CREATE TABLE php_cubrid_lob_test (image BLOB)");
    $sql = "INSERT INTO php_cubrid_lob_test(image) VALUES(?)";
    $req = cubrid_prepare($con, $sql);

    cubrid_bind($req, 1, "cubrid_logo.png", "blob");
    cubrid_execute($req);
}
?>
```

### Veja também

- [cubrid\_execute()](function.cubrid-execute.md) - Executa uma instrução preparada SQL
- [cubrid\_prepare()](function.cubrid-prepare.md) - Prepara uma instrução SQL para execução

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
