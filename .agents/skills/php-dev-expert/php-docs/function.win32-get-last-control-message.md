# Retorna a última mensagem de controle enviada para este serviço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-get-last-control-message.php

---

# win32\_get\_last\_control\_message

(PECL win32service >=0.1.0)

win32\_get\_last\_control\_message — Retorna a última mensagem de controle enviada para este serviço

### Descrição

function **win32\_get\_last\_control\_message**(): [int](language.types.integer.md)

Retorna o código de controle enviado pela última vez para este processo de serviço.
Ao executar como um serviço, isto deve ser verificado periodicamente para determinar se
o serviço precisa parar de funcionar.

**Cuidado**

Desde a versão 0.2.0, esta função funciona somente no SAPI CLI. Em outros SAPI,
esta função é desabilitada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma constante de controle que será uma das
[Constantes de mensagem de controle de serviço Win32Service](win32service.constants.md#win32service.constants.servicecontrol):
**`WIN32_SERVICE_CONTROL_CONTINUE`**,
**`WIN32_SERVICE_CONTROL_DEVICEEVENT`**,
**`WIN32_SERVICE_CONTROL_HARDWAREPROFILECHANGE`**,
**`WIN32_SERVICE_CONTROL_INTERROGATE`**,
**`WIN32_SERVICE_CONTROL_NETBINDADD`**,
**`WIN32_SERVICE_CONTROL_NETBINDDISABLE`**,
**`WIN32_SERVICE_CONTROL_NETBINDENABLE`**,
**`WIN32_SERVICE_CONTROL_NETBINDREMOVE`**,
**`WIN32_SERVICE_CONTROL_PARAMCHANGE`**,
**`WIN32_SERVICE_CONTROL_PAUSE`**,
**`WIN32_SERVICE_CONTROL_POWEREVENT`**,
**`WIN32_SERVICE_CONTROL_PRESHUTDOWN`**,
**`WIN32_SERVICE_CONTROL_SESSIONCHANGE`**,
**`WIN32_SERVICE_CONTROL_SHUTDOWN`**,
**`WIN32_SERVICE_CONTROL_STOP`**.

Se o valor estiver entre 128 e 255, o código de controle é personalizado.

### Erros/Exceções

Antes da versão 1.0.0, Se o SAPI não for `"cli"`, esta função emite um
erro de nível **`E_ERROR`**.

A partir da versão 1.0.0, é lançada uma exceção
[Win32ServiceException](class.win32serviceexception.md) se o SAPI não for
`"cli"`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL win32service 1.0.0 | Lança uma exceção [ValueError](class.valueerror.md) em caso de dados inválidos nos parâmetros, anteriormente retornava **`false`**. |
| PECL win32service 1.0.0 | Lança uma exceção [Win32ServiceException](class.win32serviceexception.md) em caso de erro, anteriormente um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) era retornado. |
| PECL win32service 0.2.0 | Esta função funciona apenas no SAPI `"cli"`. |

### Veja também

- [win32\_start\_service\_ctrl\_dispatcher()](function.win32-start-service-ctrl-dispatcher.md) - Registra o script no GCS, para que ele possa atuar como o serviço com o nome fornecido
- [win32\_set\_service\_status()](function.win32-set-service-status.md) - Atualiza o status do serviço
- [win32\_set\_service\_exit\_mode()](function.win32-set-service-exit-mode.md) - Define ou retorna o modo de saída do serviço em execução atual
- [win32\_set\_service\_exit\_code()](function.win32-set-service-exit-code.md) - Define ou retorna o código de saída do serviço em execução atual
- [Constantes de mensagem de controle de serviço Win32Service](win32service.constants.md#win32service.constants.servicecontrol)

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
