# Cria ou abre um bloco de memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shmop-open.php

---

# shmop\_open

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

shmop\_open — Cria ou abre um bloco de memória compartilhada

### Descrição

function **shmop\_open**(  
    [int](language.types.integer.md) `$key`,  
    [string](language.types.string.md) `$mode`,  
    [int](language.types.integer.md) `$permissions`,  
    [int](language.types.integer.md) `$size`  
): [Shmop](class.shmop.md)|[false](language.types.singleton.md)

**shmop\_open()** pode criar ou abrir um bloco de memória compartilhada.

### Parâmetros

`key`
:   ID do sistema para o bloco de memória compartilhada.
    Pode ser passado como decimal ou hexadecimal.

`mode`
:   As opções que podem ser usadas:

    - "a" para acesso (define SHM\_RDONLY para shmat).
      Usada para abrir um segmento de memória compartilhada
      existente para somente leitura.
    - "c" para criação (define IPC\_CREATE).
      Usada para criar um novo segmento de memória compartilhada
      ou, se um segmento com a mesma chave existir, para abri-lo para leitura
      e gravação.
    - "w" para acesso de leitura e gravação.
      Usada para ler e escrever em um segmento de memória
      compartilhada. É usada na maioria dos casos.
    - "n" para criar um novo segmento de memória (define IPC\_CREATE|IPC\_EXCL)
      Usada para criar um novo segmento de memória compartilhada,
      porém se existir um com a mesma chave, irá falhar. É útil
      para segurança, pois assim é possível evitar ataques de condição de
      corrida.

`permissions`
:   As permissões a atribuir ao segmento de memória,
    as mesmas das permissões de um arquivo. As permissões precisam ser passadas
    em formato octal, como por exemplo `0644`.

`size`
:   O tamanho do bloco de memória compartilhada a ser criado, em bytes.

> **Nota**:
>
> Nota: o 3º e o 4º parâmetros devem ser informados como 0 se um segmento de memória
> existente estiver sendo aberto.

### Valor Retornado

Em caso de sucesso, **shmop\_open()** retornará uma instância de [Shmop](class.shmop.md) que
pode ser usada para acessar o segmento de memória compartilhada criado. **`false`** é
retornado em caso de falha.

### Erros/Exceções

Se `mode` for inválido ou `size` for menor ou igual a zero,
um [ValueError](class.valueerror.md) será lançado.
Em outras falhas, **`E_WARNING`** será emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [Shmop](class.shmop.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 8.0.0 | Se `mode` for inválido ou `size` for menor ou igual a zero, um [ValueError](class.valueerror.md) é lançado; anteriormente, era emitido um **`E_WARNING`** e a função retornava **`false`**. |

### Examples

**Exemplo #1 Cria um novo bloco de memória compartilhada**

```
<?php
$shm_key = ftok(__FILE__, 't');
$shm_id = shmop_open($shm_key, "c", 0644, 100);
?>
```

Este exemplo abriu um bloco de memória compartilhada com um ID do sistema retornado por
[ftok()](function.ftok.md).

### Veja também

- [shmop\_close()](function.shmop-close.md) - Fecha um bloco de memória compartilhada
- [shmop\_delete()](function.shmop-delete.md) - Deleta um bloco de memória compartilhada

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
