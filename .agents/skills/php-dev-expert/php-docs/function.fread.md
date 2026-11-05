# Leitura de arquivo segura para binário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fread.php

---

# fread

(PHP 4, PHP 5, PHP 7, PHP 8)

fread — Leitura de arquivo segura para binário

### Descrição

function **fread**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$length`): [string](language.types.string.md)|[false](language.types.singleton.md)

**fread()** lê até
`length` bytes do ponteiro de arquivo
informado em `stream`. A leitura é interrompida quando
uma das seguintes condições são satisfeitas:

- `length` bytes foram lidos
- EOF (final do arquivo) é alcançado
- um pacote tornou-se disponível ou o [limite de tempo de socket](function.socket-set-timeout.md) foi atingido (para fluxos de rede)
- se o fluxo é lido com buffer e não representa um arquivo, é realizada no máximo
  uma leitura de até o número de bytes igual ao tamanho do bloco (normalmente
  8192); dependendo dos dados previamente armazenados em buffer, o tamanho dos
  dados retornados pode ser maior que o tamanho do bloco.

### Parâmetros

`stream`
:   Um [resource](language.types.resource.md) de ponteiro do sistema de arquivos
    que normalmente é criado usando [fopen()](function.fopen.md).

`length`
:   Limite de até `length` bytes lidos.

### Valor Retornado

Retorna a string lida ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Um simples exemplo de **fread()****

```
<?php
// lê o conteúdo do arquivo para uma string
$filename = "/usr/local/qualquer.txt";
$handle = fopen ($filename, "r");
$conteudo = fread ($handle, filesize ($filename));
fclose ($handle);
?>
```

**Exemplo #2 Exemplo de **fread()** binário**

**Aviso**

Em sistemas que diferenciam entre arquivos binários e texto
(por exemplo Windows) o arquivo tem que ser aberto com 'b'
incluído no parâmetro 'mode' da função [fopen()](function.fopen.md).

```
<?php
$filename = "c:\\files\\figura.gif";
$handle = fopen ($filename, "rb");
$conteudo = fread ($handle, filesize ($filename));
fclose ($handle);
?>
```

**Exemplo #3 Exemplos de **fread()** remoto**

**Aviso**

Ao ler de qualquer coisa que não seja um arquivo local comum, tal como
de fluxos retornados ao ler
[arquivos remotos](features.remote-files.md), ou de
[popen()](function.popen.md) e [fsockopen()](function.fsockopen.md), a leitura
irá parar depois que um pacote estiver disponível. Isto significa que
deve-se juntar os dados em blocos como demonstrado nos exemplos abaixo.

```
<?php
$handle = fopen("http://www.example.com/", "rb");
$contents = stream_get_contents($handle);
fclose($handle);
?>
```

```
<?php
$handle = fopen("http://www.example.com/", "rb");
if (FALSE === $handle) {
    exit("Falha ao abrir fluxo para a URL");
}

$contents = '';

while (!feof($handle)) {
    $contents .= fread($handle, 8192);
}
fclose($handle);
?>
```

### Notas

> **Nota**:
>
> Se for desejado apenas obter o conteúdo de um arquivo para uma string, utilize
> [file\_get\_contents()](function.file-get-contents.md) que tem um desempenho muito melhor
> que o código acima.

> **Nota**:
>
> Note que **fread()** lê da posição atual do
> ponteiro de arquivo. Use [ftell()](function.ftell.md) para encontrar a posição
> atual do ponteiro e [rewind()](function.rewind.md) para retroceder
> a posição do ponteiro.

### Veja também

- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos
- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fgetss()](function.fgetss.md) - Ler uma linha de um ponteiro de arquivo e retira as tags HTML
- [fscanf()](function.fscanf.md) - Interpreta a leitura de um arquivo de acordo com um formato
- [file()](function.file.md) - Lê todo o arquivo para um array
- [fpassthru()](function.fpassthru.md) - Imprime todos os dados restantes de um ponteiro de arquivo
- [fseek()](function.fseek.md) - Aponta para uma posição no arquivo
- [ftell()](function.ftell.md) - Retorna a posição atual do ponteiro de leitura/gravação do arquivo
- [rewind()](function.rewind.md) - Retrocede a posição de um ponteiro de arquivos
- [unpack()](function.unpack.md) - Desempacota dados de uma string binária

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
