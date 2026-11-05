# Envia um controle personalizado para o serviço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-send-custom-control.php

---

# win32\_send\_custom\_control

(PECL win32service >=0.4.0)

win32\_send\_custom\_control — Envia um controle personalizado para o serviço

### Descrição

function **win32\_send\_custom\_control**([string](language.types.string.md) `$servicename`, [int](language.types.integer.md) `$control`, [string](language.types.string.md) `$machine` = **`null`**): [void](language.types.void.md)

Consulte a [» Função ControlService da Microsoft](https://docs.microsoft.com/en-us/windows/desktop/api/winsvc/nf-winsvc-controlservice) para mais detalhes.

### Parâmetros

`servicename`
:   O nome abreviado do serviço.

`control`
:   O valor do contole personalizado entre 128 e 255.

`machine`
:   Nome da máquina opcional. Se omitido, a máquina local será usada.

### Valor Retornado

Nenhum valor é retornado.

Antes da versão 1.0.0, retornava **`WIN32_NO_ERROR`** em caso de sucesso, **`false`** se houver um problema com os parâmetros ou um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) em caso de falha.

### Erros/Exceções

Antes da versão 1.0.0, se o valor de controle não estiver entre 128 e 255, esta função
emite um erro de nível **`E_ERROR`**.

Uma exceção [ValueError](class.valueerror.md) será lançada se o
valor do parâmetro `servicename` estiver vazio.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `control` não estiver entre 128 e 255.

Uma exceção [Win32ServiceException](class.win32serviceexception.md) é lançada em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL win32service 1.0.0 | Lança uma exceção [ValueError](class.valueerror.md) em caso de dados inválidos nos parâmetros, anteriormente retornava **`false`**. |
| PECL win32service 1.0.0 | Lança uma exceção [Win32ServiceException](class.win32serviceexception.md) em caso de erro, anteriormente um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) era retornado. |
| PECL win32service 1.0.0 | O tipo de retorno agora é [void](language.types.void.md), anteriormente era [mixed](language.types.mixed.md). |

### Veja também

- [win32\_start\_service()](function.win32-start-service.md) - Inicia um serviço
- [win32\_stop\_service()](function.win32-stop-service.md) - Interrompe um serviço
- [win32\_pause\_service()](function.win32-pause-service.md) - Pausa um serviço
- [win32\_continue\_service()](function.win32-continue-service.md) - Continua um serviço pausado
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
