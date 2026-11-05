# Limita o número de documentos a remover

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionremove.limit.php

---

# CollectionRemove::limit

(No version information available, might only be in Git)

CollectionRemove::limit — Limita o número de documentos a remover

### Descrição

public function **mysql\_xdevapi\CollectionRemove::limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\CollectionRemove](class.mysql-xdevapi-collectionremove.md)

Define o número máximo de documentos a remover.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`rows`
:   O número máximo de documentos a remover.

### Valor Retornado

Retorna um objeto CollectionRemove que pode ser usado para executar o comando,
ou para inserir operações adicionais.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionRemove::limit()****

```
<?php

$res = $coll->remove('job in (\'Barista\', \'Programmatore\', \'Ballerino\', \'Programmatrice\')')->limit(5)->sort(['age desc', 'name asc'])->execute();

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
