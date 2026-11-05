# Configuração recomendada em sistemas Windows

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.windows.recommended.php

---

## Configuração recomendada em sistemas Windows

### OpCache

É altamente recomendado habilitar o OpCache.
Esta extensão é incluída no PHP para Windows.
Ela compila e otimiza os scripts PHP e os mantém na memória cache para
que não sejam compilados toda vez que uma página é carregada.

Configure o php.ini:

**Exemplo #1 Configuração recomendada do OpCache**

```
opcache.enable=On
opcache.enable_cli=On
```

Reinicie o servidor web.
Para mais informações, consulte: [Configuração OpCache](opcache.configuration.md)

### WinCache

Recomenda-se usar o WinCache se o IIS for usado, especialmente em um ambiente
de hospedagem web compartilhado ou em armazenamento de arquivos de rede (NAS).
Todas as aplicações PHP se beneficiam automaticamente do recurso de cache de arquivo do WinCache. Operações do sistema de arquivos são armazenadas em cache.
WinCache também armazena em cache objetos de usuário e compartilha-os entre os processos php.exe ou php-cgi.exe (compartilha objetos entre requisições).
Muitas das grandes aplicações web têm um plugin ou extensão ou opção de configuração para uso do WinCache para cache de objetos de usuário.
Se um alto desempenho é requerido, deve-se usar cache de objetos na aplicação.
Consulte: [» https://pecl.php.net/package/WinCache](https://pecl.php.net/package/WinCache)
para baixar uma DLL WinCache (or WINCACHE\_\*.tgz)
para o diretório de extensões do PHP
([extension\_dir](ini.core.md#ini.extension-dir) no php.ini).
Configure o php.ini:

**Exemplo #2 Configuração WinCache recomendada**

```
extension=php_wincache.dll
wincache.fcenabled=1
wincache.ocenabled=1 ; removida a partir do wincache 2.0.0.0
```

Para mais informações, consulte:
[Configuração WinCache](wincache.configuration.md)

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
