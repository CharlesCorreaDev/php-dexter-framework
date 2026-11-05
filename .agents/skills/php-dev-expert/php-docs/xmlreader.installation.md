# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.installation.php

---

## Instalação

O XMLReader vem com o código fonte do PHP.
Esta extensão está habilitada por padrão. Ela pode ser desabilitada usando a seguinte opção em tempo de compilação:
**--disable-xmlreader**

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
