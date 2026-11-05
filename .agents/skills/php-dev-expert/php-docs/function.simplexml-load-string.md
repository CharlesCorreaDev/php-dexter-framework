# Interpreta uma string XML e a transforma em um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.simplexml-load-string.php

---

# simplexml\_load\_string

(PHP 5, PHP 7, PHP 8)

simplexml\_load\_string — 
Interpreta uma string XML e a transforma em um objeto

### Descrição

function **simplexml\_load\_string**(  
    [string](language.types.string.md) `$data`,  
    [?](language.types.null.md)[string](language.types.string.md) `$class_name` = **`SimpleXMLElement::class`**,  
    [int](language.types.integer.md) `$options` = 0,  
    [string](language.types.string.md) `$namespace_or_prefix` = "",  
    [bool](language.types.boolean.md) `$is_prefix` = **`false`**  
): [SimpleXMLElement](class.simplexmlelement.md)|[false](language.types.singleton.md)

Recebe uma string XML bem-formada e a retorna como um objeto.

### Parâmetros

`data`
:   Uma string XML bem-formada

`class_name`
:   Pode-se utilizar o parâmetro opcional
    **simplexml\_load\_string()**
    para retornar um objeto da classe especificada.
    Esta classe deve estender [SimpleXMLElement](class.simplexmlelement.md).

`options`
:   [Bit a bit `OR`](language.operators.bitwise.md)
    das [constantes de opções da libxml](libxml.constants.md).

`namespace_or_prefix`
:   Prefixo ou URI do namespace.

`is_prefix`
:   **`true`** se `namespace_or_prefix` for um prefixo, **`false`** se for URI;
    o padrão é **`false`**.

### Valor Retornado

Retorna um objeto ([object](language.types.object.md)) da classe [SimpleXMLElement](class.simplexmlelement.md) com
propriedades contendo os dados do documento XML, ou **`false`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Erros/Exceções

Produz uma mensagem de erro **`E_WARNING`** para cada erro
encontrado nos dados XML.

**Dica**

Utilize a função [libxml\_use\_internal\_errors()](function.libxml-use-internal-errors.md) para suprimir todos os
erros XML e a função [libxml\_get\_errors()](function.libxml-get-errors.md) para iterar sobre eles
posteriormente.

### Examples

**Exemplo #1 Interpretar uma string XML**

```
<?php
$string = <<<XML
<?xml version='1.0'?>
<document>
 <title>Forty What?</title>
 <from>Joe</from>
 <to>Jane</to>
 <body>
  I know that's the answer -- but what's the question?
 </body>
</document>
XML;

$xml = simplexml_load_string($string);

print_r($xml);
?>
```

O exemplo acima produzirá:

```
SimpleXMLElement Object
(
    [title] => Forty What?
    [from] => Joe
    [to] => Jane
    [body] =>
  I know that's the answer -- but what's the question?

)
```

Nesse ponto já é possível utilizar `$xml->body`
e afins.

### Veja também

- [simplexml\_load\_file()](function.simplexml-load-file.md) - Interpreta um arquivo XML e o transforma em um objeto
- [SimpleXMLElement::\_\_construct()](simplexmlelement.construct.md) - Cria um novo objeto SimpleXMLElement
- [Lidando com erros XML](simplexml.examples-errors.md)
- [libxml\_use\_internal\_errors()](function.libxml-use-internal-errors.md) - Desabilita erros da libxml e permite que o usuário obtenha informações de erro conforme necessário
- [Uso Básico de SimpleXML](simplexml.examples-basic.md)

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
