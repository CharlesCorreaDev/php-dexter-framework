# Confirma uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-commit.php

---

# cubrid\_commit

(PECL CUBRID >= 8.3.0)

cubrid\_commit — Confirma uma transação

### Descrição

function **cubrid\_commit**([resource](language.types.resource.md) `$conn_identifier`): [bool](language.types.boolean.md)

A função **cubrid\_commit()** é usada para executar a confirmação
na transação apontada por `conn_identifier`,
atualmente em progresso. A conexão ao servidor é fechada depois que a
função **cubrid\_commit()** é chamada; No entanto,
o identificador da conexão continuará válido.

No CUBRID PHP, o modo de auto-confirmação é desligado por padrão para gerenciamento de transação.
Pode ser definido pela função [cubrid\_set\_autocommit()](function.cubrid-set-autocommit.md).
O status pode ser obtido pela função [cubrid\_get\_autocommit()](function.cubrid-get-autocommit.md). Antes do início de uma transação,
lembre-se de desligar o modo de auto-confirmação.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_commit()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

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
cubrid_set_autocommit($conn,false);
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

- [cubrid\_rollback()](function.cubrid-rollback.md) - Reverte uma transação
- [cubrid\_get\_autocommit()](function.cubrid-get-autocommit.md) - Obtém o modo de auto-confirmação da conexão
- [cubrid\_set\_autocommit()](function.cubrid-set-autocommit.md) - Define o modo de auto-confirmação da conexão

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
