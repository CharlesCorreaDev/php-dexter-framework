# Altera o carregador padrão de entidades externas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.libxml-set-external-entity-loader.php

---

# libxml\_set\_external\_entity\_loader

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

libxml\_set\_external\_entity\_loader — Altera o carregador padrão de entidades externas

### Descrição

function **libxml\_set\_external\_entity\_loader**([?](language.types.null.md)[callable](language.types.callable.md) `$resolver_function`): [true](language.types.singleton.md)

Altera o carregador padrão de entidades externas.
Pode ser usado para suprimir a expansão de entidades externas arbitrárias para evitar ataques XXE,
mesmo quando **`LIBXML_NOENT`** tiver sido definida para a operação respectiva,
e normalmente é preferível em relação à chamada a [libxml\_disable\_entity\_loader()](function.libxml-disable-entity-loader.md).

### Parâmetros

`resolver_function`
:   Uma função/método do tipo [callable](language.types.callable.md) com a seguinte assinatura:

    function resolver([?](language.types.null.md)[string](language.types.string.md) `$public_id`, [string](language.types.string.md) `$system_id`, [array](language.types.array.md) `$context`): [resource](language.types.resource.md)|[string](language.types.string.md)|[null](language.types.null.md)

    `public_id`
    :   O ID público.

    `system_id`
    :   O ID do sistema.

    `context`
    :   Um array com os quatro elementos: `"directory"`, `"intSubName"`,
        `"extSubURI"` e `"extSubSystem"`.

    Esta função deve retornar um [resource](language.types.resource.md), uma [string](language.types.string.md) a partir da qual um recurso possa ser
    aberto. Se **`null`** for retornado, a resolução de referência de entidade irá falhar.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora o tipo de retorno é **`true`**; antes era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Exemplo de **libxml\_set\_external\_entity\_loader()****

```
<?php
$xml = <<<XML
<!DOCTYPE foo PUBLIC "-//FOO/BAR" "http://example.com/foobar">
<foo>bar</foo>
XML;

$dtd = <<<DTD
<!ELEMENT foo (#PCDATA)>
DTD;

libxml_set_external_entity_loader(
    function ($public, $system, $context) use($dtd) {
        var_dump($public);
        var_dump($system);
        var_dump($context);
        $f = fopen("php://temp", "r+");
        fwrite($f, $dtd);
        rewind($f);
        return $f;
    }
);

$dd = new DOMDocument;
$r  = $dd->loadXML($xml);

var_dump($dd->validate());
?>
```

O exemplo acima produzirá:

```
string(10) "-//FOO/BAR"
string(25) "http://example.com/foobar"
array(4) {
  ["directory"]=>
  NULL
  ["intSubName"]=>
  NULL
  ["extSubURI"]=>
  NULL
  ["extSubSystem"]=>
  NULL
}
bool(true)
```

### Veja também

- [libxml\_disable\_entity\_loader()](function.libxml-disable-entity-loader.md) - Desabilita a capacidade de carregar entidades externas
- [libxml\_get\_external\_entity\_loader()](function.libxml-get-external-entity-loader.md) - Obtém o carregador atual de entidade externa

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
