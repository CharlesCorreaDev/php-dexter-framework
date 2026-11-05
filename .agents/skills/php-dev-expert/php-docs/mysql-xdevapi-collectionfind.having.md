# Define condição para funções de agregação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionfind.having.php

---

# CollectionFind::having

(No version information available, might only be in Git)

CollectionFind::having — Define condição para funções de agregação

### Descrição

public function **mysql\_xdevapi\CollectionFind::having**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

Esta função pode ser usada depois da operação 'field' para fazer uma seleção nos documentos a extrair.

### Parâmetros

`sort_expr`
:   Precisa ser uma expressão SQL válida, o uso de funções de agregação é permitido.

### Valor Retornado

Objeto CollectionFind que pode ser usado para processamento adicional.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionFind::having()****

```
<?php

// Assumindo que $coll é um objeto Collection válido

// Encontra todos os documentos para os quais a 'idade' é maior que 40,
// Somente as colunas 'nome' e 'idade' são retornadas no objeto Result
$res = $coll->find()->fields(['nome','idade'])->having('idade > 40')->execute();

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
