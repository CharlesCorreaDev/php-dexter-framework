# Fecha o identificador de requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-close-request.php

---

# cubrid\_close\_request

(PECL CUBRID >= 8.3.0)

cubrid\_close\_request — Fecha o identificador de requisição

### Descrição

function **cubrid\_close\_request**([resource](language.types.resource.md) `$req_identifier`): [bool](language.types.boolean.md)

A função **cubrid\_close\_request()** fecha o identificador de
requisição informado no parâmetro `req_identifier` e
libera a região de memória relacionada a ele. É um sinônimo para a função
[cubrid\_close\_prepare()](function.cubrid-close-prepare.md).

### Parâmetros

`req_identifier`
:   Identificador da requisição.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **cubrid\_close\_request()****

```
<?php
$con = cubrid_connect ("localhost", 33000, "demodb", "dba", "");
if ($con) {
   echo "conectado com sucesso";
   $req = cubrid_execute ( $con, "select * from members",
                           CUBRID_INCLUDE_OID | CUBRID_ASYNC);
   if ($req) {
      while ( list ($id, $name) = cubrid_fetch ($req) ){
         echo $id;
         echo $name;
      }
      cubrid_close_request($req); // ou pode ser usado cubrid_close_prepare($req)
   }
   cubrid_disconnect($con);
}
?>
```

### Veja também

- [cubrid\_close\_prepare()](function.cubrid-close-prepare.md) - Fecha o identificador de requisição

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
