# Cria uma nova entrada de serviço no banco de dados do GCS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-create-service.php

---

# win32\_create\_service

(PECL win32service >=0.1.0)

win32\_create\_service — Cria uma nova entrada de serviço no banco de dados do GCS

### Descrição

function **win32\_create\_service**([array](language.types.array.md) `$details`, [string](language.types.string.md) `$machine` = **`null`**): [void](language.types.void.md)

Tentativas de adicionar um serviço ao banco de dados do GCS. Privilégios
de administrador são necessários para que isso seja bem-sucedido.

### Parâmetros

`details`
:   Um array de detalhes do serviço:

    `service`
    :   O nome abreviado do serviço. Este é o nome que será usado
        para controlar o serviço usando o comando `net`.
        O serviço deve ser único (dois serviços não podem compartilhar o
        mesmo nome) e, idealmente, espaços devem ser evitados no nome.

    `display`
    :   O nome de exibição do serviço. Este é o nome que será
        exibido no aplicativo de serviços.

    `description`
    :   A longa descrição do serviço. Esta é a descrição que será
        exibida no aplicativo de serviços.

    `user`
    :   O nome da conta de usuário sob a qual o serviço será executado.
        Se omitido, o serviço será executado como a conta LocalSystem.
        Se o nome de usuário for especificado, também deverá ser fornecida uma senha.

    `password`
    :   A senha que corresponde ao `user`.

    `path`
    :   O caminho completo para o módulo executável que será iniciado quando
        o serviço for iniciado. Se omitido, será usado o caminho
        para o processo PHP atual.

    `params`
    :   Parâmetros de linha de comando a serem passados ​​ao serviço quando ele for iniciado.
        Se a intenção for executar um script PHP como serviço, o primeiro
        parâmetro deve ser o caminho completo para o script PHP que será
        executado. Se o nome ou caminho do script contiver espaços, o caminho completo
        para o script PHP deve ser envolvido com `"`.

    `load_order`
    :   Controla a ordem de carregamento. Isso ainda não é totalmente suportado.

    `svc_type`
    :   Define o tipo de serviço. Se omitido, o valor padrão será
        **`WIN32_SERVICE_WIN32_OWN_PROCESS`**.
        Isto não deve ser alterado a não ser que se saiba o que está sendo feito.

    `start_type`
    :   Especifica como o serviço deve ser iniciado. O padrão é
        **`WIN32_SERVICE_AUTO_START`** o que significa que o
        serviço será iniciado quando a máquina for inicializada.

    `error_control`
    :   Informa ao GCS o que deve fazer ao detectar algum problema
        no serviço. O padrão é
        **`WIN32_SERVER_ERROR_IGNORE`**. A alteração deste
        valor ainda não é totalmente suportada.

    `delayed_start`
    :   Se `delayed_start` estiver definido como **`true`**, isso
        informará ao GCS que este serviço deve ser iniciado após outros
        serviços de inicialização automática serem iniciados, além de um pequeno atraso.

        Qualquer serviço pode ser marcado como serviço de inicialização automática atrasada; entretanto,
        essa configuração não terá efeito a menos que o
        `start_type` do serviço seja
        **`WIN32_SERVICE_AUTO_START`**.

        Essa configuração só é aplicável no Windows Vista e no Windows Server
        2008 ou superior.

    `base_priority`
    :   Para reduzir o impacto na utilização do processador, poderá ser necessário
        definir uma prioridade base inferior à normal.

        O parâmetro `base_priority` pode ser definido como uma das
        constantes definidas em
        [Classes de prioridade básica Win32](win32service.constants.md#win32service.constants.basepriorities).

    `dependencies`
    :   Para definir as dependências de um serviço, pode ser necessário definir
        este parâmetro para a lista de nomes de serviços em um array.

    `recovery_delay`
    :   Este parâmetro define o atraso entre a falha e a execução da ação de
        recuperação. O valor está em milissegundos.

        O valor padrão é 60000.

    `recovery_action_1`
    :   A ação será executada na primeira falha. O valor padrão é
        **`WIN32_SC_ACTION_NONE`**.

        O parâmetro `recovery_action_1` pode ser definido como uma das
        constantes definidas em
        [Ação de recuperação do Win32](win32service.constants.md#win32service.constants.recovery-action).

    `recovery_action_2`
    :   A ação será executada na segunda falha. O valor padrão é
        **`WIN32_SC_ACTION_NONE`**.

        O parâmetro `recovery_action_2` pode ser definido como uma das
        constantes definidas em
        [Ação de recuperação do Win32](win32service.constants.md#win32service.constants.recovery-action).

    `recovery_action_3`
    :   A ação será executada nas falhas seguintes. O valor padrão é
        **`WIN32_SC_ACTION_NONE`**.

        O parâmetro `recovery_action_3` pode ser definido como uma das
        constantes definidas em
        [Ação de recuperação do Win32](win32service.constants.md#win32service.constants.recovery-action).

    `recovery_reset_period`
    :   A contagem de falhas será zerada após o atraso definido no parâmetro. O atraso é em segundos.

        O valor padrão é `86400`.

    `recovery_enabled`
    :   Defina este parâmetro como **`true`** para ativar as configurações de recuperação, **`false`**
        para desativar.

        O valor padrão é **`false`**.

    `recovery_reboot_msg`
    :   Defina este parâmetro para definir a mensagem gravada no registro de eventos do
        Windows antes da reinicialização. Usado somente se uma ação estiver definida
        como **`WIN32_SC_ACTION_REBOOT`**.

    `recovery_command`
    :   Defina este parâmetro para definir o comando executado quando uma ação é definida em
        **`WIN32_SC_ACTION_RUN_COMMAND`**.

`machine`
:   O nome da máquina opcional na qual o serviço será criado.
    Se omitido, usará a máquina local.

### Valor Retornado

Nenhum valor é retornado.

Antes da versão 1.0.0, retornava **`WIN32_NO_ERROR`** em caso de sucesso, **`false`** se houver um problema com os parâmetros ou um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) em caso de falha.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `service` estiver vazio.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `path` estiver faltando ou se estiver vazio.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `svc_type` estiver errado.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `start_type` estiver errado.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `error_control` estiver errado.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `base_priority` estiver errado.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `recovery_delay` não estiver entre
0 e PHP\_INT\_MAX.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `recovery_action_1` estiver errado.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `recovery_action_2` estiver errado.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `recovery_action_3` estiver errado.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `recovery_reset_period` não estiver
entre 0 e PHP\_INT\_MAX.

Uma exceção [Win32ServiceException](class.win32serviceexception.md) é lançada em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL win32service 1.0.0 | Lança uma exceção [ValueError](class.valueerror.md) em caso de dados inválidos nos parâmetros, anteriormente retornava **`false`**. |
| PECL win32service 1.0.0 | Lança uma exceção [Win32ServiceException](class.win32serviceexception.md) em caso de erro, anteriormente um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) era retornado. |
| PECL win32service 1.0.0 | O tipo de retorno agora é [void](language.types.void.md), anteriormente era [mixed](language.types.mixed.md). |
| PECL win32service 0.4.0 | Os parâmetros `dependencies`, `recovery_delay`, `recovery_action_1`, `recovery_action_2`, `recovery_action_3`, `recovery_reset_period`, `recovery_enabled`, `recovery_reboot_msg` e `recovery_command` foram adicionados. |

### Examples

**Exemplo #1 Um exemplo de **win32\_create\_service()****

Cria um serviço com o nome abreviado 'dummyphp'.

```
<?php
$x = win32_create_service(array(
    'service'     => 'dummyphp',                                           // o nome do serviço
    'display'     => 'serviço de exemplo do PHP',                          // breve descrição
    'description' => 'Este é um serviço do Windows criado com o PHP.',     // descrição longa
    'params'      => '"' . __FILE__ . '"  executar',                       // caminho para o script e parâmetros
));
debug_zval_dump($x);
?>
```

**Exemplo #2 Um exemplo de **win32\_create\_service()** com dependências**

Cria um serviço com o nome abreviado 'dummyphp' e dependências.

```
<?php
$x = win32_create_service(array(
    'service'      => 'dummyphp',                                           // o nome do serviço
    'display'      => 'serviço de exemplo do PHP',                          // breve descrição
    'description'  => 'Este é um serviço do Windows criado com o PHP.',     // descrição longa
    'params'       => '"' . __FILE__ . '"  executar',                       // caminho para o script e parâmetros
    'dependencies' => array("Netman"),                                      // A lista das dependências
));
debug_zval_dump($x);
?>
```

**Exemplo #3 Um exemplo de **win32\_create\_service()** com recuperação**

Cria um serviço com o nome abreviado 'dummyphp' e configurações de recuperação.

```
<?php
$x = win32_create_service(array(
    'service'               => 'dummyphp',                                           // o nome do serviço
    'display'               => 'serviço de exemplo do PHP',                          // breve descrição
    'description'           => 'Este é um serviço do Windows criado com o PHP.',     // descrição longa
    'params'                => '"' . __FILE__ . '"  executar',                       // caminho para o script e parâmetros
    'recovery_delay'        => 120000,                                               // A ação de recuperação é executada após 2 minutos
    'recovery_action_1'     => WIN32_SC_ACTION_RESTART,                              // Na primeira falha, reinicia o serviço
    'recovery_action_2'     => WIN32_SC_ACTION_RUN_COMMAND,                          // Na segunda falha, executa o comando
    'recovery_action_3'     => WIN32_SC_ACTION_NONE,                                 // Em caso de outra falha, não faz nada
    'recovery_reset_period' => 86400,                                                // Redefine o contador de falhas após 1 dia
    'recovery_enabled'      => true,                                                 // Habilita o parâmetro de recuperação
    'recovery_reboot_msg'   => null,                                                 // Não define uma mensagem de reinicialização, não é necessária aqui
    'recovery_command'      => "c:\limpa-serviço.bat",                               // Quando a ação é WIN32_SC_ACTION_RUN_COMMAND, executa este comando
));
debug_zval_dump($x);
?>
```

### Veja também

- [win32\_delete\_service()](function.win32-delete-service.md) - Exclui uma entrada de serviço do banco de dados do GCS
- [Classes de prioridade básica Win32](win32service.constants.md#win32service.constants.basepriorities)
- [Ação de recuperação Win32](win32service.constants.md#win32service.constants.recovery-action)
- [Códigos de Erro Win32](win32service.constants.md#win32service.constants.errors)

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
