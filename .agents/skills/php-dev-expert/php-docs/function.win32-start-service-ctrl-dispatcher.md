# Registra o script no GCS, para que ele possa atuar como o serviço com o nome fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-start-service-ctrl-dispatcher.php

---

# win32\_start\_service\_ctrl\_dispatcher

(PECL win32service >=0.1.0)

win32\_start\_service\_ctrl\_dispatcher — Registra o script no GCS, para que ele possa atuar como o serviço com o nome fornecido

### Descrição

function **win32\_start\_service\_ctrl\_dispatcher**([string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$gracefulMode` = true): [void](language.types.void.md)

Quando iniciado através do Gerenciador de Controle de Serviço, um processo de serviço é
necessário para "registrar-se" nele para estabelecer monitoramento de serviço
e recursos de comunicação. Esta função realiza o registro gerando
um thread para lidar com a comunicação de baixo nível com o Gerenciador de
Controle de Serviço.

Uma vez iniciado, o processo de serviço deve fazer duas coisas. A primeira é informar
o Gerenciador de Controle de Serviço que o serviço está em execução. Isto é conseguido
chamando [win32\_set\_service\_status()](function.win32-set-service-status.md) com a
constante **`WIN32_SERVICE_RUNNING`**. Se for necessário executar
algum processo demorado antes que o serviço esteja realmente em execução, pode
ser usada a constante **`WIN32_SERVICE_START_PENDING`**. A
segunda é continuar a fazer registro com o Gerenciador de Controle de Serviço para que
ele possa determinar se deve ser encerrado. Isso é conseguido chamando periodicamente
a função [win32\_get\_last\_control\_message()](function.win32-get-last-control-message.md) e manipulando o
código de retorno de forma adequada.

**Cuidado**

Desde a versão 0.2.0, esta função funciona somente no SAPI CLI. Em outros SAPI,
esta função é desabilitada.

### Parâmetros

`name`
:   O nome abreviado do serviço, conforme registrado por
    [win32\_create\_service()](function.win32-create-service.md).

`gracefulMode`
:   **`true`** para uma saída normal. **`false`** para saída com erro.
    Consulte [win32\_set\_service\_exit\_mode()](function.win32-set-service-exit-mode.md) para obter mais detalhes.

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
| PECL win32service 0.4.0 | O parâmetro `gracefulMode` foi adicionado. |
| PECL win32service 0.2.0 | Esta função funciona apenas no SAPI `"cli"`. |

### Examples

**Exemplo #1 Um exemplo de **win32\_start\_service\_ctrl\_dispatcher()****

Verifica se o serviço está sendo executado no GCS.

```
<?php
if (!win32_start_service_ctrl_dispatcher('dummyphp')) {
  die("Provavelmente não estou sendo executado no Gerenciador de Controle de Serviço");
}

win32_set_service_status(WIN32_SERVICE_START_PENDING);

// Algum processo demorado para colocar este serviço em funcionamento.

win32_set_service_status(WIN32_SERVICE_RUNNING);

while (WIN32_SERVICE_CONTROL_STOP != win32_get_last_control_message()) {
  # faça algum trabalho aqui, tentando não demorar mais do que cerca de 30 segundos
  # antes de voltar ao loop novamente
}
?>
```

### Veja também

- [win32\_set\_service\_status()](function.win32-set-service-status.md) - Atualiza o status do serviço
- [win32\_get\_last\_control\_message()](function.win32-get-last-control-message.md) - Retorna a última mensagem de controle enviada para este serviço
- [win32\_set\_service\_exit\_mode()](function.win32-set-service-exit-mode.md) - Define ou retorna o modo de saída do serviço em execução atual
- [win32\_set\_service\_exit\_code()](function.win32-set-service-exit-code.md) - Define ou retorna o código de saída do serviço em execução atual
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
