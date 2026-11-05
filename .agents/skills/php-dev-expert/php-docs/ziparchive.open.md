# Abre um arquivo compactado ZIP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.open.php

---

# ZipArchive::open

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::open — Abre um arquivo compactado ZIP

### Descrição

public function **ZipArchive::open**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)|[int](language.types.integer.md)

Abre um arquivo compactado ZIP novo ou existente para leitura, escrita ou modificação.

Desde o libzip 1.6.0, um arquivo vazio não é mais um arquivo compactado válido.

> **Nota**:
>
> Ao criar um novo arquivo compactado com **`ZipArchive::CREATE`**,
> o arquivo não é realmente gravado no disco até que
> [ZipArchive::close()](ziparchive.close.md) seja chamado. Portanto, erros
> relacionados ao sistema de arquivos (como permissão negada ou um
> diretório pai inexistente) só serão relatados ao chamar
> [ZipArchive::close()](ziparchive.close.md), e não ao chamar este
> método.

### Parâmetros

`filename`
:   O nome do arquivo compactado ZIP a ser aberto.

`flags`
:   O modo a ser usado para abrir o arquivo compactado.

    - **`ZipArchive::OVERWRITE`**
    - **`ZipArchive::CREATE`**
    - **`ZipArchive::RDONLY`**
    - **`ZipArchive::EXCL`**
    - **`ZipArchive::CHECKCONS`**

### Valor Retornado

Retorna **`true`** em caso de sucesso, **`false`** ou um dos seguintes códigos de erro em caso de falha:

**`ZipArchive::ER_EXISTS`**
:   Arquivo já existe.

**`ZipArchive::ER_INCONS`**
:   Arquivo compactado inconsistente.

**`ZipArchive::ER_INVAL`**
:   Argumento inválido.

**`ZipArchive::ER_MEMORY`**
:   Falha ao alocar memória.

**`ZipArchive::ER_NOENT`**
:   Arquivo não encontrado.

**`ZipArchive::ER_NOZIP`**
:   Não é um arquivo compactado ZIP.

**`ZipArchive::ER_OPEN`**
:   Não é possível abrir o arquivo.

**`ZipArchive::ER_READ`**
:   Erro de leitura.

**`ZipArchive::ER_SEEK`**
:   Erro de busca.

### Examples

**Exemplo #1 Abrir e extrair**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip');
if ($res === TRUE) {
    echo 'ok';
    $zip->extractTo('test');
    $zip->close();
} else {
    echo 'falha, código:' . $res;
}
?>
```

**Exemplo #2 Cria um arquivo**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip', ZipArchive::CREATE);
if ($res === TRUE) {
    $zip->addFromString('test.txt', 'o conteúdo do arquivo vai aqui');
    $zip->addFile('data.txt', 'entryname.txt');
    $zip->close();
    echo 'ok';
} else {
    echo 'falhou';
}
?>
```

**Exemplo #3 Cria um arquivo temporário**

```
<?php
$name = tempnam(sys_get_temp_dir(), "FOO");
$zip = new ZipArchive;
$res = $zip->open($name, ZipArchive::OVERWRITE); /* truncar pois um arquivo vazio não é válido */
if ($res === TRUE) {
    $zip->addFile('data.txt', 'nomedaentrada.txt');
    $zip->close();
    echo 'ok';
} else {
    echo 'falhou';
}
?>
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
