# Novidades para WebDAV e IIS 7? | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-7/what39s-new-for-webdav-and-iis-7

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

# Novidades para WebDAV e IIS 7?

Comentários

por [Robert McMurray](https://github.com/rmcmurray)

## Introdução

### O que é WebDAV?

O WebDAV é abreviação de Criação e Controle de Versão Distribuído da Web e é uma extensão de padrão aberto para o protocolo HTTP que permite o gerenciamento de arquivos pela Internet. Além das operações usuais semelhantes ao sistema de arquivos (copiar, mover, excluir etc), o WebDAV adiciona um mecanismo de propriedade flexível (com base em pares nome/valor) e bloqueio de recursos. WebDAV é um componente crítico na história de publicação na Web da Microsoft, usada pelo redirecionador WebDAV, Pastas da Web, SMS/SCCM e muitos outros componentes.

Algumas das novas ferramentas de criação da Web da Microsoft, como o Expression Web Designer, têm suporte interno para trabalhar com sites habilitados para WebDAV. Com a adição de um redirecionador WebDAV de qualidade superior no Windows Vista e no Windows Server® 2008, é possível mapear uma letra de unidade para um site configurado para usar o módulo WebDAV e, dessa forma, você pode abrir esse site usando ferramentas de edição web que não têm suporte interno ao WebDAV, como o FrontPage 2003 e o Visual Studio.

![Captura de tela da caixa de diálogo Mapear Unidade de Rede.](what39s-new-for-webdav-and-iis-7/_static/image1.jpg)

### Novidades no módulo WebDAV do IIS?

A Microsoft lançou uma implementação WebDAV totalmente nova para o IIS que foi escrita do zero para ser mais compatível com o protocolo WebDAV, mais configurável do que o módulo WebDAV para o IIS 6.0 e mais rápida do que as versões anteriores do WebDAV da Microsoft. Este novo módulo de extensão WebDAV dá suporte a uma ampla gama de recursos e melhorias, e as listas a seguir contêm vários dos aprimoramentos nesta versão.

Observação

Este novo módulo de extensão WebDAV é apenas para Windows Server 2008 e Serviços de Informações da Internet 7.0 ou superior; ele não funcionará no Windows Server 2003 e nos Serviços de Informações da Internet 6.0.

#### Integração com o IIS

- **Pipeline Integrado**: a implementação do WebDAV do IIS 6.0 foi por meio do ISAPI, mas o servidor principal precisava ter conhecimento do ISAPI WebDAV para funcionar corretamente. A nova interface do módulo nativo do IIS é suficientemente avançada para que essas considerações sejam desnecessárias.
- **Administração**: o IIS tem uma nova interface de administração e repositório de configuração, e o novo módulo de extensão WebDAV é fortemente integrado a esse novo design. A antiga metabase do IIS 6.0 se foi e um novo repositório de configuração baseado no formato de.config baseado em XML do .NET tomou seu lugar. Além disso, o IIS tem uma nova ferramenta de administração e o novo módulo de extensão WebDAV conecta-se perfeitamente a esse paradigma.

![Captura de tela do Gerenciador IIS com a guia Home do Site Padrão exibida. O ícone Regras de Criação da Web DAV é realçado e circulado.](what39s-new-for-webdav-and-iis-7/_static/image3.jpg)

#### Configuração do WebDAV

- **Configuração Específica do WebDAV**: o WebDAV antigo "sobrecarregou" várias configurações do IIS. Por exemplo, a configuração padrão de "navegação de diretório" do IIS também controlou o acesso ao diretório por meio do verbo PROPFIND webDAV. Esse é um problema para alguns administradores de site que gostariam de habilitar o acesso PROPFIND sem habilitar a navegação de diretório. A nova implementação do WebDAV aproveita o esquema de configuração extensível do IIS e a ferramenta de administração extensível para desacoplar essas configurações e fornecer um controle mais refinado sobre o comportamento do WebDAV.
- **Configurações do WebDAV por Site**: WebDAV no IIS 7.0 e posteriores pode ser habilitado no nível do site, ao contrário do IIS 6.0, que habilitava o WebDAV no nível do servidor por meio de uma Web Service Extension.
- **Configurações de Segurança Por URL**: o novo módulo de extensão WebDAV oferece suporte a regras de autoria por URL, permitindo que os administradores especifiquem as configurações de segurança WebDAV personalizadas por URL. Essas regras de criação são separadas das regras de autorização por URL do IIS, permitindo assim um conjunto de configurações de segurança para solicitações HTTP normais e um conjunto separado de configurações de segurança para criação de WebDAV.
- **Suporte para bloqueios compartilhados e exclusivos**: A nova extensão WebDAV oferece suporte a bloqueios compartilhados e exclusivos para evitar a perda de atualizações causadas por sobrescritas.

![Captura de tela da tela de Configurações de Web D A V.](what39s-new-for-webdav-and-iis-7/_static/image11.jpg)

## Introdução ao WebDAV

### Passo a passo do WebDAV

Para ajudar você a começar a trabalhar com o WebDAV no IIS, a Microsoft escreveu os seguintes passo a passo:

- [Instalando e configurando o WebDAV no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=105146)
- [Como gerenciar o WebDAV usando o AppCmd](publish__using-webdav__how-to-configure-webdav-settings-using-appcmd.md)
- [Como configurar o WebDAV e a Filtragem de Solicitações](https://go.microsoft.com/fwlink/?LinkId=108321)
- [Migrando sites FPSE para WebDAV](https://go.microsoft.com/fwlink/?LinkId=108347)
- [Como usar propriedades personalizadas com WebDAV](https://go.microsoft.com/fwlink/?LinkId=108320)
- [Como usar bloqueios WebDAV](https://go.microsoft.com/fwlink/?LinkId=141617)

### Suporte da comunidade

A Microsoft fornece suporte técnico assistido pelo cliente para WebDAV por meio dos canais normais descritos no site da Microsoft <https://support.microsoft.com/> .

Além disso, a Microsoft também fornece suporte à comunidade para WebDAV por meio dos seguintes fóruns públicos:

- [IIS7 – Publicação](https://forums.iis.net/1045.aspx)

### Alterações e problemas conhecidos no WebDAV para IIS 7.0 e superior

Observação

Notas adicionais de instalação podem ser encontradas no documento "[Instalando e configurando o WebDAV no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=105146)" no site da <https://www.iis.net/> Microsoft.

As seguintes alterações ou problemas são conhecidos para esta versão:

- O IIS pode ser desinstalado depois que o novo módulo de extensão WebDAV tiver sido instalado. Isso fará com que a extensão WebDAV deixe de funcionar. Além disso, se você reinstalar o IIS depois disso, o módulo WebDAV ainda falhará porque algumas das configurações do WebDAV estariam ausentes do arquivo applicationHost.config do IIS. Sua melhor solução é desinstalar o WebDAV depois de desinstalar o IIS.
- Embora muitos recursos baseados na Web possam ser delegados a gerenciadores remotos e adicionados a arquivos web.config usando a nova infraestrutura de configuração do IIS, os recursos do módulo de extensão WebDAV não podem ser delegados ou armazenados em arquivos web.config.
- PROPFINDs anônimos são permitidos para listagens de arquivos, mas uploads de arquivos e solicitações GET baseadas em WebDAV exigem um usuário autenticado. Essa é uma alteração do IIS 6.0, em que uploads/downloads de arquivos WebDAV anônimos podem ser habilitados abrindo sua segurança. No WebDAV para IIS 7.0 e superior, alteramos esse comportamento para que todas as atividades webDAV exigissem autenticação, mas permitimos o uso de PROPFINDs anônimos para compatibilidade com versões anteriores com alguns clientes WebDAV. (Mais especificamente, as solicitações GET baseadas em PUT, MKCOL, PROPPATCH, COPY, MOVE, DELETE e WEBDAV exigem autenticação.)
- O novo módulo WebDAV dá suporte a um repositório de propriedades simples que usa um arquivo separado que permite copiar facilmente suas propriedades entre servidores. (No IIS 6.0, as propriedades eram armazenadas em um fluxo de dados alternativo do NTFS, dificultando a cópia de suas propriedades entre sistemas de arquivos diferentes.)

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
