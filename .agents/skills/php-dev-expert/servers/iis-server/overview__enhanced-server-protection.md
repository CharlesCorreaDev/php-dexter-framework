# Proteção avançada do servidor | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/overview/enhanced-server-protection

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

# Proteção avançada do servidor

Comentários

O IIS maximiza a segurança do servidor Web por padrão com um volume mínimo de servidor Web e isolamento automático do aplicativo.

## Minimizar o volume do servidor Web

Os administradores podem depender do IIS para uma hospedagem mais segura de aplicativos Web. O IIS foi reprojetado do zero para incorporar uma arquitetura modular que permite aos administradores personalizar seus servidores Web instalando ou removendo módulos seletivamente. Os administradores podem instalar apenas os recursos que lidam com as necessidades da empresa, eliminando as reduções de desempenho do servidor e os riscos de segurança que vêm com a execução da funcionalidade de servidor não utilizado. Os administradores podem minimizar facilmente a superfície de ataque e manutenção, bem como reduzir o volume de memória do processo. Somente os módulos necessários para executar o IIS como um servidor de imagem estático são instalados por padrão no IIS. A instalação padrão permite que o administrador de TI comece a partir da base mais segura, adicionando em módulos somente conforme necessário pelos aplicativos e serviços hospedados no servidor Web.

## Suporte do Windows Server Core

Para limitar ainda mais a exposição à segurança, os administradores podem optar por instalar um ambiente mínimo com a opção de instalação Server Core do Windows Server 2008. O Server Core omite serviços gráficos e a maioria das bibliotecas, em favor de um sistema controlado por linha de comando despojado. O Server Core pode ser administrado localmente por meio do appCmd do utilitário de linha de comando do IIS ou remotamente usando o WMI. Como o Server Core tem um número seleto de funções, ele pode melhorar a segurança e reduzir o volume do sistema operacional. Com menos arquivos instalados e em execução no servidor, há menos vetores de ataque expostos à rede; portanto, há menos de uma superfície de ataque. Os administradores podem instalar apenas os serviços específicos necessários para um determinado servidor, mantendo o risco de exposição no mínimo absoluto.

## Isolamento automático de site da Web

O IIS oferece maior isolamento de aplicativos, dando aos processos de trabalho uma identidade completamente exclusiva e configuração em área restrita por padrão, reduzindo ainda mais os riscos de segurança. O IIS inclui isolamento automático de pools de aplicativos e pode isolar milhares de sites em um único servidor. Isso permite que cada site seja executado em seu próprio espaço de memória com uma identidade exclusiva e gerada automaticamente, o que ajuda a garantir que os aplicativos não sejam afetados por outras falhas ou violações de segurança de aplicativos em execução no mesmo servidor. Essa funcionalidade permite que as organizações consolidem mais sites na Web em menos servidores e aumenta a segurança e a confiabilidade de todos os sites em execução em um host compartilhado.

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
