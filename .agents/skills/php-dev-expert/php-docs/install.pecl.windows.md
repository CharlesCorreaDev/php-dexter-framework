# Instalando uma extensão PHP no Windows

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.pecl.windows.php

---

## Instalando uma extensão PHP no Windows

**Aviso**

PECL está obsoleto.
O PHP Installer for Extensions (PIE) substitui o PECL e é o recomendado para instalar extensões.
Descubra mais em [» https://github.com/php/pie](https://github.com/php/pie)

Existem duas maneiras de carregar uma extensão PHP no Windows: compilando-a
no PHP ou carregando a DLL.
Carregar uma extensão pré-compilada é a maneira mais fácil e preferida.

Para carregar uma extensão, ela deve estar disponível como um arquivo
.dll
no sistema.
Todas as extensões são compiladas automaticamente e periodicamente pelo PHP
Group (veja a próxima seção para download).

Para compilar uma extensão no PHP, consulte a documentação sobre
[compilação do código-fonte](install.windows.building.md).

Para compilar uma extensão independente (um arquivo DLL), consulte a
documentação sobre
[compilação do código-fonte](install.windows.building.md).
Se a DLL não estiver disponível na distribuição do PHP nem no PECL,
pode ser necessário compilá-la antes que a extensão possa ser usada.

### Onde encontrar uma extensão?

As extensões do PHP geralmente são chamadas de
php\_\*.dll
(onde o asterisco representa o nome da extensão) e estão localizadas no
diretório PHP\ext.

O PHP vem com as extensões mais úteis para a maioria dos desenvolvedores.
Elas são chamadas extensões *nativas* do PHP.

Entretanto, se as extensões nativas não fornecerem a funcionalidade necessária,
uma extensão que ofereça essa funcionalidade ainda pode ser encontrada no [» PECL](https://pecl.php.net/).
A biblioteca comunitária de extensões PHP (PECL) é um repositório de extensões PHP, que fornece um
diretório de todas as extensões conhecidas e recursos de hospedagem para
download e desenvolvimento de extensões PHP.

Se uma extensão foi desenvolvida para usos específicos, ela pode ser hospedada no
PECL para que outras pessoas com as mesmas necessidades possam se beneficiar delas.
Um bom efeito colateral é que é uma excelente chance de receber feedbacks,
agradecimentos, relatórios de erros e até mesmo correções/patches.
Antes de enviar uma extensão para hospedagem no PECL, consulte sobre
[» Submissão ao PECL](https://pecl.php.net/package-new.php).

### Qual extensão baixar?

*Muitas vezes, haverá várias versões disponíveis de cada DLL:*

- Números de versão diferentes (pelo menos os dois primeiros números devem corresponder)
- Versões de thread safety diferentes
- Arquitetura de processador diferente (x86, x64, ...)
- Configurações de depuração diferentes
- `etc.`

Lembre-se de que as configurações de extensão devem corresponder a todas as
configurações do executável PHP que está sendo usado.
O script a seguir informará *tudo* sobre as configurações
do PHP:

**Exemplo #1
A função
[phpinfo()](function.phpinfo.md)**

```
<?php
phpinfo();
?>
```

Ou na linha de comando, execute:

```
drive:\caminho\para\o\executavel\php.exe -i
```

### Carregando uma extensão

A forma mais comum de carregar uma extensão PHP é incluí-la no
arquivo de configuração php.ini.
Observe que muitas extensões já estão presentes no php.ini e
só é preciso remover o ponto e vírgula para ativá-las.

A partir do PHP 7.2.0, o nome da extensão pode ser usado
ao invés do nome do arquivo da extensão.
Como é independente do sistema operacional é mais fácil, especialmente para iniciantes, essa
é a maneira recomendada de especificar as extensões a serem carregadas.
Os nomes dos arquivos continuam suportados para compatibilidade com versões anteriores.

```
;extension=php_extname.dll
```

```
extension=php_extname.dll
```

```
; A partir do PHP 7.2.0, prefira:
extension=extname
zend_extension=another_extension
```

No entanto, isso pode causar confusão em alguns servidores web porque eles
não usam o arquivo php.ini localizado junto do executável PHP.
Para descobrir onde o arquivo php.ini está, procure seu caminho na
função [phpinfo()](function.phpinfo.md):

```
Configuration File (php.ini) Path  C:\WINDOWS
```

```
Loaded Configuration File   C:\Program Files\PHP\8.2\php.ini
```

Depois de ativar uma extensão, salve o arquivo php.ini, reinicie o
servidor web e verifique a função [phpinfo()](function.phpinfo.md) novamente.
A nova extensão agora deve ter sua própria seção.

### Resolvendo problemas

Se uma extensão não aparecer na função [phpinfo()](function.phpinfo.md),
os logs devem ser verificados para saber de onde vem o problema.

Se o PHP estiver sendo usado na linha de comando (CLI),
os erros de carregamento da extensão podem ser lidos diretamente na tela.

Se o PHP estiver sendo usado com um servidor web, a localização e o formato
dos logs irão variar dependendo do software usado.
Consulte a documentação do servidor web para localizar os logs,
pois isso não está relacionado com o PHP.

Problemas comuns são a localização da DLL e das DLLs das quais ela depende,
o valor da diretiva "[extension\_dir](ini.core.md#ini.extension-dir)"
no arquivo php.ini e incompatibilidades de configuração em tempo de compilação.

Se o problema estiver em uma incompatibilidade de configuração em tempo de
compilação, provavelmente a DLL errada foi baixada.
Tente baixar novamente a extensão com as configurações corretas.
Novamente, a função [phpinfo()](function.phpinfo.md) pode ser de grande ajuda.

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
