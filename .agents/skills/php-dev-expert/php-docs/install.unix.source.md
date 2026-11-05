# Instalando a partir do código-fonte em sistemas Unix e macOS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.unix.source.php

---

## Instalando a partir do código-fonte em sistemas Unix e macOS

Software pré-requisito para compilação:

- [» GNU **make**](https://www.gnu.org/software/make/make.html)
- Compilador AC (a partir do PHP 8.0.0, a compatibilidade com C99 é necessária; a partir do PHP 8.4.0, a compatibilidade com C11 é necessária)
- Um servidor web
- Quaisquer componentes específicos do módulo (como bibliotecas GD,
  PDF, etc.)

Ao compilar diretamente de fontes Git ou após modificações personalizadas,
estas ferramentas adicionais podem ser necessárias:

- [» autoconf](https://www.gnu.org/software/autoconf/autoconf.html):

  - PHP 7.3 e posteriores: 2.68+
  - PHP 7.2: 2.64+
  - PHP 7.1 e anteriores: 2.59+
- [» re2c](https://re2c.org/):

  - PHP 8.3 e posteriores: 1.0.3+
  - PHP 8.2 e anteriores: 0.13.4+
- [» bison](https://www.gnu.org/software/bison/bison.html):

  - PHP 7.4 e posteriores: 3.0.0+
  - PHP 7.3 e anteriores: 2.4+ (incluindo Bison 3.x)

Para as etapas mais detalhadas da compilação do PHP a partir da fonte, consulte o
[» README.md](https://github.com/php/php-src/blob/master/README.md)
no pacote do código-fonte.

O processo inicial de instalação e configuração do PHP é controlado pelo
uso das opções de linha de comando do script **configure**.
Uma lista de opções disponíveis junto com breves explicações pode
ser mostrada executando **./configure --help**.
Este manual documenta as diferentes opções separadamente.
As [opções principais podem ser encontradas no
apêndice](configure.about.md), enquanto as diferentes opções específicas de extensão são
descritas nas páginas de referência.

Após a execução do script de configuração, o PHP pode ser construído usando
o comando **make**.
A [seção de Instalação das Perguntas
Frequentes](faq.installation.md) contém mais informações sobre como lidar com problemas
de compilação.

> **Nota**:
>
> Alguns sistemas Unix (como OpenBSD e SELinux) podem proibir o mapeamento
> de páginas graváveis ​​e executáveis ​​por motivos de segurança, o que é chamado
> de [» PaX MPROTECT](https://en.wikibooks.org/wiki/Grsecurity/Appendix/Grsecurity_and_PaX_Configuration_Options#Restrict_mprotect())
> ou [» proteção contra
> violação W^X](https://en.wikipedia.org/wiki/W^X).
> Este tipo de mapeamento de memória é necessário para o suporte JIT do PCRE, então
> ou o PHP deve ser construído [sem
> o suporte JIT do PCRE](pcre.installation.md), ou o binário deve ser colocado na lista de permissões
> por qualquer meio fornecido pelo sistema.

> **Nota**:
>
> Atualmente, a compilação cruzada para ARM com o conjunto de ferramentas Android não é suportada.

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
