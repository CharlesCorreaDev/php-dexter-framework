# Desativa o valor da propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrobject.offsetunset.php

---

# SolrObject::offsetUnset

(PECL solr >= 0.9.2)

SolrObject::offsetUnset — Desativa o valor da propriedade

### Descrição

public function **SolrObject::offsetUnset**([string](language.types.string.md) `$property_name`): [void](language.types.void.md)

Desativa o valor da propriedade. Isso é usado quando o objeto é tratado como um array. Este objeto é somente leitura. Isso nunca deve ser tentado.

### Parâmetros

`property_name`
:   O nome da propriedade.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SolrObject::offsetUnset()****

```
<?php
/* ... */
?>
```

O exemplo acima produzirá
algo semelhante a:

```
...
```

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
