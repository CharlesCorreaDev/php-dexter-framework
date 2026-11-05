# Descrição das principais diretivas do php.ini

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ini.core.php

---

## Descrição das principais diretivas do php.ini

Esta lista inclui as principais diretivas do php.ini que podemos definir para
configurar o PHP. Diretivas manipuladas por extensões são listadas
e detalhadas nas respectivas páginas de documentação da extensão;
Informações sobre diretivas de sessão, por exemplo, podem ser encontradas na
[página de sessões](session.configuration.md).

> **Nota**:
>
> Os padrões listados aqui são utilizados quando o php.ini não é carregado; os valores do php.ini de produção e desenvolvimento podem variar.

## Opções de Linguagem

**Opções de Linguagem e Configurações Diversas**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [short\_open\_tag](ini.core.md#ini.short-open-tag) | "1" | **`INI_PERDIR`** |  |
| [precision](ini.core.md#ini.precision) | "14" | **`INI_ALL`** |  |
| [serialize\_precision](ini.core.md#ini.serialize-precision) | "-1" | **`INI_ALL`** | Antes do PHP 7.1.0 o valor padrão era 17. |
| [disable\_functions](ini.core.md#ini.disable-functions) | "" | **`INI_SYSTEM`** apenas |  |
| [disable\_classes](ini.core.md#ini.disable-classes) | "" | php.ini apenas | Removida a partir do PHP 8.5.0 |
| [exit\_on\_timeout](ini.core.md#ini.exit-on-timeout) | "" | **`INI_ALL`** |  |
| [expose\_php](ini.core.md#ini.expose-php) | "1" | php.ini apenas |  |
| [hard\_timeout](ini.core.md#ini.hard-timeout) | "2" | **`INI_SYSTEM`** | Disponível a partir do PHP 7.1.0. |
| [zend.exception\_ignore\_args](ini.core.md#ini.zend.exception-ignore-args) | "0" | **`INI_ALL`** | Disponível a partir do PHP 7.4.0 |
| [zend.multibyte](ini.core.md#ini.zend.multibyte) | "0" | **`INI_ALL`** |  |
| [zend.script\_encoding](ini.core.md#ini.zend.script-encoding) | NULL | **`INI_ALL`** |  |
| [zend.detect-unicode](ini.core.md#ini.zend.detect-unicode) | NULL | **`INI_ALL`** |  |
| [zend.signal\_check](ini.core.md#ini.zend.signal-check) | "0" | **`INI_SYSTEM`** |  |
| [zend.assertions](ini.core.md#ini.zend.assertions) | "1" | **`INI_ALL`** com restrições |  |
| [zend.exception\_string\_param\_max\_len](ini.core.md#ini.zend.exception-string-param-max-len) | "15" | **`INI_ALL`** | Disponível a partir do PHP 8.0.0. |

Aqui está uma breve explicação das
diretivas de configuração.

`short_open_tag` [bool](language.types.boolean.md)
:   Informa ao PHP se a forma abreviada (**`<? ?>`**)
    da tag de abertura do PHP é permitida. Se quiser usar o PHP em
    conjunto com XML, esta opção pode ser desabilitada a fim de
    usar **`<?xml ?>`** em linha. Caso contrário,
    pode-se imprimir isto com o PHP, por exemplo **`<?php echo '<?xml
    version="1.0"?>'; ?>`**. Além disso, se desabilitada, deve ser usada
    a forma extensa da tag de abertura do PHP (**`<?php ?>`**).

    > **Nota**:
    >
    > Esta diretiva não afeta o equivalente
    > **`<?=`**, que está sempre disponível.

`precision` [int](language.types.integer.md)
:   O número de dígitos significativos exibidos em números de ponto flutuante.
    `-1` significa que um algoritmo avançado para arredondar
    estes números será utilizado.

`serialize_precision` [int](language.types.integer.md)
:   O número de dígitos significativos armazenados durante a serialização de números de pontos flutuantes.
    `-1` significa que um algoritmo avançado para arredondar
    estes números será utilizado.

`expose_php` [bool](language.types.boolean.md)
:   Expõe para o mundo que o PHP está instalado no servidor, o que inclui a
    versão do PHP dentro do header HTTP (por exemplo, X-Powered-By: PHP/5.3.7).

`disable_functions` [string](language.types.string.md)
:   Esta diretiva permite que certas funções sejam desabilitadas.
    Ela recebe uma lista de nomes de funções separadas por vírgula.
    A partir do PHP 8.0.0, desabilitar uma função remove sua definição,
    permitindo sua redefinição no nível do usuário.
    Antes do PHP 8.0.0, desabilitar uma função apenas evitava que
    a função fosse chamada.

    Apenas [funções internas](functions.internal.md) podem
    ser desabilitadas usando esta diretiva.
    [Funções definidas pelo usuário](functions.user-defined.md)
    não são afetadas.

    Esta diretiva deve ser configurada no php.ini.
    Ela não pode ser configurada no httpd.conf.

    **Aviso**

    Esta diretiva pode ser contornada e não deve ser considerada uma
    medida de segurança suficiente para ambientes de hospedagem compartilhados.

`disable_classes` [string](language.types.string.md)
:   Esta diretiva permite que certas classes sejam desabilitadas.
    Ela recebe uma lista de nomes de classes separadas por vírgula.
    Desabilitar uma classe apenas impede que ela seja instanciada.

    Somente classes internas podem ser desabilitadas ao usar esta diretiva.
    Classes definidas pelo usuário não são afetadas.

    Esta diretiva deve ser configurada no php.ini.
    Ela não pode ser configurada no httpd.conf.

    **Aviso**

    Esta diretiva pode ser contornada e não deve ser considerada uma
    medida de segurança suficiente para ambientes de hospedagem compartilhados.

    **Aviso**

    Este recurso foi
    *REMOVIDO* a partir do PHP 8.5.0.

`zend.assertions` [int](language.types.integer.md)
:   Quando configurada para `1`, código assertivo será gerado e
    executado (modo de desenvolvimento). Quando configurada para `0`
    então código assertivo será gerado mas ignorado (não executado)
    em tempo de execução. Quando configurada para `-1` código assertivo não
    será gerado, tornando as asserções sem custo (modo de produção).

    > **Nota**:
    >
    > Se um processo é iniciado em modo de produção, [zend.assertions](ini.core.md#ini.zend.assertions)
    > não poderá ser modificada em tempo de execução, já que o código para as asserções não foi gerado.
    >
    > Se um processo é iniciado em modo de desenvolvimento, [zend.assertions](ini.core.md#ini.zend.assertions)
    > não poderá ser configurada para `-1` em tempo de execução.

`zend.exception_string_param_max_len` [int](language.types.integer.md)
:   O tamanho máximo das strings na serialização string dos stack traces.
    Deve ser entre `"0"` e `"1000000"`.

`hard_timeout` [int](language.types.integer.md)
:   Quando o timeout é configurado em [max\_execution\_time](info.configuration.md#ini.max-execution-time)
    é alcançado, o runtime PHP irá descarregar os recursos de maneira organizada. Se
    algo travar nesse processo, o hard\_timeout irá começar a contar
    os segundos configurados. Se o hard\_timeout for atingido, o PHP irá
    descarregar de maneira desorganizada. Quando configurado para zero, o hard\_timeout está desconfigurado.

    Quando o PHP atinge o hard\_timeout, vai ocorrer algo parecido com isso::

    ```
    Fatal error: Maximum execution time of 30+2 seconds exceeded (terminated) in Unknown on line 0
    ```

`zend.exception_ignore_args` [bool](language.types.boolean.md)
:   Exclui argumentos de rastreamentos de pilha (stack traces), gerados a partir de exceções.

`zend.multibyte` [bool](language.types.boolean.md)
:   Permite a análise de arquivos fontes em codificações multibyte. Habilitar zend.multibyte
    é necessário para utilizar character sets como SJIS, BIG5, etc., que contém caracteres
    especiais em dados de strings multibyte. Codificações compatíveis com ISO-8859-1 como UTF-8,
    EUC, etc. não requerem esta opção.

    Habilitar o zend.multibyte requer que a extensão mbstring esteja disponível.

`zend.script_encoding` [string](language.types.string.md)
:   Este valor será usado a menos que uma diretiva
    [declare(encoding=...)](control-structures.declare.md#control-structures.declare.encoding)
    apareça no início do script. Quando uma codificação incompatível com ISO-8859-1
    é usada, ambas zend.multibyte e zend.script\_encoding devem ser usadas.

    Strings literais serão transliteradas de zend.script\_encoding para
    mbstring.internal\_encoding, como se a função
    [mb\_convert\_encoding()](function.mb-convert-encoding.md) tivesse sido chamada.

`zend.detect_unicode` [bool](language.types.boolean.md)
:   Verifica o BOM (Byte Order Mark) e determina se o arquivo contém caracteres
    multibyte válidos.
    Essa detecção é realizada antes do processamento de
    [\_\_halt\_compiler()](function.halt-compiler.md).
    Disponível apenas no modo Zend Multibyte.

`zend.signal_check` [bool](language.types.boolean.md)
:   Verifica se há manipuladores de sinais substituídos no encerramento.

`exit_on_timeout` [bool](language.types.boolean.md)
:   Esta é uma diretiva unicamente do módulo mod\_php do Apache1 que força um subprocesso do Apache a sair se ocorrer o timeout de execução do PHP.
    Esse timeout causa uma chamada interna a longjmp() no Apache1 que pode deixar algumas extensões em um estado
    inconsistente. Ao terminar o processo, quaisquer bloqueios ou memória pendentes serão liberados.

## Limites de Recursos

**Limites de Recursos**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [memory\_limit](ini.core.md#ini.memory-limit) | "128M" | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`memory_limit` [int](language.types.integer.md)
:   Define a quantidade máxima de memória em bytes que um script
    pode alocar. Isto ajuda a prevenir que scripts mal escritos
    consumam toda a memória disponível no servidor. Note que
    para que não haja limite de memória, esta diretiva deve ser configurada para `-1`.

    Quando um [int](language.types.integer.md) é usado, o
    valor é medido em bytes. A notação abreviada, como descrita
    [nesta FAQ](faq.using.md#faq.using.shorthandbytes), também pode ser usada.

Veja também: [max\_execution\_time](info.configuration.md#ini.max-execution-time).

## Ajustes de Desempenho

**Ajustes de Desempenho**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [realpath\_cache\_size](ini.core.md#ini.realpath-cache-size) | "4M" | **`INI_SYSTEM`** | Antes do PHP 7.0.16 e 7.1.2, o padrão era `"16K"` |
| [realpath\_cache\_ttl](ini.core.md#ini.realpath-cache-ttl) | "120" | **`INI_SYSTEM`** |  |

> **Nota**:
>
> O uso da diretiva [open\_basedir](ini.core.md#ini.open-basedir) irá
> *desativar* o cache do caminho real.

Aqui está uma breve explicação das
diretivas de configuração.

`realpath_cache_size` [int](language.types.integer.md)
:   Determina o tamanho do cache do realpath a ser usado pelo PHP. Este
    valor deve ser aumentado em sistemas onde o PHP abre muitos arquivos, para
    refletir a quantidade das operações de arquivo realizadas.

    O tamanho representa o número total de bytes nas strings de caminhos
    armazenadas, mais o tamanho dos dados associados à entrada de cache. Isto
    significa que para armazenar caminhos mais longos no cache, o tamanho de cache
    deve ser maior. Esse valor não controla diretamente o número de
    caminhos distintos que podem ser armazenados em cache.

    O tamanho necessário para os dados da entrada de cache depende do sistema operacional.

`realpath_cache_ttl` [int](language.types.integer.md)
:   Duração do tempo (em segundos) em que as informações do realpath deve ser armazenadas em cache
    para um dado arquivo ou diretório. Para sistemas com arquivos que raramente mudam,
    considere aumentar o valor.

## Manipulação de Dados

**Opções de Configuração de Manipulação de Dados**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [arg\_separator.output](ini.core.md#ini.arg-separator.output) | "&" | **`INI_ALL`** |  |
| [arg\_separator.input](ini.core.md#ini.arg-separator.input) | "&" | **`INI_PERDIR`** |  |
| [variables\_order](ini.core.md#ini.variables-order) | "EGPCS" | **`INI_PERDIR`** |  |
| [request\_order](ini.core.md#ini.request-order) | "" | **`INI_PERDIR`** |  |
| [auto\_globals\_jit](ini.core.md#ini.auto-globals-jit) | "1" | **`INI_PERDIR`** |  |
| [register\_argc\_argv](ini.core.md#ini.register-argc-argv) | "1" | **`INI_PERDIR`** | Descontinuada a partir do PHP 8.5.0 |
| [enable\_post\_data\_reading](ini.core.md#ini.enable-post-data-reading) | "1" | **`INI_PERDIR`** |  |
| [post\_max\_size](ini.core.md#ini.post-max-size) | "8M" | **`INI_PERDIR`** |  |
| [auto\_prepend\_file](ini.core.md#ini.auto-prepend-file) | NULL | **`INI_PERDIR`** |  |
| [auto\_append\_file](ini.core.md#ini.auto-append-file) | NULL | **`INI_PERDIR`** |  |
| [default\_mimetype](ini.core.md#ini.default-mimetype) | "text/html" | **`INI_ALL`** |  |
| [default\_charset](ini.core.md#ini.default-charset) | "UTF-8" | **`INI_ALL`** |  |
| [input\_encoding](ini.core.md#ini.input-encoding) | "" | **`INI_ALL`** |  |
| [output\_encoding](ini.core.md#ini.output-encoding) | "" | **`INI_ALL`** |  |
| [internal\_encoding](ini.core.md#ini.internal-encoding) | "" | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`arg_separator.output` [string](language.types.string.md)
:   O separador usado em URLs gerados pelo PHP para separar argumentos.

`arg_separator.input` [string](language.types.string.md)
:   Lista de separadores usados pelo PHP para analisar URLs de entrada em variáveis.

    > **Nota**:
    >
    > Cada caractere nesta diretiva é considerado como separador!

`variables_order` [string](language.types.string.md)
:   Configura a ordem de análise das variáveis EGPCS (`E`nvironment,
    `G`et, `P`ost,
    `C`ookie e `S`erver).
    Por exemplo, se variables\_order estiver configurada
    como `"SP"` então o PHP irá criar as variáveis
    [superglobals](language.variables.predefined.md) [$\_SERVER](reserved.variables.server.md) e
    [$\_POST](reserved.variables.post.md), mas não irá criar
    [$\_ENV](reserved.variables.environment.md), [$\_GET](reserved.variables.get.md) e
    [$\_COOKIE](reserved.variables.cookies.md). Configurar como "" significa que nenhuma
    [superglobals](language.variables.predefined.md) será definida.

    **Aviso**

    Em ambas as SAPIs CGI e FastCGI,
    [$\_SERVER](reserved.variables.server.md) também
    é preenchida por valores do ambiente; `S`
    é sempre equivalente a `ES` independentemente da
    inclusão de `E` em outra parte desta diretiva.

    > **Nota**:
    >
    > O conteúdo e a ordem de
    > [$\_REQUEST](reserved.variables.request.md) também são
    > afetados por esta diretiva.

`request_order` [string](language.types.string.md)
:   Esta diretiva descreve a ordem na qual o PHP registra as variáves GET, POST
    e Cookie no array \_REQUEST. O registro é feito
    da esquerda para direita, valores mais recentes sobrescrevem os valores mais antigos.

    Se esta diretiva não está definida [variables\_order](ini.core.md#ini.variables-order) é usada para o conteúdo de
    [$\_REQUEST](reserved.variables.request.md).

    Note que os arquivos php.ini da distribuição padrão não contêm
    o `'C'` para cookies, por motivos de segurança.

`auto_globals_jit` [bool](language.types.boolean.md)
:   Quando ativada, as variáveis SERVER, REQUEST e ENV são criadas quando elas são
    usadas pela primeira vez ("Just In Time") ao invés de quando o script inicia. Se estas
    variáveis não são usadas dentro de um script, habilitar esta diretiva resultará
    em um ganho de desempenho.

    **Aviso**

    O uso das variáveis SERVER, REQUEST e ENV é verificado durante o tempo de compilação
    então usá-las, por exemplo, em [variáveis variáveis](language.variables.variable.md) não
    causará sua inicialização.

`register_argc_argv` [bool](language.types.boolean.md)
:   Informa ao PHP se deve declarar variáveis argv & argc
    (que podem conter as informações das requisições GET).

    Veja também [PHP em linha de comando](features.commandline.md).

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.5.0. O uso deste recurso
    é fortemente desencorajado.

    > **Nota**:
    >
    > Derivar `$_SERVER['argc']` e `$_SERVER['argv']`
    > a partir da query string para SAPIs não-CLI foi descontinuado.
    > Configure `register_argc_argv=0` e use
    > [$\_GET](reserved.variables.get.md) ou `$_SERVER['QUERY_STRING']`
    > para acessar a informação, depois de verificar que esse uso é seguro.

`enable_post_data_reading` [bool](language.types.boolean.md)
:   Desabilitar esta opção faz com que [$\_POST](reserved.variables.post.md) e
    [$\_FILES](reserved.variables.files.md) *não* sejam preenchidos. O
    corpo da requisição permanecerá não consumido em
    [php://input](wrappers.php.md) e pode ser lido manualmente
    ou analisado por [request\_parse\_body()](function.request-parse-body.md).
    Isto pode ser útil para requisições de proxy ou para processar dados POST de uma
    maneira eficiente em termos de memória.

`post_max_size` [int](language.types.integer.md)
:   Configura o tamanho máximo dos dados postados. Esta configuração também afeta
    o upload de arquivos. Para carregar arquivos grandes este valor deve ser maior
    que [upload\_max\_filesize](ini.core.md#ini.upload-max-filesize).

    De maneira geral
    [memory\_limit](ini.core.md#ini.memory-limit) deve ser
    maior que `post_max_size`.

    Quando um [int](language.types.integer.md) é usado, o
    valor é medido em bytes. A notação abreviada, como descrita
    [nesta FAQ](faq.using.md#faq.using.shorthandbytes), também pode ser usada.

    Se o tamanho dos dados postados for maior que post\_max\_size então as variáveis
    [superglobals](language.variables.superglobals.md)
    [$\_POST](reserved.variables.post.md) e [$\_FILES](reserved.variables.files.md)
    ficarão vazias. Isto pode ser observado de várias maneiras, por exemplo, passando uma
    variável [$\_GET](reserved.variables.get.md) ao script que processará os dados,
    por exemplo, `<form action="edit.php?processed=1">`,
    e então verificando se [$\_GET['processed']](reserved.variables.get.md) está preenchida.

    > **Nota**:
    >
    > O PHP permite sufixos para valores em bytes, incluindo K (kilo), M (mega)
    > e G (giga). O PHP fará as conversões automaticamente se forem
    > utilizados qualquer um destes. Cuidado para não exceder o limite de inteiros com sinal de 32 bits
    > (ao usar versões de 32 bits) uma vez que isso fará o script
    > falhar.

    **Registro de alterações de `post_max_size`**

    | Versão | Descrição |
    | --- | --- |
    | 5.3.4 | `post_max_size` = 0 não irá desabilitar o limite quando o conteúdo for do tipo application/x-www-form-urlencoded ou não esteja registrado no PHP. |
    | 5.3.2 , 5.2.12 | Permite tamanho ilimitado de dados postados ao configurar `post_max_size` como 0. |

`auto_prepend_file` [string](language.types.string.md)
:   Especifica o nome de um arquivo que é automaticamente analisado
    antes do arquivo principal. O arquivo é incluído como se tivesse sido
    chamado com [require](function.require.md), então
    [include\_path](ini.core.md#ini.include-path) é utilizado.

    O valor especial `none`
    desativa a auto-inclusão.

`auto_append_file` [string](language.types.string.md)
:   Especifica o nome de um arquivo que é automaticamente analisado
    depois do arquivo principal. O arquivo é incluído como se tivesse sido
    chamado com [require](function.require.md), então
    [include\_path](ini.core.md#ini.include-path) é utilizado.

    O valor especial `none`
    desativa a auto-inclusão.
    > **Nota**:
    >
    > Se o script for terminado com [exit()](function.exit.md),
    > então a auto-inclusão *não* ocorrerá.

`default_mimetype` [string](language.types.string.md)
:   Por padrão o PHP irá imprimir um media type utilizando o header
    Content-Type. Para desabilitar o envio da codificação configure esta opção como vazio.

    O padrão interno do PHP é o media type text/html.

`default_charset` [string](language.types.string.md)
:   "UTF-8" é o valor padrão e o valor desta diretiva é utilizado
    como o character set padrão para
    [htmlentities()](function.htmlentities.md),
    [html\_entity\_decode()](function.html-entity-decode.md) e
    [htmlspecialchars()](function.htmlspecialchars.md) se o parâmetro
    `encoding` for omitido. O valor de
    `default_charset` também será utilizado para configurar o
    character set padrão para as funções [iconv](book.iconv.md)
    se as opções de configuração
    [`iconv.input_encoding`](iconv.configuration.md#ini.iconv.input-encoding),
    [`iconv.output_encoding`](iconv.configuration.md#ini.iconv.output-encoding) e
    [`iconv.internal_encoding`](iconv.configuration.md#ini.iconv.internal-encoding)
    não estiverem definidas, e também para as funções
    [mbstring](book.mbstring.md) se as opções de configuração
    [`mbstring.http_input`](mbstring.configuration.md#ini.mbstring.http-input),
    [`mbstring.http_output`](mbstring.configuration.md#ini.mbstring.http-output) e
    [`mbstring.internal_encoding`](mbstring.configuration.md#ini.mbstring.internal-encoding)
    não estiverem definidas.

    Todas as versões do PHP usarão este valor como o charset no
    header padrão Content-Type enviado pelo PHP caso o header não seja sobrescrito
    por uma chamada à função [header()](function.header.md).

    Configurar `default_charset` para um valor vazio
    não é recomendado.

`input_encoding` [string](language.types.string.md)
:   Esta configuração é utilizada por módulos multibyte
    como mbstring e iconv. O padrão é vazio.

`output_encoding` [string](language.types.string.md)
:   Esta configuração é utilizada por módulos multibyte
    como mbstring e iconv. O padrão é vazio.

`internal_encoding` [string](language.types.string.md)
:   Esta configuração é utilizada por módulos multibyte
    como mbstring e iconv. O padrão é vazio. Se vazio,
    [default\_charset](ini.core.md#ini.default-charset) é utilizado.

## Caminhos e Diretórios

**Caminhos e Opções de Configuração de Diretórios**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [include\_path](ini.core.md#ini.include-path) | ".;/path/to/php/pear" | **`INI_ALL`** |  |
| [open\_basedir](ini.core.md#ini.open-basedir) | NULL | **`INI_ALL`** |  |
| [doc\_root](ini.core.md#ini.doc-root) | NULL | **`INI_SYSTEM`** |  |
| [user\_dir](ini.core.md#ini.user-dir) | NULL | **`INI_SYSTEM`** |  |
| [user\_ini.cache\_ttl](ini.core.md#ini.user-ini.cache-ttl) | "300" | **`INI_SYSTEM`** |  |
| [user\_ini.filename](ini.core.md#ini.user-ini.filename) | ".user.ini" | **`INI_SYSTEM`** |  |
| [extension\_dir](ini.core.md#ini.extension-dir) | "/path/to/php" | **`INI_SYSTEM`** |  |
| [extension](ini.core.md#ini.extension) | NULL | Apenas no php.ini |  |
| [zend\_extension](ini.core.md#ini.zend-extension) | NULL | Apenas no php.ini |  |
| [cgi.check\_shebang\_line](ini.core.md#ini.cgi.check-shebang-line) | "1" | **`INI_SYSTEM`** |  |
| [cgi.discard\_path](ini.core.md#ini.cgi.discard-path) | "0" | **`INI_SYSTEM`** |  |
| [cgi.fix\_pathinfo](ini.core.md#ini.cgi.fix-pathinfo) | "1" | **`INI_SYSTEM`** |  |
| [cgi.force\_redirect](ini.core.md#ini.cgi.force-redirect) | "1" | **`INI_SYSTEM`** |  |
| [cgi.nph](ini.core.md#ini.cgi.nph) | "0" | **`INI_SYSTEM`** |  |
| [cgi.redirect\_status\_env](ini.core.md#ini.cgi.redirect-status-env) | NULL | **`INI_SYSTEM`** |  |
| [cgi.rfc2616\_headers](ini.core.md#ini.cgi.rfc2616-headers) | "0" | **`INI_ALL`** |  |
| [fastcgi.impersonate](ini.core.md#ini.fastcgi.impersonate) | "0" | **`INI_SYSTEM`** |  |
| [fastcgi.logging](ini.core.md#ini.fastcgi.logging) | "1" | **`INI_SYSTEM`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`include_path` [string](language.types.string.md)
:   Especifica uma lista de diretórios onde as funções
    [require](function.require.md), [include](function.include.md),
    [fopen()](function.fopen.md), [file()](function.file.md),
    [readfile()](function.readfile.md) e [file\_get\_contents()](function.file-get-contents.md)
    procuram por arquivos. O formato é como a variável de ambiente
    PATH: uma lista de diretórios
    separados por dois pontos no Unix ou ponto e vírgula no Windows.

    O PHP considera cada item no include\_path separadamente ao procurar por
    arquivos para incluir. Ele irá verificar o primeiro caminho, e se não o encontrar,
    verificar o próximo caminho, até que encontre o arquivo incluído ou
    retorne com um
    **`E_WARNING`**
    ou um **`E_ERROR`**.
    Pode-se modificar ou configurar o include\_path em tempo de execução usando
    [set\_include\_path()](function.set-include-path.md).

    **Exemplo #1 include\_path no Unix**

    ```
    include_path=".:/php/includes"
    ```

    **Exemplo #2 include\_path no Windows**

    ```
    include_path=".;c:\php\includes"
    ```

    Utilizar um `.` no include\_path permite
    inclusões relativas ao diretório atual. Entretanto
    é mais eficiente utilizar explicitamente `include
    './file'` em vez de fazer o PHP sempre procurar no diretório
    atual a cada inclusão.

    > **Nota**:
    >
    > Variáveis `ENV` também estão acessíveis em arquivos .ini.
    > Assim é possível referenciar o diretório home utilizando
    > `${LOGIN}` e `${USER}`.
    >
    > Variáveis de ambiente podem variar entre APIs de servidor já que esses ambientes
    > podem ser diferentes.

    **Exemplo #3 include\_path do Unix utilizando a variável de ambiente ${USER}**

    ```
    include_path = ".:${USER}/pear/php"
    ```

`open_basedir` [string](language.types.string.md)
:   Limita os arquivos que podem ser acessados pelo PHP à árvore de diretório
    especificada, incluindo o próprio arquivo.

    Quando um script tenta acessar o sistema de arquivos, por exemplo utilizando
    [include](function.include.md) ou [fopen()](function.fopen.md), a localização do arquivo
    é verificada.
    Quando o arquivo está fora da árvore de diretório especificada, o PHP se recusará a acessá-lo.
    Todos os links simbólicos são resolvidos, então não é possível evitar esta restrição
    com um link simbólico. Se o arquivo não existe então o link simbólico não pode ser
    resolvido e o nome do arquivo é comparado a um **open\_basedir** (resolvido).

    **open\_basedir** pode afetar mais que apenas as funções de sistema de arquivos; por exemplo,
    se o `MySQL` está configurado para utilizar os drivers `mysqlnd`,
    `LOAD DATA INFILE` será afetado por **open\_basedir**.
    Grande parte da funcionalidade estendida do PHP utiliza `open_basedir` desta maneira.

    O valor especial `.`
    indica que o diretório atual do script será utilizado como o
    diretório base. Isto é, no entanto, perigoso pois o diretório atual
    do script pode ser facilmente alterado com [chdir()](function.chdir.md).

    No httpd.conf **open\_basedir** pode ser desabilitada
    (por exemplo, em alguns hosts virtuais)
    [da mesma forma](configuration.changes.md#configuration.changes.apache) que
    quaisquer outras diretivas de configuração com "`php_admin_value open_basedir
    none`".

    No Windows os diretórios são separados com um ponto e vírgula. Em todos
    os outros sistemas os diretórios são separados com dois pontos. Como um
    módulo Apache os caminhos de **open\_basedir** de diretórios pai agora são
    automaticamente herdados.

    A restrição especificada com **open\_basedir** é um
    nome de diretório, não um prefixo.

    O padrão é permitir que todos os arquivos sejam abertos.

    > **Nota**:
    >
    > open\_basedir pode ser restringido em tempo de execução. Isto significa
    > que se open\_basedir é configurado para `/www/` no php.ini
    > então um script pode restringir a configuração para
    > `/www/tmp/` em tempo de execução com
    > [ini\_set()](function.ini-set.md). Ao listar vários diretórios é
    > possível utilizar a constante **`PATH_SEPARATOR`** como um separador
    > independentemente do sistema operacional.
    >
    > A partir do PHP 8.3.0, **open\_basedir** não aceita mais um
    > caminho contendo o diretório superior (`..`) quando
    > definido no momento da execução usando [ini\_set()](function.ini-set.md).

    > **Nota**:
    >
    > O uso da diretiva open\_basedir definirá [realpath\_cache\_size](ini.core.md#ini.realpath-cache-size)
    > como `0` e assim *desabilitará* o cache do caminho real.

    **Cuidado**

    `open_basedir` é rede de segurança extra, mas não é uma proteção
    total, e portanto não deve-se depender para garantir a segurança.

`doc_root` [string](language.types.string.md)
:   O "diretório raiz" do PHP no servidor. Utilizado apenas
    se estiver informado.
    Se o PHP não foi compilado com FORCE\_REDIRECT, o doc\_root *precisa* ser configurado quando o PHP estiver sendo executado em modo CGI em qualquer
    servidor web (diferente do IIS). A alternativa é utilizar a configuração
    [cgi.force\_redirect](ini.core.md#ini.cgi.force-redirect) abaixo.

`user_ini.cache_ttl` [int](language.types.integer.md)

`user_ini.filename` [string](language.types.string.md)

`user_dir` [string](language.types.string.md)
:   O nome base do diretório utilizado como diretório home do usuário pelos
    arquivos do PHP, por exemplo public\_html
    .

`extension_dir` [string](language.types.string.md)
:   O diretório no qual o PHP deve procurar por extensões carregadas
    dinamicamente. É recomendado especificar um caminho absoluto. Veja também: [enable\_dl](info.configuration.md#ini.enable-dl)
    e [dl()](function.dl.md).

`extension` [string](language.types.string.md)
:   Quais extensões carregáveis dinamicamente carregar quando o PHP inicia.

`zend_extension` [string](language.types.string.md)
:   Nome da extensão Zend carregável dinamicamente (por exemplo,
    XDebug) a carregar quando o PHP inicia.

`cgi.check_shebang_line` [bool](language.types.boolean.md)
:   Controla se o PHP CGI verifica linhas iniciando
    com `#!` (shebang) no início do script em execução.
    Esta linha pode ser necessária se o script suporta execução tanto como
    script autônomo e via PHP CGI. O PHP em modo
    CGI pula esta linha e ignora seu conteúdo se
    esta diretiva estiver habilitada.

`cgi.discard_path` [bool](language.types.boolean.md)
:   Se habilitada, o binário PHP CGI pode ser colocado com segurança fora
    da árvore de diretório web e não será possível contornar a segurança .htaccess.

`cgi.fix_pathinfo` [bool](language.types.boolean.md)
:   Fornece suporte *real* a `PATH_INFO`/
    `PATH_TRANSLATED` para CGI.
    O comportamento anterior do PHP era definir `PATH_TRANSLATED`
    como `SCRIPT_FILENAME` e não perceber o que `PATH_INFO` é. Para mais informações sobre
    `PATH_INFO`, veja as especificações do modo CGI.
    Configurar esta diretiva para `1` fará o modo
    CGI corrigir seus caminhos para obedecer à especificação.
    Configurar com zero faz o PHP se comportar como antes. Ela é habilitada por
    padrão. Os scripts devem ser corrigidos de forma a usar
    `SCRIPT_FILENAME` ao invés de
    `PATH_TRANSLATED`.

`cgi.force_redirect` [bool](language.types.boolean.md)
:   cgi.force\_redirect é necessário para prover segurança ao executar o PHP em modo
    CGI na maioria dos servidores web. Se deixada indefinida, o PHP
    irá habilitá-la por padrão. Desabilitá-la é *um risco de
    segurança*.

    > **Nota**:
    >
    > Usuários do Windows: Ao utilizar o IIS esta opção *deve*
    > ser desabilitada. O mesmo vale para servidores OmniHTTPD e Xitami.

`cgi.nph` [bool](language.types.boolean.md)
:   Se cgi.nph estiver habilitada, forçará o CGI a enviar sempre Status: 200 em
    todas as requisições.

`cgi.redirect_status_env` [string](language.types.string.md)
:   Se cgi.force\_redirect estiver habilitada e não estiverem sendo executados
    servidores web Apache ou Netscape (iPlanet), *pode* ser
    necessário configurar um nome de variável de ambiente que o PHP irá procurar
    para saber que é correto continuar a execução.

    > **Nota**:
    >
    > Configurar esta variável *pode* causar problemas de segurança,
    > *deve-se ter certeza do que está sendo feito antes de realizar alterações*.

`cgi.rfc2616_headers` [bool](language.types.boolean.md)
:   Indica ao PHP qual o tipo de headers usar ao enviar o código de resposta
    HTTP. Se estiver desabilitada, o PHP envia um header "Status:" da [» RFC 3875](https://datatracker.ietf.org/doc/html/rfc3875)
    que é suportado pelo Apache e outros servidores web. Quando esta opção
    é habilitada, o PHP enviará headers em conformidade com a
    [» RFC 2616](https://datatracker.ietf.org/doc/html/rfc2616).

    Se esta opção estiver habilitada e o PHP estiver rodando em um ambiente CGI (por exemplo, PHP-FPM)
    não devem ser utilizados headers de resposta de status HTTP no padrão RFC 2616. Em vez disso,
    deve ser usado o seu equivalente RFC 3875, por exemplo, em vez de header("HTTP/1.0 404 Not found");
    deve ser usado header("Status: 404 Not Found");.

    Deixe-a desabilitada a não ser que saiba exatamente o que está fazendo.

`fastcgi.impersonate` [bool](language.types.boolean.md)
:   O FastCGI rodando no IIS (em sistemas baseados em WINNT) suporta a habilidade de representar
    os tokens de segurança do cliente que faz a requisição. Isso permite ao IIS definir o
    contexto de segurança no qual a requisição executa. O mod\_fastcgi rodando no Apache
    atualmente não suporta esta funcionalidade (17/03/2002).
    Habilite ao rodar no ISS. O padrão é desabilitado.

`fastcgi.logging` [bool](language.types.boolean.md)
:   Ativa o logging do SAPI ao utilizar o FastCGI. O padrão é
    habilitar o logging.

## Upload de Arquivos

**Opções de Configurações de Upload de Arquivos**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [file\_uploads](ini.core.md#ini.file-uploads) | "1" | **`INI_SYSTEM`** |  |
| [upload\_tmp\_dir](ini.core.md#ini.upload-tmp-dir) | NULL | **`INI_SYSTEM`** |  |
| [max\_input\_nesting\_level](info.configuration.md#ini.max-input-nesting-level) | 64 | **`INI_PERDIR`** |  |
| [max\_input\_vars](info.configuration.md#ini.max-input-vars) | 1000 | **`INI_PERDIR`** |  |
| [upload\_max\_filesize](ini.core.md#ini.upload-max-filesize) | "2M" | **`INI_PERDIR`** |  |
| [max\_file\_uploads](ini.core.md#ini.max-file-uploads) | 20 | **`INI_PERDIR`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`file_uploads` [bool](language.types.boolean.md)
:   Permite ou não
    [upload de arquivos](features.file-upload.md) através do HTTP. Veja também as diretivas
    [upload\_max\_filesize](ini.core.md#ini.upload-max-filesize),
    [upload\_tmp\_dir](ini.core.md#ini.upload-tmp-dir) e
    [post\_max\_size](ini.core.md#ini.post-max-size).

`upload_tmp_dir` [string](language.types.string.md)
:   O diretório temporário utilizado para armazenar arquivos durante o
    upload. Precisa ter permissão de escrita para qualquer usuário que o PHP
    esteja usando para rodar. Se não especificado o PHP usará o padrão do sistema.

    Se o diretório especificado aqui não tiver permissão de escrita, o PHP tenta o
    diretório temporário padrão do sistema. Se
    [open\_basedir](ini.core.md#ini.open-basedir) estiver habilitado, então
    o diretório padrão do sistema deve ser permitido para que o upload
    tenha sucesso.

`upload_max_filesize` [int](language.types.integer.md)
:   O tamanho máximo de um arquivo enviado.

    [post\_max\_size](ini.core.md#ini.post-max-size) precisa ser maior que esse valor.

    Quando um [int](language.types.integer.md) é usado, o
    valor é medido em bytes. A notação abreviada, como descrita
    [nesta FAQ](faq.using.md#faq.using.shorthandbytes), também pode ser usada.

`max_file_uploads` [int](language.types.integer.md)
:   O número máximo de arquivos permitidos simultaneamente durante um upload.
    Campos de upload deixados em branco no envio não
    contam para este limite.

## SQL Geral

**Opções de Configurações Gerais de SQL**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [sql.safe\_mode](ini.core.md#ini.sql.safe-mode) | "0" | **`INI_SYSTEM`** | Removido no PHP 7.2.0. |

Aqui está uma breve explicação das
diretivas de configuração.

`sql.safe_mode` [bool](language.types.boolean.md)
:   Se habilitada as funções de conexão de bancos de dados que especifiquem valores padrão
    usarão esses valores no lugar de quaisquer argumentos passados pelo usuário. Para detalhes
    sobre os valores padrão, veja a documentação das funções
    de conexão relevantes.

    **Aviso**

    Este recurso foi *REMOVIDO* a partir do PHP 7.2.0.

## Windows

**Opções de Configurações Específicas do Windows**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [windows.show\_crt\_warning](ini.core.md#ini.windows-show-crt-warning) | "0" | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`windows.show_crt_warning` [bool](language.types.boolean.md)
:   Esta diretiva exibe os alertas do CRT do Windows quando habilitada.

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
