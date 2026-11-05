# Interpreta um arquivo de configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.parse-ini-file.php

---

# parse\_ini\_file

(PHP 4, PHP 5, PHP 7, PHP 8)

parse\_ini\_file — Interpreta um arquivo de configuração

### Descrição

function **parse\_ini\_file**([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$process_sections` = **`false`**, [int](language.types.integer.md) `$scanner_mode` = **`INI_SCANNER_NORMAL`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**parse\_ini\_file()** carrega o arquivo INI
especificado em `filename` e retorna
as configurações contidas nele em um array associativo.

A estrutura do arquivo INI é a mesma do php.ini.

**Aviso**

Esta função não deve ser usada com entradas não confiáveis a menos que
`scanner_mode` seja igual a **`INI_SCANNER_RAW`**,
já que a saída analisada pode conter valores de constantes
sensíveis como as que contêm senhas de banco de dados.

### Parâmetros

`filename`
:   O nome do arquivo INI sendo interpretado. Se um caminho relativo for usado,
    será avaliado relativamente ao diretório atual de trabalho, e depois no caminho
    [include\_path](ini.core.md#ini.include-path).

`process_sections`
:   Definindo o parâmetro `process_sections`
    para **`true`**, obtém-se um array multidimensional com os nomes
    das seções e configurações incluídos. O padrão para
    `process_sections` é **`false`**

`scanner_mode`
:   Pode ser **`INI_SCANNER_NORMAL`** (padrão) ou
    **`INI_SCANNER_RAW`**. Se **`INI_SCANNER_RAW`**
    for fornecido, os valores das opções não serão interpretados.

    A partir do PHP 5.6.1, também pode ser especificado como **`INI_SCANNER_TYPED`**.
    Nesse modo, os tipos boolean, null e integer são preservados quando possível.
    Os valores string `"true"`, `"on"` e `"yes"`
    são convertidos em **`true`**. `"false"`, `"off"`, `"no"`
    e `"none"` são considerados **`false`**. `"null"` é convertido para **`null`**
    no modo tipado. Além disso, todas as strings numéricas são convertidas para o tipo inteiro, se possível.

### Valor Retornado

As configurações são retornadas como um [array](language.types.array.md) associativo em caso de sucesso,
e **`false`** em caso de falha.

### Examples

**Exemplo #1 Conteúdo de sample.ini**

```
; Este é um arquivo de configuração de exemplo
; Comentários iniciam com ';', como no php.ini

[primeira_secao]
um = 1
cinco = 5
animal = PASSARO

[segunda_secao]
path = "/usr/local/bin"
URL = "http://www.example.com/~username"

[terceira_secao]
versaophp[] = "5.0"
versaophp[] = "5.1"
versaophp[] = "5.2"
versaophp[] = "5.3"

urls[svn] = "http://svn.php.net"
urls[git] = "http://git.php.net"
```

**Exemplo #2 Exemplo de **parse\_ini\_file()****

[Constantes](language.constants.md) (mas não "constantes mágicas" como **`__FILE__`**)
também podem ser interpretadas
no arquivo INI. Se for definida uma constante como um valor INI antes
de executar **parse\_ini\_file()**, ela será intergrada aos
resultados. Somente valores INI são avaliados e o valor deve ser apenas a constante. Por exemplo:

```
<?php

define('PASSARO', 'Pássaro Dodo');

// Interpreta sem as seções
$ini_array = parse_ini_file("sample.ini");
print_r($ini_array);

// Interpreta com as seções
$ini_array = parse_ini_file("sample.ini", true);
print_r($ini_array);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [um] => 1
    [cinco] => 5
    [animal] => Pássaro Dodo
    [path] => /usr/local/bin
    [URL] => http://www.example.com/~username
    [versaophp] => Array
        (
            [0] => 5.0
            [1] => 5.1
            [2] => 5.2
            [3] => 5.3
        )

    [urls] => Array
        (
            [svn] => http://svn.php.net
            [git] => http://git.php.net
        )

)
Array
(
    [primeira_secao] => Array
        (
            [um] => 1
            [cinco] => 5
            [animal] = Pássaro Dodo
        )

    [segunda_secao] => Array
        (
            [path] => /usr/local/bin
            [URL] => http://www.example.com/~username
        )

    [terceira_secao] => Array
        (
            [versaophp] => Array
                (
                    [0] => 5.0
                    [1] => 5.1
                    [2] => 5.2
                    [3] => 5.3
                )

            [urls] => Array
                (
                    [svn] => http://svn.php.net
                    [git] => http://git.php.net
                )

        )

)
```

**Exemplo #3 **parse\_ini\_file()** interpretando um arquivo php.ini**

```
<?php
// Uma função simples usada para comparar os resultados abaixo
function sim_nao($expression)
{
    return($expression ? 'Sim' : 'Não');
}

// Obtém o caminho para o php.ini usando a função php_ini_loaded_file()
$ini_path = php_ini_loaded_file();

// Interpreta o php.ini
$ini = parse_ini_file($ini_path);

// Mostra e compara os valores, note que usar get_cfg_var()
// levará aos mesmos resultados para interpretado e carregado aqui
echo '(interpretado) magic_quotes_gpc = ' . sim_nao($ini['magic_quotes_gpc']) . PHP_EOL;
echo '(carregado) magic_quotes_gpc = ' . sim_nao(get_cfg_var('magic_quotes_gpc')) . PHP_EOL;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
(parsed) magic_quotes_gpc = Sim
(loaded) magic_quotes_gpc = Sim
```

**Exemplo #4 Interpolação de Valor**

Além de avaliar constantes, alguns caracteres possuem significado especial em um valor INI.
Adicionamente, variáveis de ambiente e opções de configuração previamente definidas (consulte [get\_cfg\_var()](function.get-cfg-var.md)) podem ser lidas usando
a sintaxe `${}`.

```
; | é usado par OR bit a bit
tres = 2|3

; & é usado para AND bit a bit
quatro = 6&5

; ^ é usado para XOR bit a bit
cinco = 3^6

; ~ é usado para inversão bit a bit
dois_negativo = ~1

; () é usado para agrupamento
sete = (8|7)&(6|5)

; Interpola a variável de ambiente PATH
path = ${PATH}

; Interpola a opção de configuração 'memory_limit'
limite_de_memoria_configurado = ${memory_limit}
```

**Exemplo #5 Fazendo Escape de Caracteres**

Alguns caracteres têm significado especial em strings com aspas duplas e devem ser escapados pela barra invertida prefixada.
Primeiramente, eles são as aspas duplas `"` como marcação dos limites, e a barra invertida `\` em si
(se seguida por um dos caracteres especiais):

```
fala = "Ela disse \"Exatamente meu ponto\"." ; Resulta em uma string contendo aspas duplas.
dica = "Use \\\" para escapar aspas duplas" ; Resulta em: Use \" para escapar aspas duplas
```

Há uma excecão feita para caminhos do tipo Windows: é possível não escapar barra invertida no final
se a string entre aspas for diretamente seguida por uma quebra de linha:

```
save_path = "C:\Temp\"
```

Se for necessário escapar aspas duplas seguidas pode quebra de linha em um valor com várias linhas,
é possível usar concatenação de valores da seguinte forma
(há uma string com aspas duplas diretamente seguida por outra):

```
long_text = "Lorem \"ipsum\"""
 dolor" ; Resulta em: Lorem "ipsum"\n dolor
```

Outro caractere com significado especial é `$` (sinal de cifrão).
Deve ser escapado se for seguido de chave:

```
code = "\${test}"
```

Escapar caracteres não é suportado no modo **`INI_SCANNER_RAW`**
(neste modo todos os caracateres são processados como eles são).

Note que o interpretador INI não suporta sequências escape padrões (`\n`, `\t` etc.).
Se necessário, faça pós processamento do resultado de **parse\_ini\_file()** com a função [stripcslashes()](function.stripcslashes.md).

### Notas

> **Nota**:
>
> Essa função não tem relação nenhuma com o
> arquivo php.ini. Ele já está processado no momento
> em o script é executado. Esta função pode ser usada para
> ler os arquivos de configuração da própria aplicação do usuário.

> **Nota**:
>
> Se um valor no arquivo INI tiver algum caractere não
> alfanumérico, ele precisará ser envolvido em aspas duplas (").

> **Nota**:
>
> Existem algumas palavras reservadas que não podem ser usadas como
> chaves em arquivos INI. Elas incluem: `null`, `yes`,
> `no`, `true`, `false`,
> `on`, `off` e `none`.
> Valores `null`, `off`, `no` e
> `false` resultam em `""`, e os valores
> `on`, `yes` e `true` resultam
> em `"1"`, a menos que o modo **`INI_SCANNER_TYPED`** seja usado.
> Os caracteres `?{}|&~!()^"` não devem ser usados em nenhum lugar da
> chave e têm um significado especial no valor.

> **Nota**:
>
> Entradas sem um sinal de igualdade são ignoradas. Por exemplo, "foo"
> é ignorado enquanto que "bar =" é interpretado e adicionado com um valor
> vazio. Por exemplo, o MySQL tem uma configuração "no-auto-rehash"
> no arquivo my.cnf que não leva um valor, portanto
> ela é ignorada.

> **Nota**:
>
> Arquivos INI são feralmente tratados como texto puro por servidores web e depois enviados aos navegadores se requisitados.
> Isto quer dizer que para segurança deve-se manter os arquivos INI fora da raiz de documentos da web ou reconfigurar seu
> servidor web para não disponibilizá-los. Falha em fazer isso pode introduzir um risco de segurança.

### Veja também

- [parse\_ini\_string()](function.parse-ini-string.md) - Interpreta uma string de configuração

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
