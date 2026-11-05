# Instalação para versões do PHP >= 7.4

> **Fonte / Source:** https://www.php.net/manual/pt_BR/libxml.installation.php

---

## Instalação para versões do PHP >= 7.4

A extensão libxml está habilitada por padrão, embora possa ser desabilitada com
**--without-libxml**.

O PHP usa `pkg-config` para selecionar o arquivos correto de biblioteca e cabeçalhos,
e as opções de compilação a serem usadas para libxml2.
Para assegurar-se de que a versão pretendida da libxml2 está selecionada,
a variável de ambiente PKG\_CONFIG\_PATH pode
ser usada para controlar o caminho de pesquisa para `pkg-config` antes de executar o script de configuração:

```
PKG_CONFIG_PATH="/path/to/libxml2/prefix/lib/pkgconfig:/lib/pkgconfig"
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
