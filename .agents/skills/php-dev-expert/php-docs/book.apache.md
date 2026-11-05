# Apache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.apache.php

---

# Apache

# Introdução

Estas funções estão disponíveis quando o PHP estiver rodando como módulo do Apache. Algumas
funções podem estar disponíveis quando o PHP estiver rodando sob outras APIs de servidor web. Verifique
a documentação de cada função individual para detalhes.

- [Instalação/Configuração](apache.setup.md)
  - [Instalação](apache.installation.md)
  - [Configurações de Execução](apache.configuration.md)
- [Apache Funções](ref.apache.md)
  - [apache\_child\_terminate](function.apache-child-terminate.md) — Finaliza o processo Apache depois da requisição
  - [apache\_get\_modules](function.apache-get-modules.md) — Retorna uma lista de módulos carregados do Apache
  - [apache\_get\_version](function.apache-get-version.md) — Retorna a versão do Apache
  - [apache\_getenv](function.apache-getenv.md) — Retorna uma variável subprocess\_env do Apache
  - [apache\_lookup\_uri](function.apache-lookup-uri.md) — Realiza uma requisição parcial para a URI especificada e retorna todas as informações sobre ela
  - [apache\_note](function.apache-note.md) — Obtêm e configura notas de requisição
  - [apache\_request\_headers](function.apache-request-headers.md) — Obtém todos os cabeçalhos da requisição HTTP
  - [apache\_response\_headers](function.apache-response-headers.md) — Obtém todos os cabeçalhos da resposta HTTP
  - [apache\_setenv](function.apache-setenv.md) — Define uma variável subprocess\_env do Apache
  - [getallheaders](function.getallheaders.md) — Obtém todos os cabeçalhos da requisição HTTP
  - [virtual](function.virtual.md) — Realiza uma sub-requisição Apache

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
