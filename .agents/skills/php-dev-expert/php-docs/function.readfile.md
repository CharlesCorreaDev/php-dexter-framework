# Exibe o conteúdo de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readfile.php

---

# readfile

(PHP 4, PHP 5, PHP 7, PHP 8)

readfile — Exibe o conteúdo de um arquivo

### Descrição

function **readfile**([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$use_include_path` = **`false`**, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

Lê um arquivo e escreve o seu conteúdo para o buffer de saída.

### Parâmetros

`filename`
:   O nome do arquivo a ser lido.

`use_include_path`
:   Pode-se usar o segundo parâmetro opcional e configurá-lo para **`true`**,
    se for desejado procurar o arquivo no [include\_path](ini.core.md#ini.include-path) também.

`context`
:   Um [resource](language.types.resource.md) de
    [contexto de fluxo](stream.contexts.md).

### Valor Retornado

Retorna o número de bytes lidos do arquivo em caso de sucesso,
ou **`false`** em caso de falha

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Forçando um recebimento usando **readfile()****

```
<?php
$file = 'monkey.gif';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
```

O exemplo acima produzirá
algo semelhante a:

![Diálogo de Abrir / Salvar](images/e88cefb5c3fca5060e2490b9763c4433-readfile.png)

### Notas

> **Nota**:
>
> **readfile()** não apresentará por si só nenhum problema de memória,
> mesmo no envio de grandes arquivos. Se for encontrado um erro
> de falta de memória, certifique-se que o buffer de saída está desligado com
> [ob\_get\_level()](function.ob-get-level.md).

**Dica**

Uma URL pode ser usada como um
nome de arquivo com esta função se os [empacotadores fopen](filesystem.configuration.md#ini.allow-url-fopen) estiverem habilitados.
Consulte a função [fopen()](function.fopen.md) para mais detalhes sobre como especificar
o nome do arquivo. Consulte os [Protocolos e empacotadores suportados](wrappers.md) para obter links para informações
sobre as capacidades de cada empacotador, notas de uso
e informações sobre quaisquer variáveis predefinidas que eles possam
fornecer.

### Veja também

- [fpassthru()](function.fpassthru.md) - Imprime todos os dados restantes de um ponteiro de arquivo
- [file()](function.file.md) - Lê todo o arquivo para um array
- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [include](function.include.md) - include
- [require](function.require.md) - require
- [virtual()](function.virtual.md) - Realiza uma sub-requisição Apache
- [file\_get\_contents()](function.file-get-contents.md) - Lê todo o conteúdo de um arquivo para uma string
- [Protocolos e empacotadores suportados](wrappers.md)

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
