# Retorna o ID da thread para a conexão atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.thread-id.php

---

# mysqli::$thread\_id

# mysqli\_thread\_id

(PHP 5, PHP 7, PHP 8)

mysqli::$thread\_id -- mysqli\_thread\_id — Retorna o ID da thread para a conexão atual

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli->thread\_id](mysqli.thread-id.md);

Estilo procedural

function **mysqli\_thread\_id**([mysqli](class.mysqli.md) `$mysql`): [int](language.types.integer.md)

A função **mysqli\_thread\_id()** retorna o ID da thread
para a conexão atual que pode então ser eliminada usando a função
[mysqli\_kill()](mysqli.kill.md). Se a conexão for perdida
e você reconectar com [mysqli\_ping()](mysqli.ping.md), o ID do thread
será diferente. Portanto, o ID do thread deve ser obtido somente quando necessário.

> **Nota**:
>
> O ID do encadeamento é atribuído conexão por conexão. Portanto,
> se a conexão for interrompida e restabelecida, um novo ID de thread
> será atribuído.
>
> Para eliminar uma consulta em execução, pode ser usado o comando SQL
> `KILL QUERY id_processo`.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna o ID do thread para a conexão atual.

### Examples

**Exemplo #1 Exemplo de $mysqli->thread\_id**

Estilo orientado a objetos

```
<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* verifique a conexão */
if (mysqli_connect_errno()) {
    printf("Falha na conexão: %s\n", mysqli_connect_error());
    exit();
}

/* determine nosso id de thread */
$thread_id = $mysqli->thread_id;

/* Matar conexão */
$mysqli->kill($thread_id);

/* Isso deve produzir um erro */
if (!$mysqli->query("CREATE TABLE myCity LIKE City")) {
    printf("Erro: %s\n", $mysqli->error);
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

/* verifique a conexão*/
if (mysqli_connect_errno()) {
    printf("Falha na conexão: %s\n", mysqli_connect_error());
    exit();
}

/* determine nosso id de thread */
$thread_id = mysqli_thread_id($link);

/* Matar conexão */
mysqli_kill($link, $thread_id);

/* Isso deve produzir um erro */
if (!mysqli_query($link, "CREATE TABLE myCity LIKE City")) {
    printf("Erro: %s\n", mysqli_error($link));
    exit;
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Erro: MySQL server has gone away
```

### Veja também

- [mysqli\_kill()](mysqli.kill.md) - Solicita ao servidor o encerramento de um thread do MySQL

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
