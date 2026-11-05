# Adiciona um arquivo a um arquivo ZIP a partir do caminho fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.addfile.php

---

# ZipArchive::addFile

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::addFile — Adiciona um arquivo a um arquivo ZIP a partir do caminho fornecido

### Descrição

public function **ZipArchive::addFile**(  
    [string](language.types.string.md) `$filepath`,  
    [string](language.types.string.md) `$entryname` = "",  
    [int](language.types.integer.md) `$start` = 0,  
    [int](language.types.integer.md) `$length` = **`ZipArchive::LENGTH_TO_END`**,  
    [int](language.types.integer.md) `$flags` = **`ZipArchive::FL_OVERWRITE`**  
): [bool](language.types.boolean.md)

Adiciona um arquivo a um arquivo ZIP a partir de um caminho fornecido.

> **Nota**:
>
> Para portabilidade máxima, é recomendável sempre usar barras normais (`/`) como separador de diretório em nomes de arquivos ZIP.

### Parâmetros

`filepath`
:   O caminho para o arquivo a ser adicionado.

`entryname`
:   Se fornecido e não vazio, este é o nome local dentro do arquivo ZIP que substituirá o `filepath`.

`start`
:   Para cópia parcial, posição de início.

`length`
:   Para cópia parcial, comprimento a ser copiado,
    se **`ZipArchive::LENGTH_TO_END`** (0) o tamanho do arquivo é usado,
    se **`ZipArchive::LENGTH_UNCHECKED`** o arquivo inteiro é usado
    (a partir de `start`).

`flags`
:   Máscara de bits consistindo de
    **`ZipArchive::FL_OVERWRITE`**,
    **`ZipArchive::FL_ENC_GUESS`**,
    **`ZipArchive::FL_ENC_UTF_8`**,
    **`ZipArchive::FL_ENC_CP437`**,
    **`ZipArchive::FL_OPEN_FILE_NOW`**.
    O comportamento dessas constantes é descrito na página de
    [constantes ZIP](zip.constants.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0, PECL zip 1.18.0 | `flags` foi adicionado. |
| 8.3.0, PECL zip 1.22.1 | **`ZipArchive::FL_OPEN_FILE_NOW`** foi adicionado. |
| 8.3.0, PECL zip 1.22.2 | **`ZipArchive::LENGTH_TO_END`** e **`ZipArchive::LENGTH_UNCHECKED`** foram adicionadas. |

### Examples

Este exemplo abre um arquivo ZIP
test.zip e adiciona
o arquivo /caminho/para/index.txt.
como newname.txt.

**Exemplo #1 Abrir e adicionar**

```
<?php
$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    $zip->addFile('/path/to/index.txt', 'newname.txt');
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
> Quando um arquivo é configurado para ser adicionado ao arquivo, o PHP irá bloquear o arquivo. O
> bloqueio é liberado apenas depois que o objeto [ZipArchive](class.ziparchive.md)
> foi fechado, seja via [ZipArchive::close()](ziparchive.close.md) ou
> o objeto [ZipArchive](class.ziparchive.md) sendo destruído. Isso pode
> impedir que você consiga excluir o arquivo sendo adicionado até depois que o
> bloqueio tenha sido liberado.

### Veja também

- [ZipArchive::replaceFile()](ziparchive.replacefile.md) - Substitui um arquivo no arquivo ZIP por um caminho fornecido

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
