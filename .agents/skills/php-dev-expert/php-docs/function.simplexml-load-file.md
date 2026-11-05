# Interpreta um arquivo XML e o transforma em um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.simplexml-load-file.php

---

# simplexml\_load\_file

(PHP 5, PHP 7, PHP 8)

simplexml\_load\_file — 
Interpreta um arquivo XML e o transforma em um objeto

### Descrição

function **simplexml\_load\_file**(  
    [string](language.types.string.md) `$filename`,  
    [?](language.types.null.md)[string](language.types.string.md) `$class_name` = **`SimpleXMLElement::class`**,  
    [int](language.types.integer.md) `$options` = 0,  
    [string](language.types.string.md) `$namespace_or_prefix` = "",  
    [bool](language.types.boolean.md) `$is_prefix` = **`false`**  
): [SimpleXMLElement](class.simplexmlelement.md)|[false](language.types.singleton.md)

Converte o documento XML bem-formado no arquivo indicado em um objeto.

### Parâmetros

`filename`
:   Caminho para o arquivo XML

`class_name`
:   É possível utilizar o parâmetro opcional
    **simplexml\_load\_file()** para retornar um objeto da
    classe especificada. Esta classe deve estender
    [SimpleXMLElement](class.simplexmlelement.md).

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

**Exemplo #1 Interpreta um documento XML**

```
<?php
// O arquivo examples/book.xml contém um documento XML com um elemento root
// e ao menos um elemento /[root]/title.

if (file_exists('examples/book.xml')) {
    $xml = simplexml_load_file('examples/book.xml');

    print_r($xml);
} else {
    exit('Falha ao abrir examples/book.xml.');
}
?>
```

Este script mostrará, em caso de sucesso:

```
SimpleXMLElement Object
(
  [book] => Array
  ...
)
```

Nesse ponto já é possível utilizar `$xml->title`
e quaisquer outros elementos.

### Veja também

- [simplexml\_load\_string()](function.simplexml-load-string.md) - Interpreta uma string XML e a transforma em um objeto
- [SimpleXMLElement::\_\_construct()](simplexmlelement.construct.md) - Cria um novo objeto SimpleXMLElement
- [Lidando com erros XML](simplexml.examples-errors.md)
- [libxml\_use\_internal\_errors()](function.libxml-use-internal-errors.md) - Desabilita erros da libxml e permite que o usuário obtenha informações de erro conforme necessário
- [Uso Básico de SimpleXML](simplexml.examples-basic.md)
- [libxml\_set\_streams\_context()](function.libxml-set-streams-context.md) - Define o contexto de fluxos para o próximo carregamento ou escrita de documento libxml

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
