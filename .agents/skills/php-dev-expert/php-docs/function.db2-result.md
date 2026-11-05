# Retorna uma única coluna de uma linha no conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-result.php

---

# db2\_result

(PECL ibm\_db2 >= 1.0.0)

db2\_result — 
Retorna uma única coluna de uma linha no conjunto de resultados

### Descrição

function **db2\_result**([resource](language.types.resource.md) `$stmt`, [int](language.types.integer.md)|[string](language.types.string.md) `$column`): [?](language.types.null.md)[mixed](language.types.mixed.md)

Use **db2\_result()** para retornar o valor de uma coluna
especificada na linha atual de um conjunto de resultados. Deve-se chamar
[db2\_fetch\_row()](function.db2-fetch-row.md) antes de chamar
**db2\_result()** para definir o local do ponteiro
do conjunto de resultados.

### Parâmetros

`stmt`
:   Um recurso `stmt` válido.

`column`
:   Um inteiro que mapeia para o campo indexado em 0 no conjunto de resultados ou
    uma string correspondente ao nome da coluna.

### Valor Retornado

Retorna o valor do campo solicitado se o campo existir no conjunto de
resultados. Retorna **`null`** se o campo não existir e emite um aviso.

### Examples

**Exemplo #1 Um exemplo de **db2\_result()****

O exemplo a seguir demonstra como iterar por um conjunto de resultados
com [db2\_fetch\_row()](function.db2-fetch-row.md) e recuperar colunas do
conjunto de resultados com **db2\_result()**.

```
<?php
$sql = 'SELECT name, breed FROM animals WHERE weight < ?';
$stmt = db2_prepare($conn, $sql);
db2_execute($stmt, array(10));
while (db2_fetch_row($stmt)) {
    $name = db2_result($stmt, 0);
    $breed = db2_result($stmt, 'BREED');
    print "$name $breed";
}
?>
```

O exemplo acima produzirá:

```
cat Pook
gold fish Bubbles
budgerigar Gizmo
goat Rickety Ride
```

### Veja também

- [db2\_fetch\_array()](function.db2-fetch-array.md) - Retorna um array, indexado pela posição da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_assoc()](function.db2-fetch-assoc.md) - Retorna um array, indexado pelo nome da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_both()](function.db2-fetch-both.md) - Retorna um array, indexado pelo nome da coluna e pela posição, representando uma linha em um conjunto de resultados
- [db2\_fetch\_object()](function.db2-fetch-object.md) - Retorna um objeto com propriedades que representam colunas na linha buscada
- [db2\_fetch\_row()](function.db2-fetch-row.md) - Define o ponteiro do conjunto de resultados para a próxima linha ou linha solicitada

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
