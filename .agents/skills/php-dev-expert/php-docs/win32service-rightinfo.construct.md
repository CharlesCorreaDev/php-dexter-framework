# Cria um novo objeto (não utilizado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/win32service-rightinfo.construct.php

---

# Win32Service\RightInfo::\_\_construct

(PECL win32service >=1.1.0)

Win32Service\RightInfo::\_\_construct — Cria um novo objeto (não utilizado)

### Descrição

final private function **Win32Service\RightInfo::\_\_construct**()

Objetos [Win32Service\RightInfo](class.win32service-rightinfo.md) são retornados como
resultados da função [win32\_read\_right\_access\_service()](function.win32-read-right-access-service.md).

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [Win32Service\RightInfo::getRights()](win32service-rightinfo.get-rights.md) - Retorna a lista de direitos
- [Win32Service\RightInfo::isGrantAccess()](win32service-rightinfo.is-grant-access.md) - Informa se o objeto RightInfo diz respeito a acesso permitido ao recurso
- [Win32Service\RightInfo::isDenyAccess()](win32service-rightinfo.is-deny-access.md) - Informa se o objeto RightInfo diz respeito a acesso negado ao recurso
- [Win32Service\RightInfo::getFullUsername()](win32service-rightinfo.get-full-username.md) - Retorna o domínio e o nome de usuário
- [Win32Service\RightInfo::getUsername()](win32service-rightinfo.get-username.md) - Retorna o nome de usuário
- [Win32Service\RightInfo::getDomain()](win32service-rightinfo.get-domain.md) - Retorna o domínio do usuário

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
