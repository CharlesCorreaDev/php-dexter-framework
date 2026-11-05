# Usando o WSRM para gerenciar a utilização da CPU do AppPool do IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-performance-settings/using-wsrm-to-manage-iis-7-apppool-cpu-utilization

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

# Usando o WSRM para gerenciar a utilização da CPU do AppPool do IIS 7

Comentários

por [Walter Oliver](https://github.com/walterov)

No passado, os administradores usavam a [Propriedade metabase CPULimit no IIS](https://www.microsoft.com/technet/prodtechnol/WindowsServer2003/Library/IIS/1b82ca25-5ea4-48b0-9ce7-a1c36765f1e2.mspx?mfr=true) para configurar o percentual máximo de tempo de CPU que os processos de trabalho em um pool de aplicativos podem consumir durante um período de tempo. Com a disponibilidade do WSRM (Windows System Resource Manager), a configuração de CPULimit não é mais necessária, além disso, não é recomendável.

O WSRM permite que os administradores controlem como os recursos de CPU e memória são alocados para aplicativos, serviços e processos. O gerenciamento de recursos dessa forma melhora o desempenho do sistema e reduz a chance de que aplicativos, serviços ou processos interfiram com o restante do sistema. Ele também cria uma experiência mais consistente e previsível para usuários de aplicativos e serviços em execução no computador.

O WSRM integra o gerenciamento de recursos com pools da Web por meio de uma política interna chamada Equal\_Per\_IISAppPool. As políticas no WSRM alternam automaticamente para diferentes alocações de recursos em resposta a alterações de hot-add no hardware ou mudanças no cluster, se estiverem em execução em uma configuração de cluster.

## Desativar a propriedade metabase CPULimit

1. Inicie o Gerenciador do IIS e conecte-se ao servidor de destino
2. Clique no nó Pools de Aplicativos para exibir os pools de aplicativos disponíveis, para cada pool de aplicativos, abra a caixa de diálogo **Configurações Avançadas** clicando em **Configurações Avançadas** no painel Ações.

   ![Captura de tela do nó do Pool de Aplicativos Padrão selecionado. As Configurações Avançadas são enfatizadas na seção Editar Pool de Aplicativos do painel Ações.](using-wsrm-to-manage-iis-7-apppool-cpu-utilization/_static/image1.jpg)
3. Na seção CPU, verifique se a propriedade Limite da CPU está definida como 0 (valor padrão).

   ![Captura de tela do limite de C P U definido como 0 na caixa de diálogo Configurações Avançadas.](using-wsrm-to-manage-iis-7-apppool-cpu-utilization/_static/image3.jpg)

## Usando a política interna do IIS

1. Depois de instalar a Função Web, prossiga para instalar o Windows System Resource Manager.
2. Inicie o WSRM clicando no botão Iniciar do Windows, selecione "Ferramenta Administrativa" e selecione "Gerenciador de Recursos do Sistema do Windows".

   ![Captura de tela do Gerenciador de Recursos do Sistema do Windows na Ferramenta Administrativa.](using-wsrm-to-manage-iis-7-apppool-cpu-utilization/_static/image5.jpg)
3. Inicie a política interna embutida Equal\_Per\_IISAppPool.

   a. Abra o nó Políticas de Alocação de Recursos no painel esquerdo

   ![Captura de tela da caixa de diálogo W S R M com Equal_Por_IIS_App_Pool selecionado nas Políticas de Alocação de Recursos.](using-wsrm-to-manage-iis-7-apppool-cpu-utilization/_static/image7.jpg)
   b. Clique com o botão direito do mouse em Equal\_Per\_IISAppPool no painel esquerdo. Selecione Definir como Política de Gerenciamento d. Se solicitado a desabilitar o calendário, clique em OK

   ![Captura de tela da mensagem de aviso exibida antes de desabilitar o calendário.](using-wsrm-to-manage-iis-7-apppool-cpu-utilization/_static/image9.jpg)
   e. Observe o comportamento do sistema em uma carga do IIS. Você pode usar o WCAT para simular uma carga no servidor. Essa ferramenta faz parte do Kit de Recursos do IIS 6.0.

## Criando uma política IIS personalizada (opcional)

1. Crie pelo menos 2 PMC (critérios de correspondência de processo) para diferentes AppPools:

   1. Clique com o botão direito do mouse no nó de Critérios de Correspondência de Processo no painel esquerdo.
   2. Selecione novos critérios de correspondência para o processo.
   3. A caixa de diálogo Novos Critérios de Correspondência de Processo é exibida.

      ![Captura de tela da caixa de diálogo Novo Critério de Correspondência de Processo com o nome do Critério definido como Meu P M C.](using-wsrm-to-manage-iis-7-apppool-cpu-utilization/_static/image11.jpg)
   4. Insira um nome para o PMC e clique em Adicionar.
   5. A caixa de diálogo Adicionar Regra é exibida
   6. Selecione a guia Arquivos ou Linhas de Comando
   7. Clique na área rotulada "Arquivos incluídos ou linhas de comando" e digite um critério correspondente.
   8. Use o seguinte formato: `@w3wp.exe.*<AppPoolName>`

      ![Captura de tela da caixa de diálogo Adicionar Regra com arroba w 3 w ponto e x e ponto asterisco My App Pool incluído na guia Arquivos ou Linhas de Comando.](using-wsrm-to-manage-iis-7-apppool-cpu-utilization/_static/image13.jpg)
   9. Adicione linhas para corresponder a AppPools adicionais (ou quaisquer outros processos) a este PMC.
   10. Clique em OK.
   11. Repita as etapas acima para cada PMC adicional.
2. Criar uma política de alocação de recursos (RAP):

   1. Clique com o botão direito do mouse no nó Política de Alocação de Recursos no painel esquerdo.
   2. Selecione Nova Política de Alocação de Recursos.
   3. A caixa de diálogo Nova Política de Alocação de Recursos é exibida.
   4. Insira um nome para o RAP.

      ![Captura de tela do diálogo da Nova Política de Alocação de Recursos com o nome de política NEW R A P.](using-wsrm-to-manage-iis-7-apppool-cpu-utilization/_static/image15.jpg)
   5. Clique em Adicionar.
   6. A caixa de diálogo Adicionar ou Editar Alocação de Recursos é exibida.
   7. Selecione, na lista suspensa, o PMC para o qual essa alocação deve ir.
   8. Insira o percentual do processador a ser alocado para o PMC.

      ![Captura de tela da definição dos critérios de correspondência do processo para My P M C e a porcentagem do processador para 50%.](using-wsrm-to-manage-iis-7-apppool-cpu-utilization/_static/image17.jpg)
   9. Clique em OK.
   10. Adicione alocações de recursos para todos os outros PMCs a serem gerenciados pelo RAP.
   11. Clique em OK.
3. Ative a política.

   1. Clique com o botão direito do mouse no RAP criado acima.
   2. Selecione Definir como Política de Gestão.
   3. Se solicitado a desabilitar o calendário, clique em Sim.
   4. Observe o comportamento do sistema durante a execução de uma carga do IIS.

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
