# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Seaslog**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [seaslog.appender](seaslog.configuration.md#ini.seaslog.appender) | 1 | **`INI_SYSTEM`** |  |
| [seaslog.appender\_retry](seaslog.configuration.md#ini.seaslog.appender-retry) | 0 | **`INI_ALL`** |  |
| [seaslog.level](seaslog.configuration.md#ini.seaslog.level) | 8 | **`INI_ALL`** |  |
| [seaslog.remote\_host](seaslog.configuration.md#ini.seaslog.remote-host) | 127.0.0.1 | **`INI_ALL`** |  |
| [seaslog.remote\_port](seaslog.configuration.md#ini.seaslog.remote-port) | 514 | **`INI_ALL`** |  |
| [seaslog.remote\_timeout](seaslog.configuration.md#ini.seaslog.remote-timeout) | 1 | **`INI_SYSTEM`** |  |
| [seaslog.default\_basepath](seaslog.configuration.md#ini.seaslog.default-basepath) | /var/log/www | **`INI_SYSTEM`** |  |
| [seaslog.default\_logger](seaslog.configuration.md#ini.seaslog.default-logger) | default | **`INI_SYSTEM`** |  |
| [seaslog.default\_template](seaslog.configuration.md#ini.seaslog.default-template) | %T | %L | %P | %Q | %t | %M | **`INI_SYSTEM`** |  |
| [seaslog.default\_datetime\_format](seaslog.configuration.md#ini.seaslog.default-datetime-format) | Y-m-d H:i:s | **`INI_SYSTEM`** |  |
| [seaslog.trace\_error](seaslog.configuration.md#ini.seaslog.trace-error) | 1 | **`INI_ALL`** |  |
| [seaslog.trace\_exception](seaslog.configuration.md#ini.seaslog.trace-exception) | 0 | **`INI_SYSTEM`** |  |
| [seaslog.trace\_notice](seaslog.configuration.md#ini.seaslog.trace-notice) | 0 | **`INI_ALL`** |  |
| [seaslog.trace\_warning](seaslog.configuration.md#ini.seaslog.trace-warning) | 0 | **`INI_ALL`** |  |
| [seaslog.use\_buffer](seaslog.configuration.md#ini.seaslog.use-buffer) | 0 | **`INI_SYSTEM`** |  |
| [seaslog.buffer\_size](seaslog.configuration.md#ini.seaslog.buffer-size) | 0 | **`INI_ALL`** |  |
| [seaslog.buffer\_disabled\_in\_cli](seaslog.configuration.md#ini.seaslog.buffer-disabled-in-cli) | 0 | **`INI_SYSTEM`** |  |
| [seaslog.disting\_type](seaslog.configuration.md#ini.seaslog.disting-type) | 0 | **`INI_SYSTEM`** |  |
| [seaslog.disting\_folder](seaslog.configuration.md#ini.seaslog.disting-folder) | 1 | **`INI_SYSTEM`** |  |
| [seaslog.disting\_by\_hour](seaslog.configuration.md#ini.seaslog.disting-by-hour) | 0 | **`INI_SYSTEM`** |  |
| [seaslog.recall\_depth](seaslog.configuration.md#ini.seaslog.recall-depth) | 0 | **`INI_ALL`** |  |
| [seaslog.trim\_wrap](seaslog.configuration.md#ini.seaslog.trim-wrap) | 0 | **`INI_ALL`** |  |
| [seaslog.ignore\_warning](seaslog.configuration.md#ini.seaslog.ignore-warning) | 1 | **`INI_ALL`** |  |
| [seaslog.throw\_exception](seaslog.configuration.md#ini.seaslog.throw-exception) | 1 | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`seaslog.appender` [int](language.types.integer.md)
:   Alterna o armazenamento de dados do registro de registro. 1 = File (padrão), 2 = TCP, 3 = UDP

    SeasLog envia o registro parao servidor tcp://remote\_host:remote\_port ou udp://remote\_host:remote\_port,
    quando *seaslog.appender* está configurado para `2 (TCP)` ou `3 (UDP)`.

    Quando *SeasLog* envie registro por TCP/UDP, o estilo segue a RFC5424.
    `{logInfo}` é afetado por *seaslog.default\_template*.

    ```
    The log style finally formatted such as:
    <15>1 2017-08-27T01:24:59+08:00 vagrant-ubuntu-trusty test/logger[27171]: 2016-06-25 00:59:43 | DEBUG | 21423 | 599157af4e937 | 1466787583.322 | this is a neeke debug
    <14>1 2017-08-27T01:24:59+08:00 vagrant-ubuntu-trusty test/logger[27171]: 2016-06-25 00:59:43 | INFO | 21423 | 599157af4e937 | 1466787583.323 | this is a info log
    <13>1 2017-08-27T01:24:59+08:00 vagrant-ubuntu-trusty test/logger[27171]: 2016-06-25 00:59:43 | NOTICE | 21423 | 599157af4e937 | 1466787583.324 | this is a notice log
    ```

`seaslog.appender_retry` [int](language.types.integer.md)
:   Contagem de novas tentativas de registro.
    Padrão 0 (Não tentar novamente)

`seaslog.buffer_disabled_in_cli` [int](language.types.integer.md)
:   Desativa o buffer no cli. 1-Y 0-N (padrão)

    Ativa a configuração buffer\_disabled\_in\_cli.
    A opção padrão para buffer\_disabled\_in\_cli é desativada.
    Se a opção buffer\_disabled\_in\_cli estiver ativada e o PHP estiver sendo executado na CLI,
    a configuração seaslog.use\_buffer será descartada.
    O Seaslog grava no Data Store IMEDIATAMENTE.

`seaslog.buffer_size` [int](language.types.integer.md)
:   Configura o buffer\_size com 100.
    O buffer\_size padrão é 0, o que significa que o buffer não deve ser utilizado.
    Se o buffer\_size for maior que 0, o SeasLog irá regravar no Armazenamento de Dados
    quando o registro pré-gravado na contagem de memória for maior ou igual a buffer\_size, e então atualizará a consulta de memória.

`seaslog.default_basepath` [string](language.types.string.md)
:   Caminho base de log padrão. Padrão "/var/log/www".

`seaslog.default_datetime_format` [string](language.types.string.md)
:   Estilo de data/horário. Padrão "Y-m-d H:i:s".

`seaslog.default_logger` [string](language.types.string.md)
:   Caminho padrão do registrador. Padrão "default".

`seaslog.disting_by_hour` [int](language.types.integer.md)
:   Alterna o uso do registrador com a hora. 1-Y 0-N (padrão)

    > **Nota**:
    >
    > *seaslog.disting\_by\_hour = 1* altera o uso do registrador para distinguir por hora.
    > Isso significa que o SeasLog criará o arquivo a cada hora.

`seaslog.disting_folder` [int](language.types.integer.md)
:   altera o uso do registrador para distinguir por diretório. 1-Y(padrão) 0-N

    > **Nota**:
    >
    > *seaslog.disting\_folder = 1* altera o uso do registrador para distinguir por diretório.
    > Isso significa que O SeasLog criará o arquivo por diretório,
    > e quando esta configuração for fechada, o SeasLog criará o arquivo
    > usando o sublinhado para conectar o registrador e o horário como default\_20180211.log

`seaslog.disting_type` [int](language.types.integer.md)
:   Altera o uso do registrador para distinguir por tipo. 1-Y 0-N(padrão)

    > **Nota**:
    >
    > *seaslog.disting\_type = 1* altera o uso do registrador para distinguir por tipo.
    > Isso significa que O SeasLog criará o arquivo por tipo info/warn/error/etc.

`seaslog.ignore_warning` [int](language.types.integer.md)
:   Ignora ou não o alerta do SeasLog. 1-On(Padrão) 0-Off

    > **Nota**:
    >
    > *seaslog.ignore\_warning = 1* Abre um aviso para ignorar o próprio SeasLog.
    > Quando permissões de diretório ou portas do servidor de recebimento são bloqueadas, elas são ignoradas;
    > quando fechadas, um aviso é emitido.

`seaslog.level` [int](language.types.integer.md)
:   Nível de registro. Padrão é 8 (todos os níveis).
    0-EMERGÊNCIA 1-ALERTA 2-CRÍTICO 3-ERRO 4-AVISO 5-NOTA 6-INFORMAÇÕES 7-DEPURAÇÃO 8-TODOS

    > **Nota**:
    >
    > Observação: O item de configuração mudou desde a versão 1.7.0.
    > Antes da versão 1.7.0, quanto menor o valor, mais registros eram gerados, de acordo com o nível:
    > 0-todos 1-depuração 2-informações 3-nota 4-aviso 5-erro 6-crítico 7-alerta 8-emergência
    > Antes da versão 1.7.0, o padrão era 0 (todos).

`seaslog.recall_depth` [int](language.types.integer.md)
:   Profundidade de rechamada da função de registro. Afeta a variável `LineNo` em `%F`.
    O padrão é 0.

`seaslog.remote_host` [string](language.types.string.md)
:   Se for usada gravação de TCP ou UDP, configure o IP remoto. O padrão é "127.0.0.1".

`seaslog.remote_port` [int](language.types.integer.md)
:   Se for usada gravação de TCP ou UDP, configure a porta remota. O padrão é 514.

`seaslog.remote_timeout` [int](language.types.integer.md)
:   Se for usada gravação de TCP ou UDP, configure este tempo limite remoto. O padrão é 1 segundo.

`seaslog.throw_exception` [int](language.types.integer.md)
:   Liga/desliga o lançamento de exceção SeasLog. 1-On(Padrão) 0-Off

    > **Nota**:
    >
    > *seaslog.throw\_exception = 1* Abre uma exceção que faz com que o SeasLog lance a si mesmo.
    > Quando a autorização do diretório ou a porta de recebimento do servidor estiver bloqueada,
    > lança uma exceção; não lança uma exceção quando fechada.

`seaslog.trace_error` [int](language.types.integer.md)
:   Restreamento automático de erro no registro padrão. 1-Y(Padrão) 0-N

`seaslog.trace_exception` [int](language.types.integer.md)
:   Restreamento automático de exceção no registro padrão. 1-Y 0-N(Padrão)

`seaslog.trace_notice` [int](language.types.integer.md)
:   Restreamento automático de nota no registro padrão. 1-Y 0-N(Padrão)

`seaslog.trace_warning` [int](language.types.integer.md)
:   Restreamento automático de alerta no registro padrão. 1-Y 0-N(Padrão)

`seaslog.trim_wrap` [int](language.types.integer.md)
:   Remove \n e \r da mensagem de registro. 1-On 0-Off(Padrão)

`seaslog.use_buffer` [int](language.types.integer.md)
:   Liga/desliga o uso de buffer de memória para registro. 1-Y 0-N(Padrão)

    > **Nota**:
    >
    > *seaslog.use\_buffer = 1* Configura use\_buffer para ligado.
    > O padrão de use\_buffer é desligado.
    > Se use\_buffer for ligado, SeasLog faz pré-gravação do registro na memória,
    > e depois grva no armazenamento de dados em uma requisição de desligamento
    > ou na saída do processo PHP (RSHUTDOWN ou MSHUTDOWN do PHP).

`seaslog.default_template` [string](language.types.string.md)
:   Modelo de registro.
    O padrão é "%T | %L | %P | %Q | %t | %M".

    > **Nota**:
    >
    > As seguintes variáveis ​​padrão são fornecidas,
    > que podem ser usadas diretamente no modelo de registro e substituídas como um valor correspondente
    > quando o registro for eventualmente gerado.
    >
    > O modelo de registro padrão é: `seaslog.default_template = "%T | %L | %P | %Q | %t | %M"`,
    > ou seja, o estilo de registro padrão é: `{dateTime} | {level} | {pid} | {uniqid} | {timeStamp} | {logInfo}`
    >
    > O modelo pode ser customizado, tal como: `seaslog.default_template = "[%T]:%L %P %Q %t %M"`,
    > que significa que o estilo será: `[{dateTime}]:{level} {pid} {uniqid} {timeStamp} {logInfo}`
    >
    > **Tabela de Variáveis Padrão do Seaslog**
    >
    > | Nome da Variável | Descrição |
    > | --- | --- |
    > | %L | Nível. |
    > | %M | Mensagem. |
    > | %T | Data/horário. Exemplo: `2017-08-16 19:15:02`, afetado por `seaslog.default_datetime_format`. |
    > | %t | Timestamp. Exemplo: `1502882102.862`, com precisão de milissegundos. |
    > | %Q | ID da requisição. Para diferenciar uma requisição específica, como por exemplo não invocando a função `SeasLog::setRequestId($string)`, o valor exclusivo gerado pela função interna `static char *get_uniqid ()` é usado quando a requisição é inicializada. |
    > | %H | Nome do Host. |
    > | %P | ID do processo. |
    > | %D | Domínio:Porta. Exemplo: `www.cloudwise.com:80`; Ao usar CLI, seria: `cli`. |
    > | %R | URI de requisição. Exemplo: `/app/user/signin`; Ao usar CLI, com um script Index.php, o resultado seria: `CliIndex.php`. |
    > | %m | Método de requisição. Exemplo: `Get`; Ao usar CLI, o resultado seria o script do comando, como por exemplo: `/bin/bash`. |
    > | %I | IP do cliente; No caso de CLI é `local`. Valor de prioridade: HTTP\_X\_REAL\_IP > HTTP\_X\_FORWARDED\_FOR > REMOTE\_ADDR |
    > | %F | Nome\_do\_arquivo:Número\_da\_linha. Exemplo: `UserService.php:118`. |
    > | %U | Uso de memória em bytes, chama a função `zend_memory_usage`. |
    > | %u | Pico de uso de memória em bytes, chama a função `zend_memory_peak_usage`. |
    > | %C | `TODO` Classe::Método. Exemplo: `UserService::getUserInfo` |

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
