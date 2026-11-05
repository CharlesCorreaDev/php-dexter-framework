# Fecha um bloco de memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shmop-close.php

---

# shmop\_close

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

shmop\_close — Fecha um bloco de memória compartilhada

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **shmop\_close**([Shmop](class.shmop.md) `$shmop`): [void](language.types.void.md)

> **Nota**:
>
> Esta função não tem efeito. Antes do PHP 8.0.0, esta função era usada para fechar o recurso.

**shmop\_close()** é usada para fechar um bloco de memória compartilhada.

### Parâmetros

`shmop`
:   O recurso de bloco de memória compartilhada criado por
    [shmop\_open()](function.shmop-open.md)

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi descontinuada, pois não tem mais efeito. |
| 8.0.0 | `shmop` agora espera uma instância de [Shmop](class.shmop.md); anteriormente um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Fechando um bloco de memória compartilhada**

```
<?php
shmop_close($shm_id);
?>
```

Esse exemplo irá fechar o bloco de memória compartilhada identificado por `$shm_id`.

### Veja também

- [shmop\_open()](function.shmop-open.md) - Cria ou abre um bloco de memória compartilhada

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
