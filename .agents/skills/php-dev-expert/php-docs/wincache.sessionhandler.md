# Manipulador de Sessão WinCache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wincache.sessionhandler.php

---

## Manipulador de Sessão WinCache

O manipulador de sessão do WinCache (disponível desde o WinCache 1.1.0) pode ser usado para configurar o PHP para armazenar os dados da sessão no cache de sessão de memória compartilhada.
Usar memória compartilhada em vez do armazenamento de sessão de arquivo padrão ajuda a melhorar o desempenho de aplicativos PHP
que armazenam grandes quantidades de dados em objetos de sessão. O cache de sessão do WinCache utiliza memória compartilhada com suporte a arquivos, o que garante
que os dados da sessão não sejam perdidos durante a reciclagem de pools de aplicativos do IIS.

Para configurar o PHP para usar o manipulador de sessão WinCache, defina a configuração php.ini
[session.save\_handler](session.configuration.md#ini.session.save-handler) como *wincache*.
Por padrão, o local do arquivo temporário do Windows é usado para armazenar os
dados da sessão. Para alterar o local do arquivo de sessão, use a diretiva
[session.save\_path](session.configuration.md#ini.session.save-path).

**Exemplo #1 Habilitando o manipulador de sessão do WinCache**

```
session.save_handler = wincache
session.save_path = C:\inetpub\temp\session\
```

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
