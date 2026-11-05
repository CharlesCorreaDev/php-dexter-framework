# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oci8.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração da OCI8**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [oci8.connection\_class](oci8.configuration.md#ini.oci8.connection-class) | "" | **`INI_ALL`** |  |
| [oci8.default\_prefetch](oci8.configuration.md#ini.oci8.default-prefetch) | "100" | **`INI_SYSTEM`** |  |
| [oci8.events](oci8.configuration.md#ini.oci8.events) | Off | **`INI_SYSTEM`** |  |
| [oci8.max\_persistent](oci8.configuration.md#ini.oci8.max-persistent) | "-1" | **`INI_SYSTEM`** |  |
| [oci8.old\_oci\_close\_semantics](oci8.configuration.md#ini.oci8.old-oci-close-semantics) | Off | **`INI_SYSTEM`** | Descontinuado a partir do PHP 8.1.0. |
| [oci8.persistent\_timeout](oci8.configuration.md#ini.oci8.persistent-timeout) | "-1" | **`INI_SYSTEM`** |  |
| [oci8.ping\_interval](oci8.configuration.md#ini.oci8.ping-interval) | "60" | **`INI_SYSTEM`** |  |
| [oci8.prefetch\_lob\_size](oci8.configuration.md#ini.oci8.prefetch-lob-size) | "0" | **`INI_SYSTEM`** | Disponível desde o PECL OCI8 3.2. |
| [oci8.privileged\_connect](oci8.configuration.md#ini.oci8.privileged-connect) | Off | **`INI_SYSTEM`** |  |
| [oci8.statement\_cache\_size](oci8.configuration.md#ini.oci8.statement-cache-size) | "20" | **`INI_SYSTEM`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`oci8.connection_class` [string](language.types.string.md)
:   Este texto definido pelo usuário deve sempre ser definido ao usar o Oracle Database
    Resident Connection Pooling (DRCP). Ele permite o subparticionamento do
    pool de conexões DRCP, permitindo que conexões persistentes OCI8 de uma
    aplicação reutilizem sessões de banco de dados de um script PHP anterior,
    proporcionando melhor escalabilidade. Quando uma aplicação usa um processo de pool
    de banco de dados usado anteriormente com uma classe de conexão diferente, as configurações
    da sessão, como por exemplo o formato de data padrão do Oracle, são redefinidas. Isso
    evita o compartilhamento acidental de informações entre diferentes
    aplicações.

    Este valor pode ser definido no momento da execução
    com a função [ini\_set()](function.ini-set.md) antes da conexão.

    Para usar o DRCP, o OCI8 deve estar vinculado às bibliotecas Oracle 11*g*
    (ou posterior) e o banco de dados deve ser Oracle
    11*g* (ou posterior). O pool de conexões DRCP deve ser
    habilitado no banco de dados, `oci8.connection_class`
    deve ser definido com a mesma string para todos os servidores web que executam a mesma
    aplicação e a string de conexão OCI8 deve especificar o uso de um
    servidor em pool. A aplicação deve usar conexões persistentes.

`oci8.default_prefetch` [int](language.types.integer.md)
:   Esta opção define o número padrão de linhas extras que serão
    buscadas e armazenadas em cache automaticamente sempre que for feita uma solicitação
    de baixo nível de dados do banco de dados. Definir um valor
    `0` desativa a pré-busca.

    O valor de pré-busca não altera o número de linhas que
    funções como [oci\_fetch\_array()](function.oci-fetch-array.md) retornam ao
    usuário; a pré-busca e o armazenamento em cache de linhas são tratados
    internamente no OCI8.

    O valor pode ser definido por instrução
    com [oci\_set\_prefetch()](function.oci-set-prefetch.md) antes da execução
    da instrução.

    Ao usar o Oracle Database 12*c* (ou posterior), o valor de
    pré-busca definido pelo PHP pode ser substituído pelo arquivo
    de configuração `oraaccess.xml` do cliente Oracle. Consulte
    a documentação da Oracle para obter mais detalhes.

    > **Nota**:
    >
    > Uma pré-busca maior pode resultar em melhor desempenho, ao
    > custo de um aumento no uso de memória. Para consultas que retornam
    > grandes quantidades de dados, o benefício de desempenho pode ser
    > significativo.

`oci8.events` [bool](language.types.boolean.md)
:   Usar `On` permite que o PHP seja notificado de
    eventos de Notificação Rápida de Aplicação (FAN) do banco de dados.

    Sem FAN, quando uma instância de banco de dados ou nó de máquina falha
    inesperadamente, as aplicações PHP podem ser bloqueadas aguardando uma
    resposta do banco de dados até que o tempo limite do TCP expire. Com eventos
    FAN, as aplicações PHP são rapidamente notificadas sobre falhas
    que afetam suas conexões de banco de dados estabelecidas. A extensão
    OCI8 limpará conexões inutilizáveis ​​no
    cache de conexões persistentes.

    Ao usar `On`, o banco de dados também precisa ser
    configurado para postar eventos FAN.

    O suporte FAN estará disponível quando o OCI8 estiver vinculado com bibliotecas Oracle
    10*g*R2 (ou posterior) e conectado a banco de dados Oracle
    10*g*R2 (ou posterior).

`oci8.max_persistent` [int](language.types.integer.md)
:   O número máximo de conexões OCI8 persistentes por processo
    PHP. Definir esta opção como -1 significa que não há
    limite.

`oci8.old_oci_close_semantics` [bool](language.types.boolean.md)
:   Esta opção controla o comportamento de [oci\_close()](function.oci-close.md).
    Ativá-lo significa que [oci\_close()](function.oci-close.md) não fará
    nada; a conexão não será
    fechada até o final do script. Isto é apenas para compatibilidade
    com versões anteriores. Se for necessário habilitar esta
    configuração, é *fortemente recomendado* o
    ajuste das chamadas a [oci\_close()](function.oci-close.md) na
    aplicação em vez de habilitar esta opção.

`oci8.persistent_timeout` [int](language.types.integer.md)
:   O número máximo de segundos que um processo PHP pode
    manter aberta uma conexão persistente ociosa. Definir esta
    opção como -1 significa que conexões persistentes ociosas serão
    retidas até que o processo PHP termine ou que a conexão
    seja explicitamente fechada com [oci\_close()](function.oci-close.md).

    > **Nota**:
    >
    > No PHP, a expiração de recursos ociosos não é baseada em alarme.
    > Ocorre quando o PHP termina o processamento de um script e verifica o
    > timestamp da última utilização dos recursos. Portanto, existe um paradoxo
    > de que conexões ociosas só podem ser fechadas quando há alguma
    > atividade (embora não necessariamente relacionada ao OCI8) no processo
    > PHP. Se houver mais de um processo PHP, cada um
    > deverá ser ativado individualmente para acionar a expiração de
    > seus recursos ociosos. A introdução do Database Resident
    > Connection Pooling (DRCP) no Oracle 11*g* resolve os problemas
    > de memória e recursos
    > que `oci8.max_persistent`
    > e `oci8.persistent_timeout` anteriormente
    > tentaram superar.

`oci8.ping_interval` [int](language.types.integer.md)
:   O número de segundos que devem passar antes de emitir um ping
    durante [oci\_pconnect()](function.oci-pconnect.md). Um ping garante
    que a conexão com o banco de dados seja válida. Quando definido como 0,
    as conexões persistentes serão executadas sempre
    que [oci\_pconnect()](function.oci-pconnect.md) for chamada. Para desativar
    completamente os pings, defina esta opção como -1.

    > **Nota**:
    >
    > Desabilitar pings permite que [oci\_pconnect()](function.oci-pconnect.md)
    > opere com a maior eficiência, mas o PHP pode não ser capaz
    > de detectar conexões inutilizáveis, como as causadas por queda
    > de rede, ou se o banco de dados Oracle caiu desde que o PHP
    > foi conectado, até que a conexão seja usada posteriormente no
    > script. Consulte a
    > documentação de [oci\_pconnect()](function.oci-pconnect.md) para obter mais informações.

`oci8.prefetch_lob_size` [int](language.types.integer.md)
:   Este é um parâmetro de ajuste que afeta o buffer interno de dados LOB.
    Aumentar esse valor pode melhorar o desempenho da busca de LOBs
    menores, reduzindo as viagens de ida e volta entre o PHP e o banco de dados. O uso
    da memória mudará.

    O valor afeta LOBs retornados como instâncias OCILob e também aqueles
    retornados usando **`OCI_RETURN_LOBS`**.

    O valor pode ser definido por instrução com
    [oci\_set\_prefetch\_lob()](function.oci-set-prefetch-lob.md) antes da execução
    da instrução.

    > **Nota**:
    >
    > Use com Oracle Database 12.2 ou posterior.

`oci8.privileged_connect` [bool](language.types.boolean.md)
:   Esta opção permite que as conexões usem as credenciais externas
    privilegiadas
    **`OCI_SYSOPER`** ou **`OCI_SYSDBA`**.

    > **Nota**:
    >
    > Definir isso como `On` pode permitir que scripts em servidores
    > web executados com os privilégios de usuário do sistema operacional apropriados se
    > conectem como usuários privilegiados do banco de dados sem exigir uma
    > senha do banco de dados. Isso pode ser um risco à segurança.

`oci8.statement_cache_size` [int](language.types.integer.md)
:   Esta opção permite o cache de instruções e especifica quantas
    instruções devem ser armazenadas em cache. Para desabilitar o cache de instruções basta definir
    esta opção como 0.

    O cache de instruções elimina a necessidade de transmitir o texto
    da instrução ao banco de dados e elimina a necessidade de transmitir quaisquer
    metadados sobre a instrução de volta ao PHP. Isto pode
    melhorar significativamente o desempenho geral do sistema em
    aplicações que reutilizam instruções durante o tempo de vida de uma
    conexão. Alguns "cursores" extras de banco de dados podem ser
    ser mantidas abertas sob a suposição de que as instruçõs serão
    reutilizadas.

    Configure esse valor para o tamanho do conjunto de instruções de trabalho
    usado pela aplicação. Definir um valor muito pequeno pode fazer com que
    as instruções sejam liberadas do cache antes de serem
    reutilizadas.

    Esta opção é mais útil com conexões persistentes.

    Ao usar o Oracle Database 12*c* (ou posterior), esse
    valor pode ser substituído e ajustado automaticamente pelo
    arquivo `oraaccess.xml` do cliente Oracle. Consulte a
    documentação da Oracle para obter mais detalhes.

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
