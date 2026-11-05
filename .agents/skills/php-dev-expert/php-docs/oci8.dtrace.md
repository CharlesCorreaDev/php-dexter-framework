# OCI8 e Rastreamento dinâmico DTrace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oci8.dtrace.php

---

# OCI8 e Rastreamento dinâmico DTrace

O OCI8 2.0 introduziu sondas DTrace estáticas que podem ser usadas ​​em
sistemas operacionais compatíveis com o DTrace.
Consulte [Rastreamento Dinâmico DTrace](features.dtrace.md)
para obter uma visão geral do PHP e do DTrace.

## Instalando OCI8 com suporte a DTrace

Para habilitar o suporte a DTrace no PHP OCI8, o OCI8 deve ser compilado como uma extensão
compartilhada após a definição de `PHP_DTRACE`.

```
$ export PHP_DTRACE=yes
$ pecl install oci8
```

Edite o php.ini,
defina [extension\_dir](ini.core.md#ini.extension-dir) para o
diretório que contém o oci8.so criado e também
habilite a extensão adicionando:

```
extension=oci8.so
```

Se o PHP OCI8 for instalado a partir do PECL usando phpize e
configure (ao invés
de pecl), ainda será necessário definir
`PHP_DTRACE=yes`. Isto acontece porque
a opção `--enable-dtrace` será ignorada pelo
script configure limitado de um pacote PECL.

Consulte [Instalação de extensões
PECL](install.pecl.md) para intruções gerais de instalação via PECL.

## Sondas Estáticas DTrace no PHP OCI8

**As seguintes sondas estáticas estão disponíveis no PHP OCI8**

| Nome da Sonda | Descrição da Sonda | Argumentos da Sonda |
| --- | --- | --- |
| `oci8-connect-entry` | Iniciada por oci\_connect(), oci\_pconnect() e oci\_new\_connect(). É ativada antes da conexão ao banco de dados ser estabelecida. | char \*username, char \*dbname, char \*charset, long session\_mode, int persistent, int exclusive |
| `oci8-connect-return` | É ativada no final da conexão. | void \*connection |
| `oci8-check-connection` | É ativada se um erro Oracle possa ter tornado a conexão inválida. | void \*connection, char \*client\_id, int is\_open, long errcode, unsigned long server\_status |
| `oci8-sqltext` | É ativada quando oci\_parse() é executada. | void \*connection, char \*client\_id, void \*statement, char \*sql |
| `oci8-connection-close` | É ativada quando a conexão ao banco de dados é completamente destruída. | void \*connection |
| `oci8-error` | É ativada se um erro Oracle ocorrer. | int status, long errcode |
| `oci8-execute-mode` | É ativada na função [oci\_execute()](function.oci-execute.md) para mostrar o modo de execução. | void \*connection, char \*client\_id, void \*statement, unsigned int mode |

Estas sondas são úteis para rastrear scripts OCI8.

As variáveis connection e statement
são ponteiros para estruturas internas usados para rastrear
conexões e instruções executadas do PHP.

A variável client\_id é o valor definido
por [oci\_set\_client\_identifier()](function.oci-set-client-identifier.md).

O núcleo do PHP também tem sondas estáticas.
Consulte [Sondas Estáticas
DTrace no Núcleo do PHP](features.dtrace.dtrace.md#features.dtrace.static-probes).

**Sondas DTrace Internas de Depuração no OCI8**

| Nome da Sonda |
| --- |
| `oci8-connect-expiry` |
| `oci8-connect-lookup` |
| `oci8-connect-p-dtor-close` |
| `oci8-connect-p-dtor-release` |
| `oci8-connect-type` |
| `oci8-sesspool-create` |
| `oci8-sesspool-stats` |
| `oci8-sesspool-type` |

Estas sondas são úteis para mantenedores do OCI8. Consulte o código-fonte para argumentos e para ver quando elas serão ativadas.

## Listando Sondas Estáticas DTrace no PHP OCI8

Para listar sondas disponíveis, inicie um processo PHP e depois execute:

```
# dtrace -l
```

O resultado será similar a:

```
   ID   PROVIDER            MODULE                          FUNCTION NAME
   [ . . . ]
   17 phpoci22116           oci8.so   php_oci_dtrace_check_connection oci8-check-connection
   18 phpoci22116           oci8.so                php_oci_do_connect oci8-connect-entry
   19 phpoci22116           oci8.so         php_oci_persistent_helper oci8-connect-expiry
   20 phpoci22116           oci8.so             php_oci_do_connect_ex oci8-connect-lookup
   21 phpoci22116           oci8.so  php_oci_pconnection_list_np_dtor oci8-connect-p-dtor-close
   22 phpoci22116           oci8.so  php_oci_pconnection_list_np_dtor oci8-connect-p-dtor-release
   23 phpoci22116           oci8.so                php_oci_do_connect oci8-connect-return
   24 phpoci22116           oci8.so             php_oci_do_connect_ex oci8-connect-type
   25 phpoci22116           oci8.so          php_oci_connection_close oci8-connection-close
   26 phpoci22116           oci8.so                     php_oci_error oci8-error
   27 phpoci22116           oci8.so         php_oci_statement_execute oci8-execute-mode
   28 phpoci22116           oci8.so              php_oci_create_spool oci8-sesspool-create
   29 phpoci22116           oci8.so            php_oci_create_session oci8-sesspool-stats
   30 phpoci22116           oci8.so            php_oci_create_session oci8-sesspool-type
   31 phpoci22116           oci8.so          php_oci_statement_create oci8-sqltext
```

Os valores da coluna PROVIDER consistem no prefixo `phpoci` e
o ID fo processo PHP atual.

A coluna FUNCTION refere-se aos nomes de função da implementação C
interna do PHP onde cada provedor está localizado.

Se um processo PHP não estiver em execução, nenhuma sonda PHP será exibida.

## Exemplo de DTrace com PHP OCI8

Este exemplo mostra o básico da linguagem de script D do DTrace.

**Exemplo #1 user\_oci8\_probes.d para rastrear todas as Sondas Estáticas PHP OCI8 em nível de usuário com DTrace**

```
#!/usr/sbin/dtrace -Zs

#pragma D option quiet

php*:::oci8-connect-entry
{
    printf("%lld: PHP connect-entry\n", walltimestamp);
    printf("  credentials=\"%s@%s\"\n", arg0 ? copyinstr(arg0) : "", arg1 ? copyinstr(arg1) : "");
    printf("  charset=\"%s\"\n", arg2 ? copyinstr(arg2) : "");
    printf("  session_mode=%ld\n", (long)arg3);
    printf("  persistent=%d\n", (int)arg4);
    printf("  exclusive=%d\n", (int)arg5);
}

php*:::oci8-connect-return
{
    printf("%lld: PHP oci8-connect-return\n", walltimestamp);
    printf("  connection=0x%p\n", (void *)arg0);
}

php*:::oci8-connection-close
{
    printf("%lld: PHP oci8-connect-close\n", walltimestamp);
    printf("  connection=0x%p\n", (void *)arg0);
}

php*:::oci8-error
{
    printf("%lld: PHP oci8-error\n", walltimestamp);
    printf("  status=%d\n", (int)arg0);
    printf("  errcode=%ld\n", (long)arg1);
}

php*:::oci8-check-connection
{
    printf("%lld: PHP oci8-check-connection\n", walltimestamp);
    printf("  connection=0x%p\n", (void *)arg0);
    printf("  client_id=\"%s\"\n", arg1 ? copyinstr(arg1) : "");
    printf("  is_open=%d\n", arg2);
    printf("  errcode=%ld\n", (long)arg3);
    printf("  server_status=%lu\n", (unsigned long)arg4);
}

php*:::oci8-sqltext
{
    printf("%lld: PHP oci8-sqltext\n", walltimestamp);
    printf("  connection=0x%p\n", (void *)arg0);
    printf("  client_id=\"%s\"\n", arg1 ? copyinstr(arg1) : "");
    printf("  statement=0x%p\n", (void *)arg2);
    printf("  sql=\"%s\"\n", arg3 ? copyinstr(arg3) : "");
}

php*:::oci8-execute-mode
{
    printf("%lld: PHP oci8-execute-mode\n", walltimestamp);
    printf("  connection=0x%p\n", (void *)arg0);
    printf("  client_id=\"%s\"\n", arg1 ? copyinstr(arg1) : "");
    printf("  statement=0x%p\n", (void *)arg2);
    printf("  mode=0x%x\n", arg3);
}
```

Este script usa a opção `-Z` para
dtrace, permitindo que ele seja executado quando não houver
processo PHP em execução. Se esta opção fosse omitida, o script
terminaria imediatamente quando nenhum executável do PHP estivesse em execução
porque ele sabe que nenhuma das sondas a serem monitoradas
existiriam.

Em máquinas com múltiplas CPUs, a ordem das sondas pode não parecer
sequencial. Isto depende de qual CPU está processando as sondas,
e como os threads migram através dos CPUs. Exibir o horário de cada sonda
ajuda a reduzir a confusão.

O script rastreia todos os pontos de sondas estáticas do PHP OCI8 em nível de usuário,
durante toda a execução do script PHP. Execute o script D:

```
# ./user_oci8_probes.d
```

Execute uma aplicação ou um script PHP. O script D de monitoramento
exeubirá os argumentos de cada sonda assim que ativada. Por exemplo, um simples
script PHP que consulta uma tabela pode produzir o seguinte resultado de
rastreamento:

```
1381794982092854582: PHP connect-entry
  credentials="hr@localhost/pdborcl"
  charset=""
  session_mode=0
  persistent=0
  exclusive=0
1381794982183158766: PHP oci8-connect-return
  connection=0x7f4a7907bfb8
1381794982183594576: PHP oci8-sqltext
  connection=0x7f4a7907bfb8
  client_id="Chris"
  statement=0x7f4a7907c2a0
  sql="select * from employees"
1381794982183783706: PHP oci8-execute-mode
  connection=0x7f4a7907bfb8
  client_id="Chris"
  statement=0x7f4a7907c2a0
  mode=0x20
1381794982444344390: PHP oci8-connect-close
  connection=0x7f4a7907bfb8
```

Quando o monitoramento estiver concluído, o script D pode ser encerrado com um
`CTRL+C`.

## Veja também

- [Rastreamento Dinâmico DTrace](features.dtrace.md)

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
