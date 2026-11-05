# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/errorfunc.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Erros e de Registros**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [error\_reporting](errorfunc.configuration.md#ini.error-reporting) | NULL | **`INI_ALL`** |  |
| [fatal\_error\_backtraces](errorfunc.configuration.md#ini.fatal-error-backtraces) | "1" | **`INI_ALL`** | Disponível a partir do PHP 8.5.0. |
| [display\_errors](errorfunc.configuration.md#ini.display-errors) | "1" | **`INI_ALL`** |  |
| [display\_startup\_errors](errorfunc.configuration.md#ini.display-startup-errors) | "1" | **`INI_ALL`** | Antes do PHP 8.0.0, o valor padrão era `"0"`. |
| [log\_errors](errorfunc.configuration.md#ini.log-errors) | "0" | **`INI_ALL`** |  |
| [log\_errors\_max\_len](errorfunc.configuration.md#ini.log-errors-max-len) | "1024" | **`INI_ALL`** | Sem efeito a partir do PHP 8.0.0, removido a partir do PHP 8.1.0. |
| [ignore\_repeated\_errors](errorfunc.configuration.md#ini.ignore-repeated-errors) | "0" | **`INI_ALL`** |  |
| [ignore\_repeated\_source](errorfunc.configuration.md#ini.ignore-repeated-source) | "0" | **`INI_ALL`** |  |
| [report\_memleaks](errorfunc.configuration.md#ini.report-memleaks) | "1" | **`INI_ALL`** | Descontinuada a partir do PHP 8.5.0 |
| [track\_errors](errorfunc.configuration.md#ini.track-errors) | "0" | **`INI_ALL`** | Descontinuado a partir do PHP 7.2.0, removido a partir do PHP 8.0.0. |
| [html\_errors](errorfunc.configuration.md#ini.html-errors) | "1" | **`INI_ALL`** |  |
| [xmlrpc\_errors](errorfunc.configuration.md#ini.xmlrpc-errors) | "0" | **`INI_SYSTEM`** |  |
| [xmlrpc\_error\_number](errorfunc.configuration.md#ini.xmlrpc-error-number) | "0" | **`INI_ALL`** |  |
| [docref\_root](errorfunc.configuration.md#ini.docref-root) | "" | **`INI_ALL`** |  |
| [docref\_ext](errorfunc.configuration.md#ini.docref-ext) | "" | **`INI_ALL`** |  |
| [error\_prepend\_string](errorfunc.configuration.md#ini.error-prepend-string) | NULL | **`INI_ALL`** |  |
| [error\_append\_string](errorfunc.configuration.md#ini.error-append-string) | NULL | **`INI_ALL`** |  |
| [error\_log](errorfunc.configuration.md#ini.error-log) | NULL | **`INI_ALL`** |  |
| [error\_log\_mode](errorfunc.configuration.md#ini.error-log-mode) | 0o644 | **`INI_ALL`** | Disponível a partir do PHP 8.2.0 |
| [syslog.facility](errorfunc.configuration.md#ini.syslog.facility) | "LOG\_USER" | **`INI_SYSTEM`** | Disponível a partir do PHP 7.3.0. |
| [syslog.filter](errorfunc.configuration.md#ini.syslog.filter) | "no-ctrl" | **`INI_ALL`** | Disponível a partir do PHP 7.3.0. |
| [syslog.ident](errorfunc.configuration.md#ini.syslog.ident) | "php" | **`INI_SYSTEM`** | Disponível a partir do PHP 7.3.0. |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`error_reporting` [int](language.types.integer.md)
:   Define o nível das reportagens de erros. O parâmetro é ou um inteiro
    representando um campo de bits ou constantes nomeadas. Os níveis e
    constantes de reportagens de erros estão descritos em
    [Constantes Predefinidas](errorfunc.constants.md) e no
    arquivo php.ini. Para definir em tempo de execução, use a função
    [error\_reporting()](function.error-reporting.md). Consulte também a diretiva
    [display\_errors](errorfunc.configuration.md#ini.display-errors).

    O padrão é **`E_ALL`**.

    Antes do PHP 8.0.0, o valor padrão era:
    **`E_ALL &
    ~E_NOTICE &
    ~E_STRICT &
    ~E_DEPRECATED`**.
    Isto significa que os diagnósticos de nível **`E_NOTICE`**,
    **`E_STRICT`** e **`E_DEPRECATED`**
    não eram mostrados.

    > **Nota**:
    > **Constantes do PHP fora do PHP**  
    >
    > Usar constantes do PHP fora do PHP, como no httpd.conf,
    > não terão significado algum, portanto, nesses casos, os valores [int](language.types.integer.md)
    > são necessários. E, como níveis de erro serão adicionados ao longo do tempo, o valor
    > máximo (para **`E_ALL`**) provavelmente será alterado. Portanto, no lugar de
    > **`E_ALL`**, considere usar um valor maior para cobrir todos os campos
    > de bits, tanto os de hoje como os do futuro, um valor numérico como
    > `2147483647` (inclui todos os erros, não apenas
    > **`E_ALL`**).

`fatal_error_backtraces` [bool](language.types.boolean.md)
:   Constrola se erros fatais devem incluir um rastreamento de pilha.
    Erros fatais são **`E_ERROR`**,
    **`E_CORE_ERROR`**, **`E_COMPILE_ERROR`**,
    **`E_USER_ERROR`**,
    **`E_RECOVERABLE_ERROR`** e
    **`E_PARSE`**.

`display_errors` [string](language.types.string.md)
:   Este parâmetro determina se os erros devem ser mostrados na tela
    como parte da saída ou se devem ser ocultados do usuário.

    - `Off` - não mostra nenhum erro.
    - `On` ou `stdout` - mostra erros em `stdout`. É o padrão.
    - `stderr` - mostra erros em `stderr`. Efetivo somento nos SAPIs `CLI`, `phpdbg` e `CGI`.

    O arquivo `php.ini-development` define para
    `On`; já o arquivo `php.ini-production` define
    para `Off`.

    > **Nota**:
    >
    > Este é um recurso para dar suporte ao desenvolvimento e nunca deve ser usado
    > em sistemas de produção (por exemplo, sistemas conectados à internet).

    > **Nota**:
    >
    > Embora display\_errors possa ser configurado em tempo de execução (com [ini\_set()](function.ini-set.md)),
    > ele não terá nenhum efeito se o script tiver erros fatais.
    > Isso ocorre porque a ação desejada em tempo de execução não é executada.

`display_startup_errors` [bool](language.types.boolean.md)
:   Mesmo quando display\_errors está ativado, erros que ocorrem durante a
    sequência de inicialização do PHP não são exibidos. É altamente
    recomendável manter display\_startup\_errors desativado, exceto para depuração.

`log_errors` [bool](language.types.boolean.md)
:   Informa se as mensagens de erro de script devem ser gravadas no
    registro de erros do servidor ou no local indicado por [error\_log](errorfunc.configuration.md#ini.error-log).
    Essa opção é, portanto, específica do servidor.

    > **Nota**:
    >
    > É altamente aconselhável usar o registro de erros em vez de
    > exibir erros em sites de produção.

`log_errors_max_len` [int](language.types.integer.md)
:   Define o comprimento máximo de log\_errors em bytes. Em
    [error\_log](errorfunc.configuration.md#ini.error-log), informações sobre a
    fonte são adicionadas. O padrão é 1024, e 0 permite não aplicar
    limite de comprimento.
    Esse tamanho é aplicado a erros registrados, erros exibidos e também a
    [$php\_errormsg](reserved.variables.phperrormsg.md), mas não a funções chamadas
    explicitamente como [error\_log()](function.error-log.md).

    Quando um [int](language.types.integer.md) é usado, o
    valor é medido em bytes. A notação abreviada, como descrita
    [nesta FAQ](faq.using.md#faq.using.shorthandbytes), também pode ser usada.

`ignore_repeated_errors` [bool](language.types.boolean.md)
:   Não registra mensagens repetidas. Erros repetidos devem ocorrer no mesmo
    arquivo e na mesma linha, a menos que
    [ignore\_repeated\_source](errorfunc.configuration.md#ini.ignore-repeated-source)
    seja definido como verdadeiro.

`ignore_repeated_source` [bool](language.types.boolean.md)
:   Ignora a fonte da mensagem quando estiver ignorando mensagens repetidas.
    Quando esta configuração estiver On, não serão registrados erros com
    mensagens repetidas de arquivos ou linhas diferentes.

`report_memleaks` [bool](language.types.boolean.md)
:   Se este parâmetro estiver definido como On (o padrão), este parâmetro mostrará um
    relatório de vazamentos de memória detectados pelo gerenciador de memória do Zend. Este relatório
    será enviado para stderr em plataformas Posix. No Windows, ele será enviado
    ao depurador usando o OutputDebugString() e poderá ser visualizado com ferramentas
    como [» DbgView](https://technet.microsoft.com/en-us/sysinternals/bb896647).
    Este parâmetro só tem efeito em uma compilação de depuração e se
    error\_reporting incluir **`E_WARNING`** na lista de
    erros permitidos.

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.5.0. O uso deste recurso
    é fortemente desencorajado.

`track_errors` [bool](language.types.boolean.md)
:   Se habilitado, a última mensagem de erro estará sempre presente na
    variável [$php\_errormsg](reserved.variables.phperrormsg.md).

`html_errors` [bool](language.types.boolean.md)
:   Se ativado, as mensagens de erro incluirão tags HTML. O formato para erros
    de HTML produz mensagens clicáveis que direcionam o usuário para uma
    página descrevendo o erro ou a função que está causando o erro. Essas
    referências são afetadas por
    [docref\_root](errorfunc.configuration.md#ini.docref-root) e
    [docref\_ext](errorfunc.configuration.md#ini.docref-ext).

    Se desativado, a mensagem de erro será apenas texto simples.

`xmlrpc_errors` [bool](language.types.boolean.md)
:   Se ativado, desativa o relatório de erros normal e formata os erros como
    mensagem de erro XML-RPC.

`xmlrpc_error_number` [int](language.types.integer.md)
:   Usado como o valor do elemento faultCode do XML-RPC.

`docref_root` [string](language.types.string.md)
:   O novo formato de erro contém uma referência a uma página que descreve o erro
    ou a função que está causando o erro. No caso de páginas de manual, pode-se
    baixar o manual no idioma próprio e definir esta diretiva ini para a URL da cópia
    local. Se a cópia local do manual puder ser alcançada por `"/manual/"`
    pode-se simplesmente usar **`docref_root=/manual/`**. Além disso,
    é necessário definir docref\_ext para corresponder às extensões de arquivo da cópia local
    **`docref_ext=.html`**. É possível usar referências
    externas. Por exemplo, pode-se usar
    **`docref_root=http://manual/en/`** ou
    **`docref_root="http://landonize.it/?how=url&theme=classic&filter=Landon
    &url=http%3A%2F%2Fwww.php.net%2F"`**

    Na maioria das vezes, é desejado que o valor docref\_root termine com uma barra
    `"/"`. Mas veja o segundo exemplo acima, que não tem nem precisa dela.

    > **Nota**:
    >
    > Este é um recurso para dar suporte ao desenvolvimento, pois facilita
    > a pesquisa da descrição de uma função. No entanto, nunca deve ser usado
    > em sistemas de produção (por exemplo, sistemas conectados à internet).

`docref_ext` [string](language.types.string.md)
:   Consulte [docref\_root](errorfunc.configuration.md#ini.docref-root).

    > **Nota**:
    >
    > O valor de docref\_ext deve começar com um ponto `"."`.

`error_prepend_string` [string](language.types.string.md)
:   String a ser mostrado antes de uma mensagem de erro.
    Usado apenas quando a mensagem de erro é mostrada na tela. O propósito principal
    é prover a capacidade de prefixar uma marcação HTML adicional à mensagem de erro.

`error_append_string` [string](language.types.string.md)
:   String para mostrar após uma mensagem de erro.
    Usado apenas quando a mensagem de erro é mostrada na tela. O propósito principal
    é prover a capacidade de posfixar uma marcação HTML adicional à mensagem de erro.

`error_log` [string](language.types.string.md)
:   Nome do arquivo onde os erros de script devem ser registrados. O arquivo
    deve ter permissão de escrita pelo usuário do servidor da web. Se o valor
    especial `syslog` for usado, os erros serão enviados ao
    registrador de erros do sistema. No Unix, isso significa syslog(3) e no
    Windows significa o Log de Eventos. Veja também:
    [syslog()](function.syslog.md).
    Se esta diretiva não estiver definida, os erros serão enviados para o
    registrador de erros SAPI.
    Por exemplo, é um log de erros no Apache ou `stderr`
    no CLI. Consulte também [error\_log()](function.error-log.md).

`error_log_mode` [int](language.types.integer.md)
:   Modo de arquivo para o arquivo definido em
    [error\_log](errorfunc.configuration.md#ini.error-log).

`syslog.facility` [string](language.types.string.md)
:   Especifica qual tipo de programa está registrando a mensagem.
    Apenas efetivo se [error\_log](errorfunc.configuration.md#ini.error-log) estiver definido como "syslog".

`syslog.filter` [string](language.types.string.md)
:   Especifica o tipo de filtro para filtrar as mensagens registradas.
    Caracteres permitidos são passados sem modificações; todos os outros são
    escritos em sua representação hexadecimal prefixados com `\x`.

    - `all` - a string registrada será partida
      nos caracteres de novas linhas, e todos os caracteres serão passados inalterados
    - `ascii` - a string registrada será partida
      nos caracteres de novas linhas, e qualquer caractere ASCII de 7 bits não imprimível será escapado
    - `no-ctrl` - a string registrada será partida
      nos caracteres de novas linhas, e qualquer caractere não imprimível será escapado
    - `raw` - todos os caracteres são passados ao registrador do
      sistema logger inalterados, sem separação novas linhas (idêntico ao PHP antes do 7.3)

    Esta configuração irá afetar o registro através de [error\_log](errorfunc.configuration.md#ini.error-log) definido para "syslog" e chamadas a [syslog()](function.syslog.md).

    > **Nota**:
    >
    > O tipo de filtro `raw` está disponível a partir do PHP 7.3.8 e do PHP 7.4.0.

    Esta diretiva não é suportada no Windows.

`syslog.ident` [string](language.types.string.md)
:   Especifica a string de identificação que é anexada a todas as mensagens.
    Somente é efetivo se [error\_log](errorfunc.configuration.md#ini.error-log) estiver definido como "syslog".

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
