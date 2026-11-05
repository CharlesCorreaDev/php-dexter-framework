# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/url.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

As seguintes constantes são para uso com
[parse\_url()](function.parse-url.md).

**`PHP_URL_SCHEME`** ([int](language.types.integer.md))

**`PHP_URL_HOST`** ([int](language.types.integer.md))
:   Produz o nome do host da URL analisada.

**`PHP_URL_PORT`** ([int](language.types.integer.md))
:   Produz a porta da URL analisada.

**`PHP_URL_USER`** ([int](language.types.integer.md))
:   Produz o usuário do URL analisado.

**`PHP_URL_PASS`** ([int](language.types.integer.md))
:   Produz a senha do URL analisado.

**`PHP_URL_PATH`** ([int](language.types.integer.md))
:   Produz o caminho do URL analisado.

**`PHP_URL_QUERY`** ([int](language.types.integer.md))
:   Produz a query string do URL analisado.

**`PHP_URL_FRAGMENT`** ([int](language.types.integer.md))
:   Produz o fragmento (string após o hashmark #) do URL analisado.

As seguintes constantes devem ser usadas com
[http\_build\_query()](function.http-build-query.md).

**`PHP_QUERY_RFC1738`** ([int](language.types.integer.md))
:   A codificação é realizada por
    [» RFC 1738](https://datatracker.ietf.org/doc/html/rfc1738) e o
    tipo de mídia `application/x-www-form-urlencoded`, que
    implica que os espaços são codificados como sinais de mais (`+`).

**`PHP_QUERY_RFC3986`** ([int](language.types.integer.md))
:   A codificação é realizada de acordo com [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986),
    e os espaços serão codificados em porcentagem (`%20`).

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
