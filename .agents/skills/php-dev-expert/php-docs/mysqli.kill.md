# Solicita ao servidor o encerramento de um thread do MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.kill.php

---

# mysqli::kill

# mysqli\_kill

(PHP 5, PHP 7, PHP 8)

mysqli::kill -- mysqli\_kill — Solicita ao servidor o encerramento de um thread do MySQL

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.4.0. O uso desta função
é fortemente desencorajado.

### Descrição

Estilo orientado a objetos

#[[\Deprecated](class.deprecated.md)]  
public function **mysqli::kill**([int](language.types.integer.md) `$process_id`): [bool](language.types.boolean.md)

Estilo procedural

#[[\Deprecated](class.deprecated.md)]  
function **mysqli\_kill**([mysqli](class.mysqli.md) `$mysql`, [int](language.types.integer.md) `$process_id`): [bool](language.types.boolean.md)

Esta função é usada para solicitar ao servidor o encerramento de uma thread
do MySQL especificada pelo parâmetro `process_id`. Este valor deve ser
recuperado chamando a função [mysqli\_thread\_id()](mysqli.thread-id.md).

Para encerrar a execução de uma consulta, você deve usar o comando SQL
`KILL QUERY processid`.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O método **mysqli::kill()** e a função **mysqli\_kill()** foram descontinuados. No lugar deles, deve ser usado o comando SQL `KILL`. |

### Examples

**Exemplo #1 Exemplo de **mysqli::kill()****

Estilo orientado a objetos

```
<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* verifica conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

/* determina o identificador da thread */
$thread_id = $mysqli->thread_id;

/* Encerra a conexão */
$mysqli->kill($thread_id);

/* Isto deve gerar um erro */
if (!$mysqli->query("CREATE TABLE myCity LIKE City")) {
    printf("Error: %s\n", $mysqli->error);
    exit;
}

/* fecha a conexão */
$mysqli->close();
?>
```

Estilo procedural

```
<?php
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* verifica conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

/* determina o identificador da thread */
$thread_id = mysqli_thread_id($link);

/* Encerra a conexão */
mysqli_kill($link, $thread_id);

/* Isto deve gerar um erro */
if (!mysqli_query($link, "CREATE TABLE myCity LIKE City")) {
    printf("Error: %s\n", mysqli_error($link));
    exit;
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Error: MySQL server has gone away
```

### Veja também

- [mysqli\_thread\_id()](mysqli.thread-id.md) - Retorna o ID da thread para a conexão atual

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
