# Mescla um documento de entrada em outro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.merge.php

---

# SolrInputDocument::merge

(PECL solr >= 0.9.2)

SolrInputDocument::merge — Mescla um documento de entrada em outro

### Descrição

public function **SolrInputDocument::merge**([SolrInputDocument](class.solrinputdocument.md) `$sourceDoc`, [bool](language.types.boolean.md) `$overwrite` = **`true`**): [bool](language.types.boolean.md)

Mescla um documento de entrada em outro.

### Parâmetros

`sourceDoc`
:   O documento de origem.

`overwrite`
:   Se ieste parâmetro for **`true`**, os campos correspondentes no documento de destino serão substituídos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. No futuro, isso será modificado para retornar o número de campos do novo documento.

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
