# Adiciona um arquivo a um arquivo ZIP usando seu conteúdo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.addfromstring.php

---

# ZipArchive::addFromString

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::addFromString — Adiciona um arquivo a um arquivo ZIP usando seu conteúdo

### Descrição

public function **ZipArchive::addFromString**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$content`, [int](language.types.integer.md) `$flags` = **`ZipArchive::FL_OVERWRITE`**): [bool](language.types.boolean.md)

Adiciona um arquivo a um arquivo ZIP usando seu conteúdo.

> **Nota**:
>
> Para portabilidade máxima, é recomendável sempre usar barras normais (`/`) como separador de diretório em nomes de arquivos ZIP.

### Parâmetros

`name`
:   O nome da entrada a ser criada.

`content`
:   O conteúdo a ser usado para criar a entrada. É usado em um modo binário
    seguro.

`flags`
:   Máscara de bits consistindo de
    **`ZipArchive::FL_OVERWRITE`**,
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

**Exemplo #1 Adicionar uma entrada a um novo arquivo**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip', ZipArchive::CREATE);
if ($res === TRUE) {
    $zip->addFromString('test.txt', 'file content goes here');
    $zip->close();
    echo 'ok';
} else {
    echo 'falha';
}
?>
```

**Exemplo #2 Adicionar arquivo a um diretório dentro de um arquivo**

```
<?php
$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    $zip->addFromString('dir/test.txt', 'file content goes here');
    $zip->close();
    echo 'ok';
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
