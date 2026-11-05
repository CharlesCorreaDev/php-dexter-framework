# Ferramentas avançadas de diagnóstico | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/overview/rich-diagnostic-tools

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

# Ferramentas avançadas de diagnóstico

Comentários

Minimize o tempo de inatividade e diagnostice rapidamente problemas de servidor e aplicativo com as ferramentas de diagnóstico internas.

## Erros detalhados

![Captura de tela do Erro do Servidor IIS na janela do Aplicativo mostrando um erro HTTP 404.](rich-diagnostic-tools/_static/richdiagnostictools1-small.png)

O IIS simplifica a solução de problemas fornecendo mensagens de erro detalhadas e acionáveis aos administradores do servidor. O módulo de erros personalizado no IIS permite que informações detalhadas de erro sejam enviadas de volta ao navegador em execução no servidor host local. Em vez de ver um código de erro, os administradores agora podem ver informações detalhadas sobre a solicitação, quais possíveis problemas podem ter causado o erro e sugestões sobre como corrigir o erro. As informações de erro personalizadas são exibidas apenas para o administrador do servidor; os usuários do site veem as páginas de erro do aplicativo Web padrão sem as informações detalhadas para os administradores do servidor.

## Rastreamento automático de requisição falhada

O IIS possibilita solucionar problemas de falhas sem precisar reproduzi-las manualmente. O recurso Rastreamento de Solicitação com Falha permite que os administradores do servidor definam condições de erro que desejam monitorar. Isso permite que os administradores capturem logs de rastreamento para uma condição de falha pré-configurada automaticamente, evitando a penalidade de desempenho de salvar logs para todas as solicitações. Com o Rastreamento de Solicitação com Falha, os administradores podem capturar as informações de rastreamento valiosas quando ocorrem erros, mesmo que sejam intermitentes ou difíceis de reproduzir. Se esse recurso estiver configurado e o IIS detectar uma condição de erro, ele poderá registrar automaticamente eventos de rastreamento detalhados para tudo o que levou ao erro.

![Captura de tela da janela de Rastreamento de Solicitações com Falhas do IIS sem o agrupamento selecionado.](rich-diagnostic-tools/_static/richdiagnostictools2-small.png)

Além disso, os desenvolvedores podem instrumentar o código do aplicativo usando os eventos de rastreamento do ASP.NET. O Rastreamento de Solicitação com Falha incluirá as informações do evento de rastreamento nos relatórios de Rastreamento de Solicitações com Falha, proporcionando uma experiência centralizada de solução de problemas. O Rastreamento de Solicitações com Falha ajuda qualquer administrador de sites, incluindo provedores de hospedagem que gerenciam muitos sites. Um provedor de hospedagem pode usar o rastreamento de solicitações com falha para um único site ou vários sites, a fim de monitorar erros.

A infraestrutura de rastreamento subjacente é exposta a módulos do IIS usando o modelo de extensibilidade do servidor, permitindo que todas as Extensões do IIS, sejam elas enviadas com o IIS ou desenvolvidas por terceiros, retransmitissem informações detalhadas de rastreamento durante o processamento da solicitação. Isso permite que desenvolvedores e administradores de sistema criem módulos gerenciados personalizados para aproveitar o modelo de rastreamento unificado. Os desenvolvedores podem escrever módulos de rastreamento que fornecem novas maneiras de processar e gerar rastreamentos, como um módulo para salvar informações de rastreamento do IIS em um Microsoft SQL Server® ou em um arquivo de texto.

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
