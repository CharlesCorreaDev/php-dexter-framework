# include

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.include.php

---

## include

(PHP 4, PHP 5, PHP 7, PHP 8)

A expressão `include` inclui e avalia
o arquivo informado.

A documentação a seguir também se aplica à declaração [require](function.require.md).

Os arquivos são incluídos baseando-se no caminho do arquivo informado ou, se não informado, o
[include\_path](ini.core.md#ini.include-path) especificado. Se o arquivo
não for encontrado no [include\_path](ini.core.md#ini.include-path),
`include` verificará no diretório do script que o executa
e no diretório de trabalho corrente antes de falhar. O
construtor `include` emitirá um
**`E_WARNING`** se
não localizar o arquivo; possui um comportamento diferente do
[require](function.require.md), que emitirá um
**`E_ERROR`**.

Note que ambas `include` e `require`
emitem **`E_WARNING`**s adicionais, se o arquivo não puder ser
acessado, antes de emitir o **`E_WARNING`** ou
**`E_ERROR`** final, respectivamente.

Se um caminho for definido — seja absoluto (iniciando com a letra da unidade
ou `\` no Windows, ou `/` no Unix/Linux
), ou relativo ao diretório atual (começando com
`.` ou `..`) — o
[include\_path](ini.core.md#ini.include-path) será completamente
ignorado. Por exemplo, se o nome do arquivo iniciar com `../`,
o interpretador irá procurar pelo arquivo no diretório pai.

Para mais informações de como o PHP trabalha ao incluir arquivos e o caminho de inclusão,
veja a documentação de [include\_path](ini.core.md#ini.include-path).

Quando um arquivo é incluído, o código herda o
[escopo de variáveis](language.variables.scope.md) da
da linha que a inclusão ocorrer. Qualquer variável disponível no arquivo
que o incluiu estará disponível no arquivo incluído, daquela linha
em diante.
Entretanto, todas as funções e classes definidas no arquivo incluído
estarão no escopo global.

**Exemplo #1 Exemplo básico do construtor `include`**

```
vars.php
<?php

$color = 'green';
$fruit = 'apple';

?>

test.php
<?php

echo "A $color $fruit"; // A

include 'vars.php';

echo "A $color $fruit"; // A green apple

?>
```

Se a inclusão ocorrer dentro de uma função,
todo o código contido no arquivo incluído irá se comportar
como se tivesse sido definido dentro da função. Portanto seguirá
o escopo de variáveis da função.
Uma exceção para essa regra são as [constantes mágicas](language.constants.magic.md) que são
interpretadas antes da inclusão ocorrer.

**Exemplo #2 Inclusão em funções**

```
<?php

function foo()
{
    global $color;

    include 'vars.php';

    echo "A $color $fruit";
}

/* vars.php está no escopo de foo() por isso *
* $fruit NÃO está disponível fora deste      *
* escopo. $color está, porque foi declarada  *
* como global.                               */

foo();                    // A green apple
echo "A $color $fruit";   // A green
```

Quando um arquivo é incluído, o interpretador sai do modo PHP e
entra no modo HTML no começo do arquivo incluído, e volta novamente
no final. Por esta razão, qualquer código dentro do arquivo incluído
que necessite ser executado como PHP deve estar entre
[tags válidas de início e
fim do PHP](language.basic-syntax.phpmode.md).

Se os "[empacotadores de inclusão de URL](filesystem.configuration.md#ini.allow-url-include)"
estiverem habilitados no PHP,
pode-se definir um arquivo a ser incluído usando uma URL (via HTTP ou
outro protocolo suportado - veja [Protocolos e empacotadores suportados](wrappers.md) para uma lista
de protocolos) ao invés de um caminho local. Se o servidor de destino interpretar
o arquivo incluído como PHP, variáveis podem ser passadas para o arquivo
incluído usando uma URL de requisição com HTTP GET. Isso não significa
a mesma coisa que incluir e compartilhar
o escopo de variáveis com o arquivo incluído; o script é executado
no servidor remoto e o resultado
é incluído no script local.

**Exemplo #3 Usando `include` via HTTP**

```
<?php

/* Este exemplo assume que www.exemplo.com.br está configurado para processar
* arquivos .php e não arquivos .txt. Além disso, 'Funciona' aqui significa
* que as variáveis $foo e $bar estão disponíveis dentro do arquivo incluído. */

// Não vai funcionar; arquivo.txt não foi tratado por www.exemplo.com.br como PHP
include 'http://www.exemplo.com.br/arquivo.txt?foo=1&bar=2';

// Não vai funcionar; procura por um arquivo chamado 'arquivo.php?foo=1&bar=2' no
// sistema de arquivos local.
include 'arquivo.php?foo=1&bar=2';

// Funciona.
include 'http://www.exemplo.com.br/arquivo.php?foo=1&bar=2';
```

**Aviso**

# Avisos de Segurança

Um arquivo remoto pode ser processado pelo servidor remoto (dependendo
da extensão do arquivo e se o servidor remoto executa, ou não,arquivos PHP), mas ainda
precisa produzir um código PHP válido pois será processado pelo
servidor local. Se o arquivo do servidor remoto deve ser processado como
um texto simples, a função [readfile()](function.readfile.md) é uma opção
muito melhor a ser usada. Caso contrário, deve-se ter um cuidado especial para
garantir que o servidor remoto produza um código PHP válido.

Veja também [Arquivos Remotos](features.remote-files.md),
[fopen()](function.fopen.md) e [file()](function.file.md) para informações
relacionadas.

Manipulando retornos: `include` retorna
**`false`** ao falhar e emite um aviso. Inclusões bem
sucedidas, ao menos que seja sobrescritas pelo arquivo incluído, retornam
`1`. É possível utilizar a declaração [return](function.return.md)
dentro do arquivo incluído para finalizar o processamento
e retornar para o arquivo que o incluiu. Além disso, é possível
retornar valor a partir do arquivo incluído. Pode-se usar o valor
do arquivo incluído como em uma função normal. Isso não é, entretanto,
possível quando incluímos arquivos remotos a menos que a saída do arquivo
remoto tenha [tags válidas de início e
fim do PHP](language.basic-syntax.phpmode.md) (como em um arquivo local). Pode-se declarar
as variáveis necessárias dentro dessas tags e estarão disponíveis
em qualquer ponto do arquivo que o incluiu.

Pelo fato do `include` ser um construtor especial da linguagem,
parênteses não são necessários ao redor do argumento. Tome cuidado ao comparar
com o valor de retorno.

**Exemplo #4 Comparando valores de retorno do include**

```
<?php
// não vai funcionar, avaliado como include(('vars.php') == TRUE), isto é: include('1')
if (include('vars.php') == TRUE) {
    echo 'OK';
}

// funciona
if ((include 'vars.php') == TRUE) {
    echo 'OK';
}
```

**Exemplo #5 `include` e a instrução [return](function.return.md)**

```
return.php
<?php

$var = 'PHP';

return $var;

?>

noreturn.php
<?php

$var = 'PHP';

?>

testreturns.php
<?php

$foo = include 'return.php';

echo $foo; // imprime 'PHP'

$bar = include 'noreturn.php';

echo $bar; // imprime 1

?>
```

`$bar` tem o valor `1` porque a inclusão
foi bem sucedida. Note a diferença entre os dois exemplos. O primeiro usa
[return](function.return.md), enquanto o outro não.
Se o arquivo não puder ser incluído, **`false`** é retornado e um
**`E_WARNING`** emitido.

Se funções forem definidas no arquivo incluído, elas podem ser utilizadas
no arquivo principal independente se estão antes ou depois do [return](function.return.md).
Se o arquivo for incluído duas vezes, o PHP emitirá um erro fatal, pois as
funções já foram declaradas.
É recomendado usar o [include\_once](function.include-once.md) ao invés de
verificar se o arquivo já foi incluído manualmente dentro
do arquivo incluído.

Outra forma de "incluir" um arquivo PHP em uma variável é capturar a
saída usando as [Funções de Controle
de Saída](ref.outcontrol.md) com o `include`. Por exemplo:

**Exemplo #6 Usando buffer de saída para incluir um arquivo PHP em uma string**

```
<?php
$string = get_include_contents('somefile.php');

function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}
```

Para automatizar a inclusão de arquivos nos scripts, veja também as configurações
[auto\_prepend\_file](ini.core.md#ini.auto-prepend-file) e
[auto\_append\_file](ini.core.md#ini.auto-append-file)
contidas no php.ini.

> **Nota**:
>
> Como esta é uma
> construção da linguagem e não uma função, ela não pode ser chamada usando
> [funções variáveis](functions.variable-functions.md)
> ou [argumentos nomeados](functions.arguments.md#functions.named-arguments).

Veja também [require](function.require.md), [require\_once](function.require-once.md),
[include\_once](function.include-once.md), [get\_included\_files()](function.get-included-files.md),
[readfile()](function.readfile.md), [virtual()](function.virtual.md), e
[include\_path](ini.core.md#ini.include-path).

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
