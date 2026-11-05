# Fecha conexão CUBRID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-close.php

---

# cubrid\_close

(PECL CUBRID >= 8.3.1)

cubrid\_close — Fecha conexão CUBRID

### Descrição

function **cubrid\_close**([resource](language.types.resource.md) `$conn_identifier` = ?): [bool](language.types.boolean.md)

A função **cubrid\_close()** finaliza a transação
atualmente em processo, fecha o identificador de conexão e desconecta do
servidor. Se houver algum identificador de requisição ainda não fechado neste momento,
ele será fechado. É semelhante à função CUBRID
[cubrid\_disconnect()](function.cubrid-disconnect.md).

### Parâmetros

`conn_identifier`
:   O identificador de conexão CUBRID. Se o identificador da conexão não for especificado, será assumida a última conexão aberta por [cubrid\_connect()](function.cubrid-connect.md).

### Valor Retornado

**`true`** em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_close()****

```
<?php
$con = cubrid_connect ("localhost", 33000, "demodb");
if ($con) {
   echo "conectado com sucesso";
   $req = cubrid_execute ( $con, "insert into person values(1,'James')");
   if ($req) {
      cubrid_close_request ($req);
      cubrid_commit ($con);
   } else {
      cubrid_rollback ($con);
   }
   cubrid_close ($con);
}
?>
```

### Veja também

- [cubrid\_disconnect()](function.cubrid-disconnect.md) - Fecha uma conexão ao banco de dados
- [cubrid\_connect()](function.cubrid-connect.md) - Abre uma conexão a um servidor CUBRID
- [cubrid\_connect\_with\_url()](function.cubrid-connect-with-url.md) - Prepara o ambiente para conexão ao servidor CUBRID

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
