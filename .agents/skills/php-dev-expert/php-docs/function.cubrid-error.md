# Obtém a mensagem de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-error.php

---

# cubrid\_error

(PECL CUBRID >= 8.3.1)

cubrid\_error — Obtém a mensagem de erro

### Descrição

function **cubrid\_error**([resource](language.types.resource.md) `$connection` = ?): [string](language.types.string.md)

A função **cubrid\_error()** é usada para obter a mensagem
de erro que ocorreu durante o uso da API CUBRID. Normalmente, recebe uma
mensagem de erro quando a API retorna um valor falso.

### Parâmetros

`connection`
:   A conexão CUBRID.

### Valor Retornado

Mensagem do erro ocorrido.

### Examples

**Exemplo #1 Exemplo de **cubrid\_error()****

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

- [cubrid\_errno()](function.cubrid-errno.md) - Retorna o valor numérico da mensagem de erro da operação CUBRID anterior
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
