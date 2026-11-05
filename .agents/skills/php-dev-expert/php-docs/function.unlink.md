# Apaga um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.unlink.php

---

# unlink

(PHP 4, PHP 5, PHP 7, PHP 8)

unlink — Apaga um arquivo

### Descrição

function **unlink**([string](language.types.string.md) `$filename`, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [bool](language.types.boolean.md)

Apaga o arquivo `filename`. Similar a função do C no Unix unlink().
Emite um erro **`E_WARNING`** level no caso de
falha.

### Parâmetros

`filename`
:   Caminho para o arquivo.

    Se o arquivo for uma ligação simbólica, a ligação será apagada. No Windows, para apagar
    uma ligação para um diretório, deve ser utilizada a função [rmdir()](function.rmdir.md).

`context`
:   Um [resource](language.types.resource.md) de
    [contexto de fluxo](stream.contexts.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | No Windows, agora é possível realizar o **unlink()** em arquivos abertos, quando antes isso falhava. Entretanto, ainda não é possível de recriar o arquivo apagado, até que o acessos ao arquivo anterior tenham sido fechados. |

### Examples

**Exemplo #1 Exemplo de **unlink()****

```
<?php
$fh = fopen('test.html', 'a');
fwrite($fh, '<h1>Hello world!</h1>');
fclose($fh);

unlink('test.html');
?>
```

### Veja também

- [rmdir()](function.rmdir.md) - Remove um diretório

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
