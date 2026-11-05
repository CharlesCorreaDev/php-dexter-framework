# Perfilador Hierárquico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.xhprof.php

---

# Perfilador Hierárquico

# Introdução

O XHProf é um profiler hierárquico e instrumentado leve.
Durante a fase de coleta de dados, ele monitora a contagem de chamadas e métricas
inclusivas para arcos no gráfico de chamadas dinâmico de um programa. Ele calcula métricas
exclusivas na fase de relatório/pós-processamento, como tempo de espera (decorrido),
tempo de CPU e uso de memória. Um perfil de funções pode ser dividido por chamadores
ou chamados. O XHProf lida com funções recursivas detectando ciclos no
gráfico de chamadas no próprio momento da coleta de dados e evitando os ciclos, atribuindo
nomes qualificados de profundidade exclusivos para as invocações recursivas.

O XHProf inclui uma interface de usuário simples baseada em HTML (escrita em PHP).
A interface de usuário baseada em navegador para visualizar os resultados do perfilador facilita
a visualização ou o compartilhamento de resultados com os pares. Uma visualização de imagem de gráfico de chamadas também é suportada.

Os relatórios XHProf podem frequentemente ser úteis para entender a estrutura do código
em execução. A natureza hierárquica dos relatórios pode ser usada para determinar,
por exemplo, qual cadeia de chamadas levou à chamada de uma função específica.

O XHProf suporta a capacidade de comparar duas execuções (também conhecidos como relatórios "diff") ou agregar
dados de várias execuções. Relatórios de comparação e agregação, assim como relatórios de execução única,
oferecem visualizações "planas" e "hierárquicas" do perfil.

Documentação adicional pode ser encontrada no
site [» facebook xhprof](https://web.archive.org/web/20110514095512/http://mirror.facebook.net/facebook/xhprof/doc.html).

- [Instalação/Configuração](xhprof.setup.md)
  - [Dependências](xhprof.requirements.md)
  - [Instalação](xhprof.installation.md)
  - [Configurações de Execução](xhprof.configuration.md)
- [Constantes predefinidas](xhprof.constants.md)
- [Examples](xhprof.examples.md)
- [Funções de Xhprof](ref.xhprof.md)
  - [xhprof\_disable](function.xhprof-disable.md) — Interrompe o perfilador xhprof
  - [xhprof\_enable](function.xhprof-enable.md) — Inicia o perfilador xhprof
  - [xhprof\_sample\_disable](function.xhprof-sample-disable.md) — Interrompe o perfilador de amostra xhprof
  - [xhprof\_sample\_enable](function.xhprof-sample-enable.md) — Inicia o perfilador do XHProf no modo de amostragem

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
