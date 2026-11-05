# Define ou retorna o recurso de pausa/retomada para o serviço em execução atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-set-service-pause-resume-state.php

---

# win32\_set\_service\_pause\_resume\_state

(PECL win32service >=1.1.0)

win32\_set\_service\_pause\_resume\_state — Define ou retorna o recurso de pausa/retomada para o serviço em execução atual

### Descrição

function **win32\_set\_service\_pause\_resume\_state**([bool](language.types.boolean.md) `$state` = true): [bool](language.types.boolean.md)

Se o parâmetro `state` for fornecido, a capacidade de pausa/retomada
será alterada.

**Cuidado**

Esta função funciona apenas no SAPI "cli" e no contexto de execução do serviço Windows.
Em outros SAPI, esta função está desabilitada.

### Parâmetros

`state`
:   **`true`** para ativar o recurso de pausa/retomada do serviço. **`false`** para desativar o recurso de pausa/retomada do serviço.

### Valor Retornado

Retorna o estado atual ou antigo da capacidade de pausa/retomada.

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

### Veja também

- [win32\_start\_service\_ctrl\_dispatcher()](function.win32-start-service-ctrl-dispatcher.md) - Registra o script no GCS, para que ele possa atuar como o serviço com o nome fornecido
- [win32\_set\_service\_status()](function.win32-set-service-status.md) - Atualiza o status do serviço
- [win32\_set\_service\_exit\_code()](function.win32-set-service-exit-code.md) - Define ou retorna o código de saída do serviço em execução atual

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
