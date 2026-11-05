# Retorna a lista de direitos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/win32service-rightinfo.get-rights.php

---

# Win32Service\RightInfo::getRights

(PECL win32service >=1.1.0)

Win32Service\RightInfo::getRights — Retorna a lista de direitos

### Descrição

final public function **Win32Service\RightInfo::getRights**(): [array](language.types.array.md)

Retorna a lista de direitos do usuário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a lista de direitos do usuário.

O índice do array é a máscara de bits de direito representada pelas [constantes de direitos](win32service.constants.md#win32service.constants.rights).

O valor é uma string com o nome da constante do Windows (sem o prefixo `WIN32_`).

### Veja também

- [Win32Service\RightInfo::\_\_construct()](win32service-rightinfo.construct.md) - Cria um novo objeto (não utilizado)
- [Win32Service\RightInfo::isGrantAccess()](win32service-rightinfo.is-grant-access.md) - Informa se o objeto RightInfo diz respeito a acesso permitido ao recurso
- [Win32Service\RightInfo::isDenyAccess()](win32service-rightinfo.is-deny-access.md) - Informa se o objeto RightInfo diz respeito a acesso negado ao recurso
- [Win32Service\RightInfo::getFullUsername()](win32service-rightinfo.get-full-username.md) - Retorna o domínio e o nome de usuário
- [Win32Service\RightInfo::getUsername()](win32service-rightinfo.get-username.md) - Retorna o nome de usuário
- [Win32Service\RightInfo::getDomain()](win32service-rightinfo.get-domain.md) - Retorna o domínio do usuário
- [Constantes de direitos Win32](win32service.constants.md#win32service.constants.rights)

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
