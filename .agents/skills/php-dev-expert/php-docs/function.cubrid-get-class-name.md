# Obtém o nome da classe usando OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-get-class-name.php

---

# cubrid\_get\_class\_name

(PECL CUBRID >= 8.3.0)

cubrid\_get\_class\_name — Obtém o nome da classe usando OID

### Descrição

function **cubrid\_get\_class\_name**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$oid`): [string](language.types.string.md)

A função **cubrid\_get\_class\_name()** é usada para obter o
nome da classe pelo `oid`. Não funciona ao selecionar dados das tabelas de sistema,
por exemplo, db\_class.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância da qual se busca o nome da classe.

### Valor Retornado

Nome da classe em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_get\_class\_name()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

$req = cubrid_execute($conn, "SELECT * FROM code", CUBRID_INCLUDE_OID);
$oid = cubrid_current_oid($req);
$class_name = cubrid_get_class_name($conn, $oid);

print_r($class_name);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
code
```

### Veja também

- [cubrid\_is\_instance()](function.cubrid-is-instance.md) - Verifica se a instância apontada pelo OID existe
- [cubrid\_drop()](function.cubrid-drop.md) - Remove uma instância usando OID

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
