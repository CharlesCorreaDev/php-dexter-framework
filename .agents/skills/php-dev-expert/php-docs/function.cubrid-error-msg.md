# Obtém mensagem de erro da chamada de função mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-error-msg.php

---

# cubrid\_error\_msg

(PECL CUBRID >= 8.3.0)

cubrid\_error\_msg — Obtém mensagem de erro da chamada de função mais recente

### Descrição

function **cubrid\_error\_msg**(): [string](language.types.string.md)

A função **cubrid\_error\_msg()** é usada para obter a
mensagem de erro ocorrida durante execução da API CUBRID. Normalmente, a mensagem
de erro é obtida quando a API retorna FALSE.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Mensagem do erro ocorrido.

### Examples

**Exemplo #1 Exemplo de **cubrid\_error\_msg()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

if (!@cubrid_schema($conn, 100000)) {
    printf("Módulo do erro: %d\nCódigo do erro: %d\nMensagem de erro: %s\n",
        cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());

    cubrid_disconnect($conn);
    exit;
}
?>
```

O exemplo acima produzirá:

```
Módulo do erro: 2
Código do erro: -10015
Mensagem de erro: Invalid T_CCI_SCH_TYPE value
```

### Veja também

- [cubrid\_error\_code()](function.cubrid-error-code.md) - Obtém código de erro para a chamada de função mais recente
- [cubrid\_error\_code\_facility()](function.cubrid-error-code-facility.md) - Obtém o código do módulo do erro

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
