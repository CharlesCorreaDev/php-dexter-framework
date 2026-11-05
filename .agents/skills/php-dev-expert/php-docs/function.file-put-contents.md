# Escreve dados em um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.file-put-contents.php

---

# file\_put\_contents

(PHP 5, PHP 7, PHP 8)

file\_put\_contents — Escreve dados em um arquivo

### Descrição

function **file\_put\_contents**(  
    [string](language.types.string.md) `$filename`,  
    [mixed](language.types.mixed.md) `$data`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Esta função é idêntica a chamar [fopen()](function.fopen.md),
[fwrite()](function.fwrite.md) e [fclose()](function.fclose.md) sucessivamente
para escrever dados em um arquivo.

Se o arquivo informado em `filename` não existir, o arquivo será criado. Do
contrário, o arquivo existente será sobrescrito, a não ser que a opção
**`FILE_APPEND`** esteja definida.

### Parâmetros

`filename`
:   O caminho para o arquivo onde os dados serão escritos.

`data`
:   Os dados a serem escritos. Pode ser uma [string](language.types.string.md), um
    [array](language.types.array.md) ou um recurso stream.

    Se `data` for um recurso stream, o
    buffer restante desse fluxo será copiado para o arquivo especificado,
    semelhante à utilização de [stream\_copy\_to\_stream()](function.stream-copy-to-stream.md).

    Também pode ser especificado o parâmetro `data` como
    um array unidimensional. Isso é equivalente a
    `file_put_contents($filename, implode('', $array))`.

`flags`
:   O valor de `flags` pode ser qualquer combinação das
    seguintes opções, adicionadas com o operador binário OR
    (`|`).

    **Opções disponíveis**

    | Opção | Descrição |
    | --- | --- |
    | **`FILE_USE_INCLUDE_PATH`** | Procura o arquivo `filename` no diretório de 'include'. Consulte [include\_path](ini.core.md#ini.include-path) para mais informações. |
    | **`FILE_APPEND`** | Se o arquivo `filename` já existir, acrescenta os dados ao final do arquivo em vez de sobrescrevê-lo. |
    | **`LOCK_EX`** | Adquire uma trava exclusiva no arquivo ao prosseguir para a escrita. Em outras palavras, uma chamada a [flock()](function.flock.md) acontece entre a chamada [fopen()](function.fopen.md) e a chamada [fwrite()](function.fwrite.md). Isso não é idêntico à uma chamada [fopen()](function.fopen.md) com modo "x". |

`context`
:   Um recurso de contexto válido criado com
    [stream\_context\_create()](function.stream-context-create.md).

### Valor Retornado

Esta função retorna o número de bytes que foram escritos no arquivo ou
**`false`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Examples

**Exemplo #1 Exemplo de uso simples**

```
<?php
$file = 'pessoas.txt';
// Abre o arquivo para obter o conteúdo existente
$current = file_get_contents($file);
// Acrescenta a nova pessoa no arquivo
$current .= "Fulano de Tal\n";
// Escreve o conteúdo de volta no arquivo
file_put_contents($file, $current);
?>
```

**Exemplo #2 Usando opções**

```
<?php
$file = 'pessoas.txt';
// A nova pessoa para adicionar no arquivo
$person = "Cicrano de Tal\n";
// Escreve o conteúdo no arquivo
// usando a opção FILE_APPEND para acrescentar o conteúdo ao final do arquivo
// e a opção LOCK_EX para evitar que outra pessoa escreva no arquivo ao mesmo tempo.
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

**Dica**

Uma URL pode ser usada como um
nome de arquivo com esta função se os [empacotadores fopen](filesystem.configuration.md#ini.allow-url-fopen) estiverem habilitados.
Consulte a função [fopen()](function.fopen.md) para mais detalhes sobre como especificar
o nome do arquivo. Consulte os [Protocolos e empacotadores suportados](wrappers.md) para obter links para informações
sobre as capacidades de cada empacotador, notas de uso
e informações sobre quaisquer variáveis predefinidas que eles possam
fornecer.

### Veja também

- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos
- [file\_get\_contents()](function.file-get-contents.md) - Lê todo o conteúdo de um arquivo para uma string
- [stream\_context\_create()](function.stream-context-create.md) - Cria um contexto de fluxo

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
