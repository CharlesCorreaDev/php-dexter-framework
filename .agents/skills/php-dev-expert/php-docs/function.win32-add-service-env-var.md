# Adiciona variável ​​de ambiente personalizada no serviço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-add-service-env-var.php

---

# win32\_add\_service\_env\_var

(PECL win32service >=1.1.0)

win32\_add\_service\_env\_var — Adiciona variável ​​de ambiente personalizada no serviço

### Descrição

function **win32\_add\_service\_env\_var**([string](language.types.string.md) `$servicename`, [string](language.types.string.md) `$varname`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

Adiciona uma variável de ambiente personalizada `varname` no serviço `servicename`.
Esta função funciona apenas para o computador local. Privilégios de administrador são necessários para que isso seja bem-sucedido.

### Parâmetros

`servicename`
:   O nome do serviço para adicionar a variável de ambiente.

`varname`
:   O nome da variável de ambiente.

`value`
:   O valor da variável de ambiente.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `service` estiver vazio.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `varname` estiver vazio.

Uma exceção [Win32ServiceException](class.win32serviceexception.md) é lançada em caso de erro.

### Veja também

- [win32\_get\_service\_env\_vars()](function.win32-get-service-env-vars.md) - Lê todas as variáveis ​​de ambiente personalizadas no serviço
- [win32\_remove\_service\_env\_var()](function.win32-remove-service-env-var.md) - Remove uma variável de ambiente personalizada no serviço

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
