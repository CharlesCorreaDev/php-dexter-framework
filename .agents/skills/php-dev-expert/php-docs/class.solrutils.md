# A classe SolrUtils

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrutils.php

---

# A classe SolrUtils

(PECL solr >= 0.9.2)

## Introdução

Contém métodos utilitários para recuperar a versão atual da extensão e preparar frases de consulta.

Também contém método para escapar de strings de consulta e analisar respostas XML.

## Resumo da classe

abstract
class **SolrUtils**
{

/\* Métodos \*/

public static function [digestXmlResponse](solrutils.digestxmlresponse.md)([string](language.types.string.md) `$xmlresponse`, [int](language.types.integer.md) `$parse_mode` = 0): [SolrObject](class.solrobject.md)

public static function [escapeQueryChars](solrutils.escapequerychars.md)([string](language.types.string.md) `$str`): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getSolrVersion](solrutils.getsolrversion.md)(): [string](language.types.string.md)

public static function [queryPhrase](solrutils.queryphrase.md)([string](language.types.string.md) `$str`): [string](language.types.string.md)

}

## Índice

- [SolrUtils::digestXmlResponse](solrutils.digestxmlresponse.md) — Analisa uma string XML de resposta em um SolrObject
- [SolrUtils::escapeQueryChars](solrutils.escapequerychars.md) — Escapa uma string de consulta Lucene
- [SolrUtils::getSolrVersion](solrutils.getsolrversion.md) — Retorna a versão atual da extensão Solr
- [SolrUtils::queryPhrase](solrutils.queryphrase.md) — Prepara uma frase a partir de uma string Lucene sem escape

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
