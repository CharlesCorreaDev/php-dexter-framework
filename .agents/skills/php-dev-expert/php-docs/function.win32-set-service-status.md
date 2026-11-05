# Atualiza o status do serviço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-set-service-status.php

---

# win32\_set\_service\_status

(PECL win32service >=0.1.0)

win32\_set\_service\_status — Atualiza o status do serviço

### Descrição

function **win32\_set\_service\_status**([int](language.types.integer.md) `$status`, [int](language.types.integer.md) `$checkpoint` = 0): [void](language.types.void.md)

Informa ao GCS o status atual de um serviço em execução.
Esta chamada só é válida para um processo de serviço em execução.

**Cuidado**

Desde a versão 0.2.0, esta função funciona somente no SAPI CLI. Em outros SAPI,
esta função é desabilitada.

### Parâmetros

`status`
:   O código de status do serviço, uma das constantes
    **`WIN32_SERVICE_RUNNING`**,
    **`WIN32_SERVICE_STOPPED`**,
    **`WIN32_SERVICE_STOP_PENDING`**,
    **`WIN32_SERVICE_START_PENDING`**,
    **`WIN32_SERVICE_CONTINUE_PENDING`**,
    **`WIN32_SERVICE_PAUSE_PENDING`** ou
    **`WIN32_SERVICE_PAUSED`**.

`checkpoint`
:   O valor do ponto de verificação que o serviço incrementa periodicamente para relatar seu
    progresso durante uma operação demorada de início, parada, pausa ou continuação.
    Por exemplo, o serviço deve incrementar esse valor à medida que conclui
    cada etapa de sua inicialização.

    O parâmetro `checkpoint` só é válido quando o parâmetro
    `status` for uma das constantes
    **`WIN32_SERVICE_STOP_PENDING`**,
    **`WIN32_SERVICE_START_PENDING`**,
    **`WIN32_SERVICE_CONTINUE_PENDING`** ou
    **`WIN32_SERVICE_PAUSE_PENDING`**.

### Valor Retornado

Nenhum valor é retornado.

Antes da versão 1.0.0, retornava **`WIN32_NO_ERROR`** em caso de sucesso, **`false`** se houver um problema com os parâmetros ou um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) em caso de falha.

### Erros/Exceções

Antes da versão 1.0.0, se o SAPI não for `"cli"`, esta função emite um
erro de nível **`E_ERROR`**.

A partir da versão, lança uma exceção
[Win32ServiceException](class.win32serviceexception.md) se o SAPI não for
`"cli"`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL win32service 1.0.0 | Lança uma exceção [ValueError](class.valueerror.md) em caso de dados inválidos nos parâmetros, anteriormente retornava **`false`**. |
| PECL win32service 1.0.0 | Lança uma exceção [Win32ServiceException](class.win32serviceexception.md) em caso de erro, anteriormente um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) era retornado. |
| PECL win32service 1.0.0 | O tipo de retorno agora é [void](language.types.void.md), anteriormente era [mixed](language.types.mixed.md). |
| PECL win32service 0.2.0 | Esta função funciona apenas no SAPI `"cli"`. |

### Veja também

- [win32\_start\_service\_ctrl\_dispatcher()](function.win32-start-service-ctrl-dispatcher.md) - Registra o script no GCS, para que ele possa atuar como o serviço com o nome fornecido
- [win32\_get\_last\_control\_message()](function.win32-get-last-control-message.md) - Retorna a última mensagem de controle enviada para este serviço
- [win32\_set\_service\_exit\_mode()](function.win32-set-service-exit-mode.md) - Define ou retorna o modo de saída do serviço em execução atual
- [win32\_set\_service\_exit\_code()](function.win32-set-service-exit-code.md) - Define ou retorna o código de saída do serviço em execução atual
- [Constantes de status do serviço Win32Service](win32service.constants.md#win32service.constants.servicestatus)

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
