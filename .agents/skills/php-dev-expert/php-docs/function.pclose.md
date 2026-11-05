# Fecha o ponteiro de arquivo de processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pclose.php

---

# pclose

(PHP 4, PHP 5, PHP 7, PHP 8)

pclose — Fecha o ponteiro de arquivo de processo

### Descrição

function **pclose**([resource](language.types.resource.md) `$handle`): [int](language.types.integer.md)

Fecha um ponteiro de arquivo a um tubo aberto por [popen()](function.popen.md).

### Parâmetros

`handle`
:   O ponteiro de arquivo deve ser válido e deve ter sido retornado por uma
    chamada bem sucedida à função [popen()](function.popen.md).

### Valor Retornado

Retorna o estado da finalização do processo que estava em execução. Em caso de
erro, `-1` é retornado.

> **Nota**:
>
> Se o PHP foi compilado com --enable-sigchild, o valor retornado por esta função é indefinido.

### Examples

**Exemplo #1 Exemplo de **pclose()****

```
<?php
$handle = popen('/bin/ls', 'r');
pclose($handle);
?>
```

### Notas

> **Nota**:
> **Somente Unix:**  
>
> **pclose()** é implementada internamente usando a
> chamada de sistema `waitpid(3)`. Para obter o código real
> do estado de saída, a função [pcntl\_wexitstatus()](function.pcntl-wexitstatus.md) deve
> ser usada.

### Veja também

- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo

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
