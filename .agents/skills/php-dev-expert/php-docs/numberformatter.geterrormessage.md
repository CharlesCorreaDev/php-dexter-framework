# Obtém a última mensagem de erro do formatador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.geterrormessage.php

---

# NumberFormatter::getErrorMessage

# numfmt\_get\_error\_message

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::getErrorMessage -- numfmt\_get\_error\_message — Obtém a última mensagem de erro do formatador

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::getErrorMessage**(): [string](language.types.string.md)

Estilo procedural

function **numfmt\_get\_error\_message**([NumberFormatter](class.numberformatter.md) `$formatter`): [string](language.types.string.md)

Obtém a mensagem de erro da última função realizada pelo formatador.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

### Valor Retornado

Retorna a mensagem de erro da última chamada ao formatador.

### Examples

**Exemplo #1 Exemplo de **numfmt\_get\_error\_message()****

```
<?php
$fmt = numfmt_create( 'de_DE', NumberFormatter::DECIMAL );
$data = numfmt_format($fmt, 1234567.891234567890000);
var_dump(numfmt_get_error_message($fmt));
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::DECIMAL );
$fmt->format(1234567.891234567890000);
var_dump(numfmt_get_error_message($fmt));
?>
```

### Veja também

- [numfmt\_get\_error\_code()](numberformatter.geterrorcode.md) - Obtém o último código de erro do formatador
- [intl\_get\_error\_code()](function.intl-get-error-code.md) - Obtém o último código de erro
- [intl\_is\_failure()](function.intl-is-failure.md) - Verifica se o código de erro fornecido indica falha

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
