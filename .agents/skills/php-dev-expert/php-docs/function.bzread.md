# Leitura binária segura de arquivo bzip2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bzread.php

---

# bzread

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

bzread — Leitura binária segura de arquivo bzip2

### Descrição

function **bzread**([resource](language.types.resource.md) `$bz`, [int](language.types.integer.md) `$length` = 1024): [string](language.types.string.md)|[false](language.types.singleton.md)

**bzread()** faz leitura de um ponteiro de arquivo bzip2 fornecido.

A leitura para quando o número de bytes (não comprimidos) informado em `length` tiver sido
alcançado ou o final do arquivo, o que ocorrer primeiro.

### Parâmetros

`bz`
:   O ponteiro do arquivo. Precisa ser válido e apontar para um arquivo aberto
    com sucesso pela função [bzopen()](function.bzopen.md).

`length`
:   Se não especificado, a função **bzread()** lerá 1024
    bytes (não comprimidos) de cada vez. Um máximo de 8192
    bytes não comprimidos será lido de cada vez.

### Valor Retornado

Retorna os dados descomprimidos, ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **bzread()****

```
<?php

$file = "/tmp/foo.bz2";
$bz = bzopen($file, "r") or die("Não foi possível abrir $file");

$decompressed_file = '';
while (!feof($bz)) {
    $decompressed_file .= bzread($bz, 4096);
}
bzclose($bz);

echo "O conteúdo de $file é: <br />\n";
echo $decompressed_file;

?>
```

### Veja também

- [bzwrite()](function.bzwrite.md) - Gravação binária segura em arquivo bzip2
- [feof()](function.feof.md) - Testa pelo fim-de-arquivo em um ponteiro de arquivo
- [bzopen()](function.bzopen.md) - Abre um arquivo comprimido com bzip2

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
