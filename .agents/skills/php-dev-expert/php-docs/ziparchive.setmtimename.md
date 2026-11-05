# Define o tempo de modificação de uma entrada definida pelo seu nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setmtimename.php

---

# ZipArchive::setMtimeName

(PHP >= 8.0.0, PECL zip >= 1.16.0)

ZipArchive::setMtimeName — Define o tempo de modificação de uma entrada definida pelo seu nome

### Descrição

public function **ZipArchive::setMtimeName**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$timestamp`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

Define o tempo de modificação de uma entrada definida pelo seu nome.

### Parâmetros

`name`
:   Nome da entrada.

`timestamp`
:   O tempo de modificação (timestamp Unix) do arquivo.

`flags`
:   Opções opcionais, não utilizados por enquanto.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

Este exemplo cria um arquivo ZIP
test.zip e adiciona
o arquivo test.txt
com sua data de modificação.

**Exemplo #1 Arquivar um arquivo**

```
<?php
$zip = new ZipArchive();
if ($zip->open('test.zip', ZipArchive::CREATE) === TRUE) {
    $zip->addFile('text.txt');
    $zip->setMtimeName('text.txt', mktime(0,0,0,12,25,2019));
    $zip->close();
    echo "Ok\n";
} else {
    echo "KO\n";
}
?>
```

### Notas

> **Nota**:
>
> Esta função só está disponível se compilada com libzip ≥ 1.0.0.

### Veja também

- [ZipArchive::setMtimeIndex()](ziparchive.setmtimeindex.md) - Define o tempo de modificação de uma entrada definida pelo seu índice

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
