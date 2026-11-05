# Lê um diretório inteiro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-readdir.php

---

# eio\_readdir

(PECL eio >= 0.0.1dev)

eio\_readdir — Lê um diretório inteiro

### Descrição

function **eio\_readdir**(  
    [string](language.types.string.md) `$path`,  
    [int](language.types.integer.md) `$flags`,  
    [int](language.types.integer.md) `$pri`,  
    [callable](language.types.callable.md) `$callback`,  
    [string](language.types.string.md) `$data` = NULL  
): [resource](language.types.resource.md)

Lê um diretório inteiro (através das chamadas de sistema `opendir`, `readdir` e
`closedir`) e retorna os nomes ou um array no argumento
`result` da função `callback`,
dependendo do argumento `flags`.

### Parâmetros

`path`
:   Caminho do diretório.

`flags`
:   Combinação de constantes *EIO\_READDIR\_\**.

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

**eio\_readdir()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.
Define o argumento `result` da função
`callback` de acordo com
`flags`:

**`EIO_READDIR_DENTS`** ([int](language.types.integer.md))
:   Opção de **eio\_readdir()**. Se especificada, o argumento de resultado da função de retorno
    se torna um array com as seguintes chaves:
    `'names'` - array de nomes de diretório
    `'dents'` - array similares a `struct
    eio_dirent` com as chaves a seguir, cada um:
    `'name'` - o nome do diretório;
    `'type'` - uma das constantes
    *EIO\_DT\_\**;
    `'inode'` - o número do inode, se disponível, caso contrário
    não especificado;

**`EIO_READDIR_DIRS_FIRST`** ([int](language.types.integer.md))
:   Quando esta opção é especificada, os nomes serão retornados em uma ordem em que os
    diretórios prováveis ​​vêm primeiro, na ordem estatística ideal.

**`EIO_READDIR_STAT_ORDER`** ([int](language.types.integer.md))
:   Quando esta opção é especificada, então os nomes serão retornados em uma ordem adequada
    para obter a informação (`stat`) de cada um. Ao planejar a obteção de informação
    ([stat()](function.stat.md)) de todos os arquivos em um determinado diretório, a
    ordem retornada provavelmente será a mais
    rápida.

**`EIO_READDIR_FOUND_UNKNOWN`** ([int](language.types.integer.md))

Tipos de nó:

**`EIO_DT_UNKNOWN`** ([int](language.types.integer.md))
:   Tipo de nó desconhecido (muito comum). Mais [stat()](function.stat.md) são necessários.

**`EIO_DT_FIFO`** ([int](language.types.integer.md))
:   Tipo de nó FIFO

**`EIO_DT_CHR`** ([int](language.types.integer.md))
:   Tipo de nó de caractere

**`EIO_DT_MPC`** ([int](language.types.integer.md))
:   Tipo de nó do dispositivo de caracteres multiplexado (v7+coerente)

**`EIO_DT_DIR`** ([int](language.types.integer.md))
:   Tipo de nó de diretório

**`EIO_DT_NAM`** ([int](language.types.integer.md))
:   Tipo de nó de arquivo nomeado especial Xenix

**`EIO_DT_BLK`** ([int](language.types.integer.md))
:   Tipo de nó de bloco

**`EIO_DT_MPB`** ([int](language.types.integer.md))
:   Mdispositivo de bloco multiplexado (v7 + coerente)

**`EIO_DT_REG`** ([int](language.types.integer.md))
:   Tipo de nó de arquivo comum

**`EIO_DT_NWK`** ([int](language.types.integer.md))

**`EIO_DT_CMP`** ([int](language.types.integer.md))
:   Tipo de nó especial da rede HP-UX

**`EIO_DT_LNK`** ([int](language.types.integer.md))
:   Tipo de nó de ligação

**`EIO_DT_SOCK`** ([int](language.types.integer.md))
:   Tipo de nó de socket

**`EIO_DT_DOOR`** ([int](language.types.integer.md))
:   Tipo de nó de porta Solaris

**`EIO_DT_WHT`** ([int](language.types.integer.md))
:   Tipo de nó WHT

**`EIO_DT_MAX`** ([int](language.types.integer.md))
:   Valor mais alto do tipo de nó

### Examples

**Exemplo #1 Exemplo de **eio\_readdir()****

```
<?php
/* Função chamada quando eio_readdir() termina */
function my_readdir_callback($data, $result) {
    echo __FUNCTION__, " chamada\n";
    echo "dados: "; var_dump($data);
    echo "resultado: "; var_dump($result);
    echo "\n";
}

eio_readdir("/var/spool/news", EIO_READDIR_STAT_ORDER | EIO_READDIR_DIRS_FIRST,
  EIO_PRI_DEFAULT, "my_readdir_callback");
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
my_readdir_callback chamada
dados: NULL
resultado: array(2) {
 ["names"]=>
  array(7) {
   [0]=>
    string(7) "archive"
    [1]=>
    string(8) "articles"
    [2]=>
    string(8) "incoming"
    [3]=>
    string(7) "innfeed"
    [4]=>
    string(8) "outgoing"
    [5]=>
    string(8) "overview"
    [6]=>
    string(3) "tmp"
  }
 ["dents"]=>
  array(7) {
   [0]=>
    array(3)
    {
     ["name"]=>
      string(7)
      "archive"
      ["type"]=>
      int(4)
      ["inode"]=>
      int(393265)
    }
   [1]=>
    array(3)
    {
     ["name"]=>
      string(8)
      "articles"
      ["type"]=>
      int(4)
      ["inode"]=>
      int(393266)
    }
   [2]=>
    array(3)
    {
     ["name"]=>
      string(8)
      "incoming"
      ["type"]=>
      int(4)
      ["inode"]=>
      int(393267)
    }
   [3]=>
    array(3)
    {
     ["name"]=>
      string(7)
      "innfeed"
      ["type"]=>
      int(4)
      ["inode"]=>
      int(393269)
    }
   [4]=>
    array(3)
    {
     ["name"]=>
      string(8)
      "outgoing"
      ["type"]=>
      int(4)
      ["inode"]=>
      int(393270)
    }
   [5]=>
    array(3)
    {
     ["name"]=>
      string(8)
      "overview"
      ["type"]=>
      int(4)
      ["inode"]=>
      int(393271)
    }
   [6]=>
    array(3)
    {
     ["name"]=>
      string(3)
      "tmp"
      ["type"]=>
      int(4)
      ["inode"]=>
      int(393272)
    }
  }
}
```

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
