# Caso 4: Interpretador do PHP fora da árvore de diretórios do servidor web

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.cgi-bin.shell.php

---

## Caso 4: Interpretador do PHP fora da árvore de diretórios do servidor web

Uma maneira muito segura é colocar o interpretador do PHP em algum lugar
longe dos arquivos da árvore de diretórios do servidor. Em /usr/local/bin, por exemplo. A única desvantagem
real para essa opção é que você terá que colocar uma linha
similar à:

```
#!/usr/local/bin/php
```

como a primeira linha de qualquer arquivo contento tags do PHP. Você também
terá que tornar o arquivo executável. Isso é, tratá-lo exatamente como
você trataria qualquer script CGI escrito em Perl ou sh ou qualquer
outra linguagem de script comum que usa o
mecanismo de escape de shell `#!` para ser
executado.

Para fazer o PHP tratar as informações de PATH\_INFO e
PATH\_TRANSLATED corretamente com essa
configuração, o interpretador do PHP deve ser compilado com a opção de configure [--enable-discard-path](ini.core.md#ini.cgi.discard-path).

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
