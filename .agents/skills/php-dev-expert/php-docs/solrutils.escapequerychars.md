# Escapa uma string de consulta Lucene

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrutils.escapequerychars.php

---

# SolrUtils::escapeQueryChars

(PECL solr >= 0.9.2)

SolrUtils::escapeQueryChars — Escapa uma string de consulta Lucene

### Descrição

public static function **SolrUtils::escapeQueryChars**([string](language.types.string.md) `$str`): [string](language.types.string.md)|[false](language.types.singleton.md)

Lucene oferece suporte ao escape de caracteres especiais que fazem parte da sintaxe da consulta.

A lista atual de caracteres especiais é:

```
+ - && || ! ( ) { } [ ] ^ " ~ * ? : \ /
```

Esses caracteres fazem parte da sintaxe da consulta e devem ser escapados

### Parâmetros

`str`
:   Esta é a string de consulta a ser escapada.

### Valor Retornado

Retorna a string escapada ou **`false`** em caso de falha.

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
