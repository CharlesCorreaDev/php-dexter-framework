# libxml

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.libxml.php

---

# libxml

# Introdução

Estas funções/constantes estão disponíveis a partir do PHP 5.1.0, e
as seguintes extensões do núcleo dependem desta extensão libxml:
[DOM](book.dom.md),
[libxml](book.libxml.md),
[SimpleXML](book.simplexml.md),
[SOAP](book.soap.md),
[WDDX](book.wddx.md),
[XSL](book.xsl.md),
[XML](book.xml.md),
[XMLReader](book.xmlreader.md),
[XMLRPC](book.xmlrpc.md) e
[XMLWriter](book.xmlwriter.md).

- [Instalação/Configuração](libxml.setup.md)
  - [Dependências](libxml.requirements.md)
  - [Instalação para versões do PHP >= 7.4](libxml.installation.md)
  - [Instalação para versões do PHP < 7.4](libxml.installation_old.md)
- [Constantes predefinidas](libxml.constants.md)
- [LibXMLError](class.libxmlerror.md) — A classe LibXMLError
- [Funções da libxml](ref.libxml.md)
  - [libxml\_clear\_errors](function.libxml-clear-errors.md) — Limpa o buffer de erro da libxml
  - [libxml\_disable\_entity\_loader](function.libxml-disable-entity-loader.md) — Desabilita a capacidade de carregar entidades externas
  - [libxml\_get\_errors](function.libxml-get-errors.md) — Obtém um array de erros
  - [libxml\_get\_external\_entity\_loader](function.libxml-get-external-entity-loader.md) — Obtém o carregador atual de entidade externa
  - [libxml\_get\_last\_error](function.libxml-get-last-error.md) — Obtém o último erro da libxml
  - [libxml\_set\_external\_entity\_loader](function.libxml-set-external-entity-loader.md) — Altera o carregador padrão de entidades externas
  - [libxml\_set\_streams\_context](function.libxml-set-streams-context.md) — Define o contexto de fluxos para o próximo carregamento ou escrita de documento libxml
  - [libxml\_use\_internal\_errors](function.libxml-use-internal-errors.md) — Desabilita erros da libxml e permite que o usuário obtenha informações de erro conforme necessário

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
