# Localização geográfica do IP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.geoip.php

---

# Localização geográfica do IP

# Introdução

A extensão GeoIP permite encontrar a localização de um endereço IP. Cidade,
estado, país, longitude, latitude e outras informações como
Provedor de Serviço de Internet e tipo de conexão podem ser obtidas com a ajuda do GeoIP.

**Aviso**

Esta extensão não suporta os bancos de dados "GeoIP2" atuais da MaxMind,
apenas os arquivos de banco de dados "GeoIP legados".

- [Instalação/Configuração](geoip.setup.md)
  - [Dependências](geoip.requirements.md)
  - [Instalação](geoip.installation.md)
  - [Configurações de Execução](geoip.configuration.md)
- [Constantes predefinidas](geoip.constants.md)
- [Funções de GeoIP](ref.geoip.md)
  - [geoip\_asnum\_by\_name](function.geoip-asnum-by-name.md) — Obtém os Números do Sistema Autônomo (ASN)
  - [geoip\_continent\_code\_by\_name](function.geoip-continent-code-by-name.md) — Obtém o código de duas letras do continente
  - [geoip\_country\_code\_by\_name](function.geoip-country-code-by-name.md) — Obtém o código de país de duas letras
  - [geoip\_country\_code3\_by\_name](function.geoip-country-code3-by-name.md) — Obtenha o código de país de três letras
  - [geoip\_country\_name\_by\_name](function.geoip-country-name-by-name.md) — Obtém o nome completo do país
  - [geoip\_database\_info](function.geoip-database-info.md) — Obtém informações do banco de dados GeoIP
  - [geoip\_db\_avail](function.geoip-db-avail.md) — Determina se o banco de dados GeoIP está disponível
  - [geoip\_db\_filename](function.geoip-db-filename.md) — Retorna o nome do arquivo do banco de dados GeoIP correspondente
  - [geoip\_db\_get\_all\_info](function.geoip-db-get-all-info.md) — Retorna informações detalhadas sobre todos os tipos de banco de dados GeoIP
  - [geoip\_domain\_by\_name](function.geoip-domain-by-name.md) — Obtém o nome de domínio de segundo nível
  - [geoip\_id\_by\_name](function.geoip-id-by-name.md) — Obtém o tipo de conexão com a Internet
  - [geoip\_isp\_by\_name](function.geoip-isp-by-name.md) — Obtém o nome do Provedor de Serviços de Internet (ISP)
  - [geoip\_netspeedcell\_by\_name](function.geoip-netspeedcell-by-name.md) — Obtém a velocidade de conexão da Internet
  - [geoip\_org\_by\_name](function.geoip-org-by-name.md) — Obtém o nome da organização
  - [geoip\_record\_by\_name](function.geoip-record-by-name.md) — Retorna as informações detalhadas da cidade encontradas no banco de dados GeoIP
  - [geoip\_region\_by\_name](function.geoip-region-by-name.md) — Obtém o código do país e a região
  - [geoip\_region\_name\_by\_code](function.geoip-region-name-by-code.md) — Retorna o nome da região para alguma combinação de código de país e região
  - [geoip\_setup\_custom\_directory](function.geoip-setup-custom-directory.md) — Define um diretório personalizado para o banco de dados GeoIP
  - [geoip\_time\_zone\_by\_country\_and\_region](function.geoip-time-zone-by-country-and-region.md) — Retorna o fuso horário para alguma combinação de código de país e região

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
