# Lê todo o conteúdo de um arquivo para uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.file-get-contents.php

---

# file\_get\_contents

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

file\_get\_contents — Lê todo o conteúdo de um arquivo para uma string

### Descrição

function **file\_get\_contents**(  
    [string](language.types.string.md) `$filename`,  
    [bool](language.types.boolean.md) `$use_include_path` = **`false`**,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**,  
    [int](language.types.integer.md) `$offset` = 0,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função é semelhante à [file()](function.file.md), exceto que
**file\_get\_contents()** retorna o arquivo em uma
[string](language.types.string.md), começando a partir de `offset`
até `length` bytes. Em caso de falha,
**file\_get\_contents()** retornará **`false`**.

**file\_get\_contents()** é o método preferível para ler o
conteúdo de um arquivo em uma string. Ela usa técnicas de mapeamento de memória
suportadas pelo sistema operacional para melhorar o desempenho.

> **Nota**:
>
> Se for aberta uma URI com caracteres especiais, como espaços, é necessário
> codificar a URI com [urlencode()](function.urlencode.md).

### Parâmetros

`filename`
:   Nome do arquivo para ler.

`use_include_path`
:   > **Nota**:
    >
    > A constante **`FILE_USE_INCLUDE_PATH`**
    > pode ser usada para acionar a busca no
    > [include path](ini.core.md#ini.include-path).
    > Isto não é possível se a
    > [tipagem estrita](language.types.declarations.md#language.types.declarations.strict)
    > estiver habilitada, já que **`FILE_USE_INCLUDE_PATH`** é um
    > [int](language.types.integer.md). Em vez disso, use **`true`**.

`context`
:   Um recurso de contexto válido, criado com
    [stream\_context\_create()](function.stream-context-create.md). Se você não precisa usar um
    contexto personalizado, você pode ignorar este parâmetro passando **`null`**.

`offset`
:   O ponto onde a leitura deve começar no fluxo original.
    Offsets negativos contam a partir do final do fluxo.

    `offset` não é suportado em arquivos remotos.
    Tentar fazer busca em arquivos não locais pode funcionar com offsets
    pequenos, mas isso é imprevisível pois só funciona no fluxo com buffer.

`length`
:   Comprimento máximo dos dados lidos. O padrão é ler até que o fim do arquivo
    seja alcançado. Note que este parâmetro é aplicado para o fluxo processado
    pelos filtros.

### Valor Retornado

A função retorna os dados lidos ou **`false`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Erros/Exceções

Um erro de nível **`E_WARNING`** é gerado se `filename` não puder ser encontrado,
`length` é menor que zero, ou se a busca no fluxo pelo `offset` especificado falhar.

Quando **file\_get\_contents()** é chamada em um diretório, um
erro nível **`E_WARNING`** é gerado no Windows, e a partir
do PHP 7.4 em outros sistemas operacionais também.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` agora é anulável. |
| 7.1.0 | Suporte para `offset`s negativos foi adicionado. |

### Examples

**Exemplo #1 Obtém e exibe o código-fonte da página inicial de um website**

```
<?php
$homepage = file_get_contents('http://www.example.com/');
echo $homepage;
?>
```

**Exemplo #2 Buscando no include\_path**

```
<?php
// Se strict types estiver ativado com declare(strict_types=1);
$file = file_get_contents('./people.txt', true);
// Se não
$file = file_get_contents('./people.txt', FILE_USE_INCLUDE_PATH);
?>
```

**Exemplo #3 Lendo uma sessão de um arquivo**

```
<?php
// Lê 14 letras começando da letra 21
$section = file_get_contents('./people.txt', FALSE, NULL, 20, 14);
var_dump($section);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(14) "lle Bjori Ro"
```

**Exemplo #4 Usando contextos de fluxo**

```
<?php
// Criam um fluxo
$opts = [
    'http' => [
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
                "Cookie: foo=bar\r\n"
    ]
];

$context = stream_context_create($opts);

// Abre o arquivo utilizando os headers HTTP craidos acima
$file = file_get_contents('http://www.example.com/', false, $context);
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

- [file()](function.file.md) - Lê todo o arquivo para um array
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fread()](function.fread.md) - Leitura de arquivo segura para binário
- [readfile()](function.readfile.md) - Exibe o conteúdo de um arquivo
- [file\_put\_contents()](function.file-put-contents.md) - Escreve dados em um arquivo
- [stream\_get\_contents()](function.stream-get-contents.md) - Lê o restante de um fluxo em uma string
- [stream\_context\_create()](function.stream-context-create.md) - Cria um contexto de fluxo
- [$http\_response\_header](reserved.variables.httpresponseheader.md)

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
