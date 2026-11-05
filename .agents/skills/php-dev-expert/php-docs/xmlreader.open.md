# Define o URI que contém o XML a ser analisado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.open.php

---

# XMLReader::open

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::open — Define o URI que contém o XML a ser analisado

### Descrição

public static function **XMLReader::open**([string](language.types.string.md) `$uri`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [XMLReader](class.xmlreader.md)

public function **XMLReader::open**([string](language.types.string.md) `$uri`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

Define o URI que contém o documento XML a ser analisado.

### Parâmetros

`uri`
:   URI apontando para o documento.

`encoding`
:   A codificação do documento ou **`null`**.

`flags`
:   Uma máscara de bits das constantes
    [LIBXML\_\*](libxml.constants.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. Se chamado estaticamente, retorna um
[XMLReader](class.xmlreader.md) ou **`false`** em caso de falha.

### Erros/Exceções

- Passar um `encoding` inválido lançará um
  [ValueError](class.valueerror.md).
- Este método pode ser chamado estaticamente, mas antes do PHP 8.0.0 gerava um
  erro **`E_DEPRECATED`** neste caso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Passar um `encoding` inválido lançará um [ValueError](class.valueerror.md). |
| 8.0.0 | **XMLReader::open()** agora é declarado como método estático, mas ainda pode ser chamado em uma instância de [XMLReader](class.xmlreader.md). |

### Veja também

- [XMLReader::XML()](xmlreader.xml.md) - Define os dados contendo o XML a ser analisado
- [XMLReader::close()](xmlreader.close.md) - Fecha a entrada XMLReader

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
