# Caso 2: usando cgi.force_redirect

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.cgi-bin.force-redirect.php

---

## Caso 2: usando `cgi.force_redirect`

A diretiva de configuração [cgi.force\_redirect](ini.core.md#ini.cgi.force-redirect)
impede que **php** seja chamado
diretamente com uma URL do tipo http://my.host/cgi-bin/php/secretdir/script.php.
Ao invés disso, PHP só irá executar dessa forma se tiver passado
por um servidor web com essa diretiva.

Normalmente o redirecionamento na configuração do Apache é feita com
as seguintes diretivas:

```
Action php-script /cgi-bin/php
AddHandler php-script .php
```

Essa opção só foi testada com o servidor Apache, e confia
no Apache para configurar a variável de ambiente não-padrão do CGI
REDIRECT\_STATUS em requisições redirecionadas. Se seu
servidor web não suporta nenhuma maneira de dizer se a requisição é
direta ou redirecionada, você não pode usar essa opção e você deve usar
uma das outras maneiras de executar a versão do CGI documentada
aqui.

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
