# Retorna o código com comentários e espaços em branco removidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.php-strip-whitespace.php

---

# php\_strip\_whitespace

(PHP 5, PHP 7, PHP 8)

php\_strip\_whitespace — Retorna o código com comentários e espaços em branco removidos

### Descrição

function **php\_strip\_whitespace**([string](language.types.string.md) `$filename`): [string](language.types.string.md)

Retorna o código-fonte do PHP do arquivo `filename` com
comentários PHP e espaços em branco removidos. Isto pode ser útil para determina
a quantidade atual de códigos em seu script comparado com a quantidade de comentários.
Similar ao uso de **php -w** pela
[linha de comando](features.commandline.md).

### Parâmetros

`filename`
:   Caminho para o arquivo PHP.

### Valor Retornado

O código-fonte filtrado será retornado em caso de sucesso, ou uma string vazia
em falha.

> **Nota**:
>
> Esta função respeita o valor da diretiva
> ini
> [short\_open\_tag](ini.core.md#ini.short-open-tag).

### Examples

**Exemplo #1 Exemplo de **php\_strip\_whitespace()****

```
<?php
// Comentário do PHP aqui

/*
 * Outro comentário do PHP
 */

echo        php_strip_whitespace(__FILE__);
// Novas linhas são consideradas espaço em branco, e também são removidas:
do_nothing();
?>
```

O exemplo acima produzirá:

```
<?php
 echo php_strip_whitespace(__FILE__); do_nothing(); ?>
```

Note que os comentários do PHP foram removidos, assim como os espaços em branco
e caracteres de novas linhas depois da primeira declaração echo.

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
