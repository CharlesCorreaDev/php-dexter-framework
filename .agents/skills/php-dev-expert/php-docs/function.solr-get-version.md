# Retorna a versão atual da extensão Apache Solr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.solr-get-version.php

---

# solr\_get\_version

(PECL solr >= 0.9.1)

solr\_get\_version — Retorna a versão atual da extensão Apache Solr

### Descrição

function **solr\_get\_version**(): [string](language.types.string.md)

Essa função retorna uma string com a versão atual da extensão Solr.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string, ou **`false`** em caso de falha.

### Erros/Exceções

Essa função não lança nenhum erro ou exceção.

### Examples

**Exemplo #1 Exemplo de **solr\_get\_version()****

```
<?php

$solr_version = solr_get_version();

print $solr_version;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
0.9.6
```

### Veja também

- [SolrUtils::getSolrVersion()](solrutils.getsolrversion.md) - Retorna a versão atual da extensão Solr

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
