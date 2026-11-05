# Lê dados do bloco de memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shmop-read.php

---

# shmop\_read

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

shmop\_read — Lê dados do bloco de memória compartilhada

### Descrição

function **shmop\_read**([Shmop](class.shmop.md) `$shmop`, [int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$size`): [string](language.types.string.md)

**shmop\_read()** lê uma string do bloco de memória compartilhada.

### Parâmetros

`shmop`
:   O identificador do bloco de memória compartilhada criado por
    [shmop\_open()](function.shmop-open.md)

`offset`
:   Posição a partir da qual a leitura será iniciada; deve ser maior ou igual a zero
    e menor ou igual ao tamanho real do segmento de memória compartilhada.

`size`
:   O número de bytes a serem lidos; deve ser maior ou igual a zero
    e a soma de `offset` e `size`
    deve ser menor ou igual ao tamanho real do segmento de memória compartilhada.
    `0` significa que a função lerá `shmop_size($shmid) - $start` bytes.

### Valor Retornado

Retorna os dados.

### Erros/Exceções

Se `offset` ou `size` estiverem fora do intervalo,
um [ValueError](class.valueerror.md) é lançado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `shmop` agora espera uma instância de [Shmop](class.shmop.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.0.0 | Se `offset` ou `size` estiverem fora do intervalo, um [ValueError](class.valueerror.md) é lançado; anteriormente, um **`E_WARNING`** era emitido e **`false`** era retornado. |

### Examples

**Exemplo #1 Lendo bloco de memória compartilhada**

```
<?php
$shm_data = shmop_read($shm_id, 0, 50);
?>
```

Este exemplo irá ler 50 bytes do bloco de memória compartilhada e colocar os dados
dentro de `$shm_data`.

### Veja também

- [shmop\_write()](function.shmop-write.md) - Escreve dados em um bloco de memória compartilhada

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
