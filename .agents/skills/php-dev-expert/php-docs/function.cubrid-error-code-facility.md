# Obtém o código do módulo do erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-error-code-facility.php

---

# cubrid\_error\_code\_facility

(PECL CUBRID >= 8.3.0)

cubrid\_error\_code\_facility — Obtém o código do módulo do erro

### Descrição

function **cubrid\_error\_code\_facility**(): [int](language.types.integer.md)

A função **cubrid\_error\_code\_facility()** é usada para
obter o código do módulo (camada onde o erro ocorreu) do código
do erro ocorrido durante execução da API. Normalmente, pode-se
obter o código de erro quando a API retorna FALSE.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Código do módulo onde ocorreu o erro:
**`CUBRID_FACILITY_DBMS`**, **`CUBRID_FACILITY_CAS`**,
**`CUBRID_FACILITY_CCI`** ou **`CUBRID_FACILITY_CLIENT`**.

### Examples

**Exemplo #1 Exemplo de **cubrid\_error\_code\_facility()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$req = @cubrid_execute($conn, "SELECT * FROM unknown");
if (!$req) {
    printf("Módulo do erro: %d\nCódigo do erro: %d\nMensagem de erro: %s\n",
        cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());

    cubrid_disconnect($conn);
    exit;
}
?>
```

O exemplo acima produzirá:

```
Módulo do erro: 1
Código do erro: -493
Mensagem de erro: Syntax: In line 1, column 15 before END OF STATEMENT
Syntax error: unexpected 'unknown'
```

### Veja também

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
