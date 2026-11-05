# Lê todas as variáveis ​​de ambiente personalizadas no serviço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-get-service-env-vars.php

---

# win32\_get\_service\_env\_vars

(PECL win32service >=1.1.0)

win32\_get\_service\_env\_vars — Lê todas as variáveis ​​de ambiente personalizadas no serviço

### Descrição

function **win32\_get\_service\_env\_vars**([string](language.types.string.md) `$servicename`): [array](language.types.array.md)

Lê todas as variáveis ​​de ambiente personalizadas no serviço `servicename`.
Funciona apenas para o computador local. Privilégios administrativos são necessários para que isso seja bem-sucedido.

### Parâmetros

`servicename`
:   O nome do serviço que terá as variáveis ​​de ambiente lidas.

### Valor Retornado

Retorna um [array](language.types.array.md) com o nome da variável na chave e o valor da variável no valor.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `service` estiver vazio.

Uma exceção [Win32ServiceException](class.win32serviceexception.md) é lançada em caso de erro.

### Veja também

- [win32\_add\_service\_env\_var()](function.win32-add-service-env-var.md) - Adiciona variável ​​de ambiente personalizada no serviço
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
