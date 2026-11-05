# Define critérios de agrupamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionfind.groupby.php

---

# CollectionFind::groupBy

(No version information available, might only be in Git)

CollectionFind::groupBy — Define critérios de agrupamento

### Descrição

public function **mysql\_xdevapi\CollectionFind::groupBy**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

Esta função pode ser usada para agrupar o conjunto de resultados por uma ou mais colunas.
É frequentemente usado com funções de agragação como `COUNT`,
`MAX`, `MIN`, `SUM` etc.

### Parâmetros

`sort_expr`
:   A coluna ou colunas que serão usadas para a operação de agrupamento, pode ser uma string única
    ou um array de strings, uma para cada coluna.

### Valor Retornado

Um objeto CollectionFind que pode ser usado para processamento adicional.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionFind::groupBy()****

```
<?php

// Assumindo que $coll é um objeto Collection válido

// Extrai todos os documentos da coleção e agrupa os resultados pelo campo 'nome'
$res = $coll->find()->groupBy('nome')->execute();

?>
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
