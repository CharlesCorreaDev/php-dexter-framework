# SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.snmp.php

---

# SNMP

# Introdução

A extensão SNMP provê um kit de ferramentas muito simples e fácil de usar para
controlar dispositivos remotos através do Simple Network Management Protocol.

Como é um encapsulador da biblioteca básica Net-SNMP,
todos os conceitos básicos são os mesmos e as funções PHP alteram
seus comportamentos dependendo dos arquivos de configuração Net-SNMP e das variáveis de ambiente.

Mais informações sobre o Net-SNMP podem ser encontradas em
[» https://www.net-snmp.org/](https://www.net-snmp.org/)

- [Instalação/Configuração](snmp.setup.md)
  - [Dependências](snmp.requirements.md)
  - [Instalação](snmp.installation.md)
- [Constantes predefinidas](snmp.constants.md)
- [Funções de SNMP](ref.snmp.md)
  - [snmp\_get\_quick\_print](function.snmp-get-quick-print.md) — Busca o valor atual da configuração quick\_print da biblioteca NET-SNMP
  - [snmp\_get\_valueretrieval](function.snmp-get-valueretrieval.md) — Retorna o método como os valores SNMP serão retornados
  - [snmp\_read\_mib](function.snmp-read-mib.md) — Lê e analisa um arquivo MIB na árvore MIB ativa
  - [snmp\_set\_enum\_print](function.snmp-set-enum-print.md) — Retorna todos os valores que são enumerações com seus valores de enumeração em vez do inteiro bruto
  - [snmp\_set\_oid\_numeric\_print](function.snmp-set-oid-numeric-print.md) — Sinônimo de snmp\_set\_oid\_output\_format
  - [snmp\_set\_oid\_output\_format](function.snmp-set-oid-output-format.md) — Define o formato de saída do OID
  - [snmp\_set\_quick\_print](function.snmp-set-quick-print.md) — Define o valor de enable dentro da biblioteca NET-SNMP
  - [snmp\_set\_valueretrieval](function.snmp-set-valueretrieval.md) — Especifica o método como os valores SNMP serão retornados
  - [snmp2\_get](function.snmp2-get.md) — Busca um objeto SNMP
  - [snmp2\_getnext](function.snmp2-getnext.md) — Busca o objeto SNMP que segue o ID do objeto fornecido
  - [snmp2\_real\_walk](function.snmp2-real-walk.md) — Retorna todos os objetos, incluindo seus respectivos IDs de objeto dentro do especificado
  - [snmp2\_set](function.snmp2-set.md) — Define o valor de um objeto SNMP
  - [snmp2\_walk](function.snmp2-walk.md) — Busca todos os objetos SNMP de um agente
  - [snmp3\_get](function.snmp3-get.md) — Busca um objeto SNMP
  - [snmp3\_getnext](function.snmp3-getnext.md) — Busca o objeto SNMP que segue o ID do objeto fornecido
  - [snmp3\_real\_walk](function.snmp3-real-walk.md) — Retorna todos os objetos, incluindo seus respectivos IDs de objeto dentro do especificado
  - [snmp3\_set](function.snmp3-set.md) — Define o valor de um objeto SNMP
  - [snmp3\_walk](function.snmp3-walk.md) — Busca todos os objetos SNMP de um agente
  - [snmpget](function.snmpget.md) — Busca um objeto SNMP
  - [snmpgetnext](function.snmpgetnext.md) — Busca o objeto SNMP que segue o ID do objeto fornecido
  - [snmprealwalk](function.snmprealwalk.md) — Retorna todos os objetos, incluindo seus respectivos IDs de objeto dentro do especificado
  - [snmpset](function.snmpset.md) — Define o valor de um objeto SNMP
  - [snmpwalk](function.snmpwalk.md) — Busca todos os objetos SNMP de um agente
  - [snmpwalkoid](function.snmpwalkoid.md) — Consulta uma árvore de informações sobre uma entidade de rede
- [SNMP](class.snmp.md) — A classe SNMP
  - [SNMP::close](snmp.close.md) — Fecha a sessão SNMP
  - [SNMP::\_\_construct](snmp.construct.md) — Cria uma instância SNMP representando a sessão para o agente SNMP remoto
  - [SNMP::get](snmp.get.md) — Busca um objeto SNMP
  - [SNMP::getErrno](snmp.geterrno.md) — Obtém o último código de erro
  - [SNMP::getError](snmp.geterror.md) — Obtém a última mensagem de erro
  - [SNMP::getnext](snmp.getnext.md) — Busca um objeto SNMP que
    segue o ID do objeto fornecido
  - [SNMP::set](snmp.set.md) — Define o valor de um objeto SNMP
  - [SNMP::setSecurity](snmp.setsecurity.md) — Configura parâmetros de sessão SNMPv3 relacionados à segurança
  - [SNMP::walk](snmp.walk.md) — Busca subárvore de objetos SNMP
- [SNMPException](class.snmpexception.md) — A classe SNMPException

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
