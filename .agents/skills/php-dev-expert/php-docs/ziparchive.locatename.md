# Retorna o índice da entrada no arquivo compactado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.locatename.php

---

# ZipArchive::locateName

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.5.0)

ZipArchive::locateName — Retorna o índice da entrada no arquivo compactado

### Descrição

public function **ZipArchive::locateName**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$flags` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

Localiza uma entrada usando seu nome.

### Parâmetros

`name`
:   O nome da entrada a ser procurada

`flags`
:   As opções são especificadas através da operação OR nos seguintes valores,
    ou 0 para nenhum deles.

    - **`ZipArchive::FL_NOCASE`**
    - **`ZipArchive::FL_NODIR`**

### Valor Retornado

Retorna o índice da entrada em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Criar um arquivo compactado e em seguida usá-lo com **ZipArchive::locateName()****

```
<?php
$file = 'testlocate.zip';

$zip = new ZipArchive;
if ($zip->open($file, ZipArchive::CREATE) !== TRUE) {
    exit('falha');
}

$zip->addFromString('entry1.txt', 'entry #1');
$zip->addFromString('entry2.txt', 'entry #2');
$zip->addFromString('dir/entry2d.txt', 'entry #2');

if ($zip->status !== ZipArchive::ER_OK) {
    echo "falha ao escrever zip\n";
}
$zip->close();

if ($zip->open($file) !== TRUE) {
    exit('falha');
}

echo $zip->locateName('entry1.txt') . "\n";
echo $zip->locateName('eNtry2.txt') . "\n";
echo $zip->locateName('eNtry2.txt', ZipArchive::FL_NOCASE) . "\n";
echo $zip->locateName('enTRy2d.txt', ZipArchive::FL_NOCASE|ZipArchive::FL_NODIR) . "\n";
$zip->close();

?>
```

O exemplo acima produzirá:

```
0

1
2
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
