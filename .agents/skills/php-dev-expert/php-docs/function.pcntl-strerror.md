# Recupera a mensagem de erro do sistema associada ao número de erro fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-strerror.php

---

# pcntl\_strerror

(PHP 5 >= 5.3.4, PHP 7, PHP 8)

pcntl\_strerror — Recupera a mensagem de erro do sistema associada ao número de erro fornecido

### Descrição

function **pcntl\_strerror**([int](language.types.integer.md) `$error_code`): [string](language.types.string.md)

Retorna a mensagem de erro do sistema associada ao `error_code` fornecido
(`errno`) da última função pcntl que falhou.
O parâmetro `error_code` pode ser obtido chamando
[pcntl\_get\_last\_error()](function.pcntl-get-last-error.md).

### Parâmetros

`error_code`
:   Um número de erro (`errno`),
    retornado por [pcntl\_get\_last\_error()](function.pcntl-get-last-error.md).

### Valor Retornado

Retorna a mensagem de erro, como uma string.

### Examples

**Exemplo #1 Exemplo de **pcntl\_strerror()****

Este exemplo tentará aguardar processos filhos
em uma situação onde não existe nenhum processo filho,
e então exibirá a mensagem de erro correspondente.

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

- [pcntl\_get\_last\_error()](function.pcntl-get-last-error.md) - Recupera o número de erro definido pela última função pcntl que falhou

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
