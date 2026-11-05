# Retorna o número de campos para a consulta mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.field-count.php

---

# mysqli::$field\_count

# mysqli\_field\_count

(PHP 5, PHP 7, PHP 8)

mysqli::$field\_count -- mysqli\_field\_count — Retorna o número de campos para a consulta mais recente

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli->field\_count](mysqli.field-count.md);

Estilo procedural

function **mysqli\_field\_count**([mysqli](class.mysqli.md) `$mysql`): [int](language.types.integer.md)

Retorna o número de campos para a consulta mais recente na conexão
representada pelo parâmetro `mysql`. Esta função pode
ser útil quando a função [mysqli\_store\_result()](mysqli.store-result.md)
é usada para determinar se a consulta deveria ou não ter produzido um conjunto não vazio
de resultados sem conhecer a natureza da consulta.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Um inteiro representando o número de campos em um conjunto de resultados.

### Examples

**Exemplo #1 Exemplo de $mysqli->field\_count**

Estilo orientado a objetos

```
<?php
$mysqli = new mysqli("localhost", "meu_usuario", "minha_senha", "teste");

$mysqli->query( "DROP TABLE IF EXISTS amigos");
$mysqli->query( "CREATE TABLE amigos (id int, nome varchar(20))");

$mysqli->query( "INSERT INTO amigos VALUES (1,'Luiz'), (2, 'Ricardo')");

$mysqli->real_query("SELECT * FROM amigos");

if ($mysqli->field_count) {
    /* esta foi uma consulta de select/show ou describe */
    $result = $mysqli->store_result();

    /* processa o conjunto de resultados */
    $row = $result->fetch_row();

    /* libera o conjunto de resultados */
    $result->close();
}

/* fecha a conexão */
$mysqli->close();
?>
```

Estilo procedural

```
<?php
$link = mysqli_connect("localhost", "meu_usuario", "minha_senha", "teste");

mysqli_query($link, "DROP TABLE IF EXISTS amigos");
mysqli_query($link, "CREATE TABLE amigos (id int, nome varchar(20))");

mysqli_query($link, "INSERT INTO amigos VALUES (1,'Luiz'), (2, 'Ricardo')");

mysqli_real_query($link, "SELECT * FROM amigos");

if (mysqli_field_count($link)) {
    /* esta foi uma consulta de select/show ou describe */
    $result = mysqli_store_result($link);

    /* processa o conjunto de resultados */
    $row = mysqli_fetch_row($result);

    /* libera o conjunto de resultados */
    mysqli_free_result($result);
}

/* fecha a conexão */
mysqli_close($link);
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
