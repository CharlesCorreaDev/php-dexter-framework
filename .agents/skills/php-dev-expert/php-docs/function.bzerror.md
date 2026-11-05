# Retorna o número e string de erro do bzip2 em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bzerror.php

---

# bzerror

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

bzerror — 
Retorna o número e string de erro do bzip2 em um array

### Descrição

function **bzerror**([resource](language.types.resource.md) `$bz`): [array](language.types.array.md)

Retorna o número e string do erro de um erro da bzip2 retornado pelo
dado ponteiro de arquivo.

### Parâmetros

`bz`
:   O ponteiro do arquivo - Ele precisa ser válido e precisa apontar para um
    arquivo aberto com sucesso pela [bzopen()](function.bzopen.md).

### Valor Retornado

Retorna um array associativo, com o código de erro na entrada
`errno`, e a mensagem de erro na entrada
`errstr`.

### Examples

**Exemplo #1 Exemplo da **bzerror()****

```
<?php
$error = bzerror($bz);

echo $error["errno"];
echo $error["errstr"];
?>
```

### Veja também

- [bzerrno()](function.bzerrno.md) - Retorna um número de erro da bzip2
- [bzerrstr()](function.bzerrstr.md) - Retorna a string de erro do bzip2

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
