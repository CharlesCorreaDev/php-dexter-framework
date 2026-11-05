# Continua um serviço pausado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-continue-service.php

---

# win32\_continue\_service

(PECL win32service >=0.1.0)

win32\_continue\_service — Continua um serviço pausado

### Descrição

function **win32\_continue\_service**([string](language.types.string.md) `$servicename`, [string](language.types.string.md) `$machine` = **`null`**): [void](language.types.void.md)

Retoma um serviço nomeado e pausado. Requer privilégios de administrador ou
uma conta com direitos apropriados definidos na ACL do serviço.

### Parâmetros

`servicename`
:   O nome abreviado do serviço.

`machine`
:   Nome da máquina opcional. Se omitido, a máquina local será usada.

### Valor Retornado

Nenhum valor é retornado.

Antes da versão 1.0.0, retornava **`WIN32_NO_ERROR`** em caso de sucesso, **`false`** se houver um problema com os parâmetros ou um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) em caso de falha.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `servicename` estiver vazio.

Uma exceção [Win32ServiceException](class.win32serviceexception.md) é lançada em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL win32service 1.0.0 | Lança uma exceção [ValueError](class.valueerror.md) em caso de dados inválidos nos parâmetros, anteriormente retornava **`false`**. |
| PECL win32service 1.0.0 | Lança uma exceção [Win32ServiceException](class.win32serviceexception.md) em caso de erro, anteriormente um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) era retornado. |
| PECL win32service 1.0.0 | O tipo de retorno agora é [void](language.types.void.md), anteriormente era [mixed](language.types.mixed.md). |
| PECL win32service 0.3.0 | Esta função não requer mais uma conta de administrador se a ACL estiver definida para outra conta. |

### Veja também

- [win32\_start\_service()](function.win32-start-service.md) - Inicia um serviço
- [win32\_stop\_service()](function.win32-stop-service.md) - Interrompe um serviço
- [win32\_pause\_service()](function.win32-pause-service.md) - Pausa um serviço
- [win32\_send\_custom\_control()](function.win32-send-custom-control.md) - Envia um controle personalizado para o serviço
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
