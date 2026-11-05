# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.config.php

---

# Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração do Driver Nativo MySQL**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [mysqlnd.collect\_statistics](mysqlnd.config.md#ini.mysqlnd.collect-statistics) | "1" | **`INI_SYSTEM`** |  |
| [mysqlnd.collect\_memory\_statistics](mysqlnd.config.md#ini.mysqlnd.collect-memory-statistics) | "0" | **`INI_SYSTEM`** |  |
| [mysqlnd.debug](mysqlnd.config.md#ini.mysqlnd.debug) | "" | **`INI_SYSTEM`** |  |
| [mysqlnd.log\_mask](mysqlnd.config.md#ini.mysqlnd.log-mask) | 0 | **`INI_ALL`** |  |
| [mysqlnd.mempool\_default\_size](mysqlnd.config.md#ini.mysqlnd.mempool-default-size) | 16000 | **`INI_ALL`** |  |
| [mysqlnd.net\_read\_timeout](mysqlnd.config.md#ini.mysqlnd.net-read-timeout) | "86400" | **`INI_ALL`** | Antes do PHP 7.2.0 o padrão era "31536000" e a mutabilidade era **`INI_SYSTEM`** |
| [mysqlnd.net\_cmd\_buffer\_size](mysqlnd.config.md#ini.mysqlnd.net-cmd-buffer-size) | "4096" | **`INI_SYSTEM`** |  |
| [mysqlnd.net\_read\_buffer\_size](mysqlnd.config.md#ini.mysqlnd.net-read-buffer-size) | "32768" | **`INI_SYSTEM`** |  |
| [mysqlnd.sha256\_server\_public\_key](mysqlnd.config.md#ini.mysqlnd.sha256-server-public-key) | "" | **`INI_PERDIR`** |  |
| [mysqlnd.trace\_alloc](mysqlnd.config.md#ini.mysqlnd.trace-alloc) | "" | **`INI_SYSTEM`** |  |
| [mysqlnd.fetch\_data\_copy](mysqlnd.config.md#ini.mysqlnd.fetch_data_copy) | 0 | **`INI_ALL`** | Removida a partir do PHP 8.1.0 |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`mysqlnd.collect_statistics` [bool](language.types.boolean.md)
:   Permite a coleta de várias estatísticas de clientes que podem ser
    acessadas através de [mysqli\_get\_client\_stats()](function.mysqli-get-client-stats.md) e
    [mysqli\_get\_connection\_stats()](mysqli.get-connection-stats.md)
    e também são mostradas na
    seção `mysqlnd` da saída da
    função [phpinfo()](function.phpinfo.md).

    Esta configuração ativa todas as
    [estatísticas do Driver Nativo
    MySQL](mysqlnd.stats.md) exceto aquelas relacionadas ao gerenciamento de memória.

`mysqlnd.collect_memory_statistics` [bool](language.types.boolean.md)
:   Permite a coleta de várias estatísticas de clientes que podem ser
    acessadas através de [mysqli\_get\_client\_stats()](function.mysqli-get-client-stats.md) e
    [mysqli\_get\_connection\_stats()](mysqli.get-connection-stats.md)
    e também são mostradas na
    seção `mysqlnd` da saída da
    função [phpinfo()](function.phpinfo.md).

    Esta definição de configuração ativa as estatísticas de gerenciamento
    de memória dentro do conjunto geral de
    [estatísticas do Driver Nativo
    MySQL](mysqlnd.stats.md).

`mysqlnd.debug` [string](language.types.string.md)
:   Grava a comunicação de todas as extenões que usam
    `mysqlnd` para o arquivo de registro especificado.

    O formato da diretiva é `mysqlnd.debug =
    "opção1[,parâmetro_opção1][:opção2[,parâmetro_opção2]]"`.

    As opções para a string de formato são as seguintes:

    - A[,arquivo] - Acrescenta saída de rastreamento ao arquivo especificado. Também garante
      que os dados sejam gravados após cada gravação. Isso é feito fechando
      e reabrindo o arquivo de rastreamento (isso é lento). Isso ajuda a garantir um
      arquivo de registro completo caso o aplicativo falhe.
    - a[,arquivo] - Acrescenta saída de rastreamento ao arquivo especificado.
    - d - Ativa a saída de macros DBUG\_<N> para o estado
      atual. Pode ser seguido por uma lista de palavras-chave que seleciona
      a saída apenas para as macros DBUG com essa palavra-chave. Uma lista vazia
      de palavras-chave implica em saída para todas as macros.
    - f[,funções] - Limita as ações do depurador à lista de funções
      especificada. Uma lista vazia de funções implica em que todas as funções
      são selecionadas.
    - F - Marca cada linha de saída do depurador com o nome do arquivo
      de origem que contém a macro que causa a saída.
    - i - Marca cada linha de saída do depurador com o PID do processo
      atual.
    - L - Marca cada linha de saída do depurador com o nome do número da linha do arquivo
      de origem da macro que causa a saída.
    - n - Marca cada linha de saída do depurador com a profundidade de aninhamento
      da função atual.
    - o[,arquivo] - Similar a a[,arquivo] mas sobrescreve o arquivo antigo, e não
      anexa.
    - O[,arquivo] - Similar a A[,arquivo] mas sobrescreve o arquivo antigo, e não
      anexa.
    - t[,N] - Ativa o rastreamento de fluxo de controle de função. A profundidade
      máxima de aninhamento é especificada por N e o padrão é 200.
    - x - Este opção ativa a criação de perfil de código.
    - m - Rastreia chamadas relacionadas à alocação e desalocação de memória.

    Example:

    ```
    d:t:x:O,/tmp/mysqlnd.trace
    ```

    > **Nota**:
    >
    > Este recurso está disponível apenas com uma compilação de depuração do PHP.

`mysqlnd.log_mask` [int](language.types.integer.md)
:   Define quais consultas serão registradas. O padrão é 0, que desativa o registro.
    Defina usando um número inteiro e não com constantes PHP. Por exemplo, um valor de
    48 (16 + 32) registrará consultas lentas que usam 'nenhum índice bom'
    (SERVER\_QUERY\_NO\_GOOD\_INDEX\_USED = 16) ou nenhum índice (SERVER\_QUERY\_NO\_INDEX\_USED = 32).
    Um valor de 2.043 (1 + 2 + 8 + ... + 1.024) registrará todos os tipos de consulta lenta.

    Os tipos são os seguintes: SERVER\_STATUS\_IN\_TRANS=1, SERVER\_STATUS\_AUTOCOMMIT=2,
    SERVER\_MORE\_RESULTS\_EXISTS=8, SERVER\_QUERY\_NO\_GOOD\_INDEX\_USED=16, SERVER\_QUERY\_NO\_INDEX\_USED=32,
    SERVER\_STATUS\_CURSOR\_EXISTS=64, SERVER\_STATUS\_LAST\_ROW\_SENT=128, SERVER\_STATUS\_DB\_DROPPED=256,
    SERVER\_STATUS\_NO\_BACKSLASH\_ESCAPES=512 e SERVER\_QUERY\_WAS\_SLOW=1024.

`mysqlnd.mempool_default_size` [int](language.types.integer.md)
:   Tamanho padrão do pool de memória mysqlnd, que é usado pelos conjuntos de resultados.

`mysqlnd.net_read_timeout` [int](language.types.integer.md)
:   `mysqlnd` e a Biblioteca Cliente MySQL,
    `libmysqlclient` usam APIs de rede diferentes.
    `mysqlnd` usa fluxos PHP, enquanto
    `libmysqlclient` usa seus próprio encapsulador em torno
    das chamadas de rede de nível operacional. O PHP, por padrão, define um tempo
    limite de leitura de 60s para fluxos. Isso é definido via
    php.ini,
    `default_socket_timeout`. Esse padrão se aplica a
    todos os fluxos que não definem nenhum outro valor de tempo limite.
    `mysqlnd` não define nenhum outro valor e,
    portanto, conexões de consultas de longa execução podem ser desconectadas
    após `default_socket_timeout` segundos, resultando
    em uma mensagem de erro "2006 - MySQL Server has gone
    away". A biblioteca cliente MySQL define um tempo limite padrão de
    24 \* 3600 segundos (1 dia) e espera que outros tempos limite
    ocorram, como tempos limites de TCP/IP. `mysqlnd` agora
    usa o mesmo tempo limite muito longo. O valor é configurável através
    de uma nova configuração php.ini:
    `mysqlnd.net_read_timeout`.
    `mysqlnd.net_read_timeout` é usado por qualquer
    extensão (`ext/mysql`,
    `ext/mysqli`, `PDO_MySQL`) que
    usa `mysqlnd`. `mysqlnd` diz
    aos fluxos PHP para usar `mysqlnd.net_read_timeout`.
    Favor observar que pode haver diferenças sutis entre
    `MYSQL_OPT_READ_TIMEOUT` da Biblioteca Cliente
    MySQL e fluxos PHP, por exemplo
    `MYSQL_OPT_READ_TIMEOUT` está documentado para funcionar
    apenas para conexões TCP/IP e, antes do MySQL 5.1.2, apenas para
    Windows. Os fluxos PHP podem não ter essa limitação. Por favor,
    verifique a documentação dos fluxos, em caso de dúvida.

`mysqlnd.net_cmd_buffer_size` [int](language.types.integer.md)
:   `mysqlnd` aloca um buffer interno de comando/rede
    de `mysqlnd.net_cmd_buffer_size` (no
    php.ini) bytes para cada conexão. Se um
    comando do protocolo MySQL cliente-servidor, por exemplo,
    `COM_QUERY` (consulta "normal"), não
    couber no buffer, `mysqlnd` aumentará o
    buffer ao tamanho necessário para enviar o comando. Sempre que o
    buffer for estendido para uma conexão,
    `command_buffer_too_small` será incrementado em
    um.

    Se `mysqlnd` tiver que aumentar o buffer além do
    tamanho inicial de `mysqlnd.net_cmd_buffer_size`
    bytes para quase todas as conexões, você deve considerar aumentar
    o tamanho padrão para evitar realocações.

    O tamanho do buffer padrão é 4.096 bytes, que é o menor valor possível.

    O valor também pode ser definido usando `mysqli_options(link,
    MYSQLI_OPT_NET_CMD_BUFFER_SIZE, size)`.

`mysqlnd.net_read_buffer_size` [int](language.types.integer.md)
:   Tamanho máximo do bloco de leitura em bytes ao ler o corpo de um pacote
    de comando MySQL. O protocolo cliente-servidor MySQL encapsula todos
    os seus comandos em pacotes. Os pacotes consistem em um pequeno cabeçalho e
    um corpo com a carga útil real. O tamanho do corpo está codificado no
    cabeçalho. `mysqlnd` lê o corpo em pedaços de
    `MIN(header.size, mysqlnd.net_read_buffer_size)`
    bytes. Se o corpo de um pacote for maior que
    `mysqlnd.net_read_buffer_size` bytes,
    `mysqlnd` terá que chamar `read()`
    múltiplas vezes.

    O valor também pode ser definido usando `mysqli_options(link,
    MYSQLI_OPT_NET_READ_BUFFER_SIZE, size)`.

`mysqlnd.sha256_server_public_key` [string](language.types.string.md)
:   Relacionado ao plug-in de autenticação SHA-256. Arquivo com a chave RSA
    pública do servidor MySQL.

    Os clientes podem omitir a configuração de uma chave RSA pública, especificar a chave através
    desta configuração do PHP ou definir a chave em tempo de execução usando
    [mysqli\_options()](mysqli.options.md). Se nenhum arquivo de chave RSA pública for
    fornecido pelo cliente, a chave será trocada como parte do
    procedimento de autenticação padrão do plug-in de autenticação SHA-256.

`mysqlnd.trace_alloc` [string](language.types.string.md)

`mysqlnd.fetch_data_copy` [int](language.types.integer.md)
:   Impõe cópia de conjuntos de resultados dos buffers internos
    do conjunto de resultados em variáveis ​​PHP em vez de usar a referência
    padrão e a lógica de cópia na gravação. Por favor, veja as
    [notas de implementação de gerenciamento de memória](mysqlnd.memory.md)
    para mais detalhes.

    Copiar conjuntos de resultados em vez de fazer referência a variáveis ​​PHP
    permite liberar a memória ocupada pelas variáveis ​​PHP anteriormente.
    Dependendo do código da API do usuário, das consultas reais do banco de dados e do
    tamanho de seus conjuntos de resultados, isso pode reduzir o consumo de memória
    do mysqlnd.

    Não defina se estiver usando PDO\_MySQL. PDO\_MySQL ainda não foi atualizado para suportar
    o novo modo de busca.

    > **Nota**:
    >
    > Removido a partir do PHP 8.1.0

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
