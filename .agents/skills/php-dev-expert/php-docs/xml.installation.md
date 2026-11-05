# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xml.installation.php

---

## Instalação

Esta extensão está habilitada por padrão. Ela pode ser desabilitada usando a seguinte opção em tempo de compilação:
**--disable-xml**

A versão do PHP para Windows tem suporte
nativo para esta extensão. Nenhuma extensão adicional precisa ser carregada
para usar essas funções.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | A opção **--with-libexpat-dir** foi renomeada para **--with-expat** e não aceita mais um argumento de diretório. A biblioteca 'expat' fornecida foi removida. |

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
