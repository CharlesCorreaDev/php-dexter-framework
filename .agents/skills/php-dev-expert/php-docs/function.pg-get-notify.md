# Obtém mensagem SQL NOTIFY

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-get-notify.php

---

# pg\_get\_notify

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_get\_notify — Obtém mensagem SQL NOTIFY

### Descrição

function **pg\_get\_notify**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [int](language.types.integer.md) `$mode` = **`PGSQL_ASSOC`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**pg\_get\_notify()** obtém notificações geradas por um
comando SQL `NOTIFY`. Para receber notificações,
o comando SQL `LISTEN` deve ser
emitido.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`mode`
:   Um parâmetro opcional que controla como o [array](language.types.array.md) retornado será indexado.
    `mode` é uma constante e pode assumir os seguintes valores:
    **`PGSQL_ASSOC`**, **`PGSQL_NUM`** e **`PGSQL_BOTH`**.
    Usando **`PGSQL_NUM`**, a função retornará um array com índices numéricos,
    usando **`PGSQL_ASSOC`** ela retornará apenas índices associativos
    enquanto **`PGSQL_BOTH`** retornará índices numéricos e associativos.

### Valor Retornado

Um [array](language.types.array.md) contendo o nome da mensagem `NOTIFY` e o PID de backend.
Se for compatível com o servidor, o array também conterá a versão do servidor e a carga útil.
Caso contrário, se nenhum `NOTIFY` estiver aguardando, então **`false`** é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Mensagem NOTIFY do PostgreSQL**

```
<?php
$conn = pg_pconnect("dbname=publisher");
if (!$conn) {
  echo "Um erro ocorreu.\n";
  exit;
}

// Ouve a mensagem 'author_updated' de outros processos
pg_query($conn, 'LISTEN author_updated;');
$notify = pg_get_notify($conn);
if (!$notify) {
  echo "Sem mensagens\n";
} else {
  print_r($notify);
}
?>
```

### Veja também

- [pg\_get\_pid()](function.pg-get-pid.md) - Obtém o ID do processo do backend

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
