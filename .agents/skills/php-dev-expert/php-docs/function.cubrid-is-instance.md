# Verifica se a instância apontada pelo OID existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-is-instance.php

---

# cubrid\_is\_instance

(PECL CUBRID >= 8.3.0)

cubrid\_is\_instance — Verifica se a instância apontada pelo OID existe

### Descrição

function **cubrid\_is\_instance**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$oid`): [int](language.types.integer.md)

A função **cubrid\_is\_instance()** é usada para verificar
se a instância apontada pelo `oid`
existe ou não.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância que terá a existência verificada.

### Valor Retornado

1, se a instância existir;

0, se a instância não existir;

-1, em caso de erro.

### Examples

**Exemplo #1 Exemplo de **cubrid\_is\_instance()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

$sql = <<<EOD
SELECT host_year, medal, game_date
FROM game
WHERE athlete_code IN
    (SELECT code FROM athlete WHERE name='Thorpe Ian');
EOD;

$req = cubrid_execute($conn, $sql, CUBRID_INCLUDE_OID);
$oid = cubrid_current_oid($req);

$res = cubrid_is_instance($conn, $oid);
if ($res == 1) {
    echo "Instância apontada por $oid existe.\n";
} else if ($res == 0){
    echo "Instância apontada por $oid não existe.\n";
} else {
    echo "erro\n";
}

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Instância apontada por @0|0|0 não existe.
```

### Veja também

- [cubrid\_drop()](function.cubrid-drop.md) - Remove uma instância usando OID
- [cubrid\_get\_class\_name()](function.cubrid-get-class-name.md) - Obtém o nome da classe usando OID

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
