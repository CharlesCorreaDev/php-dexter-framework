# Extrai o conteúdo do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.extractto.php

---

# ZipArchive::extractTo

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::extractTo — Extrai o conteúdo do arquivo

### Descrição

public function **ZipArchive::extractTo**([string](language.types.string.md) `$pathto`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$files` = **`null`**): [bool](language.types.boolean.md)

Extrai o arquivo completo ou os arquivos fornecidos para o destino
especificado.

**Aviso**

As permissões padrão para os arquivos e diretórios extraídos
dão o acesso mais amplo possível. Isso pode ser restrito
configurando o umask atual, que pode ser alterado usando
[umask()](function.umask.md).

Por motivos de segurança, as permissões originais não são restauradas.
Para um exemplo de como restaurá-las, consulte o
[exemplo de código](ziparchive.getexternalattributesindex.md#ziparchive.getexternalattributesindex.examples.perms)
na página [ZipArchive::getExternalAttributesIndex()](ziparchive.getexternalattributesindex.md).

### Parâmetros

`pathto`
:   Local para onde extrair os arquivos.

`files`
:   As entradas para extrair. Aceita um único nome de entrada ou
    um array de nomes.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Extrair todas as entradas**

```
<?php
$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    $zip->extractTo('/my/destination/dir/');
    $zip->close();
    echo 'ok';
} else {
    echo 'falha';
}
?>
```

**Exemplo #2 Extrair duas entradas**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test_im.zip');
if ($res === TRUE) {
    $zip->extractTo('/my/destination/dir/', array('pear_item.gif', 'testfromfile.php'));
    $zip->close();
    echo 'ok';
} else {
    echo 'falha';
}
?>
```

### Notas

> **Nota**:
>
> O sistema de arquivos NTFS do Windows
> não suporta alguns caracteres em nomes de arquivos, como `<|>*?":`. Nomes de arquivos que terminam com ponto
> também não são suportados. Ao contrário de algumas ferramentas de extração, este método não substitui estes caracteres por
> um sublinhado, mas falha ao extrair esses arquivos.

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
