# Especifica o campo reserva a ser usado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightalternatefield.php

---

# SolrQuery::setHighlightAlternateField

(PECL solr >= 0.9.2)

SolrQuery::setHighlightAlternateField — Especifica o campo reserva a ser usado

### Descrição

public function **SolrQuery::setHighlightAlternateField**([string](language.types.string.md) `$field`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Se um trecho não puder ser gerado porque não houve termos correspondentes, pode-se especificar um campo para usar como reserva ou resumo padrão.

### Parâmetros

`field`
:   O nome do campo reserva.

`field_override`
:   O nome do campo para o qual estamos substituindo essa configuração.

### Valor Retornado

Retorna o objeto SolrQuery atual, se o valor de retorno for usado.

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
