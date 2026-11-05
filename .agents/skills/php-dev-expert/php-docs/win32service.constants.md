# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/win32service.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Máscaras de Tipo de Serviço do Win32Service**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_SERVICE_WIN32_OWN_PROCESS`** | `0x00000010` | O serviço é executado em seu próprio processo. |
| **`WIN32_SERVICE_INTERACTIVE_PROCESS`** | `0x00000100` | O serviço pode interagir com a área de trabalho. Esta opção não está disponível no Windows Vista ou posterior. |
| **`WIN32_SERVICE_WIN32_OWN_PROCESS_INTERACTIVE`** | `0x00000110` | O serviço é executado em seu próprio processo e pode interagir com a área de trabalho. Esta opção não está disponível no Windows Vista ou posterior. |

**Constantes de Status do serviço Win32Service**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_SERVICE_CONTINUE_PENDING`** | `0x00000005` | A continuação do serviço está pendente. |
| **`WIN32_SERVICE_PAUSE_PENDING`** | `0x00000006` | A pausa do serviço está pendente. |
| **`WIN32_SERVICE_PAUSED`** | `0x00000007` | O serviço está pausado. |
| **`WIN32_SERVICE_RUNNING`** | `0x00000004` | O serviço está em execução. |
| **`WIN32_SERVICE_START_PENDING`** | `0x00000002` | O serviço está iniciando. |
| **`WIN32_SERVICE_STOP_PENDING`** | `0x00000003` | O serviço está parando. |
| **`WIN32_SERVICE_STOPPED`** | `0x00000001` | O serviço não está em execução. |

**Constantes de mensagem de controle de serviço Win32Service**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_SERVICE_CONTROL_CONTINUE`** | `0x00000003` | Notifica um serviço pausado que ele deve ser retomado. |
| **`WIN32_SERVICE_CONTROL_DEVICEEVENT`** | `0x0000000B` |  |
| **`WIN32_SERVICE_CONTROL_HARDWAREPROFILECHANGE`** | `0x0000000C` |  |
| **`WIN32_SERVICE_CONTROL_INTERROGATE`** | `0x00000004` | Notifica um serviço de que ele deve relatar suas informações de status atuais ao gerenciador de controle de serviço. |
| **`WIN32_SERVICE_CONTROL_NETBINDADD`** | `0x00000007` | Notifica um serviço de rede de que há um novo componente para associação. |
| **`WIN32_SERVICE_CONTROL_NETBINDDISABLE`** | `0x0000000A` | Notifica um serviço de rede de que uma de suas ligações foi desabilitada. |
| **`WIN32_SERVICE_CONTROL_NETBINDENABLE`** | `0x00000009` | Notifica um serviço de rede de que uma associação desabilitada foi habilitada. |
| **`WIN32_SERVICE_CONTROL_NETBINDREMOVE`** | `0x00000008` | Notifica um serviço de rede de que um componente para associação foi removido. |
| **`WIN32_SERVICE_CONTROL_PARAMCHANGE`** | `0x00000006` | Notifica um serviço de que seus parâmetros de inicialização foram alterados. |
| **`WIN32_SERVICE_CONTROL_PAUSE`** | `0x00000002` | Notifica um serviço de que ele deve ser pausado. |
| **`WIN32_SERVICE_CONTROL_POWEREVENT`** | `0x0000000D` |  |
| **`WIN32_SERVICE_CONTROL_PRESHUTDOWN`** | `0x0000000F` | Notifica um serviço de que o sistema será desligado. Um serviço que lida com essa notificação bloqueia o desligamento do sistema até que o serviço seja interrompido ou o intervalo de tempo limite de pré-desligamento expire. Este valor não é suportado pelo Windows Server 2003 e Windows XP/2000. |
| **`WIN32_SERVICE_CONTROL_SESSIONCHANGE`** | `0x0000000E` |  |
| **`WIN32_SERVICE_CONTROL_SHUTDOWN`** | `0x00000005` | Notifica um serviço de que o sistema está sendo desligado para que o serviço possa executar tarefas de limpeza. Se um serviço aceitar esse código de controle, ele deverá parar após executar suas tarefas de limpeza. Após o GCS enviar este código de controle, ele não enviará outros códigos de controle ao serviço. |
| **`WIN32_SERVICE_CONTROL_STOP`** | `0x00000001` | Notifica um serviço que ele deve parar. |

**Win32Service Service Control Message Accepted Bitmasks**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_SERVICE_ACCEPT_HARDWAREPROFILECHANGE`** | `0x00000020` | O serviço é notificado quando o perfil de hardware do computador é alterado. Isso permite que o sistema envie notificações **`WIN32_SERVICE_CONTROL_HARDWAREPROFILECHANGE`** para o serviço. |
| **`WIN32_SERVICE_ACCEPT_NETBINDCHANGE`** | `0x00000010` | O serviço é um componente de rede que pode aceitar alterações em sua ligação sem ser interrompido e reiniciado. Este código de controle permite que o serviço receba as notificações **`WIN32_SERVICE_CONTROL_NETBINDADD`**, **`WIN32_SERVICE_CONTROL_NETBINDREMOVE`**, **`WIN32_SERVICE_CONTROL_NETBINDENABLE`** e **`WIN32_SERVICE_CONTROL_NETBINDDISABLE`**. |
| **`WIN32_SERVICE_ACCEPT_PARAMCHANGE`** | `0x00000008` | O serviço pode reler seus parâmetros de inicialização sem ser interrompido e reiniciado. Este código de controle permite que o serviço receba notificações **`WIN32_SERVICE_CONTROL_PARAMCHANGE`**. |
| **`WIN32_SERVICE_ACCEPT_PAUSE_CONTINUE`** | `0x00000002` | O serviço pode ser pausado e continuado. Este código de controle permite que o serviço receba notificações **`WIN32_SERVICE_CONTROL_PAUSE`** e **`WIN32_SERVICE_CONTROL_CONTINUE`**. |
| **`WIN32_SERVICE_ACCEPT_POWEREVENT`** | `0x00000040` | O serviço é notificado quando o status de energia do computador é alterado. Isso permite que o sistema envie notificações **`WIN32_SERVICE_CONTROL_POWEREVENT`** para o serviço. |
| **`WIN32_SERVICE_ACCEPT_PRESHUTDOWN`** | `0x00000100` | O serviço pode executar tarefas de pré-desligamento. Este código de controle permite que o serviço receba notificações **`WIN32_SERVICE_CONTROL_PRESHUTDOWN`**. Este valor não é suportado pelo Windows Server 2003 e Windows XP/2000. |
| **`WIN32_SERVICE_ACCEPT_SESSIONCHANGE`** | `0x00000080` | O serviço é notificado quando o status da sessão do computador é alterado. Isso permite que o sistema envie notificações **`WIN32_SERVICE_CONTROL_SESSIONCHANGE`** para o serviço. Windows 2000: este valor não é suportado |
| **`WIN32_SERVICE_ACCEPT_SHUTDOWN`** | `0x00000004` | O serviço é notificado quando ocorre o desligamento do sistema. Este código de controle permite que o serviço receba notificações **`WIN32_SERVICE_CONTROL_SHUTDOWN`**. |
| **`WIN32_SERVICE_ACCEPT_STOP`** | `0x00000001` | O serviço pode ser interrompido. Este código de controle permite que o serviço receba notificações **`WIN32_SERVICE_CONTROL_STOP`**. |
| **`WIN32_SERVICE_ACCEPT_TIMECHANGE`** | `0x00000200` | O serviço é notificado quando a hora do sistema é alterada. Isso permite que o sistema envie notificações **`WIN32_SERVICE_CONTROL_TIMECHANGE`** para o serviço. Windows Server 2008, Windows Vista, Windows Server 2003 e Windows XP/2000: Este código de controle não é compatível. |
| **`WIN32_SERVICE_ACCEPT_TRIGGEREVENT`** | `0x00000400` | O serviço é notificado quando ocorre um evento para o qual o serviço foi registrado. Isso permite que o sistema envie notificações **`WIN32_SERVICE_CONTROL_TRIGGEREVENT`** para o serviço. Windows Server 2008, Windows Vista, Windows Server 2003 e Windows XP/2000: Este código de controle não é compatível. |

**Constantes do tipo de início do serviço Win32Service**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_SERVICE_BOOT_START`** | `0x00000000` | Um driver de dispositivo iniciado pelo carregador do sistema. Este valor é válido apenas para serviços de driver. |
| **`WIN32_SERVICE_SYSTEM_START`** | `0x00000001` | Um driver de dispositivo iniciado pela função IoInitSystem. Este valor é válido apenas para serviços de driver. |
| **`WIN32_SERVICE_AUTO_START`** | `0x00000002` | Um serviço iniciado automaticamente pelo gerenciador de controle de serviço durante a inicialização do sistema. |
| **`WIN32_SERVICE_DEMAND_START`** | `0x00000003` | Um serviço iniciado pelo gerenciador de controle de serviço quando um processo chama a função StartService. |
| **`WIN32_SERVICE_DISABLED`** | `0x00000004` | Um serviço que não pode ser iniciado. As tentativas de iniciar o serviço resultam no código de erro **`WIN32_ERROR_SERVICE_DISABLED`**. |

**Constantes de controle de erros do serviço Win32Service**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_SERVICE_ERROR_IGNORE`** | `0x00000000` | O programa de inicialização ignora o erro e continua a operação de inicialização. |
| **`WIN32_SERVICE_ERROR_NORMAL`** | `0x00000001` | O programa de inicialização registra o erro no log de eventos, mas continua a operação de inicialização. |
| **`WIN32_SERVICE_ERROR_SEVERE`** | `0x00000002` | O programa de inicialização registra o erro no log de eventos. Se a última configuração válida estiver sendo iniciada, a operação de inicialização continuará. Caso contrário, o sistema será reiniciado com a última configuração válida. |
| **`WIN32_SERVICE_ERROR_CRITICAL`** | `0x00000003` | O programa de inicialização registra o erro no log de eventos, se possível. Se a última configuração válida estiver sendo iniciada, a operação de inicialização falhará. Caso contrário, o sistema será reiniciado com a última configuração válida. |

**Constantes de opções de serviço Win32Service**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_SERVICE_RUNS_IN_SYSTEM_PROCESS`** | `0x00000001` | O serviço é executado em um processo do sistema que deve estar sempre em execução. |

> **Nota**:
>
> Essas constantes não estão mais em uso a partir do Win32Service 1.0.0.

**Códigos de erro Win32**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_ERROR_ACCESS_DENIED`** | `0x00000005` | O identificador do banco de dados GCS não possui os direitos de acesso apropriados. |
| **`WIN32_ERROR_CIRCULAR_DEPENDENCY`** | `0x00000423` | Uma dependência de serviço circular foi especificada. |
| **`WIN32_ERROR_DATABASE_DOES_NOT_EXIST`** | `0x00000429` | O banco de dados especificado não existe. |
| **`WIN32_ERROR_DEPENDENT_SERVICES_RUNNING`** | `0x0000041B` | O serviço não pode ser interrompido porque outros serviços em execução dependem dele. |
| **`WIN32_ERROR_DUPLICATE_SERVICE_NAME`** | `0x00000436` | O nome de exibição já existe no banco de dados do gerenciador de controle de serviço como um nome de serviço ou como outro nome de exibição. |
| **`WIN32_ERROR_FAILED_SERVICE_CONTROLLER_CONNECT`** | `0x00000427` | Este erro será retornado se o programa estiver sendo executado como uma aplicação de console e não como um serviço. Se o programa for executado como uma aplicação de console para fins de depuração, estruture-o de forma que o código específico do serviço não seja chamado. |
| **`WIN32_ERROR_INSUFFICIENT_BUFFER`** | `0x0000007A` | O buffer é muito pequeno para a estrutura de status do serviço. Nada foi escrito na estrutura. |
| **`WIN32_ERROR_INVALID_DATA`** | `0x0000000D` | A estrutura de status de serviço especificada é inválida. |
| **`WIN32_ERROR_INVALID_HANDLE`** | `0x00000006` | O identificador para o banco de dados do gerenciador de controle de serviço especificado é inválido. |
| **`WIN32_ERROR_INVALID_LEVEL`** | `0x0000007C` | O parâmetro InfoLevel contém um valor não suportado. |
| **`WIN32_ERROR_INVALID_NAME`** | `0x0000007B` | O nome do serviço especificado é inválido. |
| **`WIN32_ERROR_INVALID_PARAMETER`** | `0x00000057` | Um parâmetro especificado é inválido. |
| **`WIN32_ERROR_INVALID_SERVICE_ACCOUNT`** | `0x00000421` | O nome da conta de usuário especificado no parâmetro `user` não existe. Consulte [win32\_create\_service()](function.win32-create-service.md). |
| **`WIN32_ERROR_INVALID_SERVICE_CONTROL`** | `0x0000041C` | O código de controle solicitado não é válido ou é inaceitável para o serviço. |
| **`WIN32_ERROR_PATH_NOT_FOUND`** | `0x00000003` | O arquivo binário do serviço não foi encontrado. |
| **`WIN32_ERROR_SERVICE_ALREADY_RUNNING`** | `0x00000420` | Uma instância do serviço já está em execução. |
| **`WIN32_ERROR_SERVICE_CANNOT_ACCEPT_CTRL`** | `0x00000425` | O código de controle solicitado não pode ser enviado ao serviço porque o estado do serviço é **`WIN32_SERVICE_STOPPED`**, **`WIN32_SERVICE_START_PENDING`** ou **`WIN32_SERVICE_STOP_PENDING`**. |
| **`WIN32_ERROR_SERVICE_DATABASE_LOCKED`** | `0x0000041F` | O banco de dados está bloqueado. |
| **`WIN32_ERROR_SERVICE_DEPENDENCY_DELETED`** | `0x00000433` | O serviço depende de um serviço que não existe ou que foi marcado para exclusão. |
| **`WIN32_ERROR_SERVICE_DEPENDENCY_FAIL`** | `0x0000042C` | O serviço depende de outro serviço que falhou ao iniciar. |
| **`WIN32_ERROR_SERVICE_DISABLED`** | `0x00000422` | O serviço foi desativado. |
| **`WIN32_ERROR_SERVICE_DOES_NOT_EXIST`** | `0x00000424` | O serviço especificado não existe como serviço instalado. |
| **`WIN32_ERROR_SERVICE_EXISTS`** | `0x00000431` | O serviço especificado já existe neste banco de dados. |
| **`WIN32_ERROR_SERVICE_LOGON_FAILED`** | `0x0000042D` | O serviço não foi iniciado devido a uma falha de logon. Este erro ocorre se o serviço estiver configurado para ser executado em uma conta que não possui o direito "Log on as a service". |
| **`WIN32_ERROR_SERVICE_MARKED_FOR_DELETE`** | `0x00000430` | O serviço especificado já foi marcado para exclusão. |
| **`WIN32_ERROR_SERVICE_NO_THREAD`** | `0x0000041E` | Não foi possível criar um thread para o serviço. |
| **`WIN32_ERROR_SERVICE_NOT_ACTIVE`** | `0x00000426` | O serviço não foi iniciado. |
| **`WIN32_ERROR_SERVICE_REQUEST_TIMEOUT`** | `0x0000041D` | O processo do serviço foi iniciado, mas não chamou StartServiceCtrlDispatcher ou o thread que chamou StartServiceCtrlDispatcher pode estar bloqueado em uma função de manipulador de controle. |
| **`WIN32_ERROR_SHUTDOWN_IN_PROGRESS`** | `0x0000045B` | O sistema está sendo desligado; esta função não pode ser chamada. |
| **`WIN32_ERROR_SERVICE_SPECIFIC_ERROR`** | `0x0000042A` | O serviço retornou um código de erro específico do serviço. |
| **`WIN32_NO_ERROR`** | `0x00000000` | Nenhum erro. |

**Classes de prioridade básica Win32**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_ABOVE_NORMAL_PRIORITY_CLASS`** | `0x00008000` | Processo que tem prioridade acima de WIN32\_NORMAL\_PRIORITY\_CLASS mas abaixo de WIN32\_HIGH\_PRIORITY\_CLASS. |
| **`WIN32_BELOW_NORMAL_PRIORITY_CLASS`** | `0x00004000` | Processo que tem prioridade acima de WIN32\_IDLE\_PRIORITY\_CLASS mas abaixo de WIN32\_NORMAL\_PRIORITY\_CLASS. |
| **`WIN32_HIGH_PRIORITY_CLASS`** | `0x00000080` | Processo que executa tarefas urgentes que devem ser executadas imediatamente. Os threads do processo precedem os threads de processos de classe de prioridade normais ou ociosos. Um exemplo é a Lista de Tarefas, que deve responder rapidamente quando chamada pelo usuário, independente da carga do sistema operacional. Tenha muito cuidado ao usar a classe de alta prioridade, pois uma aplicação de classe de alta prioridade pode usar quase todo o tempo de CPU disponível. |
| **`WIN32_IDLE_PRIORITY_CLASS`** | `0x00000040` | Processo cujos threads são executados apenas quando o sistema está ocioso. Os threads do processo são substituídos pelos threads de qualquer processo em execução em uma classe de prioridade mais alta. Um exemplo é um protetor de tela. A classe de prioridade ociosa é herdada pelos processos filhos. |
| **`WIN32_NORMAL_PRIORITY_CLASS`** | `0x00000020` | Processo sem necessidades especiais de agendamento. |
| **`WIN32_REALTIME_PRIORITY_CLASS`** | `0x00000100` | Processo que tem a maior prioridade possível. Os threads do processo precedem os threads de todos os outros processos, incluindo processos do sistema operacional que executam tarefas importantes. Por exemplo, um processo em tempo real executado por mais de um intervalo muito breve pode fazer com que os caches de disco não sejam liberados ou fazer com que o mouse pare de responder. |

**Ação de recuperação Win32**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_SC_ACTION_NONE`** | `0x00000000` | Nenhuma ação. |
| **`WIN32_SC_ACTION_RESTART`** | `0x00000001` | Reinicia o serviço. |
| **`WIN32_SC_ACTION_REBOOT`** | `0x00000002` | Reinicia o servidor. |
| **`WIN32_SC_ACTION_RUN_COMMAND`** | `0x00000003` | Executa um comando. |

**Informações do serviço Win32**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_INFO_SERVICE`** | "service" |  |
| **`WIN32_INFO_DISPLAY`** | "display" |  |
| **`WIN32_INFO_USER`** | "user" |  |
| **`WIN32_INFO_PASSWORD`** | "password" |  |
| **`WIN32_INFO_PATH`** | "path" |  |
| **`WIN32_INFO_PARAMS`** | "params" |  |
| **`WIN32_INFO_DESCRIPTION`** | "description" |  |
| **`WIN32_INFO_START_TYPE`** | "start\_type" |  |
| **`WIN32_INFO_LOAD_ORDER`** | "load\_order" |  |
| **`WIN32_INFO_SVC_TYPE`** | "svc\_type" |  |
| **`WIN32_INFO_ERROR_CONTROL`** | "error\_control" |  |
| **`WIN32_INFO_DELAYED_START`** | "delayed\_start" |  |
| **`WIN32_INFO_BASE_PRIORITY`** | "base\_priority" |  |
| **`WIN32_INFO_DEPENDENCIES`** | "dependencies" |  |
| **`WIN32_INFO_RECOVERY_DELAY`** | "recovery\_delay" |  |
| **`WIN32_INFO_RECOVERY_ACTION_1`** | "recovery\_action\_1" |  |
| **`WIN32_INFO_RECOVERY_ACTION_2`** | "recovery\_action\_2" |  |
| **`WIN32_INFO_RECOVERY_ACTION_3`** | "recovery\_action\_3" |  |
| **`WIN32_INFO_RECOVERY_RESET_PERIOD`** | "recovery\_reset\_period" |  |
| **`WIN32_INFO_RECOVERY_ENABLED`** | "recovery\_enabled" |  |
| **`WIN32_INFO_RECOVERY_REBOOT_MSG`** | "recovery\_reboot\_msg" |  |
| **`WIN32_INFO_RECOVERY_COMMAND`** | "recovery\_command" |  |

**Direitos do serviço Win32**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`WIN32_SERVICE_ALL_ACCESS`** | `0x000F003F` |  |
| **`WIN32_SERVICE_CHANGE_CONFIG`** | `0x00000002` |  |
| **`WIN32_SERVICE_ENUMERATE_DEPENDENTS`** | `0x00000008` |  |
| **`WIN32_SERVICE_INTERROGATE`** | `0x00000080` |  |
| **`WIN32_SERVICE_PAUSE_CONTINUE`** | `0x00000040` |  |
| **`WIN32_SERVICE_QUERY_CONFIG`** | `0x00000001` |  |
| **`WIN32_SERVICE_QUERY_STATUS`** | `0x00000004` |  |
| **`WIN32_SERVICE_START`** | `0x00000010` |  |
| **`WIN32_SERVICE_STOP`** | `0x00000020` |  |
| **`WIN32_SERVICE_USER_DEFINED_CONTROL`** | `0x00000100` |  |
| **`WIN32_ACCESS_SYSTEM_SECURITY`** | `0x00001000` |  |
| **`WIN32_DELETE`** | `0x00010000` |  |
| **`WIN32_READ_CONTROL`** | `0x00020000` |  |
| **`WIN32_WRITE_DAC`** | `0x00040000` |  |
| **`WIN32_WRITE_OWNER`** | `0x00080000` |  |
| **`WIN32_GENERIC_READ`** | Inclui direitos: **`WIN32_STANDARD_RIGHTS_READ`**, **`WIN32_SERVICE_QUERY_CONFIG`**, **`WIN32_SERVICE_QUERY_STATUS`**, **`WIN32_SERVICE_INTERROGATE`**, **`WIN32_SERVICE_ENUMERATE_DEPENDENTS`** |  |
| **`WIN32_GENERIC_WRITE`** | Inclui direitos: **`WIN32_STANDARD_RIGHTS_WRITE`**, **`WIN32_SERVICE_CHANGE_CONFIG`** |  |
| **`WIN32_GENERIC_EXECUTE`** | Inclui direitos: **`WIN32_STANDARD_RIGHTS_EXECUTE`**, **`WIN32_SERVICE_START`**, **`WIN32_SERVICE_STOP`**, **`WIN32_SERVICE_PAUSE_CONTINUE`**, **`WIN32_SERVICE_USER_DEFINED_CONTROL`** |  |

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
