# Corrige documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.patch.php

---

# CollectionModify::patch

(No version information available, might only be in Git)

CollectionModify::patch — Corrige documento

### Descrição

public function **mysql\_xdevapi\CollectionModify::patch**([string](language.types.string.md) `$document`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Aplica um objeto de correção a um ou mais documentos,
podendo atualizar várias propriedades do documento.

### Parâmetros

`document`
:   Um documento com as propriedades a serem aplicadas aos documentos correspondentes.

### Valor Retornado

Um objeto CollectionModify.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::patch()****

```
<?php

$res = $coll->modify('"Programmatore" IN job')->patch('{"Hobby" : "Programmare"}')->execute();

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
