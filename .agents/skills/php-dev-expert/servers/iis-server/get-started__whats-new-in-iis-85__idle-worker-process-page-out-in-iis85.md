# Descarregamento de processo de trabalho ocioso no IIS 8.5 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-85/idle-worker-process-page-out-in-iis85

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

# Page-Out de processo de trabalho inativo no IIS 8.5

Comentários

por [Gary Ericson](https://github.com/garyericson)

> No IIS 8.5, o administrador tem a opção de suspender um processo de trabalho ocioso em vez de encerrá-lo.

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.5 e posterior | O Page-Out processo de trabalho ocioso foi introduzido no IIS 8.5. |
| IIS 8.0 e anterior | Não havia suporte para Page-Out do Processo de Trabalho Ocioso antes do IIS 8.5. |

## Problema

O IIS (Serviços de Informações da Internet) no Windows Server 2012 fornece ao administrador a opção de cronometrar um processo de trabalho ocioso por um período de tempo especificado. Essa é uma boa opção para sites que não são acessados com muita frequência porque libera recursos do sistema quando o site está ocioso. A desvantagem é que, na próxima vez que o site for acessado, o usuário precisará aguardar o processo de trabalho ser iniciado novamente.

## Solução

No IIS 8.5 e posterior, o administrador tem a opção de suspender um processo de trabalho ocioso em vez de encerrá-lo. Um processo de trabalho suspenso permanece ativo, mas é paginado em disco, reduzindo os recursos do sistema consumidos. Quando um usuário acessa o site novamente, o processo de trabalho é reativado de uma suspensão e fica rapidamente disponível. Quando um processo de trabalho ocioso é encerrado, o processo de trabalho é finalizado, e o tempo de inicialização será mais longo quando o site for acessado posteriormente. Encerrar o processo é o comportamento padrão e o mesmo comportamento usado em versões anteriores do IIS antes do IIS 8.5.

O atributo idleTimeoutAction pode ser configurado para um único pool de aplicativos ou como um padrão para todos os pools de aplicativos.

## Instruções passo a passo

### Configurar Page-Out de processos ociosos para um único pool de aplicativos

1. Abra o **Gerenciador do IIS**.
2. Selecione **Pools de Aplicativos** no painel **Conexões** , selecione um pool de aplicativos no painel **Pool de Aplicativos** e clique em **Configurações Avançadas...** no painel **Ações** .
3. Na caixa de diálogo **Configurações Avançadas**, em **Modelo de Processo**, selecione **Suspender** para o valor da **Ação de Tempo Limite de Ociosidade** para suspender um processo de trabalho quando o valor de tempo limite for atingido, transferindo-o para o disco. Selecione **Finalizar** para interromper o processo de trabalho.  
   ![Definir o tempo de inatividade para o pool](idle-worker-process-page-out-in-iis85/_static/image1.jpg)
4. Opcionalmente, defina o valor **de tempo limite ocioso** dos 20 minutos padrão para um período de tempo diferente.
5. Clique em **OK.**

### Configurar Paginação de Processo de Trabalho Ocioso como Padrão para Pools de Aplicativos

1. Abra o **Gerenciador do IIS**.
2. Selecione **Pools de Aplicativos** no painel **Conexões** e clique em **Definir Padrões do Pool de Aplicativos...** no painel **Ações** .
3. Na caixa de diálogo **Padrões do Pool de Aplicativos**, em **Modelo de Processo**, selecione **Suspender** como valor de **Ação de Tempo Limite em Inatividade** para suspender um processo de trabalho quando o valor de tempo limite for atingido, paginando-o para o disco. Selecione **Encerrar** para desligar o processo de trabalho.  
   ![Definir o tempo limite ocioso como padrão](idle-worker-process-page-out-in-iis85/_static/image2.jpg)
4. Opcionalmente, defina o valor **de tempo limite ocioso** dos 20 minutos padrão para um período de tempo diferente.
5. Clique em **OK.**

## Exibir uso de recursos em suspensão

Você pode exibir processos de trabalho suspensos no Gerenciador de Tarefas e ver que eles usam muito pouca memória ou CPU.

![Sites ociosos suspensos](idle-worker-process-page-out-in-iis85/_static/image3.jpg)

## Verifique a configuração de ação de tempo limite de inatividade no applicationHost.config

A configuração idleTimeoutAction pode ser inserida em dois locais no arquivo applicationHost.config:

- Para um único pool de aplicativos, no elemento filho <processModel> do <elemento add>, define o atributo idleTimeoutAction somente para esse pool. Isso é o que está acontecendo para DefaultAppPool na captura de tela do arquivo applicationHost.config abaixo, no qual idleTimeoutAction está definido como "Suspend".
- Para todos os pools de aplicativos, no elemento filho <processModel> do elemento <applicationPoolDefaults>, que define uma configuração padrão para todos os pools. Se idleTimeoutAction não estiver definido para um pool específico, por exemplo, o pool do .NET v4.5 abaixo, o valor padrão idleTimeoutAction será usado para esse pool, nesse caso, "Encerrar". Se a idleTimeoutAction for definida para um pool, essa configuração substituirá a padrão.

![Tempo limite ocioso no arquivo de configuração](idle-worker-process-page-out-in-iis85/_static/image4.jpg)

## Resumo

Neste guia, você configurou o IIS para suspender ou encerrar processos de trabalho que ficaram ociosos por um período especificado.

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
  2026-03-27
