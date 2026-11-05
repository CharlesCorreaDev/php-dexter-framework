# Configuração compartilhada e provisionamento remoto | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning

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

# Configuração compartilhada e provisionamento remoto

Comentários

por [Walter Oliver](https://github.com/walterov)

Ao usar a funcionalidade de Configuração Compartilhada do IIS 7 em um ambiente onde as tarefas de provisionamento de sites são realizadas a partir de um computador remoto, você pode se deparar com o que é conhecido como "problema de autenticação de double-hop". Esse problema impedirá que você execute tarefas de provisionamento. Este artigo descreve o problema e fornece soluções alternativas para ele.

## Descrição do problema

A topologia de provisionamento ilustrada no diagrama a seguir pode ser uma opção comum para aproveitar o novo recurso de configuração compartilhada disponível no IIS 7, que a configuração é centralizada em um compartilhamento de rede e um servidor de provisionamento centralizado executará operações de provisionamento em vários farms de servidores Web. Presumimos que todos os farms de servidores Web estejam executando o Windows Server® 2008 R2 com o IIS 7.

[![Diagrama que mostra links entre o Servidor de Provisionamento, as fazendas de servidores Web e a Configuração Compartilhada da Rede. O Compartilhamento de Arquivos conecta a Configuração Compartilhada da Rede às fazendas de servidores Web.](shared-configuration-and-remote-provisioning/_static/image3.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image1.jpg)
  
Topologia de provisionamento típica

A Configuração Compartilhada pode ser habilitada facilmente por meio do Gerenciador do IIS, conforme mostrado na captura de tela a seguir.

[![Captura de tela que mostra o Gerenciador de IS. O painel Configuração Compartilhada está aberto.](shared-configuration-and-remote-provisioning/_static/image7.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image5.jpg)
  
Um conjunto de novas APIs gerenciadas foi fornecido no IIS 7 no namespace Microsoft.Web.Administration. As APIs contêm um método OpenRemote, que permite administrações remotas em toda a rede, conforme ilustrado no diagrama a seguir.

[![Diagrama que mostra links entre o Servidor de Provisionamento, os Farms de Servidor Web e a Configuração Compartilhada de Rede. As Chamadas de Provisionamento conectam o Servidor de Provisionamento aos Farms de Servidor Web.](shared-configuration-and-remote-provisioning/_static/image11.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image9.jpg)

O snippet de código a seguir demonstra o uso do OpenRemote para provisionar um aplicativo em um servidor Web diferente.

[![Captura de tela que mostra o snippet de código demonstrando o uso do Open Remote.](shared-configuration-and-remote-provisioning/_static/image15.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image13.jpg)

Quando a configuração compartilhada estiver habilitada para o servidor Web remoto, você receberá o seguinte erro ao executar o código de exemplo:

[![Captura de tela que mostra o Prompt de Comando. O comando Remote foi inserido na linha de comando e a operação falhou devido a permissões insuficientes.](shared-configuration-and-remote-provisioning/_static/image18.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image17.jpg)

O problema não existe se o servidor Web remoto estiver usando a configuração local em vez de uma configuração compartilhada.

Desabilite a configuração compartilhada:

[![Captura de tela que mostra o painel Configuração Compartilhada. A caixa de seleção Habilitar configuração compartilhada está desmarcada.](shared-configuration-and-remote-provisioning/_static/image20.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image19.jpg)

Execute novamente o aplicativo de exemplo:

[![Captura de tela que mostra o Prompt de Comando. O remoto é inserido na linha de comando e a operação foi bem-sucedida.](shared-configuration-and-remote-provisioning/_static/image22.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image21.jpg)

A modificação foi cometida com êxito.

[![Captura de tela que mostra o painel inicial do Site Padrão. O item Test está circulado no nó Site Padrão no painel Conexões.](shared-configuration-and-remote-provisioning/_static/image24.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image23.jpg)

Esse é um problema de autenticação de salto duplo causado pela configuração compartilhada em vários servidores. A chamada OpenRemote é simplesmente invocar remotamente o objeto COM por meio do DCOM. Se a configuração não estiver configurada localmente, o objeto COM tentará fazer o salto duplo que não é permitido ao usar COM. Tenha em mente que isso só ocorre na operação de gravação para a configuração compartilhada.

Quando a operação de leitura é executada, o sistema de configuração subjacente está usando a credencial armazenada no arquivo redirection.config para autenticar no servidor de compartilhamento de rede remoto, que não terá esse problema de autenticação dupla. Com operações de gravação, a configuração subjacente está usando o token de segurança do chamador para realizar as operações, mas esse token de segurança é inválido no servidor remoto de compartilhamento de rede.

## Soluções alternativas

### Opção 1: modificar a configuração do DCOM para o objeto COM de configuração usando uma conta especificada

Para contornar o problema de salto duplo com o objeto COM de configuração, precisamos alterar a configuração de DCOM para usar uma conta especificada em vez do contexto de segurança do chamador para habilitar a autenticação do objeto COM de configuração no servidor de compartilhamento de rede remoto com a credencial especificada.  
Você pode localizar o objeto COM de configuração do IIS 7 – ahadmin em Configuração de DCOM usando os Serviços de Componentes no servidor Web remoto, conforme ilustrado no diagrama a seguir:

[![Captura de tela que mostra a caixa de diálogo Propriedades do administrador a h. O rádio do usuário de inicialização está selecionado.](shared-configuration-and-remote-provisioning/_static/image26.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image25.jpg)

Clique com o botão direito do mouse no nó do ahadmin e selecione as propriedades..., selecione a guia Identidade, altere a opção para Este Usuário em vez do usuário inicial e especifique uma conta de usuário com as seguintes permissões:

1. Tenha permissões de alteração nos arquivos de configuração compartilhados no servidor de compartilhamento de rede.
2. Certifique-se de ter permissão de leitura para o arquivo redirection.config armazenado em system32\inetsrv\config.
3. Membro do grupo de administradores locais, caso contrário, você receberá uma exceção de impossibilidade de descriptografar.

[![Captura de tela que mostra a caixa de diálogo Propriedades do administrador. A opção ](shared-configuration-and-remote-provisioning/_static/image28.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image27.jpg)

Clique em **OK.**

Após a alteração, execute novamente o aplicativo de exemplo, ele funciona com êxito.

[![Captura de tela que mostra o Prompt de Comando. A palavra 'Remote' é inserida na linha de comando e a operação de administrador remoto foi bem-sucedida.](shared-configuration-and-remote-provisioning/_static/image30.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image29.jpg)

O aplicativo de teste é provisionado corretamente.

[![Captura de tela que mostra o painel Página Inicial de teste. O teste é selecionado e circulado no painel Conexões.](shared-configuration-and-remote-provisioning/_static/image32.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image31.jpg)

O uso de uma conta especificada para o objeto COM de configuração pode expor riscos de segurança adicionais (ou seja, qualquer usuário pode modificar a configuração desde que tenha permissão para invocar o objeto COM). Para reduzir os riscos de segurança, configure apenas um servidor Web no farm de servidores Web usando essa opção para provisionamento e configure o firewall para permitir que apenas determinado IP acesse o servidor.

#### \*\*Aviso de segurança\*\*

**Essa abordagem pode potencialmente permitir que um não administrador faça alterações no nível administrativo no servidor, já que o componente não será executado no contexto de segurança do chamador**.

### Opção 2: usando uma abordagem de exemplo dos Serviços de Hospedagem

Uma opção alternativa não é usar OpenRemote por meio de chamada DCOM e, em vez disso, criar um serviço como o [Exemplo de Código dos Serviços de Hospedagem](manage__provisioning-and-managing-iis.md), que é um conjunto de serviços Web criados com base no WCF (Windows Communication Foundation), em um dos servidores Web no farm da Web, conforme ilustrado no diagrama a seguir:  
[![Diagrama que mostra links entre o Servidor de Provisionamento, os Farms do Servidor Web e a Configuração Compartilhada de Compartilhamento de Rede. O Serviço Web conecta o Servidor de Provisionamento aos Farms do Servidor Web.](shared-configuration-and-remote-provisioning/_static/image34.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image33.jpg)
  
Você pode usar o Serviço Windows para hospedar os serviços se tiver preocupações com a hospedagem no IIS 7. O serviço Web é criado com base nas APIs Microsoft.Web.Administration e fornece uma melhor opção de integração e, além disso, não há necessidade de abrir o firewall como o OpenRemote exigia.

#### Consideração de Segurança

O serviço deve ser protegido apenas para permitir que usuários autorizados e autenticados chamem o serviço.

### Opção 3: Usando o WMI

Outra opção para evitar o problema de salto duplo é usar o serviço WMI, conforme ilustrado no diagrama a seguir.

O serviço WMI tem a opção de especificar as credenciais para a conexão com o servidor Web remoto, e o serviço WMI no servidor remoto assumirá a identidade ao executar a opção de provisionamento de recursos, conforme mostrado no snippet de código a seguir. Para habilitar as operações que funcionam com a configuração compartilhada, você deve especificar a opção de representação ao se conectar ao WMI no servidor remoto. O WMI também requer determinadas portas abertas no firewall para invocação remota.  
[![Diagrama que mostra links entre o Servidor de Provisionamento, as Fazendas de Servidor Web e a Configuração Compartilhada de Rede. O W M I conecta o Servidor de Provisionamento às Fazendas de Servidor Web.](shared-configuration-and-remote-provisioning/_static/image36.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/shared-configuration-and-remote-provisioning/_static/image35.jpg)

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
