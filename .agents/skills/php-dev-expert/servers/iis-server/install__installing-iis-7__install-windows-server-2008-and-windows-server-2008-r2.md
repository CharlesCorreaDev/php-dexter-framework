# Instalar o Windows Server 2008 e o Windows Server 2008 R2 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/install-windows-server-2008-and-windows-server-2008-r2

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

# Instalar o Windows Server 2008 e o Windows Server 2008 R2

Comentários

por Tali Smith

## Introdução

A Plataforma Web da Microsoft® é um conjunto poderoso de ferramentas, servidores e tecnologias otimizadas para criar e hospedar soluções e aplicativos Web de última geração. Na base da Plataforma Web da Microsoft está o Windows Server® 2008, o Windows Server® 2008 R2 ou outra versão do sistema operacional Windows Server®. O Windows Server 2008 R2 vem com o IIS 7.5 (Serviços de Informações da Internet 7.5), um servidor Web e uma plataforma aprimorada de segurança para desenvolver e hospedar serviços e aplicativos Web de forma confiável. O Windows Server 2008 vem com o IIS 7.0. O IIS 7.0 e 7.5 (juntos conhecidos como IIS 7) incluem uma arquitetura componenteda para maior flexibilidade e controle. O IIS 7 e superior também fornece gerenciamento simplificado e recursos avançados de diagnóstico e solução de problemas. As extensões do Gerenciador do IIS facilitam a administração de servidores Web locais e remotos.

O IIS 7 e superior, juntamente com o Microsoft® .NET Framework 3.0, fornece uma plataforma abrangente para a criação de aplicativos. Além disso, o IIS desempenha um papel central na unificação das tecnologias da plataforma Web da Microsoft– Microsoft® ASP.NET,® serviços Web do Windows Communication Foundation (WCF) e Windows® SharePoint® Services.

Este artigo descreve os procedimentos gerais para instalar o Windows Server 2008 ou o Windows Server 2008 R2; links para obter informações mais detalhadas podem ser encontrados ao longo do artigo. Depois de instalar o Windows Server 2008 ou o Windows Server 2008 R2, você precisará instalar o IIS.

## Edições do sistema operacional

O Windows Server 2008 e o Windows Server 2008 R2 estão disponíveis em várias edições para dar suporte às diferentes necessidades de servidor e carga de trabalho das organizações. As quatro edições principais incluem Windows Server® 2008 R2 Standard, Windows Server® 2008 R2 Enterprise, Windows Server® 2008 R2 Datacenter e Windows® Web Server 2008 R2 (ou Windows Server® 2008 Standard, Windows Server® 2008 Enterprise, Windows Server® 2008 Datacenter e Windows® Web Server 2008). Consulte [Visão geral das edições](https://www.microsoft.com/windowsserver2008/en/us/r2-editions-overview.aspx) para obter informações mais detalhadas sobre as várias edições do Windows Server 2008 R2 e do Windows Server 2008.

## Requisitos de Hardware

***Processador****– O desempenho do processador depende não apenas da frequência do relógio do processador, mas também do número de núcleos do processador e do tamanho do cache do processador. Veja a seguir os requisitos do processador:*

- **Mínimo:** 1 GHz (para processadores x86) ou 1,4 GHz (para processadores x64)
- **Recomendado:** 2 GHz ou mais rápido

***RAM****— A seguir estão os requisitos de RAM:*

- **Mínimo:** 512 MB
- **Recomendado:** 2 GB ou mais
- **Máximo (sistemas de 32 bits):** 4 GB (para Windows Server 2008 Standard) ou 64 GB (para Windows Server 2008 Enterprise ou Windows Server 2008 Datacenter)
- **Máximo (sistemas de 64 bits):** 32 GB (para Windows Server 2008 Standard) ou 2 terabyte (para Windows Server 2008 Enterprise, Windows Server 2008 Datacenter ou Windows Server® 2008 para sistemas Itanium-Based)

***Requisitos de espaço*** em *disco – a seguir estão os requisitos de espaço em disco aproximados para a partição do sistema. Os sistemas operacionais baseados em Itanium e x64 variarão de acordo com essas estimativas. O espaço em disco adicional poderá ser necessário se você instalar o sistema em uma rede:*

- **Mínimo:** 10 GB
- **Recomendado:** 40 GB ou mais

  Observação

  Computadores com mais de 16 GB de RAM exigem mais espaço em disco para paginação, hibernação e arquivos de despejo.
- unidade DVD-ROM
- Super VGA (800 x 600) ou monitor de resolução superior
- Teclado e mouse (ou outro dispositivo de apontamento compatível)

Consulte [os requisitos de hardware e software para instalar o SQL Server 2008](https://technet.microsoft.com/library/ms143506.aspx) para obter mais informações.

## Instalar o Windows Server 2008 R2 ou o Windows Server 2008

A instalação do Windows Server 2008 ou do Windows Server 2008 R2 funciona em vários estágios: primeiro, você é solicitado a obter algumas informações básicas, incluindo onde deseja instalar o Windows®.

![Captura de tela da caixa de diálogo Instalar o Windows.](install-windows-server-2008-and-windows-server-2008-r2/_static/image3.jpg)

###### Figura 1: Fornecer informações básicas

Em seguida, o procedimento de instalação copia arquivos e reinicia o computador. O procedimento de instalação é concluído apresentando o menu Tarefas de Configuração Iniciais, que você pode usar para ajustar a configuração do servidor para suas necessidades específicas. Instruções detalhadas podem ser encontradas na [instalação do Windows Server 2008 R2](https://technet.microsoft.com/library/dd379511(WS.10).aspx) ou [na instalação do Windows Server 2008](https://technet.microsoft.com/library/cc755116.aspx).

### Opção Server Core

Observe que você pode optar por executar uma instalação do Server Core — uma instalação mínima do servidor do sistema operacional. Com a adição do .NET Framework ao Server Core no Windows Server 2008 R2, a opção de instalação do Server Core é ainda mais atraente para quem deseja usar um servidor de volume muito baixo para hospedar seus aplicativos. Para obter instruções detalhadas, consulte o [Guia de Introdução à Opção de Instalação do Server Core](https://technet.microsoft.com/library/cc753802(WS.10).aspx).

![Captura de tela da caixa de diálogo Instalar o Windows. O local em que você deseja instalar a tela do Windows é exibido.](install-windows-server-2008-and-windows-server-2008-r2/_static/image5.jpg)

###### Figura 2: opção Server Core

Com a opção de instalação Server Core, a interface tradicional do Windows não está instalada, portanto, você deve configurar o servidor no prompt de comando. Observe que, se você usar uma instalação do Server Core, não poderá instalar alguns módulos que dependem do .NET Framework ou do código gerenciado. Para obter mais informações, consulte [Usando o Server Core](manage__working-with-server-core.md).

## Configurar o Windows Server 2008 R2 ou o Windows Server 2008

Depois que a instalação do Windows Server 2008 ou do Windows Server 2008 R2 for concluída, faça logon no servidor pela primeira vez e a janela Tarefas de Configuração Iniciais será aberta automaticamente. Agora você pode configurar o novo servidor usando comandos na janela Tarefas de Configuração Inicial.

As tarefas de configuração incluem definir a senha do administrador (o padrão está em branco), alterar o nome da conta de administrador para melhorar a segurança do servidor (o padrão é "Administrador"), ingressar o servidor em um domínio existente (o padrão é "WORKGROUP"), alterar o nome do computador (o padrão é um nome gerado aleatoriamente), habilitar a Área de Trabalho Remota para o servidor, e habilitando o Windows® Update (o padrão está desativado) e o Firewall do Windows® (o padrão está ativado). Para obter mais informações, consulte [As Tarefas de Configuração Inicial do Windows Server](https://technet.microsoft.com/library/cc755215.aspx).

## Links para obter mais informações

- [Windows Server 2008 R2](https://www.microsoft.com/windowsserver2008/en/us/default.aspx).
- [Otimizando sua infraestrutura principal](https://www.microsoft.com/windowsserver2008/en/us/optimize-infrastructure.aspx).
- [Introdução à implantação do Windows Server 2008.](web-hosting__installing-infrastructure-components__introduction-to-deploying-windows-server-2008-r2.md)
- Instalando o Windows Server 2008 (`https://download.microsoft.com/download/e/6/3/e63cf2f6-7f71-450b-8e4a-dace88e99456/readme.htm`).
- [Comparação de edição por opção de instalação do Server Core](https://www.microsoft.com/windowsserver2008/en/us/r2-compare-core-installation.aspx).

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
