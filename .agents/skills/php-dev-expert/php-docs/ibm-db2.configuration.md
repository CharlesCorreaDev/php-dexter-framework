# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ibm-db2.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de ibm\_db2**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [ibm\_db2.binmode](ibm-db2.configuration.md#ini.ibm-db2.binmode) | "1" | **`INI_ALL`** |  |
| [ibm\_db2.i5\_all\_pconnect](ibm-db2.configuration.md#ini.ibm-db2.i5-all-pconnect) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.6.5. |
| [ibm\_db2.i5\_allow\_commit](ibm-db2.configuration.md#ini.ibm-db2.i5-allow-commit) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.4.9. |
| [ibm\_db2.i5\_blank\_userid](ibm-db2.configuration.md#ini.ibm-db2.i5-blank-userid) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_char\_trim](ibm-db2.configuration.md#ini.ibm-db2.i5-char-trim) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 2.1.0. |
| [ibm\_db2.i5\_dbcs\_alloc](ibm-db2.configuration.md#ini.ibm-db2.i5-dbcs-alloc) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.5.0. |
| [ibm\_db2.i5\_guard\_profile](ibm-db2.configuration.md#ini.ibm-db2.i5-guard-profile) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_ignore\_userid](ibm-db2.configuration.md#ini.ibm-db2.i5-ignore-userid) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.8.0. |
| [ibm\_db2.i5\_job\_sort](ibm-db2.configuration.md#ini.ibm-db2.i5-job-sort) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.8.4. |
| [ibm\_db2.i5\_log\_verbose](ibm-db2.configuration.md#ini.ibm-db2.i5-log-verbose) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_max\_pconnect](ibm-db2.configuration.md#ini.ibm-db2.i5-max-pconnect) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_override\_ccsid](ibm-db2.configuration.md#ini.ibm-db2.i5-override-ccsid) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_servermode\_subsystem](ibm-db2.configuration.md#ini.ibm-db2.i5-servermode-subsystem) | NULL | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_sys\_naming](ibm-db2.configuration.md#ini.ibm-db2.i5-sys-naming) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.instance\_name](ibm-db2.configuration.md#ini.ibm-db2.instance-name) | NULL | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.0.2. |

Aqui está uma breve explicação das
diretivas de configuração.

`ibm_db2.binmode` [int](language.types.integer.md)
:   Esta opção controla o modo usado para converter de e para dados binários
    no aplicativo PHP.

    - 1 (DB2\_BINARY)
    - 2 (DB2\_CONVERT)
    - 3 (DB2\_PASSTHRU)

`ibm_db2.i5_all_pconnect` [int](language.types.integer.md)
:   Esta opção força todas as conexões a serem persistentes no IBM i.
    Basicamente, todas as chamadas [db2\_connect()](function.db2-connect.md) se tornam transparentemente
    chamadas [db2\_pconnect()](function.db2-pconnect.md).
    Por padrão, esta opção é `0`.
    Esta opção é fornecida como uma conveniência para casos em que as conexões
    persistentes são mais rápidas.
    Ela não deve ser usada em novas aplicações.

    - 0 - Conexões persistentes e não persistentes podem ser feitas.
    - 1 - Todas as conexões são persistentes.

`ibm_db2.i5_allow_commit` [int](language.types.integer.md)
:   Esta opção controla o modo de isolamento de transação usado.
    Por padrão, esta opção é `0`, então o controle de comprometimento não é usado.
    Esta opção pode ser substituída ao conectar se a chave de array
    `i5_commit` estiver definida no array de opções de conexão
    passada para [db2\_connect()](function.db2-connect.md) ou
    [db2\_pconnect()](function.db2-pconnect.md).

    - 0 - o controle de confirmação não é usado
    - 1 - leitura não cofirmada, leituras sujas são possíveis.
    - 2 - leitura confirmada, leituras sujas não são possíveis.
    - 3 - leituras repetíveis, leituras sujas e leituras não repetíveis não são possíveis
    - 4 - leituras serializáveis, sujas, não repetíveis e fantasmas não são possíveis

`ibm_db2.i5_blank_userid` [int](language.types.integer.md)
:   Esta opção controla se um ID de usuário em branco deve ser permitido no IBM i.
    Por padrão, esta opção é `0`.
    Ao contrário de `ibm_db2.i5_ignore_userid`, esta opção
    não força todos os IDs de usuário a ficarem vazios ou altera o comportamento do trabalho, mas
    simplesmente permite que um ID de usuário vazio seja passado, para conectar-se ao Db2 como o
    usuário atual.

    - 0 - Não permite que um ID de usuário em branco seja passado.
    - 1 - Permite que um ID de usuário em branco seja passado.

`ibm_db2.i5_char_trim` [int](language.types.integer.md)
:   Esta opção controla se o fim das strings são aparadas no IBM i.
    Como muitas tabelas usam tamanhos de coluna fixos preenchidos com espaços, isso é
    fornecido como uma conveniência.
    Por padrão, esta opção é `0`.

    - 0 - As colunas não são aparadas.
    - 1 - Espaços no final das colunas de caracteres retornadas são removidos.

`ibm_db2.i5_dbcs_alloc` [int](language.types.integer.md)
:   Esta opção afeta a estratégia de alocação de buffer interno no IBM i.
    Por padrão, esta opção é `0`.
    Quando esta opção é definida, os buffers são alocados com um tamanho muito maior,
    caso o banco de dados subestime o tamanho de uma string ao converter
    entre codificações.
    Esta opção usa seis vezes mais memória para buffers (para contabilizar
    as maiores sequências UTF-8 possíveis), mas pode ser necessária se dados truncados
    forem retornados.

    - 0 - Buffers de tamanho mínimo são alocados.
    - 1 - Buffers de tamanho maior são alocados.

`ibm_db2.i5_guard_profile` [int](language.types.integer.md)
:   Esta opção verifica se o perfil do usuário do banco de dados foi alternado ao
    conectar-se a uma conexão de banco de dados persistente no IBM i e, se sim,
    desconecta-se do banco de dados.
    Por padrão, esta opção é definida como `0`.

    - 0 - Não verifica trocas de perfil.
    - 1 - Verifica se há trocas de perfil e desconecta se houver.

`ibm_db2.i5_log_verbose` [int](language.types.integer.md)
:   Esta opção define se mensagens de diagnóstico SQL como avisos e erros são
    sempre enviadas para o log de erros do PHP no IBM i.
    Normalmente, apenas uma breve mensagem sobre falha é enviada (como "statement
    execute failed") para o log de erros do PHP, pois esta opção é definida como
    `0` por padrão.
    Observe que pode-se e deve-se chamar, por exemplo,
    [db2\_stmt\_errormsg()](function.db2-stmt-errormsg.md) manualmente como parte da verificação se
    as funções falharem.

    - 0 - Registra somente mensagens breves.
    - 1 - Registra mensagens de diagnóstico SQL, além das mensagens breves.

`ibm_db2.i5_ignore_userid` [int](language.types.integer.md)
:   Esta opção ignora o ID do usuário ao conectar-se ao banco de dados quando
    em execução no IBM i, e executa a funcionalidade SQL/CLI dentro do trabalho PHP,
    em vez de um trabalho separado.
    Por padrão, esta opção é `0`.
    Quando habilitada, ela não usa mais um trabalho de servidor de banco de dados separado, e
    sempre usa o perfil de usuário atual para o banco de dados, ignorando o
    nome de usuário e a senha passados ​​para [db2\_connect()](function.db2-connect.md) e
    [db2\_pconnect()](function.db2-pconnect.md).

    - 0 - Usa as credenciais especificadas e usa uma tarefa de servidor SQL/CLI.
    - 1 - Sempre usa credenciais em branco e executa SQL/CLI na tarefa do PHP.

`ibm_db2.i5_job_sort` [int](language.types.integer.md)
:   Controla a opção de classificação de trabalho no IBM i.
    Por padrão, esta opção é `0`.
    Isso corresponde ao atributo IBM i SQL/CLI
    `SQL_ATTR_CONN_SORT_SEQUENCE`.

    - 0 - Usa a opção de classificação `*HEX`, classificando por bytes.
    - 1 - Usa a sequência de classificação de tarefas definida para a tarefa PHP.
    - 2 - Usa a sequência de classificação de trabalho definida para a tarefa do banco de dados.

`ibm_db2.i5_max_pconnect` [int](language.types.integer.md)
:   Isso afetará quantas vezes uma conexão persistente pode ser reutilizada
    ao executar no IBM i.
    Por padrão, isso é definido como `0`, o que significa que uma conexão persistente
    sempre pode ser reutilizada.
    Esta opção pode ajudar a contornar problemas em um tarefa de banco de dados de longa execução
    (por exemplo, se um procedimento estiver vazando memória), mas obviamente não é uma correção de longo
    prazo.

`ibm_db2.i5_override_ccsid` [int](language.types.integer.md)
:   O CCSID PASE a ser usado para conversões de caracteres de EBCDIC no IBM i.
    Por padrão, este é `0`, que selecionará o CCSID do trabalho PASE padrão,
    que vem das configurações de localidade PASE.
    Por exemplo, definir isso como `1208` usará UTF-8.
    Isso só deve ser modificado se o CCSID da tarefa PASE não for o CCSID
    esperado e a localidade não puder ser modificada.

    Para saber mais sobre CCSIDs no IBM i, consulte a
    [» documentação IBM](https://www.ibm.com/docs/en/i/7.5?topic=information-ccsid-reference).
    Para saber como as localidades no IBM i PASE são mapeadas para CCSIDs, consulte a
    [» documentação IBM](https://www.ibm.com/docs/en/i/7.5?topic=ssw_ibm_i_75/apis/pase_locales.html).

`ibm_db2.i5_sys_naming` [int](language.types.integer.md)
:   Esta opção controla o modo de nomenclatura ao conectar-se a um sistema IBM i.
    Por padrão, esta opção é `0`.
    O modo de nomenclatura afeta como os nomes são resolvidos e a sintaxe permitida para
    nomes.
    Quando definido como `0`, isso usa pontos para qualificar nomes e
    usa a biblioteca padrão ou ID do usuário para resolver nomes.
    Quando definido como `1`, isso usa barras para qualificar nomes e
    usa a lista de bibliotecas de tarefas para resolver nomes.

    - 0 - Uusa o modo de nomenclatura SQL ("ESQUEMA.TABELA").
    - 1 - Usa o modo de nomenclatura do sistema ("BIBLIOTECA/ARQUIVO").

    Para saber mais sobre modos de nomenclatura no IBM i, consulte a
    [» documentação da IBM](https://www.ibm.com/docs/en/i/7.5?topic=application-naming-distributed-relational-database-objects).

`ibm_db2.i5_servermode-subsystem` [string](language.types.string.md)
:   Esta opção altera em qual subsistema as tarefas do servidor de banco de dados são executadas no
    IBM i.
    Por padrão, esta opção é **`null`**, portanto as tarefas serão executadas no subsistema
    padrão para tarefas QSQSRVR.

`ibm_db2.instance_name` [string](language.types.string.md)
:   Em sistemas operacionais Linux e UNIX, esta opção define o nome da
    instância a ser usada para conexões de banco de dados catalogadas.
    Por padrão, esta opção é **`null`**.
    Se esta opção for definida, seu valor substitui a
    configuração da variável de ambiente DB2INSTANCE.

    Esta opção é ignorada em sistemas operacionais Windows.

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
