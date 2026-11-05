# Obtém código de erro para a chamada de função mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-error-code.php

---

# cubrid\_error\_code

(PECL CUBRID >= 8.3.0)

cubrid\_error\_code — Obtém código de erro para a chamada de função mais recente

### Descrição

function **cubrid\_error\_code**(): [int](language.types.integer.md)

A função **cubrid\_error\_code()** é usada para obter o
código do erro ocorrido durante a execução da API. Normalmente,
obtém-se o código de erro quando a API retorna FALSE.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Código do erro ocorrido ou `0` (zero) se nenhum
erro ocorreu.

### Examples

**Exemplo #1 Exemplo de **cubrid\_error\_code()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$req = cubrid_prepare($conn , "SELECT * FROM code WHERE s_name=?");

$req = @cubrid_execute($req);
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
Módulo do erro: 4
Código do erro: -30015
Mensagem de erro: Some parameter not binded
```

### Veja também

- [cubrid\_error\_code\_facility()](function.cubrid-error-code-facility.md) - Obtém o código do módulo do erro
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
