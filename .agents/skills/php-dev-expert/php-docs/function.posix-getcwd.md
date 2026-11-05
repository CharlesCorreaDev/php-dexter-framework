# Caminho do diretório atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getcwd.php

---

# posix\_getcwd

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getcwd — Caminho do diretório atual

### Descrição

function **posix\_getcwd**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o caminho absoluto do diretório de trabalho atual do script.
Em caso de erro, define o número de erro que pode ser verificado com
[posix\_get\_last\_error()](function.posix-get-last-error.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md) com o caminho absoluto em caso de sucesso.
Em caso de erro, retorna **`false`** e define o número de erro que pode ser verificado com
[posix\_get\_last\_error()](function.posix-get-last-error.md).

### Examples

**Exemplo #1 Exemplo de **posix\_getcwd()****

Este exemplo retorna o caminho absoluto de diretório de trabalho
atual do script.

```
<?php
echo 'Meu diretório de trabalho atual é '.posix_getcwd();
?>
```

### Notas

> **Nota**:
>
> Esta função pode falhar quando
>
> - a permissão de leitura ou de pesquisa for negada
> - o caminho não existir mais

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
