# Recupera o número de erro definido pela última função pcntl que falhou

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-get-last-error.php

---

# pcntl\_get\_last\_error

(PHP 5 >= 5.3.4, PHP 7, PHP 8)

pcntl\_get\_last\_error — Recupera o número de erro definido pela última função pcntl que falhou

### Descrição

function **pcntl\_get\_last\_error**(): [int](language.types.integer.md)

Recupera o número do erro (`errno`) definido pela última
função pcntl que falhou. A mensagem de erro do sistema associada
ao número do erro pode ser verificada com [pcntl\_strerror()](function.pcntl-strerror.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número do erro (`errno`) definido pela última
função pcntl que falhou. Se não houver erro, 0 é retornado.

### Examples

**Exemplo #1 Exemplo de **pcntl\_get\_last\_error()****

Este exemplo tentará aguardar processos filhos
em uma situação onde não existe nenhum processo filho,
e então imprimirá a mensagem de erro correspondente.

```
<?php
$pid = pcntl_wait($status);
if ($pid === -1) {
    $errno = pcntl_get_last_error();
    $message = pcntl_strerror($errno);
    fwrite(STDERR, 'pcntl_wait falhou com errno ' . $errno
           . ': ' . $message . PHP_EOL);
}
```

O exemplo acima produzirá
algo semelhante a:

```
pcntl_wait falhou com errno 10: No child processes
```

### Veja também

- [pcntl\_strerror()](function.pcntl-strerror.md) - Recupera a mensagem de erro do sistema associada ao número de erro fornecido

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
