# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rrd.requirements.php

---

## Dependências

É necessário instalar o librrd primeiro para poder usar o PECL/rrd. A opção mais comum
é usar o pacote librrd-dev da distribuição Linux específica.
O PECL/rrd foi testado com o librrd 1.4.3; versões mais antigas ou mais recentes podem ou não
funcionar como esperado.

**Aviso**

Librrd e, portanto, a extensão em si, não são, em sua maioria, seguras para multi-tarefas. Existem muitos
estados globais e compartilhados em librrd. Pode ser perigoso usar esta extensão
em ambientes multi-tarefas, como o Apache2 MPM Worker.
Se houver muitas requisições paralelas, uma requisição pode alterar alguns
estados globais de librrd de outras requisições em execução.

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
