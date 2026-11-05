# Novos recursos introduzidos no IIS 10.0, versão 1809 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-10-version-1809/new-features-introduced-in-iis-10-1809

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

# Novos recursos introduzidos no IIS 10.0, versão 1809

Comentários

O IIS 10.0 versão 1809 é a versão mais recente do IIS (Serviços de Informações da Internet) que foi fornecida com o Windows 10 October 2018 Update e o Windows Server 2019. Este artigo descreve a nova funcionalidade do IIS e fornece links para recursos para saber mais sobre esses recursos.

O IIS 10.0 versão 1809 será uma atualização cumulativa se você estiver atualizando do Windows Server 2016 e incluir todos os recursos introduzidos na versão 1709 e versão 1803.

## Novos sinalizadores de associação

Introduzimos suporte para stapling OCSP no IIS 7.0 e suporte para HTTP/2 no IIS 10.0, mas eles só eram controlados em um nível de todo o sistema. No IIS 10.0 versão 1809 e posterior, você pode controlar tanto o OCSP Stapling quanto o HTTP/2 com base em cada associação.

## Nova API de compactação

Os módulos de compactação estática e dinâmica no IIS fornecem suporte para provedores de esquema de compactação pluggável. Como parte do IIS 10.0 versão 1809, introduzimos uma [nova API de compactação](https://msdn.microsoft.com/library/mt846747(v=vs.90).aspx) que os esquemas de compactação podem implementar opcionalmente para dar melhor suporte à compactação de dados de streaming. O novo [módulo de compactação do IIS](extensions__iis-compression__iis-compression-overview.md) que adiciona um novo esquema de compactação gzip (com melhor para dados de streaming) e um esquema de compactação Brotli usam essa API.

## Interface do usuário para segurança de transporte estrito HTTPS

Suporte para Segurança de Transporte Estrito HTTPS (HSTS) que foi introduzido no IIS 10.0, versão 1709, agora tem uma nova interface de usuário no Gerenciador do IIS para gerenciar esse recurso. A nova interface do usuário é acessível por meio da seção **Configurar** na barra **Ações** para cada site.

![Interface do usuário para HSTS](hsts.png)

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
  2026-02-09
