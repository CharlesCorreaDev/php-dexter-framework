# Alterações incompatíveis com versões anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration73.incompatible.php

---

## Alterações incompatíveis com versões anteriores

### Núcleo do PHP

#### Interpretação do rótulo de finalização Heredoc/Nowdoc

Devido à introdução da [sintaxe flexível
heredoc/nowdoc](migration73.new-features.md#migration73.new-features.core.heredoc), doc string que contém o rótulo final dentro de seu corpo
pode causar erros de sintaxe ou alteração na interpretação. Por exemplo em:

```
<?php
$str = <<<FOO
abcdefg
   FOO
FOO;
?>
```

A ocorrência recuada de `FOO` não tinha anteriormente nenhum
significado especial. Agora será interpretado como o final da string heredoc
e o seguinte `FOO;` causará um erro de sintaxe. Esse problema sempre
pode ser resolvido escolhendo um rótulo final que não ocorra
no conteúdo da string.

#### Continuar problemas com o comutador de segmentação Warning

As instruções `continue` direcionadas às estruturas de fluxo de controle do `switch`
agora gerarão um aviso. Em PHP, tais instruções
`continue` são equivalentes a
`break`, enquanto se comportam como `continue 2`
em outras linguagens.

```
<?php
while ($foo) {
    switch ($bar) {
      case "baz":
         continue;
         // Warning: "continue" targeting switch is equivalent to
         //          "break". Did you mean to use "continue 2"?
   }
}
?>
```

#### Interpretação estrita de chaves de strings inteiras em ArrayAccess

Acessos de array do tipo `$obj["123"]`, onde
`$obj` implementa [ArrayAccess](class.arrayaccess.md) e
`"123"`" é uma [string](language.types.string.md) literal de inteiro não
resultará mais em uma conversão implícita para inteiro, ou seja,
`$obj->offsetGet("123")` será chamado em vez de
`$obj->offsetGet(123)`. Isso corresponde ao comportamento existente
para não literais. O comportamento dos arrays não é afetado de forma alguma, eles
continuam a converter implicitamente chaves de string integrais em inteiros.

#### Propriedades estáticas não são mais separadas por atribuição de referência

No PHP, as propriedades estáticas são compartilhadas entre as classes herdadas, a menos que
a propriedade estática seja explicitamente substituída em uma classe filha. Porém, devido a um
artefato de implementação foi possível separar as propriedades estáticas atribuindo uma
referência. Essa brecha foi corrigida.

```
<?php
class Test {
    public static $x = 0;
}
class Test2 extends Test { }

Test2::$x = &$x;
$x = 1;

var_dump(Test::$x, Test2::$x);
// Antes:      int(0), int(1)
// Agora:      int(1), int(1)
?>
```

#### Referências retornadas por acessos de array e propriedade são imediatamente desempacotadas

As referências retornadas por acessos de array e propriedade agora são desempacotadas
como parte do acesso. Isso significa que não é mais possível modificar a
referência entre o acesso e o uso do valor acessado:

```
<?php
$arr = [1];
$ref =& $arr[0];
var_dump($arr[0] + ($arr[0] = 2));
// Antes: int(4), Agora: int(3)
?>
```

Isso torna consistente o comportamento de referências e não referências. Observe que
ler e escrever um valor dentro de uma única expressão permanece um comportamento
indefinido e pode mudar novamente no futuro.

#### Argumento de descompactação de Traversables com chaves não inteiras não é mais suportada

A descompactação de argumentos parou de funcionar com [Traversable](class.traversable.md)s
com chaves não inteiras. O código a seguir funcionou no PHP 5.6-7.2 por acidente.

```
<?php
function foo(...$args) {
    var_dump($args);
}
function gen() {
    yield 1.23 => 123;
}
foo(...gen());
?>
```

#### Diversos

O utilitário ext\_skel foi completamente redesenhado com
novas opções e algumas opções antigas removidas. Isso agora é escrito em PHP e não
possui dependências externas.

O suporte para BeOS foi descartado.

Exceções lançadas devido à conversão automática de avisos em exceções no modo
`EH_THROW` (por exemplo, algumas exceções [DateTime](class.datetime.md))
não preenchem mais o estado [error\_get\_last()](function.error-get-last.md). Dessa forma,
eles agora funcionam da mesma maneira que as exceções lançadas manualmente.

[TypeError](class.typeerror.md) agora relata tipos errados como
`int` e `bool` em vez de
`integer` e `boolean`, respectivamente.

As variáveis indefinidas passadas para [compact()](function.compact.md) agora serão
relatadas como um aviso.

[getimagesize()](function.getimagesize.md) e funções relacionadas agora relatam o tipo mime
de imagens BMP como `image/bmp` em vez de
`image/x-ms-bmp`, já que o primeiro foi registrado
na IANA (consulte [» RFC 7903](https://datatracker.ietf.org/doc/html/rfc7903)).

[stream\_socket\_get\_name()](function.stream-socket-get-name.md) agora retornará endereços IPv6
entre colchetes. Por exemplo, `"[::1]:1337"` será
retornado em vez de `"::1:1337"`.

### BCMath Matemática de Precisão Arbitrária

Todos os avisos lançados pelas [funções BCMath](ref.bc.md) agora
estão usando o tratamento de erros do PHP. Anteriormente, alguns avisos eram
gravados diretamente no stderr.

[bcmul()](function.bcmul.md) e [bcpow()](function.bcpow.md) agora retornam números
com a escala solicitada. Anteriormente, os números retornados podem ter omitido
zeros decimais à direita.

### IMAP, POP3 e NNTP

Os logins **rsh**/**ssh** são desabilitados por padrão.
Use [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) se
quiser ativá-los. Observe que a biblioteca IMAP não filtra os nomes
das caixas de correio antes de passá-los para o comando **rsh**/**ssh**,
portanto, passar dados não confiáveis para essa função com
**rsh**/**ssh** ativado é inseguro.

### Multibyte String

Devido ao suporte adicional para capturas nomeadas, os padrões `mb_ereg_*()`
usando capturas nomeadas se comportarão de maneira diferente. Em particular, as capturas
nomeadas farão parte das correspondências e [mb\_ereg\_replace()](function.mb-ereg-replace.md)
interpretará a sintaxe adicional. Consulte [Capturas
nomeadas](migration73.new-features.md#migration73.new-features.mbstring.named-captures) para obter mais informações.

### Melhorias na extensão MySQL

As instruções preparadas agora relatam corretamente os segundos fracionários para as colunas
`DATETIME`, `TIME` e
`TIMESTAMP` com especificador de decimais (por exemplo,
`TIMESTAMP(6)` ao usar microssegundos). Anteriormente, a
parte dos segundos fracionários era simplesmente omitida dos valores retornados.

### Funções do MySQL (PDO\_MYSQL)

As instruções preparadas agora relatam corretamente os segundos fracionários para as colunas
`DATETIME`, `TIME` e
`TIMESTAMP` com especificador de decimais (por exemplo,
`TIMESTAMP(6)` ao usar microssegundos). Anteriormente, a
parte dos segundos fracionários era simplesmente omitida dos valores retornados. Observe que
isso afeta apenas o uso de [PDO\_MYSQL](ref.pdo-mysql.md) com preparações emuladas desativadas
(por exemplo, usando a funcionalidade de preparação nativa). Declarações usando
conexões com **`PDO::ATTR_EMULATE_PREPARES`**=**`true`**
(que é o padrão) não foram afetadas pelo bug corrigido e já obtiveram os
valores de segundos fracionários apropriados do mecanismo.

### Reflection

A exportação de [Reflection](book.reflection.md) para string agora usa
`int` e `bool` em vez de
`integer` e `boolean`, respectivamente.

### Biblioteca Padrão PHP (SPL)

Se um autoloader [SPL](book.spl.md) lançar uma exceção,
os seguintes autoloaders não serão executados. Anteriormente, todos os autoloaders eram
executados e as exceções eram encadeadas.

### SimpleXML

Operações matemáticas envolvendo objetos [SimpleXML](book.simplexml.md) agora tratarão o texto como
um [int](language.types.integer.md) ou [float](language.types.float.md), o que for mais apropriado.
Anteriormente, os valores eram tratados como [int](language.types.integer.md)s incondicionalmente.

### Cookies recebidos

A partir do PHP 7.3.23, os *nomes* dos cookies recebidos não são
mais decodificados por url por motivos de segurança.

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
