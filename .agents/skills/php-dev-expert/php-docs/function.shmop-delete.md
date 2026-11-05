# Deleta um bloco de memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shmop-delete.php

---

# shmop\_delete

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

shmop\_delete — Deleta um bloco de memória compartilhada

### Descrição

function **shmop\_delete**([Shmop](class.shmop.md) `$shmop`): [bool](language.types.boolean.md)

**shmop\_delete()** é usada para deletar um bloco de memória compartilhada.

### Parâmetros

`shmop`
:   O recurso de bloco de memória compartilhada criado por
    [shmop\_open()](function.shmop-open.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `shmop` agora espera uma instância de [Shmop](class.shmop.md); anteriormente um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Deletando um bloco de memória compartilhada**

```
<?php
shmop_delete($shm_id);
?>
```

Esse exemplo irá deletar um bloco de memória compartilhada identificado por
`$shm_id`.

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
