# Define o nome da ação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-set-action.php

---

# oci\_set\_action

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL OCI8 >= 1.4.0)

oci\_set\_action — Define o nome da ação

### Descrição

function **oci\_set\_action**([resource](language.types.resource.md) `$connection`, [string](language.types.string.md) `$action`): [bool](language.types.boolean.md)

Define o nome da ação para o rastreamento do Oracle.

O nome da ação é registrado no banco de dados quando ocorre a próxima
'viagem de ida e volta' do PHP para o banco de dados, normalmente quando uma instrução SQL
é executada.

O nome da ação pode ser consultado posteriormente em visualizações de administração
do banco de dados, como `V$SESSION`. Ele pode ser usado para
rastreamento e monitoramento, como com `V$SQLAREA`
e `DBMS_MONITOR.SERV_MOD_ACT_STAT_ENABLE`.

O valor pode ser retido em conexões persistentes.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle,
    retornado por [oci\_connect()](function.oci-connect.md), [oci\_pconnect()](function.oci-pconnect.md)
    ou [oci\_new\_connect()](function.oci-new-connect.md).

`action`
:   String escolhida pelo usuário com até 32 bytes de comprimento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Definindo a ação**

```
<?php

$c = oci_connect('hr', 'welcome', 'localhost/XE');

// Grava a ação
oci_set_action($c, 'Friend Lookup');

// Código que causa uma viagem de ida e volta, por exemplo, uma consulta:
$s = oci_parse($c, 'select * from dual');
oci_execute($s);
oci_fetch_all($s, $res);

sleep(30);

?>
```

```
// Enquanto o script estiver em execução, o administrador poderá visualizar as ações
// sendo executadas:

sqlplus system/welcome
SQL> select action from v$session;
```

### Notas

> **Nota**: **Requisitos de versão do Oracle**  
>
> Esta função estará disponível quando o PHP for compilado com as bibliotecas do Oracle
> Database a partir da versão 10*g* em diante.

**Dica**

# Desempenho

Com versões anteriores do
OCI8 ou do Oracle Database, as informações do cliente podem ser definidas usando o pacote
Oracle `DBMS_APPLICATION_INFO`. Isso é menos eficiente do que
usar [oci\_set\_client\_info()](function.oci-set-client-info.md).

**Cuidado**

# Pegadinha da Viagem de Ida e Volta

Algumas, mas não todas as funções do OCI8, causam viagens de ida e volta. Viagens de ida e volta ao
banco de dados podem não ocorrer com consultas quando o cache de resultados estiver habilitado.

### Veja também

- [oci\_set\_module\_name()](function.oci-set-module-name.md) - Define o nome do módulo
- [oci\_set\_client\_info()](function.oci-set-client-info.md) - Define as informações do cliente
- [oci\_set\_client\_identifier()](function.oci-set-client-identifier.md) - Define o identificador do cliente
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
