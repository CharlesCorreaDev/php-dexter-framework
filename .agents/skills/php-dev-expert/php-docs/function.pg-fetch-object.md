# Busca uma linha como um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-fetch-object.php

---

# pg\_fetch\_object

(PHP 4, PHP 5, PHP 7, PHP 8)

pg\_fetch\_object — Busca uma linha como um objeto

### Descrição

function **pg\_fetch\_object**(  
    [PgSql\Result](class.pgsql-result.md) `$result`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$row` = **`null`**,  
    [string](language.types.string.md) `$class` = "stdClass",  
    [array](language.types.array.md) `$constructor_args` = []  
): [object](language.types.object.md)|[false](language.types.singleton.md)

**pg\_fetch\_object()** retorna um objeto com
propriedades que correspondem aos nomes dos campos da linha buscada. Opcionalmente, ele pode
instanciar um objeto de uma classe específica e passar parâmetros para o
construtor dessa classe.

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

Em termos de velocidade, a função é idêntica à
[pg\_fetch\_array()](function.pg-fetch-array.md) e quase tão rápida quanto
[pg\_fetch\_row()](function.pg-fetch-row.md) (a diferença é
insignificante).

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`row`
:   Número da linha no resultado a ser buscado. As linhas são numeradas de 0 para cima. Se
    omitido ou **`null`**, a próxima linha será buscada.

`class`
:   O nome da classe a ser instanciada, definir as propriedades e retornar.
    Se não for especificado, um objeto [stdClass](class.stdclass.md) será retornado.

`constructor_args`
:   Um [array](language.types.array.md) opcional de parâmetros a serem passados ao construtor
    para objetos `class`.

### Valor Retornado

Um [object](language.types.object.md) com um atributo para cada nome de campo
no resultado. Os valores `NULL` do banco de dados
são retornados como **`null`**.

**`false`** é retornado se `row` exceder o número
de linhas no conjunto, não houver mais linhas ou em qualquer outro erro.

### Erros/Exceções

Um [ValueError](class.valueerror.md) é lançado quando
`constructor_args` for não vazio e a classe não possuir construtor.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora lança uma exceção [ValueError](class.valueerror.md) quando `constructor_args` for não vazio e a classe não possuir construtor; anteriormente uma [Exception](class.exception.md) era lançada. |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_fetch\_object()****

```
<?php

$database = "store";

$db_conn = pg_connect("host=localhost port=5432 dbname=$database");
if (!$db_conn) {
  echo "Falha ao conectar ao banco de dados postgres $database\n";
  exit;
}

$qu = pg_query($db_conn, "SELECT * FROM books ORDER BY author");

while ($data = pg_fetch_object($qu)) {
  echo $data->author . " (";
  echo $data->year . "): ";
  echo $data->title . "<br />";
}

pg_free_result($qu);
pg_close($db_conn);

?>
```

### Veja também

- [pg\_query()](function.pg-query.md) - Executa uma consulta
- [pg\_fetch\_array()](function.pg-fetch-array.md) - Busca uma linha como um array
- [pg\_fetch\_assoc()](function.pg-fetch-assoc.md) - Busca uma linha como um array associativo
- [pg\_fetch\_row()](function.pg-fetch-row.md) - Obtém uma linha como um array enumerado
- [pg\_fetch\_result()](function.pg-fetch-result.md) - Retorna valores de uma instância de resultado

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
