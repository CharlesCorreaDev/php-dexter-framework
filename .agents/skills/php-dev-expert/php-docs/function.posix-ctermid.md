# Obtém o caminho do terminal em controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-ctermid.php

---

# posix\_ctermid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_ctermid — Obtém o caminho do terminal em controle

### Descrição

function **posix\_ctermid**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Gera uma [string](language.types.string.md) contendo o caminho para o terminal
atualmente em controle para o processo. Em caso de erro, será gerado um número de erro,
que pode ser verificado usando [posix\_get\_last\_error()](function.posix-get-last-error.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Em caso de sucesso, retorna uma [string](language.types.string.md) do caminho para
o terminal atualmente em controle. Caso contrário, retorna **`false`** e um número de erro
é definido e poderá ser verificado com [posix\_get\_last\_error()](function.posix-get-last-error.md).

### Examples

**Exemplo #1 Exemplo de **posix\_ctermid()****

Este exemplo exibe o caminho para o TTY atual.

```
<?php
echo "Estou sendo executado a partir de ".posix_ctermid();
?>
```

### Veja também

- [posix\_ttyname()](function.posix-ttyname.md) - Determina o nome do dispositivo de terminal
- [posix\_get\_last\_error()](function.posix-get-last-error.md) - Recupera o número do erro definido pela última função posix que falhou

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
