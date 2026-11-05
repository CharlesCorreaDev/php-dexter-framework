# Retorna um objeto com propriedades que representam colunas na linha buscada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-fetch-object.php

---

# db2\_fetch\_object

(PECL ibm\_db2 >= 1.0.0)

db2\_fetch\_object — 
Retorna um objeto com propriedades que representam colunas na linha buscada

### Descrição

function **db2\_fetch\_object**([resource](language.types.resource.md) `$stmt`, [int](language.types.integer.md) `$row_number` = -1): [stdClass](class.stdclass.md)|[false](language.types.singleton.md)

Retorna um objeto no qual cada propriedade representa uma coluna retornada na
linha obtida de um conjunto de resultados.

### Parâmetros

`stmt`
:   Um recurso `stmt` válido contendo um conjunto de resultados.

`row_number`
:   Solicita uma linha específica indexada em 1 do conjunto de resultados. Passar este
    parâmetro resulta em um aviso do PHP se o conjunto de resultados usar um
    cursor somente de avanço.

### Valor Retornado

Retorna um objeto que representa uma única linha no conjunto de resultados. As
propriedades do objeto mapeiam para os nomes das colunas no conjunto de resultados.

Os servidores de banco de dados IBM DB2, Cloudscape e Apache Derby normalmente convertem
os nomes das colunas para letras maiúsculas, portanto as propriedades do objeto também serão em maiúsculas.

Se a instrução SELECT chamar uma função escalar para modificar o valor
de uma coluna, os servidores de banco de dados retornarão o número da coluna como o nome
da coluna no conjunto de resultados. Se a preferência for por nome de coluna
e propriedade de objeto mais descritivos, pode ser usada a cláusula AS para atribuir um nome à
coluna no conjunto de resultados.

Retorna **`false`** se nenhuma linha foi recuperada.

### Examples

**Exemplo #1 Um exemplo de **db2\_fetch\_object()****

O exemplo a seguir emite uma instrução SELECT com uma função escalar,
RTRIM, que remove espaços em branco do final da coluna. Em vez de
criar um objeto com as propriedades "BREED" e "2", usamos a cláusula AS
na instrução SELECT para atribuir o nome "name" à coluna
modificada. O servidor de banco de dados converte os nomes das colunas para letras maiúsculas,
resultando em um objeto com as propriedades "BREED" e "NAME".

```
<?php
$conn = db2_connect($database, $user, $password);

$sql = "SELECT breed, RTRIM(name) AS name
    FROM animals
    WHERE id = ?";

if ($conn) {
    $stmt = db2_prepare($conn, $sql);
    db2_execute($stmt, array(0));

    while ($pet = db2_fetch_object($stmt)) {
        echo "Come here, {$pet->NAME}, my little {$pet->BREED}!";
    }
    db2_close($conn);
}
?>
```

O exemplo acima produzirá:

```
Come here, Pook, my little cat!
```

### Veja também

- [db2\_fetch\_array()](function.db2-fetch-array.md) - Retorna um array, indexado pela posição da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_assoc()](function.db2-fetch-assoc.md) - Retorna um array, indexado pelo nome da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_both()](function.db2-fetch-both.md) - Retorna um array, indexado pelo nome da coluna e pela posição, representando uma linha em um conjunto de resultados
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
