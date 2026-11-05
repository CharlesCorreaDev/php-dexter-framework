# Define o documento PDF para exibição de dados FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-file.php

---

# fdf\_set\_file

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_file — Define o documento PDF para exibição de dados FDF

### Descrição

function **fdf\_set\_file**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$url`, [string](language.types.string.md) `$target_frame` = ?): [bool](language.types.boolean.md)

Seleciona um documento PDF diferente para exibir os resultados do formulário em vez do
formulário de onde ele se originou.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`url`
:   Deve ser fornecido como uma URL absoluta.

`target_frame`
:   Use este parâmetro para especificar o quadro no qual o documento será
    exibido. Você também pode definir o valor padrão para este parâmetro usando
    [fdf\_set\_target\_frame()](function.fdf-set-target-frame.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Passando dados FDF para um segundo formulário**

```
<?php
  /* define tipo de conteúdo para Adobe FDF */
  fdf_header();

  /* inicia novo fdf */
  $fdf = fdf_create();

  /* define o campo "foo" para o valor "bar" */
  fdf_set_value($fdf, "foo", "bar");

  /* diz ao cliente para exibir dados FDF usando "fdf_form.pdf" */
  fdf_set_file($fdf, "http://www.example.com/fdf_form.pdf");

  /* exibe o fdf */
  fdf_save($fdf);

  /* limpa */
  fdf_close($fdf);
?>
```

### Veja também

- [fdf\_get\_file()](function.fdf-get-file.md) - Obtém o valor da chave /F
- [fdf\_set\_target\_frame()](function.fdf-set-target-frame.md) - Define o quadro de destino para exibição do formulário

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
