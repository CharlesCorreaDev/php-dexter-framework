# Retorna o valor numérico da mensagem de erro da operação CUBRID anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-errno.php

---

# cubrid\_errno

(PECL CUBRID >= 8.3.1)

cubrid\_errno — Retorna o valor numérico da mensagem de erro da operação CUBRID anterior

### Descrição

function **cubrid\_errno**([resource](language.types.resource.md) `$conn_identifier` = ?): [int](language.types.integer.md)

Retorna o número do erro da última função CUBRID.

A função **cubrid\_errno()** é usada para obter o
código do erro ocorrido durante a execução da API. Normalmente,
ela obtém o código de erro quando a API retorna um valor falso.

### Parâmetros

`conn_identifier`
:   O identificador de conexão CUBRID. Se o identificador da conexão não
    for especificado, será assumida a última conexão aberta por
    [cubrid\_connect()](function.cubrid-connect.md).

### Valor Retornado

Retorna o número do erro da última função CUBRID ou `0` (zero) se nenhum erro tiver ocorrido.

### Examples

**Exemplo #1 Exemplo de **cubrid\_errno()****

```
<?php
$con = cubrid_connect('localhost', 33000, 'demodb', 'dba', '');
$req = cubrid_execute($con, "select id, name from person");
if ($req) {
    while (list ($id, $name) = cubrid_fetch($req))
    echo $id, $name;
} else {
    echo "Código de Erro: ", cubrid_errno($con);
    echo " Mensagem de Erro: ", cubrid_error($con);
}
?>
```

O exemplo acima produzirá:

```
Código de Erro: -493 Mensagem de Erro: Syntax: Unknown class "person". select id, [name] from person
```

### Veja também

- [cubrid\_error()](function.cubrid-error.md) - Obtém a mensagem de erro
- [cubrid\_error\_code()](function.cubrid-error-code.md) - Obtém código de erro para a chamada de função mais recente
- [cubrid\_error\_msg()](function.cubrid-error-msg.md) - Obtém mensagem de erro da chamada de função mais recente

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
