# Introdução ao PHP e DTrace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.dtrace.introduction.php

---

## Introdução ao PHP e DTrace

DTrace é um framework de instrumentação com alta disponibilidade e pequena sobrecarga,
disponível em um número de plataformas incluindo Solaris, macOS,
Oracle Linux e BSD. DTrace pode instrumentar comportamento do sistema operacional
e execução de programa de usuário. Ele pode exibir valores de argumentos e ser
usado para inferir estatísticas de desempenho. As sondas são monitoradas nos scripts
criados pelo usuário escritos na linguagem própria do DTrace (D). Isto
permite uma análise eficiente de pontos de dados.

Sondas PHP que não estão monitoradas ativamente por um script
D do usuário não contêm código instrumentado, então não há
degradação de desempenho durante a execução normal da aplicação.
Sondas que estão sendo monitoradas incorrem em uma sobrecarga pequena o suficiente
para permitir monitoramento pelo DTrace em sistemas ativos em fase de produção.

PHP incorpora sondas com "Instrumentação Estaticamente Definida no Nível de Usuário" (USDT em inglês)
que são ativadas em tempo de execução. Por exemplo, quando um script D
está monitorando a sonda de `function-entry` do PHP,
a cada momento que uma função do PHP é chamada, esta sonda é disparada e
o código de ação do script D associado é executado. Este código de ação
poderia, por exemplo, imprimir argumentos de sonda como a localização do arquivo-fonte
da função PHP. Ou a ação poderia agregar dados como
o número de vezes que cada função é chamada.

Apenas as sondas USDT do PHP são descritas aqui. Refira-se à literatura externa do Dtrace,
tanto geral quanto específica do sistema operacional, para entender como
o DTrace pode ser usado para instrumentar funções arbitrárias, e como ele pode ser
usado para instrumentar comportamento do sistema operacional. Note que nem todas as
características do DTrace estão disponíveis em todas as implementações.

As sondas estáticas do Dtrace no PHP podem alternativamente ser utilizadas com a
ferramenta SystemTap de algumas distribuições Linux.

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
