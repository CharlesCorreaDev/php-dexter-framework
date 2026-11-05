# Transmite dados do ponteiro do arquivo de origem, aplica a codificação e escreve no destfp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-stream-encode.php

---

# mailparse\_stream\_encode

(PECL mailparse >= 0.9.0)

mailparse\_stream\_encode — 
Transmite dados do ponteiro do arquivo de origem, aplica a codificação e escreve no destfp

### Descrição

function **mailparse\_stream\_encode**([resource](language.types.resource.md) `$sourcefp`, [resource](language.types.resource.md) `$destfp`, [string](language.types.string.md) `$encoding`): [bool](language.types.boolean.md)

Transmite dados do ponteiro do arquivo de origem, aplica a
`encoding` e escreve no ponteiro do arquivo de destino.

### Parâmetros

`sourcefp`
:   Um identificador de arquivo válido. O arquivo é transmitido pelo analisador.

`destfp`
:   O identificador de arquivo de destino no qual os dados codificados serão escritos.

`encoding`
:   Uma das codificações de caracteres suportadas pelo
    módulo [mbstring](ref.mbstring.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mailparse\_stream\_encode()****

```
<?php

// conteúdo de email.eml: hello, this is some text=hello.
$fp = fopen('email.eml', 'r');

$dest = tmpfile();

mailparse_stream_encode($fp, $dest, "quoted-printable");

rewind($dest);

// Exibe o conteúdo do novo arquivo
fpassthru($dest);

?>
```

O exemplo acima produzirá:

```
hello, this is some text=3Dhello.
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
