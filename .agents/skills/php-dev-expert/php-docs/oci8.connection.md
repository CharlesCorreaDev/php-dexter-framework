# Manipulação e conjunto de conexões do OCI8

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oci8.connection.php

---

# Manipulação e conjunto de conexões do OCI8

## Funções de conexão

A extensão OCI8 fornece três funções diferentes para
conexão com o Oracle. A função de conexão padrão
é [oci\_connect()](function.oci-connect.md). Ela cria uma conexão a
um banco de dados Oracle e retorna um recurso usado pelas chamadas
subsequentes ao banco de dados.

Conectar-se a um servidor Oracle é uma operação razoavelmente custosa
em termos de tempo que leva para ser concluída.
A função [oci\_pconnect()](function.oci-pconnect.md) usa um cache persistente
de conexões que pode ser reutilizado em diferentes solicitações
de script. Isso significa que a sobrecarga de conexão normalmente
ocorrerá apenas uma vez por processo PHP (ou processo filho do Apache).

Se a aplicação se conectar ao Oracle usando um conjunto diferente de credenciais de
banco de dados para cada usuário da web, o cache persistente empregado por
[oci\_pconnect()](function.oci-pconnect.md) se tornará menos útil à medida que o
número de usuários simultâneos aumentar, a ponto de poder
começar a afetar adversamente o desempenho geral do servidor Oracle
devido à manutenção de muitas conexões inativas. Se a
aplicação estiver estruturada desta forma, é recomendado
ajustá-lo usando as configurações
[oci8.max\_persistent](oci8.configuration.md#ini.oci8.max-persistent)
e [oci8.persistent\_timeout](oci8.configuration.md#ini.oci8.persistent-timeout)
(elas darão controle sobre o tamanho e o tempo de vida do
cache de conexão persistente), ou usar o Oracle Database
Resident Connection Pooling (no Oracle Database 11g ou posterior) ou usar
[oci\_connect()](function.oci-connect.md) em vez disso.

Tanto [oci\_connect()](function.oci-connect.md) quanto
[oci\_pconnect()](function.oci-pconnect.md) empregam um cache de conexão; se
múltiplas chamadas a
[oci\_connect()](function.oci-connect.md) usarem os mesmos parâmetros em um determinado
script, a segunda chamada e as subsequentes retornarão o identificador
de conexão existente. O cache usado
por [oci\_connect()](function.oci-connect.md) é limpo no final da
execução do script ou quando o identificador de conexão é explicitamente fechado. A
função [oci\_pconnect()](function.oci-pconnect.md) tem comportamento semelhante,
embora seu cache seja mantido separadamente e sobreviva entre
requisições HTTP.

Esse recurso de cache significa que os dois identificadores não são isolados
transacionalmente (eles são, na verdade, o mesmo identificador de conexão, portanto
não há nenhum tipo de isolamento). Se o aplicativo precisar de duas conexões separadas
e isoladas transacionalmente,
use [oci\_new\_connect()](function.oci-new-connect.md).

O cache [oci\_pconnect()](function.oci-pconnect.md) é limpo e quaisquer
conexões de banco de dados são fechadas quando o processo PHP termina, portanto,
o uso eficaz de conexões persistentes requer que o PHP seja um
módulo Apache ou usado com FPM, ou similar. Conexões persistentes
não terão nenhum benefício sobre [oci\_connect()](function.oci-connect.md)
quando o PHP for usado com CGI ou através da linha de comando.

A função [oci\_new\_connect()](function.oci-new-connect.md) sempre cria uma
nova conexão com o servidor Oracle, independentemente de outras
conexões que já possam existir. Aplicações web de alto tráfego
devem evitar o uso de
[oci\_new\_connect()](function.oci-new-connect.md), especialmente nas seções mais movimentadas
da aplicação.

Conexões persistentes podem ser
fechadas pelo usuário, permitindo maior controle sobre o uso dos
recursos da conexão. Conexões persistentes agora também serão fechadas
automaticamente quando não houver nenhuma variável PHP fazendo referência a elas, como
no final do escopo de uma função de usuário PHP. Isso reverterá
qualquer transação não confirmada. Essas alterações nas conexões
persistentes fazem com que elas se comportem de maneira semelhante às conexões
não persistentes, simplificando a interface, permitindo maior
consistência e previsibilidade da aplicação.
Use [oci8.old\_oci\_close\_semantics](oci8.configuration.md#ini.oci8.old-oci-close-semantics)
definido como
*On* para manter o comportamento histórico.

O restabelecimento automático de conexões persistentes PHP após o reaparecimento
de um processo Apache ou FPM significa que os gatilhos `LOGON`
do Oracle Database são recomendados apenas para definir atributos de sessão e não para
solicitações de conexão de usuário por aplicação.

## Conjunto de conexões DRCP

O PHP suporta Oracle Database Resident
Connection Pooling (DRCP). O DRCP permite um uso mais eficiente da
memória da máquina de banco de dados e oferece alta escalabilidade. Nenhuma, ou apenas
uma mínima, alteração na aplicação é necessária para usar o DRCP.

O DRCP é adequado para aplicações que se conectam usando poucos esquemas de
banco de dados e mantêm conexões de abertas por um curto período de
tempo. Outras aplicações devem usar os processos de servidor
de banco de dados `Dedicated` (dedicados) padrão da Oracle ou
usar servidores `Shared` (compartilhados).

O DRCP beneficia todas as três funções de conexão, mas oferece a maior
escalabilidade quando as conexões são criadas
com [oci\_pconnect()](function.oci-pconnect.md).

Para que o DRCP esteja disponível no OCI8, as bibliotecas cliente Oracle usadas pelo
PHP e a versão do banco de dados Oracle devem ser 11g ou superior.

A documentação sobre DRCP é encontrada em vários manuais da Oracle. Por
exemplo,
consulte [» Configuring
Database Resident Connection Pooling](https://docs.oracle.com/en/database/oracle/oracle-database/23/jjdbc/database-resident-connection-pooling.html) (em inglês) na documentação do
Oracle para obter informações de uso.
Um [» artigo
técnico do DRCP](https://www.oracle.com/technetwork/topics/php/whatsnew/php-scalability-ha-twp-128842.pdf) (em inglês) contém informações básicas sobre o DRCP.

Para usar o DRCP, instale a extensão OCI8 e as bibliotecas Oracle 11g (ou posterior)
e siga estas etapas:

- Como administrador de banco de dados privilegiado, use um programa como
  o SQL\*Plus para iniciar o conjunto de conexões no banco de dados:

  ```
      SQL> execute dbms_connection_pool.start_pool;
  ```
- Opcionalmente,
  use `dbms_connection_pool.alter_param()` para
  definir as configurações de DRCP. As configurações atuais do conjunto podem ser
  consultadas na visualização `DBA_CPOOL_INFO`.
- Atualize as cadeias de conexão usadas. Para aplicativos PHP que
  atualmente se conectam usando um nome de conexão de rede
  como `MYDB`:

  ```
      $c = oci_pconnect("meu_usuario", "minha_senha", "MYDB");
  ```

  modifique o arquivo tnsnames.ora e adicione
  uma cláusula `(SERVER=POOLED)`, por exemplo:

  ```
      MYDB = (DESCRIPTION=(ADDRESS=(PROTOCOL=tcp) (HOST=meuhost.dom.com)
             (PORT=1521))(CONNECT_DATA=(SERVICE_NAME=vendas)
             (SERVER=POOLED)))
  ```

  Alternativamente, modifique a sintaxe do Easy Connect no PHP e adicione
  `:POOLED` após o nome do serviço:

  ```
      $c = oci_pconnect("meu_usuario", "minha_senha", "meuhost.dom.com:1521/vendas:POOLED");
  ```
- Edite o php.ini e escolha um nome de classe de conexão. Este nome
  indica uma divisão lógica do conjunto de conexões e pode ser
  usado para isolar o conjunto para aplicações separadas. Quaisquer aplicações
  PHP com o mesmo nome de usuário e valor de classe de conexão
  poderão compartilhar conexões no conjunto, proporcionando maior
  escalabilidade.

  ```
      oci8.connection_class = "MY_APPLICATION_NAME"
  ```
- Execute a aplicação, conectando-se ao banco de dados 11g (ou posterior).

> **Nota**:
>
> Aplicações que usam bibliotecas Oracle Client 10g que exigem o desempenho de
> conexões persistentes podem reduzir a quantidade de memória do servidor de banco de dados
> necessária usando servidores Oracle `Shared`
> (anteriormente conhecidos como Multi Threaded Servers). Consulte a documentação
> da Oracle para obter informações.

> **Nota**:
>
> A alteração de senha em conexões DRCP falhará com o erro
> *ORA-56609: Usage not supported with DRCP* (uso não suportado com DRCP).
> Esta é uma restrição documentada do Oracle Database 11g.

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
