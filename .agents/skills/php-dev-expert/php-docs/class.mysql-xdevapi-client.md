# Classe Client

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-client.php

---

# Classe Client

(No version information available, might only be in Git)

## Introdução

Fornece acesso ao pool de conexões.

## Resumo da classe

class **mysql\_xdevapi\Client**
{

/\* Métodos \*/

public function [close](mysql-xdevapi-client.close.md)(): [bool](language.types.boolean.md)

public function **getSession**(): [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md)

}

## Índice

- [mysql\_xdevapi\Client::close](mysql-xdevapi-client.close.md) — Fecha o cliente
- [Client::\_\_construct](mysql-xdevapi-client.construct.md) — Construtor de Client
- [Client::getClient](mysql-xdevapi-client.getsession.md) — Obtém a sessão do cliente

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
