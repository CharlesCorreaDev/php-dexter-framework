# Analisa um documento HTML a partir de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-htmldocument.createfromstring.php

---

# Dom\HTMLDocument::createFromString

(PHP 8 >= 8.4.0)

Dom\HTMLDocument::createFromString — Analisa um documento HTML a partir de uma string

### Descrição

public static function **Dom\HTMLDocument::createFromString**([string](language.types.string.md) `$source`, [int](language.types.integer.md) `$options` = 0, [?](language.types.null.md)[string](language.types.string.md) `$overrideEncoding` = **`null`**): [Dom\HTMLDocument](class.dom-htmldocument.md)

Analisa um documento HTML a partir de uma string,
de acordo com o padrão vigente.

### Parâmetros

`source`
:   A string contendo o HTML a ser analisado.

`options`
:   [Bit a bit `OR`](language.operators.bitwise.md)
    das [constantes de opções da libxml](libxml.constants.md).

    Também é possível passar **`Dom\HTML_NO_DEFAULT_NS`**
    para desabilitar o uso do namespace HTML e o elemento modelo.
    Isto só deve ser usado se as implicações forem adequadamente compreendidas.

`overrideEncoding`
:   A codificação na qual o documento foi criado.
    Se não informada, tentará determinar a codificação que é mais comumente usada.

### Valor Retornado

O documento analisado como uma instância de [Dom\HTMLDocument](class.dom-htmldocument.md).

### Erros/Exceções

- Lança uma exceção [ValueError](class.valueerror.md) se
  `options` contiver uma opção inválida.
- Lança uma exceção [ValueError](class.valueerror.md) s
  `overrideEncoding` for uma codificação desconhecida.

### Examples

**Exemplo #1 Exemplo de **Dom\HTMLDocument::createFromString()****

Analisa um documento.

```
<?php
$dom = Dom\HTMLDocument::createFromString(<<<'HTML'
<!DOCTYPE html>
<html>
<body>
    <p>Hello, world!</p>
</body>
</html>
HTML);
echo $dom->saveHtml();
?>
```

O exemplo acima produzirá:

```
<!DOCTYPE html><html><head></head><body>
    <p>Hello, world!</p>

</body></html>
```

### Notas

> **Nota**:
>
> Espaço em branco nas etiquetas `html` e `head`
> não é considerado significativo e pode perder a formatação.

### Veja também

- [Dom\HTMLDocument::createEmpty()](dom-htmldocument.createempty.md) - Cria um documento HTML vazio
- [Dom\HTMLDocument::createFromFile()](dom-htmldocument.createfromfile.md) - Analisa um documento HTML a partir de um arquivo

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
