# Escreve dados em um bloco de memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shmop-write.php

---

# shmop\_write

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

shmop\_write — Escreve dados em um bloco de memória compartilhada

### Descrição

function **shmop\_write**([Shmop](class.shmop.md) `$shmop`, [string](language.types.string.md) `$data`, [int](language.types.integer.md) `$offset`): [int](language.types.integer.md)

**shmop\_write()** escreve uma string em um bloco de memória compartilhada.

### Parâmetros

`shmop`
:   O identificador do bloco de memória compartilhada criado por
    [shmop\_open()](function.shmop-open.md).

`data`
:   Uma string a ser escrita em um bloco de memória compartilhada.

`offset`
:   Posição onde se deve iniciar a escrita de dados dentro do segmento de memória
    compartilhada. A posição deve ser maior ou igual a zero
    e menor ou igual ao tamanho real do segmento de memória compartilhada.

### Valor Retornado

O tamanho dos dados do parâmetro `data` escritos.

### Erros/Exceções

Se `offset` estiver fora do intervalo, ou se houver tentativa de escrita em um
segmento de memória compartilhada somente-leitura, um [ValueError](class.valueerror.md) é lançado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Antes do PHP 8.0.0, **`false`** era retornado em caso de falha. |
| 8.0.0 | `shmop` agora espera uma instância de [Shmop](class.shmop.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Escrevendo no bloco de memória compartilhada**

```
<?php
$shm_bytes_written = shmop_write($shm_id, $my_string, 0);
?>
```

Esse exemplo irá escrever dados dentro de `$my_string` em
um bloco de memória compartilhada, `$shm_bytes_written` conterá
o número de bytes escritos.

### Veja também

- [shmop\_read()](function.shmop-read.md) - Lê dados do bloco de memória compartilhada

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
