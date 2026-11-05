# Executa um comando e abre ponteiros de arquivo para entrada/saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.proc-open.php

---

# proc\_open

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

proc\_open — 
Executa um comando e abre ponteiros de arquivo para entrada/saída

### Descrição

function **proc\_open**(  
    [array](language.types.array.md)|[string](language.types.string.md) `$command`,  
    [array](language.types.array.md) `$descriptor_spec`,  
    [array](language.types.array.md) `&$pipes`,  
    [?](language.types.null.md)[string](language.types.string.md) `$cwd` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$env_vars` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

**proc\_open()** é similar a [popen()](function.popen.md)
mas fornece um grau de controle muito maior sobre a execução do programa.

### Parâmetros

`command`
:   A linha de comando a executar, como uma [string](language.types.string.md). Caracteres especiais precisam ser escapados adequadamente,
    e o uso de aspas deve ser apropriadamente aplicado.

    > **Nota**:
    >
    > No *Windows*, a menos que `bypass_shell` esteja definido para **`true`** no parâmetro
    > `options`, o comando em `command` é
    > passado para **cmd.exe** (na verdade, `%ComSpec%`)
    > com a opção `/c` como uma string *sem aspas*
    > (isto é, exatamente como fornecido a **proc\_open()**).
    > Isto pode fazer com que **cmd.exe** remova as aspas que envolvem o comando em
    > `command` (para detalhes, consulte a documentação do **cmd.exe**),
    > resultando em comportamento inesperado e potencialmente perigoso, porque
    > as mensagens de erro de **cmd.exe** podem conter (partes dos) comandos passados em
    > `command` (veja exemplo abaixo).

    A partir do PHP 7.4.0, `command` pode ser passado como um [array](language.types.array.md) de parâmetros de comandos.
    Neste caso, o processo será aberto diretamente (sem passar por um "shell")
    e o PHP irá gerenciar qualquer escape de argumentos se necessário.

    > **Nota**:
    >
    > No Windows, o escape de argumentos dos elementos do [array](language.types.array.md) assume que a análise
    > de linha de comando é compatível com a análise
    > dos argumentos de linha de comando feita pelas bibliotecas em tempo de execução do VC.

`descriptor_spec`
:   Um array indexado onte a chave representa o número descritor e o
    valor representa como o PHP irá passar esse descritor ao processo
    filho. 0 é stdin, 1 é stdout e 2 é stderr.

    Cada elemento pode ser:

    - Um array descrevendo o tubo a ser passado ao processo. O primeiro
      elemento é o tipo do descritor e os elementos seguintes são opções para
      o tipo fornecido. Tipos válidos são `pipe` (o segundo
      elemento pode ser `r` para passar a ponta de leitura do tubo
      ao processo, ou `w` para passar a ponta de escrita) e
      `file` (o segundo elemento é um nome de arquivo e o terceiro
      elemento é o modo do arquivo, da mesma forma que em [fopen()](function.fopen.md)).
      Observe que qualquer outro tipo diferente de `w` é tratado como `r`.
    - Um recurso de fluxo representando um descritor de arquivo real (ex.: arquivo aberto,
      um soquete ou **`STDIN`**).

    O número do descritor de arquivo não é limitado a 0, 1 e 2 - pode-se
    especificar qualquer número válido de descritor de arquivo e ele será passado ao
    processo filho. Isto permite que o script consiga operar com outros
    scripts que são executados como "co-processos". Em particular, isto é útil para
    passar senhas a programas como PGP, GPG e openssl de uma forma
    mais segura. Também é útil para ler informações de estado
    de decritores de arquivos auxiliares fornecidas por estes programas.

`pipes`
:   Será definido para um array indexado de ponteiros de arquivos que corresponde à
    ponta do PHP de qualquer tubo que seja criado.

`cwd`
:   O diretório de trabalho inicial para o comando. Precisa ser um
    caminho de diretório **absoluto**, ou **`null`**
    se for desejado usar o valor padrão (o diretório de trabalho do
    processo PHP atual)

`env_vars`
:   Um array com as variáveis de ambiente para o comando que será
    executado, ou **`null`** para usar o mesmo ambiente do processo PHP atual

`options`
:   Permite especificar opções adicionais. As opções atualmente suportadas
    incluem:

    - `suppress_errors` (somente Windows): suprime erros
      gerados por esta função quando definida para **`true`**
    - `bypass_shell` (somente Windows): ignora o "shell"
      `cmd.exe` quando definida para **`true`**
    - `blocking_pipes` (somente Windows): força
      tubos no modo de bloqueio quando definida para **`true`**
    - `create_process_group` (somente Windows): permite ao
      processo filho lidar com eventos `CTRL` quando definida para **`true`**
    - `create_new_console` (somente Windows): o novo processo
      terá um novo console, ao invés de herdar o console do processo pai

### Valor Retornado

Retorna um recurso representando o processo, que deve ser liberado usando
[proc\_close()](function.proc-close.md) quando seu uso tiver sido finalizado. Em caso de falha
retorna **`false`**.

### Erros/Exceções

A partir do PHP 8.3.0, lança uma exceção [ValueError](class.valueerror.md) se
`command` for um array sem pelo menos um
elemento não vazio.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Uma exceção [ValueError](class.valueerror.md) será lançada se `command` for um array sem pelo menos um elemento não vazio. |
| 7.4.4 | Adicionada a opção `create_new_console` ao parâmetro `options`. |
| 7.4.0 | **proc\_open()** agora aceita um [array](language.types.array.md) para o parâmetro `command`. |
| 7.4.0 | Adicionada a opção `create_process_group` ao parâmetro `options`. |

### Examples

**Exemplo #1 Um exemplo de **proc\_open()****

```
<?php
$descriptorspec = array(
   0 => array("pipe", "r"),  // stdin é um tubo de onde o processo filho irá ler
   1 => array("pipe", "w"),  // stdout é um tubo no qual o processo filho irá escrever
   2 => array("file", "/tmp/error-output.txt", "a") // stderr é um arquivo que será escrito
);

$cwd = '/tmp';
$env = array('some_option' => 'aeiou');

$process = proc_open('php', $descriptorspec, $pipes, $cwd, $env);

if (is_resource($process)) {
    // $pipes agora será parecido com:
    // 0 => manipulador que pode ser escrito, conectado ao stdin filho
    // 1 => manipulador que pode ser lido, conectado ao stdout filho
    // Qualquer saída de erro será anexaa ao /tmp/error-output.txt

    fwrite($pipes[0], '<?php print_r($_ENV); ?>');
    fclose($pipes[0]);

    echo stream_get_contents($pipes[1]);
    fclose($pipes[1]);

    // É importante fechar todos os tubos antes de chamar
    // proc_close para evitar o beco sem saída
    $return_value = proc_close($process);

    echo "comando retornou $return_value\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [some_option] => aeiou
    [PWD] => /tmp
    [SHLVL] => 1
    [_] => /usr/local/bin/php
)
comando retornou 0
```

**Exemplo #2 Peculiaridade de **proc\_open()** no Windows**

Embora seja esperado que o programa a seguir pesquise o arquivo
filename.txt pelo texto `search` e
mostre os resultados, ele se comporta de maneira bastante diferente.

```
<?php
$descriptorspec = [STDIN, STDOUT, STDOUT];
$cmd = '"findstr" "search" "filename.txt"';
$proc = proc_open($cmd, $descriptorspec, $pipes);
proc_close($proc);
?>
```

O exemplo acima produzirá:

```
'findstr" "search" "filename.txt' is not recognized as an internal or external command,
operable program or batch file.
```

Para contornar este comportamento, normalmente é suficiente envolver
`command` com aspas adicionais:

```
$cmd = '""findstr" "search" "filename.txt""';
```

### Notas

> **Nota**:
>
> Compatibilidade com Windows: Descritores além de 2 (stderr) estão disponíveis para
> o processo filho como manipuladores que podem ser herdados, mas como a arquitetura
> Windows não associa números de descritores de arquivos a manipuladores de
> baixo nível, o processo filho não tem (ainda) meios de acessar esses
> manipuladores. Stdin, stdout e stderr funcionam conforme esperado.

> **Nota**:
>
> Se for necessário somente um tubo de processo unidirecional (mão única), utilize a função
> [popen()](function.popen.md), pois é muito mais fácil de usar.

### Veja também

- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [exec()](function.exec.md) - Executa um programa externo
- [system()](function.system.md) - Executa um programa externo e mostra a saída
- [passthru()](function.passthru.md) - Executa um programa externo e mostra a saída bruta
- [stream\_select()](function.stream-select.md) - Executa o equivalente à chamada de sistema select() nos arrays de fluxos
  informados com um limite de tempo especificado por segundos e microssegundos
- O [operador de execução](language.operators.execution.md)

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
