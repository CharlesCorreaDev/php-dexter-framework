# Lista arquivos e diretórios dentro do caminho especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.scandir.php

---

# scandir

(PHP 5, PHP 7, PHP 8)

scandir — Lista arquivos e diretórios dentro do caminho especificado

### Descrição

function **scandir**([string](language.types.string.md) `$directory`, [int](language.types.integer.md) `$sorting_order` = **`SCANDIR_SORT_ASCENDING`**, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna um [array](language.types.array.md) de arquivos e diretórios dentro de
`directory`.

### Parâmetros

`directory`
:   O diretório que será pesquisado.

`sorting_order`
:   Por padrão, a lista está em ordem alfabética crescente. Se
    o parâmetro opcional `sorting_order` for definido para
    **`SCANDIR_SORT_DESCENDING`**, a ordenação será
    alfabética decrescente. Se definida para
    **`SCANDIR_SORT_NONE`**, o resultado não será ordenado.

`context`
:   Para uma descrição do parâmetro `context`
    refira-se à [seção de fluxos](ref.stream.md) do
    manual.

### Valor Retornado

Retorna um [array](language.types.array.md) com nomes de arquivos em caso de sucesso, ou **`false`** em
caso de falha. Se `directory` não for um diretório,
**`false`** é retornado e um aviso
**`E_WARNING`** é gerado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `context` agora pode ser nulo. |

### Examples

**Exemplo #1 Um exemplo simples de **scandir()****

```
<?php
$dir    = '/tmp';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => .
    [1] => ..
    [2] => bar.php
    [3] => foo.txt
    [4] => algumdiretorio
)
Array
(
    [0] => algumdiretorio
    [1] => foo.txt
    [2] => bar.php
    [3] => ..
    [4] => .
)
```

### Notas

**Dica**

Uma URL pode ser usada como um
nome de arquivo com esta função se os [empacotadores fopen](filesystem.configuration.md#ini.allow-url-fopen) estiverem habilitados.
Consulte a função [fopen()](function.fopen.md) para mais detalhes sobre como especificar
o nome do arquivo. Consulte os [Protocolos e empacotadores suportados](wrappers.md) para obter links para informações
sobre as capacidades de cada empacotador, notas de uso
e informações sobre quaisquer variáveis predefinidas que eles possam
fornecer.

### Veja também

- [opendir()](function.opendir.md) - Abre um manipulador de diretório
- [readdir()](function.readdir.md) - Lê entrada do manipulador do diretório
- [glob()](function.glob.md) - Encontra caminhos que combinam com uma expressão
- [is\_dir()](function.is-dir.md) - Diz se o caminho é um diretório
- [sort()](function.sort.md) - Ordena um array em ordem ascendente

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
