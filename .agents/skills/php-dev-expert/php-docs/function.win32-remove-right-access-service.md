# Remove os direitos de acesso ao serviço para um nome de usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-remove-right-access-service.php

---

# win32\_remove\_right\_access\_service

(PECL win32service >=1.1.0)

win32\_remove\_right\_access\_service — Remove os direitos de acesso ao serviço para um nome de usuário

### Descrição

function **win32\_remove\_right\_access\_service**([string](language.types.string.md) `$servicename`, [string](language.types.string.md) `$username`, [string](language.types.string.md) `$machine` = **`null`**): [void](language.types.void.md)

Remove os direitos de acesso do usuário `username` no serviço `servicename`.
Privilégios administrativos são necessários para que isso seja bem-sucedido.

### Parâmetros

`servicename`
:   O nome do serviço do qual os direitos de acesso serão removidos.

`username`
:   O parâmetro `username` especifica o usuário cujos direitos de acesso serão removidos.

`machine`
:   O nome opcional da máquina na qual a operação será executada.
    Se omitido, usará a máquina local.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `service` estiver vazio.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `username` estiver vazio.

Uma exceção [Win32ServiceException](class.win32serviceexception.md) é lançada em caso de erro.

### Veja também

- [win32\_read\_all\_rights\_access\_service()](function.win32-read-all-rights-access-service.md) - Lê todos os direitos de acesso ao serviço
- **win32\_read\_rights\_access\_service()**
- [win32\_add\_right\_access\_service()](function.win32-add-right-access-service.md) - Adiciona direitos de acesso para um nome de usuário ao serviço

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
