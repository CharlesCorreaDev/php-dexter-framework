# Reassociação de Certificado no IIS 8.5 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-85/certificate-rebind-in-iis85

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

# Reassociação de certificado no IIS 8.5

Comentários

por [Jim van de Erve](https://twitter.com/jimvde)

> Reassocie automaticamente um certificado renovado usando o Certificate Rebind, recurso novo no IIS 8.5.

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.5 e posterior | O Certificado Rebind foi introduzido no IIS 8.5. |
| IIS 8.0 e anterior | Não tinha suporte para Reassociação de Certificado antes do IIS 8.5. |

## Problema

Quando o certificado usado para um site do IIS expira e é renovado, o site deve ser recuperado para o novo certificado. Isso precisa ocorrer mesmo que seus certificados sejam renovados automaticamente. A reassociação manual pode tornar o gerenciamento de certificados desafiadores, especialmente se você tiver um número significativo de sites e certificados. Se um certificado expirar e o site não for recuperado para o novo certificado, os clientes que se conectarem ao site receberão um aviso sobre a expiração do certificado e isso poderá impedi-los de usar o site até que o problema seja resolvido.

## Solução

O IIS 8.5 e posteriores têm um novo recurso que automatiza a revinculação de um certificado renovado. Esse recurso, chamado Reassociação de Certificado, garante que um certificado seja automaticamente reassociado a um site após a renovação do certificado. Você habilita esse recurso para todos os sites HTTPS de um servidor na caixa de diálogo Certificados do Servidor no Gerenciador do IIS.

O certificado rebinado aproveita a funcionalidade de notificação em um mecanismo auxiliar do Windows 8 e do Windows Server 2012 chamado Notificações de Ciclo de Vida dos Serviços de Certificado. Esse mecanismo cria um evento do sistema sempre que uma ação relacionada ao certificado ocorre, como quando um novo certificado é instalado, um certificado existente expira ou está prestes a expirar ou um certificado é renovado. Para obter mais informações sobre o mecanismo de notificação, consulte [Notificações do Ciclo de Vida dos Serviços de Certificados](https://social.technet.microsoft.com/wiki/contents/articles/14250.certificate-services-lifecycle-notifications.aspx).

Quando você habilita a Reprodução de Certificado, o IIS registra uma tarefa no Agendador de Tarefas do sistema, a qual é configurada para ser disparada em um evento de renovação de certificado (ID do evento 1001). Quando esse evento ocorre (quando você renova manualmente o certificado ou quando ele é renovado por meio do registro automático), a tarefa agendada executa a ferramenta de linha de comando do IIS appcmd.exe. Ele fornece ao appcmd a impressão digital do certificado expirado e a impressão digital do novo. Usando esses dois parâmetros, o appcmd localiza os sites aos quais o certificado antigo está associado, desvinca o certificado e associa o novo certificado a eles. Se você configurar seus certificados para renovar automaticamente por meio do registro automático e habilitar a Reconfiguração de Certificado, todo o processo será automatizado.

Você pode exibir a tarefa de vinculação de certificado no Agendador de Tarefas no Windows 8 ou no Windows Server 2012. Abra o Agendador de Tarefas executando taskschd.msc ou por meio da Pesquisa. Na Biblioteca do Agendador de Tarefas no painel esquerdo, abra a Microsoft, o Windows e, em seguida, CertificateServicesClient. É recomendável que você não altere essa tarefa. Além disso, se você desabilitar o Certificado Rebinado no Gerenciador do IIS, a tarefa CertificateServicesClient no Agendador de Tarefas será excluída.

Além de configurar a associação de certificados no IIS, você pode usar os eventos de Notificações do Ciclo de Vida de Serviços de Certificados para gerenciar certificados ao configurar gatilhos personalizados no Agendador de Tarefas.

## Instruções passo a passo

### Habilitar a vinculação automática de certificados renovados

1. Na barra de tarefas, clique em **Gerenciador de Servidores**, clique em **Ferramentas** e, em seguida, clique no **Gerenciador de Serviços de Informações da Internet (IIS**).
2. No painel **Conexões** , selecione o servidor. O Certificado Rebinado está habilitado no nível do servidor.
3. No painel Página Inicial, na seção **IIS** , clique duas vezes em **Certificados do Servidor**.
   ![Painel de Certificados do Servidor](certificate-rebind-in-iis85/_static/image1.png)
4. No painel **Ações** , clique em **Habilitar Rebinagem Automática de Certificado Renovado**.
   ![Painel Ações de Certificados do Servidor](certificate-rebind-in-iis85/_static/image2.png)

## Resumo

O recurso Certificado Rebind do IIS 8.5 e posterior permite reverter um certificado para um site web automaticamente após o certificado ter sido renovado. A vinculação de certificados aproveita eventos de notificações do ciclo de vida dos Serviços de Certificado. A tarefa Certificate Rebind, CertificateServicesClient, está registrada no Agendador de Tarefas do Windows.

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
