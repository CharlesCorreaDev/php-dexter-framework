# Registrar um callback para fornecer atualizações durante o fechamento do arquivo compactado.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.registerprogresscallback.php

---

# ZipArchive::registerProgressCallback

(PHP >= 8.0.0, PECL zip >= 1.17.0)

ZipArchive::registerProgressCallback — Registrar um callback para fornecer atualizações durante o fechamento do arquivo compactado.

### Descrição

public function **ZipArchive::registerProgressCallback**([float](language.types.float.md) `$rate`, [callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Registra uma função de `callback` para fornecer atualizações durante o fechamento do arquivo compactado.

### Parâmetros

`rate`
:   Alteração entre cada chamada do retorno de chamada (de 0.0 a 1.0).

`callback`
:   Esta função receberá o `state` atual como um [float](language.types.float.md) (de 0.0 a 1.0).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

Este exemplo cria um arquivo compactado ZIP
php.zip e mostra
a progressão.

**Exemplo #1 Archive a file**

```
$zip = new ZipArchive();
if ($zip->open('php.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
    $zip->addFile(PHP_BINARY, 'php');
    $zip->registerProgressCallback(0.05, function ($r) {
        printf("%d%%\n", $r * 100);
    });
    $zip->close();
}
```

### Notas

> **Nota**:
>
> Esta função só está disponível se for construída com libzip ≥ 1.3.0.

### Veja também

- [ZipArchive::registerCancelCallback()](ziparchive.registercancelcallback.md) - Registra um callback para permitir o cancelamento durante o fechamento do arquivo compactado.

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
