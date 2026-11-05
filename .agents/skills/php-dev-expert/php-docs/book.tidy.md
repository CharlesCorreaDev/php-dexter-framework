# Tidy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.tidy.php

---

# Tidy

# Introdução

Tidy é uma ligação para o utilitário de limpeza e reparo Tidy HTML que
permite não apenas limpar e manipular documentos HTML, XHTML
e XML, mas também percorrer a árvore de documentos, incluindo
aqueles com linguagens de script incorporadas, como PHP ou ASP dentro
deles usando construções orientadas a objetos.

- [Instalação/Configuração](tidy.setup.md)
  - [Dependências](tidy.requirements.md)
  - [Instalação](tidy.installation.md)
  - [Configurações de Execução](tidy.configuration.md)
- [Constantes predefinidas](tidy.constants.md)
- [Examples](tidy.examples.md)
  - [Exemplo de Tidy](tidy.examples.basic.md)
- [tidy](class.tidy.md) — A classe tidy
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
- [tidyNode](class.tidynode.md) — A classe tidyNode
  - [tidyNode::\_\_construct](tidynode.construct.md) — Construtor privado para proibir instanciação direta
  - [tidyNode::getNextSibling](tidynode.getnextsibling.md) — Retorna o próximo nó irmão do nó atual
  - [tidyNode::getParent](tidynode.getparent.md) — Retorna o nó pai do nó atual
  - [tidyNode::getPreviousSibling](tidynode.getprevioussibling.md) — Retorna o nó irmão anterior do nó atual
  - [tidyNode::hasChildren](tidynode.haschildren.md) — Verifica se um nó tem filhos
  - [tidyNode::hasSiblings](tidynode.hassiblings.md) — Verifica se um nó tem irmãos
  - [tidyNode::isAsp](tidynode.isasp.md) — Verifica se este nó é ASP
  - [tidyNode::isComment](tidynode.iscomment.md) — Verifica se um nó representa um comentário
  - [tidyNode::isHtml](tidynode.ishtml.md) — Verifica se um nó é um nó de elemento
  - [tidyNode::isJste](tidynode.isjste.md) — Verifica se este nó é JSTE
  - [tidyNode::isPhp](tidynode.isphp.md) — Verifica se um nó é PHP
  - [tidyNode::isText](tidynode.istext.md) — Verifica se um nó representa texto (sem marcação)
- [Funções de Tidy](ref.tidy.md)
  - [ob\_tidyhandler](function.ob-tidyhandler.md) — Função de retorno ob\_start para reparar o buffer
  - [tidy\_access\_count](function.tidy-access-count.md) — Retorna o número de avisos de acessibilidade do Tidy encontrados para o documento especificado
  - [tidy\_config\_count](function.tidy-config-count.md) — Retorna o número de erros de configuração do Tidy encontrados para o documento especificado
  - [tidy\_error\_count](function.tidy-error-count.md) — Retorna o número de erros de Tidy encontrados para o documento especificado
  - [tidy\_get\_output](function.tidy-get-output.md) — Retorna uma string representando a marcação Tidy analisada
  - [tidy\_warning\_count](function.tidy-warning-count.md) — Retorna o número de avisos do Tidy encontrados para o documento especificado

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
