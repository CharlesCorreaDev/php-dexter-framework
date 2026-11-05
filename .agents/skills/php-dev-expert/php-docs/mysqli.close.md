# Fecha uma conexão ao banco de dados previamente aberta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.close.php

---

# mysqli::close

# mysqli\_close

(PHP 5, PHP 7, PHP 8)

mysqli::close -- mysqli\_close — Fecha uma conexão ao banco de dados previamente aberta

### Descrição

Estilo orientado a objetos

public function **mysqli::close**(): [true](language.types.singleton.md)

Estilo procedural

function **mysqli\_close**([mysqli](class.mysqli.md) `$mysql`): [true](language.types.singleton.md)

Fecha uma conexão ao banco de dados previamente aberta.

Conexões MySQL não persistentes e conjuntos de resultados são automaticamente
fechados quando seus objetos são destruídos. Fechar as conexões
e liberar os conjuntos de resultados explicitamente é opcional. Entretanto, é uma boa prática
fechar a conexão assim que o script termina de executar todas as suas
operações de banco de dados, se ele ainda tiver muito processamento a realizar depois
de obter os resultados.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função sempre retorna **`true`**. Anteriormente retornava **`false`** em caso de falha. |

### Examples

**Exemplo #1 Exemplo de **mysqli::close()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "meu_usuario", "minha_senha", "mundo");

$result = $mysqli->query("SELECT Nome, CodigoPais FROM Cidade ORDER BY ID LIMIT 3");

/* Fecha a conexão assim que não for mais necessária */
$mysqli->close();

foreach ($result as $row) {
    /* Processando os dados obtidos do banco */
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "meu_usuario", "minha_senha", "mundo");

$result = mysqli_query($mysqli, "SELECT Nome, CodigoPais FROM Cidade ORDER BY ID LIMIT 3");

/* Fecha a conexão assim que não for mais necessária */
mysqli_close($mysqli);

foreach ($result as $row) {
    /* Processando os dados obtidos do banco */
}
```

### Notas

> **Nota**:
>
> **mysqli\_close()** não fechará conexões persistentes.
> Para detalhes adicionais, consulte a página do manual sobre
> [conexões persistentes](features.persistent-connections.md).

### Veja também

- [mysqli::\_\_construct()](mysqli.construct.md) - Abre uma nova conexão com o servidor MySQL
- [mysqli\_init()](mysqli.init.md) - Inicializa o MySQLi e retorna um objeto a ser utilizado com mysqli\_real\_connect()
- [mysqli\_real\_connect()](mysqli.real-connect.md) - Abre uma conexão a um servidor MySQL
- [mysqli\_free\_result()](mysqli-result.free.md) - Libera memória associada a um resultado

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
