# Suporte do Windows

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration82.windows-support.php

---

## Suporte do Windows

### Núcleo

As mensagens de erro específicas do Windows não são mais localizadas, mas sempre
exibidas em inglês para corresponder melhor às mensagens de erro do PHP.

Suporte preliminar e altamente experimental para construção em ARM64 foi adicionado.

### OCI8

Como a compilação no Oracle Client 10g não é mais suportada,
a opção de configuração **--with-oci8** foi descartada.
As opções de configuração **--with-oci8-11g**, **--with-oci8-12c** e
**--with-oci8-19** ainda são suportadas.

### Zip

A extensão Zip foi atualizada para a versão 1.21.0 e
agora é construída como biblioteca compartilhada (DLL) por padrão.

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
