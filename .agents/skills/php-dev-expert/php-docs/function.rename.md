# Renomeia um arquivo ou diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rename.php

---

# rename

(PHP 4, PHP 5, PHP 7, PHP 8)

rename — Renomeia um arquivo ou diretório

### Descrição

function **rename**([string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [bool](language.types.boolean.md)

Tenta renomear `from` para
`to`, movendo entre diretórios se necessário.
Se o arquivo `to` já existir,
ele será sobrescrito. Se renomeando um diretório e
`to` já existir,
esta função emite um warning.

### Parâmetros

`from`
:   O nome anterior.

    > **Nota**:
    >
    > O empacotador utilizado em `from`
    > *precisa* ser o mesmo empacotador utilizado em
    > `to`.

`to`
:   O novo nome.
    > **Nota**:
    >
    > No Windows, se `to` já existir, ele precisa ter permissão de escrita.
    > Se não a função **rename()** falhará e emitirá um **`E_WARNING`**.

`context`
:   Um [resource](language.types.resource.md) de
    [contexto de fluxo](stream.contexts.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo da **rename()****

```
<?php
rename("/tmp/tmp_file.txt", "/home/user/login/docs/my_file.txt");
?>
```

### Veja também

- [copy()](function.copy.md) - Copia arquivo
- [unlink()](function.unlink.md) - Apaga um arquivo
- [move\_uploaded\_file()](function.move-uploaded-file.md) - Move um arquivo enviado para uma nova localização

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
