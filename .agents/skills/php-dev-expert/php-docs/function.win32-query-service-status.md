# Consulta o status de um serviço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-query-service-status.php

---

# win32\_query\_service\_status

(PECL win32service >=0.1.0)

win32\_query\_service\_status — Consulta o status de um serviço

### Descrição

function **win32\_query\_service\_status**([string](language.types.string.md) `$servicename`, [string](language.types.string.md) `$machine` = **`null`**): [array](language.types.array.md)

Consulta o status atual de um serviço, retornando um array de
informações.

### Parâmetros

`servicename`
:   O nome abreviado do serviço.

`machine`
:   O nome da máquina opcional. Se omitido, a máquina local será usada.

### Valor Retornado

Retorna um array que consiste nas informações abaixo em caso de sucesso.

Antes da versão 1.0.0,, **`false`** se houver um problema com os parâmetros ou um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) em caso de falha.

`ServiceType`
:   O tipo de serviço. Consulte as [Máscaras de bit de tipo de serviço do Win32Service](win32service.constants.md#win32service.constants.servicetype).

`CurrentState`
:   O status atual. Consulte as [Constantes de status de serviço do Win32Service](win32service.constants.md#win32service.constants.servicestatus).

`ControlsAccepted`
:   Quais controles de serviço são aceitos pelo serviço. Consulte as [Máscaras de bits aceitas de mensagem de controle de serviço Win32Service](win32service.constants.md#win32service.constants.controlsaccepted).

`Win32ExitCode`
:   Se o serviço foi encerrado, o código de retorno do processo. Este valor é igual a
    **`WIN32_ERROR_SERVICE_SPECIFIC_ERROR`**
    se o modo de saída não for normal. Consulte os
    [códigos de erro do Win32Service](win32service.constants.md#win32service.constants.errors) e
    a função [win32\_set\_service\_exit\_mode()](function.win32-set-service-exit-mode.md).

`ServiceSpecificExitCode`
:   Se o serviço for encerrado com uma condição de erro, o código específico
    do serviço incluído no registro de eventos ficará visível aqui. Este valor é igual
    ao valor definido por [win32\_set\_service\_exit\_code()](function.win32-set-service-exit-code.md).

`CheckPoint`
:   Se o serviço estiver sendo encerrado, contém o número do ponto de verificação atual.
    Isso é usado pelo GCS como uma espécie de pulsação para detectar um processo de
    serviço bloqueado. O valor do ponto de verificação é melhor interpretado
    em conjunto com o valor WaitHint.

`WaitHint`
:   Se o serviço estiver sendo encerrado, ele definirá WaitHint para um valor
    de ponto de verificação que indicará 100% de conclusão. Isto pode ser usado para
    implementar um indicador de progresso.

`ProcessId`
:   O identificador de processo do Windows. Se for 0, o processo não está em execução.

`ServiceFlags`
:   As opções do serviço. Consulte as [Constantes de opção de serviço do Win32Service](win32service.constants.md#win32service.constants.serviceflag).

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) será lançada se o
valor do parâmetro `servicename` estiver vazio.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL win32service 1.0.0 | Lança uma exceção [ValueError](class.valueerror.md) em caso de dados inválidos nos parâmetros, anteriormente retornava **`false`**. |
| PECL win32service 1.0.0 | Lança uma exceção [Win32ServiceException](class.win32serviceexception.md) em caso de erro, anteriormente um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) era retornado. |
| PECL win32service 1.0.0 | O tipo de retorno agora é [array](language.types.array.md), anteriormente era [mixed](language.types.mixed.md). |

### Veja também

- [Constantes predefinidas Win32Service](win32service.constants.md)

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
