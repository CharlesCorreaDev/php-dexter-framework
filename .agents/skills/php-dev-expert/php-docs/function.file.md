# Lê todo o arquivo para um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.file.php

---

# file

(PHP 4, PHP 5, PHP 7, PHP 8)

file — Lê todo o arquivo para um array

### Descrição

function **file**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Carrega todo um arquivo em um array.

> **Nota**:
>
> Pode-se utilizar [file\_get\_contents()](function.file-get-contents.md) para retornar
> o conteúdo de um arquivo como uma string.

### Parâmetros

`filename`
:   Caminho para o arquivo.

    **Dica**

    Uma URL pode ser usada como um
    nome de arquivo com esta função se os [empacotadores fopen](filesystem.configuration.md#ini.allow-url-fopen) estiverem habilitados.
    Consulte a função [fopen()](function.fopen.md) para mais detalhes sobre como especificar
    o nome do arquivo. Consulte os [Protocolos e empacotadores suportados](wrappers.md) para obter links para informações
    sobre as capacidades de cada empacotador, notas de uso
    e informações sobre quaisquer variáveis predefinidas que eles possam
    fornecer.

`flags`
:   O parâmetro opcional `flags` pode ser uma ou
    mais das seguintes constantes:

    **`FILE_USE_INCLUDE_PATH`**
    :   Procurar pelo arquivo no [include\_path](ini.core.md#ini.include-path).

    **`FILE_IGNORE_NEW_LINES`**
    :   Omite a quebra de linha no final de cada elemento do array.

    **`FILE_SKIP_EMPTY_LINES`**
    :   Pula linhas vazias.

    **`FILE_NO_DEFAULT_CONTEXT`**
    :   Não usa o contexto padrão.

`context`
:   Um [resource](language.types.resource.md) de
    [contexto de fluxo](stream.contexts.md).

### Valor Retornado

Retorna o arquivo em um array. Cada elemento do array corresponde a uma
linha no arquivo, ainda com a quebra de linha. Em caso de falha,
**file()** retorna **`false`**

> **Nota**:
>
> Cada linha no array incluirá a quebra de linha, a não ser que
> **`FILE_IGNORE_NEW_LINES`** seja usado.

> **Nota**:
>
> Se o PHP não estiver reconhecendo corretamente
> os finais de linha ao ler arquivos em um computador Macintosh ou que foram criados
> em um, habilitar a opção de configuração em tempo de execução
> [auto\_detect\_line\_endings](filesystem.configuration.md#ini.auto-detect-line-endings)
> pode ajudar a resolver o problema.

### Erros/Exceções

A partir do PHP 8.3.0, lança uma exceção [ValueError](class.valueerror.md)
se `flags` incluir qualquer valor inválido, tal
como **`FILE_APPEND`**.

Emite um aviso **`E_WARNING`** se o arquivo
não existe.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Uma exceção [ValueError](class.valueerror.md) é lançada para qualquer valor inválido no parâmetro `flags`. |

### Examples

**Exemplo #1 Exemplo de **file()****

```
<?php
// Lê um arquivo em um array.  Nesse exemplo será obtido o código fonte HTML de
// uma URL via HTTP
$lines = file ('http://www.example.com/');

// Percorre o array, mostrando o fonte HTML com numeração de linhas.
foreach ($lines as $line_num => $line) {
    echo "Linha #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}

// Usando o parâmetro de opções opcionais
$trimmed = file('somefile.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>
```

### Notas

**Aviso**

Ao usar SSL, o Microsoft IIS
violará o protocolo fechando a conexão sem enviar uma notificação
`close_notify`. O PHP reportará isso como "SSL: Fatal
Protocol Error" quando chegar ao final dos dados. Para contornar isso, o
valor de [error\_reporting](errorfunc.configuration.md#ini.error-reporting) deve ser
reduzido a um nível que não inclua avisos.
O PHP pode detectar servidores IIS defeituosos quando o fluxo
é aberto usando o empacotador `https://` e suprimirá o aviso.
Ao usar [fsockopen()](function.fsockopen.md) para criar um soquete
`ssl://`, o desenvolvedor é responsável por detectar
e suprimir este aviso.

### Veja também

- [file\_get\_contents()](function.file-get-contents.md) - Lê todo o conteúdo de um arquivo para uma string
- [readfile()](function.readfile.md) - Exibe o conteúdo de um arquivo
- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [include](function.include.md) - include
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
