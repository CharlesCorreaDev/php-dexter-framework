# Altera o nome qualificado ou namespace de um atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-attr.rename.php

---

# Dom\Attr::rename

(PHP 8 >= 8.4.0)

Dom\Attr::rename — Altera o nome qualificado ou namespace de um atributo

### Descrição

public function **Dom\Attr::rename**([?](language.types.null.md)[string](language.types.string.md) `$namespaceURI`, [string](language.types.string.md) `$qualifiedName`): [void](language.types.void.md)

Este método altera o nome qualificado ou namespace de um atributo.

### Parâmetros

`namespaceURI`
:   O novo URI de namespace do atributo.

`qualifiedName`
:   O novo nome qualificado do atributo.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

[DOMException](class.domexception.md) com código **`Dom\NAMESPACE_ERR`**
:   Gerado se houver um erro no namespace, conforme determinado por
    `qualifiedName`.

[DOMException](class.domexception.md) com código **`Dom\INVALID_MODIFICATION_ERR`**
:   Gerado se já existir um atributo no elemento com o mesmo
    nome qualificado.

### Examples

**Exemplo #1 Exemplo de **Dom\Attr::rename()** para alterar o namespace e o nome qualificado**

Isto altera o nome qualificado de `my-attr` para
`my-new-attr` e também altera seu namespace para
`urn:my-ns`.

```
<?php

$doc = Dom\XMLDocument::createFromString('<root my-attr="value"/>');

$root = $doc->documentElement;
$attribute = $root->attributes['my-attr'];
$attribute->rename('urn:my-ns', 'my-new-attr');

echo $doc->saveXml();

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="UTF-8"?>
<root xmlns:ns1="urn:my-ns" ns1:my-new-attr="value"/>
```

**Exemplo #2 Exemplo de **Dom\Attr::rename()** para alterar somente o nome qualificado**

Isto apenas altera o nome qualificado de `my-attr`
e mantém o namespace URI igual.

```
<?php

$doc = Dom\XMLDocument::createFromString('<root my-attr="value"/>');

$root = $doc->documentElement;
$attribute = $root->attributes['my-attr'];
$attribute->rename($attribute->namespaceURI, 'my-new-attr');

echo $doc->saveXml();

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="UTF-8"?>
<root my-new-attr="value"/>
```

### Notas

> **Nota**:
>
> Às vezes é necessário alterar o nome qualificado e o URI
> do namespace juntos em uma única etapa para não quebrar
> nenhuma regra do namespace.

### Veja também

- **Dom\Element::rename()**

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
