# Retorna um array com versão do cliente, protocolo e servidor (quando disponível)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-version.php

---

# pg\_version

(PHP 5, PHP 7, PHP 8)

pg\_version — 
Retorna um array com versão do cliente, protocolo e servidor (quando disponível)

### Descrição

function **pg\_version**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [array](language.types.array.md)

**pg\_version()** retorna um array com as versões do cliente, do protocolo
e do servidor.

Para informações mais detalhadas do servidor, use [pg\_parameter\_status()](function.pg-parameter-status.md).

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Retorna um array com chaves e valores `client`, `protocol`
e `server` (se disponível).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_version()****

```
<?php
  $dbconn = pg_connect("host=localhost port=5432 dbname=mary")
     or die("Não foi possível conectar");

  $v = pg_version($dbconn);

  echo $v['client'];
?>
```

O exemplo acima produzirá:

```
7.4
```

### Veja também

- [pg\_parameter\_status()](function.pg-parameter-status.md) - Procura uma configuração de parâmetro atual do servidor

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
