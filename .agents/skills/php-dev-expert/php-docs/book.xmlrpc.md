# XML-RPC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.xmlrpc.php

---

# XML-RPC

# Introdução

Estas funções podem ser usadas para escrever servidores e clientes XML-RPC.
Mais informações sobre XML-RPC podem ser encontradas em
[» https://www.xmlrpc.com/](https://www.xmlrpc.com/), e mais
documentação sobre esta extensão e suas funções em
[» https://xmlrpc-epi.sourceforge.net/](https://xmlrpc-epi.sourceforge.net/).

**Aviso**

Esta extensão é
*EXPERIMENTAL*. O comportamento desta extensão, incluindo
os nomes de suas funções e qualquer outra documentação relacionada a esta
extensão, pode mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

- [Instalação/Configuração](xmlrpc.setup.md)
  - [Dependências](xmlrpc.requirements.md)
  - [Instalação](xmlrpc.installation.md)
  - [Tipos de Recurso](xmlrpc.resources.md)
- [Funções para XML-RPC](ref.xmlrpc.md)
  - [xmlrpc\_decode](function.xmlrpc-decode.md) — Decodifica XML para tipos nativos do PHP
  - [xmlrpc\_decode\_request](function.xmlrpc-decode-request.md) — Decodifica XML para tipos nativos do PHP
  - [xmlrpc\_encode](function.xmlrpc-encode.md) — Gera XML para um valor do PHP
  - [xmlrpc\_encode\_request](function.xmlrpc-encode-request.md) — Gera XML para uma requisição de método
  - [xmlrpc\_get\_type](function.xmlrpc-get-type.md) — Obtém o tipo XML-RPC para um valor PHP
  - [xmlrpc\_is\_fault](function.xmlrpc-is-fault.md) — Determina se um valor de array representa uma falha XML-RPC
  - [xmlrpc\_parse\_method\_descriptions](function.xmlrpc-parse-method-descriptions.md) — Decodifica XML e gera uma lista de descrição de métodos
  - [xmlrpc\_server\_add\_introspection\_data](function.xmlrpc-server-add-introspection-data.md) — Adiciona documentação de introspecção
  - [xmlrpc\_server\_call\_method](function.xmlrpc-server-call-method.md) — Trata requisiçães de XML e chamadas de métodos
  - [xmlrpc\_server\_create](function.xmlrpc-server-create.md) — Cria um servidor xmlrpc
  - [xmlrpc\_server\_destroy](function.xmlrpc-server-destroy.md) — Destrói recursos de servidor
  - [xmlrpc\_server\_register\_introspection\_callback](function.xmlrpc-server-register-introspection-callback.md) — Registra uma função do PHP para gerar documentação
  - [xmlrpc\_server\_register\_method](function.xmlrpc-server-register-method.md) — Registra uma função do PHP para o método com nome method\_name
  - [xmlrpc\_set\_type](function.xmlrpc-set-type.md) — Define o tipo xmlrpc, base64 ou datetime, para um valor string PHP

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
