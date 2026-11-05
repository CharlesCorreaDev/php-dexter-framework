# A classe Win32Service\RightInfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.win32service-rightinfo.php

---

# A classe Win32Service\RightInfo

(PECL win32service >=1.1.0)

## Introdução

A classe interna **Win32Service\RightInfo** encapsula o resultado de [win32\_read\_right\_access\_service()](function.win32-read-right-access-service.md).

## Resumo da classe

final

class **Win32Service\RightInfo**
{

/\* Métodos \*/

final private function [\_\_construct](win32service-rightinfo.construct.md)()

final public function [getDomain](win32service-rightinfo.get-domain.md)(): [?](language.types.null.md)[string](language.types.string.md)

final public function [getFullUsername](win32service-rightinfo.get-full-username.md)(): [?](language.types.null.md)[string](language.types.string.md)

final public function [getRights](win32service-rightinfo.get-rights.md)(): [array](language.types.array.md)

final public function [getUsername](win32service-rightinfo.get-username.md)(): [?](language.types.null.md)[string](language.types.string.md)

final public function [isDenyAccess](win32service-rightinfo.is-deny-access.md)(): [bool](language.types.boolean.md)

final public function [isGrantAccess](win32service-rightinfo.is-grant-access.md)(): [bool](language.types.boolean.md)

}

## Índice

- [Win32Service\RightInfo::\_\_construct](win32service-rightinfo.construct.md) — Cria um novo objeto (não utilizado)
- [Win32Service\RightInfo::getDomain](win32service-rightinfo.get-domain.md) — Retorna o domínio do usuário
- [Win32Service\RightInfo::getFullUsername](win32service-rightinfo.get-full-username.md) — Retorna o domínio e o nome de usuário
- [Win32Service\RightInfo::getRights](win32service-rightinfo.get-rights.md) — Retorna a lista de direitos
- [Win32Service\RightInfo::getUsername](win32service-rightinfo.get-username.md) — Retorna o nome de usuário
- [Win32Service\RightInfo::isDenyAccess](win32service-rightinfo.is-deny-access.md) — Informa se o objeto RightInfo diz respeito a acesso negado ao recurso
- [Win32Service\RightInfo::isGrantAccess](win32service-rightinfo.is-grant-access.md) — Informa se o objeto RightInfo diz respeito a acesso permitido ao recurso

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
