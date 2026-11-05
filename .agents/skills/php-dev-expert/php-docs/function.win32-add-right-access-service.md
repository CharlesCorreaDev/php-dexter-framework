# Adiciona direitos de acesso para um nome de usuário ao serviço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-add-right-access-service.php

---

# win32\_add\_right\_access\_service

(PECL win32service >=1.1.0)

win32\_add\_right\_access\_service — Adiciona direitos de acesso para um nome de usuário ao serviço

### Descrição

function **win32\_add\_right\_access\_service**(  
    [string](language.types.string.md) `$servicename`,  
    [string](language.types.string.md) `$username`,  
    [int](language.types.integer.md) `$right`,  
    [string](language.types.string.md) `$machine` = **`null`**  
): [void](language.types.void.md)

Adiciona os direitos de acesso para o usuário `username` no serviço `servicename`.
Privilégios de administrador são necessários para que isso seja bem-sucedido.

### Parâmetros

`servicename`
:   O nome do serviço para adicionar direitos de acesso.

`username`
:   O parâmetro `username` informa o usuário para o qual os direitos serão adicionados.

`right`
:   Os direitos a adicionar para o `username`.
    As [constantes de direitors de serviço](win32service.constants.md#win32service.constants.rights) podem ser usadas para definir este valor.

`machine`
:   O nome opcional da máquina na qual os direitos serão adicionados.
    Se omitido, a máquina local será usada.

### Valor Retornado

Retorna um objeto [Win32Service\RightInfo](class.win32service-rightinfo.md).

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `service` estiver vazio.

Uma exceção [ValueError](class.valueerror.md) é lançada se o
valor do parâmetro `username` estiver vazio.

Uma exceção [Win32ServiceException](class.win32serviceexception.md) é lançada em caso de erro.

### Veja também

- [win32\_read\_all\_rights\_access\_service()](function.win32-read-all-rights-access-service.md) - Lê todos os direitos de acesso ao serviço
- **win32\_read\_rights\_access\_service()**
- [win32\_remove\_right\_access\_service()](function.win32-remove-right-access-service.md) - Remove os direitos de acesso ao serviço para um nome de usuário
- [Constantes de direitos do Win32](win32service.constants.md#win32service.constants.rights)

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
