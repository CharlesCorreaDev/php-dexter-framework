# Substitui um arquivo no arquivo ZIP por um caminho fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.replacefile.php

---

# ZipArchive::replaceFile

(PHP >= 8.0.0, PECL zip >= 1.18.0)

ZipArchive::replaceFile — Substitui um arquivo no arquivo ZIP por um caminho fornecido

### Descrição

public function **ZipArchive::replaceFile**(  
    [string](language.types.string.md) `$filepath`,  
    [int](language.types.integer.md) `$index`,  
    [int](language.types.integer.md) `$start` = 0,  
    [int](language.types.integer.md) `$length` = **`ZipArchive::LENGTH_TO_END`**,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Substitui um arquivo no arquivo ZIP por um caminho fornecido.

> **Nota**:
>
> Para portabilidade máxima, é recomendável sempre usar barras normais (`/`) como separador de diretório em nomes de arquivos ZIP.

### Parâmetros

`filepath`
:   O caminho para o arquivo a ser adicionado.

`index`
:   O índice do arquivo a ser substituído, seu nome não é alterado.

`start`
:   Para cópia parcial, posição inicial.

`length`
:   Para cópia parcial, comprimento a ser copiado,
    se **`ZipArchive::LENGTH_TO_END`** (0), o tamanho do arquivo é usado,
    se **`ZipArchive::LENGTH_UNCHECKED`**, o arquivo inteiro é usado
    (a partir de `start`).

`flags`
:   Máscara de bits consistindo em
    **`ZipArchive::FL_ENC_GUESS`**,
    **`ZipArchive::FL_ENC_UTF_8`**,
    **`ZipArchive::FL_ENC_CP437`**,
    **`ZipArchive::FL_OPEN_FILE_NOW`**.
    O comportamento dessas constantes é descrito na página
    [constantes do ZIP](zip.constants.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0, PECL zip 1.22.1 | **`ZipArchive::FL_OPEN_FILE_NOW`** foi adicionado. |
| 8.3.0, PECL zip 1.22.2 | **`ZipArchive::LENGTH_TO_END`** e **`ZipArchive::LENGTH_UNCHECKED`** foram adicionados. |

### Examples

Este exemplo abre um arquivo ZIP
test.zip e substitui a entrada do índice 1
pelo arquivo /path/to/index.txt.

**Exemplo #1 Abrir e substituir**

```
<?php
$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    $zip->replaceFile('/path/to/index.txt', 1);
    $zip->close();
    echo 'ok';
} else {
    echo 'falha';
}
?>
```

### Veja também

- [ZipArchive::addFile()](ziparchive.addfile.md) - Adiciona um arquivo a um arquivo ZIP a partir do caminho fornecido

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
