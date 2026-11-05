# Abre um arquivo ou URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fopen.php

---

# fopen

(PHP 4, PHP 5, PHP 7, PHP 8)

fopen — Abre um arquivo ou URL

### Descrição

function **fopen**(  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$mode`,  
    [bool](language.types.boolean.md) `$use_include_path` = **`false`**,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

**fopen()** conecta um recurso nomeado, especificado por
`filename`, a um fluxo.

### Parâmetros

`filename`
:   Se `filename` estiver na forma de "esquema://...",
    assume-se que seja uma URL, e o PHP buscará por um manipulador de protocolo
    (também conhecido como empacotador) para aquele esquema. Se nenhum empacotador para
    aquele protocolo estiver registrado, o PHP emitirá uma aviso para auxiliar
    no rastreio de potenciais problemas no script, e então continuará presumindo
    que `filename` especifica um arquivo normal.

    Se o PHP decidiu que `filename` se refere
    a um arquivo local, então ele tentará abrir um fluxo para aquele arquivo.
    O arquivo precisa ser acessível pelo PHP, portanto é necessário garantir
    que as permissões de acesso do arquivo possibilitem este acesso.
    Se estiver habilitado
    [open\_basedir](ini.core.md#ini.open-basedir), outras
    restrições podem se aplicar.

    Se o PHP decidiu que `filename` se refere
    a um protocolo registrado e esse protocolo estiver registrado como
    uma URL de rede, o PHP irá verificar para ter certeza que
    [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) está
    habilitado. Se não estiver, o PHP emitirá um alerta e
    a chamada a **fopen()** irá falhar.

    > **Nota**:
    >
    > A lista de protocolos suportados pode ser encontrada em [Protocolos e empacotadores suportados](wrappers.md). Alguns protocolos (também mencionados como
    > empacotadores - `wrappers`) suportam `context`
    > e/ou opções do php.ini. Recorra à página específica do
    > protocolo em uso para uma lista das opções que podem ser definidas.
    > (ex.: o valor php.ini `user_agent` utilizado pelo
    > protocolo `http`).

    Na plataforma Windows, tenha cuidado de escapar qualquer barra invertida
    usada no caminho do arquivo, ou use barras normais.

    ```
    <?php
    $handle = fopen("c:\\data\\info.txt", "r");
    ?>
    ```

`mode`
:   O parâmetro `mode` especifica o tipo de acesso
    que você precisa ao fluxo. Pode ser um dos seguintes:

    **Lista dos possíveis modos de **fopen()**
    utilizando `mode`**

    | `mode` | Descrição |
    | --- | --- |
    | `'r'` | Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo. |
    | `'r+'` | Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo. |
    | `'w'` | Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo. |
    | `'w+'` | Abre para leitura e escrita; fora isso, tem o mesmo comportamento de `'w'`. |
    | `'a'` | Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo. Neste modo, [fseek()](function.fseek.md) não tem efeito, a escrita é sempre adicionada. |
    | `'a+'` | Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo. Neste modo, [fseek()](function.fseek.md) somente afeta a posição de leitura, escrita é sempre adicionada. |
    | `'x'` | Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a **fopen()** falhará, retornando **`false`** e gerando um erro de nível **`E_WARNING`**. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as opções `O_EXCL|O_CREAT` para a chamada de sistema `open(2)` subjacente. |
    | `'x+'` | Cria e abre o arquivo para leitura e escrita; fora isso, tem o mesmo comportamento de `'x'`. |
    | `'c'` | Abre o arquivo somente para escrita. Se o arquivo não existir, ele é criado. Se existir, ele não é truncado (ao contrário de `'w'`) e nem a chamada a esta função falha (como no caso de `'x'`). O ponteiro é posicionado no início do arquivo. Isto pode ser útil se for desejado obter uma trava consultiva (consulte [flock()](function.flock.md)) antes de tentar modificar o arquivo, já que usar `'w'` poderia trincar o arquivo antes que a trava fosse obtida (se o truncamento for desejado, [ftruncate()](function.ftruncate.md) pode ser usando depois que a trava for requisitada). |
    | `'c+'` | Abre o arquivo para leitura e escrita; fora isso, tem o mesmo comportamento de `'c'`. |
    | `'e'` | Define a opção close-on-exec no descritor do arquivo aberto. Somente disponível no PHP compilado em sistemas compatíveis com POSIX.1-2008. |
    | `'n'` | Define o sinalizador não bloqueante no descritor de arquivo aberto. Disponível apenas no PHP compilado em sistemas compatíveis com POSIX.1-2008. |

    > **Nota**:
    >
    > Diferentes famílias de sistemas operacionais têm diferentes convenções de
    > final de linha. Quando um arquivo texto é escrito e deseja-se inserir uma quebra
    > de linha, é necessário usar o caractere correto de fim de linha para o
    > sistema operacional. Sistemas baseados no Unix utilizam `\n` como o
    > caractere de fim de linha, sistemas baseados no Windows utilizam `\r\n`
    > e sistemas baseados no Macintosh (Mac OS Classic) utilizavam
    > `\r`.
    >
    > Se forem usados os caracteres de fim de linha inadequados em seus arquivos, pode
    > ser que esses arquivos "parecer estranhos" quando forem abertos em outras
    > aplicações.
    >
    > O Windows oferece uma opção de tradução do modo texto (`'t'`)
    > que traduz, transparentemente, `\n` para
    > `\r\n` quando estiver trabalhando com o arquivo. Em contraste, pode-se
    > também utilizar `'b'` para forçar o modo binário, que não
    > irá traduzir os dados. Para usar essas opções, especifique
    > `'b'` ou `'t'` como o último caractere
    > do parâmetro `mode`.
    >
    > O modo de tradução padrão é `'b'`.
    > Pode-se usar o modo `'t'`
    > ao trabalhar com arquivos texto e usar
    > `\n` para delimitar as linhas no script, de forma que
    > pode-se esperar que eles sejam lidos em aplicações como versões antigas do bloco de notas. Deve-se
    > usar `'b'` em todos os outros casos.
    >
    > Se for especificada a opção 't' ao trabalhar com arquivos binários, pode-se
    > experimentar problemas estranhos com os dados, incluindo arquivos de imagens
    > corrompidos e problemas estranhos com os caracteres `\r\n`.

    > **Nota**:
    >
    > Para portabilidade, é fortemente recomendado que
    > se reescreva códigos que usem ou dependam do modo `'t'`
    > de forma que passem a usar o fim de linha correto e o
    > modo `'b'` em seu lugar.

    > **Nota**:
    >
    > O parâmetro `mode` é ignorado para os empacotadores
    > de fluxo php://output, php://input, php://stdin,
    > php://stdout, php://stderr e
    > php://fd.

`use_include_path`
:   O terceiro parâmetro opcional `use_include_path`
    pode ser definido **`true`** se for desejado buscar o arquivo
    também no [include\_path](ini.core.md#ini.include-path).

`context`
:   Um [resource](language.types.resource.md) de
    [contexto de fluxo](stream.contexts.md).

### Valor Retornado

Retorna um recurso de ponteiro de arquivo em caso de sucesso,
ou **`false`** em caso de falha

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.0.16, 7.1.2 | A opção `'e'` foi adicionada. |

### Examples

**Exemplo #1 Exemplos de **fopen()****

```
<?php
$handle = fopen("/home/rasmus/file.txt", "r");
$handle = fopen("/home/rasmus/file.gif", "wb");
$handle = fopen("http://www.example.com/", "r");
$handle = fopen("ftp://user:password@example.com/somefile.txt", "w");
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

> **Nota**:
>
> Se houver problemas com leitura e gravação de arquivos
> e a versão de módulo de servidor do PHP estiver sendo usada, deve-se
> garantir que os arquivos e diretórios sendo usados são acessíveis ao processo
> do servidor.

> **Nota**:
>
> Esta função também pode ter sucesso quando `filename` for um
> diretório. Se não houver certeza se `filename` é um
> arquivo ou um diretório, pode ser necessário usar a função [is\_dir()](function.is-dir.md)
> antes de chamar **fopen()**.

### Veja também

- [Protocolos e empacotadores suportados](wrappers.md)
- [fclose()](function.fclose.md) - Fecha um ponteiro de arquivo aberto
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fread()](function.fread.md) - Leitura de arquivo segura para binário
- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos
- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet
- [file()](function.file.md) - Lê todo o arquivo para um array
- [file\_exists()](function.file-exists.md) - Verifica se um arquivo ou diretório existe
- [is\_readable()](function.is-readable.md) - Informa se um arquivo existe e se pode ser lido
- [stream\_set\_timeout()](function.stream-set-timeout.md) - Define o limite de tempo em um fluxo
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [stream\_context\_create()](function.stream-context-create.md) - Cria um contexto de fluxo
- [umask()](function.umask.md) - Modificar a umask atual
- [SplFileObject](class.splfileobject.md)

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
