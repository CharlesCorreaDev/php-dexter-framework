# Prepara uma instrução SQL para execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-prepare.php

---

# cubrid\_prepare

(PECL CUBRID >= 8.3.0)

cubrid\_prepare — Prepara uma instrução SQL para execução

### Descrição

function **cubrid\_prepare**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$prepare_stmt`, [int](language.types.integer.md) `$option` = 0): [resource](language.types.resource.md)

A função **cubrid\_prepare()** compila uma instrução SQL para um determinado
identificador de conexão e retorna um identificador que representa a instrução pré-compilada.

Uma instrução preparada pode ser executada várias vezes, o que é eficiente para execução
repetida ou para processar dados massivos. Apenas uma única instrução pode ser usada, e um
parâmetro pode ser marcado com um ponto de interrogação (`?`) no local
apropriado da instrução SQL. Adicione um parâmetro ao vincular um valor na cláusula
`VALUES` de uma instrução `INSERT` ou na cláusula
`WHERE`. Observe que um valor só pode ser vinculado a um parâmetro
usando a função [cubrid\_bind()](function.cubrid-bind.md).

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`prepare_stmt`
:   Instrução de preparação.

`option`
:   Opção de retorno de OID: **`CUBRID_INCLUDE_OID`**.

### Valor Retornado

Identificador da requisição em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_prepare()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

$sql = <<<EOD
SELECT g.event_code, e.name
FROM game g
JOIN event e ON g.event_code=e.code
WHERE host_year = ? AND event_code NOT IN (SELECT event_code FROM game WHERE host_year=?) GROUP BY event_code;
EOD;

$req = cubrid_prepare($conn, $sql);

cubrid_bind($req, 1, 2004);
cubrid_bind($req, 2, 2000);
cubrid_execute($req);

$row_num = cubrid_num_rows($req);
printf("Existem %d eventos que ocorrem nas Olimpíadas de 2004 mas não ocorrem em 2000. Por exemplo:\n\n", $row_num);

printf("%-15s %s\n", "Cód. do evento", "Nome do evento");
printf("------------------------------\n");

$row = cubrid_fetch_assoc($req);
printf("%-15d %s\n", $row["event_code"], $row["name"]);
$row = cubrid_fetch_assoc($req);
printf("%-15d %s\n", $row["event_code"], $row["name"]);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Existem 27 eventos que ocorrem nas Olimpíadas de 2004 mas não ocorrem em 2000. Por exemplo:

Cód. do evento  Nome do evento
------------------------------
20063           +91kg
20070           64kg
```

### Veja também

- [cubrid\_execute()](function.cubrid-execute.md) - Executa uma instrução preparada SQL
- [cubrid\_bind()](function.cubrid-bind.md) - Vincula variáveis a instruções preparadas como parâmetros

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
