# Obtém o tamanho do bloco de memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shmop-size.php

---

# shmop\_size

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

shmop\_size — Obtém o tamanho do bloco de memória compartilhada

### Descrição

function **shmop\_size**([Shmop](class.shmop.md) `$shmop`): [int](language.types.integer.md)

**shmop\_size()** é usada para pegar o tamanho, em bytes do
bloco de memória compartilhada.

### Parâmetros

`shmop`
:   O recurso do bloco de memória compartilhada criado por
    [shmop\_open()](function.shmop-open.md)

### Valor Retornado

Retorna um inteiro, que representa o número de bytes de bloco ocupados
pela memória compartilhada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `shmop` agora espera uma instância de [Shmop](class.shmop.md); anteriormente um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Pegando o tamanho do bloco de memória compartilhada**

```
<?php
$shm_size = shmop_size($shm_id);
?>
```

Isso irá trazer o tamanho de um bloco de memória compartilhada identificado por
`$shm_id` em `$shm_size`.

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
