# Define a operação do banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-set-db-operation.php

---

# oci\_set\_db\_operation

(PHP 7 >= 7.2.14, PHP 8, PHP 7 >= 7.3.1, PHP 8, PECL OCI8 >= 2.2.0)

oci\_set\_db\_operation — Define a operação do banco de dados

### Descrição

function **oci\_set\_db\_operation**([resource](language.types.resource.md) `$connection`, [string](language.types.string.md) `$action`): [bool](language.types.boolean.md)

Define o DBOP para rastreamento Oracle.

O nome da operação do banco de dados é registrado no banco de dados quando ocorre a próxima
'viagem de ida e volta' do PHP para o banco de dados, normalmente quando uma instrução SQL
é executada.

A operação do banco de dados pode ser consultada posteriormente a partir de visualizações de administração do banco de dados,
como `V$SQL_MONITOR`.

A função **oci\_set\_db\_operation()** está disponível
quando o OCI8 utiliza bibliotecas de cliente Oracle 12 (ou posterior) e o Oracle Database 12 (ou posterior).

### Parâmetros

`connection`
:   Um identificador de conexão Oracle,
    retornado por [oci\_connect()](function.oci-connect.md), [oci\_pconnect()](function.oci-pconnect.md)
    ou [oci\_new\_connect()](function.oci-new-connect.md).

`action`
:   String escolhida pelo usuário.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Definindo o DBOP**

```
<?php

$c = oci_connect('hr', 'welcome', 'localhost/XE');

// Registra a operação
oci_set_db_operation($c, 'main query');

// Código que causa uma viagem de ida e volta, por exemplo, uma consulta:
$s = oci_parse($c, 'select * from dual');
oci_execute($s);
oci_fetch_all($s, $res);

sleep(30);

?>
```

```
// Enquanto o script estiver em execução, o administrador poderá visualizar as operações do banco de dados
// sendo realizadas:

sqlplus system/welcome
SQL> select dbop_name from v$sql_monitor;
```

### Notas

**Cuidado**

# Pegadinha da Viagem de Ida e Volta

Algumas, mas não todas as funções do OCI8, causam viagens de ida e volta. Viagens de ida e volta ao
banco de dados podem não ocorrer com consultas quando o cache de resultados estiver habilitado.

### Veja também

- [oci\_set\_action()](function.oci-set-action.md) - Define o nome da ação
- [oci\_set\_module\_name()](function.oci-set-module-name.md) - Define o nome do módulo
- [oci\_set\_client\_info()](function.oci-set-client-info.md) - Define as informações do cliente
- [oci\_set\_client\_identifier()](function.oci-set-client-identifier.md) - Define o identificador do cliente

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
