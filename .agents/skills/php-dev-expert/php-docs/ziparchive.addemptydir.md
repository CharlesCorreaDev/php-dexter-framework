# Adiciona um novo diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.addemptydir.php

---

# ZipArchive::addEmptyDir

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.8.0)

ZipArchive::addEmptyDir — Adiciona um novo diretório

### Descrição

public function **ZipArchive::addEmptyDir**([string](language.types.string.md) `$dirname`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

Adiciona um diretório vazio no arquivo.

### Parâmetros

`dirname`
:   O diretório a ser adicionado.

`flags`
:   Máscara de bits consistindo de
    **`ZipArchive::FL_ENC_GUESS`**,
    **`ZipArchive::FL_ENC_UTF_8`**,
    **`ZipArchive::FL_ENC_CP437`**.
    O comportamento dessas constantes é descrito na página de
    [constantes ZIP](zip.constants.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0, PECL zip 1.18.0 | `flags` foi adicionado. |

### Examples

**Exemplo #1 Criar um novo diretório em um arquivo**

```
<?php
$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    if($zip->addEmptyDir('newDirectory')) {
        echo 'Criado um novo diretório raiz';
    } else {
        echo 'Não foi possível criar o diretório';
    }
    $zip->close();
} else {
    echo 'falha';
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
