# Novos recursos introduzidos no IIS 10.0 versão 1709 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-10-version-1709/new-features-introduced-in-iis-10-1709

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

# Novos recursos introduzidos no IIS 10.0 versão 1709

Comentários

O IIS 10.0 versão 1709 é a versão mais recente do IIS (Serviços de Informações da Internet) que foi fornecida com o Windows 10 Fall Creators Update e o Window Server 2016 Versão 1709. Este artigo descreve a nova funcionalidade do IIS e fornece links para recursos para saber mais sobre esses recursos.

## Segurança de Transporte Estrito HTTP (HSTS)

O HTTP Strict Transport Security (HSTS), especificado no [RFC 6797](https://tools.ietf.org/html/rfc6797), permite que um site se declare como um host seguro e informe aos navegadores que ele deve ser contatado apenas por meio de conexões HTTPS. O IIS 10.0 Versão 1709 apresenta suporte pronto para uso para habilitar o HSTS sem a necessidade de regras de reescrita de URL propensas a erros.

Saiba mais: [HSTS](get-started__whats-new-in-iis-10-version-1709__iis-10-version-1709-hsts.md)

## Aprimoramentos de contêiner

O IIS 10.0 Versão 1709 apresenta melhorias que permitem executar o processo de trabalho do IIS (w3wp.exe) diretamente, bem como alterações no CCS (Provedor Central de Certificados) que o tornam mais passível de execução em contêineres.

## Cmdlets do PowerShell de IISAdministration

O IIS 10.0 introduziu os cmdlets do PowerShell de Administração do IIS. A versão 1709 é fornecida com melhorias iterativas e três novos cmdlets: `Get-IISSiteBinding`,`New-IISSiteBinding`e `Remove-IISSiteBinding`. Além disso, trabalhamos para disponibilizar a versão mais recente do IISAdministration na PowerShell Gallery, disponível para uso com o Windows Server 2012 ou posterior.

Saiba mais: [Administração do IIS na Galeria do PowerShell](https://blogs.iis.net/iisteam/introducing-iisadministration-in-the-powershell-gallery)

## Aprimoramentos de Registro

No IIS 10.0 versão 1709, introduzimos novas variáveis de servidor para o Protocolo Criptográfico, o algoritmo de criptografia, o algoritmo de Troca de Chaves e o Algoritmo de Autenticação de Mensagem. Essas novas variáveis foram documentadas na lista de [Variáveis de Servidor do IIS](web-dev-reference__server-variables.md)

Saiba mais: [Funcionalidade do IIS para identificar o uso fraco do TLS](https://cloudblogs.microsoft.com/microsoftsecure/2017/09/07/new-iis-functionality-to-help-identify-weak-tls-usage/)

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
