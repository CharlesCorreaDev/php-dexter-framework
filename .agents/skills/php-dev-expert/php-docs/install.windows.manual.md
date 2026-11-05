# Instalação Manual de binários pré-compilados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.windows.manual.php

---

## Instalação Manual de binários pré-compilados

### Requisitos de instalação

O PHP está disponível somente para sistemas x86 de 32 bits ou x64 de 64 bits, e
atualmente não funciona em Windows RT ou Windows em processadores ARM.
A partir da versão 8.3.0, o PHP requer Windows 8 ou Windows Server 2012.
Versões posteriores à 7.2.0 requerem Windows 2008 R2 ou Windows 7.
Versões anteriores à 7.2.0 suportam Windows 2008 e Vista.

O PHP requer o Visual C Runtime (CRT). Muitas outras aplicações também o
requerem, portanto é bem provável que ele já esteja instalado, mas se não estiver,
o Microsoft Visual C++ Redistributable para Visual Studio 2022
é adequado para uso com todas as versões do PHP e pode ser
[» obtido da Microsoft](https://visualstudio.microsoft.com/downloads/#microsoft-visual-c-redistributable-for-visual-studio-2022).

O CRT x86 precisa ser obtido para uso com compilações PHP x86 e o
CRT x64 para compilações PHP x64.
Se o CRT já estiver instalado, o instalador mostrará uma mensagem
avisando sobre isso e não fará nenhuma alteração.
O instalador do CRT suporta as opções de linha de comando **/quiet** e
**/norestart**, assim a instalação pode ser
feita através de scripts.

### Onde obter os binários do PHP

Binários do Windows podem ser obtidos no [»  site
do PHP para Windows](https://windows.php.net/download/).
Todos os binários são otimizados (PGO), e as versões QA e GA
são extensamente testadas.

### Extensões PECL pré-compiladas

Versões de extensões PECL pré-compiladas para Windows são distribuídas como
arquivos DLL na página PECL da extensão.

Os binários não estão disponíveis para extensões que usam recursos específicos
para outros sistemas, como Unix, ou que dependem de bibliotecas que não estão
disponíveis no Windows.

### Tipos de Compilação

Existem 4 tipos de compilação do PHP:

- Thread-Safe (TS) - para servidores web de processo único, como Apache com mod\_php.
- Non-Thread-Safe (NTS) - para IIS e outros servidores web FastCGI (Apache com mod\_fastcgi) e recomendado para scripts de linha de comando.
- x86 - para sistemas de 32 bits.
- x64 - para sistemas de 64 bits.

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
