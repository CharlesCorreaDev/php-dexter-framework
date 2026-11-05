# Retorna o domínio e o nome de usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/win32service-rightinfo.get-full-username.php

---

# Win32Service\RightInfo::getFullUsername

(No version information available, might only be in Git)

Win32Service\RightInfo::getFullUsername — Retorna o domínio e o nome de usuário

### Descrição

final public function **Win32Service\RightInfo::getFullUsername**(): [?](language.types.null.md)[string](language.types.string.md)

Retorna o domínio e o nome de usuário separados por barra invertida `\`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o domínio e o nome de usuário. Se o domínio for **`null`**, retorna somente o nome do usuário; retorna **`null`** se nenhum nome de usuário for encontrado.

### Veja também

- [Win32Service\RightInfo::\_\_construct()](win32service-rightinfo.construct.md) - Cria um novo objeto (não utilizado)
- [Win32Service\RightInfo::getRights()](win32service-rightinfo.get-rights.md) - Retorna a lista de direitos
- [Win32Service\RightInfo::isGrantAccess()](win32service-rightinfo.is-grant-access.md) - Informa se o objeto RightInfo diz respeito a acesso permitido ao recurso
- [Win32Service\RightInfo::isDenyAccess()](win32service-rightinfo.is-deny-access.md) - Informa se o objeto RightInfo diz respeito a acesso negado ao recurso
- [Win32Service\RightInfo::getUsername()](win32service-rightinfo.get-username.md) - Retorna o nome de usuário

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
