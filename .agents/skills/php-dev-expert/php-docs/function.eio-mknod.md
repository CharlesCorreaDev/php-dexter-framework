# Cria arquivo normal ou especial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-mknod.php

---

# eio\_mknod

(PECL eio >= 0.0.1dev)

eio\_mknod — Cria arquivo normal ou especial

### Descrição

function **eio\_mknod**(  
    [string](language.types.string.md) `$path`,  
    [int](language.types.integer.md) `$mode`,  
    [int](language.types.integer.md) `$dev`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_mknod()** cria arquivo normal ou (frequentemente) especial.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`path`
:   Caminho para o novo nó (arquivo).

`mode`
:   Especifica as permissões a serem usadas e o tipo de nó a ser
    criado. Deve ser uma combinação (usando OR binário) de um dos
    tipos de arquivo listados abaixo e as permissões para o novo nó (por exemplo, 0640).
    Tipos de arquivo possíveis: **`EIO_S_IFREG`** (arquivo normal),
    **`EIO_S_IFCHR`** (arquivo de caracteres),
    **`EIO_S_IFBLK`** (arquivo especial de bloco),
    **`EIO_S_IFIFO`** (FIFO - pipe nomeado) e
    **`EIO_S_IFSOCK`** (soquete de domínio UNIX).
    Para especificar permissões, as constantes *EIO\_S\_I\** podem ser
    usadas.

`dev`
:   Se o tipo de arquivo for **`EIO_S_IFCHR`** ou
    **`EIO_S_IFBLK`**, este parâmetro especifica os números principais e
    secundários do arquivo especial de dispositivo recém-criado. Caso contrário,
    `dev` será ignorado. Veja a *página de manual do mknod(2)
    para detalhes*.

`pri`
:   A prioridade da requisição: **`EIO_PRI_DEFAULT`**, **`EIO_PRI_MIN`**, **`EIO_PRI_MAX`** ou **`null`**.
    Se **`null`** for passado, o parâmetro `pri` internamente será definido como
    **`EIO_PRI_DEFAULT`**.

`callback`
:   A função `callback` é chamada quando a requisição é concluída.
    Ela deve corresponder ao seguinte protótipo:

    ```
    void callback(mixed $data, int $result[, resource $req]);
    ```

    `data`
    :   são dados personalizados passados para a requisição.

    `result`
    :   valor de resultado específico da requisição; basicamente, o valor retornado pela chamada de sistema
        correspondente.

    `req`
    :   é um recurso de requisição opcional que pode ser usado com funções como [eio\_get\_last\_error()](function.eio-get-last-error.md).

`data`
:   Variável arbitrária passada para `callback`.

### Valor Retornado

**eio\_mknod()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **eio\_mknod()****

```
<?php
// Nome do FIFO
$temp_filename = "/tmp/eio-temp-fifo";

/* Função chamada quando eio_mknod() termina */
function my_mknod_callback($data, $result) {
    $s = stat($data);
    var_dump($s);

    if ($result == 0) {
        echo "eio_mknod_ok";
    }

    @unlink($data);
}

eio_mknod($temp_filename, EIO_S_IFIFO, 0,
    EIO_PRI_DEFAULT, "my_mknod_callback", $temp_filename);
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(26) {
  [0]=>
  int(17)
  [1]=>
  int(2337608)
  [2]=>
  int(4096)
  [3]=>
  int(1)
  [4]=>
  int(1000)
  [5]=>
  int(100)
  [6]=>
  int(0)
  [7]=>
  int(0)
  [8]=>
  int(1318241261)
  [9]=>
  int(1318241261)
  [10]=>
  int(1318241261)
  [11]=>
  int(4096)
  [12]=>
  int(0)
  ["dev"]=>
  int(17)
  ["ino"]=>
  int(2337608)
  ["mode"]=>
  int(4096)
  ["nlink"]=>
  int(1)
  ["uid"]=>
  int(1000)
  ["gid"]=>
  int(100)
  ["rdev"]=>
  int(0)
  ["size"]=>
  int(0)
  ["atime"]=>
  int(1318241261)
  ["mtime"]=>
  int(1318241261)
  ["ctime"]=>
  int(1318241261)
  ["blksize"]=>
  int(4096)
  ["blocks"]=>
  int(0)
}
eio_mknod_ok
```

### Veja também

- [eio\_open()](function.eio-open.md) - Abre um arquivo

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
