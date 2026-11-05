# Substitui um documento na coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.replaceone.php

---

# Collection::replaceOne

(No version information available, might only be in Git)

Collection::replaceOne — Substitui um documento na coleção

### Descrição

public function **mysql\_xdevapi\Collection::replaceOne**([string](language.types.string.md) `$id`, [string](language.types.string.md) `$doc`): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

Atualiza (ou substitui) o documento identificado pelo ID, se existir.

### Parâmetros

`id`
:   ID do documento para substituir ou atualizar. Tipicamente é
    o \_id que foi gerado pelo servidor MySQL quando o registro
    foi inserido.

`doc`
:   Documento da coleção para atualizar ou substituir o documento que corresponde
    ao parâmetro **id**.

    Este documento pode ser um objeto de documento ou uma string JSON válida
    descrevendo o novo documento.

### Valor Retornado

Um objeto Result que pode ser usado para consultar o número de itens afetados e o
número de alertas gerados pela operação.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::replaceOne()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$result = $collection->add('{"name": "Alfred", "age": 18, "job": "Butler"}')->execute();

// Normalmente o _id é conhecido por outros meios,
// mas para este exemplo vamos buscar o id gerado e usá-lo
$ids       = $result->getGeneratedIds();
$alfred_id = $ids[0];

// ...

$alfred = $collection->getOne($alfred_id);
$alfred['age'] = 81;
$alfred['job'] = 'Guru';

$collection->replaceOne($alfred_id, $alfred);

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
