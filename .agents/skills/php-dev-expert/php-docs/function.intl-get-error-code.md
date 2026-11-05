# Obtém o último código de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.intl-get-error-code.php

---

# intl\_get\_error\_code

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

intl\_get\_error\_code — Obtém o último código de erro

### Descrição

function **intl\_get\_error\_code**(): [int](language.types.integer.md)

Útil para lidar com erros ocorridos em métods estáticos quando não existe objeto a
partir do qual o erro seria obtido.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Código de erro retornado pela última chamada de função da API.

### Examples

**Exemplo #1 Exemplo de **intl\_get\_error\_code()****

```
<?php
$coll = collator_create( '<bad_param>' );
if( !$coll ) {
    handle_error( intl_get_error_code() );
}
?>
```

### Veja também

- [intl\_is\_failure()](function.intl-is-failure.md) - Verifica se o código de erro fornecido indica falha
- [intl\_error\_name()](function.intl-error-name.md) - Obtém nome simbólico para um código de erro informado
- [intl\_get\_error\_message()](function.intl-get-error-message.md) - Obtém a descrição do último erro
- [collator\_get\_error\_code()](collator.geterrorcode.md) - Obtém o último código de erro do agrupador
- [numfmt\_get\_error\_code()](numberformatter.geterrorcode.md) - Obtém o último código de erro do formatador

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
