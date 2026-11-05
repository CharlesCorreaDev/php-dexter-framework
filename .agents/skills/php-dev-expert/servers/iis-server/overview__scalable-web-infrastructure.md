# Infraestrutura Web escalonável | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/overview/scalable-web-infrastructure

---

Sumário 

Sair do modo Editor

Pergunte e aprenda

Pergunte e aprenda

Modo de leitura

Sumário
[Ler em inglês](#)

Adicionar

Adicionar a Planos

---

Copiar Markdown

Imprimir

---

Observação

O acesso a essa página exige autorização. Você pode tentar [entrar](#) ou alterar diretórios.

O acesso a essa página exige autorização. Você pode tentar alterar os diretórios.

# Infraestrutura Web escalonável

Comentários

Implemente uma infraestrutura Web escalonável com balanceamento de carga baseado em HTTP interno e tratamento inteligente de solicitações e roteamento.

## Roteamento de solicitação de aplicativo e balanceamento de carga

![ARR](scalable-web-infrastructure/_static/arr-small.png)

O ARR (Application Request Routing) permite que os administradores do servidor Web e provedores de hospedagem aumentem a confiabilidade e a escalabilidade do aplicativo Web por meio de roteamento baseado em regra e balanceamento de carga de solicitações de servidor HTTP. Com o ARR, os administradores podem otimizar a utilização de recursos para servidores de aplicativos para reduzir os custos de gerenciamento para farms web e ambientes de hospedagem compartilhada.

O ARR determina automaticamente o melhor servidor de conteúdo para atender a cada solicitação com base em informações de cabeçalho de resposta HTTP, variáveis de servidor e algoritmos sofisticados de balanceamento de carga. Com o ARR, os administradores podem otimizar a utilização de recursos para servidores de aplicativos para reduzir os custos de gerenciamento para farms web e ambientes de hospedagem compartilhada. O ARR permite que o administrador crie, gerencie e aplique regras de balanceamento de carga ao Server Farms no Gerenciador do IIS. Os administradores podem adicionar ou remover facilmente servidores de um Farm de Servidores para aumentar ou diminuir a capacidade disponível para corresponder à demanda, sem afetar a disponibilidade do aplicativo. A ARR também inclui recursos de monitoramento de tráfego real e testes reais de URL para determinar a saúde dos servidores individuais e suas configurações. Os administradores podem exibir estatísticas de runtime agregadas no Gerenciador do IIS.

## Reescritor de URL

![Regravador de URL](scalable-web-infrastructure/_static/url-rewriter-small.png)

Usando o Regravador de URL, o ARR oferece aos administradores a capacidade de criar regras de roteamento avançadas com base em cabeçalhos HTTP e variáveis de servidor para determinar o servidor de conteúdo mais apropriado para cada solicitação. O Reescritor de URL é uma extensão do IIS que oferece aos administradores do IIS a capacidade de criar regras avançadas para implementar URLs fáceis de lembrar para as páginas do site, melhorar os resultados de busca tornando as URLs amigáveis para os motores de busca, mapear URLs estáticas e impor um nome de host consistente para um site. Usando modelos de regra, reescrever mapas e outras funcionalidades integradas ao Gerenciador do IIS, os administradores podem facilmente configurar regras para definir o comportamento de regravação de URL com base em cabeçalhos HTTP e variáveis de servidor. O Reescritor de URL integra-se de forma integrada ao Gerenciador do IIS e dá suporte ao cache no modo de usuário e no modo kernel para um desempenho mais rápido, e ao Rastreamento de Solicitações com Falha para diagnosticar a execução da lógica do aplicativo.

---

## Comentários

Esta página foi útil?

Sim

Não

Não

Precisa de ajuda com este tópico?

Quer experimentar o Pergunte e aprenda para esclarecer ou guiar você neste tópico?

Pergunte e aprenda

Pergunte e aprenda

 Sugerir uma correção?

---

## Recursos adicionais

---

- Última atualização em 
  2026-03-28
