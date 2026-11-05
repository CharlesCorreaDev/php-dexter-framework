# Obtém o código do último erro gerado pelo pacote.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/resourcebundle.geterrorcode.php

---

# ResourceBundle::getErrorCode

# resourcebundle\_get\_error\_code

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0)

ResourceBundle::getErrorCode -- resourcebundle\_get\_error\_code — Obtém o código do último erro gerado pelo pacote.

### Descrição

Estilo orientado a objetos

public function **ResourceBundle::getErrorCode**(): [int](language.types.integer.md)

Estilo procedural

function **resourcebundle\_get\_error\_code**([ResourceBundle](class.resourcebundle.md) `$bundle`): [int](language.types.integer.md)

Obtém o código do erro gerado pela última função realizada pelo objeto pacote.

### Parâmetros

`bundle`
:   Um objeto [ResourceBundle](class.resourcebundle.md).

### Valor Retornado

Retorna o código de erro da última chamada do objeto pacote.

### Examples

**Exemplo #1 Exemplo da função **resourcebundle\_get\_error\_code()****

```
<?php
$r = resourcebundle_create( 'es', "/usr/share/data/myapp");
echo $r['somestring'];
if(intl_is_failure(resourcebundle_get_error_code($r))) {
    report_error("Bundle error");
}
?>
```

**Exemplo #2 Exemplo orientado à objeto**

```
<?php
$r = new ResourceBundle( 'es', "/usr/share/data/myapp");
echo $r['somestring'];
if(intl_is_failure(ResourceBundle::getErrorCode($r))) {
    report_error("Bundle error");
}
?>
```

### Veja também

- [resourcebundle\_get\_error\_message()](resourcebundle.geterrormessage.md) - Obtém a última mensagem de erro gerada pelo pacote
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
