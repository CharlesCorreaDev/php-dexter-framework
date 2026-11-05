# Verifica se o cursor está esgotado ou pode ter resultados adicionais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.isdead.php

---

# MongoDB\Driver\Cursor::isDead

(mongodb >=1.0.0)

MongoDB\Driver\Cursor::isDead — Verifica se o cursor está esgotado ou pode ter resultados adicionais

### Descrição

final public function **MongoDB\Driver\Cursor::isDead**(): [bool](language.types.boolean.md)

Verifica se definitivamente não há resultados adicionais disponíveis no
cursor. Este método é semelhante ao método
[» cursor.isExhausted()](https://www.mongodb.com/docs/manual/reference/method/cursor.isExhausted/)
no shell do MongoDB e é útil principalmente ao iterar
[» cursores adaptáveis](https://www.mongodb.com/docs/manual/core/tailable-cursors/).

Um cursor não tem resultados adicionais e é considerado "morto" quando uma das seguintes
opções for verdadeira:

- O lote atual foi totalmente iterado *e* o
  ID do cursor é zero (ou seja, um
  [» getMore](https://www.mongodb.com/docs/manual/reference/command/getMore/)
  não pode ser emitido).
- Foi encontrado um erro ao iterar o cursor.
- O cursor atingiu o limite configurado.

Por padrão, nem sempre é possível determinar se um cursor possui
resultados adicionais. Os casos em que um cursor *pode* ter
mais dados disponíveis são os seguintes:

- Existem documentos adicionais no lote atual, que são armazenados em buffer no
  lado do cliente. A iteração irá buscar um documento do buffer local.
- Não há documentos adicionais no lote atual (ou seja, buffer local),
  mas o ID do cursor é diferente de zero. A iteração solicitará mais documentos do
  servidor por meio de uma operação
  [» getMore](https://www.mongodb.com/docs/manual/reference/command/getMore/),
  que pode ou não retornar resultados adicionais e/ou indicar
  que o cursor foi fechado no servidor retornando zero para seu ID.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se definitivamente não houver resultados adicionais disponíveis no
cursor e **`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Cursor::isDead()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$query = new MongoDB\Driver\Query([]);

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);
$bulk->insert(['x' => 2]);
$bulk->insert(['x' => 3]);
$manager->executeBulkWrite('db.collection', $bulk);

$cursor = $manager->executeQuery('db.collection', $query);

$iterator = new IteratorIterator($cursor);

$iterator->rewind();
var_dump($cursor->isDead());

$iterator->next();
var_dump($cursor->isDead());

$iterator->next();
var_dump($cursor->isDead());

$iterator->next();
var_dump($cursor->isDead());

?>
```

O exemplo acima produzirá:

```
bool(false)
bool(false)
bool(false)
bool(true)
```

### Veja também

- [» Cursores Adaptáveis](https://www.mongodb.com/docs/manual/core/tailable-cursors/) no manual do MongoDB
- [» cursor.isExhausted()](https://www.mongodb.com/docs/manual/reference/method/cursor.isExhausted/) no manual do MongoDB

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
