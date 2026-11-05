# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/session.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração de sessão**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [session.save\_path](session.configuration.md#ini.session.save-path) | "" | **`INI_ALL`** |  |
| [session.name](session.configuration.md#ini.session.name) | "PHPSESSID" | **`INI_ALL`** |  |
| [session.save\_handler](session.configuration.md#ini.session.save-handler) | "files" | **`INI_ALL`** |  |
| [session.auto\_start](session.configuration.md#ini.session.auto-start) | "0" | **`INI_PERDIR`** |  |
| [session.gc\_probability](session.configuration.md#ini.session.gc-probability) | "1" | **`INI_ALL`** |  |
| [session.gc\_divisor](session.configuration.md#ini.session.gc-divisor) | "100" | **`INI_ALL`** |  |
| [session.gc\_maxlifetime](session.configuration.md#ini.session.gc-maxlifetime) | "1440" | **`INI_ALL`** |  |
| [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler) | "php" | **`INI_ALL`** |  |
| [session.cookie\_lifetime](session.configuration.md#ini.session.cookie-lifetime) | "0" | **`INI_ALL`** |  |
| [session.cookie\_path](session.configuration.md#ini.session.cookie-path) | "/" | **`INI_ALL`** |  |
| [session.cookie\_domain](session.configuration.md#ini.session.cookie-domain) | "" | **`INI_ALL`** |  |
| [session.cookie\_secure](session.configuration.md#ini.session.cookie-secure) | "0" | **`INI_ALL`** | Antes do PHP 7.2.0, o padrão era `""`. |
| [session.cookie\_httponly](session.configuration.md#ini.session.cookie-httponly) | "0" | **`INI_ALL`** | Antes do PHP 7.2.0, o padrão era `""`. |
| [session.cookie\_samesite](session.configuration.md#ini.session.cookie-samesite) | "" | **`INI_ALL`** | Disponível a partir do PHP 7.3.0. |
| [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode) | "0" | **`INI_ALL`** |  |
| [session.use\_cookies](session.configuration.md#ini.session.use-cookies) | "1" | **`INI_ALL`** |  |
| [session.use\_only\_cookies](session.configuration.md#ini.session.use-only-cookies) | "1" | **`INI_ALL`** | Desabilitar esta configuração foi descontinuado a partir do PHP 8.4.0. |
| [session.referer\_check](session.configuration.md#ini.session.referer-check) | "" | **`INI_ALL`** | Definir um valor não vazio foi descontinuado a partir do PHP 8.4.0. |
| [session.cache\_limiter](session.configuration.md#ini.session.cache-limiter) | "nocache" | **`INI_ALL`** |  |
| [session.cache\_expire](session.configuration.md#ini.session.cache-expire) | "180" | **`INI_ALL`** |  |
| [session.use\_trans\_sid](session.configuration.md#ini.session.use-trans-sid) | "0" | **`INI_ALL`** | Habilitar esta configuração foi descontinuado a partir do PHP 8.4.0. |
| [session.trans\_sid\_tags](session.configuration.md#ini.session.trans-sid-tags) | "a=href,area=href,frame=src,form=" | **`INI_ALL`** | Disponível a partir do PHP 7.1.0. Alterar esta configuração foi descontinuado a partir do PHP 8.4.0. |
| [session.trans\_sid\_hosts](session.configuration.md#ini.session.trans-sid-hosts) | `$_SERVER['HTTP_HOST']` | **`INI_ALL`** | Disponível a partir do PHP 7.1.0. Definir um valor não vazio foi descontinuado a partir do PHP 8.4.0. |
| [session.sid\_length](session.configuration.md#ini.session.sid-length) | "32" | **`INI_ALL`** | Disponível desde o PHP 7.1.0. Descontinuada a partir do PHP 8.4.0. |
| [session.sid\_bits\_per\_character](session.configuration.md#ini.session.sid-bits-per-character) | "5" | **`INI_ALL`** | Disponível desde o PHP 7.1.0. Descontinuada a partir do PHP 8.4.0. |
| [session.upload\_progress.enabled](session.configuration.md#ini.session.upload-progress.enabled) | "1" | **`INI_PERDIR`** |  |
| [session.upload\_progress.cleanup](session.configuration.md#ini.session.upload-progress.cleanup) | "1" | **`INI_PERDIR`** |  |
| [session.upload\_progress.prefix](session.configuration.md#ini.session.upload-progress.prefix) | "upload\_progress\_" | **`INI_PERDIR`** |  |
| [session.upload\_progress.name](session.configuration.md#ini.session.upload-progress.name) | "PHP\_SESSION\_UPLOAD\_PROGRESS" | **`INI_PERDIR`** |  |
| [session.upload\_progress.freq](session.configuration.md#ini.session.upload-progress.freq) | "1%" | **`INI_PERDIR`** |  |
| [session.upload\_progress.min\_freq](session.configuration.md#ini.session.upload-progress.min-freq) | "1" | **`INI_PERDIR`** |  |
| [session.lazy\_write](session.configuration.md#ini.session.lazy-write) | "1" | **`INI_ALL`** |  |
| [session.hash\_function](session.configuration.md#ini.session.hash-function) | "0" | **`INI_ALL`** | Removido no PHP 7.1.0. |
| [session.hash\_bits\_per\_character](session.configuration.md#ini.session.hash-bits-per-character) | "4" | **`INI_ALL`** | Removido no PHP 7.1.0. |
| [session.entropy\_file](session.configuration.md#ini.session.entropy-file) | "" | **`INI_ALL`** | Removido no PHP 7.1.0. |
| [session.entropy\_length](session.configuration.md#ini.session.entropy-length) | "0" | **`INI_ALL`** | Removido no PHP 7.1.0. |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

O sistema de gerenciamento de sessões suporta várias opções de configurações
que podem ser colocados no arquivo php.ini. A seguir
um breve resumo.

`session.save_handler` [string](language.types.string.md)
:   `session.save_handler` define o nome do
    manipulador que será utilizado para armazenar e recuperar dados
    associados à sessão. Padrão para
    `files`. Note que extensões podem registrar seus
    próprios `save_handler`s; manipuladores registrados podem
    ser obtidos ao se vefificar o
    [phpinfo()](function.phpinfo.md). Veja também
    [session\_set\_save\_handler()](function.session-set-save-handler.md).

`session.save_path` [string](language.types.string.md)
:   `session.save_path` define o argumento que
    é passado para o manipulador de gravação. Se você escolher o manipulador padrão (de
    arquivos), este é o caminho onde os arquivos serão criados. Veja também
    [session\_save\_path()](function.session-save-path.md).

    Há um argumento opcional `N` para esta diretiva que determina
    o número de níveis de diretório que seus arquivos de sessão serão
    espalhados. Por exemplo, definindo para `'5;/tmp'`
    pode levar a criação de um arquivo de sessão e diretórios como
    `/tmp/4/b/1/e/3/sess_4b1e384ad74619bd212e236e52a5a174If`. Para fazer uso do `N` você deve criar todos estes
    diretórios antes do uso. Um pequeno script shell existe em
    ext/session para fazer isto, chamado
    mod\_files.sh, com uma versão para o Windows chamada
    mod\_files.bat. Também note que se `N` é
    usado e maior do que 0 então a limpeza de sessões não
    será executada, veja uma cópia do php.ini para mais
    informações. Também, se você usar `N`, certifique-se de cercar
    `session.save_path` com
    "aspas" porque o separador (`;`) é
    usado também para comentátios no php.ini.

    O módulo de armazenamento em arquivo cria arquivos com permissões 600 por padrão.
    Esse padrão pode ser alterado com o argumento opcional `MODE`:
    `N;MODE;/path` onde `MODE` é o valor octal
    representando as permissões.
    Configurar `MODE` não afeta o umask do processo.

    **Aviso**

    Se você deixar isto definido num diretório de leitura público, como
    /tmp (o padrão), outros usuários no
    servidor poderão raptar sessões pegando a lista de
    arquivos nesse diretório.

    **Cuidado**

    Ao utilizar o argumento opcional de nível de diretório `N`,
    como descrito acima, note que utilizar um valor maior que 1 ou 2 é
    inapropriado na maioria dos sites por conta da geração de um grande número de diretórios
    exigidos: por exemplo, um valor de 3 implica que existirão `(2 ** session.sid_bits_per_character) ** 3`
    diretórios em disco, o que pode resultar numa quantidade enorme de espaço e
    inodes desperdiçados.

    Somente use `N` maiores que 2 se você estiver absolutamente
    certo que o seu site é grande o suficiente para exigí-lo.

`session.name` [string](language.types.string.md)
:   `session.name` especifica o nome da
    sessão que é usada como o nome do cookie. Deve conter apenas
    caracteres alfanuméricos. O padrão é `PHPSESSID`.
    Veja também [session\_name()](function.session-name.md).

`session.auto_start` [bool](language.types.boolean.md)
:   `session.auto_start` especifica se o
    módulo da sessão deve iniciar uma sessão automaticamente no início
    da requisição. Padrão `0` (desabilitado).

`session.serialize_handler` [string](language.types.string.md)
:   `session.serialize_handler` define o nome do
    manipulador utilizado para serializar/desserializar dados. São suportados o formato
    serial do PHP (`php_serialize`), o formato interno
    do PHP (`php` e
    `php_binary`) e WDDX
    (`wddx`). O WDDX somente está disponível se o PHP foi
    compilado com [suporte
    WDDX](ref.wddx.md). `php_serialize` utiliza
    as funções serialize/unserialize internamente e não tem
    as limitações que `php`
    e `php_binary` tem. Serializadores antigos
    não conseguem gravar índices numéricos ou índices string que contenham caracteres
    especiais (`|` e `!`) no array
    $\_SESSION. Utilize `php_serialize` para evitar erros de índices
    numéricos ou índices com caracteres especiais no final do script. O padrão
    é `php`.

`session.gc_probability` [int](language.types.integer.md)
:   `session.gc_probability` em conjunto com
    `session.gc_divisor` é usado para gerenciar a probabilidade
    que o gc (coletor de lixo) seja iniciado.
    O padrão é `1`. Precisa ser maior ou igual a `0`. Veja [session.gc\_divisor](session.configuration.md#ini.session.gc-divisor) para detalhes.

`session.gc_divisor` [int](language.types.integer.md)
:   `session.gc_divisor` em conjunto com
    `session.gc_probability` define a probabilidade
    que o processo do gc (coletor de lixo) seja iniciado na inicialização de
    cada sessão.
    A probabilidade é calculada usando gc\_probability/gc\_divisor,
    ex. 1/100 indica que existe 1% de chance que o processo GC inicie
    em cada requisição.
    O padrão para `session.gc_divisor` é `100`.
    Precisa ser maior que `0`.

`session.gc_maxlifetime` [int](language.types.integer.md)
:   `session.gc_maxlifetime` especifica o número
    de segundos, que, depois de decorridos, os dados serão considerados como lixo ('garbage') e
    eventualmente apagados. Isso pode ocorrer no início da sessão
    (dependendo de [session.gc\_probability](session.configuration.md#ini.session.gc-probability) e
    [session.gc\_divisor](session.configuration.md#ini.session.gc-divisor)).
    O padrão é `1440` (24 minutos).

    > **Nota**:
    >
    > Se scripts diferentes tem valores diferentes para
    > `session.gc_maxlifetime` mas compartilham o mesmo lugar para
    > guardar os dados da sessão então o script com o menor valor estará
    > limpando os dados. Neste caso, use esta diretiva em conjunto com [session.save\_path](session.configuration.md#ini.session.save-path).

`session.referer_check` [string](language.types.string.md)
:   `session.referer_check` contém a
    substring que você quer checar contra cada HTTP Referer. Se o
    Referer for enviado pelo cliente e a substring não foi
    encontrada, a id de sessão embutida será marcada como inválida.
    O padrão é uma string vazia.

    **Aviso**

    Definir `session.referer_check` para um valor não vazio
    foi descontinuado a partir do PHP 8.4.0.

`session.entropy_file` [string](language.types.string.md)
:   `session.entropy_file` informa o caminho para um
    recurso externo (arquivo) que será usado como uma fonte
    de entropia no processo de criação da id de sessão. Exemplos são
    `/dev/random` ou `/dev/urandom`
    que estão disponíveis em muitos sistemas UNIX.

    Este recurso é suportado no Windows. Configurando
    `session.entropy_length` para um valor diferente de zero
    fará o PHP utilizar o Windows Random API como fonte de entropia.

    > **Nota**:
    >
    > Removido no PHP 7.1.0.
    >
    > `session.entropy_file` tem como padrão
    > `/dev/urandom` ou `/dev/arandom`,
    > se disponível.

`session.entropy_length` [int](language.types.integer.md)
:   `session.entropy_length` especifica o número
    de bytes que serão lidos do arquivo especificado
    acima. Padrão em `32`.

    Removido no PHP 7.1.0.

`session.use_strict_mode` [bool](language.types.boolean.md)
:   `session.use_strict_mode` especifica se o
    módulo utilizará o modo id de sessão rigoroso (strict). Se esse modo estiver ativo,
    o módulo não aceitará um id de sessão não inicializado. Se um id de sessão
    não inicializado for enviado pelo browser, um novo id de sessão é devolvido para o browser.
    Aplicações são protegidas da fixação de sessão adotando o
    modo de sessão rigoroso (strict).
    Padrão é `0` (desativado).

    > **Nota**:
    >
    > Ativar `session.use_strict_mode` é mandatório para
    > segurança geral das sessões. A todos os sites é recomendado mantê-lo ativado. Veja
    > o código em [session\_create\_id()](function.session-create-id.md) para mais detalhes.

    **Aviso**

    Se um manipulador de sessão personalizado registrado via [session\_set\_save\_handler()](function.session-set-save-handler.md)
    não implementa [SessionUpdateTimestampHandlerInterface::validateId()](sessionupdatetimestamphandlerinterface.validateid.md),
    nem fornece o callback `validate_sid`, respectivamente,
    o modo rigoroso(strict) do ID da sessão é efetivamente desativado, independentemente do valor desta diretiva.
    É importante observar que [SessionHandler](class.sessionhandler.md) *não*
    implementa **SessionHandler::validateId()**.

`session.use_cookies` [bool](language.types.boolean.md)
:   `session.use_cookies` especifica se o
    módulo utilizará cookies para guardar a id da sessão no lado do
    cliente. O padrão é `1` (habilitado).

`session.use_only_cookies` [bool](language.types.boolean.md)
:   `session.use_only_cookies` especifica se
    o módulo usará **somente**
    cookies para guardar a id no lado do cliente.
    Habilitar esta configuração previne ataques envolvendo passagem de
    IDs de sessão nas URLs.
    Padrão `1` (ativado).

    **Aviso**

    Desabilitar `session.use_only_cookies` foi descontinuado
    a partir do PHP 8.4.0.

`session.cookie_lifetime` [int](language.types.integer.md)
:   `session.cookie_lifetime` especifica o tempo de vida do
    cookie em segundos que é enviado para o browser. O valor 0
    significa "até o browser ser fechado". O padrão é
    `0`. Veja também
    [session\_get\_cookie\_params()](function.session-get-cookie-params.md) e
    [session\_set\_cookie\_params()](function.session-set-cookie-params.md).

    > **Nota**:
    >
    > O timestamp de expiração é informado em relação à hora do servidor, que
    > não necessariamente coincide com o horário do navegador do cliente.

`session.cookie_path` [string](language.types.string.md)
:   `session.cookie_path` especifica o caminho para definir
    em session\_cookie. O padrão é `/`. Veja também
    [session\_get\_cookie\_params()](function.session-get-cookie-params.md) e
    [session\_set\_cookie\_params()](function.session-set-cookie-params.md).

`session.cookie_domain` [string](language.types.string.md)
:   `session.cookie_domain` especifica o domínio para
    definir no cookie de sessão. O padrão é nenhum significando o nome do
    servidor que gerou o cookie de acordo com a especificação dos cookies.
    Veja também [session\_get\_cookie\_params()](function.session-get-cookie-params.md) e
    [session\_set\_cookie\_params()](function.session-set-cookie-params.md).

`session.cookie_secure` [bool](language.types.boolean.md)
:   `session.cookie_secure` especifica se os
    cookies devem ser enviados apenas em conexões seguras. Com esta opção definida
    para `on`, as sessões só funcionam com conexões HTTPS.
    Se estiver em `off`, as sessões funcionam tanto com HTTP quanto
    com HTTPS. O padrão é `off`.
    Veja também
    [session\_get\_cookie\_params()](function.session-get-cookie-params.md) e
    [session\_set\_cookie\_params()](function.session-set-cookie-params.md).

`session.cookie_httponly` [bool](language.types.boolean.md)
:   Marca o cookie para ser acessível apenas atráves do protocolo HTTP. Isto significa
    que o cookie não será acessível por linguagens de script, como o
    JavaScript. Esta configuração pode efetivamente reduzir o roubo de identidade
    atráves de ataques XSS (apesar de não ser suportado por todos os browsers).

`session.cookie_samesite` [string](language.types.string.md)
:   Permite que os servidores declarem que um cookie não deve ser enviado junto com
    solicitações entre sites. Essa afirmação permite que os agentes do usuário reduzam o risco
    de vazamento de informações entre origens e fornece alguma proteção contra
    ataques de falsificação de solicitações entre sites (CSRF). Observe que isso não é suportado
    por todos os navegadores.
    Um valor vazio significa que nenhum atributo de cookie SameSite será definido.
    `Lax` e `Strict` significam que o cookie
    não será enviado entre domínios para solicitações POST; `Lax`
    enviará o cookie para solicitações GET entre domínios, enquanto `Strict`
    não enviará.

`session.cache_limiter` [string](language.types.string.md)
:   `session.cache_limiter` especifica o método de
    controle de cache para usar em páginas de sessão.
    Pode ser um dos seguintes valores:
    `nocache`, `private`,
    `private_no_expire` ou `public`.
    Padrão `nocache`. Veja também a documentação de
    [session\_cache\_limiter()](function.session-cache-limiter.md) para
    ver o que os valores significam.

`session.cache_expire` [int](language.types.integer.md)
:   `session.cache_expire` especifica o time-to-live (tempo de vida)
    para páginas de sessão em cache, em minutos, não tendo efeito na limitação de
    nocache. O padrão é `180`. Veja também
    [session\_cache\_expire()](function.session-cache-expire.md).

`session.use_trans_sid` [bool](language.types.boolean.md)
:   `session.use_trans_sid` se o suporte a
    sid transparente está habilitado ou não. O padrão é
    `0` (desabilitado).

    **Aviso**

    Habilitar `session.use_trans_sid` foi descontinuado
    a partir do PHP 8.4.0.

    > **Nota**:
    >
    > Gerenciamento de sessões baseadas em URLs tem riscos de segurança adicionais
    > comparados ao gerenciamento baseado em cookies. Usuários podem enviar
    > uma URL que contenha uma ID de sessão ativa para seus amigos por
    > e-mail ou usuários podem salvar uma URL que contenha uma ID de sessão em
    > seus bookmarks e acessar seu site sempre com a mesma ID de
    > sessão, por exemplo.
    >
    > Desde o PHP 7.1.0 uma URL completa, por exemplo https://php.net/, é
    > manipulada pelo recurso trans sid. Versões anteriores do PHP manipulavam
    > apenas URLs relativas. Alvos de rewrite estão definidos em [session.trans\_sid\_hosts](session.configuration.md#ini.session.trans-sid-hosts).

`session.trans_sid_tags` [string](language.types.string.md)
:   `session.trans_sid_tags` especifica quais tags HTML
    serão reescritas para incluir IDs de sessão quando o suporte ao SID transparente
    estiver ativo. Por padrão:
    `a=href,area=href,frame=src,form=`

    `form` é uma tag especial. `<input hidden="session_id" name="session_name">`
    é adicionado a variável de formulário.

    **Aviso**

    Alterar `session.trans_sid_tags` de seu valor padrão
    foi descontinuado a partir do PHP 8.4.0.

    > **Nota**:
    >
    > Antes do PHP 7.1.0 [url\_rewriter.tags](outcontrol.configuration.md#ini.url-rewriter.tags)
    > era utilizada para essa funcionalidade. Desde o PHP 7.1.0, `fieldset`
    > não é mais considerada uma tag especial.

`session.trans_sid_hosts` [string](language.types.string.md)
:   `session.trans_sid_hosts` especifica quais hosts
    serão reescritos para incluir IDs de sessão quando o suporte ao SID transparente
    estiver ativo. Padrão para `$_SERVER['HTTP_HOST']`
    Vários hosts podem ser especificados, separados por ",", mas sem espaços
    entre os hosts. Por exemplo: `php.net,wiki.php.net,bugs.php.net`

    **Aviso**

    Definir `session.trans_sid_hosts` para um valor não vazio
    foi descontinuado a partir do PHP 8.4.0.

`session.sid_length` [int](language.types.integer.md)
:   `session.sid_length` permite especificar o
    tamanho do texto do ID de sessão. IDs de sessão podem ter tamanhos entre 22
    a 256 letras.

    O padrão é 32. Para compatibilidade, você pode especificar 32,
    40, etc. IDs de sessão maiores são mais difíceis de adivinhar. Ao menos 32 letras
    é o recomendados.

    **Dica**

    Nota de compatibilidade: Utilize 32 para que
    `session.hash_function`=0 (MD5) e
    `session.hash_bits_per_character`=4,
    `session.hash_function`=1 (SHA1) e
    `session.hash_bits_per_character`=6. Utilize 26 para que
    `session.hash_function`=0 (MD5) e
    `session.hash_bits_per_character`=5. Utilize 22 para que
    `session.hash_function`=0 (MD5) e
    `session.hash_bits_per_character`=6. Você precisa
    configurar os valores INI para ao menos 128 bits no ID de sessão. Não
    se esqueça de configurar o valor apropriado em
    `session.sid_bits_per_character`, de outra forma
    você terá um ID de sessão fraco.

    > **Nota**:
    >
    > Esta configuração foi introduzida no PHP 7.1.0.

`session.sid_bits_per_character` [int](language.types.integer.md)
:   `session.sid_bits_per_character` permite especificar o
    número de bits codificados no ID de sessão. Os valores possíveis são
    '4' (0-9, a-f), '5' (0-9, a-v), e '6' (0-9, a-z, A-Z, "-", ",").

    O padrão é 4. Mais bits resultam em IDs de sessão mais fortes. 5 é
    recomendado para a maioria dos elementos.

    > **Nota**:
    >
    > Esta configuração foi introduzida no PHP 7.1.0.

`session.hash_function` [mixed](language.types.mixed.md)
:   `session.hash_function` permite especificar o algoritimo de
    hash usado para gerar os IDs de sessão. '0' indica MD5 (128 bits) e
    '1' indica SHA-1 (160 bits).

    Também é possível especificar qualquer um dos algoritmos
    disponibilizados pela [extensão hash](ref.hash.md) (se
    habilitada), como `sha512` ou
    `whirlpool`. A lista completa de algoritmos suportados pode
    ser obtida com a função [hash\_algos()](function.hash-algos.md).

    > **Nota**:
    >
    > Removido no PHP 7.1.0.

`session.hash_bits_per_character` [int](language.types.integer.md)
:   `session.hash_bits_per_character` permite a você definir
    quantos bits são guardados em cada caractere ao converter os dados binários
    de hash para algo legível. Os valores possíveis são '4' (0-9, a-f),
    '5' (0-9, a-v) e '6' (0-9, a-z, A-Z, "-", ",").

    > **Nota**:
    >
    > Removido no PHP 7.1.0.

`session.upload_progress.enabled` [bool](language.types.boolean.md)
:   Permite o rastreamento do progresso de upload, populando a variável [$\_SESSION](reserved.variables.session.md).
    O padrão é 1, habilitado.

`session.upload_progress.cleanup` [bool](language.types.boolean.md)
:   Limpa a informação de progresso assim que todos os dados POST forem lidos
    (upload completado). Padrão 1, habilitado.

    > **Nota**:
    >
    > É altamente recomendável manter esse recurso ligado.

`session.upload_progress.prefix` [string](language.types.string.md)
:   Um prefixo utilizado na chave da variável [$\_SESSION](reserved.variables.session.md).
    Essa chave será concatenada com o valor de
    `$_POST[ini_get("session.upload_progress.name")]` para
    prover um índice único.

    Padrão "upload\_progress\_".

`session.upload_progress.name` [string](language.types.string.md)
:   O nome da chave utilizada em [$\_SESSION](reserved.variables.session.md) para armazenar
    a informação de progresso. Veja também
    [session.upload\_progress.prefix](session.configuration.md#ini.session.upload-progress.prefix).

    Se `$_POST[ini_get("session.upload_progress.name")]`
    não for passado ou estiver indisponível, o progresso de upload não será registrado.

    Padrão "PHP\_SESSION\_UPLOAD\_PROGRESS".

`session.upload_progress.freq` [mixed](language.types.mixed.md)
:   Define a frequência com que a informação de progresso de upload será atualizada.
    Isso pode ser definido em bytes ("atualize a informação a cada 100 bytes") ou em percentagens ("atualize a informação de progresso a cada 1% do total do arquivo").

    Padrão "1%".

`session.upload_progress.min_freq` [int](language.types.integer.md)
:   O intervalo mínimo entre as atualizações, em segundos.
    Padrão "1" (um segundo).

`session.lazy_write` [bool](language.types.boolean.md)
:   `session.lazy_write`, quando configurado para 1, significa que os
    dados de sessão somente serão reescrito caso eles mudem. O padrão é 1, habilitado.

O progresso de upload não será registrado, a não ser que
session.upload\_progress.enabled esteja habilitado e a variável
$\_POST[ini\_get("session.upload\_progress.name")] esteja definida.
Veja [Progresso de Upload em sessões](session.upload-progress.md) para mais detalhes dessa funcionalidade.

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
