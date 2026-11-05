# Gerenciamento e Administração do IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/iis-management-and-administration

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

# Gerenciamento e Administração do IIS

Comentários

por [Walter Oliver](https://github.com/walterov)

## Introdução

Este artigo fornece um mapa para baixar locais para apresentações, vídeos e links para artigos existentes sobre gerenciamento e administração do IIS: farms web, ajuste de desempenho, solução de problemas, administração remota e um exemplo de gerenciamento de hospedagem.

Para obter mais detalhes sobre este tópico, visite [Gerenciamento e Manutenção do IIS 7.0](manage.md).

Este vídeo fornece uma visão geral de como usar o novo gerenciador do IIS para gerenciamento do IIS.

## Implantando e gerenciando web farms

Este vídeo fornece uma visão geral dos recursos de farm de Web do IIS 7.0, juntamente com as práticas recomendadas e demonstrações de como implantar e gerenciar farms de Web. O vídeo aborda:

- Desafios com o IIS 6.0
- Novidades no IIS 7.0 para Web Farms
- Demonstrações
- Lições aprendidas e diretrizes

[![Diagrama intitulado Replicação e Sincronização e mostra um servidor chamado Configuração Compartilhada, vinculado separadamente a três outros servidores.](iis-management-and-administration/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/iis-management-and-administration/_static/image1.jpg)

## Ajuste de desempenho

Este guia descreve parâmetros e configurações de ajuste importantes que podem resultar em um melhor desempenho para o sistema operacional Windows Server® 2008. Cada configuração e seu potencial efeito são descritos para ajudá-lo a fazer um julgamento informado sobre sua relevância para seu sistema, carga de trabalho e metas de desempenho. O guia usa uma abordagem holística para ajustar as várias funções do Windows Server, incluindo a função servidor Web.

[![Diagrama que mostra o caminho de Solicitação para Resposta.](iis-management-and-administration/_static/image4.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/iis-management-and-administration/_static/image3.jpg)

## Diagnóstico e solução de problemas

O vídeo a seguir fornece diretrizes e demonstrações de diagnóstico e solução de problemas usando:

Recursos de Status e Controle de Runtime (RTSC)

Códigos de substatus HTTP, erros detalhados e páginas de erro personalizadas

FREB (Rastreamento de Solicitação com Falha) e Rastreamento de Eventos para Windows (ETW)

O download a seguir (`https://download.microsoft.com/download/E/7/5/E75F1B3E-C341-4E67-906A-24ABB0E59278/IIS7DiagnosticsTroubleshooting.zip`) contém diretrizes sobre os recursos do IIS 7.0 usados no vídeo diagnóstico e solução de problemas.

A [seção](troubleshoot.md) a seguir fornece mais demonstrações de vídeo e diretrizes passo a passo para solução de problemas de erros no IIS 7.0.

Este [artigo](troubleshoot__remote-administration-issues__diagnosing-failures-with-remote-administration.md) ajudará você a diagnosticar e corrigir problemas encontrados ao usar o gerenciamento remoto. Isso se baseia em perguntas frequentes nos fóruns do IIS.net.

## Administração Remota

O [vídeo](https://mediadl.microsoft.com/mediadl/IISNET/Media/HDA20-IIS/Securely%20Delegating%20remote%20Web%20Site%20Administration.wmv) a seguir fornece uma visão geral dos novos recursos de Administração Remota do IIS 7.0. Ele inclui demonstrações, recursos de não administrador e dicas e truques.

[![Captura de tela intitulada IIS 7 Administração Remota.](iis-management-and-administration/_static/image6.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/iis-management-and-administration/_static/image5.jpg)

O download `https://download.microsoft.com/download/A/2/F/A2F199C0-672E-44E6-BF1D-878E233C3F08/RemoteManagement.zip` a seguir fornece a apresentação usada neste vídeo, bem como uma matriz de acesso de usuário de gerenciamento remoto que compara as contas de usuário administrador, usuário do Windows e gerenciador do IIS (também disponível aqui <link: [https://www.iis.net/learn/manage/remote-administration/remote-administration-behavior-matrix](manage__remote-administration__remote-administration-behavior-matrix.md)>).

Artigos de diretrizes:

- A ferramenta de Administração Remota está disponível em: [https://www.iis.net/downloads/default.aspx?tabid=34& i=1524&g=6](https://www.iis.net/downloads?tabid=34&i=1524&g=6).
- Para obter mais material de aprendizagem e orientação, consulte Gerenciando o IIS 7.0 Remotamente <link: [https://www.iis.net/learn/manage/remote-administration](manage__remote-administration.md)>.
- Este link de artigo <: [https://www.iis.net/learn/manage/remote-administration/configuring-remote-administration-and-feature-delegation-in-iis-7](manage__remote-administration__configuring-remote-administration-and-feature-delegation-in-iis-7.md)> fornece um guia passo a passo para configurar a Administração Remota e a Delegação de Recursos no IIS 7.0.
- Este link de artigo <: [https://www.iis.net/learn/web-hosting/web-server-for-shared-hosting/delegated-administration](web-hosting__web-server-for-shared-hosting__delegated-administration.md)> tem uma lista de configurações de delegação de recursos relevantes para hospedagem compartilhada e instruções sobre como configurá-las e como habilitar conexões remotas (esta última também é abordada no artigo citado no marcador anterior).

## Segurança

O vídeo a seguir fornece uma visão geral dos recursos de segurança e desempenho do IIS 7.0.

[![Captura de tela intitulada I S 7 Componentes Instaláveis.](iis-management-and-administration/_static/image8.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/iis-management-and-administration/_static/image7.jpg)

O vídeo a seguir detalha os novos aprimoramentos de segurança do Windows Server 2008 nas áreas de kernel/núcleo, host, rede, proteção de dados, conformidade e gerenciamento. Também inclui demonstrações.

[![Captura de tela intitulada Reforço de Segurança do Windows Server 2008.](iis-management-and-administration/_static/image10.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/iis-management-and-administration/_static/image9.jpg)

Este download (`https://download.microsoft.com/download/E/7/5/E75F1B3E-C341-4E67-906A-24ABB0E59278/WS2008Security.zip`) inclui as apresentações e a demonstração usadas nos vídeos desta seção.

## Um exemplo de gerenciamento de hospedagem

Este download (`https://download.microsoft.com/download/A/2/F/A2F199C0-672E-44E6-BF1D-878E233C3F08/IIS7HostingManagement.zip`) contém um vídeo que descreve um sistema de gerenciamento de hospedagem de exemplo com base no código-fonte de exemplo e na documentação encontrada no [Exemplo de Código dos Serviços de Hospedagem](manage__provisioning-and-managing-iis.md).

Este download (`https://download.microsoft.com/download/A/2/F/A2F199C0-672E-44E6-BF1D-878E233C3F08/ManagementServicesforHosters.zip`) contém a apresentação e os documentos do exemplo demonstrado neste vídeo.

## Conclusion

Este artigo ajuda você a gerenciar servidores Web do Windows Server 2008 fornecendo um mapa para vídeos de gerenciamento e administração do IIS, demonstrações, tópicos de orientação passo a passo e downloads.

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
