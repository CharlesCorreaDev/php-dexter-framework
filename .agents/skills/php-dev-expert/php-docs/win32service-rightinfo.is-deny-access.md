# Informa se o objeto RightInfo diz respeito a acesso negado ao recurso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/win32service-rightinfo.is-deny-access.php

---

# Win32Service\RightInfo::isDenyAccess

(PECL win32service >=1.1.0)

Win32Service\RightInfo::isDenyAccess — Informa se o objeto RightInfo diz respeito a acesso negado ao recurso

### Descrição

final public function **Win32Service\RightInfo::isDenyAccess**(): [bool](language.types.boolean.md)

Retorna **`true`** se o RightInfo diz respeito a acesso negado ao recurso, caso contrário, retorna **`false`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o RightInfo diz respeito a acesso negado ao recurso, caso contrário, retorna **`false`**.

### Veja também

- [Win32Service\RightInfo::\_\_construct()](win32service-rightinfo.construct.md) - Cria um novo objeto (não utilizado)
- [Win32Service\RightInfo::getRights()](win32service-rightinfo.get-rights.md) - Retorna a lista de direitos
- [Win32Service\RightInfo::isGrantAccess()](win32service-rightinfo.is-grant-access.md) - Informa se o objeto RightInfo diz respeito a acesso permitido ao recurso
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
