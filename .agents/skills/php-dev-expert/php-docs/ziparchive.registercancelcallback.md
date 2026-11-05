# Registra um callback para permitir o cancelamento durante o fechamento do arquivo compactado.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.registercancelcallback.php

---

# ZipArchive::registerCancelCallback

(PHP >= 8.0.0, PECL zip >= 1.17.0)

ZipArchive::registerCancelCallback — Registra um callback para permitir o cancelamento durante o fechamento do arquivo compactado.

### Descrição

public function **ZipArchive::registerCancelCallback**([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Registra uma função de `callback` para permitir o cancelamento durante o fechamento do arquivo compactado.

### Parâmetros

`callback`
:   Se esta função retornar 0, a operação continuará; qualquer outro valor resultará no cancelamento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

Este exemplo cria um arquivo compactado ZIP
php.zip e cancela
a operação em algumas condições de execução.

**Exemplo #1 Arquivar um arquivo**

```
<?php
$zip = new ZipArchive();
if ($zip->open('php.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
    $zip->addFile(PHP_BINARY, 'php');
    $zip->registerCancelCallback(function () {
        return ($someruncondition ? -1 : 0);
    });
    $zip->close();
}
```

### Notas

> **Nota**:
>
> Esta função só está disponível se for construída com libzip ≥ 1.6.0.

### Veja também

- [ZipArchive::registerProgressCallback()](ziparchive.registerprogresscallback.md) - Registrar um callback para fornecer atualizações durante o fechamento do arquivo compactado.

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
