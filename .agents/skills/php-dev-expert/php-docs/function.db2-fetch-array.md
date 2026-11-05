# Retorna um array, indexado pela posição da coluna, representando uma linha em um conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-fetch-array.php

---

# db2\_fetch\_array

(PECL ibm\_db2 >= 1.0.1)

db2\_fetch\_array — 
Retorna um array, indexado pela posição da coluna, representando uma linha em um conjunto de resultados

### Descrição

function **db2\_fetch\_array**([resource](language.types.resource.md) `$stmt`, [int](language.types.integer.md) `$row_number` = -1): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna um array, indexado pela posição da coluna, representando uma linha em um conjunto de
resultados. As colunas são indexadas a partir de 0.

### Parâmetros

`stmt`
:   Um recurso `stmt` válido contendo um conjunto de resultados.

`row_number`
:   Solicita uma linha específica indexada em 1 do conjunto de resultados. Passar este
    parâmetro resulta em um aviso do PHP se o conjunto de resultados usar um
    cursor somente de avanço.

### Valor Retornado

Retorna um array indexado em 0 com valores de coluna indexados pela posição da coluna
representando a próxima linha ou a linha solicitada no conjunto de resultados. Retorna **`false`** se
não houver linhas restantes no conjunto de resultados, ou se a linha solicitada por
`row_number` não existir no conjunto de resultados.

### Examples

**Exemplo #1 Iterando por um cursor somente de avanço**

Se **db2\_fetch\_array()** for chamada sem um número de linha
específico, ela recuperará automaticamente a próxima linha no conjunto de resultados.

```
<?php

$sql = "SELECT id, name, breed, weight FROM animals ORDER BY breed";
$stmt = db2_prepare($conn, $sql);
$result = db2_execute($stmt);

while ($row = db2_fetch_array($stmt)) {
    printf ("%-5d %-16s %-32s %10s\n",
        $row[0], $row[1], $row[2], $row[3]);
}
?>
```

O exemplo acima produzirá:

```
0     Pook             cat                                    3.20
5     Rickety Ride     goat                                   9.70
2     Smarty           horse                                350.00
```

**Exemplo #2 Recuperando linhas específicas com **db2\_fetch\_array()**
a partir de um cursor rolável**

Se o conjunto de resultados usar um cursor rolável,
**db2\_fetch\_array()** pode ser chamada com um número de linha específico. O
exemplo a seguir recupera todas as outras linhas no conjunto de resultados, começando
com a segunda linha.

```
<?php

$sql = "SELECT id, name, breed, weight FROM animals ORDER BY breed";
$result = db2_exec($stmt, $sql, array('cursor' => DB2_SCROLLABLE));

$i=2;
while ($row = db2_fetch_array($result, $i)) {
    printf ("%-5d %-16s %-32s %10s\n",
        $row[0], $row[1], $row[2], $row[3]);
    $i = $i + 2;
}
?>
```

O exemplo acima produzirá:

```
0     Pook             cat                                    3.20
5     Rickety Ride     goat                                   9.70
2     Smarty           horse                                350.00
```

### Veja também

- [db2\_fetch\_assoc()](function.db2-fetch-assoc.md) - Retorna um array, indexado pelo nome da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_both()](function.db2-fetch-both.md) - Retorna um array, indexado pelo nome da coluna e pela posição, representando uma linha em um conjunto de resultados
- [db2\_fetch\_object()](function.db2-fetch-object.md) - Retorna um objeto com propriedades que representam colunas na linha buscada
- [db2\_fetch\_row()](function.db2-fetch-row.md) - Define o ponteiro do conjunto de resultados para a próxima linha ou linha solicitada
- [db2\_result()](function.db2-result.md) - Retorna uma única coluna de uma linha no conjunto de resultados

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
