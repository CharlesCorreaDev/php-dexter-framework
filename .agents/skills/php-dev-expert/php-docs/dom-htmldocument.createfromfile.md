# Analisa um documento HTML a partir de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-htmldocument.createfromfile.php

---

# Dom\HTMLDocument::createFromFile

(PHP 8 >= 8.4.0)

Dom\HTMLDocument::createFromFile — Analisa um documento HTML a partir de um arquivo

### Descrição

public static function **Dom\HTMLDocument::createFromFile**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$options` = 0, [?](language.types.null.md)[string](language.types.string.md) `$overrideEncoding` = **`null`**): [Dom\HTMLDocument](class.dom-htmldocument.md)

Analisa um documento HTML a partir de um arquivo,
de acordo com o padrão vigente.

### Parâmetros

`path`
:   O caminho para o arquivo a ser serializado.

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
  `path` contiver bytes nulos ou contiver
  `"%00"`.
- Lança uma exceção [ValueError](class.valueerror.md) se
  `options` contiver uma opção inválida.
- Lança uma exceção [ValueError](class.valueerror.md) s
  `overrideEncoding` for uma codificação desconhecida.
- Lança uma [Exception](class.exception.md) se
  o arquivo não puder ser aberto.

### Notas

> **Nota**:
>
> Espaço em branco nas etiquetas `html` e `head`
> não é considerado significativo e pode perder a formatação.

### Veja também

- [Dom\HTMLDocument::createEmpty()](dom-htmldocument.createempty.md) - Cria um documento HTML vazio
- [Dom\HTMLDocument::createFromString()](dom-htmldocument.createfromstring.md) - Analisa um documento HTML a partir de uma string

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
