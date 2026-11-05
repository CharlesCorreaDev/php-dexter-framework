# Recebe a próxima linha de um resultado como um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.fetch-object.php

---

# mysqli\_result::fetch\_object

# mysqli\_fetch\_object

(PHP 5, PHP 7, PHP 8)

mysqli\_result::fetch\_object -- mysqli\_fetch\_object — Recebe a próxima linha de um resultado como um objeto

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::fetch\_object**([string](language.types.string.md) `$class` = "stdClass", [array](language.types.array.md) `$constructor_args` = []): [object](language.types.object.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_fetch\_object**([mysqli\_result](class.mysqli-result.md) `$result`, [string](language.types.string.md) `$class` = "stdClass", [array](language.types.array.md) `$constructor_args` = []): [object](language.types.object.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Recebe uma linha de dados do resultado e retorna-a como um objeto,
onde cada propriedade representa o nome da coluna do resultado.
Cada chamada subsequente a esta função retornará a linha seguinte dentro
do conjunto de resultados, ou **`null`** se não houver mais linhas.

Se duas ou mais colunas do resultado tiverem o mesmo nome, a última
coluna terá precedência e irá sobrescrever os dados anteriores. Para
acessar múltiplas colunas com o mesmo nome,
[mysqli\_fetch\_row()](mysqli-result.fetch-row.md) pode ser usada para receber o array indexado
numericamente, ou apelidos podem ser usados na lista de seleção da consulta SQL para dar
nomes diferentes às colunas.

> **Nota**:
>
> Esta função define as propriedades do
> objeto antes de chamar o construtor do objeto.

> **Nota**:
>
> Os nomes de campos retornados por esta função
> *diferenciam maiúsculas e minúsculas*.

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

`class`
:   O nome da classe a instanciar, definir propriedades e retornar.
    Se não especificada, um objeto [stdClass](class.stdclass.md) é retornado.

`constructor_args`
:   Um [array](language.types.array.md) opcional de parâmetros para passar ao construtor
    de objetos da classe definida em `class`.

### Valor Retornado

Retorna um objeto que representa a linha recebida, onde cada propriedade
representa o nome da coluna do resultado, **`null`** se não
houver mais colunas no resultado, ou **`false`** em caso de falha.

### Erros/Exceções

Um exceção [ValueError](class.valueerror.md) é lançada quando
o parâmetro `constructor_args` é não vazio com a classe não possuindo um construtor.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora lança uma exceção [ValueError](class.valueerror.md) quando o parâmetro `constructor_args` é não vazio com a classe não possuindo um construtor; anteriormente uma [Exception](class.exception.md) era lançada. |
| 8.0.0 | `constructor_args` agora aceita `[]` para construtores sem parâmetros; anteriormente, uma exceção era lançada. |

### Examples

**Exemplo #1 Exemplo de **mysqli\_result::fetch\_object()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";

$result = $mysqli->query($query);

while ($obj = $result->fetch_object()) {
    printf("%s (%s)\n", $obj->Name, $obj->CountryCode);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";

$result = mysqli_query($link, $query);

while ($obj = mysqli_fetch_object($result)) {
    printf("%s (%s)\n", $obj->Name, $obj->CountryCode);
}
```

Os exemplos acima produzirão
algo semelhante a:

```
Pueblo (USA)
Arvada (USA)
Cape Coral (USA)
Green Bay (USA)
Santa Clara (USA)
```

### Veja também

- [mysqli\_fetch\_array()](mysqli-result.fetch-array.md) - Recebe a próxima linha de resultado como array associativo, numérico, ou ambos
- [mysqli\_fetch\_assoc()](mysqli-result.fetch-assoc.md) - Obtém a próxima linha do conjunto de resultados como um array associativo
- [mysqli\_fetch\_column()](mysqli-result.fetch-column.md) - Recebe uma única coluna da próxima linha de um resultado
- [mysqli\_fetch\_row()](mysqli-result.fetch-row.md) - Obtém a próxima linha de um resultado como um array enumerado
- [mysqli\_query()](mysqli.query.md) - Executa uma consulta no banco de dados
- [mysqli\_data\_seek()](mysqli-result.data-seek.md) - Ajusta o ponteiro do resultado para uma linha arbitrária no resultado

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
