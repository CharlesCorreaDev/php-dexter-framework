# Reverte uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-rollback.php

---

# cubrid\_rollback

(PECL CUBRID >= 8.3.0)

cubrid\_rollback — Reverte uma transação

### Descrição

function **cubrid\_rollback**([resource](language.types.resource.md) `$conn_identifier`): [bool](language.types.boolean.md)

A função **cubrid\_rollback()** executa uma reversão na
transação apontada por `conn_identifier`, atualmente em
progresso.

A conexão ao servidor é fechada após a chamada a
**cubrid\_rollback()**. O identificador da conexão, no entanto, ainda
será válido.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_rollback()****

```
<?php
$conn = cubrid_connect("127.0.0.1", 33000, "demodb", "dba");
cubrid_set_autocommit($conn,false);

@cubrid_execute($conn, "DROP TABLE publishers");

$sql = <<<EOD
CREATE TABLE publishers(
pub_id CHAR(3),
pub_name VARCHAR(20),
city VARCHAR(15),
state CHAR(2),
country VARCHAR(15)
)
EOD;

if (!cubrid_execute($conn, $sql)) {
    printf("Módulo do erro: %d\nCódigo do erro: %d\nMensagem de erro: %s\n", cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());

    cubrid_disconnect($conn);
    exit;
}

$req = cubrid_prepare($conn, "INSERT INTO publishers VALUES(?, ?, ?, ?, ?)");

$id_list = array("P01", "P02", "P03", "P04");
$name_list = array("Abatis Publishers", "Core Dump Books", "Schadenfreude Press", "Tenterhooks Press");
$city_list = array("New York", "San Francisco", "Hamburg", "Berkeley");
$state_list = array("NY", "CA", NULL, "CA");
$country_list = array("USA", "USA", "Germany", "USA");

for ($i = 0, $size = count($id_list); $i < $size; $i++) {
    cubrid_bind($req, 1, $id_list[$i]);
    cubrid_bind($req, 2, $name_list[$i]);
    cubrid_bind($req, 3, $city_list[$i]);
    cubrid_bind($req, 4, $state_list[$i]);
    cubrid_bind($req, 5, $country_list[$i]);

    if (!($ret = cubrid_execute($req))) {
        break;
    }
}

if (!$ret) {
    cubrid_rollback($conn);
} else {
    cubrid_commit($conn);

    $req = cubrid_execute($conn, "SELECT * FROM publishers");
    while ($result = cubrid_fetch_assoc($req)) {
        printf("%-3s %-20s %-15s %-3s %-15s\n",
            $result["pub_id"], $result["pub_name"], $result["city"], $result["state"], $result["country"]);
    }
}

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
P01 Abatis Publishers    New York        NY  USA
P02 Core Dump Books      San Francisco   CA  USA
P03 Schadenfreude Press  Hamburg             Germany
P04 Tenterhooks Press    Berkeley        CA  USA
```

### Veja também

- [cubrid\_commit()](function.cubrid-commit.md) - Confirma uma transação
- [cubrid\_disconnect()](function.cubrid-disconnect.md) - Fecha uma conexão ao banco de dados

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
