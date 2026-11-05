# Define o parâmetro para o valor especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.setparam.php

---

# SolrParams::setParam

(PECL solr >= 0.9.2)

SolrParams::setParam — Define o parâmetro para o valor especificado

### Descrição

public function **SolrParams::setParam**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [SolrParams](class.solrparams.md)

Define o parâmetro de consulta para o valor especificado. Isso é usado para parâmetros que só podem ser especificados uma vez. As chamadas subsequentes com o mesmo nome de parâmetro substituirão o valor existente.

### Parâmetros

`name`
:   Nome do parâmetro

`value`
:   Valor do parâmetro

### Valor Retornado

Retorna um objeto SolrParam em caso de sucesso e **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SolrParams::setParam()****

```
<?php

$param = new SolrParams();

$param->setParam('q', 'solr')->setParam('rows', 2);

?>
```

O exemplo acima produzirá
algo semelhante a:

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
