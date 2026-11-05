# Cria arquivo com nome único

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.tempnam.php

---

# tempnam

(PHP 4, PHP 5, PHP 7, PHP 8)

tempnam — Cria arquivo com nome único

### Descrição

function **tempnam**([string](language.types.string.md) `$directory`, [string](language.types.string.md) `$prefix`): [string](language.types.string.md)|[false](language.types.singleton.md)

Cria um arquivo com nome único, com permissões de acesso definidas para 0600, no diretório
especificado. Se o diretório não existir ou não puder ser escrito, **tempnam()** pode
gerar um arquivo no diretório temporário do sistema e retornar
o caminho completo ao arquivo, incluindo seu nome.

### Parâmetros

`directory`
:   O diretório onde o arquivo temporário será criado.

`prefix`
:   O prefixo do nome do arquivo temporário gerado.

    > **Nota**:
    >
    > Apenas os primeiros 63 caracteres do prefixo são usados, o restante é ignorado.
    > Windows usa apenas os primeiros três caracteres do prefixo.

### Valor Retornado

Retorna o novo nome do arquivo temporário (com caminho), ou **`false`** em
caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O nome dos arquivos criados por **tempnam()** agora é 13 bytes mais longo. O comprimento total ainda depende da plataforma. |
| 7.1.0 | **tempnam()** agora emite um aviso ao cair de volta no diretório temporário do sistema. |

### Examples

**Exemplo #1 Exemplo de **tempnam()****

```
<?php
$tmpfname = tempnam ("/tmp", "FOO");

$handle = fopen($tmpfname, "w");
fwrite($handle, "writing to tempfile");
fclose($handle);

// faz alguma coisa

unlink($tmpfname);
?>
```

### Notas

> **Nota**:
>
> Se o PHP não conseguir criar um arquivo no diretório informado `directory`,
> ele cria no diretório padrão do sistema. No sistema de arquivos NTFS isto também acontece
> se o diretório especificado em `directory` contiver mais que 65534 arquivos.

### Veja também

- [tmpfile()](function.tmpfile.md) - Cria um arquivo temporário
- [sys\_get\_temp\_dir()](function.sys-get-temp-dir.md) - Retorna o caminho do diretório usado para arquivos temporários
- [unlink()](function.unlink.md) - Apaga um arquivo

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
