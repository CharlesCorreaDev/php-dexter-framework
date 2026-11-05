# Retorna o tipo de interface entre o servidor web e o PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.php-sapi-name.php

---

# php\_sapi\_name

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

php\_sapi\_name — Retorna o tipo de interface entre o servidor web e o PHP

### Descrição

function **php\_sapi\_name**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma string em minúsculas que descreve o tipo de interface
(API do Servidor, SAPI) que o PHP está usando. Por exemplo, no PHP CLI esta
string será "cli" e no Apache poderá ter vários valores diferentes
dependendo da SAPI exata sendo usada. Os valores possíveis estão
listados abaixo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tipo de interface como uma string em minúsculas ou **`false`** em caso de falha.

Embora não seja uma lista exaustiva, os valores possíveis incluem
`apache`,
`apache2handler`,
`cgi` (até o PHP 5.3),
`cgi-fcgi`, `cli`, `cli-server`,
`embed`, `fpm-fcgi`,
`litespeed`,
`phpdbg`.

### Examples

**Exemplo #1 Exemplo de **php\_sapi\_name()****

Este exemplo procura pela sub-string `cgi`
porque a interface também pode ser `cgi-fcgi`.

```
<?php
$sapi_type = php_sapi_name();
if (substr($sapi_type, 0, 3) == 'cgi') {
    echo "Você está usando o PHP CGI.\n";
} else {
    echo "Você não está usando o PHP CGI.\n";
}
?>
```

### Notas

> **Nota**:
> **Uma abordagem alternativa**  
>
> A constante **`PHP_SAPI`** do PHP tem o mesmo valor
> retornado pela função **php\_sapi\_name()**.

**Dica**

# Uma potencial armadilha

A SAPI definida pode não ser óbvia porque, por exemplo,
ao invés de `apache` ela pode estar definida como
`apache2handler`.

### Veja também

- [PHP\_SAPI](reserved.constants.md#reserved.constants.core)

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
