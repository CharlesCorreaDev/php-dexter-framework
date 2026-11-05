# Cria um novo objeto SimpleXMLElement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.construct.php

---

# SimpleXMLElement::\_\_construct

(PHP 5, PHP 7, PHP 8)

SimpleXMLElement::\_\_construct — 
Cria um novo objeto SimpleXMLElement

### Descrição

public function **SimpleXMLElement::\_\_construct**(  
    [string](language.types.string.md) `$data`,  
    [int](language.types.integer.md) `$options` = 0,  
    [bool](language.types.boolean.md) `$dataIsURL` = **`false`**,  
    [string](language.types.string.md) `$namespaceOrPrefix` = "",  
    [bool](language.types.boolean.md) `$isPrefix` = **`false`**  
)

Cria um novo objeto [SimpleXMLElement](class.simplexmlelement.md).

### Parâmetros

`data`
:   Uma string XML bem formada ou, um caminho ou URL para um documento XML se
    `dataIsURL` for **`true`**.

`options`
:   Opcionalmente utilizado para especificar [parâmetros adicionais da Libxml](libxml.constants.md), que afetam a leitura de documentos XML. Opções que afetam
    a saída de documentos XML (por exemplo, **`LIBXML_NOEMPTYTAG`**) é ignorada silenciosamente.

    > **Nota**:
    >
    > Pode ser necessário passar **`LIBXML_PARSEHUGE`**
    > para poder processar XML profundamente aninhados ou nós de texto muito grandes.

`dataIsURL`
:   Por padrão, `dataIsURL` é **`false`**. Utilize **`true`**
    para especificar que o parâmetro `data` é um caminho ou URL
    para um documento XML ao invés de [string](language.types.string.md).

`namespaceOrPrefix`
:   Prefixo ou URI do namespace.

`isPrefix`
:   **`true`** se `namespaceOrPrefix` é um prefixo, **`false`** se é uma URI;
    o padrão será **`false`**.

### Erros/Exceções

Produz uma mensagem de erro **`E_WARNING`** para cada erro
encontrado nos dados do XML e, adicionalmente, dispara uma [Exception](class.exception.md) se as informações no XML
não puderem ser interpretadas.

**Dica**

Utilize a função [libxml\_use\_internal\_errors()](function.libxml-use-internal-errors.md) para suprimir todos os erros
XML, e a função [libxml\_get\_errors()](function.libxml-get-errors.md) para iterá-los,
depois.

### Examples

> **Nota**:
>
> Os exemplos listados podem incluir o arquivo `examples/simplexml-data.php`,
> que referem-se a uma string XML encontrada no primeiro exemplo
> do guia de [uso básico](simplexml.examples-basic.md).

**Exemplo #1 Cria um objeto SimpleXMLElement**

```
<?php

include 'examples/simplexml-data.php';

$sxe = new SimpleXMLElement($xmlstr);
echo $sxe->filme[0]->titulo;

?>
```

O exemplo acima produzirá:

```
PHP: Nos Bastidores do Interpretador
```

**Exemplo #2 Cria um objeto SimpleXMLElement de uma URL**

```
<?php

$sxe = new SimpleXMLElement('http://example.org/document.xml', 0, true);
echo $sxe->asXML();

?>
```

### Veja também

- [Uso Básico de SimpleXML](simplexml.examples-basic.md)
- [simplexml\_load\_string()](function.simplexml-load-string.md) - Interpreta uma string XML e a transforma em um objeto
- [simplexml\_load\_file()](function.simplexml-load-file.md) - Interpreta um arquivo XML e o transforma em um objeto
- [Lidando com erros XML](simplexml.examples-errors.md)
- [libxml\_use\_internal\_errors()](function.libxml-use-internal-errors.md) - Desabilita erros da libxml e permite que o usuário obtenha informações de erro conforme necessário
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
