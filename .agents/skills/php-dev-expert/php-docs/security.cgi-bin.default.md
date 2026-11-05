# Caso 1: apenas arquivos públicos são disponibilizados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.cgi-bin.default.php

---

## Caso 1: apenas arquivos públicos são disponibilizados

Se o seu servidor não tiver qualquer conteúdo que não seja restringido
por senha ou por IP, não há necessidade para essas opções de
configuração. Se seu servidor web não permitir que você faça
redirecionamento, ou o servidor não tem uma maneira de
comunicar ao binário PHP que a requisição é uma redirecionada
de maneira segura, você pode especificar a opção [--enable-force-cgi-redirect](ini.core.md#ini.cgi.force-redirect)
no script configure. Você ainda tem que assegurar que os seus scripts
PHP não confiem com uma ou outra maneira de chamar o script,
nem diretamente http://my.host/cgi-bin/php/dir/script.php
nem por redirecionamento http://my.host/dir/script.php.

Redirecionamento pode ser configurado no Apache usando `AddHandler`
e diretivas `Action` (veja abaixo).

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
