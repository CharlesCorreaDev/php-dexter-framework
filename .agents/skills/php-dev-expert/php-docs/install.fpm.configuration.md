# Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.fpm.configuration.php

---

## Configuração

FPM usa a sintaxe do php.ini para seus arquivos de configuração - php-fpm.conf, e para arquivos de configuração de conjuntos.

### Lista de diretivas globais php-fpm.conf

`pid` [string](language.types.string.md)
:   Caminho para o arquivo PID. Valor padrão: nenhum.

`error_log` [string](language.types.string.md)
:   Caminho para o arquivo de registro de erro. Valor padrão:
    `#INSTALL_PREFIX#/log/php-fpm.log`.
    Se configurado como "syslog", o registro será enviado para o syslogd em vez de ser escrito em um arquivo local.

`log_level` [string](language.types.string.md)
:   Nível de registro de erro. Valores possíveis: alert, error, warning, notice,
    debug. Valor padrão: notice.

`log_limit` [int](language.types.integer.md)
:   Limite de tamanho das linhas de registro para permitir mensagens maiores
    que 1024 caracteres sem quebras.
    Valor padrão: 1024.
    Disponível desde o PHP 7.3.0.

`log_buffering` [bool](language.types.boolean.md)
:   Log sem buffer extra (experimental).
    Valor padrão: yes.
    Disponível desde o PHP 7.3.0.

`syslog.facility` [string](language.types.string.md)
:   Usado para especificar que tipo de programa está registrando a mensagem.
    Valor Padrão: daemon.

`syslog.ident` [string](language.types.string.md)
:   String incluída no início de cada mensagem.
    Se houver múltiplas instâncias do FPM em execução no mesmo servidor,
    pode-se alterar o valor padrão para adaptar-se às necessidades.
    Valor padrão: php-fpm.

`emergency_restart_threshold` [int](language.types.integer.md)
:   Se esse número de processos filho sair com SIGSEGV ou SIGBUS dentro
    do intervalo de tempo definido pelo `emergency_restart_interval`,
    o FPM será reiniciado. Um valor 0 significa 'desligado'. Valor padrão: 0 (desligado).

`emergency_restart_interval` [mixed](language.types.mixed.md)
:   Intervalo de tempo utilizado por `emergency_restart_interval` para determinar quando
    um reinício será feito. Pode ser útil para contornar
    corrupções acidentais em memória compartilhada de um acelerador.
    Unidades disponíveis: s(egundos), m(inutos), h(oras), ou d(ias).
    Unidade Padrão: segundos. Valor padrão: 0 (desligado).

`process_control_timeout` [mixed](language.types.mixed.md)
:   Tempo limite para processos filhos esperarem por uma reação nos sinais do
    principal. Unidades disponíveis: s(egundos), m(inutos), h(oras) ou d(ias).
    Unidade Padrão: segundos. Valor padrão: 0.

`process.max` [int](language.types.integer.md)
:   O número máximo de processos que o FPM iniciará. Foi projetado para
    controlar o número global de processos ao utilizar gerenciamento dinâmico de processos
    em vários pools. Utilize com cautela.
    Valor padrão: 0.

`process.priority` [int](language.types.integer.md)
:   Especifica a prioridade de nice(2) a ser aplicada ao processo principal (somente se estiver configurado).
    O valor pode variar entre -19 (maior prioridade) e 20 (menor prioridade).
    Valor padrão: não definido.

`daemonize` [bool](language.types.boolean.md)
:   Envia o FPM para execução em segundo plano. Defina como 'no' para manter o FPM em primeiro plano
    para fins de depuração. Valor padrão: yes.

`rlimit_files` [int](language.types.integer.md)
:   Define o limite de descritores de arquivos abertos para o processo principal.
    Valor padrão: valor definido pelo sistema operacional.

`rlimit_core` [int](language.types.integer.md)
:   Define o limite máximo do tamanho do núcleo do processo principal.
    Valor padrão: 0.

`events.mechanism` [string](language.types.string.md)
:   Especifica o mecanismo de eventos que o FPM utilizará.
    Os seguintes estão disponíveis: epoll, kqueue (\*BSD), port (Solaris), poll e select.
    Valor padrão: não definido (detecção automática com preferência para epoll e kqueue).

`systemd_interval` [int](language.types.integer.md)
:   Quando o FPM for compilado com integração ao systemd, especifica o intervalo,
    em segundos, entre notificações de relatório de saúde ao systemd.
    Defina com 0 para desabilitar.
    Valor padrão: 10.

### Lista de diretivas de conjuntos

Com o FPM, pode-se executar vários conjuntos (pools) de processos com configurações diferentes.
Essas são as configurações que podem ser otimizadas por cada conjunto.

`listen` [string](language.types.string.md)
:   O endereço onde as requisições FastCGI serão aceitas. Sintaxes válidas são:
    'en.dere.ço.ip:porta', 'porta', '/caminho/para/soquete/unix'. Esta opção é
    obrigatória para cada conjunto.

`listen.backlog` [int](language.types.integer.md)
:   Define o acúmulo de listen(2). O valor de `-1` significa o máximo em sistemas BSD;.
    Valor padrão: `-1` (FreeBSD ou OpenBSD) ou `511`
    (Linux e outras plataformas).

`listen.allowed_clients` [string](language.types.string.md)
:   Lista de endereços IPv4 ou IPv6 de clientes FastCGI que estão autorizados a conectar. Equivalente
    à variável de ambiente FCGI\_WEB\_SERVER\_ADDRS no FastCGI original do PHP (5.2.2+).
    Só faz sentido com um soquete de escuta TCP. Cada endereço deve ser separado por uma vírgula.
    Se este valor for deixado em branco, conexões serão aceitas a partir de qualquer endereço IP.
    Valor padrão: não definido (qualquer endereço IP aceito).

`listen.owner` [string](language.types.string.md)
:   Define permissões para soquete Unix, se utilizado. No Linux, permissões de
    leitura/gravação devem ser definidas de forma a permitir conexões a partir de um servidor
    web. Muitos sistemas derivados do BSD permitem conexões independentemente das permissões.
    Valores padrão: usuários e grupos são definidos como o usuário que está executando, o modo é definido como 0660.

`listen.group` [string](language.types.string.md)
:   Veja `listen.owner`.

`listen.mode` [string](language.types.string.md)
:   Veja `listen.owner`.

`listen.acl_users` [string](language.types.string.md)
:   Quando o suporte ao Access Control Lists POSIX for suportado, pode-se configurá-lo utilizando esta opção.
    Ao configurá-lo, `listen.owner` e `listen.group`
    serão ignorados. Seu valor é uma lista de nomes de usuários, separados por vírgula.

`listen.acl_groups` [string](language.types.string.md)
:   Veja `listen.acl_users`.
    Seu valor é uma lista de nomes de grupo, separados por vírgula.

`listen.setfib` [int](language.types.integer.md)
:   Define a tabela de roteamento associada (FIB). Somente FreeBSD.
    Valor padrão: `-1`. Desde o PHP 8.2.0.

`user` [string](language.types.string.md)
:   Usuário Unix dos processos FPM. Esta opção é obrigatória.

`group` [string](language.types.string.md)
:   Grupo Unix dos processos FPM. Se não for definido, o grupo padrão do usuário será
    utilizado.

`pm` [string](language.types.string.md)
:   Define como o gerenciador de processos controlará o número de processos
    filhos. Valores possíveis: `static`, `ondemand` ou
    `dynamic`.
    Esta opção é obrigatória.

    `static` - o número de processos filho é fixo (`pm.max_children`).

    `ondemand` - os processos são criados sob demanda (quando solicitado,
    em oposição a "dynamic", onde `pm.start_servers` são iniciados
    quando o serviço é iniciado).

    `dynamic` - o número de processos filhos é definido dinamicamente com base nas
    seguintes diretivas: `pm.max_children`, `pm.start_servers`,
    `pm.min_spare_servers` e `pm.max_spare_servers`.

`pm.max_children` [int](language.types.integer.md)
:   O número de processos filhos a serem criados quando `pm` está definido como
    `static` e o número máximo de processos filhos a serem criados
    quando `pm` está definido como `dynamic` ou `ondemand`.
    Esta opção é obrigatória.

    Esta opção define o limite para o número de solicitações simultâneas que
    serão servidas. Equivalente à diretiva ApacheMaxClients com
    mpm\_prefork e à variável de ambiente PHP\_FCGI\_CHILDREN no
    FastCGI original do PHP.

`pm.start_servers` [int](language.types.integer.md)
:   O número de processos filhos criados na inicialização.
    Usado apenas quando `pm` é definido para `dynamic`.
    Valor padrão: (min\_spare\_servers + max\_spare\_servers) / 2.

`pm.min_spare_servers` [int](language.types.integer.md)
:   O número mínimo desejado de processos servidores ociosos. Usado apenas quando
    `pm` está definido como `dynamic`. Também
    é obrigatório neste caso.

`pm.max_spare_servers` [int](language.types.integer.md)
:   O número máximo desejado de processos servidores ociosos. Usado apenas quando
    `pm` está definido como `dynamic`. Também
    é obrigatório neste caso.

`pm.max_spawn_rate` [int](language.types.integer.md)
:   A taxa de criação de processos filhos simultaneamente. Utilizado apenas quando
    `pm` é definido para `dynamic`.
    Valor padrão: 32

`pm.process_idle_timeout` [mixed](language.types.mixed.md)
:   O número de segundos após o qual um processo ocioso será encerrado.
    Utilizado apenas quando `pm` é configurado como `ondemand`.
    Unidades disponíveis: s(egundos) - padrão, m(inutos), h(oras) ou d(ias).
    Valor padrão: 10s.

`pm.max_requests` [int](language.types.integer.md)
:   O número de solicitações que cada processo filho deve executar antes
    de ressurgir. Isto pode ser útil para contornar vazamentos de memória em bibliotecas de
    terceiros. Para processamento interminável de solicitação especifique '0'. Equivalente a
    PHP\_FCGI\_MAX\_REQUESTS. Valor padrão: 0.

`pm.status_listen` [string](language.types.string.md)
:   O endereço no qual serão aceitas requisições de status FastCGI. Isto cria um novo conjunto invisível
    que pode manipular as requisições independentemente. Útil se o conjunto principal está ocupado
    com requisições longas dado que é possível obter a
    [página de status FPM](fpm.status.md) antes de terminar essas requisições
    longas. A sintaxe é a mesma da diretiva [listen](install.fpm.configuration.md#listen).
    Valor padrão: none.

`pm.status_path` [string](language.types.string.md)
:   O URI para visualizar a [página de status do FPM](fpm.status.md). Este valor precisa
    começar com uma contra barra (/). Se o valor não estiver definido, nenhuma URI será reconhecida como
    uma página de status. Valor padrão: none.

`ping.path` [string](language.types.string.md)
:   O URI de ping para chamar a página de monitoramento do FPM. Se este valor não estiver
    definido, nenhum URI será reconhecido como uma página de ping. Isto poderia ser usado para testar
    de fora que o FPM está vivo e respondendo. Observe que o valor deve
    começar com uma barra (/).

`ping.response` [string](language.types.string.md)
:   Esta diretiva pode ser usada para personalizar a resposta a um pedido
    de ping. A resposta é formatada como text/plain com um código de resposta 200.
    Valor padrão: pong.

`process.priority` [int](language.types.integer.md)
:   Especifica a prioridade de nice(2) a ser aplicada ao processo (somente se informado).
    Esse valor pode variar de -19 (prioridade máxima) a 20 (prioridade mínima).
    Valor padrão: não definido.

`process.dumpable` [bool](language.types.boolean.md)
:   Configura o sinalizador de despejo (PR\_SET\_DUMPABLE prctl) mesmo no caso do usuário ou
    ou grupo do processo for diferente usuário do processo principal. Permite criar despejos do
    núcleo do processo e rastrear o processo para o usuário do conjunto.
    Valor padrão: no. Desde o PHP 7.0.29, 7.1.17 e 7.2.5.

`prefix` [string](language.types.string.md)
:   Especifica um prefixo para interpretação de caminhos.

`request_terminate_timeout` [mixed](language.types.mixed.md)
:   O tempo limite para servir uma requisição única após o qual o processo
    será encerrado. Esta opção deveria ser usada quando a opção INI 'max\_execution\_time',
    não parar a execução do script por algum motivo. Um valor de '0' significa
    'Off'. Unidades disponíveis: s(egundos) - padrão, m(inutos), h(oras) ou d(ias).
    Valor padrão: 0.

`request_terminate_timeout_track_finished` [bool](language.types.boolean.md)
:   O limite de tempo configurado para
    [request\_terminate\_timeout](install.fpm.configuration.md#request-terminate-timeout) não é disparado
    depois de um [fastcgi\_finish\_request](function.fastcgi-finish-request.md) ou
    quando a aplicação terminou e funções internas de desligamento estão sendo chamadas. Esta
    diretiva irá habilitar o limite de tempo incondicionalmente mesmo para esses casos.
    Valor padrão: no. Desde o PHP 7.3.0.

`request_slowlog_timeout` [mixed](language.types.mixed.md)
:   O tempo limite para servir uma requisição única após o qual um rastreamento PHP
    será despejado para o arquivo 'slowlog'. Um valor de '0' significa 'Off'.
    Unidades disponíveis: s(egundos) - padrão, m(inutos), h(oras) ou d(ias).
    Valor padrão: 0.

`request_slowlog_trace_depth` [int](language.types.integer.md)
:   A profundidade do rastreamento de pilha para o registro de requisições lentas.
    Valor padrão: 20. Desde o PHP 7.2.0.

`slowlog` [string](language.types.string.md)
:   O arquivo de log de requisições lentas. Valor padrão:
    `#INSTALL_PREFIX#/log/php-fpm.log.slow`.

`rlimit_files` [int](language.types.integer.md)
:   Define o limite de descritores de arquivos abertos para processos filhos neste conjunto. Valor padrão: valor definido pelo sistema.

`rlimit_core` [int](language.types.integer.md)
:   Define o limite máximo do tamanho do núcleo para processos filhos neste conjunto. Valores possíveis: 'unlimited' ou um número inteiro maior ou igual a 0.
    Valor padrão: valor definido pelo sistema.

`chroot` [string](language.types.string.md)
:   Realiza um chroot para este diretório na inicialização. Este valor precisa ser definido como
    um caminho absoluto. Quando este valor não está definido, chroot não é usado.

`chdir` [string](language.types.string.md)
:   Realiza um chdir neste diretório na inicialização. Este valor precisa ser um caminho
    absoluto. Valor padrão: diretório atual ou / no caso de chroot.

`catch_workers_output` [bool](language.types.boolean.md)
:   Redireciona stdout e stderr para o registro de erros principal. Se não estiver definido,
    stdout e stderr serão redirecionadas para /dev/null de acordo com especificações FastCGI.
    Valor padrão: no.

`decorate_workers_output` [bool](language.types.boolean.md)
:   Ativa a decoração de saída dos processos quando [catch\_workers\_output](install.fpm.configuration.md#catch-workers-output) estiver ativo.
    Valor padrão: yes.
    Disponível desde o PHP 7.3.0.

`clear_env` [bool](language.types.boolean.md)
:   Limpa o ambiente nos processos do FPM.
    Evita que variáveis de ambiente arbitrárias alcancem os processos do FPM
    limpando o ambiente neles antes que as variáveis de ambientes especificados nesta
    configuração de conjunto sejam adicionadas.
    Valor padrão: Yes.

`security.limit_extensions` [string](language.types.string.md)
:   Limita as extensões de arquivo do script principal que o FPM permitirá a interpretação.
    Isto pode evitar erros de configurações no lado do servidor web.
    FPM deve ser limitado a extensões .php para evitar que usuários
    maliciosos utilizem outras extensões para executar códigos php.
    Valor padrão: .php .phar

`apparmor_hat` [string](language.types.string.md)
:   Se o AppArmor estiver ativo, isto permite modificar o "hat".
    Valor padrão: não definido.

`access.log` [string](language.types.string.md)
:   O arquivo de registro de acessos.
    Valor padrão: não definido.

`access.format` [string](language.types.string.md)
:   O formato do registro de acessos.
    Valor padrão: `"%R - %u %t \"%m %r\" %s"`:

    **Opções válidas**

    | Marcador | Descrição |
    | --- | --- |
    | `%%` | Caractere `%` |
    | `%C` | %CPU usado pela requisição. Aceita estes formatos: `%{user}C` somente para CPU de usuário, `%{system}C` somente para CPU de sistema e `%{total}C` para CPU de usuário + sistema (padrão) |
    | `%d` | Tempo decorrido para servir a requisição. Aceita os seguintes formatos de precisão: `%{seconds}d` (segundos - padrão), `%{milliseconds}d` (milissegundos) e `%{microseconds}d` (microssegundos). |
    | `%{nome}e` | Uma variável de ambiente (o mesmo que [$\_ENV](reserved.variables.environment.md) ou [$\_SERVER](reserved.variables.server.md)). O nome da variável de ambiente precisa ser informado entre chaves. Por exemplo, variáveis específicas de servidor como `%{REQUEST_METHOD}e` ou `%{SERVER_PROTOCOL}e`, cabeçalhos HTTP como `%{HTTP_HOST}e` ou `%{HTTP_USER_AGENT}e`. |
    | `%f` | Nome do arquivo do script |
    | `%l` | `Content-Length` da requisição (somente para requisições HTTP POST) |
    | `%m` | Método de requisição HTTP |
    | `%M` | Pico de memória alocada pelo PHP. Pode aceitar os seguintes formatos: `%{bytes}M` (padrão), `%{kilobytes}M` `%{kilo}M`, `%{megabytes}M` ou `%{mega}M`. |
    | `%n` | Nome do conjunto |
    | `%{nome}o` | Cabeçalho de saída. O nome do cabeçalho precisa ser especificado entre chaves. Por exemplo: `%{Content-Type}o`, `%{X-Powered-By}o`, `%{Transfer-Encoding}o`. |
    | `%p` | PID do processo filho que serviu à requisição |
    | `%P` | PID do processo pai do processo filho que serviu à requisição |
    | `%q` | String de consulta |
    | `%Q` | O caractere `'?'` ou a junção de `%q` e `%r`, se a string de consulta existir |
    | `%r` | URI de requisição sem a string de consulta, consulte `%q` e `%Q` |
    | `%R` | Endereço IP remoto |
    | `%s` | Status (código de resposta) |
    | `%t` | Horário do servidor em que a requisição foi recebida. Pode aceitar um formato de `strftime(3)`: `%d/%b/%Y:%H:%M:%S %z` (padrão). O formato `strftime(3)` precisa ser encapsulado em uma etiqueta `%{<strftime_format>}t`, por exemplo, para uma string de horário formatada em ISO8601, use: `%{%Y-%m-%dT%H:%M:%S%z}t` |
    | `%T` | Horário em que o registro foi preenchido (ao término da requisição). Pode aceitar um formato `strftime(3)`: `%d/%b/%Y:%H:%M:%S %z` (padrão). O formato `strftime(3)` precisa ser encapsulado em uma etiqueta `%{<strftime_format>}T`, por exemplo, para uma string de horário formatada em ISO8601, use: `%{%Y-%m-%dT%H:%M:%S%z}T` |
    | `%u` | Usuário autenticado pelo acesso básico, se especificado no cabeçalho `Authorization` |

`access.suppress_path` [array](language.types.array.md)
:   Uma lista de valores de URI de requisição que devem ser filtrados do registro de acessos.
    Valor padrão: não definido. Desde o PHP 8.2.0.

Os valores de configuração podem ser definidos usando a expansão de variáveis de ambiente.
Definir valores padrão quando a variável de ambiente não está definida ou é nula também é suportado a partir do PHP 8.3.0.
Por exemplo:

**Exemplo #1 Usando a expansão de variáveis de ambiente**

```
listen = /var/run/php-fpm-${POOL_NAME}.sock
user = ${USER_NAME:-www-data}
group = ${USER_NAME:-www-data}
```

É possível passar variáveis de ambiente adicionais e atualizar as configurações do PHP de um determinado conjunto.
Para fazer isso, precisa-se adicionar as seguintes opções no arquivo de configuração do conjunto.

**Exemplo #2 Passando variáveis de ambiente e configurações do PHP para o conjunto**

```
env[HOSTNAME] = $HOSTNAME
env[PATH] = /usr/local/bin:/usr/bin:/bin
env[TMP] = /tmp
env[TMPDIR] = /tmp
env[TEMP] = /tmp

php_admin_value[sendmail_path] = /usr/sbin/sendmail -t -i -f www@my.domain.com
php_flag[display_errors] = off
php_admin_value[error_log] = /var/log/fpm-php.www.log
php_admin_flag[log_errors] = on
php_admin_value[memory_limit] = 32M
```

Configurações do PHP feitas com `php_value` ou
`php_flag` irão sobrescrever o valor anterior.
Observe que a definição de
[disable\_functions](ini.core.md#ini.disable-functions) não
irá substituir os valores previamente definidos no php.ini,
mas adicionará o novo valor em seu lugar.

Configurações definidas com `php_admin_value` e `php_admin_flag`
não podem ser sobrescritas com [ini\_set()](function.ini-set.md).

Configurações do PHP podem ser definidas no servidor web.

**Exemplo #3 Definindo as configurações de PHP no nginx.conf**

```
set $php_value "pcre.backtrack_limit=424242";
set $php_value "$php_value \n pcre.recursion_limit=99999";
fastcgi_param  PHP_VALUE $php_value;

fastcgi_param  PHP_ADMIN_VALUE "open_basedir=/var/www/htdocs";
```

**Cuidado**

Como essas configurações são passadas para o php-fpm como cabeçalhos FastCGI,
o php-fpm não deve ser vinculado a um endereço amplamente acessível.
Caso contrário, qualquer um poderá alterar as opções de configuração do PHP.
Veja também:
[listen.allowed\_clients](install.fpm.configuration.md#listen-allowed-clients).

> **Nota**:
>
> Conjuntos não são um mecanismo de segurança, dado que eles não fornecem uma
> separação total; por exemplo, todos os conjuntos utilizam uma única instância do OPcache.

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
