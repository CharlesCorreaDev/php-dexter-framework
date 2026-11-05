# Executando arquivos PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.commandline.usage.php

---

## Executando arquivos PHP

Existem três formas de fornecer código PHP para ser executado pelo
CLI SAPI:

1. Diga ao PHP para executar determinado arquivo.

   ```
   $ php my_script.php

   $ php -f my_script.php
   ```

   As duas formas (usando ou não a opção **-f**) executam o
   arquivo my\_script.php. Note que não existe
   restrição sobre quais arquivos podem ser executados; em particular, o
   nome do arquivo não precisa conter a extensão `.php`.
2. Passa o código PHP diretamente através da linha de comando.

   ```
   $ php -r 'print_r(get_defined_constants());'
   ```

   Um cuidado especial deve ser tomado em relação a substituição de variáveis
   e o uso de aspas.

   > **Nota**:
   >
   > Leia o exemplo cuidadosamente: não existem tags de abertura e fechamento! A
   > opção **-r** simplesmente não necessita delas, e usá-las irá gerar
   > um erro de interpretação.
3. Direciona a entrada padrão (`stdin`)
   para o código PHP.

   Isso dá a poderosa habilidade de criar código PHP dinamicamente e alimentar o
   binário, assim como demonstrado nesse exemplo fictício:

   ```
   $ some_application | some_filter | php | sort -u > final_output.txt
   ```

Você não pode combinar essas formas de executar o código.

Assim como qualquer aplicação de linha de comando, o PHP aceita qualquer quantidade
de argumentos; entretanto, os scripts PHP também podem receber outros argumentos.
A quantidade de argumentos que podem ser passados para o script não é limitada pelo
PHP (e apesar do shell ter um limite no número de caracteres que podem ser
passados, ele não é geralmente atingido). Os argumentos passados para os scripts
ficam disponíveis no array global [$argv](reserved.variables.argv.md). O primeiro índice
(zero) sempre contém o nome do script que está sendo chamado pela linha de
comando. Note que, se o código é executado diretamente usando a opção de linha
de comando **-r**, o valor de [$argv[0]](reserved.variables.argv.md)
será `"Standard input code"`; anteriormente ao PHP 7.2.0, isso era um hífen (`"-"`). A mesma coisa ocorre se o código é
executado via um pipe a partir do **`STDIN`**.

Uma segunda variável global, [$argc](reserved.variables.argc.md),
contém o número de elementos contidos no array[$argv](reserved.variables.argv.md) array
(**não** o número de argumentos passados para o
script).

Desde que os argumentos passados pelo script não comecem com o caractere
`-`, não existe nada em especial com que você deva se preocupar.
Passar um argumento para o script que comece com `-`
irá causar problemas, porque o interpretador do PHP irá pensar que ele mesmo deve
manipular esse argumento, mesmo antes de executar o script. Para prevenir isso
use o separador de lista de argumentos `--`. Depois que esse
separador é interpretado pelo PHP, cada argumento seguinte é passado intocado para o script.

```
# Isto não executará o código, apenas mostrará as opções do PHP
$ php -r 'var_dump($argv);' -h
Usage: php [options] [-f] <file> [args...]
[...]

# Isto passará o argumento '-h' para o script, assim evitando do PHP interpretá-lo
$ php -r 'var_dump($argv);' -- -h
array(2) {
  [0]=>
  string(1) "-"
  [1]=>
  string(2) "-h"
}
```

Entretanto, em sistemas Unix existe uma outra maneira de usar o PHP em linha
de comando: fazer com que a primeira linha do script comece com
`#!/usr/bin/php` (ou qualquer que seja o caminho para o binário
do PHP CLI caso seja diferente. O restante do arquivo deve conter código PHP normal
com as já tradicionais tags de abertura e fechamento. Uma vez que os atributos de execução
do arquivo estejam apropriadamente definidos (exemplo. **chmod +x test**),
o script poderá ser executado como qualquer outro script shell ou perl:

**Exemplo #1 Executando scripts PHP como shell scripts**

```
#!/usr/bin/php
<?php
var_dump($argv);
?>
```

Assumindo que esse arquivo tenha o nome test no diretório
atual, é possível fazer o seguinte:

```
$ chmod +x test
$ ./test -h -- foo
array(4) {
  [0]=>
  string(6) "./test"
  [1]=>
  string(2) "-h"
  [2]=>
  string(2) "--"
  [3]=>
  string(3) "foo"
}
```

Como pode ser visto, nesse caso nenhum cuidado especial precisa ser tomado ao passar parâmetros
começando com `-`.

O executável do PHP pode ser usado para rodar scripts absolutamente independentes do
servidor web. Em sistemas Unix, a primeira linha especial `#!` (ou
"shebang") deve ser adicionada a scripts PHP para que o sistema possa automaticamente
dizer qual programa deve executar o script. Em plataformas Windows,
é possível associar o php.exe com um clique duplo no arquivos
com extensão `.php`, ou um arquivo batch pode ser criado para rodar
scripts através do PHP. A primeira linha especial shebang para Unix não causa nenhum
efeito no Windows (já que é formatada como um comentário PHP), então programas
multiplataforma podem ser escritos com a inclusão disso. Um exemplo simples de
programa de linha de comando em PHP é mostrado abaixo.

**Exemplo #2 Script planejado para ser executado na linha de comando (script.php)**

```
#!/usr/bin/php
<?php

if ($argc != 2 || in_array($argv[1], array('--help', '-help', '-h', '-?'))) {
?>

This is a command line PHP script with one option.

  Usage:
  <?php echo $argv[0]; ?> <option>

  <option> can be some word you would like
  to print out. With the --help, -help, -h,
  or -? options, you can get this help.

<?php
} else {
    echo $argv[1];
}
?>
```

O script acima inclui a shebang na primeira linha para indicar que esse
arquivo deve ser executado pelo PHP. Nós estamos trabalhando com a versão
CLI aqui, então nenhum cabeçalho HTTP será exibido.

O programa primeiramente verifica se o primeiro argumento obrigatório foi passado
(juntamente com o nome do arquivo, que também é contabilizado). Em caso negativo,
ou caso o argumento seja **--help**, **-help**,
**-h** ou **-?**, uma mensagem de ajuda é disparada,
usando [$argv[0]](reserved.variables.argv.md) para imprimir dinamicamente o nome do script
como foi digitado na linha de comando. Do contrário, o argumento é exibido da
forma como foi escrito.

Para executar o script acima em sistemas Unix, ele deve ser tornado executável,
e chamado simplesmente com **script.php echothis** ou
**script.php -h**. Em sistemas Windows, um arquivo batch similar
ao seguinte pode ser criado para essa tarefa:

**Exemplo #3 Arquivo batch para rodar um script de linha de comando em PHP (script.bat)**

```
@echo OFF
"C:\php\php.exe" script.php %*
```

Assumindo que o programa acima foi nomeado como script.php, e que o
CLI php.exe está em C:\php\php.exe,
esse arquivo batch irá executá-lo, repassando todas as opções:
**script.bat echothis** ou **script.bat -h**.

Veja também a documentação da extensão [Readline](ref.readline.md)
com mais funções usadas para melhorar as aplicações de linha de
comando em PHP.

No Windows, o PHP pode ser configurado para rodar sem a necessidade de informar
o C:\php\php.exe ou a extensão`.php`,
como descrito em [PHP para linha de
comando no Microsoft Windows](install.windows.commandline.md).

> **Nota**:
>
> No Windows é recomendado rodar o PHP em uma conta de usuário normal.
> Ao rodar em uma conta de serviço certas operações podem falhar, por conta da situação
> "No mapping between account names and security IDs was done" (não foi feito nenhum mapeamento entre nomes de contas e IDs de segurança).

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
