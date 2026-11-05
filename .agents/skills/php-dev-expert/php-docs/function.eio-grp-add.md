# Adiciona uma requisição ao grupo de requisições

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-grp-add.php

---

# eio\_grp\_add

(PECL eio >= 0.0.1dev)

eio\_grp\_add — Adiciona uma requisição ao grupo de requisições

### Descrição

function **eio\_grp\_add**([resource](language.types.resource.md) `$grp`, [resource](language.types.resource.md) `$req`): [void](language.types.void.md)

**eio\_grp\_add()** adiciona uma requisição ao grupo de requisições.

### Parâmetros

`grp`
:   O recurso de grupo de requisição retornado por [eio\_grp()](function.eio-grp.md)

`req`
:   O recurso da requisição.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Agrupando requisições**

```
<?php
/*
 * Cria um grupo de requisição para abrir, ler e fechar um arquivo
 */

// Cria arquivo temporário e escreve alguns bytes nele
$temp_filename = dirname(__FILE__) ."/eio-file.tmp";
$fp = fopen($temp_filename, "w");
fwrite($fp, "dado de exemplo");
fclose($fp);

/* Função chamada quando as requisições em grupo terminam */
function my_grp_done($data, $result) {
    var_dump($result == 0);
    @unlink($data);
}

/* Função chamada quando eio_open() termina */
function my_grp_file_opened_callback($data, $result) {
    global $grp;

    // $result deve conter o descritor de arquivo
    var_dump($result > 0);

    // Cria requisição de eio_read() e a adiciona ao grupo
    // Passa o descritor de arquivo para a função de retorno
    $req = eio_read($result, 4, 0,
        EIO_PRI_DEFAULT, "my_grp_file_read_callback", $result);
    eio_grp_add($grp, $req);
}

/* Função chamada quando eio_read() termina */
function my_grp_file_read_callback($data, $result) {
    global $grp;

    // Lê os bytes
    var_dump($result);

    // Cria requisição de eio_close() e a adiciona ao grupo
    // $data should contain the file descriptor
    $req = eio_close($data);
    eio_grp_add($grp, $req);
}

// Cria grupo de requisição
$grp = eio_grp("my_grp_done", $temp_filename);
var_dump($grp);

// Cria requisição de eio_open() e a adiciona ao grupo
$req = eio_open($temp_filename, EIO_O_RDWR | EIO_O_APPEND , NULL,
    EIO_PRI_DEFAULT, "my_grp_file_opened_callback", NULL);
eio_grp_add($grp, $req);

// Processa requisições
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
resource(6) of type (EIO Group Descriptor)
bool(true)
string(4) "dado"
bool(true)
```

### Veja também

- [eio\_grp()](function.eio-grp.md) - Cria um grupo de requisições
- [eio\_grp\_cancel()](function.eio-grp-cancel.md) - Cancela um grupo de requisições
- [eio\_grp\_limit()](function.eio-grp-limit.md) - Define limite de grupo

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
