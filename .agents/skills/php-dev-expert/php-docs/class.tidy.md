# A classe tidy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.tidy.php

---

# A classe [tidy](class.tidy.md)

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

## Introdução

Um nó HTML em um arquivo HTML, conforme detectado pelo tidy.

## Resumo da classe

class ****tidy****
{

/\* Propriedades \*/

public
?[string](language.types.string.md)
[$errorBuffer](tidy.props.errorbuffer.md) = null;

public
?[string](language.types.string.md)
[$value](class.tidy.md#tidy.props.value) = null;

/\* Métodos \*/

public function [\_\_construct](tidy.construct.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$filename` = **`null`**,  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$useIncludePath` = **`false`**  
)

public function [body](tidy.body.md)(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

public function [cleanRepair](tidy.cleanrepair.md)(): [bool](language.types.boolean.md)

public function [diagnose](tidy.diagnose.md)(): [bool](language.types.boolean.md)

public function [getConfig](tidy.getconfig.md)(): [array](language.types.array.md)

public function [getHtmlVer](tidy.gethtmlver.md)(): [int](language.types.integer.md)

public function [getOpt](tidy.getopt.md)([string](language.types.string.md) `$option`): [string](language.types.string.md)|[int](language.types.integer.md)|[bool](language.types.boolean.md)

public function [getOptDoc](tidy.getoptdoc.md)([string](language.types.string.md) `$option`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getRelease](tidy.getrelease.md)(): [string](language.types.string.md)

public function [getStatus](tidy.getstatus.md)(): [int](language.types.integer.md)

public function [head](tidy.head.md)(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

public function [html](tidy.html.md)(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

public function [isXhtml](tidy.isxhtml.md)(): [bool](language.types.boolean.md)

public function [isXml](tidy.isxml.md)(): [bool](language.types.boolean.md)

public function [parseFile](tidy.parsefile.md)(  
    [string](language.types.string.md) `$filename`,  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$useIncludePath` = **`false`**  
): [bool](language.types.boolean.md)

public function [parseString](tidy.parsestring.md)([string](language.types.string.md) `$string`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [bool](language.types.boolean.md)

public static function [repairFile](tidy.repairfile.md)(  
    [string](language.types.string.md) `$filename`,  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$useIncludePath` = **`false`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [repairString](tidy.repairstring.md)([string](language.types.string.md) `$string`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [root](tidy.root.md)(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

}

## Propriedades

value
:   A representação HTML do nó, incluindo as tags delimitadoras.

## Índice

- [tidy::body](tidy.body.md) — Retorna um objeto tidyNode começando pela tag <body> da árvore de análise tidy
- [tidy::cleanRepair](tidy.cleanrepair.md) — Executa operações de limpeza e reparo configuradas na marcação analisada
- [tidy::\_\_construct](tidy.construct.md) — Constrói um novo objeto tidy
- [tidy::diagnose](tidy.diagnose.md) — Executa diagnósticos configurados em marcações analisadas e reparadas
- [tidy::$errorBuffer](tidy.props.errorbuffer.md) — Retorna avisos e erros que ocorreram ao analisar o documento especificado
- [tidy::getConfig](tidy.getconfig.md) — Obtém a configuração atual do Tidy
- [tidy::getHtmlVer](tidy.gethtmlver.md) — Obtém a versão HTML detectada para o documento especificado
- [tidy::getOpt](tidy.getopt.md) — Retorna o valor da opção de configuração especificada para o documento tidy
- [tidy::getOptDoc](tidy.getoptdoc.md) — Retorna a documentação para o nome da opção fornecida
- [tidy::getRelease](tidy.getrelease.md) — Obtém a data de lançamento (versão) para a biblioteca Tidy
- [tidy::getStatus](tidy.getstatus.md) — Obtém o status do documento especificado
- [tidy::head](tidy.head.md) — Retorna um objeto tidyNode começando pela tag <head> da árvore de análise tidy
- [tidy::html](tidy.html.md) — Retorna um objeto tidyNode começando pela tag <html> da árvore de análise tidy
- [tidy::isXhtml](tidy.isxhtml.md) — Indica se o documento é um documento XHTML
- [tidy::isXml](tidy.isxml.md) — Indica se o documento é um documento XML genérico (não HTML/XHTML)
- [tidy::parseFile](tidy.parsefile.md) — Analisar marcação em arquivo ou URI
- [tidy::parseString](tidy.parsestring.md) — Analisa um documento armazenado em uma string
- [tidy::repairFile](tidy.repairfile.md) — Repara um arquivo e o retorna como uma string
- [tidy::repairString](tidy.repairstring.md) — Repara uma string usando um arquivo de configuração fornecido opcionalmente
- [tidy::root](tidy.root.md) — Retorna um objeto tidyNode que representa a raiz da árvore de análise do Tidy

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
