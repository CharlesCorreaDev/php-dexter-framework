# Acessando vários fluxos de E/S

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.php.php

---

# php://

php:// — Acessando vários fluxos de E/S

### Descrição

O PHP fornece um número de fluxos de E/S miscelâneos que permitem acesso aos
fluxos de entrada e saída do próprio PHP, a entrada padrão, descritores de arquivo
de saída e de erro, fluxos de arquivos temporário em memória e em disco, e
filtros que podem manipular outros recursos de arquivo enquanto eles são lidos
ou escritos.

#### php://stdin, php://stdout e php://stderr

php://stdin, php://stdout e
php://stderr permitem acesso direto ao fluxo correspondente
de entrada ou saída do processo PHP. O fluxo referencia um
descritor de arquivo duplicado, para que quando um php://stdin for aberto
e depois fechado, apenas a cópia do descritor será fechada - o fluxo
real referenciado por **`STDIN`** não é afetado.
Recomenda-se
que as constantes **`STDIN`**,
**`STDOUT`** e **`STDERR`** sejam usadas no lugar de
abrir manualmente os fluxos utilizando estes empacotadores.

php://stdin é somente leitura, enquanto que
php://stdout e php://stderr são
somente escrita.

#### php://input

php://input é um fluxo somente leitura que permite a leitura
de dados brutos do corpo da requisição.
php://input não está disponível em requisições POST com
`enctype="multipart/form-data"` se a opção
[enable\_post\_data\_reading](ini.core.md#ini.enable-post-data-reading)
estiver habilitada.

#### php://output

php://output é um fluxo somente escrita que permite
escrita ao mecanismo de buffer de saída da mesma maneira que
[print](function.print.md) e [echo](function.echo.md).

#### php://fd

php://fd permite acesso direto ao descritor de arquivo
fornecido. Por exemplo, php://fd/3 se refere ao descritor de
arquivo 3.

#### php://memory e php://temp

php://memory e php://temp são fluxos
somente leitura que permitem que dados temporários sejam armazenados em um empacotador
parecido com um arquivo. Uma diferença entre os dois é que
php://memory irá sempre armazenar seus dados na memória,
enquanto que php://temp irá usar um arquivo temporário assim que
a quantidade de dado armazenado atingir um limite predefinido (o padrão é 2 MB). A
localização deste arquivo temporário é determinada da mesma forma que a
função [sys\_get\_temp\_dir()](function.sys-get-temp-dir.md).

O limite de memória de php://temp pode ser controlado
concatenando-se `/maxmemory:NN`, onde `NN` é
a quantidade máxima de dados a manter na memória antes de usar um arquivo
temporário, em bytes.

**Cuidado**

Algumas extensões PHP podem requerer um fluxo padrão de E/S,
e podem tentar converter um fluxo fornecido para um fluxo de E/S padrão.
Esta conversão pode falhar para fluxos de memória já que ela requer que
a função C **fopencookie()** esteja dispnível.
Esta função C *não está* disponível no Windows.

#### php://filter

php://filter é um tipo de meta-empacotador projetado para
permitir a aplicação de [filtros](filters.md) a um
fluxo no momento da abertura. Isto é útil para funções de arquivo completas
como [readfile()](function.readfile.md),
[file()](function.file.md) e [file\_get\_contents()](function.file-get-contents.md)
pois não haveria oportunidade de aplicar um filtro ao fluxo
antes que os conteúdo fosse lido.

O alvo do php://filter utiliza os parâmetros a seguir
como parte de seu caminho. Cadeias múltiplas de filtro podem ser especificadas em um caminho.
Favor referir-se aos exemplos para especificidades no uso destes parâmetros.

**Parâmetros de php://filter**

| Nome | Descrição |
| --- | --- |
| `resource=<fluxo a ser filtrado>` | Este parâmetro é requerido. Ele especifica o fluxo que deseja-se filtrar. |
| `read=<lista de filtros a aplicar à cadeia de leitura>` | Este parâmetro é opcional. Um ou mais nomes de filtros podem ser fornecidos, separados pelo caractere de barra vertical (`|`). |
| `write=<lista de filtros a aplicar à cadeia de escrita>` | Este parâmetro é opcional. Um ou mais nomes de filtros podem ser fornecidos, separados pelo caractere de barra vertical (`|`). |
| `<lista de filtros a aplicar a ambas as cadeias>` | Quaisquer listas de filtros que não são prefixadas por `read=` ou `write=` serão aplicadas tanto às cadeias de leitura quanto às de escrita, conforme apropriado. |

### Opções

**Sumário do Empacotador (para `php://filter`, refira-se ao
sumário do empacotador sendo filtrado)**

| Atributo | Suportado |
| --- | --- |
| Restrito por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Não |
| Restrito por [allow\_url\_include](filesystem.configuration.md#ini.allow-url-include) | `php://input`, `php://stdin`, `php://memory` e `php://temp` somente. |
| Permite Leitura | `php://stdin`, `php://input`, `php://fd`, `php://memory` e `php://temp` somente. |
| Permite Escrita | `php://stdout`, `php://stderr`, `php://output`, `php://fd`, `php://memory` e `php://temp` somente. |
| Permite Adição | `php://stdout`, `php://stderr`, `php://output`, `php://fd`, `php://memory` e `php://temp` somente. (Equivalente a escrita) |
| Permite Leitura e Escrita Simultâneas | `php://fd`, `php://memory` e `php://temp` somente. |
| Suporta [stat()](function.stat.md) | Não. Entretanto, `php://memory` e `php://temp` suportam [fstat()](function.fstat.md). |
| Suporta [unlink()](function.unlink.md) | Não |
| Suporta [rename()](function.rename.md) | Não |
| Suporta [mkdir()](function.mkdir.md) | Não |
| Suporta [rmdir()](function.rmdir.md) | Não |
| Suporta [stream\_select()](function.stream-select.md) | `php://stdin`, `php://stdout`, `php://stderr`, `php://fd` e `php://temp` somente. |

### Examples

**Exemplo #1 php://temp/maxmemory**

Este parâmetro opcional permite configurar o limite de memória antes que
php://temp comece a usar um arquivo temporário.

```
<?php
// Define o limite para 5 MB.
$fiveMBs = 5 * 1024 * 1024;
$fp = fopen("php://temp/maxmemory:$fiveMBs", 'r+');

fputs($fp, "hello\n");

// Lê o que foi escrito.
rewind($fp);
echo stream_get_contents($fp);
?>
```

**Exemplo #2 php://filter/resource=<fluxo a ser filtrado>**

Este parâmetro deve ser localizado no
final da especificação php://filter e
deve ser apontado ao fluxo que deseja-se filtrar.

```
<?php
/* Isto é equivalente a simplesmente:
  readfile("http://www.example.com");
  já que nenhum filtro é realmente especificado */

readfile("php://filter/resource=http://www.example.com");
?>
```

**Exemplo #3 php://filter/read=<lista de filtros a aplicar à cadeia de leitura>**

Este parâmetro leva um ou mais
nomes de filtros separados pelo caractere de barra vertical `|`.

```
<?php
/* Isto irá mostrar o conteúdo de
  www.example.com inteiramente em letras maiúsculas */
readfile("php://filter/read=string.toupper/resource=http://www.example.com");

/* Isto fará o mesmo que o comando acima
  mas também irá codificar com ROT13 */
readfile("php://filter/read=string.toupper|string.rot13/resource=http://www.example.com");
?>
```

**Exemplo #4 php://filter/write=<lista de filtros a aplicar à cadeia de escrita>**

Este parâmetro leva um ou mais
nomes de filtros separados pelo caractere de barra vertical `|`.

```
<?php
/* Isto irá filtrar a string "Olá Mundo"
  através do filtro rot13 filter, e então escrever no
  exemplo.txt no diretório atual */
file_put_contents("php://filter/write=string.rot13/resource=exemplo.txt","Olá Mundo");
?>
```

**Exemplo #5 php://memory e php://temp não são reutilizáveis**

php://memory e php://temp
não são reutilizáveis, isto é, depois que os fluxos foram fechados não há como
referir-se a eles novamente.

```
<?php
file_put_contents('php://memory', 'PHP');
echo file_get_contents('php://memory'); // não imprime nada
```

**Exemplo #6 php://input para leitura de dados JSON do corpo da requisição**

Este exemplo demonstra como ler dados JSON brutos de requisições POST, PUT e
PATCH usando php://input.

```
<?php
$input = file_get_contents("php://input");
$json_array = json_decode(
  json: $input,
  associative: true,
  flags: JSON_THROW_ON_ERROR
);

echo "Dados JSON recebidos: ";
print_r($json_array);
?>
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
