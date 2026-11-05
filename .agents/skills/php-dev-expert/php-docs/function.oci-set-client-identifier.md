# Define o identificador do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-set-client-identifier.php

---

# oci\_set\_client\_identifier

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL OCI8 >= 1.4.0)

oci\_set\_client\_identifier — Define o identificador do cliente

### Descrição

function **oci\_set\_client\_identifier**([resource](language.types.resource.md) `$connection`, [string](language.types.string.md) `$client_id`): [bool](language.types.boolean.md)

Define o identificador de cliente usado por vários componentes de banco de dados para
identificar usuários de aplicações leves que se autenticam como o mesmo
usuário de banco de dados.

O identificador do cliente é registrado no banco de dados quando ocorre a próxima
'viagem de ida e volta' do PHP para o banco de dados, normalmente quando uma
instrução SQL é executada.

O identificador pode ser consultado posteriormente, por exemplo,
com `SELECT SYS_CONTEXT('USERENV','CLIENT_IDENTIFIER')
FROM DUAL`. Visualizações de administração de banco de dados, como
`V$SESSION`, também conterão o valor. Ele
pode ser usado com `DBMS_MONITOR.CLIENT_ID_TRACE_ENABLE`
para rastreamento e também para auditoria.

O valor pode ser retido em solicitações de página que usam a mesma conexão persistente.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle,
    retornado por [oci\_connect()](function.oci-connect.md), [oci\_pconnect()](function.oci-pconnect.md)
    ou [oci\_new\_connect()](function.oci-new-connect.md).

`client_id`
:   String escolhida pelo usuário com até 64 bytes de comprimento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Definindo o identificador do cliente para o usuário da aplicação**

```
<?php

// Encontra o nome de login do usuário do aplicativo
session_start();
$un = my_validate_session($_SESSION['username']);
$c = oci_connect('myschema', 'welcome', 'localhost/XE');

// Informa ao Oracle quem é esse usuário
oci_set_client_identifier($c, $un);

// A próxima viagem de ida e volta ao banco de dados trará o identificador
$s = oci_parse($c, 'select mydata from mytable');
oci_execute($s);

// ...

?>
```

### Notas

**Cuidado**

# Pegadinha da Viagem de Ida e Volta

Algumas, mas não todas as funções do OCI8, causam viagens de ida e volta. Viagens de ida e volta ao
banco de dados podem não ocorrer com consultas quando o cache de resultados estiver habilitado.

### Veja também

- [oci\_set\_module\_name()](function.oci-set-module-name.md) - Define o nome do módulo
- [oci\_set\_action()](function.oci-set-action.md) - Define o nome da ação
- [oci\_set\_client\_info()](function.oci-set-client-info.md) - Define as informações do cliente
- [oci\_set\_db\_operation()](function.oci-set-db-operation.md) - Define a operação do banco de dados

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
