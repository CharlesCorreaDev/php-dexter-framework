# Define as informações do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-set-client-info.php

---

# oci\_set\_client\_info

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL OCI8 >= 1.4.0)

oci\_set\_client\_info — Define as informações do cliente

### Descrição

function **oci\_set\_client\_info**([resource](language.types.resource.md) `$connection`, [string](language.types.string.md) `$client_info`): [bool](language.types.boolean.md)

Define as informações do cliente para rastreamento do Oracle.

As informações do cliente são registradas no banco de dados quando ocorre a próxima
'viagem de ida e volta' do PHP para o banco de dados, normalmente quando uma instrução SQL
é executada.

As informações do cliente podem ser posteriormente consultadas em visualizações
de administração do banco de dados, como `V$SESSION`.

O valor pode ser retido em conexões persistentes.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle,
    retornado por [oci\_connect()](function.oci-connect.md), [oci\_pconnect()](function.oci-pconnect.md)
    ou [oci\_new\_connect()](function.oci-new-connect.md).

`client_info`
:   String escolhida pelo usuário com até 64 bytes de comprimento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Definindo as informações do cliente**

```
<?php

$c = oci_connect('hr', 'welcome', 'localhost/XE');

// Registra as informações do cliente
oci_set_client_info($c, 'Minha Aplicação Versão 2');

// Código que causa uma viagem de ida e volta, por exemplo, uma consulta:
$s = oci_parse($c, 'select * from dual');
oci_execute($s);
oci_fetch_all($s, $res);

sleep(30);

?>
```

```
// Enquanto o script estiver em execução, o administrador poderá visualizar as informações
// do cliente:

sqlplus system/welcome
SQL> select client_info from v$session;
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
usar **oci\_set\_client\_info()**.

**Cuidado**

# Pegadinha da Viagem de Ida e Volta

Algumas, mas não todas as funções do OCI8, causam viagens de ida e volta. Viagens de ida e volta ao
banco de dados podem não ocorrer com consultas quando o cache de resultados estiver habilitado.

### Veja também

- [oci\_set\_module\_name()](function.oci-set-module-name.md) - Define o nome do módulo
- [oci\_set\_action()](function.oci-set-action.md) - Define o nome da ação
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
