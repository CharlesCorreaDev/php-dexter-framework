# Copia arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.copy.php

---

# copy

(PHP 4, PHP 5, PHP 7, PHP 8)

copy — Copia arquivo

### Descrição

function **copy**([string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [bool](language.types.boolean.md)

Faz uma cópia do arquivo informado em `from` para
o arquivo informado em `to`.

Se a intenção for mover um arquivo, utilize a função [rename()](function.rename.md).

### Parâmetros

`from`
:   Caminho para o arquivo de origem.

`to`
:   O caminho de destino. Se o parâmetro `to` for uma URL, a
    operação de cópia pode falhar se o empacotador não suportar a sobrescrita de arquivos
    existentes.

    **Aviso**

    Se o arquivo de destino já existir, ele será sobrescrito.

`context`
:   Um recurso de contexto válido criado com
    [stream\_context\_create()](function.stream-context-create.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **copy()****

```
<?php
$file = 'example.txt';
$newfile = 'example.txt.bak';

if (!copy($file, $newfile)) {
    echo "falha ao copiar $file...\n";
}
?>
```

### Veja também

- [move\_uploaded\_file()](function.move-uploaded-file.md) - Move um arquivo enviado para uma nova localização
- [rename()](function.rename.md) - Renomeia um arquivo ou diretório
- A seção do manual sobre [Gerenciamento de envio de arquivos](features.file-upload.md)

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
