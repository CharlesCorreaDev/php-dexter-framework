# Gera a string de consulta em formato URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.http-build-query.php

---

# http\_build\_query

(PHP 5, PHP 7, PHP 8)

http\_build\_query — Gera a string de consulta em formato URL

### Descrição

function **http\_build\_query**(  
    [array](language.types.array.md)|[object](language.types.object.md) `$data`,  
    [string](language.types.string.md) `$numeric_prefix` = "",  
    [?](language.types.null.md)[string](language.types.string.md) `$arg_separator` = **`null`**,  
    [int](language.types.integer.md) `$encoding_type` = **`PHP_QUERY_RFC1738`**  
): [string](language.types.string.md)

Gera a string de consulta em formato URL a partir de um array
associativo (ou indexado).

### Parâmetros

`data`
:   Pode ser um array ou objeto contendo propriedades.

    Se `data` é um array, este pode ser de
    estrutura simples de uma dimensão, ou um array multidimensional (que por sua vez
    pode conter outros arrays).

    Se `data` é um objeto, então somente propriedades
    públicas serão incorporadas ao resultado.

    > **Nota**:
    >
    > O método mágico [\_\_toString()](language.oop5.magic.md#object.tostring)
    > não é chamado quando um objeto é avaliado. Para usar a representação em string
    > de um objeto na query string, o objeto precisa ser explicitamente convertido para uma string.

`numeric_prefix`
:   Se índices numéricos são usados no array base e esse parâmetro for
    fornecido, o número índice dos elementos será prefixado com seu valor,
    apenas no array base.

    Isso é feito para permitir nomes de variáveis aceitáveis quando os dados
    forem decodificados pelo PHP ou por outra aplicação CGI posteriormente.

`arg_separator`
:   O argumento separador. Se não estiver definido ou **`null`**,
    [arg\_separator.output](ini.core.md#ini.arg-separator.output)
    é usado para separar argumentos.

`encoding_type`
:   Por padrão, **`PHP_QUERY_RFC1738`**.

    Se `encoding_type` é
    **`PHP_QUERY_RFC1738`**, então a codificação é executada por
    [» RFC 1738](https://datatracker.ietf.org/doc/html/rfc1738) e o media type
    `application/x-www-form-urlencoded`, o que
    implica que os espaços são codificados com o sinal de mais(`+`).

    Se `encoding_type` é
    **`PHP_QUERY_RFC3986`**, então a codificação é executada
    de acordo com [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986), e
    os espaços serão codificados em porcentagem (`%20`).

### Valor Retornado

Retorna um string no formato de uma URL.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Anteriormente ao PHP 8.4.0, a propriedades [BackedEnum](class.backedenum.md) de `data` eram convertidas para objetos, em vez de seus equivalentes escalares. |
| 8.0.0 | `arg_separator` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de uso de **http\_build\_query()****

```
<?php
$data = array(
    'foo' => 'bar',
    'baz' => 'boom',
    'cow' => 'milk',
    'null' => null,
    'php' => 'hypertext processor'
);

echo http_build_query($data) . "\n";
echo http_build_query($data, '', '&amp;');

?>
```

O exemplo acima produzirá:

```
foo=bar&baz=boom&cow=milk&php=hypertext+processor
foo=bar&amp;baz=boom&amp;cow=milk&amp;php=hypertext+processor
```

**Exemplo #2 **http\_build\_query()** com elementos indexados numericamente.**

```
<?php
$data = array('foo', 'bar', 'baz', null, 'boom', 'cow' => 'milk', 'php' => 'hypertext processor');

echo http_build_query($data) . "\n";
echo http_build_query($data, 'myvar_');
?>
```

O exemplo acima produzirá:

```
0=foo&1=bar&2=baz&4=boom&cow=milk&php=hypertext+processor
myvar_0=foo&myvar_1=bar&myvar_2=baz&myvar_4=boom&cow=milk&php=hypertext+processor
```

**Exemplo #3 **http\_build\_query()** com arrays complexos**

```
<?php
$data = array(
    'user' => array(
        'name' => 'Bob Smith',
        'age'  => 47,
        'sex'  => 'M',
        'dob'  => '5/12/1956'
    ),
    'pastimes' => array('golf', 'opera', 'poker', 'rap'),
    'children' => array(
        'bobby' => array('age'=>12, 'sex'=>'M'),
        'sally' => array('age'=>8, 'sex'=>'F')
    ),
    'CEO'
);

echo http_build_query($data, 'flags_');
?>
```

O exemplo acima produzirá: (quebra de linhas para legibilidade)

```
user%5Bname%5D=Bob+Smith&user%5Bage%5D=47&user%5Bsex%5D=M&
user%5Bdob%5D=5%2F12%2F1956&pastimes%5B0%5D=golf&pastimes%5B1%5D=opera&
pastimes%5B2%5D=poker&pastimes%5B3%5D=rap&children%5Bbobby%5D%5Bage%5D=12&
children%5Bbobby%5D%5Bsex%5D=M&children%5Bsally%5D%5Bage%5D=8&
children%5Bsally%5D%5Bsex%5D=F&flags_0=CEO
```

> **Nota**:
>
> Apenas o elemento indexado numericamente no array base "CEO" recebeu um
> prefixo. Os outros índices numéricos, encontrados abaixo de "pastimes", não
> requerem uma string de prefixo para serem nomes de variáveis aceitáveis.

**Exemplo #4 Usando **http\_build\_query()** com um objeto**

```
<?php
class parentClass {
    public    $pub      = 'publicParent';
    protected $prot     = 'protectedParent';
    private   $priv     = 'privateParent';
    public    $pub_bar  = null;
    protected $prot_bar = null;
    private   $priv_bar = null;

    public function __construct(){
        $this->pub_bar  = new childClass();
        $this->prot_bar = new childClass();
        $this->priv_bar = new childClass();
    }
}

class childClass {
    public    $pub  = 'publicChild';
    protected $prot = 'protectedChild';
    private   $priv = 'privateChild';
}

$parent = new parentClass();

echo http_build_query($parent);
?>
```

O exemplo acima produzirá:

```
pub=publicParent&pub_bar%5Bpub%5D=publicChild
```

**Exemplo #5 Usando **http\_build\_query()** com objetos contendo
[\_\_toString()](language.oop5.magic.md#object.tostring)**

```
<?php
class Foo {
    public $publicProperty = 'visible';

    public function __toString() {
        return "bar";
    }
}

$params = array(
    'a' => 'b',
    'foo' => new Foo()
);

// Sem conversão, http_build_query lê as propriedades públicas
echo http_build_query($params) . "\n";

// Com conversão explícita, http_build_query usa o output de __toString()
$params['foo'] = (string) new Foo();
echo http_build_query($params) . "\n";
?>
```

O exemplo acima produzirá:

```
a=b&foo%5BpublicProperty%5D=visible
a=b&foo=bar
```

### Veja também

- [parse\_str()](function.parse-str.md) - Interpreta uma string como uma requisição URL
- [parse\_url()](function.parse-url.md) - Analisa uma URL e retorna seus componentes
- [urlencode()](function.urlencode.md) - Codifica uma string no formato URL
- [array\_walk()](function.array-walk.md) - Aplica uma determinada função em cada elemento de um array

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
