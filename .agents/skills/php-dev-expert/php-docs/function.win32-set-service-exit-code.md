# Define ou retorna o código de saída do serviço em execução atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-set-service-exit-code.php

---

# win32\_set\_service\_exit\_code

(PECL win32service >=0.4.0)

win32\_set\_service\_exit\_code — Define ou retorna o código de saída do serviço em execução atual

### Descrição

function **win32\_set\_service\_exit\_code**([int](language.types.integer.md) `$exitCode` = 1): [int](language.types.integer.md)

Altera ou retorna o código de saída. O código de saída será usado somente se o modo de saída não for normal.
Se o valor não for zero, a configuração de recuperação poderá ser usada após
falha do serviço. Consulte
[» Códigos de erro do sistema Microsoft](https://docs.microsoft.com/en-us/windows/desktop/debug/system-error-codes)
para obter mais detalhes.

**Cuidado**

Esta função funciona apenas no SAPI "cli". Em outros SAPI esta
função está desabilitada.

### Parâmetros

`exitCode`
:   O código de retorno usado na saída.

### Valor Retornado

Retorna o código de saída atual ou antigo.

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
- [win32\_set\_service\_exit\_mode()](function.win32-set-service-exit-mode.md) - Define ou retorna o modo de saída do serviço em execução atual

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
