# Retorna o valor de um campo específico em uma linha específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-result.php

---

# cubrid\_result

(PECL CUBRID >= 8.3.0)

cubrid\_result — Retorna o valor de um campo específico em uma linha específica

### Descrição

function **cubrid\_result**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$row`, [mixed](language.types.mixed.md) `$field` = 0): [string](language.types.string.md)

Esta função retorna o valor de um campo específico em uma linha específica
de um conjunto de resultados.

### Parâmetros

`result`
:   `result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

`row`
:   O número da linha do resultado que está sendo recuperado. Os números das linhas começam em 0.

`field`
:   `field` deve conter o nome ou posição do campo que está sendo recuperado. Pode
    ser a posição do campo, o nome do campo, ou a tabela do campo - ponto -
    nome do campo (nome\_tabela.nome\_campo). Se o nome da coluna tiver sido apelidada na instrução
    ('select foo as bar from...'), use o apelido no lugar do nome da coluna.
    Se não definido, o primeiro campo será recuperado.

### Valor Retornado

Valor de um campo específico, em caso de sucesso (NULL se o valor for nulo).

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_result()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

$req = cubrid_execute($conn, "SELECT * FROM code");

$result = cubrid_result($req, 0);
var_dump($result);

$result = cubrid_result($req, 0, 1);
var_dump($result);

$result = cubrid_result($req, 5, "f_name");
var_dump($result);

cubrid_close_request($req);
cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
string(1) "X"
string(5) "Mixed"
string(4) "Gold"
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
