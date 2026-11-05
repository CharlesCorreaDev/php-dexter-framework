# Vincula valor ao marcador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionremove.bind.php

---

# CollectionRemove::bind

(No version information available, might only be in Git)

CollectionRemove::bind — Vincula valor ao marcador

### Descrição

public function **mysql\_xdevapi\CollectionRemove::bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\CollectionRemove](class.mysql-xdevapi-collectionremove.md)

Vincula um parâmetro ao marcador na condição de pesquisa da operação de remoção.

O marcador tem a forma :NOME onde ':' é um prefixo comum que deve sempre existir antes de qualquer NOME
de marcador. O método de vinculação aceita uma lista de marcadores se múltiplas
entidades tiverem que ser substituídas na condição de pesquisa da operação de remoção.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`placeholder_values`
:   Valores de marcadores para substituir na condição de pesquisa. Valores múltiplos são permitidos
    e devem ser passados como um array de mapeamentos NOME\_DO\_MARCADOR=>VALOR\_DO\_MARCADOR.

### Valor Retornado

Um objeto CollectionRemove que pode ser usado para executar o comando, ou para inserir operações adicionais.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionRemove::bind()****

```
<?php

$res = $coll->remove('age > :age_from and age < :age_to')->bind(['age_from' => 20, 'age_to' => 50])->limit(7)->execute();

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
